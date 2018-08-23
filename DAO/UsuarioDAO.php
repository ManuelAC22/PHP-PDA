<?php
require_once '../BEAN/UsuarioBean.php';
require_once '../UTIL/ConexionBD.php';
class UsuarioDAO {
    public function ValidarAcceso(UsuarioBean $objbean){
        $flag = 0;
        try {
            $dni = $objbean->getDni();
            $contrasena = $objbean->getContraseña();
            $sql = "select * from usuario where DNI='$dni' and contrasena='$contrasena'";
            $objc = new ConexionBD();
            $cn = $objc->getconecionBD();
            $rs= mysqli_query($cn, $sql);
            $lista=array();
            while($fila= mysqli_fetch_assoc($rs)){
                $lista[] = $fila;
            }
            if(count($lista)==1){
                $flag=1;
            }
            mysqli_close($cn);
        } catch (Exception $exc) {
        }
        return $flag;
    }
    
    public function VarificarEstadoUsuario(UsuarioBean $objbean){
        $flag = 0;
        try {
            $dni = $objbean->getDni();
            $sql = "select * from usuario where DNI='$dni' and estado=1";
            $objc = new ConexionBD();
            $cn = $objc->getconecionBD();
            $rs= mysqli_query($cn, $sql);
            $lista=array();
            while($fila= mysqli_fetch_assoc($rs)){
                $lista[] = $fila;
            }
            if(count($lista)==1){
                $flag=1;
            }
            mysqli_close($cn);
        } catch (Exception $exc) {
        }
        return $flag;
    }

    public function RegistrarUsuario(UsuarioBean $objbean){
        $i = 0;
        try {
            $dni = $objbean->getDni();
            $nombre = $objbean->getNombre();
            $contrasena = $objbean->getContraseña();
            $correo = $objbean->getCorreo();
            $sql = "INSERT INTO `usuario`(`DNI`, `Nombre`, `contrasena`, `correo`, `estado`) VALUES ('$dni','$nombre','$contrasena','$correo',1)";
            $objc = new ConexionBD();
            $cn = $objc->getconecionBD();
            $i = mysqli_query($cn, $sql);
            mysqli_close($cn);
        } catch (Exception $exc) {
            $i = 0;
        }
        return $i;
        
    }

    public function UpdatePunto(UsuarioBean $objbean){
        $i = 0;
        try {
            $dni = $objbean->getDni();
            $sql = "UPDATE `usuario` SET `estado`=0 WHERE `DNI`='$dni'";
            $objc = new ConexionBD();
            $cn = $objc->getconecionBD();
            $i = mysqli_query($cn, $sql);
            mysqli_close($cn);
        } catch (Exception $exc) {
            $i = 0;
        }
        return $i;
    }
}
