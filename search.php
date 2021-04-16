<?php
    get_header(); //Skriver ut header.php
?>

<main>
	<section>
		<div class="container">
			<div class="row">
				<div id="primary" class="col-xs-12 col-md-9">
					<h1>Sökresultat:</h1>

					<?php
					while ( have_posts() ) { //loopar över posts om de finns
						the_post(); // förbereder aktuell post, och tar bort den ur have_posts()
					?>

					<article>
						<img src="<?php the_post_thumbnail_url() // skriver ut postens utvalda bild ?>" alt=""/> 
						<h2 class="title">
							<a href="<?php the_permalink() //skriver ut postens permalänk ?>"><?php the_title(); // skriver ut postens titel?></a>
						</h2>
						<ul class="meta">
							<li>
								<i class="fa fa-calendar"></i> <?php the_time('F j, Y'); // skriver ut postens datum(månad, dag, år) ?>
							</li>
							<li>
								<i class="fa fa-user"></i> <?php the_author_posts_link(); // länkar till sida med alla posts från författaren ?>
							</li>
							<li>
								<i class="fa fa-tag"></i> <?php the_category(', '); // länkar till postens kategori-sidor ?>
							</li>
						</ul>
						<?php the_content(); // skriver ut postens innehåll ?>
					</article>
					<?php
					} // avslutar loopen
					dynamic_sidebar();
					the_posts_pagination(); // Visar sidnavigation om det finns fler än 5 posts
					?>
				</div>
			</div>
		</div>
	</section>
</main>

<?php
	get_footer(); //Skriver ut footer.php
?>