<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">

    <script src="https://kit.fontawesome.com/c20485228a.js" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap" rel="stylesheet">

    <title>Gebze Belediyesi</title>
</head>
<body>
    <section id="menu">
        <div id="logo">GEBZE BELEDİYESİ</div>
        <nav>
            <a href="index.php"><i class="fas fa-home ikon"></i>Anasayfa</a>
            <a href="kurumsal.php">Kurumsal</a>
            <a href="gebze.php">Gebze</a>
            <a href="haberler.php">Haberler</a>
            <a href="">Hizmetler</a>
            <a href="">Etkinlikler</a>
            <a href="">E-Belediye</a>
            <a href="iletisim.php">İletişim</a>
            <a href="panelgiris.php">Yönetici Girişi</a>
        </nav>
        </section>

        <section id="iletisim">
            <div class="container">
                <h3 id="h3iletisim">İletişim</h3>
                <form action="iletisim.php" method="post">
                <div id="iletisimopak">
                    <div id="formgroup">
                        <div id="solform">
                            <input type="text" name="isim" placeholder="Ad Soyad" required class="form-control">
                            <input type="text" name="tel" placeholder="Telefon Numarası" required class="form-control">
                        </div>
                        <div id="sagform">
                            <input type="email" name="mail" placeholder="Email Adresiniz" required class="form-control">
                            <input type="text" name="konu" placeholder="Konu Başlığı" required class="form-control">
                        </div>

                        <textarea name="mesaj" id="" placeholder="Mesaj Giriniz" cols="30" rows="10" required class="form-control"></textarea>
                        <input type="submit" value="Gönder">
                    </div>

                    <div id="adres">
                        <h4 id="adresbaslik">Adres :</h4>
                        <p class="adresp">Güzeller Mahallesi</p>
                        <p class="adresp">Bahar Caddesi</p>
                        <p class="adresp">N:1 41400 Gebze/KOCAELİ</p>
                        <P class="adresp">0 262 642 0430</P>
                        <P class="adresp">gebze@gebze.bel.tr</P>
                    </div>
                </div>
                </form>

                <footer>
                    <div id="copyright">2022 | Tüm hakları saklıdır</div>
                    <div id="socialfooter">
                        <a href="https://www.facebook.com/gebzebelediye"><i class="fab fa-facebook-f social"></i></a>
                        <a href="#"><i class="fab fa-google-plus-g social"></i></a>
                        <a href="https://twitter.com/gebze_belediye?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><i class="fab fa-twitter social"></i></a>
                    </div>
                </footer>

            </div>
        </section>
        </body>
        </html>

        <?php
        include("baglanti.php");

        if(isset($_POST["isim"], $_POST["tel"], $_POST["mail"], $_POST["konu"], $_POST["mesaj"]))
        {
            $adsoyad=$_POST["isim"];
            $telefon=$_POST["tel"];
            $email=$_POST["mail"];
            $konu=$_POST["konu"];
            $mesaj=$_POST["mesaj"];

            $ekle="INSERT INTO iletisim (adsoyad, telefon, email, konu, mesaj) VALUES ('".$adsoyad."','".$telefon."','".$email."','".$konu."','".$mesaj."')";

            if($baglan->query($ekle)===TRUE)
            {
                echo "<script>alert('Mesajınız Başarıyla İletilmiştir.')</script>";
            }

            else
            {
                echo "<script>alert('Mesajınız Gönderilirken Bir Hata Oluştu !')</script>";
            }
        }
        ?> 

        