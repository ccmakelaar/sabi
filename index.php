<?php
/**
 * Posts page template.
 *
 * @link https://lillehummer.nl
 *
 * @package lillehummernl
 */

get_header(); ?>

<div class="content">

	<main class="main clearfix" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

		<?php while ( have_posts() ) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article">

			<header class="article-header">
				<h1 class="h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>

				<p class="byline entry-meta vcard">
					<?php printf( esc_html__( 'Posted %1$s by %2$s', 'lillehummernl' ),
						'<time class="updated entry-time" datetime="' . get_the_time( 'Y-m-d' ) . '" itemprop="datePublished">' . get_the_time( get_option( 'date_format' ) ) . '</time>',
						'<span class="by">by</span> <span class="entry-author author" itemprop="author" itemscope itemptype="http://schema.org/Person">' . get_the_author_link( get_the_author_meta( 'ID' ) ) . '</span>'
					); ?>
				</p>
			</header>

			<section class="entry-content clearfix">
				<?php the_content(); ?>
			</section>

			<footer class="article-footer">
				<p class="tags"><?php the_tags( '<span class="tags-title">' . __( 'Tags:', 'lillehummernl' ) . '</span> ', ', ', '' ); ?></p>
			</footer>

		</article>

		<?php endwhile; ?>

		<?php if ( function_exists( 'hummer_page_navi' ) ) :
			hummer_page_navi();
		endif; ?>

	</main>

	<?php get_sidebar(); ?>

</div>

<?php get_footer();
