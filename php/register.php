<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include '../includes/db.php';
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$passwordConfirm = $_POST['passwordConfirm'];

if ((!isset($username)) || empty($username)) { //verify if email is set
    header('location: ../../pages/register.php?message=Un nom d\'utilisateur est nécessaire.&type=danger');
    exit;
}

if ((!isset($email)) || empty($email)) { //verify if email is set
    header('location: ../../pages/register.php?message=Un email est nécessaire.&type=danger');
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { //verify email
    header('location: ../../pages/register.php?message=Le format du mail n\'est pas valide.&type=danger');
    exit;
}

$stmt = $db->prepare("SELECT email FROM users where email = :email");
$stmt->bindParam(':email',$email);
$stmt->execute();
$emailExist = $stmt->fetch();

if($emailExist){
    header('location: ../../pages/register.php?message=Ce mail est déjà utilisé.&type=danger');
    exit;
}

$stmt = $db->prepare("SELECT username FROM users where username = :username");
$stmt->bindParam(':username',$username);
$stmt->execute();
$emailExist = $stmt->fetch();

if($emailExist){
    header('location: ../../pages/register.php?message=Ce mail est déjà utilisé.&type=danger');
    exit;
}

if (!isset($password) || empty($password)) {
    header('location: ../../pages/register.php?message=Vous devez définir un mot de passe.&type=danger');
    exit;
}

//check longueur du mot de passe
if (strlen($password) < 6 || strlen($password) > 32) {
    header('location: ../../pages/register.php?message=Le mot de passe doit faire entre 6 et 32 charactères.&type=danger');
    exit;
}

//check complexitée du mot de passe
if (!(preg_match("#^(.*[0-9]+.*)$#", $password) && preg_match("#^(.*[a-z]+.*)$#", $password) && preg_match("#^(.*[A-Z]+.*)$#", $password))) {
    header('location: ../../register.php?message=Le mot de passe doit contenir au moins une majuscule, une minuscule et un chiffre.&type=danger');
    exit;
}

if($password != $passwordConfirm){
    header('location: ../../pages/register.php?message=Les mot de passe ne correspondent pas.&type=danger');
    exit;
}

$hashPass = password_hash($password, PASSWORD_DEFAULT);

$stmt = $db->prepare("INSERT INTO users (username,email,password) VALUES (:username,:email,:password)");
$stmt->bindParam(':username',$username);
$stmt->bindParam(':email',$email);
$stmt->bindParam(':password',$hashPass);

$stmt->execute();

$hash = hash('sha512', random_bytes(15));

$stmt = $db->prepare("SELECT id FROM users where email = :email");
$stmt->bindParam(':email',$email);
$stmt->execute();
$id = $stmt->fetch();

$stmt = $db->prepare("INSERT into register_mail (id_user, email, hash) VALUES (:id,:email,:hash)");
$stmt->bindParam(':id',$id['id']);
$stmt->bindParam(':email',$email);
$stmt->bindParam(':hash',$hash);
$stmt->execute();


$message = '
Cher ' . $username . ',
Merci de vous être inscrit.e sur notre site!

Pour profiter de l\'entiereté du site validez votre email avec le lien suivant:
https://aurelienk.space/php/verify_email.php?email=' . $email. '&hash=' . $hash . '

';
$headers = 'From:noreply@monStreaming.fr' . "\r\n";
mail($_POST['email'], 'Inscription | Verification', $message, $headers);




header('Location: ../pages/login.php?message=Veuillez valider votre Email&type=success');


