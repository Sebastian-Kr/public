<div class="raportTableContainer raportTable--mobile">


    <div class="column column-raport column--R-basic prgrm-hide-show-panel">
        <?php 
    set_query_var('mobileTable', true);
     set_query_var('raportID', 1087);
     get_template_part('template_parts/content', 'raportTable-header') ;
     ?>

        <div class="section_show">
            <div class="section-row"><span>ANALITYKA</span><span>PODSTAWOWA</span></div>

            <div>
                <div>Test online</div><span class="yes"></span>
            </div>
            <div>
                <div>Rozmowa z analitykiem</div>do 1 godz.
            </div>
            <div>
                <div>Rozmowa ze specjalistą</div><span class="no"></span>
            </div>
            <div class="cell--no-border-desktop">
                <div>Rozmowa ze specjalistą</div><span class="no"></span>
            </div>
        </div>

        <div class="prgrm-hide-show-panel__hide-box">

            <div class="section-row"><span>ROZPOZNANIE</span><span>PODSTAWOWE</span></div>

            <div>
                <div>Opis sytuacji wyjściowej</div><span class="no"></span>
            </div>
            <div>
                <div>Archetyp główny</div><span>Podstawowy</span>
            </div>
            <div>
                <div>Archetyp pomocniczy</div><span>Podstawowy</span>
            </div>
            <div class="cell--no-border-desktop">
                <div>Archetyp wynikowy</div><span class="yes"></span>
            </div>
        </div>

        <div class="prgrm-hide-show-panel__hide-box">
            <div class="section-row"><span>OPRACOWANIE</span><span>BRAK</span></div>

            <div>
                <div>Komunikacja wskazana</div><span class="no"></span>
            </div>
            <div>
                <div>Komunikacja niewskazana</div><span class="no"></span>
            </div>
            <div>
                <div>Propozycja doboru krojów pisma</div><span class="no"></span>
            </div>
            <div>
                <div>Propozycja doboru kolorów</div><span class="no"></span>
            </div>
            <div>
                <div>Propozycja doboru zdjęć</div><span class="no"></span>
            </div>
            <div class="cell--no-border-desktop">
                <div>Propozycja stylistyki</div><span class="no"></span>
            </div>
        </div>

        <div class="prgrm-hide-show-panel__hide-box">
            <div class="section-row"><span>WDROŻENIE</span><span>BRAK</span></div>

            <div>
                <div>Projektowanie graficzne</div><span class="no"></span>
            </div>
            <div class="cell--no-border-desktop">
                <div>Szkolenie personelu</div><span class="no"></span>
            </div>
        </div>


        <div class="footer-cell">
            <h4>

                <?php if ( get_field('old_price', 1087) ) : ?>
                <span><?php echo get_field('old_price', 1087); ?> zł</span>
                <?php endif; ?>

                <?php if ( get_field('price', 1087) ) : ?>
                <?php echo get_field('price', 1087); ?> zł
                <?php endif; ?>

            </h4>

            <div class="buttons">
                <div class="prgrm-hide-show-panel__triger btn-v2 button btn-icon btn-icon-right btn-icon-arrow1">
                    <span>Czytaj więcej</span>
                </div>
                <a href="<?php echo get_permalink(1087);?>" class="button  btn-v1 ">
                    <span>Wybieram</span>
                </a>
            </div>
        </div>






    </div>
    <!-- end BASIC RAPORT column -->


    <div class="column column-raport column--R-professional prgrm-hide-show-panel">

        <?php 
     set_query_var('raportID', 1090);
     get_template_part('template_parts/content', 'raportTable-header') ;
     ?>

        <div class="section_show">
            <div class="section-row"><span>ANALITYKA</span><span>ZAAWANSOWANA</span></div>

            <div>
                <div>Test online</div><span class="yes"></span>
            </div>
            <div>
                <div>Rozmowa z analitykiem</div><span>do 1 godz.</span>
            </div>
            <div>
                <div>Rozmowa ze specjalistą</div><span>do 1 godz.</span>
            </div>
            <div class="cell--no-border-desktop">
                <div>Rozmowa ze specjalistą</div><span>do 1 godz.</span>
            </div>
        </div>

        <div class="prgrm-hide-show-panel__hide-box">
            <div class="section-row"><span>ROZPOZNANIE</span><span>ZAAWANSOWANE</span></div>

            <div>
                <div>Opis sytuacji wyjściowej</div><span class="yes"></span>
            </div>
            <div>
                <div>Archetyp główny</div><span>Rozbudowany</span>
            </div>
            <div>
                <div>Archetyp pomocniczy</div><span>Rozbudowany</span>
            </div>
            <div class="cell--no-border-desktop">
                <div>Archetyp wynikowy</div><span class="yes"></span>
            </div>
        </div>

        <div class="prgrm-hide-show-panel__hide-box">
            <div class="section-row"><span>OPRACOWANIE</span><span>ZAAWANSOWANE</span></div>

            <div>
                <div>Komunikacja wskazana</div><span class="yes"></span>
            </div>
            <div>
                <div>Komunikacja niewskazana</div><span class="yes"></span>
            </div>section_hidden
            <div>
                <div>Propozycja doboru krojów pisma</div><span class="yes"></span>
            </div>
            <div>
                <div>Propozycja doboru kolorów</div><span class="yes"></span>
            </div>
            <div>
                <div>Propozycja doboru zdjęć</div><span class="yes"></span>
            </div>
            <div class="cell--no-border-desktop">
                <div>Propozycja stylistyki</div><span class="yes"></span>
            </div>

        </div>

        <div class="prgrm-hide-show-panel__hide-box">
            <div class="section-row"><span>WDROŻENIE</span><span>BRAK</span></div>

            <div>
                <div>Projektowanie graficzne</div><span class="no"></span>
            </div>
            <div class="cell--no-border-desktop">
                <div>Szkolenie personelu</div><span class="no"></span>
            </div>

        </div>

        <div class="footer-cell">

            <h4>

                <?php if ( get_field('old_price', 1090) ) : ?>
                <span><?php echo get_field('old_price', 1090); ?> zł</span>
                <?php endif; ?>

                <?php if ( get_field('price', 1090) ) : ?>
                <?php echo get_field('price', 1090); ?> zł
                <?php endif; ?>

            </h4>

            <div class="buttons">


                <div
                    class="prgrm-hide-show-panel__triger btn-v2 btn-v2b button btn-icon btn-icon-right btn-icon-arrow2 btn-icon-arrow2b">
                    <span>Czytaj więcej</span>
                </div>

                <a href="<?php echo get_permalink(1090);?>" class="button  btn-v5b">
                    <span>Wybieram</span>
                </a>
            </div>
        </div>

    </div>
    <!-- end PROFFESIONAL RAPORT column -->


    <div class="column column-raport column--R-deluxe prgrm-hide-show-panel">

        <?php 
     set_query_var('raportID', 1093);
     get_template_part('template_parts/content', 'raportTable-header') ;
     ?>

        <div class="section_show">
            <div class="section-row"><span>ANALITYKA</span><span>ZAAWANSOWANA</span></div>

            <div>
                <div>Test online</div><span class="yes"></span>
            </div>
            <div>
                <div>Rozmowa z analitykiem</div><span>do 1 godz.</span>
            </div>
            <div>
                <div>Rozmowa ze specjalistą</div><span>do 1 godz.</span>
            </div>
            <div class="cell--no-border-desktop">
                <div>Rozmowa ze specjalistą</div><span>do 1 godz.</span>
            </div>
        </div>

        <div class="prgrm-hide-show-panel__hide-box">
            <div class="section-row"><span>ROZPOZNANIE</span><span>ZAAWANSOWANE</span></div>

            <div>
                <div>Opis sytuacji wyjściowej</div><span class="yes"></span>
            </div>
            <div>
                <div>Archetyp główny</div><span>Rozbudowany</span>
            </div>
            <div>
                <div>Archetyp pomocniczy</div><span>Rozbudowany</span>
            </div>
            <div class="cell--no-border-desktop">
                <div>Archetyp wynikowy</div><span class="yes"></span>
            </div>

        </div>


        <div class="prgrm-hide-show-panel__hide-box">
            <div class="section-row"><span>OPRACOWANIE</span><span>ZAAWANSOWANE</span></div>

            <div>
                <div>Komunikacja wskazana</div><span class="yes"></span>
            </div>
            <div>
                <div>Komunikacja niewskazana</div><span class="yes"></span>
            </div>
            <div>
                <div>Propozycja doboru krojów pisma</div><span class="yes"></span>
            </div>
            <div>
                <div>Propozycja doboru kolorów</div><span class="yes"></span>
            </div>
            <div>
                <div>Propozycja doboru zdjęć</div><span class="yes"></span>
            </div>
            <div class="cell--no-border-desktop">
                <div>Propozycja stylistyki</div><span class="yes"></span>
            </div>
        </div>

        <div class="prgrm-hide-show-panel__hide-box">
            <div class="section-row"><span>WDROŻENIE</span><span>W PAKIECIE</span></div>

            <div>
                <div>
                    <div>Projektowanie graficzne</div>
                </div><span class="yes"></span>
            </div>
            <div class="cell--no-border-desktop">
                <div>Szkolenie personelu</div><span class="yes"></span>
            </div>
        </div>

        <div class="footer-cell">

            <h4>

                <?php if ( get_field('old_price', 1093) ) : ?>
                <span><?php echo get_field('old_price', 1093); ?> zł</span>
                <?php endif; ?>

                <?php if ( get_field('price', 1093) ) : ?>
                <?php echo get_field('price', 1093); ?> zł
                <?php endif; ?>

            </h4>


            <div class="buttons">
                <div
                    class="prgrm-hide-show-panel__triger btn-v2 btn-v2c button btn-icon btn-icon-right btn-icon-arrow2 btn-icon-arrow2b">
                    <span>Czytaj więcej</span>
                </div>
                <a href="<?php echo get_permalink(1093);?>" class="button  btn-v6">
                    <span>Wybieram</span>
                </a>
            </div>
        </div>



    </div>
    <!-- end DELUXE RAPORT column -->


</div>