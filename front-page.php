<?php
    get_header();
?>


		<main>
			<section>
			
            <?php
                while ( have_posts() ) {
                    the_post();
            ?>


                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="hero">
                            <img src="<?php the_post_thumbnail_url() ?>" alt=""/>
                                <div class="text">

                                <?php

                                echo "<h1>";
                                the_title();
                                echo "</h1>";

                                the_content();

                                ?>

                                </div>
							</div>
						</div>
					</div>
				</div>

            <?php
                }
            ?>

			</section>
		</main>

<?php 
	get_footer();
?>

