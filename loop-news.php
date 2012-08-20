<?php $latest = new WP_Query('showposts=5'); ?>
<?php while( $latest->have_posts() ) : $latest->the_post(); ?>
  <?php roots_post_before(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php roots_post_inside_before(); ?>
      <header>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php roots_entry_meta(); ?>
      </header>
      <div class="entry-content">
        <?php if (is_archive() || is_search()) { ?>
          <?php the_excerpt(); ?>
        <?php } else { ?>
          <?php the_content(); ?>
        <?php } ?>
      </div>
      <footer>
        <?php $tags = get_the_tags(); if ($tags) { ?><p><?php the_tags(); ?></p><?php } ?>
      </footer>
    <?php roots_post_inside_after(); ?>
    </article>
  <?php roots_post_after(); ?>
<?php endwhile; /* End loop */ ?>

<?php /* Display navigation to next/previous pages when applicable */ ?>
<?php if ($wp_query->max_num_pages > 1) { ?>
  <nav id="post-nav" class="pager">
    <div class="previous"><?php next_posts_link(__('&larr; Older posts', 'roots')); ?></div>
    <div class="next"><?php previous_posts_link(__('Newer posts &rarr;', 'roots')); ?></div>
  </nav>
<?php } ?>