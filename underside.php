<?php 
/*
Template Name: Underside 
*/
?>

<?php get_header(); ?> 

<main>
  <section>
    <div class="container">
      <div class="row">
        <div id="primary" class="col-xs-12 col-md-9">
          <h1><?php the_title(); ?></h1>
          <p>
            <?php the_content();  ?>
          </p>
        </div>
        <!-- Side menu for underpages -->
        <aside id="secondary" class="col-xs-12 col-md-3">
          <ul class="side-menu">
          
            <?php wp_nav_menu( array(
                    "theme_location" => "side-menu",
                    "menu_class" => "side-menu" )); 
            ?>

          </ul>
        </aside>
      </div>
    </div>
  </section>
</main>


<?php get_footer(); ?> 