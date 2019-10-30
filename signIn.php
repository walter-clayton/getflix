<?php

$pseudo = 'hamza';
$password = 'hamza';
$pass_hashe = '';


?>
<form class="form-horizontal" action='' method="POST">
  <fieldset>

    <div id="legend">
      <legend class="">Sign In</legend>
    </div>
    <div class="control-group">
      <!-- Username -->
      <label class="control-label"  for="pseudo">Pseudo</label>
      <div class="controls">
        <input type="text" id="pseudo" name="pseudo" placeholder="" class="input-xlarge">
        <p class="help-block">Username can contain any letters or numbers, without spaces</p>
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
      <!-- Button -->
      <div class="controls">
  <input type="submit" name="submit" value="submit">
      </div>
    </div>
  </fieldset>
</form>



<?php


// connect to the server and display errors.
try{
  $db = new PDO('mysql:host=localhost;dbname=getflix', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}

// display errors
catch (Exception $e) {
  die('Error : ' . $e->getMessage());
}




// isset to check whether the variables $pseudo and $message contain anything, it will return FALSE if the value is NULL
if(isset($_POST['submit'])){ 

    $pseudo = htmlspecialchars($_POST['pseudo']); 
    $password = htmlspecialchars($_POST['password']);
    $pass_hashe = password_hash($password, PASSWORD_BCRYPT);
    $_SESSION[''] = $pseudo;

    // get all data from minichat table, and most recent at the top, and set a limit of 10 lines
    $response = $db->query('SELECT * FROM members');


    $db = $response->fetch();

    if ($_POST['pseudo'] === $db['pseudo']) {

      echo "You " . $pseudo . " exist in the database!";

      if ( $pass_hashe === $db['password']) {
              echo $pseudo . " you are logged in!";
      }

      else {
        echo $pseudo . " wrong password!";
      }

      }

    else {
      echo 'You do not exist, subscribe!';
      
      }
}


// frees up the connection to the server so that other SQL statements may be issued, but leaves the statement in a state that enables it to be executed again.

  // $response->closeCursor(); 

  
  ?>

  