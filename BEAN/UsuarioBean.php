<?php

class UsuarioBean {
    public $dni;
    public $nombre;
    public $contraseña;
    public $correo;
    public $estado;

    function getDni() {
        return $this->dni;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getContraseña() {
        return $this->contraseña;
    }

    function getCorreo() {
        return $this->correo;
    }

    function getEstado() {
        return $this->estado;
    }

    function setDni($dni) {
        $this->dni = $dni;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setContraseña($contraseña) {
        $this->contraseña = $contraseña;
    }

    function setCorreo($correo) {
        $this->correo = $correo;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }
}