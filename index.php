<?php get_header(); ?>

<div class="featured">
    
</div>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <section class="article">
    <div class="container-fluid">
      <div class="articleHeader">
        <h1><?php the_title(); ?></h1>
      </div>
      <article>
        <?php the_content(); ?>
      </article>
    </div>
  </section>
<?php endwhile; endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?> 

  
