<?php
require("ayar.php");

	$id=$_POST["id"];
		$durum=$_POST["durum"];
		$query=$db->prepare("update konu set aktif= ? where id=?");
		$query->execute([$durum,$id]);


	if($durum)	
	{
       echo "Bildrimler aktif edildi";
	}	
    else{
	echo "Bildirimler pasif ";
}	



?>