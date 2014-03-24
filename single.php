<?php get_header(); ?>



<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <div class="featured">
    <?php if ( has_post_thumbnail() ) { ?>
    <a href="<?php the_permalink(); ?>">
    <?php the_post_thumbnail( 'medium', array( 'class' => 'left',
            'alt'   => trim( strip_tags( $wp_postmeta->_wp_attachment_image_alt ) )
        ) ); ?>
    </a>
    <?php } ?>
  </div>
  <section class="article">
    <div class="container">
      <div class="articleHeader">
        <h1 id="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
      </div>
      <article class="articleBody">
        <?php the_content(); ?>
      </article>
    </div>
  </section>
<?php endwhile; endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?> 

  