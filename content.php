<article class="post-block">
    <div class="post-block__image-box"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('small-thumbnail') ?></a></div>
    <div class="post-block__text">
        <div class="post-block__title-box">
            <h2 class="post-block__title"><a class="post-block__title-link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        </div>
        <div class="post-block__date-box">
            <p class="post-block__date"><?php the_time('j F, Y') ?> | Kategoria: <?php echo getCategory() ?></p>
        </div>
        <div class="post-block__excerpt-box">
            <p>
				<?php echo get_the_excerpt(); ?>
			</p>
        </div>
    </div>
</article>