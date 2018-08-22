<?php

require_once '../Bean/PuntoBean.php';
require_once '../Dao/PuntoDAO.php';

header('Content-Type: application/json');
$op=$_REQUEST['op'];
switch ($op){
    case 1:{ 
        $objdao=new PuntoDAO();
        $lista = $objdao->ListarPuntos();

        echo json_encode($lista);
    break;
    }
    case 2:{
        $titulo=$_REQUEST['titulo'];
        $objbean=new PuntoBean();
        $objbean->setTitulo($titulo);
        $objdao=new PuntoDAO();
        $lista = $objdao->BuscarxTitulo($objbean);

        echo json_encode($lista);
        break;
    }
    case 3:{
        $objdao=new PuntoDAO();
        $objbean=new PuntoBean();
        $objbean->setTitulo($_REQUEST['titulo']);
        $objbean->setDirigidos($_REQUEST['dirigidos']);
        $objbean->setNecesidad($_REQUEST['necesidad']);
        $objbean->setFechacierre($_REQUEST['fechacierre']);
        $objbean->setLatitud($_REQUEST['latitud']);
        $objbean->setLongitud($_REQUEST['longitud']);
        $objbean->setDNIUSUARIO($_REQUEST['DNIUSUARIO']);
        $i=$objdao->GrabarPunto($objbean);
        if($i==1){
            echo json_encode(1);
        }else{
            echo json_encode(0);
        }
        
    }
}