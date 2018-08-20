<?php

class PuntoBean {
    public $titulo;
    public $dirigidos;
    public $necesidad;
    public $fechacierre;
    public $latitud;
    public $longitud;
    public $DNIUSUARIO;
    
    function getDirigidos() {
        return $this->dirigidos;
    }

    function getNecesidad() {
        return $this->necesidad;
    }

    function getFechacierre() {
        return $this->fechacierre;
    }

    function getLatitud() {
        return $this->latitud;
    }

    function getLongitud() {
        return $this->longitud;
    }

    function getDNIUSUARIO() {
        return $this->DNIUSUARIO;
    }

    function setDirigidos($dirigidos) {
        $this->dirigidos = $dirigidos;
    }

    function setNecesidad($necesidad) {
        $this->necesidad = $necesidad;
    }

    function setFechacierre($fechacierre) {
        $this->fechacierre = $fechacierre;
    }

    function setLatitud($latitud) {
        $this->latitud = $latitud;
    }

    function setLongitud($longitud) {
        $this->longitud = $longitud;
    }

    function setDNIUSUARIO($DNIUSUARIO) {
        $this->DNIUSUARIO = $DNIUSUARIO;
    }

    function getTitulo() {
        return $this->titulo;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }
}