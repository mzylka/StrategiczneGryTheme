<article class="post-content">
    <header class="post-content__header">
        <div class="post-content__image-box">
            <?php the_post_thumbnail('large-thumbnail'); ?>
        </div>
        <div class="post-content__text">
            <div class="post-content__title">
                <h1><?php the_title(); ?></h1>
            </div>
            <div class="post-content__date-box">
                <p class="post-block__date"><?php the_time('j F, Y') ?> | Kategoria: <?php echo getCategory() ?></p>
            </div>
        </div>
    </header>
    <div class="post-content__main">
        <?php the_content(); ?>
    </div>
</article>