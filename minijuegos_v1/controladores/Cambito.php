<?php
class Cambito {
    private $objambito;

    public function __construct() {
        require_once '../modelos/Mambito.php';
        $this->objambito = new Mambito();
    }

    public function cMostrarAmbitos() {
        $ambito = $this->objambito->mMostrarAmbitos();
        if(is_array($ambito)){
            return $ambito;
        }else{
            return 'Error Al mostrar ambitos';
        }
    }
}
?>