<?php
/**
 * Template part for displaying a Intro section.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package About
 */

?>


<section id="What-I-do">
<nav id="SectionMenu" class="section-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('Primary Menu', 'about');?></button>
			<?php
					wp_nav_menu(
						array(
							'theme_location' => 'section-menu',
                            'menu_class' => 'section-menu',
                            'container_class' => 'section-navigation',
                              
						)
					);
			?>
</nav><!-- #site-navigation -->    

<div class="content-intro">
    <?php 
    $homepageIntros = new WP_Query(array(
        'posts_per_page' => 3,
        'post_type'     => 'intro'
    ));

        while ($homepageIntros->have_posts(  )){
            $homepageIntros->the_post(  );?>
    
            <div class="content-intro-item">
              <div class="content-intro-item-header">
                <h3><?php the_title( ); ?></h3>
              </div>
              <div class="content-intro-item-icon">
                <svg class="content-intro-item-svg"><use  xlink:href="./wp-content/themes/about/assets/sprite.svg#icon-wordpress"></use></svg>
              </div> 
              <div class="content-intro-item-content">
                <?php the_content(  ); ?>
             </div>  
            </div>
            
        <?php }
    ?>
</div>
</section>