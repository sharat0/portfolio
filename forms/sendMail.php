<?php
session_start();
if (isset($_POST['email']) && isset($_POST['name']) && isset($_POST['message'])) {

    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $name=$_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['message'];
    $sendMessage= $name."<br>".$email."<br>".$message;
    include('../essentials/_mailer.php');
    sendMail("Sharat Portfolio","New portfolio contact", "apoorv.sharat0@gmail.com", "Apoorv", $sendMessage ,$sendMessage);
    $_SESSION['error']="Message sent successfully !";
    header("Location: ../");

}