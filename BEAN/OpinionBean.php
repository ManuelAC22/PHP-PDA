<?php

class OpinionBean {
    public $idopinion;
    public $tituloacopio;
    public $dniusuario;
    public $opinion;
    public $puntaje;
    public $promedio;
    public $cantidad;
    
    function getIdopinion() {
        return $this->idopinion;
    }

    function getTituloacopio() {
        return $this->tituloacopio;
    }

    function getDniusuario() {
        return $this->dniusuario;
    }

    function getOpinion() {
        return $this->opinion;
    }

    function getPuntaje() {
        return $this->puntaje;
    }

    function getPromedio() {
        return $this->promedio;
    }

    function getCantidad() {
        return $this->cantidad;
    }

    function setIdopinion($idopinion) {
        $this->idopinion = $idopinion;
    }

    function setTituloacopio($tituloacopio) {
        $this->tituloacopio = $tituloacopio;
    }

    function setDniusuario($dniusuario) {
        $this->dniusuario = $dniusuario;
    }

    function setOpinion($opinion) {
        $this->opinion = $opinion;
    }

    function setPuntaje($puntaje) {
        $this->puntaje = $puntaje;
    }

    function setPromedio($promedio) {
        $this->promedio = $promedio;
    }

    function setCantidad($cantidad) {
        $this->cantidad = $cantidad;
    }

}
