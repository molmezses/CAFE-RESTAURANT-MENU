
<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kullanıcı giriş paneli</title>
    <link rel="stylesheet" href="css/hesap.css">
</head>
<body>
    
<div class="login-box">
  <h2>GİRİŞ YAP</h2>
  <form action="uyeDogrula.php" method="post">
    <div class="user-box">
      <input type="text" name="kullanici_adi" required="">
      <label>Kullanıcı Adı :</label>
    </div>
    <div class="user-box">
      <input type="password" name="sifre" required="">
      <label>Şifre :</label>
    </div>
    
        
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <input type="Submit" name="Submit" class="grs" value="GİRİŞ YAP!">
      
    
  </form>
</div>


</body>
</html>