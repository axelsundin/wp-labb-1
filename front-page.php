<?php
    get_header(); //Skriver ut header.php
?>

		<main>
			<section>
			
            <?php
                while ( have_posts() ) { //loopar över posts om de finns
                    the_post(); // förbereder aktuell post, och tar bort den ur have_posts()
            ?>


                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="hero">
                            <img src="<?php the_post_thumbnail_url() // skriver ut postens utvalda bild ?>" alt=""/>
                                <div class="text">

                                <?php

                                echo "<h1>";
                                the_title(); // skriver ut postens titel
                                echo "</h1>";

                                the_content(); // skriver ut postens innehåll

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
	get_footer(); //Skriver ut footer.php
?>

