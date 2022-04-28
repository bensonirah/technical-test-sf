<?php


namespace App\Services;


use App\Entity\ClientApv;
use Doctrine\ORM\EntityManagerInterface;

class ClientApvService implements ClientApvServiceInterface
{
    /**
     * @var EntityManagerInterface
     */
    private $entityManager;

    /**
     * ClientApvService constructor.
     * @param EntityManagerInterface $entityManager
     */
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * @param array $data
     */
    public function batchStoreData(array $data)
    {
        $count = 0;
        foreach ($data as $key => $row) {
            if ($key != 0) {
                $count++;
                $clientApv = new ClientApv();
                $clientApv->fillFromArray($row);
                $this->entityManager->persist($clientApv);
                if ($count % 10 == 0) {
                    $this->entityManager->flush();
                }
            }
        }
        if ($count % 10 > 0) {
            $this->entityManager->flush();
        }
    }
}