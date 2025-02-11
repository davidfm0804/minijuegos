<?php
class Cminijuego {
    private $objminijuego;

    public function __construct() {
        require_once '../modelos/Mminijuego.php';
        $this->objminijuego = new Mminijuego();
    }

    public function cMostrarMinijuegoAmbito($idAmbito) {
        return $this->objminijuego->mMostrarMinijuegoAmbito($idAmbito);
    }

    public function cMostrarMinijuego($id) {
        return $this->objminijuego->mMostrarMinijuego($id);
    }
}
?>