<form class="searchform__form" role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
        <input class="searchform__text" type="text" name="s" id="s" placeholder="Szukaj..." value="<?php the_search_query(); ?>"/>
        <button class="searchform__button"><svg class="searchform__icon"><use xlink:href="<?php echo get_template_directory_uri(); ?>/images/sprite.svg#icon-search"></use></svg></button>
        <!--<input type="submit" id="searchsubmit" value="Szukaj" />--> 
</form>