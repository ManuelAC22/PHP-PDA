<?php
require_once '../BEAN/OpinionBean.php';
require_once '../UTIL/ConexionBD.php';
class OpinionDAO {
    
    public function OpinionxTitulo(OpinionBean $objbean){
        try {
            $titulo = $objbean->getTituloacopio();
            $sql = "SELECT O.opinion,U.Nombre FROM `opinion` O JOIN usuario U ON U.DNI=O.dniusuario WHERE O.tituloacopio = '$titulo'";
            $objc = new ConexionBD();
            $cn = $objc->getconecionBD();
            $rs = mysqli_query($cn, $sql);
            $lista['OPINION'] = array();
            while ($fila = mysqli_fetch_assoc($rs)) {
                array_push($lista['OPINION'],
                    array('opinion' => $fila['opinion'],
                        'nombre' => $fila['Nombre']));
            }
            mysqli_close($cn);
        } catch (Exception $exc) {
        }
        return $lista;
    }

    public function GrabarOpinion(OpinionBean $objbean){
        $i = 0;
        try {
            $idopinion = $objbean->getIdopinion();
            $tituloacopio = $objbean->getTituloacopio();
            $dniusuario = $objbean->getDniusuario();
            $opinion = $objbean->getOpinion();
            $puntaje = $objbean->getPuntaje();
            $sql = "INSERT INTO `opinion`(`idopinion`, `tituloacopio`, `dniusuario`, `opinion`, `puntaje`) VALUES ('$idopinion','$tituloacopio','$dniusuario','$opinion','$puntaje')";
            $objc = new ConexionBD();
            $cn = $objc->getconecionBD();
            $i = mysqli_query($cn, $sql);
            mysqli_close($cn);
        } catch (Exception $exc) {
            $i = 0;
        }
        return $i;
    }

    public function GenerarCodigo()
    {
        $cod = 0;
        try {
            $sql = "select max(idopinion)+1 as codigo from opinion";
            $objc = new ConexionBD();
            $cn = $objc->getconecionBD();
            $rs = mysqli_query($cn, $sql);
            $consulta = mysqli_fetch_array($rs);
            $cod = $consulta['codigo'];
            if ($cod == '') {
                $cod = 1;
            }
        } catch (Exception $ex) {
            $cod = 0;
        }
        return $cod;
    }

}
