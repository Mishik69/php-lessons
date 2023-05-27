<?php

$text=$_POST['text'];
$pdo = new PDO('mysql:host=localhost;dbname=my_table;','root','');
$sql= 'INSERT INTO my_table (text) VALUES (:text)';
$statement= $pdo->prepare($sql);
$statement->execute(['text'=> $text]);

header('location: test10.html');

?>