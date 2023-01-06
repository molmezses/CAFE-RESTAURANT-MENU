<script language="javascript">
                            window.onload = function (){
                               document.form1.submit();
                            } </script>

<?php 



$k=$_POST["kullanici_adi"];
$s=$_POST["sifre"];




$baglanti = new mysqli('localhost', 'arminsca_olmezses', 'Mmo12345#.', 'arminsca_urunler');
                            if(mysqli_connect_error()) //Eğer hata varsa yazdırıyoruz 
                            {
                                echo mysqli_connect_error();
                                exit; //eğer bağlantıda hata varsa PHP çalışmasını sonlandırıyoruz.
                            }


                        $baglanti->set_charset("utf8");

                        $sonuc=mysqli_query($baglanti,"SELECT *FROM uyeler");
                        mysqli_set_charset($baglanti, "utf8");

                        while ($satir=mysqli_fetch_array($sonuc))
                        {
                         if($satir["kullanici_adi"]==$k && $satir["sifre"]==$s){

                           

                           echo "
                            <form action='admin.php'  method='post' name='form1'>
                            <input type='text' name='isim' >
                            </form>
                            ";
                         }


                        }
        



        
        
        ?>




 <div style='color:white; background:red; padding:50px; text-align:center;'>YANLIŞ KULLANICI ADI VEYA ŞİFRE</div>";








