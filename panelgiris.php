<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="style.css">
<script src="https://kit.fontawesome.com/c20485228a.js" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

.input-container {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  width: 100%;
  margin-bottom: 15px;
}

.icon {
  padding: 10px;
  background: dodgerblue;
  color: white;
  min-width: 50px;
  text-align: center;
}

.input-field {
  width: 100%;
  padding: 10px;
  outline: none;
}

.input-field:focus {
  border: 2px solid dodgerblue;
}

/* Set a style for the submit button */
.btn {
  background-color: dodgerblue;
  color: white;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
</style>
</head>
<body>
<section id="menu">
        <div id="logo">GEBZE BELEDİYESİ</div>
        <nav>
            <a href="index.php"><i class="fas fa-home ikon"></i>Anasayfa</a>
            <a href="kurumsal.php">Kurumsal</a>
            <a href="gebze.php">Gebze</a>
            <a href="">Haberler</a>
            <a href="">Hizmetler</a>
            <a href="">Etkinlikler</a>
            <a href="">E-Belediye</a>
            <a href="iletisim.php">İletişim</a>
            <a href="panelgiris.php">Yönetici Girişi</a>
        </nav>
</section>

<form action="panelgiris.php" method="post" style="max-width:500px;margin:auto">
  <h2>Giriş Paneli</h2>
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="Kullanıcı Adı" name="usrnm">
  </div>
  
  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="Parola" name="psw">
  </div>

  <button type="submit" class="btn">Giriş Yap</button>
</form>

</body>
</html>

<?php
session_start();

if(isset($_POST["usrnm"], $_POST["psw"]))
{
  if($_POST["usrnm"]=="admin"  && $_POST["psw"]=="12345")
  {
    $_SESSION["user"]=$_POST["usrnm"];
    header("location:panel.php");
  }

  else
  {
    echo "<script>alert('Kullanıcı Adı Veya Şifre Yanlış !')</script>";
  }
}
?>