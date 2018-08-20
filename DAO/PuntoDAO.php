<?php
require_once '../BEAN/PuntoBean.php';
require_once '../UTIL/ConexionBD.php';
class PuntoDAO {
    public function ListarPuntos(){
        try {
            $sql = "SELECT `titulo`, `dirigidos`, `necesidad`, `fechacierre`, `latitud`, `longitud`, `DNIUSUARIO` FROM `puntoacopio`";
            $objc = new ConexionBD();
            $cn = $objc->getconecionBD();
            $rs = mysqli_query($cn, $sql);
            $lista['PUNTO'] = array();
            while ($fila = mysqli_fetch_assoc($rs)) {
                array_push($lista['PUNTO'],
                    array('titulo' => $fila['titulo'],
                        'dirigidos' => $fila['dirigidos'],
                        'necesidad' => $fila['necesidad'],
                        'fechacierre' => $fila['fechacierre'],
                        'latitud' => $fila['latitud'],
                        'longitud' => $fila['longitud'],
                        'DNIUSUARIO' => $fila['DNIUSUARIO']));
            }
            mysqli_close($cn);
        } catch (Exception $exc) {
        }
        return $lista;
    }
    
    public function BuscarxTitulo(PuntoBean $objbean){
        try {
            $titulo = $objbean->getTitulo();
            $sql = "SELECT P.titulo, P.dirigidos, P.necesidad, P.fechacierre, P.latitud, P.longitud, SUM(O.puntaje),COUNT(O.idopinion) FROM `puntoacopio` P JOIN opinion O ON O.tituloacopio=P.titulo where `titulo` = '$titulo'";
            $objc = new ConexionBD();
            $cn = $objc->getconecionBD();
            $rs = mysqli_query($cn, $sql);
            $lista['PUNTO'] = array();
            while ($fila = mysqli_fetch_assoc($rs)) {
                array_push($lista['PUNTO'],
                    array('titulo' => $fila['titulo'],
                        'dirigidos' => $fila['dirigidos'],
                        'necesidad' => $fila['necesidad'],
                        'fechacierre' => $fila['fechacierre'],
                        'latitud' => $fila['latitud'],
                        'longitud' => $fila['longitud'],
                        'puntajetotal' => $fila['SUM(O.puntaje)'],
                        'cantidad' => $fila['COUNT(O.idopinion)']));
            }
            mysqli_close($cn);
        } catch (Exception $exc) {
        }
        return $lista;
    }

}
