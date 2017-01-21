
      <?php get_header(); ?>
      <main>
      <?php if (have_posts()) : ?>

      	<?php while (have_posts()) : the_post(); ?>

          <h1><?php the_title(); ?></h1>
          <article class="articles">

            <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'portrait-post' ); } ?>
            <p id="info"><?php the_author() ; ?>, <?php the_date(); ?>
            </p>
            <p>
              <?php the_content(); ?>

            <?php the_category(); ?>
            </p>
          </article>

      	<?php endwhile; ?>

      		<?php // Navigation ?>

      	<?php else : ?>

      		<?php // No Posts Found ?>

      <?php endif; ?>
      <?php get_sidebar(); ?>
      </main>
      <?php get_footer(); ?>
