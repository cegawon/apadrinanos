<?php
  require('conexion.php');  
  session_start();
  // include phpmailer class
 require 'PHPMailer/src/Exception.php';
 require 'PHPMailer/src/PHPMailer.php';
 require 'PHPMailer/src/SMTP.php';
 
 use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\SMTP;
 use PHPMailer\PHPMailer\Exception;
  // creates object
  $mail = new PHPMailer(); 

  $dtz = new DateTimeZone("America/Bogota");
  $dt = new DateTime("now", $dtz);
  $fecha = $dt->format("Y-m-d H:i:s");

  //$resultados = mysqli_query($conexion,"select  *from registro where correo = '$_POST[correo]' ");  
  //if($consulta = mysqli_fetch_array($resultados))
  //{

   $_SESSION['mensaje'] = 1;
   $nombre  = $_POST['nombre'];
   $subject    = $_POST['asunto'];
   $mensaje    = "Hello $nombre, <br /><br /> This is HTML eMail Sent using PHPMailer. isn't it cool to send HTML email rather than plain text, it helps to improve your email marketing.";      
   
   
   // HTML email starts here
   
   $message  = "<html><body> <html lang='es'>
   <head>
       <meta charset='UTF-8'>
       <meta http-equiv='X-UA-Compatible' content='IE=edge'>
       <meta name='viewport' content='width=device-width, initial-scale=1.0'>
       <title>Correo</title>
   </head>";       

   $message .= "<img src='https://prueba-cega.000webhostapp.com/donar/img/contact.jpg' height='200' width='1200'  style='margin-left: 25px;'/>
           <p style='text-align:center; margin-top: 50px;'><b style='text-transform: uppercase;'>REMITENTE:</b> ".$nombre."</p>
           <p style='text-align: center; font-weight: bold; font-size: 30px;'>".$_POST['asunto']."</p>
           <p style='text-align: justify;'>".$_POST['mensaje']."</p>";
   $message .= "</body></html>";
   
   // HTML email ends here
   
   try
   {
               
    $mail->AddAddress('cegawon@hotmail.com',$_POST['correo']);
    $mail->Username   ="mariarodriguezxx20@gmail.com";  
                         $mail->Password   ="77092836";            
                         $mail->SetFrom('mariarodriguezxx20@gmail.com','Apadrinanos');
                         $mail->AddReplyTo("mariarodriguezxx20@gmail.com","Apadrinanos");
    $mail->Subject    = $subject;
    $mail->Body    = $message;
    $mail->AltBody    = $message;
   
    if($mail->Send())
    {
     
     $msg = "<div class='alert alert-success'>
       Hi,<br /> ".$nombre." mail was successfully sent to cegawon@hotmail.com go and check, cheers :)
       </div>";
     
    }
   }
   catch(phpmailerException $ex)
   {
    $msg = "<div class='alert alert-warning'>".$ex->errorMessage()."</div>";
   }
  /*}
  else {
    $_SESSION['mensaje'] = 2;  
  } */

  mysqli_query($conexion,"insert into correo (nombre, correo, asunto, mensaje, fecha) values('$_POST[nombre]', '$_POST[correo]', '$_POST[asunto]', '$_POST[mensaje]', '$fecha')"); 
  header("location:index.php")
?>