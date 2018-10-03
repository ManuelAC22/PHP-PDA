<?php
class ConexionBD {
  const SERVER = "localhost";
  const USER = "root";
  const PASS = "Gi@mpieer24-pe";
  const DATABASE = "pda";
  private  $cn = null;
  public function getconecionBD() {
    try {
      $this->cn = mysqli_connect(self::SERVER,self::USER, self::PASS, self::DATABASE);
      } catch (Exception $exc) {
      }
      return $this->cn;
  }
}