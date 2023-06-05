<?php
session_start();

$text=$_POST['text'];
$pdo = new PDO('mysql:host=localhost;dbname=my_table;','root','');

$sql = "SELECT *FROM my_table WHERE text=:text";
$statement= $pdo->prepare($sql);
$statement->execute(['text'=>$text]);
$task=$statement->fetch(PDO::FETCH_ASSOC);

if (!empty($task)){
    $message = "Введенная запись уже присутвует в базе.";
    $_SESSION['danger']= $message;
    header("location: test11.php");
    exit;
}



$sql= 'INSERT INTO my_table (text) VALUES (:text)';
$statement= $pdo->prepare($sql);
$statement->execute(['text'=> $text]);

$message = "Введенная запись успешно добавлена в базу.";
$_SESSION['success']= $message;

header("location: test13.php");
?>