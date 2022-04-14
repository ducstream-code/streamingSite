<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include('../includes/db.php');



$email = $_POST['email'];
$basePassword = $_POST['password'];
$hashPass = hash('sha256',$basePassword);

if ((!isset($_POST['email'])) || empty($_POST['email'])) {
    header('location: ../../pages/login.php?message=Vous devez remplir tous les champs.&type=danger');
    exit;
}

if ((!isset($_POST['password'])) || empty($_POST['password'])) {
    header('location: ../../pages/login.php?message=Vous devez remplir tous les champs.&type=danger');
    exit;
}



$stmt = $db->prepare("SELECT id,verified FROM users WHERE email= :email AND password = :password");
$stmt->bindParam(':email',$email);
$stmt->bindParam(':password',$hashPass);
$stmt->execute();
$user = $stmt->fetch();

if(!$user){
   header('Location: ../pages/login.php?message=Identifiants incorrects&type=alert');
    exit();
}elseif ($user['verified'] != 1 ){
    header('location: ../pages/login.php?message=Veuillez valider votre mail&type=alert');
}else{

    setcookie('id', $user['id'], time()+60*60*24*30, '/');
    setcookie('password', $hashPass, time()+60*60*24*30, '/');
    header('location: ../index.php?message=Vous êtes connectés&type=success');
}

