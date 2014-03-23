<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <section class="article">
    <div class="container">
      <div class="articleHeader">
        <h1 id="title"><?php the_title(); ?></h1>
      </div>
      <article class="articleBody">
        <?php the_content(); ?>
      </article>
    </div>
  </section>
<?php endwhile; endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?> 

  