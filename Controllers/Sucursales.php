<?php
    class Sucursales extends Controllers{

        public function __construct(){
            parent::__construct();
            session_start();
            getPermisos(MPAGINAS);
        }

        public function sucursales(){
          $pageContent = getPageRout('sucursales');
          if (empty($pageContent)) {
              header("Location:" .base_url());
          }else{
            $data['page_tag'] = "Sucursales - ".NOMBRE_EMPRESA;
            $data['page_title'] = "SUCURSALES";
            $data['page_name'] = $pageContent['titulo'];
            $data['page'] = $pageContent;
            $data['menu'] = "sucursales";
            $this->views->getView($this,"sucursales",$data);
          }
        }

    }
?>