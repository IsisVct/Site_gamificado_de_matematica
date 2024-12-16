<?php
require_once '../model/PerformanceModel.php';

class PerformanceController
{
    private $performanceModel;

    public function __construct($performanceModel)
    {
        $this->performanceModel = $performanceModel;
    }

    public function gerarRelatorioDesempenhoPorNivel($user_email, $subject)
    {
        return $this->performanceModel->getAcertosPorNivel($user_email, $subject);
    }

    public function gerarRelatorioDesempenhoPorDificuldade($user_email, $subject)
    {
        return $this->performanceModel->obterDesempenhoPorDificuldade($user_email, $subject);
    }
    
    public function gerarDesempenhoGeral($user_email)
    {
        return $this->performanceModel->calcularPercentualAcertos($user_email);
    }
    public function gerarResumoGeral($user_email)
    {
        return $this->performanceModel->obterResumoGeral($user_email);
    }
    
    


}
?>