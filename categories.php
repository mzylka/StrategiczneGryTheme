<aside class="categories">
    <?php
        $catnum = count(get_categories(array('get' => 'all', 'hide_empty' => 0)));
        for($i=2; $i<=$catnum; $i++){
            echo "<section><div class='categories__block'><h2 class='categories__title'>". get_cat_name($i) . "</h2>";
            $args = array(
                'cat' => $i,
                'posts_per_page' => 3
            );

            $catposts = new WP_Query($args);
            if($catposts->have_posts()):
                while($catposts->have_posts()):
                    $catposts->the_post();
                    get_template_part('cat-post');
                endwhile;
            endif;

            echo "</div></section>";
        }
    ?>
</aside>