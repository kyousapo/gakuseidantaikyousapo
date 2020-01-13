<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>お問い合わせ</title>
    <link rel="stylesheet" href="stylesheet7.css" type="text/css">
  </head>
  <body>

    <header>
    <a href="index.html"><img class="header-logo" src="学生団体教サポのロゴ名.jpg"></a>
      <div class="header-list">
        <ul>
          <li><a href="index2.html">ホーム</a></li>
          <li><a href="index3.html">団体紹介</a></li>
          <li><a href="index4.html">活動内容</a></li>
          <li><a href="index5.html">メンバー紹介</a></li>
          <li><a href="index6.html">ブログ</a></li>
          <li><a href="index7.php">お問い合わせ</a></li>
        </ul>
      </div>
    </header>

    <main>
      <div class="thanks-message">お問い合わせいただきありがとうございます。</div>
   <div class="display-contact">
     <div class="form-title">入力内容</div>

     <div class="form-item">■ 名前</div>
     <?php echo $_POST['name']; ?>

     <div class="form-item">■ 年齢</div>
     <?php echo $_POST['age']; ?>

     <div class="form-item">■ お問い合わせの種類</div>
     <!-- この下でcategoryを受け取りechoしましょう -->
     <?php echo $_POST['category']; ?>

     <div class="form-item">■ 内容</div>
     <?php echo $_POST['body']; ?>

   </div>
      </main>

      <footer>
      <img class="footer-logo" src="学生団体教サポのロゴ名.jpg">
      <p>「教育×αで最高のeducationを」</p>
    </footer>

  </body>
</html>
