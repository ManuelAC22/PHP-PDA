<?php

require_once '../Bean/UsuarioBean.php';
require_once '../Dao/UsuarioDAO.php';

header('Content-Type: application/json');
$op=$_REQUEST['op'];
switch ($op){
    case 1:{ 
        $objdao=new UsuarioDAO();
        $objbean=new UsuarioBean();
        $objbean->setDni($_REQUEST['dni']);
        $objbean->setContraseña($_REQUEST['contrasena']);
        $i=$objdao->ValidarAcceso($objbean);
        if($i==1){
            echo json_encode(true);
        }else{
            echo json_encode(false);
        }
        break;
    }
    case 2:{
        $objdao=new UsuarioDAO();
        $objbean=new UsuarioBean();
        $objbean->setDni($_REQUEST['dni']);
        $objbean->setNombre($_REQUEST['nombre']);
        $objbean->setContraseña($_REQUEST['contrasena']);
        $objbean->setCorreo($_REQUEST['correo']);
        $i=$objdao->RegistrarUsuario($objbean);
        if($i==1){
            echo json_encode(1);
        }else{
            echo json_encode(0);
        }
        break;
    }
    case 3:{
        $objdao=new UsuarioDAO();
        $objbean=new UsuarioBean();
        $objbean->setDni($_REQUEST['dni']);
        $i=$objdao->VarificarEstadoUsuario($objbean);
        if($i==1){
            echo json_encode(true);
        }else{
            echo json_encode(false);
        }
        break;
    }
    case 4:{
        $objdao=new UsuarioDAO();
        $objbean=new UsuarioBean();
        $objbean->setDni($_REQUEST['dni']);
        $i=$objdao->UpdatePunto($objbean);
        if($i==1){
            echo json_encode(true);
        }else{
            echo json_encode(false);
        }
    }
}