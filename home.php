<?php
    get_header(); //Skriver ut header.php
?>

<main>
	<section>
		<div class="container">
			<div class="row">
				<div id="primary" class="col-xs-12 col-md-9">
					<h1>Blogg</h1>

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
					?>
					<?php
					the_posts_pagination(); // Visar sidnavigation om det finns fler än 5 posts
					?>
				</div>
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
								<ul>
									<li class="page_item current_page_item">
										<a href="">Blogg</a>
									</li>
									<li class="page_item">
										<a href="">Exempelsida</a>
									</li>
									<li class="page_item">
										<a href="">Kontakt</a>
									</li>
									<li class="page_item page_item_has_children">
										<a href="">Om mig</a>
										<ul class="children">
											<li class="page_item">
												<a href="">Intressen</a>
											</li>
											<li class="page_item page_item_has_children">
												<a href="">Portfolio</a>
												<ul class="children">
													<li class="page_item">
														<a href="">Projekt 1</a>
													</li>
												</ul>
											</li>
										</ul>
									</li>
									<li class="page_item">
										<a href="">Startsida</a>
									</li>
								</ul>
							</li>
							<li>
								<h2>Arkiv</h2>
								<ul>
									<li>
										<a href="arkiv.html">oktober 2016</a>
									</li>
								</ul>
							</li>
							<li class="categories">
								<h2>Kategorier</h2>
								<ul>
									<li class="cat-item">
										<a href="">Natur</a> (1)
									</li>
									<li class="cat-item">
										<a href="">Okategoriserade</a> (3)
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</aside>
			</div>
		</div>
	</section>
</main>

<?php
	get_footer(); //Skriver ut footer.php
?>