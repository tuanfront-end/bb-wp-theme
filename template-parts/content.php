<?php

use BB_Theme\FunctionHelpers;

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="px-4 py-10 max-w-3xl mx-auto sm:px-6 sm:py-12 lg:max-w-4xl lg:py-16 lg:px-8 xl:max-w-6xl">
		<article class="prose prose-sm sm:prose lg:prose-lg xl:prose-2xl mx-auto">
			<?php the_title('<h1 class="entry-title text-5xl !mb-0 font-bold">', '</h1>'); ?>
			<p class="entry-meta text-gray-500 font-medium text-base mb-3">
				<?php echo FunctionHelpers::getDateFormat($post->post_date); ?>
			</p><!-- .entry-meta -->
			<p class="lead">
				<?php echo esc_html($post->post_excerpt); ?>
			</p>

			<p>
				<?php the_post_thumbnail('post-thumbnail', ['class' => 'w-full', 'title' => 'Feature image']); ?>
			</p>

			<?php
			the_content(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__('Continue reading<span class="screen-reader-text"> "%s"</span>', 'bb-theme'),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post(get_the_title())
				)
			);

			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . esc_html__('Pages:', 'bb-theme'),
					'after'  => '</div>',
				)
			);

			?>
		</article>
	</div>

</article><!-- #post-<?php the_ID(); ?> -->