<?php
session_start();
$email= $_POST['email'];
$password = $_POST['password'];

$pdo = new PDO('mysql:host=localhost;dbname=function','root','');

$sql= 'SELECT *FROM function WHERE email=:email';
$statment= $pdo->prepare($sql);
$statment->execute(['email'=>$email]);
$user = $statment->fetch(PDO::FETCH_ASSOC);

if(!empty($user)){
    $_SESSION['error']= "Пользователь с таким эл. адресом существует";
    header("Location: /20%20tasks/function/create.php");
    exit;
}

$hashed_password= password_hash($password, PASSWORD_DEFAULT);
$sql= 'INSERT INTO function (email,password) VALUES (:email, :password)';
$statment= $pdo->prepare($sql);
$statment-> execute(['email'=>$email, 'password'=> $hashed_password]);
?>