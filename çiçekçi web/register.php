<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <title>Kayıt Ol</title>
  <link rel="stylesheet" href="css/style.css">
  <style>
    body {
      background-color: #f0f8f8;
      font-family: Arial, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .register-container {
      background-color: white;
      padding: 30px 40px;
      border-radius: 12px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      width: 320px;
      text-align: center;
    }

    .register-container h2 {
      margin-bottom: 20px;
      color: #3a9d9d;
    }

    .register-container input {
      width: 100%;
      padding: 10px;
      margin: 8px 0;
      border: 1px solid #ccc;
      border-radius: 8px;
    }

    .register-container button {
      width: 100%;
      padding: 10px;
      margin-top: 15px;
      background-color: #3ab9b9;
      color: white;
      border: none;
      border-radius: 8px;
      font-weight: bold;
      cursor: pointer;
    }

    .register-container button:hover {
      background-color: #2a9a9a;
    }

    .register-container p {
      margin-top: 10px;
      font-size: 0.9em;
    }

    .register-container a {
      color: #3a9d9d;
      text-decoration: none;
    }

    .register-container a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="register-container">
    <h2>Kayıt Ol</h2>
    <form action="#">
      <input type="text" placeholder="Kullanıcı Adı" required>
      <input type="email" placeholder="E-posta" required>
      <input type="password" placeholder="Şifre" required>
      <input type="password" placeholder="Şifreyi Onayla" required>
      <button type="submit">Kayıt Ol</button>
    </form>
    <p>Zaten hesabın var mı? <a href="login.html">Giriş Yap</a></p>
  </div>

</body>
</html>
