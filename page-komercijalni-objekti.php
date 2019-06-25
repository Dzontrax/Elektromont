<?php 
/* Template name: Komercijalni objekti */
?>

<?php  get_header();?>


 <div class="row title">
        

        <div class="col-xl-6 col-xs-12 offset-xl-3 section-title">

                        <div style="width: 40px; margin: 0 auto;">
                                <hr style="border-width: 3px; border-color: #D00224;">
                        </div>

                        <h5 style="color: #00274e;"><?php the_title(); ?></h5>
                        <!-- <h6 class="section-subtitle">Pogledajte projekte koje smo do sada uradili</h6> -->


        
        </div>

</div>



<div class="row">

<div class="col-xl-12 col-xs-12">

<div class="row">
        <div class="col-xl-12 col-xs-12 offset-xl-4">

                <div id="category-menu" class="inline-menu">
                <?php
                        wp_nav_menu( array( 
                        'theme_location' => 'category-menu', // Meni stranice delatnost
                        'container_class' => 'inline-menu' ) ); //Klasa   
                ?>
                </div>
            
            
    
        </div>

    </div>
</div>

</div>
<div class="container-fluid" style="text-align:center;">
<div class="row">

    <?php $args = array(
        'post_type' => 'projekat',
        'category_name' => 'komercijalni-objekti',
        'category__not_in' => 13
    );
    $the_query = new WP_Query($args);

    ?>

    <?php 

    // The Query
      if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();

    ?>

    <div class="col-xl-4 projekti-grid view zoom overlay">
     
                <div class="projekti-grid-image" style="margin:0; border: 3px solid #fff; ">
                    
                    <a href="<?php the_permalink(); ?>" title="Klik za više informacija"><?php the_post_thumbnail('projekti-grid'); ?></a>

                </div> 
            
        
        
                <h3><?php the_title(); ?>
                <div style="width: 40px;">
                    <hr style="border-width: 3px; border-color: #D00224;">
                </div>
                </h3>

                

                <p><?php foreach((get_the_category()) as $category) { 
                            echo $category->cat_name . ' '; 
                    }  ?></p>
                <h6> <span style="color: #D00224; font-weight: 600;">KLIJENT:</span> <?php the_field('klijent'); ?><br>
                     <span style="color: #D00224; font-weight: 600;">DELATNOST:</span> <?php the_field('delatnost'); ?><br>
                     <span style="color: #D00224; font-weight: 600;">LOKACIJA:</span> <?php the_field('lokacija'); ?>
                </h6>
          
    </div>

<?php endwhile; endif; ?>

</div>
<div>
    <?php// echo do_shortcode('[ajax_load_more id="6803695586" container_type="div" post_type="projekat" post_format="standard" scroll="false" button_label="Ucitaj jos" button_loading_label="Ucitavam..."]'); ?>
</div>
</div>
<?php  get_footer();?>