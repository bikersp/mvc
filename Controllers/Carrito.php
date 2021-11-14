<?php
  require_once("Models/TCategoria.php");
  require_once("Models/TProducto.php");
  require_once("Models/TTipoPago.php");
  require_once("Models/TCliente.php");

  class Carrito extends Controllers{

    use TCategoria, TProducto, TTipoPago, TCliente;

    public function __construct(){
      parent::__construct();
      session_start();
    }

    public function carrito(){
      $data['page_tag'] = NOMBRE_EMPRESA.' - Carrito';
      $data['page_title'] = 'Carrito de compras';
      $data['page_name'] = "carrito";
      $data['menu'] = "carrito";
      $this->views->getView($this,"carrito",$data);
    }

    public function procesarpago(){
      if(empty($_SESSION['arrCarrito'])){
        header("Location: ".base_url());
        die();
      }

      $data['page_tag'] = NOMBRE_EMPRESA.' - Procesar Pago';
      $data['page_title'] = 'Procesar Pago';
      $data['page_name'] = "procesarpago";
      $data['tiposPago'] = $this->getTiposPagoT();
      $data['menu'] = "carrito";
      $this->views->getView($this,"procesarpago",$data);
    }

    // Almacenar en tabla temporal
    // public function setDetalleTemp(){
    //   $sid = session_id(); //Obtener Session ID
    //   $arrPedido = array('idcliente' => $_SESSION['idUser'],
    //             'idtransaccion' =>$sid,
    //             'productos' => $_SESSION['arrCarrito']
    //           );
    //   $this->insertDetalleTemp($arrPedido);
    // }

  }
 ?>
