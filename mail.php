<?php

$recepient = "renya.show@gmail.com";
$siteName = "QiwiMoney";

// $name = trim($_POST["name"]);
$phone = trim($_POST["phone"]);
$message = "Контакты: $phone";

$pagetitle = "Заявка с сайта \"$siteName\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");

?>