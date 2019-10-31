
          <?php 
    session_start(); 


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
        <input type="text" id="pseudo" name="pseudo" placeholder="" class="input-xlarge" required="">
        <p class="help-block">Username can contain any letters or numbers, without spaces</p>
      </div>
    </div>
    <div class="control-group">
      <!-- Password-->
      <label class="control-label" for="password">Password</label>
      <div class="controls">
        <input type="password" id="password" name="password" placeholder="" class="input-xlarge" required="">
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


// isset to check whether the variables $pseudo and $message contain anything, it will return FALSE if the value is NULL
if(isset($_POST['submit'])){ 

$pseudo = '';
$password = '';

// connect to the server and display errors.
try{
  $db = new PDO('mysql:host=localhost;dbname=getflix', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}

// display errors
catch (Exception $e) {
  die('Error : ' . $e->getMessage());
}
  

    $pseudo = htmlspecialchars($_POST['pseudo']); 
    $password = htmlspecialchars($_POST['password']);
    


    // get all data from members table,
    $response = $db->query("SELECT * FROM members WHERE pseudo = '".$pseudo."' ");
    $results = $response->fetch();


    if ( $pseudo === $results['pseudo']) {

    echo  $pseudo . " exists in the database!";
    var_dump($results['password']);
    var_dump($password);
    var_dump(password_verify($password, $results['password']));

            if (password_verify($password, $results['password'])) {
          session_start(); 
          $_SESSION['ID'] = $results['ID'];
          $_SESSION['pseudo'] = $pseudo;
          $_SESSION['success'] = "You are now logged in";
          header('location: index.php');
        return;
      }
              else {
        echo $pseudo . " wrong password!";
        return;
                 }
    
      }


    echo 'You do not exist, subscribe!';

   echo '<input type="submit" name="subscribe" value="subscribe" src="subscribe.php" href ="subscribe.php" onclick = "subscribe()">';

// frees up the connection to the server so that other SQL statements may be issued, but leaves the statement in a state that enables it to be executed again.
$response->closeCursor();




  

}

?>