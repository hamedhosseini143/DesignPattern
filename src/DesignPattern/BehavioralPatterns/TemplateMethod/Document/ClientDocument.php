<?php

namespace src\DesignPattern\BehavioralPatterns\TemplateMethod\Document;

use Exception;

class ClientDocument
{
    private string $documentType;

    public function __construct(string $documentType)
    {
        $this->documentType = $documentType;
    }

    /**
     * @throws Exception
     */
    public function generateDocument(): void
    {

        $getTypeOfDocument = $this->getDocumentType();
        $getTypeOfDocument->generate();

    }

    /**
     * @throws Exception
     */
    private function getDocumentType(): Document
    {
        return match ($this->documentType) {
            'pdf' => new PdfDocument(),
            'word' => new WordDocument(),
            default => throw new Exception('Document type not found'),
        };
    }
}