<aside id="secondary" class="col-xs-12 col-md-3">
    <div id="sidebar">
        <ul>
            <li>
                <?php
                dynamic_sidebar('customsearch'); //lägger in sökwidget
                ?>
            </li>
        </ul>
        <ul role="navigation">
                
            <?php
            dynamic_sidebar('customcategories'); //lägger in kategori-widget
            ?>

        </ul>
    </div>
</aside>