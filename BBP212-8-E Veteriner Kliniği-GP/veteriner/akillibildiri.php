<?php 
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require("ayar.php");
if(isset($_POST)){
	
	        $listele=$db->query("select * from konu",PDO::FETCH_ASSOC);
	         if($listele->rowCount())
			 {
				 foreach($listele as $gelenveri)
				 {
					 if($gelenveri['aktif']==1)
					 {
						    $randevuzaman=$_POST["tarih"];
							require 'src/Exception.php';
							require 'src/PHPMailer.php';
							require 'src/SMTP.php';
							
							
							
								
										
											
							$mail = new PHPMailer(true);

						try {
						   
							$mail->isSMTP();  
							$mail->Host       = 'smtp.gmail.com';                    
							$mail->SMTPAuth   = true;
							

						 
						   
							$mail->Username   = 'eveterinerr@gmail.com';                     
							$mail->Password   = 'deneme123'; 
							
							$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         
							$mail->Port       = 587;                                    

							
							$mail->setFrom('eveterinerr@gmail.com', ' E_veteriner');		
							$mail->addAddress($_SESSION["adi"], 'Alici Adi');    
						   

							

						   
							$mail->isHTML(true);                                 
							$mail->Subject = 'Randevu Formu';
							$mail->Body    = $randevuzaman. " Tarih ve saatinize randevunuz alındı. ";  
							

							$mail->send();
						   echo $_SESSION["adi"].' mail adresine randevu detayınız başarıyla gönderildi..';
						   header("Refresh: 2; url=randevuadmin.php");
						} catch (Exception $e) {
							echo "Mesajınız iletilemedi. Hata !";
						}
					 }
					 else
					 {
						 header("location:randevuadmin.php");
					 }
				 }
			 }
			 
			 
			
							
	
	
		}

?>