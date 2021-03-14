<?php
  if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $msg = $_POST['message'];

    $mailTo = "hudson.mcmanus@gmail.com";
    $headers = "From: ".$email;
    $txt = "You have recieved an e-mail from ".$name.".\n\n".$msg;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.php?mailsend");
  }
?>
