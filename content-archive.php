<main><ul><?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<?php get_template_part( 'post-formats/format', 'archive' );?>
<?php endwhile; ?>
</ul>
<?php else : ?>
<b>NOT FOUND</b>
<?php endif; ?>
</main>
