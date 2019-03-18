<?php get_header(); ?>
    <div id="wrapper">

      <div id="header" class="blog-header">
        <section class="container">
          <h1><a class="logo" href="index.php">YAKENALOG OFFICIAL BLOG</a></h1>
          <ul class="blog-menu">
            <li><a class="logo" href="index.php">TOP</a></li>
            <li>Profile</li>
            <li>Contact</li>
          </ul>
        </section>
      </div><!-- header -->


  <?php if(have_posts()): ?>
    <div class="blog-container">
    <section id="article">
      <?php while(have_posts()): the_post(); ?>

        <?php if(has_post_thumbnail()): ?>
          <div class="img-box">
            <img src="<?php echo the_post_thumbnail_url('medium'); ?>" alt="">
          </div>
        <?php else: ?>
          <div class="img-box">
            <img src="https://placehold.jp/150x150.png" alt="">
          </div>
        <?php endif; ?>

        <div class="blog-contents">
          <h1><?php echo the_title(); ?>
          </h1>
          <?php the_content(); ?>
        </div>
      <?php endwhile; ?>

    </section>

    <!-- サイドバーの表示 -->
    <div class="side-wrap">
      <div id="sidebar">
        <div class="categories">
          <?php get_sidebar('categories'); ?>
        </div>
        <div class="archives">
          <?php get_sidebar('archives'); ?>
        </div>
      </div>
    </div>

    </div>
  <?php endif; ?>
<?php get_footer(); ?>