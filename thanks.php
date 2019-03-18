<?php 
  $nickname = htmlspecialchars($_POST['nickname']);
  $email = htmlspecialchars($_POST['email']);
  $content = htmlspecialchars($_POST['content']);

  $dsn = 'mysql:dbname=phpkiso;host=localhost';
  $user = 'root';
  $password = '';

  $dbh = new PDO($dsn, $user, $password);
  $dbh->query('SET NAMES utf8');

  $sql = 'INSERT INTO portfolio (nickname,email,content) VALUES ("'.$nickname.'","'.$email.'","'.$content.'")';
  $stmt = $dbh->prepare($sql);
  $stmt->execute();

  $dbh = null;
 ?>

<?php get_header(); ?>

<div id="wrapper">
  <!-- header -->
  <div id="header" class="content-block">
    <div class="header-wrapper-inner">
      <section class="top clearfix solid">
        <div class="pull-left">
          <h1><a class="logo" href="index.php">Yakeyu</a></h1>
        </div>
        <div class="pull-right">
          <a class="toggleDrawer" href="#"><i class="fa fa-bars fa-2x"></i></a>
        </div>
      </section>
    </div>
  </div>

  <!-- Thanks form -->
  <div class="content-block check-form">
    <div class="container text-center">
      <header class="block-heading cleafix">
        <h1>Thanks to contact me!</h1>
        <p>I will response in a few day</p>
      </header>
      <section class="block-body">
        <input class="btn btn-o-white btn-lg" type="button" value="top" onclick="location.href='./index.php'">

      </section>
    </div>
  </div>

<?php get_footer(); ?>
