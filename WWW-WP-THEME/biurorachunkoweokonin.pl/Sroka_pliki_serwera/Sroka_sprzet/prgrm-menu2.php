<div id="homepage"></div>
<div id="main-menu2">
<div id="navigation-container">
<!-- =============MAIN MENU ============== -->

<div class="container pretopmenu">

    <a class="navbar-brand" href="<?php echo home_url() ?>">
      <img src="<?php echo get_template_directory_uri() ?>/img/" alt="">
      <p>Wynajem sprzętu Sroka</p>
    </a>
 <div class="top-contact">

<?php the_field('menu-col3', 18) ?>
<span  id="hov" class="snip1489"></span>
       <!-- <ion-icon name="add-circle"></ion-icon> -->
 </div>

<div class="top-contact short">

<?php the_field('menu-col2', 18) ?>
<span  id="home" class="snip1489"></span>
</div>
<div class="top-contact ">
<?php the_field('menu-col1', 18) ?>
<span  id="page" class="snip1489"></span>
</div>

  </div>
<div class="clearfix"></div>
<div class="body-menu">

<nav class=" container navbar navbar-expand-lg navbar-light bg-light">


  <a class="navbar-brand navbar-brand2" href="<?php echo home_url() ?>">
    <img src="<?php echo get_template_directory_uri() ?>/img/" alt="">
    <p>Wynajem sprzętu Sroka</p>
    </a>


    <div id="nav-icon2">
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    </div>

    <div class="collapse navbar-collapse" id="navbarNav">

  <ul id="menu-menu-glowne" class="open-menu nav">

  <!-- <li id="homepage" class=""><a title="" class="activeItem" href="<?php  if ((is_front_page())) {echo '#homepage';} else {echo home_url();}?>">HOME</a></li> -->
  <!-- <li id="kotwica" class=""><a title="" class="dynamicItem" href="<?php  if ((is_front_page())) {echo '#kotwica-target';} else {echo home_url();}?>">KOTWICA</a></li> -->
  <!-- <li><a href="<?php echo get_permalink('611') ?>">Aktualności</a></li> -->
  <!-- <li><a href="<?php echo get_permalink('621') ?>">Galerie</a></li> -->
  <!-- <li><a href="<?php echo get_permalink('682') ?>">Mody</a></li> -->


  <!--Home Sprzęt --> <li class="<?php if (get_the_ID()==922) echo 'activeItem' ?>" ><a href="<?php echo get_permalink('922') ?>"><?php echo get_the_title('922') ?></a></li>
  <!--Sprzęt --> <li class="<?php if (get_the_ID()==829) echo 'activeItem' ?>" ><a href="<?php echo get_permalink('829') ?>"><?php echo get_the_title('829') ?></a></li>
  <!--Zasady wynajmu --> <li class="<?php if (get_the_ID()==819) echo 'activeItem' ?>" ><a href="<?php echo get_permalink('819') ?>"><?php echo get_the_title('819') ?></a></li>
  <!--Kontakt --> <li class="<?php if (get_the_ID()==18) echo 'activeItem' ?>" ><a href="<?php echo get_permalink('18') ?>"><?php echo get_the_title('18') ?></a></li>

  </ul>
  </div>


  </nav>
</div>
<div class="clearfix"></div>
</div>

</div>
