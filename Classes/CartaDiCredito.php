<?php
class CartaDiCredito{
    protected $serialNumber;
    protected $DataDiScadenza;
    protected $titolare;

    function __construct($_serialNumber, $_DataDiScadenza, $_titolare){
        $this->serialNumber = $_serialNumber;
        $this->DataDiScadenza = $_DataDiScadenza;
        $this->titolare = $_titolare;
    }
    public function getSerialNumber(){
        return $this->serialNumber;
    }
    public function setSerialNumber($_serialNumber){
        $this->serialNumber = $_serialNumber;
    }
    public function getDataDiScadenza(){
        return $this->DataDiScadenza;
    }
    public function setDataDiScadenza($_DataDiScadenza){
        $this->DataDiScadenza = $_DataDiScadenza;
    }
    public function getTitolare(){
        return $this->DataDiScadenza;
    }
    public function setTitolare($_titolare){
        $this->titolare = $_titolare;
    }
}