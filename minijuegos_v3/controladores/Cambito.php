<?php
class Cambito {
    private $objambito;

    public function __construct() {
        require_once '../modelos/Mambito.php';
        $this->objambito = new Mambito();
    }

    public function cMostrarAmbitos() {
        return $this->objambito->mMostrarAmbitos();
    }
}
?>