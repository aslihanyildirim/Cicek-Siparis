<?php 

include("baglanti.php");

?>



<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <title>Giriş Yap</title>
  <link rel="stylesheet" href="css/giris.css">

</head>
<body>
  <div class="login-container">
    <h2>Giriş Yap</h2>
    <form action="#">
      <input type="text" placeholder="Kullanıcı Adı" required>
      <input type="password" placeholder="Şifre" required>
      <button type="submit">Giriş</button>
    </form>
    <p>Hesabınız yok mu? <a href="kayit.php">Kayıt Ol</a></p>
  </div>

</body>
</html>
