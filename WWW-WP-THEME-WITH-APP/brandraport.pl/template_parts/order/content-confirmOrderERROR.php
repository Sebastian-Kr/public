      <div class="row fw-700 text-center">
          <div class="col-md-12 standard_template_header ">
              <h2>Coś poszło nie tak</h2>
          </div>
          <div class="col-md-12 standard_tamplate_content ">
              Jeśli Twoje zamówienie zostało przerwane skontaktuj się z obsługą Brand Raport lub złóż zamówienie jeszcze
              raz.
              Jeśli Twoje zamówienie zostało zakończone, ale wystąpił błąd w płatności DotPay możesz skorzystać z
              przelewu tradycyjnego
          </div>

      </div>



      <div class="row mt-2">
          <div class="col-md-12">
              <div class="center_box">
                  <a href="<?php echo home_url();?>/#kontakt" class="button btn-v6">
                      <span>Skontaktuj się z nami</span></a>


              </div>
          </div>
      </div>

      <div class="row fw-700">
          <div class="col-md-12 text-center mt-3">

              <div class="formPaymentField mb-3">
                  <?php if ( get_field('paymentData', 1111) ) : ?>
                  <p><?php echo get_field('paymentData', 1111); ?></p>
                  <?php endif; ?>
              </div>

          </div>
      </div>