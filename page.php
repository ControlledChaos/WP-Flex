<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<main id="content" class="<?php the_title(); ?> clearfix" role="main">
		<header>
			<h1><?php the_title(); ?></h1>
		</header>

		<!-- *optional* remove read more link -->
		<!-- http://codex.wordpress.org/Customizing_the_Read_More -->
		<!-- Resolves Issue #4: https://github.com/grayghostvisuals/WP-Flex/issues/4 -->
		<div class="entry-content">
			<?php the_content(); ?>
		</div>

		<?php wp_link_pages( array( 'before' => '<div>' . 'Pages &rarr;', 'after' => '</div>' ) ); ?>
	</main>
<?php endwhile; //end while have_posts ?>

<!-- begin comments template !IMPORTANT FOR THEME SUBMISSION -->
<?php comments_template(); ?>
<!-- end comments template !IMPORTANT FOR THEME SUBMISSION -->
<?php else : ?>
	<p><?php echo ( 'sorry, this page does not exist' ); ?></p>
<?php endif; //end if have_posts ?>

<!-- sidebar -->
<aside id="sidebar" role="complementary">
	<?php get_sidebar(); ?>
</aside>

<?php get_footer(); ?>