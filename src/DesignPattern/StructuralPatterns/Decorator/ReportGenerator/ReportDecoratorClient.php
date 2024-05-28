<?php

namespace src\DesignPattern\StructuralPatterns\Decorator\ReportGenerator;

class ReportDecoratorClient
{
    /**
     * @return string
     */
    public function report() : string
    {
        $reportService = new ReportService();
        $reportService = new ReportWithHeader($reportService);
        $reportService = new ReportWithFooter($reportService);

        return $reportService->generate();
    }
}