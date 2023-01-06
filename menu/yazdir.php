 
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    
 
 
 
 
 <?php
 
 include("connect.php");

 
 
 if ($_POST) { // Sayfada post olup olmadığını kontrol ediyoruz.


$resim=$_FILES["resim"]["tmp_name"];
$yeniad=$_FILES["resim"]["name"];
move_uploaded_file($resim, $yeniad,);





$urunAdi = $_POST['urunAdi']; 
$urunKate = $_POST['urunKate'];

$urunFiyat = $_POST['urunFiyat'];
$urunAciklama = $_POST['urunAciklama'];


if ($urunAdi<>"" && $urunFiyat<>"") { 
// Veri alanlarının boş olmadığını kontrol ettiriyoruz. Başka kontrollerde yapabilirsiniz.


if($urunKate=="sicak"){

    if ($baglanti->query("INSERT INTO sicak_icecekler (urunFoto, urunAdi, urunAciklama, urunFiyat, urunKate) VALUES ('$yeniad','$urunAdi','$urunAciklama','$urunFiyat','$urunKate')")) 
    {
        echo " <div style='color:white; background:green; padding:50px; text-align:center;'>Kayıt Başarı ile Eklendi</div>";
        header('Refresh: 2; giris.php');
        
       	
       
    }
    else
    {
        echo "Hata oluştu";
    }

}elseif($urunKate=="soguk"){

    if ($baglanti->query("INSERT INTO soguk_icecekler (urunFoto, urunAdi, urunAciklama, urunFiyat, urunKate) VALUES ('$yeniad','$urunAdi','$urunAciklama','$urunFiyat','$urunKate')")) 
    {
        echo " <div style='color:white; background:green; padding:50px; text-align:center;'>Kayıt Başarı ile Eklendi</div>";
        header('Refresh: 2; giris.php');
        
       	
  
    }
    else
    {
        echo "Hata oluştu";
    }

}elseif($urunKate=="yiyecek"){

    if ($baglanti->query("INSERT INTO yiyecekler (urunFoto, urunAdi, urunAciklama, urunFiyat, urunKate) VALUES ('$yeniad','$urunAdi','$urunAciklama','$urunFiyat','$urunKate')")) 
    {
        echo " <div style='color:white; background:green; padding:50px; text-align:center;'>Kayıt Başarı ile Eklendi</div>";
        header('Refresh: 2; giris.php');
        
       	
      
    }
    else
    {
        echo "Hata oluştu";
    }

}elseif($urunKate=="nargile"){

    if ($baglanti->query("INSERT INTO nargile (urunFoto, urunAdi, urunAciklama, urunFiyat, urunKate) VALUES ('$yeniad','$urunAdi','$urunAciklama','$urunFiyat','$urunKate')")) 
    {
        echo " <div style='color:white; background:green; padding:50px; text-align:center;'>Kayıt Başarı ile Eklendi</div>";
        header('Refresh: 2; giris.php');
        
       	
       
    }
    else
    {
        echo "Hata oluştu";
    }

}


}
    
 }



?>
