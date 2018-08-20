<?php class ConexionBD {
    const SERVER="localhost";
    const USER="root";
    const PASS="";
    const DATABASE="pda";
    const PORT="3306";
    private  $cn=null;
    
    public function getconecionBD() {
        try {
            $this->cn= mysqli_connect(self::SERVER,self::USER, self::PASS, self::DATABASE,self::PORT);
        } catch (Exception $exc) {
          
        }
        return $this->cn;
        }
}
?>