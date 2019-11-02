<?php

session_start();
$pseudo = "";
$message = "";

// isset to check whether the variables $pseudo and $message contain anything, it will return FALSE if the value is NULL
if(isset($_POST['submit'])){
$pseudo = htmlspecialchars($_POST['pseudo']);
$message = htmlspecialchars($_POST['message']);
}

// setcookie(name, value, expire, path, domain, secure, httponly);
setcookie('pseudo', $pseudo, time() + 365243600, null, null, false, true);

try{
$db = new PDO('mysql:host=localhost;dbname=hamzacom', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

}

catch (Exception $e) {
die('Error : ' . $e->getMessage());
}


// insert the input into the database
$req = $db->prepare('INSERT INTO minichat(pseudo, message) VALUES (?, ?)');
$req->execute(array($pseudo, $message));

//send the data to minichat.php
header('Location: minichat.php');

?>
