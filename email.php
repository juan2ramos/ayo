<?php
require '/home4/llenitas/mailer/PHPMailerAutoload.php';
include('include/Registered.php');
include('include/env.php');

$fields = [
    "name" => ['required'],
    "email" => ['required','email'],
    "phone" => ['required','number'],
    "number-identification" => ['required','number'],
];
$infoMail = [
    "fromName" => 'llenitas de gracia',
    "from" => 'webmaster@simonsein.com',
    "emails" => 'webmaster@simonsein.com',
    "web" => 'llenitasdegracia.com',
    "subject" => 'Mensaje desde el sitio web de llenitas de gracia',
];
$r = new Registered($_POST,$fields,$infoMail,$dataBase);

if(count($r->getMessages()) > 0){
    $arrayMsj['success'] = false;
    $arrayMsj['message'] = $r->getMessages();
    echo (json_encode($arrayMsj));
    exit;
}
if ($r->getSend()) {
    $arrayMsj['success'] = TRUE;
    $arrayMsj['message'] = 'Felicitaciones, su mensaje a sido enviado con éxito!!';
} else {
    $arrayMsj['success'] = false;
    $arrayMsj['message'] = 'Su mensaje no a sido enviado fffcon éxito!!';
}
echo (json_encode($arrayMsj));
exit;
