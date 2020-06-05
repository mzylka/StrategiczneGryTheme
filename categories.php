<aside class="categories">
    <?php
        $categories = get_categories();
        $categoriesArray = [];

        foreach($categories as $category){
            array_push($categoriesArray, $category->cat_ID);
        }
        
        foreach($categoriesArray as $catId){
            echo "<section><div class='categories__block'><h2 class='categories__title'>". get_cat_name($catId) . "</h2>";

            $args = array(
                'cat' => $catId,
                'posts_per_page' => 3
            );

            $catposts = new WP_Query($args);
            if($catposts->have_posts()):
                while($catposts->have_posts()):
                    $catposts->the_post();
                    get_template_part('cat-post');
                endwhile;
            endif;

            wp_reset_query();

            echo "</div></section>";
        }
    ?>
</aside>