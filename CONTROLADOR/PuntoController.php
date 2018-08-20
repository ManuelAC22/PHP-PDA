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
}
