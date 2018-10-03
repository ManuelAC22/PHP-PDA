<?php

require_once '../BEAN/OpinionBean.php';
require_once '../DAO/OpinionDAO.php';

header('Content-Type: application/json');
$op=$_REQUEST['op'];
switch ($op){
    case 1:{ 
        $objdao=new OpinionDAO();
        $objbean=new OpinionBean();
        $objbean->setIdopinion($objdao -> GenerarCodigo());
        $objbean->setTituloacopio($_REQUEST['tituloacopio']);
        $objbean->setDniusuario($_REQUEST['dniusuario']);
        $objbean->setOpinion($_REQUEST['opinion']);
        $objbean->setPuntaje($_REQUEST['puntaje']);
        $i=$objdao->GrabarOpinion($objbean);
        if($i==1){
            echo json_encode(1);
        }else{
            echo json_encode(0);
        }
        break;
    }
    case 2:{
        $titulo=$_REQUEST['titulo'];
        $objbean=new OpinionBean();
        $objbean->setTituloacopio($titulo);
        $objdao=new OpinionDAO();
        $lista = $objdao->OpinionxTitulo($objbean);

        echo json_encode($lista);
    }
}