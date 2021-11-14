<?php
  class ContactosModel extends Mysql{

    public $intIdcontacto;

    public function selectContactos(){
      $sql = "SELECT idcontacto, nombre, email, DATE_FORMAT(date, '%d/%m/%Y') as fecha
          FROM contacto ORDER BY idcontacto DESC";
      $request = $this->select_all($sql);
      return $request;
    }

    public function selectMensaje(int $idmensaje){
      $this->intIdcontacto = $idmensaje;
      $sql = "SELECT idcontacto, nombre, email, DATE_FORMAT(date, '%d/%m/%Y') as fecha, mensaje
          FROM contacto WHERE idcontacto = $this->intIdcontacto";
      $request = $this->select($sql);
      return $request;
    }

		public function deleteSuscriptor(int $Idcontacto){
			$this->intIdcontacto = $Idcontacto;
			$sql = "UPDATE contacto SET status = ? WHERE idcontacto = $this->intIdcontacto";
			$arrData = array(0);
			$request = $this->update($sql,$arrData);
			return $request;
		}

  }
 ?>