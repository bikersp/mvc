    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="<?= media();?>/img/icon/avatar.png" alt="User Image">
        <div>
          <p class="app-sidebar__user-name"><?= $_SESSION['userData']['nombres']; ?></p>
          <p class="app-sidebar__user-designation"><?= $_SESSION['userData']['nombrerol']; ?></p>
        </div>
      </div>
      <ul class="app-menu">
        <li>
          <a class="app-menu__item" href="<?= base_url();?>" target="_blank">
            <i class="app-menu__icon fa fas fa-globe"></i>
            <span class="app-menu__label">Sitio Web</span>
          </a>
        </li>
        <?php if (!empty($_SESSION['permisos'][MDASHBOARD]['r'])) {?>
        <li class="dashboard">
          <a class="app-menu__item" href="<?= base_url();?>/dashboard">
            <i class="app-menu__icon fa fa-dashboard"></i>
            <span class="app-menu__label">Dashboard</span>
          </a>
        </li>
        <?php } ?>
        <?php if (!empty($_SESSION['permisos'][MUSUARIOS]['r'])) {?>
        <li class="treeview usuarios">
          <a class="app-menu__item" href="#" data-toggle="treeview">
            <i class="app-menu__icon fa fa-users"></i>
            <span class="app-menu__label">Usuarios</span>
            <i class="treeview-indicator fa fa-angle-right"></i>
          </a>
          <ul class="treeview-menu">
            <li class="usuarios"><a class="treeview-item" href="<?= base_url();?>/usuarios"><i class="icon fa fa-circle-o"></i> Usuarios</a></li>
            <li class="roles"><a class="treeview-item" href="<?= base_url();?>/roles"><i class="icon fa fa-circle-o"></i> Roles</a></li>
          </ul>
        </li>
        <?php } ?>
        <?php if (!empty($_SESSION['permisos'][MCLIENTES]['r'])) {?>
        <li class="clientes">
          <a class="app-menu__item" href="<?= base_url();?>/clientes">
            <i class="app-menu__icon fa fa-user"></i>
            <span class="app-menu__label">Clientes</span>
          </a>
        </li>
        <?php } ?>
        <?php if (!empty($_SESSION['permisos'][MPRODUCTOS]['r']) || !empty($_SESSION['permisos'][6]['r'])) {?>
        <li class="treeview tienda">
          <a class="app-menu__item" href="#" data-toggle="treeview">
            <i class="app-menu__icon fa fa-archive"></i>
            <span class="app-menu__label">Tienda</span>
            <i class="treeview-indicator fa fa-angle-right"></i>
          </a>
          <ul class="treeview-menu">
            <?php if (!empty($_SESSION['permisos'][MPRODUCTOS]['r'])) {?>
            <li class="productos"><a class="treeview-item" href="<?= base_url();?>/productos"><i class="icon fa fa-circle-o"></i> Productos</a></li>
            <?php } ?>
            <?php if (!empty($_SESSION['permisos'][MCATEGORIAS]['r'])) {?>
            <li class="categorias"><a class="treeview-item" href="<?= base_url();?>/categorias"><i class="icon fa fa-circle-o"></i> Categorias</a></li>
            <?php } ?>
          </ul>
        </li>
        <?php } ?>
        <?php if (!empty($_SESSION['permisos'][MPEDIDOS]['r'])) {?>
        <li class="pedidos">
          <a class="app-menu__item" href="<?= base_url();?>/pedidos">
            <i class="app-menu__icon fa fa-shopping-cart"></i>
            <span class="app-menu__label">Pedidos</span>
          </a>
        </li>
        <?php } ?>
        <?php if(!empty($_SESSION['permisos'][MSUSCRIPTORES]['r'])){ ?>
        <li class="suscriptores">
            <a class="app-menu__item" href="<?= base_url(); ?>/suscriptores">
                <i class="app-menu__icon fas fa-user-tie" aria-hidden="true"></i>
                <span class="app-menu__label">Suscriptores</span>
            </a>
        </li>
         <?php } ?>
        <?php if(!empty($_SESSION['permisos'][MCONTACTOS]['r'])){ ?>
        <li class="contactos">
            <a class="app-menu__item" href="<?= base_url(); ?>/contactos">
                <i class="app-menu__icon fas fa-envelope" aria-hidden="true"></i>
                <span class="app-menu__label">Mensajes</span>
            </a>
        </li>
         <?php } ?>
        <?php if(!empty($_SESSION['permisos'][MPAGINAS]['r'])){ ?>
        <li class="paginas">
            <a class="app-menu__item" href="<?= base_url(); ?>/paginas">
                <i class="app-menu__icon fas fa-file-alt" aria-hidden="true"></i>
                <span class="app-menu__label">Páginas</span>
            </a>
        </li>
         <?php } ?>
        <li>
          <a class="app-menu__item" href="<?= base_url();?>/logout">
            <i class="app-menu__icon fa fa-sign-out"></i>
            <span class="app-menu__label">Salir</span>
          </a>
        </li>
      </ul>
    </aside>