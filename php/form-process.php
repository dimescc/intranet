<?php

$errorMSG = "";
// NAME
if (empty($_POST["name"])) {
    $errorMSG = "Name wird benötigt ";
} else {
    $name = $_POST["name"];
}
// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "Email wird benötigt ";
} else {
    $email = $_POST["email"];
}
// MSG Betreff
if (empty($_POST["betreff"])) {
    $errorMSG .= "Betreff wird benötigt, Betreff: ";
} else {
    $betreff = $_POST["betreff"];
}
// MESSAGE
if (empty($_POST["message"])) {
    $errorMSG .= "Nachricht wird benötigt ";
} else {
    $message = $_POST["message"];
}

$EmailTo = "wneput@gmail.com";
$betreff = "neue Nachricht von Intranet";
// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Betreff: ";
$Body .= $betreff;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $message;
$Body .= "\n";

// send email
$success = mail($EmailTo, $betreff, $Body, "From:".$email);
// redirect to success page
if ($success && $errorMSG == ""){
   echo "erfolgreich gesendet";
}else{
    if($errorMSG == ""){
        echo "Es ist etwas schief gegangen :(";
        echo $success;
    } else {
        echo $errorMSG;
    }
}



error_reporting(E_ALL|E_STRICT);
ini_set('display_errors',1);
$res = mail("dimes@gmx.at", "Subject", "Hello!");
echo '<hr>Result was: ' . ( $res === FALSE ? 'FALSE' : 'TRUE') . $res;
echo '<hr>';




?>
