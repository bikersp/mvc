<!DOCTYPE html>
<html lang="es">
  <head>
    <title><?= $data['page_tag']; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="mobileOptimized" content="width"/>
    <meta name="handheldFriendly" content="true"/>

    	<!-- Seo Meta-->
    <meta name="robots" content="noindex, nofollow"/>
    <meta name="revisit" content="15 days"/>
    <meta name="author" content="Jean Cuadros"/>
    <meta name="Copyright" content="<?= NOMBRE_EMPRESA ?>"/>
    <meta name="title" content="<?= NOMBRE_EMPRESA ?>"/>
    <meta name="theme-color" content="#009688">
    <meta name="Keywords" content="Key Words"/>
    <meta name="Description" content="Description"/>

    <!-- Open Graph Meta-->
    <meta property="og:locale"			content='es_ES'/>
	  <meta property="og:type"				content="website" />
    <meta property="og:site_name" content="<?= NOMBRE_EMPRESA ?>">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:title" content="<?= NOMBRE_EMPRESA ?>">
    <meta property="og:description" content="<?= DESCRIPCION ?>">

    <!-- Icos -->
    <link rel="shortcut icon" type="text/css" href="<?= media(); ?>/img/favicon.ico">

    <!-- Fonts -->
    <!-- <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="<?= media(); ?>/css/main.css">
    <link rel="stylesheet" type="text/css" href="<?= media(); ?>/css/bootstrap-select.min.css">
    <link rel="stylesheet" type="text/css" href="<?= media(); ?>/css/jquery-ui.min.css">
    <link rel="stylesheet" type="text/css" href="<?= media(); ?>/css/style.css">
  </head>
  <body class="app sidebar-mini">

    <div id="divLoading">
      <div>
        <img src="<?= media(); ?>/img/icon/loading.svg" alt="Loading">
      </div>
    </div>

    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="<?= base_url();?>/dashboard">Tienda Virtual</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
        <!-- <li class="app-search d-none d-md-block">
          <input class="app-search__input" type="search" placeholder="Buscar">
          <button class="app-search__button"><i class="fa fa-search"></i></button>
        </li> -->
        <!--Notification Menu-->
        <!-- <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Show notifications"><i class="fa fa-bell-o fa-lg"></i></a>
          <ul class="app-notification dropdown-menu dropdown-menu-right">
            <li class="app-notification__title">You have 4 new notifications.</li>
            <div class="app-notification__content">
              <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>
                  <div>
                    <p class="app-notification__message">Lisa sent you a mail</p>
                    <p class="app-notification__meta">2 min ago</p>
                  </div></a></li>
              <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-danger"></i><i class="fa fa-hdd-o fa-stack-1x fa-inverse"></i></span></span>
                  <div>
                    <p class="app-notification__message">Mail server not working</p>
                    <p class="app-notification__meta">5 min ago</p>
                  </div></a></li>
              <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-success"></i><i class="fa fa-money fa-stack-1x fa-inverse"></i></span></span>
                  <div>
                    <p class="app-notification__message">Transaction complete</p>
                    <p class="app-notification__meta">2 days ago</p>
                  </div></a></li>
              <div class="app-notification__content">
                <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>
                    <div>
                      <p class="app-notification__message">Lisa sent you a mail</p>
                      <p class="app-notification__meta">2 min ago</p>
                    </div></a></li>
                <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-danger"></i><i class="fa fa-hdd-o fa-stack-1x fa-inverse"></i></span></span>
                    <div>
                      <p class="app-notification__message">Mail server not working</p>
                      <p class="app-notification__meta">5 min ago</p>
                    </div></a></li>
                <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-success"></i><i class="fa fa-money fa-stack-1x fa-inverse"></i></span></span>
                    <div>
                      <p class="app-notification__message">Transaction complete</p>
                      <p class="app-notification__meta">2 days ago</p>
                    </div></a></li>
              </div>
            </div>
            <li class="app-notification__footer"><a href="#">See all notifications.</a></li>
          </ul>
        </li> -->

        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            <!-- <li><a class="dropdown-item" href="<?= base_url();?>/opciones"><i class="fa fa-cog fa-lg"></i> Settings</a></li> -->
            <li><a class="dropdown-item" href="<?= base_url();?>/usuarios/perfil"><i class="fa fa-user fa-lg"></i> Perfil</a></li>
            <li><a class="dropdown-item" href="<?= base_url();?>/logout"><i class="fa fa-sign-out fa-lg"></i> Salir</a></li>
          </ul>
        </li>
      </ul>
    </header>
    <?php require_once("nav_admin.php"); ?>

    <?php
      $menu = "";
      if (isset($data['menu'])) {$menu = $data['menu'];}

      switch($menu){
        case "dashboard":
          echo '<script>document.querySelector(".app-menu li.dashboard a").classList.add("active")</script>';
          break;
        case "usuarios":
          echo '<script>document.querySelector(".app-menu > li.usuarios").classList.add("is-expanded")</script>';
          echo '<script>document.querySelector(".app-menu li.usuarios ul li.usuarios a").classList.add("active")</script>';
          break;
        case "roles":
          echo '<script>document.querySelector(".app-menu > li.usuarios").classList.add("is-expanded")</script>';
          echo '<script>document.querySelector(".app-menu li.usuarios ul li.roles a").classList.add("active")</script>';
          break;
        case "clientes":
          echo '<script>document.querySelector(".app-menu li.clientes a").classList.add("active")</script>';
          break;
        case "productos":
          echo '<script>document.querySelector(".app-menu li.tienda").classList.add("is-expanded")</script>';
          echo '<script>document.querySelector(".app-menu li.tienda ul li.productos a").classList.add("active")</script>';
          break;
        case "categorias":
          echo '<script>document.querySelector(".app-menu li.tienda").classList.add("is-expanded")</script>';
          echo '<script>document.querySelector(".app-menu li.tienda ul li.categorias a").classList.add("active")</script>';
          break;
        case "pedidos":
          echo '<script>document.querySelector(".app-menu li.pedidos a").classList.add("active")</script>';
          break;
        case "suscriptores":
          echo '<script>document.querySelector(".app-menu li.suscriptores a").classList.add("active")</script>';
          break;
        case "contactos":
          echo '<script>document.querySelector(".app-menu li.contactos a").classList.add("active")</script>';
          break;
        case "paginas":
          echo '<script>document.querySelector(".app-menu li.paginas a").classList.add("active")</script>';
          break;
        default:
          echo '<script>document.querySelector(".app-menu li:nth-child(2n) a").classList.add("active")</script>';
          break;
      }
    ?>