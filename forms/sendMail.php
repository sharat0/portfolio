<?php
session_start();
$recaptchaSecret = '6LegAxAqAAAAACpZ50nidRO1CjgfZkI87p7w49qG';
$recaptchaResponse = $_POST['g-recaptcha-response'];

$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$recaptchaSecret&response=$recaptchaResponse");
$responseKeys = json_decode($response, true);

if (intval($responseKeys["success"]) !== 1) {
    echo 'Please complete the reCAPTCHA.';
} else {
    // Process your form
    echo 'reCAPTCHA verification successful.';
}
die;
if (isset($_POST['email']) && isset($_POST['name']) && isset($_POST['message'])) {
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $sendMessage = $name . "<br>" . $email . "<br>" . $message;
    include('../essentials/_mailer.php');
    sendMail("Sharat Portfolio", "New portfolio contact", "apoorv.sharat0@gmail.com", "Apoorv", $sendMessage, $sendMessage);
    $_SESSION['error'] = "Message sent successfully !";
    header("Location: ../");
}
