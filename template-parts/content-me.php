<?php
/**
 * Template part for displaying a Me section.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package About
 */

?>


<section id="About-me" >



    <div class="content-me">
        
    
            <?php
            $homepageMe = new WP_Query(array(
            'posts_per_page' => 2,
            'post_type'     => 'me',
            'order'         => 'ASC' 
        ));

            while ($homepageMe->have_posts(  )){
                $homepageMe->the_post(  );?>
        
                <div class="content-me-item">
                    
                    <?php the_content(  ); ?>
                </div>
                
            <?php } ?>
    </div>
</section>