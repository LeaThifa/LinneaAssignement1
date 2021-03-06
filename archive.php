<?php
/*
Template Name: Archive
*/
?>

<?php get_header(); ?>

<main>
    <section>
        <div class="container">
            <div class="row">
                <div id="primary" class="col-xs-12 col-md-9">
                    <h1>Arkiv:</h1>
                    <h3 class="archiveMonth"><?php wp_get_archives('type=monthly') ?></h3>
                    <?php
                    if (have_posts()) {
                        while (have_posts()) {
                            the_post();
                    ?>

                            <article>
                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" />
                                <h2 class="title">
                                    <a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
                                </h2>
                                <ul class="meta">
                                    <li>
                                        <i class="fa fa-calendar"></i><?php the_date("F d, Y"); ?>
                                    </li>
                                    <li>
                                        <i class="fa fa-user"></i>
                                        <a href="forfattare.html"><?php the_author(); ?></a>
                                    </li>
                                    <li>
                                        <i class="fa fa-tag"></i>
                                        <!-- Displays the categories -->
                                        <?php echo get_the_category_list(", "); ?>
                                    </li>
                                </ul>
                                <p><?php the_excerpt(); ?></p>
                            </article>

                    <?php
                        }
                    }
                    ?>
                    <nav class="navigation pagination">

                        <?php echo paginate_links(array(

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
                                <!-- Displaying side menu with the class "page_item"-->
                                <?php wp_nav_menu(array(
                                    "theme_location" => "blog-menu",
                                    "menu_class" => "page_item"
                                ));
                                ?>

                                <h2>Arkiv</h2>
                                <?php wp_get_archives(); ?>

                            <li class="categories">
                                <h2>Kategorier</h2>
                                <ul>

                                    <?php
                                    //  Gets the categories 
                                    $categories = get_categories(array(
                                        'orderby' => 'name',
                                    ));
                                    // Loop that count how many posts are in a category
                                    foreach ($categories as $category) {
                                        echo '<li class="cat-item min-egen-class"><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a><span class="text-white"> (' . $category->category_count . ')' . '</span></li>';
                                    }
                                    ?>
                                </ul>
                    </div>
                </aside>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>