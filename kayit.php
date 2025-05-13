<?php 
include("baglanti.php");
$mesaj = "";
$mesaj_tipi = "";

if (isset($_POST["submit"])) {
    $name = $_POST["kullaniciadi"];
    $email = $_POST["email"];
    $password = $_POST["sifre"];
    $sifreOnay = $_POST["sifre_onay"];

    if ($password !== $sifreOnay) {
        $mesaj = "Şifreler uyuşmuyor!";
        $mesaj_tipi = "warning";
    } else {
        $sifre_hashli = password_hash($password, PASSWORD_DEFAULT);
        $ekle = "INSERT INTO kullanicilar (kullanici_adi, email, parola) VALUES ('$name', '$email', '$sifre_hashli')";
        $calistirekle = mysqli_query($baglanti, $ekle);

        if ($calistirekle) {
            $mesaj = "Kayıt başarılı!";
            $mesaj_tipi = "success";
        } else {
            $mesaj = "Kayıt oluşturulurken bir sorun oluştu.";
            $mesaj_tipi = "error";
        }
    }
}

if ($baglanti) {
    mysqli_close($baglanti);
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <title>Kayıt Ol</title>
  <link rel="stylesheet" href="css/kayit.css">
</head>
<body>
  <div class="register-container"> 
    <h2>Kayıt Ol</h2>
    <form action="kayit.php" method="POST">
      <input type="text" placeholder="Kullanıcı Adı" name="kullaniciadi" required>
      <div class="invalid-feedback">
        Lütfen geçerli bir kullanıcı adı giriniz.
      </div>

      <input type="email" placeholder="E-posta" name="email" required>
      <div class="invalid-feedback">
        Lütfen geçerli bir e-posta giriniz.
      </div>

      <input type="password" placeholder="Şifre" name="sifre" required>
      <div class="invalid-feedback">
        Lütfen geçerli bir şifre giriniz.
      </div>

      <input type="password" placeholder="Şifreyi Onayla" name="sifre_onay" required>
      <div class="invalid-feedback">
        Lütfen aynı şifreyi giriniz.
      </div>

      <button type="submit" name="submit">Kayıt Ol</button>
    </form>
    <p>Zaten hesabın var mı? <a href="giris.php">Giriş Yap</a></p>
  </div>

  <?php if (!empty($mesaj)) : ?>
<div id="popup" class="popup <?php echo $mesaj_tipi; ?>">
  <?php echo $mesaj; ?>
</div>
<script>
  setTimeout(function() {
    document.getElementById('popup').style.display = 'none';
  }, 3000); 
</script>
<?php endif; ?>


</body>
</html>
