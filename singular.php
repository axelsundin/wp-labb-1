<?php
    get_header();
?>

<main>
    <section>
        <div class="container">
            <div class="row">
                <div id="primary" class="col-xs-12 col-md-9">
            
                <?php
                    while ( have_posts() ) {
                        the_post();
                ?>
                
                
                

                <h1><?php the_title(); ?></h1>

                <?php the_content(); 

                }
                ?>

                </div>
                <aside id="secondary" class="col-xs-12 col-md-3">
                    <?php wp_nav_menu( array( 'theme_location' => 'meny-undersidor', 'menu_class'=> 'side-menu' ) ); ?>
                </aside>
            </div>
        </div>
    </section>
</main>

<?php
    get_footer();
?>