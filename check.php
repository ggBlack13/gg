<?php
// print_r($_POST);
 $email = $_POST['email'];
 $messege = $_POST['message'];

 $error = '';
 if(trim($email) == '')
 $error = 'Введите ваш email';
 else if(trim($messege) == '')
 $error = 'Введите само сообщение';
 else if(strlen($messege) < 10)
 $error = 'Сообщение должно быть больше 10 символов';

 if($error != '') {
     echo $error;
     exit;
 }

 $subject = "=?utf-8?B?".base64_encode("Тестовое сообщение"). "?=";
 $headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html;charset=utf-8\r\n";

 mail('shvalev-anton@mail.ru', $subject, $messege, $headers);


 header('Location: /about.php');

?>
