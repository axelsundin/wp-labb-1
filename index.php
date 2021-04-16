<?php

get_header(); //Skriver ut header.php

if ( have_posts() ) { // kollar om anropet innehåller posts

    while ( have_posts() ) { //loopar över posts om de finns
        the_post(); // förbereder aktuell post, och tar bort den ur have_posts()
    
        the_title(); // skriver ut postens titel
        the_content(); // skriver ut postens innehåll
    }

}

get_footer(); //Skriver ut footer.php

?>



