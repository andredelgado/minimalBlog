<?php
/*
Template Name: topbar
*/
?>
 <!-- <nav class="navbar navbar-default navbar-static-top" id="navbar-custom" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display --><!--
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"> </a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

        
      
      <?php get_search_form(); ?>

    </div>
  </div>
</nav>-->

<nav class="navbar navbar-default navbar-static-top" id="navbar-custom" role="navigation">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-1">
        <a class="navbar-brand" href="#"><?php bloginfo('name'); ?></a>
      </div>
      <div class="col-md-6">
        <?php wp_nav_menu( array('menu' => 'main menu', 'menu_class' => 'nav navbar-nav')); ?>
      </div>
      <div class="col-md-5">
        <?php get_search_form(); ?>
      </div>
    </div>
  </div>
</nav>