<?php
	// define("BASE_URL", "http://localhost/mvc/");

	// Ruta de Proyecto
	// const BASE_URL = "https://www.dominio.com";
	// const BASE_URL = "http://192.168.0.139/mvc";
	const BASE_URL = "http://localhost/mvc/";

	// Zona Horaria
	date_default_timezone_set('America/Lima');
	setlocale(LC_TIME, "spanish");

	// Datos de conexion a BD
	const DB_HOST = "localhost";
	const DB_NAME = "mvc";
	const DB_USER = "root";
	const DB_PASSWORD = "root";
	const DB_CHARSET = "utf8";

	//Para envío de correo
	const ENVIRONMENT = 1; // Local: 0, Produccón: 1;

	// Delimitadores decimal y millar ej. 24,1929.00
	const SPD = ".";
	const SPM = ",";

	// Simbolode moneda
	const SMONEY = "$";
	const CURRENCY = "USD";

	// ID Paypal Live
	// const IDCLIENTE = "ARA0RdvPC8TyUEaXjAkK1YDU58vm7I0oaJC7wcHTBSOwt9D6h1cAh1OBTH-1k4Tugdrk9aKcjdfHsldH";
	// const URLPAYPAL = "https://api-m.paypal.com";
	// const SECRET = "EG_coGCWsn-ekeOhVnwzrQ-33uWCFTUFUZWqW1_t1ukTwuYRDoddqYjFumPouWseb_GwplRZmuy8KYb4";
	// ID Paypal Sandbox
	 const IDCLIENTE = "Aab2ARV-epCU--iWjZUkHkwnRetqcJz3_d_W3NxTYE4P8wW4RX-OHodGVL8lP3NGC4xVkQ281-fpjESR";
	 const URLPAYPAL = "https://api-m.sandbox.paypal.com";
	 const SECRET = "EMC1e3aG3TX-NfyqoQAeEFWCeG9PH3MxSFEBkh-7XfnTjOrsMgRXCyppBh-LkElBB-ICQUXvFU2fQ8pK";

	// Datos de Correo
	const NOMBRE_REMITENTE = "Tienda Virtual";
	const EMAIL_REMITENTE = "no-reply@tienda.com";
	const NOMBRE_EMPRESA = "Tienda Virtual";
	const WEB_EMPRESA = "www.tienda.com";

	const DESCRIPCION = "La mejor tienda en línea con artículos de moda.";
	const SHAREDHASH = "TiendaVirtual";

	// Datos Empresa
	const DIRECCION = "Avenida las Americas zona 13, Lima";
	const TELEFONO_EMPRESA = "923423423";
	const WHATSAPP = "+50278787845";
	const EMAIL_EMPRESA = "info@gmail.com";
	const EMAIL_PEDIDOS = "info@gmail.com";
	const EMAIL_SUSCRIPCION = "info@gmail.com";
	const EMAIL_CONTACTO = "info@gmail.com";

	// Redes Sociales
	const FACEBOOK = "https://www.facebook.com/";
	const INSTAGRAM = "https://www.instagram.com/";

	// Categorias
	const CATEGORIA_SLIDER = "1,2,3";
	const CATEGORIA_BANNER = "3,2,1";
	const CAT_FOOTER = "1,2,3,4,5";

	// Datos para Encriptar
	const KEY = "bikersprop";
	const METHODENCRIPT = "AES-128-ECB";

	//Envío
	const COSTOENVIO = 50;

	//Modulos
	const MDASHBOARD = 1;
	const MUSUARIOS = 2;
	const MCLIENTES = 3;
	const MPRODUCTOS = 4;
	const MPEDIDOS = 5;
	const MCATEGORIAS = 6;
	const MSUSCRIPTORES = 7;
	const MCONTACTOS = 8;
	const MPAGINAS = 9;

	//Páginas
	const PINICIO = 1;
	const PTIENDA = 2;
	const PCARRITO = 3;
	const PNOSOTROS = 4;
	const PCONTACTO = 5;
	const PPREGUNTAS = 6;
	const PTERMINOS = 7;
	const PSUCURSALES = 8;
	const PERROR = 9;

	//Roles
	const RADMINISTRADOR = 1;
	const RCLIENTES = 7;

	//Estados
	const STATUS = array('Completo', 'Aprobado', 'Cancelado', 'Reembolsado', 'Pendiente', 'Entregado');

	//Paginacion
	const CANTPORDHOME = 8;
	const PROPORPAGINA = 4;
	const PROCATEGORIA = 4;
	const PROBUSCAR = 4;
?>