<?php
class Cminijuego {
    private $objminijuego;

    public function __construct() {
        require_once '../modelos/Mminijuego.php';
        $this->objminijuego = new Mminijuego();
    }

    public function cMostrarMinijuego($idAmbito) {
        return $this->objminijuego->mMostrarMinijuego($idAmbito);
    }
}
?>