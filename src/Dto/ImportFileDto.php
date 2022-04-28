<?php


namespace App\Dto;


use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Validator\Constraints as Assert;

class ImportFileDto
{
    /**
     * @var UploadedFile
     * @Assert\NotBlank()
     */
    private $filename;

    /**
     * @return UploadedFile
     */
    public function getFilename(): ?UploadedFile
    {
        return $this->filename;
    }

    /**
     * @param UploadedFile $filename
     */
    public function setFilename($filename): void
    {
        $this->filename = $filename;
    }
}