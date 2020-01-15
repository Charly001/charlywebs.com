<?php

  if(isset($_POST['submit'])){
  $name= $_POST['name'];
  $email= $_POST['email'];
  $message= $_POST['message'];
  $error= '';
  $correct= false;

    if (!empty($name)) {
      // $name= trim($name);
      // $name= htmlspecialchars($name);
      // $name= stripslashes($name);
      $name= filter_var($name, FILTER_SANITIZE_STRING); //funcion alternativa a las anteriores
    }else {$error .= '<p>- Por favor, introduce su lindo nombre.</p>';}

    if (!empty($email)) {
      $email= filter_var($email, FILTER_SANITIZE_EMAIL);
    }else {$error .= '<p>- Olvidaste introducir la dirección de correo electrónico.</p>';}

    if (!empty($message)) {
      $message= filter_var($message, FILTER_SANITIZE_STRING);
    }else {$error .= '<p>- No se detectó ningun mensaje ¡No seas tímido!</p>';}

    /*Comprobando que no haya errores*/
    if(!$error){
      $mail_adress='Carlosbernay_91@hotmail.com';
      $mail_subject= 'Mensaje desde el Portfolio :D';
      $mail_txt= "De: $name \n";
      $mail_txt.= "Correo: $email \n";
      $mail_txt.= "Mensaje: " . $message;

    /*  mail($mail_adress, $mail_subject, $mail_ready);*/
      $correct = true;
    }
  }



?>
