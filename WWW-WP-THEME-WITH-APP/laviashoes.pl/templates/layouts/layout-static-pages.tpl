<!doctype html>
<html lang="{$language.iso_code}">

<head>
  {block name='head'}
  {include file='_partials/head.tpl'}
  {/block}
</head>

<body id="{$page.page_name}" class="aboutus-page {$page.body_classes|classnames}{if $box_mode==1} box-mode{/if}">
  {block name='hook_after_body_opening_tag'}
  {hook h='displayAfterBodyOpeningTag'}
  {/block}
  <main>
    {block name='product_activation'}
    {include file='catalog/_partials/product-activation.tpl'}
    {/block}
    <section id="g-header">
      <header id="header">
        {block name='header'}
        {include file='_partials/header.tpl'}
        {/block}
      </header>



      {if $cms.id != '7'}
      <div class="g-breadcrumb">
        <div class="container">
          <div class="breadcrumb-content">
            <h1 class="page-title">{$page.meta.title}</h1>
            {block name='breadcrumb'}
            {include file='_partials/breadcrumb.tpl'}
            {/block}
          </div>
        </div>
      </div>
      {/if}

      {block name='notifications'}
      {include file='_partials/notifications.tpl'}
      {/block}
    </section>


              {if $cms.id == '7'}
              {block name='cms_content'}
                {$cms.content nofilter}
              {/block}

<!--
              <div class="static_special_header"
              style="background-image:url('http://laviashoes.pl/img/cms/baner_onas.png')">


                        <div class="container">
                                  <div class="row">
                                  <div class="col-lg-6">
                                  <h1>Tworzymy</h1>
                                  <h1>buty od pokoleń</h1>
                                  <p>Nam eu neque vulputate diam rhoncus faucibus. Curabitur quis varius libero. Lorem.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sapien velit, aliquet eget commodo nec, auctor a sapien. Nam eu neque vulputate diam rhoncus faucibus. Curabitur quis varius libero. Lorem.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sapien velit, aliquet eget commodo nec, auctor a sapien. Nam eu neque vulputate diam rhoncus faucibus. Curabitur quis varius libero. Lorem.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sapien</p>
                                  </div>
                                  </div>

                                                    <div id="arrow_scroll_down" class="scroll-button" data-target="our_values">
                                                      <i class="material-icons">keyboard_arrow_down</i>
                                                    </div>
                                  </div>

                    </div>

                    <div id="our_values"  class="container  "><div class="row">
                      <div class="col-md-12">
                        <div class="block-home-title">
              			<div class="owl-out-title">
              				<p class="sub-title">LA VIA</p>
              				<h3>Nasze wartości</h3>
              			</div>
              		</div>
                      </div>
                    </div></div>
                                  <div class="container features">
                                  <div class="row">
                                  <div class="col-lg-4 "><div class="features-item">
                                    <img src="http://laviashoes.pl/img/cms/avatar-1.png" alt="">
                                  <h4>Tradycje rzemieślnicze</h4>
                                  <p>Sed imperdiet urna tempus blandit dignissim. Mauris pretium sapien non libero dapibus, dictum blandit quam lobortis. Suspendisse potenti. Proin suscipit ultricies tellus, euismod porta.</p>
                                  </div></div>
                                  <div class="col-lg-4 "><div class="features-item">
                                    <img src="http://laviashoes.pl/img/cms/avatar-1.png" alt="">
                                  <h4>25 lat doświadczenia</h4>
                                  <p>Sed imperdiet urna tempus blandit dignissim. Mauris pretium sapien non libero dapibus, dictum blandit quam lobortis. Suspendisse potenti. Proin suscipit ultricies tellus, euismod porta.</p>
                                  </div></div>
                                  <div class="col-lg-4 "><div class="features-item">
                                    <img src="http://laviashoes.pl/img/cms/avatar-1.png" alt="">
                                  <h4>Od kobiet dla kobiet</h4>
                                  <p>Sed imperdiet urna tempus blandit dignissim. Mauris pretium sapien non libero dapibus, dictum blandit quam lobortis. Suspendisse potenti. Proin suscipit ultricies tellus, euismod porta.</p>
                                  </div></div>
                                  </div>
                                  </div>

                                  <div class="aboutus-box">
                                    <div class="container">
                                      <div class="row">
                                        <div class="col-lg-5">
                                          <h1>Zmieniliśmy <span></span>się dla was</h1>
                                          <p>consectetur adipiscing elit. Sed non tincidunt risus. Nam placerat at ipsum sit amet sollicitudin. Sed hendrerit massa id malesuada aliquam. Aliquam sit amet orci eget ex eleifend luctus. Ut iaculis libero at condimentum accumsan. Quisque dignissim aliquam lacus. Vivamus pharetra tincidunt magna, quis tincidunt ligula fermentum sit amet. In accumsan vehicula augue in euismod. Fusce finibus cursus nulla vel cursus. Etiam enim magna, venenatis vitae pretium non, vulputate ut ligula. Duis porta dolor vitae ex porta suscipit. Sed eget lectus lorem.<br /><br />Integer in placerat nibh. Nam mi lorem, vulputate scelerisque ullamcorper vel, ornare et est. Donec congue nulla leo, vehicula luctus eros facilisis nec. Curabitur diam orci, volutpat sed blandit in, semper non nulla</p>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="slider-box">

                                      <div id="slider_id1" class="slider_id2 imgbox_slider">
                                           <div class="arrow arrow-left"></div>
                                           <div class="arrow arrow-right"></div>
                                          <div  class="slides_box">
                                            <div class="slide_bg active" style="background-image: url('http://laviashoes.pl/themes/avoChild2/img/logo_onas_01.jpg')"></div>
                                            <div class="slide_bg" style="background-image: url('http://laviashoes.pl/themes/avoChild2/img/logo_onas_02.jpg')"></div>
                                         </div>
                                      </div>

                                    </div>
                                  </div> -->

              {/if}



      {if $cms.id != '7'}
    {block name='content_wrapper'}
    <div id="content-wrapper" class="container">
      <div class="row">
        <div class="col-md-12">
          {block name='content'}
          <p>Hello world! This is HTML5 Boilerplate.</p>
          {/block}
        </div>
      </div>
    </div>
    {/block}
    {/if}



    <div class="container" id="returnToShopping">
      <div class="row">
        {hook h='displayHome'}
      </div>
    </div>



    <div class="g-footer">
      <div class="footer-before">
        <div class="container">
          {hook h='displayFooterBefore'}
        </div>
      </div>

      <footer id="footer">
        {block name="footer"}
        {include file="_partials/footer.tpl"}
        {/block}
      </footer>

      <div class="footer-bottom">
        <div class="container">
          <div class="row">
            {hook h='displayFooterAfter'}
          </div>
        </div>
      </div>
    </div>

    <div class="owl-footer">
      {hook h="displayOwlFooter"}
    </div>

  </main>

  {block name='javascript_bottom'}
  {include file="_partials/javascript.tpl" javascript=$javascript.bottom}
  {/block}

  {block name='hook_before_body_closing_tag'}
  {hook h='displayBeforeBodyClosingTag'}
  {/block}
</body>

</html>
