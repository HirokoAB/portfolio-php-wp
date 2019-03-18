    <div id="wrapper">

      <div id="header" class="blog-header">
        <section class="container">
          <h1><a class="logo" href="index.php">YAKENALOG OFFICIAL BLOG</a></h1>
          <ul class="blog-menu">
            <li>Top</li>
            <li>Profile</li>
            <li>Contact</li>
          </ul>
        </section>
      </div><!-- header -->

      <div class="content-block" id="blog">
      <?php if(have_posts()): ?>
        <div class="container">
          <header class="block-heading cleafix">
            <a href="#" class="btn btn-o btn-lg pull-right">View All</a>
            <h1>From the Blog</h1>
            <p>Keep up with the latest happenings.</p>
          </header>

          <section class="block-body">
            <div class="row">
          <?php while(have_posts()): the_post(); ?>
              <div class="col-sm-4 blog-post" id="post-<?php the_ID(); ?>">
            <?php if(has_post_thumbnail()): ?>
                <a href="<?php echo the_permalink(); ?>"><img src="<?php echo the_post_thumbnail_url('thumbnail'); ?>"></a>
                <a href="<?php echo the_permalink(); ?>"><h2><?php echo the_title(); ?></h2></a>
                <div class="date">3 Nov, 2014</div>
            <?php else: ?>
              <a href="<?php echo the_permalink(); ?>">
                <img src="https://placehold.jp/150x150.png" alt="">
              </a>
            <?php endif; ?>
              <p><?php echo the_excerpt(); ?></p>
              <a href="<?php echo the_permalink(); ?>">Read More</a>
              </div>
          <?php endwhile; ?>
            </div>
          </section>

        <?php else: ?>
          <h2 class="sub-title">投稿はありません</h2>
        </div>
      <?php endif; ?>
      </div><!-- #blog -->
    
    </div>
