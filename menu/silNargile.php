<?php

include("connect.php");
if ($_GET)
{

	if ($sil=mysqli_query($baglanti,"DELETE FROM nargile WHERE urunid=".(int)$_GET['id'])) 

{
    echo " <div style='color:white; background:green; padding:50px; text-align:center;'>silindi</div>";
    

}
	else {
		echo "Silme işlemi gerçekleştirilemedi";
		
		}
}


?>


<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


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