<?php
	$name = $_POST['name'];
	$phone = $_POST['phone'];
    $email = $_POST['email'];

	$to = "borisivpavel219@gmail.com"; 
	$date = date ("d.m.Y"); 
	$time = date ("h:i");
	$from = $email;
	$subject = "Заявка c сайта";

	
	$msg="
    Телефон: $phone /n
    Почта: $email /n
    Имя: $name"; 	
	mail($to, $subject, $msg, "From: $to ");

?>

<p>Спасибо за обращение!</p>