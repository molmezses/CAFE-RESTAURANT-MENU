<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARMİNS | MENÜ</title>
    <link rel="stylesheet" href="css/urunler.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Mouse+Memoirs&display=swap" rel="stylesheet">
</head>
<body>





        <div class="texta">
        <a href="index.php" style="color:black;"><i class="fa fa-arrow-left" style="font-size:24px; float:left;"></i></a>
           <span style="font-size:20px;">  SOĞUK İÇECEKLER</span>
        </div>
        <div class="container">

        <?php

include("yazdir.php");
        
$baglanti = new mysqli('localhost', 'arminsca_olmezses', 'Mmo12345#.', 'arminsca_urunler');
                            if(mysqli_connect_error()) //Eğer hata varsa yazdırıyoruz 
                            {
                                echo mysqli_connect_error();
                                exit; //eğer bağlantıda hata varsa PHP çalışmasını sonlandırıyoruz.
                            }


                        $baglanti->set_charset("utf8");

                        $sonuc=mysqli_query($baglanti,"SELECT *FROM soguk_icecekler");
                        mysqli_set_charset($baglanti, "utf8");

                        while ($satir=mysqli_fetch_array($sonuc))
                        {
                            echo " <div class='box'>
                            <div class='imgbox'>
                                <img src='".$satir['urunfoto']."' class='img'>
                            </div>
                            <div class='textbox'>
                                <div class='headertext'>".$satir ['urunAdi']."</div><br><br>
                                <div class='contenttext'>".$satir ['urunAciklama']."</div>
                            </div>
                            <div class='price'>".$satir ['urunFiyat'].".00 ₺</div>
                           
                        </div>";


                        }
        
        
        
        ?>

                             

     



</body>
</html>