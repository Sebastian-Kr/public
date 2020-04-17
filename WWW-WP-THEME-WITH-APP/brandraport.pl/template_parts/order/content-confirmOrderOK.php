      <div class="row fw-700">
          <div class="col-md-12 standard_template_header mb-2">



              <?php if ( get_field('main_header') ) : ?>
              <h2> <?php echo get_field('main_header'); ?></h2>
              <?php endif; ?>
          </div>
          <div class="col-md-12 standard_tamplate_content ">
              <?php get_template_part('template_parts/content', 'main');?>
          </div>

      </div>


      <div class="row mb-3 mt-2 fw-700">
          <div class="col-md-4">
              <h6>Data zamówienia</h6>
              <div class="line line-smallMargin"></div>
              <p><?php echo  date("Y / m / d");?></p>
          </div>

          <div class="col-md-4">
              <h6>Wybrany pakiet</h6>
              <div class="line line-smallMargin"></div>
              <p><?php echo $raportName ;?></p>
          </div>

          <div class="col-md-4">
              <h6>Całkowity koszt zamówienia</h6>
              <div class="line line-smallMargin"></div>
              <p><?php echo $raportPrice;?> zł</p>
          </div>
      </div>

      <div class="row fw-700">
          <div class="col-md-12 text-center ">


              <h2 class="formHeader">Sposób zapłaty</h2>
              <p>Wybierz dogodny dla siebie sposób płatności. </p>

              <div class="flex-box form-payment-boxes mt-3">
                  <div class="formPaymentField mb-3">
                      <?php if ( get_field('paymentData', 1111) ) : ?>
                      <p><?php echo get_field('paymentData', 1111); ?></p>
                      <?php endif; ?>

                  </div>

                  <div class="formPaymentField mb-3 blue-box">
                      <img src='<?php echo get_template_directory_uri(); ?>/img/new/dotpay-logo.svg'>
                      <h6 class="c1-text">Płatność natychmiastowa</h6>
                      <p class="mt-1 mb-2">Wygody i szybki sposób <br>płatności</p>
                      <?php get_template_part('template_parts/content', 'dotpay') ;?>


                  </div>
              </div>

          </div>
      </div>