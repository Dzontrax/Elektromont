
<?php wp_footer(); ?>
<div class="row">
    <div class="container-fluid" style="height: auto; width: 100%; background-color: #00274E;">
      
        <div class="row main-footer-row">

            <div class="col-xl-3 col-xs-12 footer-logo footer-item">
            <img class="img-fluid" src="<?php echo get_bloginfo( 'template_directory' ); ?>/assets/images/logo-white.png" width="200px"/>
            <p><?php if( dynamic_sidebar('footer-onama')); ?></p>

            </div>
            <div class="col-xl-3 col-xs-12 footer-objekti footer-item">
            <?php if( dynamic_sidebar('footer-objekti')); ?>
            </div>
            <div class="col-xl-3 col-xs-12 footer-menu footer-item">
            <?php if( dynamic_sidebar('footer-menu')); ?>
            </div>
            <div class="col-xl-3 col-xs-12 footer-kontakt footer-item">
                <?php //get_template_part('page','footerkontakt');?>
            <?php if( dynamic_sidebar('footer-kontakt')); ?>
            </div>

        </div>
    </div>   
</div>
</html>