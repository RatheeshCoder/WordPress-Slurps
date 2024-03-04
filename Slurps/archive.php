<?php get_header(); ?>

<section id="primary" class="content-area">
  <main id="main" class="site-main">
  
    <?php if ( have_posts() ) : ?>
    
      <header class="page-header">
        <?php
          the_archive_title( '<h1 class="page-title">', '</h1>' );
          the_archive_description( '<div class="taxonomy-description">', '</div>' );
        ?>
      </header>
      <!-- .page-header -->
    
      <?php
      while ( have_posts() ) :
        the_post();
        get_template_part( 'template-parts/content', get_post_type() );
      endwhile;
    
      the_posts_pagination( array(
        'prev_text' => __( 'Previous', 'textdomain' ),
        'next_text' => __( 'Next', 'textdomain' ),
      ) );
    
    else :
    
      get_template_part( 'template-parts/content', 'none' );
    
    endif;
    ?>
    
  </main><!-- #main -->
</section><!-- #primary -->

<?php get_footer(); ?>
