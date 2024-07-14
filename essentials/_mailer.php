<?php
function sendMail($senderName, $subject, $sendTo, $receiver, $textMail, $html)
{
    require '../vendor/autoload.php';

    $apiKey = '7d51e79a1b7b9ce8fd65b2153a78db5e';
    $mailtrap = new MailtrapClient(new Config($apiKey));

    $email = (new Email())
        ->from(new Address('mailtrap@demomailtrap.com', $senderName))
        ->to(new Address($sendTo, $receiver))
        ->priority(Email::PRIORITY_HIGH)
        ->subject($subject)
        ->text($textMail)
        ->html($html)
        // ->embed(fopen('https://mailtrap.io/wp-content/uploads/2021/04/mailtrap-new-logo.svg', 'r'), 'logo', 'image/svg+xml')
    ;

    try {
        $response = $mailtrap->sending()->emails()->send($email); // Email sending API (real)

        var_dump(ResponseHelper::toArray($response)); // body (array)
    } catch (Exception $e) {
        echo 'Caught exception: ',  $e->getMessage(), "\n";
    }
}
 ?>