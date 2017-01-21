
      <?php get_header(); ?>
      <main>
      <?php if (have_posts()) : ?>

      	<?php while (have_posts()) : the_post(); ?>

          <article class="list-articles">
            <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
            <a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'portrait' ); } ?></a>
            <p id="info"><?php the_author() ; ?>, <?php the_date(); ?>
            </p>
            <p>
              <?php the_content(); ?>
            </p>
          </article>

      	<?php endwhile; ?>

      		<?php // Navigation ?>

      	<?php else : ?>

      		<?php // No Posts Found ?>

      <?php endif; ?>
      </main>
      <?php get_footer(); ?>
