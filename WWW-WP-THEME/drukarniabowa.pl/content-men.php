
<!-- =============MAIN MENU ============== -->
<div id="home"></div>
<div id="wrapper" class="container">
<div id="sidebar-wrapper">
    <div class="container">
     <div class="row">
        <nav id="menu-menu-glowne2" class="nav">

          <a class="header-logo" href="<?php echo home_url(); ?>">
              <div class="logo logo2 prgrm-pp"></div>

          </a>
             <?php wp_nav_menu(array(
               'theme_location'=>'header-menu',
               'menu_id' => false,
               'menu_class' => 'sidebar-nav',
               'container_id' => 'prgrm_main_nav',
               'container_class' => false,
             )); ?>
        </nav>
    </div>
</div>
</div>


<div class="content-header">
    <div id="hsome">
    <a id="menu-toggle" href="#" class="btn-menu toggle">
<span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>

    </a>
  </div>
    <a class="header-logo" href="<?php echo home_url(); ?>">
        <div class="logo"></div>

    </a>
</div>
</div>
