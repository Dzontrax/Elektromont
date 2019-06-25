<?php 
   /*
   
   Template name: Delatnost
   
   */
?>

<?php get_header('general');?>

<div class="container" style="padding-left: 0; padding-right: 0;">
    <div class="row title">
            

            <div class="col-xl-6 col-xs-12 offset-xl-3 section-title">

                            <div style="width: 40px; margin: 0 auto;">
                                    <hr style="border-width: 3px; border-color: #D00224; margin-bottom:50px;">
                            </div>

                            <h5 style="color: #00274e;">DELATNOST</h5>

            
            </div>
    </div>

</div>



<div class="jumbotron delatnost">

    <img class="img-fluid" src="<?php bloginfo('template_url')?>/assets/images/delatnost_header.jpg">

</div>


<div class="container">
    <div class="row delatnosti">
            <div class="col-xl-3 col-xs-12">

                    <?php
                        wp_nav_menu( array( 
                        'theme_location' => 'delatnost-side-menu', // Meni stranice delatnost
                        'container_class' => 'delatnost-side-menu' ) ); //Klasa   
                ?>

                <!-- <a href=""><button type="button" class="btn btn-menu">Izvodjenje</button></a>
                <button type="button" class="btn btn-menu">Projaktovanje</button>
                <button type="button" class="btn btn-menu">Proizvodnja</button>
                <button type="button" class="btn btn-menu">Ispitivanje</button> -->

            </div>
            <div class="col-xl-9 col-xs-12 section-subtitle">

                    <h5 style="color: #00274e;"><?php the_title();?></h5>
                    <div style="width: 30px; margin: 0 ">
                                    <hr style="border-width: 3px; border-color: #D00224;">
                            </div>
                   <p>
                        <?php

                            if (have_posts()) :
                            while (have_posts()) :
                            the_post();
                                    the_content();
                            endwhile;
                            endif;

                        ?>


                   </p> 

<!--                             <h5 style="color: #00274e;">Opis</h5>

                            <div style="width: 30px; margin: 0 ">
                                    <hr style="border-width: 3px; border-color: #D00224;">
                            </div>

                                <?php //the_field('polje_opisa'); ?> -->
                        
                                

                        </div>


        </div>
</div>



<?php get_footer(); ?>