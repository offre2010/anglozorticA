<?php
  if (isset($_POST['email']))  {
  
    //Email information
    $admin_email = "jerryabuaoffre@gmail.com";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    
    //send email
    mail($admin_email, "New Form Submission", $message . ' - ' . $phone, "From:" . $email);
    
    header('Location: http://anglozortic.com/success.html');
  }
