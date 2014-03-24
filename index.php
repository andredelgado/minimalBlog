<?php get_header(); ?>

<div class="featured">
    <img src="http://www.kriesi.at/themes/enfold/files/2013/04/room.jpg" />
</div>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <section class="article">
    <div class="container-fluid">
      <div class="articleHeader">
        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
      </div>
      <article>
        <?php the_content(); ?>
      </article>
    </div>
  </section>
<?php endwhile; endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?> 

  
