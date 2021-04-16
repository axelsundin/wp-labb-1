<?php
    get_header(); //Skriver ut header.php
?>

<main>
    <section>
        <div class="container">
            <div class="row">
                <div id="primary" class="col-xs-12 col-md-9">
            
                <?php
                    while ( have_posts() ) { //loopar över posts om de finns
                        the_post(); // förbereder aktuell post, och tar bort den ur have_posts()
                ?>
                
                <h1><?php the_title(); // skriver ut postens titel ?></h1>

                <?php the_content();  // skriver ut postens innehåll

                }
                ?>

                </div>
                <aside id="secondary" class="col-xs-12 col-md-3">
                    <?php wp_nav_menu( array( 'theme_location' => 'meny-undersidor', 'menu_class'=> 'side-menu' ) ); // Skriver ut 'Meny Undersidor' ?>
                </aside>
            </div>
        </div>
    </section>
</main>

<?php
    get_footer(); //Skriver ut footer.php
?>