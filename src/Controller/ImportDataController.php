<?php

namespace App\Controller;

use App\Dto\ImportFileDto;
use App\Form\ImportFileType;
use App\Services\ClientApvServiceInterface;
use App\Services\ImportFileService;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ImportDataController extends AbstractController
{
    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * ImportDataController constructor.
     * @param LoggerInterface $logger
     */
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    /**
     * @Route("/import/data", name="app_import_data",methods={"GET","POST"})
     * @param Request $request
     * @param ImportFileService $importFileService
     * @param ClientApvServiceInterface $clientApvService
     * @return Response
     */
    public function index(Request $request, ImportFileService $importFileService, ClientApvServiceInterface $clientApvService): Response
    {
        $importFileDTO = new ImportFileDto();
        $form = $this->createForm(ImportFileType::class, $importFileDTO);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /**@var ImportFileDto $importFileDTO */
            $importFileDTO = $form->getData();
            $fileUploadedFile = $importFileDTO->getFilename();
            try {
                $data = $importFileService->importFile($fileUploadedFile);
                $clientApvService->batchStoreData($data);
                $this->addFlash('success', "Donnée importé avec succès!");
                $this->redirectToRoute('app_import_data');
            } catch (\Exception $e) {
                $this->logger->error($e->getTraceAsString());
                $this->addFlash('error', "Erreur lors de l'import de données");
                $this->redirectToRoute('app_import_data');
            }
        }
        return $this->renderForm('import_data/index.html.twig', [
            'form' => $form,
        ]);
    }
}
