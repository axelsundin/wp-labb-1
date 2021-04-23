<?php

get_header(); //Skriver ut header.php

?>

<main>
    <section>
        <div class="container">
            <div class="row">
                <div id="primary" class="col-xs-12 col-md-9">
                    <article>

<?php

if ( have_posts() ) { // kollar om anropet innehåller posts

    while ( have_posts() ) { //loopar över posts om de finns
        the_post(); // förbereder aktuell post, och tar bort den ur have_posts()
    
        the_title(); // skriver ut postens titel
        the_content(); // skriver ut postens innehåll
    }

} else {
    
    echo '<h1>Innehåll saknas</h1>';

}

?>

                    </article>
                </div>
            </div>
        </div>
    </section>
</main>

<?php

get_footer(); //Skriver ut footer.php

?>



