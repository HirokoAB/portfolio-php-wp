<?php get_header(); ?>

  <?php if(have_posts()): ?>
    <section id="article">
      <?php while(have_posts()): the_post(); ?>
        <?php if(has_post_thumbnail()): ?>
          <div class="img-box">
            <img src="<?php echo the_post_thumbnail_url('medium'); ?>" alt="" style=''>
          </div>
        <?php else: ?>
          <div class="img-box">
            <img src="https://placehold.jp/150x150.png" alt="">
          </div>
        <?php endif; ?>

        <div class="blog-contents">
          <hr>
          <h1><?php echo the_title(); ?></h1>
            <?php the_content(); ?>
          <hr>
        </div>

      <?php endwhile; ?>
    </section>
  <?php endif; ?>
  
<?php get_footer(); ?>