<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="style.css">

  <title>Member</title>
</head>
<body class="body" style="color:#F7ECE1;">


<?php
 

$pseudo = "";
$email = "";
$password = "";
$password_confirm = "";


// isset to check whether the variables $pseudo and $message contain anything, it will return FALSE if the value is NULL
if(isset($_POST['submit'])){ 
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $email = htmlspecialchars($_POST['email']);
    $pass_hashe = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $date_subscribed = "";
    $_SESSION[""] = $pseudo;
  }


?>

<form class="form-horizontal" action='' method="POST">
  <fieldset>
    <div id="legend">
      <legend class="">Register</legend>
    </div>
    <div class="control-group">
      <!-- Username -->
      <label class="control-label"  for="username">Pseudo</label>
      <div class="controls">
        <input type="text" id="pseudo" name="pseudo" placeholder="" class="input-xlarge">
        <p class="help-block">Username can contain any letters or numbers, without spaces</p>
      </div>
    </div>
 
    <div class="control-group">
      <!-- E-mail -->
      <label class="control-label" for="email">E-mail</label>
      <div class="controls">
        <input type="text" id="email" name="email" placeholder="" class="input-xlarge">
        <p class="help-block">Please provide your E-mail</p>
      </div>
    </div>
 
    <div class="control-group">
      <!-- Password-->
      <label class="control-label" for="password">Password</label>
      <div class="controls">
        <input type="password" id="password" name="password" placeholder="" class="input-xlarge">
        <p class="help-block">Password should be at least 4 characters</p>
      </div>
    </div>
 
    <div class="control-group">
      <!-- Password -->
      <label class="control-label"  for="password_confirm">Password (Confirm)</label>
      <div class="controls">
        <input type="password" id="password_confirm" name="password_confirm" placeholder="" class="input-xlarge">
        <p class="help-block">Please confirm password</p>
      </div>
    </div>
 
    <div class="control-group">
      <!-- Button -->
      <div class="controls">
  <input type="submit" name="submit" value="submit">
      </div>
    </div>
  </fieldset>
</form>



<?php

if ( $password_confirm === $password )
{




// connect to the server and display errors.
try{
  $db = new PDO('mysql:host=localhost;dbname=getflix', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}

// display errors
catch (Exception $e) {
  die('Error : ' . $e->getMessage());
}


// insert the input into the database
$req = $db->prepare('INSERT INTO members(pseudo, password, date_subscribed) VALUES (?, ?, curdate())');
$req->execute(array(
  $pseudo, 
  $password
  ));


// get all data from minichat table, and most recent at the top, and set a limit of 10 lines
$response = $db->query('SELECT * FROM members ORDER BY ID DESC LIMIT 0,1');

// get the data and display it on the page
while ($db = $response->fetch()){
  echo '<p> Hello ' . $db['pseudo'] . '</p>';
  }

// frees up the connection to the server so that other SQL statements may be issued, but leaves the statement in a state that enables it to be executed again.
  $response->closeCursor();

}

else {
  echo "Wrong password";
}
  ?>  

</body>
</html>