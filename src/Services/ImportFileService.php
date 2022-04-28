<?php


namespace App\Services;


use App\Entity\ClientApv;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\String\Slugger\SluggerInterface;

class ImportFileService
{
    /**
     * @var SluggerInterface
     */
    private $slugger;
    /**
     * @var ContainerInterface
     */
    private $container;

    /**
     * FileUploadService constructor.
     * @param SluggerInterface $slugger
     * @param ContainerInterface $container
     */
    public function __construct(SluggerInterface $slugger, ContainerInterface $container)
    {
        $this->slugger = $slugger;
        $this->container = $container;
    }

    /**
     * @param UploadedFile $uploadedFile
     * @return array
     * @throws \Exception
     */
    public function importFile(UploadedFile $uploadedFile): array
    {
        $originalFilename = pathinfo($uploadedFile->getClientOriginalName(), PATHINFO_FILENAME);
        $safeFilename = $this->slugger->slug($originalFilename);
        $newFilename = $safeFilename . '-' . uniqid() . '.' . $uploadedFile->getClientOriginalExtension();
        $uploadedFile->move(
            $this->container->getParameter('brochures_directory'),
            $newFilename
        );
        $reader = new Xlsx();
        $reader->setReadDataOnly(true);
        $filePath = implode('/', [$this->container->getParameter('brochures_directory'), $newFilename]);
        $reader->setLoadSheetsOnly(["CLIENTS APV A-2 A"]);
        $spreadsheet = $reader->load($filePath);
        $sheet = $spreadsheet->getSheet($spreadsheet->getFirstSheetIndex());
        return $sheet->toArray();
    }
}