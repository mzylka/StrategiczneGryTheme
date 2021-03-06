<?php
get_header(); ?>

<main role="main" class="main-section container">
	<div class="row">
		<div class="left-column">
                <?php
                    if(have_posts()) :
                        while(have_posts()) :
                            the_post();
                            get_template_part('post-content');
                        endwhile;

                    else:
                        echo "<p>No content</p>";
                    endif;
                ?>
		</div>
		<div class="right-column">
			<?php get_template_part('categories') ?>
		</div>
	</div>
</main>

<?php
get_footer();	
?>