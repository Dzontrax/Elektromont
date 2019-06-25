<?php get_header(); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-xl-6 col-xs-12 home-page-">

image 
        </div>
        <div class="col-xl-6 col-xs-12 experience">

        <?php
            if ( have_posts() ) {
            while ( have_posts() ) {

                the_title(); 
            the_post();
            ?>
            <!--Post excerpt-->
            <p><?php the_excerpt(); ?></p>
            <!--"Read more" button-->
            <a href="<?php echo get_permalink() ?>"><button class="btn btn-primary">Read more</button></a>
            <?php
        }}
            ?>
        </div>
    

</div>
</div>


<?php get_footer(); ?>