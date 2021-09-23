<?php 
/*
Template Name: Blogg
*/
?>

<?php get_header(); ?>

        <main>
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9">
                            <!-- Wordpress function that gets page name dynamically -->
                            <h1><?php wp_title(''); ?></h1>
                        <?php
                            if ( have_posts() ) {
	                            while ( have_posts() ) { 
                                    the_post();
                        ?>           

	                            
                        <article>
                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" />
                                <h2 class="title">
									<a href="<?php get_permalink(); ?>"><?php the_title(); ?></a>
								</h2>
                                <ul class="meta">
                                    <li>
                                        <i class="fa fa-calendar"></i><?php the_date("F d, Y"); ?>
                                    </li>
                                    <li>
                                    <i class="fa fa-user"></i>
                                    <a href="forfattare.html"><?php the_author(); ?></a>
                                </li>
                                </ul>
                                <p><?php the_excerpt(); ?></p>
                            </article>
                            
                        <?php
                                } 
                            } 
                        ?>
                        <nav class="navigation pagination">
                        <?php 
                            echo paginate_links( array(

                            "prev_text" => "<span>Förgående</span>",
                            "next_text" => "<span>Nästa</span>"
                        ));
                        ?> 
                        </nav>
                    </div>
                        <!-- Side menu for Blogg page -->

                
        <aside id="secondary" class="col-xs-12 col-md-3">
          <div id="sidebar">
            <ul>
              <li>
                <form id="searchform" class="searchform">
                  <div>
                    <label class="screen-reader-text">Sök efter:</label>
                    <input type="text" />
                    <input type="submit" value="Sök" />
                  </div>
                </form>
              </li>
            </ul>
            <ul role="navigation">
              <li class="pagenav">
                <h2>Sidor</h2>
                 <ul class=""> 
                  <!-- Menu for getting the side menu in Blog page -->
                <?php wp_nav_menu( array(
                        "theme_location" => "blog-menu", 
                        "menu_class" => "page_item"
                        )
                    ); 
                ?>
                        
             
                <h2>Arkiv</h2>
                
              <li class="categories">
                <h2>Kategorier</h2>
                </li>
              </ul>
          </div>
        </aside>	
                        
                        <!-- End side menu -->
                        
                     
                    </div>
                </div>
            </section>
        </main>
       

<?php get_footer(); ?>