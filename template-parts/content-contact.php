<?php
/**
 * Template part for displaying a Contact section.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package About
 */

?>

<section id="Contact-me" class="">


    <div class="content-contact">
        <div class="content-contact-message">
        <h3>Contact me</h3> 
        <p>
            Be free to contact me, you can fill the form or use one of the offered platforms. 
        </p>  
        </div>
        
        <div class="content-contact-form">
            <?php echo do_shortcode( '[contact-form-7 id="51" title="Contact form 1"]') ?>
        </div>

        <div class="content-contact-alt">
            <?php 
            
            wp_nav_menu(
                array(
                    'theme_location' => 'social-menu',
                    'menu_class'	=>   'content-contact-alt-menu'		
                )
            );
            
            ?>
        </div>
    </div>
    
</section>