<?php
 
 include("connect.php");

$kategori=$_POST["kategori"];
$id=$_POST["urunid"];
$yeniurunadi=$_POST["urunAdi"];
$yeniurunaciklama=$_POST["urunAciklama"];
$yeniurunfiyat=$_POST["urunFiyat"];

$sql = "UPDATE $kategori SET urunAdi='$yeniurunadi', urunFiyat='$yeniurunfiyat' , urunAciklama='$yeniurunaciklama' WHERE urunid='$id'";
if ($baglanti->query($sql) === TRUE) {
    $message3 = "ÜRÜN BAŞARI İLE GÜNCELLENDİ";
    echo "<script type='text/javascript'>alert('$message3');</script>";
    header("Refresh: 2; admin.php");
} else {
  echo "Güncelleme Hatası: " . $conn->error;
}






?>

<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<script language="javascript">
                            window.onload = function (){
                               document.form1.submit();
                            } </script>

<?php 
echo "
                            <form action='admin.php'  method='post' name='form1'>
                            <input type='text' name='isim' >
                            </form>
                            ";

							?>
