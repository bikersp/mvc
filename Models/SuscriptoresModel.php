<?php
  class SuscriptoresModel extends Mysql{

    public $intIdsuscripcion;

    public function selectSuscriptores(){
      $sql = "SELECT idsuscripcion, nombre, email, DATE_FORMAT(datecreated, '%d/%m/%Y') as fecha
          FROM suscripcion
          WHERE status != 0
          ORDER BY idsuscripcion DESC";
      $request = $this->select_all($sql);
      return $request;
    }

		public function deleteSuscriptor(int $Idsuscripcion){
			$this->intIdsuscripcion = $Idsuscripcion;
			$sql = "UPDATE suscripcion SET status = ? WHERE idsuscripcion = $this->intIdsuscripcion";
			$arrData = array(0);
			$request = $this->update($sql,$arrData);
			return $request;
		}

  }
 ?>