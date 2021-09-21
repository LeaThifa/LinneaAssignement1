<?php 
/*
Template Name: Post
*/
?>

<?php get_header(); ?>
        <main>
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9">
                        <?php
                            if ( have_posts() ) {
	                            while ( have_posts() ) {
                                    the_post(); 
                        ?> 
	                            
                            <article>
                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" />
                                    <h2 class="title"><?php the_title(); ?></h2>
                                <ul class="meta">
                                    <li>
                                        <i class="fa fa-calendar"></i><?php the_date("F d, Y"); ?>
                                    </li>
                                    <li>
                                    <i class="fa fa-user"></i>
                                    <a href="forfattare.html"><?php the_author(); ?></a>
                                </li>
                                </ul>
                                <p><?php the_content(); ?></p>
                            </article>

                            <?php
                                } 
                            } 
                        ?>
                        </div>
                    </div>
                </div>
            </section>
        </main>

<?php get_footer(); ?>