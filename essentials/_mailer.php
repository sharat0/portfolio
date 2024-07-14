<?php
use Mailtrap\Config;
use Mailtrap\Helper\ResponseHelper;
use Mailtrap\MailtrapClient;
use Symfony\Component\Mime\Address;
use Symfony\Component\Mime\Email;
function sendMail($senderName, $subject, $sendTo, $receiver, $textMail, $html)
{
    require '../vendor/autoload.php';

    $apiKey = '484e6cff68db0e9573a14fbe6882752a';
    $mailtrap = new MailtrapClient(new Config($apiKey));

    $email = (new Email())
        ->from(new Address('portfolio@festivelearn.com', $senderName))
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