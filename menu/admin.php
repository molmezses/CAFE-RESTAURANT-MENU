<?php 

if(!$_POST){
  header('Refresh:.5; hesap.php');
}

?>




  
                          


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/giris.css">
  <link rel="stylesheet" href="css/table.css">
</head>
<body>



<div class="login-box">
  <h2>ÜRÜN EKLE</h2>
  <form method="post" action="yazdir.php" autocomplete="on" enctype="multipart/form-data"> 

    <div class="user-box">
      <input type="file" name="resim" >
      <label>Ürün Fotoğraf  : </label>
    </div>

    <div class="user-box">
      <input type="text" name="urunAdi" >
      <label>Ürün Adi  : </label>
    </div>

    <div class="user-box">
      <input type="text" name="urunAciklama" >
      <label>Ürün Açiklama  : </label>
    </div>

    <div class="user-box">
      <input type="text" name="urunFiyat" >
      <label>Ürün Fiyat  : </label>
    </div>
    <input type="radio" name="urunKate" value="sicak" required> <span style="color:#03e9f4;"> sicak </span>
    				<input type="radio" name="urunKate" value="soguk" required><span style="color:#03e9f4;"> soguk <br></span>
            <input type="radio" name="urunKate" value="yiyecek" required> <span style="color:#03e9f4;">yiyecek &nbsp;&nbsp;</span>
    				<input type="radio" name="urunKate" value="nargile" required> <span style="color:#03e9f4;">nargile<br></span> 
            <input type="Submit" name="Submit" class="submit" value="Kaydet">
  </form>
</div>


<div class="login-box">
  <h2>Güncellenek ürün kategorisi seçin</h2>
  <form action="" method="post" name="form1">
            <input type="radio" name="cars" value="sicak" required checked>  <span style="color:#03e9f4;"> sicak </span>
    				<input type="radio" name="cars" value="soguk" required><span style="color:#03e9f4;"> soguk <br></span>
            <input type="radio" name="cars" value="yiyecek" required> <span style="color:#03e9f4;">yiyecek &nbsp;&nbsp;</span>
    				<input type="radio" name="cars" value="nargile" required> <span style="color:#03e9f4;">nargile<br></span>
    
          
            
            <input type="Submit" name="Submit" class="submit" value="Kaydet">

</form>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      
    
  </form>
</div>





<?php 

$secilen=$_POST["cars"];


//GÜNCELLE PHP KODLARIM 

if($secilen=="sicak"){

  echo "

  <div class='login-box'>
  <h2>GÜNCELLE SICAK İCECEKLER</h2>
  <form method='post' action='guncelle.php' autocomplete='on' enctype='multipart/form-data'> 

  <div class='user-box'>
  <input type='text' name='urunid' >
  <label>Ürün id  : </label>
</div>

    <div class='user-box'>
      <input type='text' name='urunAdi' >
      <label>Ürün Adi  : </label>
    </div>

    <div class='user-box'>
      <input type='text' name='urunAciklama' >
      <label>Ürün Açiklama  : </label>
    </div>

    <div class='user-box'>
    <input type='text' name='urunFiyat' >
    <label>Ürün Fiyat : </label>
  </div>

  <input type='text' name='kategori' value='sicak_icecekler'  isibility='visible' style='width:1px; height:1px'>


  <input type='Submit' name='Submit' class='submit' value='Kaydet'  v >


      
    
  </form>
</div>

";

}
else if($secilen=="soguk"){

  echo "

  <div class='login-box'>
  <h2>GÜNCELLE SOGUK İCECEKLER</h2>
  <form method='post' action='guncelle.php' autocomplete='on' enctype='multipart/form-data'> 

  <div class='user-box'>
  <input type='text' name='urunid' >
  <label>Ürün id  : </label>
</div>

    <div class='user-box'>
      <input type='text' name='urunAdi' >
      <label>Ürün Adi  : </label>
    </div>

    <div class='user-box'>
      <input type='text' name='urunAciklama' >
      <label>Ürün Açiklama  : </label>
    </div>

    <div class='user-box'>
    <input type='text' name='urunFiyat' >
    <label>Ürün Fiyat : </label>
  </div>

  <input type='text' name='kategori' value='soguk_icecekler'  isibility='visible' style='width:1px; height:1px'>


  <input type='Submit' name='Submit' class='submit' value='Kaydet'  v >


      
    
  </form>
</div>

";

}
else if($secilen=="yiyecek"){

  echo "

  <div class='login-box'>
  <h2>GÜNCELLE YİYECEKLER</h2>
  <form method='post' action='guncelle.php' autocomplete='on' enctype='multipart/form-data'> 

  <div class='user-box'>
  <input type='text' name='urunid' >
  <label>Ürün id  : </label>
</div>

    <div class='user-box'>
      <input type='text' name='urunAdi' >
      <label>Ürün Adi  : </label>
    </div>

    <div class='user-box'>
      <input type='text' name='urunAciklama' >
      <label>Ürün Açiklama  : </label>
    </div>

    <div class='user-box'>
    <input type='text' name='urunFiyat' >
    <label>Ürün Fiyat : </label>
  </div>

  <input type='text' name='kategori' value='yiyecekler'  isibility='visible' style='width:1px; height:1px'>


  <input type='Submit' name='Submit' class='submit' value='Kaydet'  v >


      
    
  </form>
</div>

";

}
else if($secilen=="nargile"){

  echo "

  <div class='login-box'>
  <h2>GÜNCELLE NARGİLE</h2>
  <form method='post' action='guncelle.php' autocomplete='on' enctype='multipart/form-data'> 

  <div class='user-box'>
  <input type='text' name='urunid' >
  <label>Ürün id  : </label>
</div>

    <div class='user-box'>
      <input type='text' name='urunAdi' >
      <label>Ürün Adi  : </label>
    </div>

    <div class='user-box'>
      <input type='text' name='urunAciklama' >
      <label>Ürün Açiklama  : </label>
    </div>

    <div class='user-box'>
    <input type='text' name='urunFiyat' >
    <label>Ürün Fiyat : </label>
  </div>

  <input type='text' name='kategori' value='nargile'  isibility='visible' style='width:1px; height:1px'>


  <input type='Submit' name='Submit' class='submit' value='Kaydet'  v >


      
    
  </form>
</div>

";

}



?>





<div class="container">
<h1>SICAK İCECEKLER</h1>
  <table class="rwd-table">
    <tbody>
      <tr>
      <th>Ürün id</th>
      <th>Ürün Adı</th>
    <th>Ürün Açıklama</th>
    <th>Ürün Fiyat</th>
    <th>Ürün Kategori</th>
    <th>Ürünü Sil</th>

      </tr>

      <?php
      include("connect.php");

      $sonuc=mysqli_query($baglanti,"SELECT *FROM sicak_icecekler");
      mysqli_set_charset($baglanti, "utf8");
      
      while ($satir=mysqli_fetch_array($sonuc))
      {

        echo "
        <tr>
        <td data-th='Movie Title'>".$satir['urunid']."</td>
          <td data-th='Movie Title'>".$satir['urunAdi']."</td>
          <td data-th='Movie Title'>".$satir['urunAciklama']."</td>
          <td data-th='Genre'>".$satir['urunFiyat']."</td>
          <td data-th='Gross'>".$satir['urunKate']."</td>";
          echo '<td data-th="Gross"> <a href="silSicak.php?id='.$satir ['urunid'] .'">Sil</a></td>';;
        "
          
        </tr>
        ";
      }
      
      ?>
    </tbody>
  </table>

</div>

<div class="container">
<h1>SOĞUK İCECEKLER</h1>
  <table class="rwd-table">
    <tbody>
      <tr>
      <th>Ürün id</th>
      <th>Ürün Adı</th>
    <th>Ürün Açıklama</th>
    <th>Ürün Fiyat</th>
    <th>Ürün Kategori</th>
    <th>Ürünü Sil</th>


      </tr>

      <?php
      include("connect.php");

      $sonuc=mysqli_query($baglanti,"SELECT *FROM soguk_icecekler");
      mysqli_set_charset($baglanti, "utf8");
      
      while ($satir=mysqli_fetch_array($sonuc))
      {

        echo "
        <tr>
        <td data-th='Movie Title'>".$satir['urunid']."</td>
          <td data-th='Movie Title'>".$satir['urunAdi']."</td>
          <td data-th='Movie Title'>".$satir['urunAciklama']."</td>
          <td data-th='Genre'>".$satir['urunFiyat']."</td>
          <td data-th='Gross'>".$satir['urunKate']."</td>";
          echo '<td data-th="Gross"> <a href="silSoguk.php?id='.$satir ['urunid'] .'">Sil</a></td>';;
"
          
        </tr>
        ";
      }
      
      ?>
    </tbody>
  </table>

</div>


<div class="container">
<h1>YİYECEKLER</h1>
  <table class="rwd-table">
    <tbody>
      <tr>
      <th>Ürün id</th>
      <th>Ürün Adı</th>
    <th>Ürün Açıklama</th>
    <th>Ürün Fiyat</th>
    <th>Ürün Kategori</th>
    <th>Ürünü Sil</th>
    

      </tr>

      <?php
      include("connect.php");

      $sonuc=mysqli_query($baglanti,"SELECT *FROM yiyecekler");
      mysqli_set_charset($baglanti, "utf8");
      
      while ($satir=mysqli_fetch_array($sonuc))
      {

        echo "
        <tr>
        <td data-th='Movie Title'>".$satir['urunid']."</td>
          <td data-th='Movie Title'>".$satir['urunAdi']."</td>
          <td data-th='Movie Title'>".$satir['urunAciklama']."</td>
          <td data-th='Genre'>".$satir['urunFiyat']."</td>
          <td data-th='Gross'>".$satir['urunKate']."</td>";
          echo '<td data-th="Gross"> <a href="silYiyecek.php?id='.$satir ['urunid'] .'">Sil</a></td>';
   "
          
        </tr>
        ";
      }
      
      ?>
    </tbody>
  </table>

</div>

<div class="container">
<h1>NARGİLE ÇEŞİTLERİ</h1>
  <table class="rwd-table">
    <tbody>
      <tr>
      <th>Ürün id</th>
      <th>Ürün Adı</th>
    <th>Ürün Açıklama</th>
    <th>Ürün Fiyat</th>
    <th>Ürün Kategori</th>
    <th>Ürünü Sil</th>
  

      </tr>

      <?php
      include("connect.php");

      $sonuc=mysqli_query($baglanti,"SELECT *FROM nargile");
      mysqli_set_charset($baglanti, "utf8");
      
      while ($satir=mysqli_fetch_array($sonuc))
      {

        echo "
        <tr>
        <td data-th='Movie Title'>".$satir['urunid']."</td>
          <td data-th='Movie Title'>".$satir['urunAdi']."</td>
          <td data-th='Movie Title'>".$satir['urunAciklama']."</td>
          <td data-th='Genre'>".$satir['urunFiyat']."</td>
          <td data-th='Gross'>".$satir['urunKate']."</td>";
          echo '<td data-th="Gross"> <a href="silNargile.php?id='.$satir ['urunid'] .'">Sil</a></td>';
   "
          
        </tr>
        ";
      }
      
      ?>
    </tbody>
  </table>

</div>














  
</body>
</html>