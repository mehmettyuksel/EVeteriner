<?php 

  
  try {
	  
	
    $db = new PDO("mysql:host=localhost;dbname=veteriner;charset=utf8","root","");	
	  
	  
  }catch(PDOException $mesaj){
	  
	  $mesaj->getmessage();
	  
  }


?>