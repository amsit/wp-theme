<?php get_header(); ?>

  <div class="span11 content">

    <?php if (have_posts()) : ?>

      <?php while (have_posts()) : the_post(); ?>

        <div class="search-result-part">
          <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
          <?php echo trimPost('300') . '<a href="' . get_permalink() . '">Continue reading &rarr;</a>'; ?>
        </div>

      <?php endwhile; ?>

    <?php else : ?>

    <h2>Nothing Found!</h2>

    <?php endif; ?>

  </div> <!-- /content -->

<?php get_footer(); ?>