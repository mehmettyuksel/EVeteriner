<form name="form1" action="" method="POST">
<center><button type="submit" class="btn btn-primary" name="hesapla">hesapla</button></center>
</form>



<?php

if(isset($_POST['hesapla']))
{
$db = new PDO("mysql:host=localhost;dbname=veteriner",'root','');


	$randevuucret=50;
	$mamaucret=200;
	$asiucret=20;
	
	if($db)
	{
	$ekle=$db->exec("INSERT INTO randevutest (randevuucret) VALUES ('$randevuucret')");
	$ekle1=$db->exec("INSERT INTO mamatest (mamaucret) VALUES ('$mamaucret')");
    $ekle2=$db->exec("INSERT INTO asitest (asiucret) VALUES ('$asiucret')");
	
    }
}
?>