<?php
/**
 * The template part for displaying grid layout
 * @package Babysitting Day Care
 * @subpackage babysitting_day_care
 * @since 1.0
 */
?>
<div class="col-lg-4 col-md-4">
    <article class="blog-sec text-center p-2 mb-4">
        <?php 
            if(has_post_thumbnail() && get_theme_mod('babysitting_day_care_featured_image',true) == true) { 
            the_post_thumbnail(); 
            }
        ?>
        <h2><a href="<?php echo esc_url(get_permalink() ); ?>"><?php the_title(); ?><span class="screen-reader-text"><?php the_title(); ?></span></a></h2>
        <?php if(get_the_excerpt()) { ?>
            <div class="entry-content"><p><?php $babysitting_day_care_excerpt = get_the_excerpt(); echo esc_html( babysitting_day_care_string_limit_words( $babysitting_day_care_excerpt, esc_attr(get_theme_mod('babysitting_day_care_post_excerpt_number','20')))); ?> <?php echo esc_html( get_theme_mod('babysitting_day_care_button_excerpt_suffix','...') ); ?></p></div>
        <?php }?>
        <?php if ( get_theme_mod('babysitting_day_care_blog_button_text','Read Full') != '' ) {?>
            <div class="blogbtn my-3">
              <a href="<?php echo esc_url( get_permalink() );?>" class="blogbutton-small"><?php echo esc_html( get_theme_mod('babysitting_day_care_blog_button_text',__('Read Full', 'babysitting-day-care')) ); ?><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('babysitting_day_care_blog_button_text',__('Read Full', 'babysitting-day-care')) ); ?></span></a>
            </div>
        <?php }?>
    </article>
</div>