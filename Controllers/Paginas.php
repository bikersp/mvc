<?php
	class Paginas extends Controllers{
		public function __construct(){
			parent::__construct();
			session_start();
			if(empty($_SESSION['login'])){
				header('Location: '.base_url().'/login');
				die();
			}
			getPermisos(MPAGINAS);
		}

		public function Paginas(){
			if(empty($_SESSION['permisosMod']['r'])){
				header("Location:".base_url().'/dashboard');
			}
			$data['page_tag'] = "Paginas - ".NOMBRE_EMPRESA;
			$data['page_title'] = "PAGINAS";
			$data['page_name'] = "Paginas";
			$data['page_functions_js'] = "functions_paginas.js";
			$data['menu'] = "paginas";
			$this->views->getView($this,"paginas",$data);
		}

		public function getPaginas(){
			if($_SESSION['permisosMod']['r']){
				$arrData = $this->model->selectPaginas();

				for ($i=0; $i < count($arrData); $i++) {
          $btnView = '';
          $btnEdit = '';
          $btnDelete = '';

          $urlPage = base_url()."/".$arrData[$i]['ruta'];

          if ($_SESSION['permisosMod']['r']) {
              $btnView = '<a href="'.$urlPage.'" class="btn btn-info btn-sm" title="Ver Pagina" target="_blank"><i class="far fa-eye"></i></a>';
          }
          if ($_SESSION['permisosMod']['u']) {
              $btnEdit = '<a href="'.base_url().'/paginas/editar/'.$arrData[$i]['idpagina'].'" class="btn btn-primary btn-sm" title="Editar Pagina"><i class="fas fa-pencil-alt"></i></a>';
          }
          if ($_SESSION['permisosMod']['d']) {
              $btnDelete = '<button class="btn btn-danger btn-sm" onClick="fntDeleteInfo('.$arrData[$i]['idpagina'].')" title="Eliminar Pagina"><i class="fas fa-trash-alt"></i></button>';
          }

          $arrData[$i]['options'] = '<div class="text-center">'.$btnView.' '.$btnEdit.' '.$btnDelete.'</div>';
        }
        echo json_encode($arrData, JSON_UNESCAPED_UNICODE);
		  }
		  die();
	  }

    public function editar($idpagina){
      if(empty($_SESSION['permisosMod']['u'])){
        header("Location:".base_url().'/dashboard');
      }
      $idpagina = intval($idpagina);

      if ($idpagina > 0) {
        $data['page_tag'] = "Actualizar Pagina - ".NOMBRE_EMPRESA;
        $data['page_title'] = "ACTUALIZAR PAGINA";
        $data['page_name'] = "Paginas";
        $data['page_functions_js'] = "functions_paginas.js";
        $data['menu'] = "paginas";

        $infoPage = getInfoPage($idpagina);
        if (empty($infoPage)) {
          header("Location:".base_url().'/paginas');
        }else{
          $data['infoPage'] = $infoPage;
        }
        $this->views->getView($this,"editarpagina",$data);
      }else{
        header("Location:".base_url().'/paginas');
      }
      die();
    }

    public function crear(){
      if(empty($_SESSION['permisosMod']['w'])){
        header("Location:".base_url().'/dashboard');
      }

      $data['page_tag'] = "Crear Pagina - ".NOMBRE_EMPRESA;
      $data['page_title'] = "CREAR PAGINA";
      $data['page_name'] = "Paginas";
      $data['page_functions_js'] = "functions_paginas.js";
      $data['menu'] = "paginas";
      $this->views->getView($this,"crearpagina",$data);
      die();
    }

    public function setPagina(){
      if ($_POST) {
          if (empty($_POST['txtTitulo']) || empty($_POST['txtContenido']) || empty($_POST['listStatus'])) {
              $arrResponse = array("status" => false, "msg" => "Datos incorrectos.");
          }else{
              $intIdPagina = intval($_POST['idPagina']);
              $strTitulo = strClean($_POST['txtTitulo']);
              $strContenido = strClean($_POST['txtContenido']);
              $intStatus = intval($_POST['listStatus']);

              $ruta = strtolower(clear_cadena($strTitulo));
              $ruta = str_replace(" ","-", $ruta);

              $foto = $_FILES['foto'];
              $nombre_foto = $foto['name'];
              $type = $foto['type'];
              $url_temp = $foto['tmp_name'];
              $imgPortada = '';

              if ($nombre_foto != "") {
                  $estraccion = explode("/", $type);
                  $extension = $estraccion[1];
                  $imgPortada = 'img_'.md5(date('dmY H:i:s')).'.'.$extension;
              }

              if ($intIdPagina == 0) {
                // Create
                if($_SESSION['permisosMod']['w']){
                  $request = $this->model->insertPagina($strTitulo, $strContenido, $imgPortada, $ruta, $intStatus);
                  $option = 1;
                }
              }else{
                // Update
                if($_SESSION['permisosMod']['u']){
                  if ($nombre_foto == '') {
                    if ($_POST['foto_actual'] != '' && $_POST['foto_remove'] == 0) {
                      $imgPortada = $_POST['foto_actual'];
                    }
                  }
                  $request = $this->model->updatePagina($intIdPagina, $strTitulo, $strContenido, $imgPortada, $intStatus);
                  $option = 2;
                }
              }

              if ($request > 0) {
                if ($option == 1) {
                  $arrResponse = array('status' => true, 'msg' => 'Datos Guardados correctamente.');
                  if ($nombre_foto != '') { uploadImage($foto,$imgPortada); }
                }else{
                  $arrResponse = array('status' => true, 'msg' => 'Datos Actualizados correctamente.');
                  if ($nombre_foto != '') { uploadImage($foto,$imgPortada); }

                  // Delete img Update
                  if (($nombre_foto == '' && $_POST['foto_remove'] == 1 && $_POST['foto_actual'] != '') || ($nombre_foto != '' && $_POST['foto_actual'] != '')) {
                    deleteFile($_POST['foto_actual']);
                  }

                }
              }else if ($request == 'exist') {
                $arrResponse = array('status' => false, 'msg' => '¡Atención! La Categoria ya existe.');
              }else{
                $arrResponse = array('status' => false, 'msg' => 'No es posible almacenar los datos.');
              }
          }
          echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
      }
    }

    public function deletePagina(){
      if ($_POST) {
        if($_SESSION['permisosMod']['d']){
            $intIdpagina = intval($_POST['idPagina']);
            $requestDelete = $this->model->deletePagina($intIdpagina);
            if ($requestDelete) {
              $arrResponse = array('status' => true, 'msg' => 'Se ha eliminado la página.');
            }else{
              $arrResponse = array('status' => false, 'msg' => 'Error al eliminar la página.');
            }
            echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
        }
      }
      die();
    }

	}
?>