<?php
include '../includes/db.php';

$email = $_GET['email'];
$hash = $_GET['hash'];

if (!isset($email) || !isset($hash)){
    header('Location: ../index.php');
    exit();
}
$stmt = $db->prepare("SELECT hash FROM register_mail WHERE email = :email");
$stmt->bindParam(':email',$email);
$stmt->execute();
$h = $stmt->fetch();

if($h['hash'] != $hash){
    header('Location: ../index.php');
    exit();
}else{
    $stmt = $db->prepare("UPDATE users SET verified = 1 WHERE email = :email");
    $stmt->bindParam(':email',$email);
    $stmt->execute();
    header('Location: ../pages/login.php?message=Votre Email est validé, vous pouvez vous connecter&type=success');

}
