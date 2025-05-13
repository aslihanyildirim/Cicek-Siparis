<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <title>Giriş Yap</title>
  <link rel="stylesheet" href="css/style.css">
  <style>
    body {
      background-color: #f8f0f0;
      font-family: Arial, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .login-container {
      background-color: white;
      padding: 30px 40px;
      border-radius: 12px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      width: 300px;
      text-align: center;
    }

    .login-container h2 {
      margin-bottom: 20px;
      color: #c94f7c;
    }

    .login-container input {
      width: 100%;
      padding: 10px;
      margin: 8px 0;
      border: 1px solid #ccc;
      border-radius: 8px;
    }

    .login-container button {
      width: 100%;
      padding: 10px;
      margin-top: 15px;
      background-color: #ff6f91;
      color: white;
      border: none;
      border-radius: 8px;
      font-weight: bold;
      cursor: pointer;
    }

    .login-container button:hover {
      background-color: #e85c84;
    }

    .login-container p {
      margin-top: 10px;
      font-size: 0.9em;
    }

    .login-container a {
      color: #c94f7c;
      text-decoration: none;
    }

    .login-container a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="login-container">
    <h2>Giriş Yap</h2>
    <form action="#">
      <input type="text" placeholder="Kullanıcı Adı" required>
      <input type="password" placeholder="Şifre" required>
      <button type="submit">Giriş</button>
    </form>
    <p>Hesabınız yok mu? <a href="register.html">Kayıt Ol</a></p>
  </div>

</body>
</html>
