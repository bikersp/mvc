<?php

	class PaginasModel extends Mysql{

    private $intIdPagina;
    private $strTitulo;
    private $strContenido;
    private $intStatus;
    private $strPortada;
    private $strRuta;
    private $strImagen;

		public function __construct(){
			parent::__construct();
		}

		public function selectPaginas(){
         $sql = "SELECT idpagina, titulo, DATE_FORMAT(date, '%d/%m/%Y') as fecha, ruta, status
               FROM pagina
               WHERE status != 0";
         $request = $this->select_all($sql);
         return $request;
		}

		public function insertPagina(String $titulo, String $contenido, String $portada, string $ruta, int $status){
			$return = 0;
			$this->strTitulo = $titulo;
			$this->strContenido = $contenido;
			$this->strPortada = $portada;
			$this->strRuta = $ruta;
			$this->intStatus = $status;

			$sql = "SELECT * FROM pagina WHERE ruta = '{$this->strRuta}'";
			$request = $this->select_all($sql);

			if (empty($request)) {
				$query_insert = "INSERT INTO pagina(titulo, contenido, portada, ruta, status) VALUES(?,?,?,?,?)";
				$arrData = array($this->strTitulo, 
								$this->strContenido, 
								$this->strPortada,
								$this->strRuta, 
								$this->intStatus);

				$request_insert = $this->insert($query_insert,$arrData);
				$return = $request_insert;
			}else{
				$return = "exist";
			}
			return $return;
		}

		public function updatePagina(int $idPagina, string $titulo, string $contenido, string $portada, int $status){
			$this->intIdPagina = $idPagina;
			$this->strTitulo = $titulo;
			$this->strContenido = $contenido;
			$this->strPortada = $portada;
			$this->intStatus = $status;

         $sql = "UPDATE pagina SET titulo=?, contenido=?, portada=?, status=? 
               WHERE idpagina = $this->intIdPagina ";

         $arrData = array($this->strTitulo,
                     $this->strContenido,
                     $this->strPortada,
                     $this->intStatus);

         $request = $this->update($sql, $arrData);
			return $request;
		}

		public function deletePagina(int $idpagina){
			$this->intIdPagina = $idpagina;
         $sql = "UPDATE pagina SET status = ? WHERE idpagina = $this->intIdPagina";
         $arrData = array(0);
         $request = $this->update($sql,$arrData);
			return $request;
		}

	}
?>