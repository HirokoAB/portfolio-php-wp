<?php 
  $nickname = htmlspecialchars($_POST['nickname']);
  $email = htmlspecialchars($_POST['email']);
  $content = htmlspecialchars($_POST['content']);

if($nickname == ''){
  $nickname_result = 'ニックネームが入力されていません';
}else{
  $nickname_result = 'ようこそ'.$nickname.'様';
}

if($email == ''){
  $email_result = 'メールアドレスが入力されていません';
}else{
  $email_result = 'メールアドレス：'.$email;
}

if($content == ''){
  $content_result = '問い合わせ内容が入力されていません';
}else{
  $content_result = '問い合わせ内容：'.$content;
}

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

  <!-- confirmation form -->
  <div class="content-block check-form">
    <div class="container text-center">
      <header class="block-heading cleafix">
        <h1>Content Confirmation</h1>
        <p>Please check contents</p>
      </header>
      <section class="block-body">
        <div class="row">
          <div class="col-sm-6 col-md-offset-3">
            <form action="thanks.php" method="post">
              <table class="table table-form">
                <tbody>
                  <tr>
                    <th>your name</th>
                    <td><?php echo $nickname; ?></td>
                  </tr>
                  <tr>
                    <th>E-mail</th>
                    <td><?php echo $email; ?></td>
                  </tr>
                  <tr>
                    <th>content</th>
                    <td><?php echo $content; ?></td>
                  </tr>
                </tbody>
              </table>
              <div class="text-center">
                <?php if($nickname != '' && $email != '' && $content != ''):?>
                  <input class="btn btn-o-white btn-lg" type="button" value="return" onclick="history.back()">
                  <input class="btn btn-o-white btn-lg" type="submit" value="ok">
                <?php endif; ?>
              </div>
              <input name="nickname" value="<?php echo $nickname; ?>" type="hidden">
              <input name="email" value="<?php echo $email; ?>" type="hidden">
              <input name="content" value="<?php echo $content; ?>" type="hidden">
            </form>
          </div>
        </div>
      </section>
    </div>
  </div>

<?php get_footer(); ?>