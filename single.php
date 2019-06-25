<?php get_header(); ?>

    
    <div class="row">

        <div class="col-xl-6 col-xs-12 offset-xl-3 section-title">

        <div style="width: 40px; margin: 0 auto;">
                <hr style="border-width: 3px; border-color: #D00224;">
        </div>

        <h5 style="color: #00274e;"><?php the_title(); ?></h5>
        <h6 class="section-subtitle">
                Povrsina: <?php the_field('povrsina'); ?> m<sup>2</sup>
                Radovi zavrseni: <?php the_field('zavrsen'); ?>
        
        </h6>
        
    

</div>

</div>


<div class="row">
       <div class="container-fluid wide-img">
                <div class="row">       
                        <div class="col-xl-12 col-xs-12">
                                <?php the_post_thumbnail(); ?>
                                
                        </div>
                </div>
       </div>
        
</div>   

<div class="row offset-xl-2 ">
        
               
                        <div class="col-xl-7 col-xs-12 section-title-single">
                                <div style="width: 40px; margin-top: 50px;">
                                        <hr style="border-width: 3px; border-color: #D00224;">
                                        <h6>OPIS</h6>
                                </div>   

                               <p> <?php the_field('opis'); ?></p>                     
                        </div>

                        <div class="col-xl-4 col-xs-12 section-title-single">
                                
                                <div style="width: 40px;">
                                        <hr style="border-width: 3px; border-color: #D00224;">
                                        <h6>NARUČILAC</h6>
                                        <p><?php the_field('klijent');?></p>
                                </div> 
                                <div style="width: 40px;">
                                        <hr style="border-width: 3px; border-color: #D00224;">
                                        <h6>LOKACIJA</h6>
                                        <p><?php the_field('lokacija'); ?></p>
                                </div> 
                        
                        </div>
               

              
</div>
<div class="container-fluid galerija-single">
<div class="row">

                <div class="col-xl-6 col-xs-12 offset-xl-3 section-title">

                        <div style="width: 40px; margin: 0 auto;">
                                <hr style="border-width: 3px; border-color: #D00224;">
                        </div>

                        <h5 style="color: #00274e;">GALERIJA</h5>
                        <h6 class="section-subtitle">Pogledajte detaljnije ovaj projekat </h6>
                </div>

</div>

<div class="row offset-xl-2">
                <div class="col-xl-12 col-xs-12">
                        
                        <?php 
                                                        
                                if (have_posts()) : while (have_posts()) : the_post();
                                        the_content();
                                endwhile;
                                
                                endif;

                        ?>
                </div>
        </div>

</div>
</div>
        





<?php get_footer(); ?>