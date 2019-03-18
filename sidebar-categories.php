<h3>カテゴリー</h3>
<ul>
  <?php 
    $ages = [
      'title_li' => '',
      'show_count' => true,
    ];
    wp_list_categories($ages);

   ?>
</ul>