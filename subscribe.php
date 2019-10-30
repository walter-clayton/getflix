
<form class="form-horizontal" action='' method="POST">
  <fieldset>

    <div id="legend">
      <legend class="">Register</legend>
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
      <!-- Password -->
      <label class="control-label"  for="password_confirm">Password (Confirm)</label>
      <div class="controls">
        <input type="password" id="password_confirm" name="password_confirm" placeholder="" class="input-xlarge" required="">
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



// isset to check whether the variables $pseudo and $message contain anything, it will return FALSE if the value is NULL

while(isset($_POST['submit'])){ 
      // connect to the server and display errors.
    try{
      $db = new PDO('mysql:host=localhost;dbname=getflix', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }

    // display errors
    catch (Exception $e) {
      die('Error : ' . $e->getMessage());
    }



    $pseudo = htmlspecialchars($_POST['pseudo']); 

    if (empty($pseudo)) {
      echo "you need to put in a pseudo name!";
      return;
    }

        // get all data from members table, and only find the pseudo put in by user and see if it matches the pseudo from the table
        $response = $db->query('SELECT * FROM members  WHERE pseudo = "'.$pseudo.'" ');


        // get the data and display it on the page
        $results = $response->fetch();
        // make sure there isn't already the same pseudo in the table
        if ($results['pseudo'] === $pseudo) {
          echo "your pseudo already exists in the database! Put in a different pseudo!";
          return;
        }


    if ($_POST['password'] === htmlspecialchars($_POST['password_confirm'])) {

      echo "passwords match!";

      //once passwords match, encrypt the main one
      $password = $_POST['password'];
      $pass_hashe = password_hash($password, PASSWORD_BCRYPT);

        // insert the input into the database
      $req = $db->prepare('INSERT INTO members(pseudo, password, date_subscribed) VALUES (:pseudo, :password, curdate())');
      $req->execute(array(
      'pseudo' => $pseudo, 
      'password' => $pass_hashe
       ));
              $response = $db->query('SELECT * FROM members  WHERE pseudo = "'.$pseudo.'" ');

        $results = $response->fetch();

        echo '<p> Hello ' . $results['pseudo'] . ', you have been added to the database.' . '</p>';
          session_start();
          $_SESSION['ID'] = $results['ID'];
          $_SESSION['pseudo'] = $pseudo;
          $_SESSION['success'] = "You are now logged in";
          header('location: index.php');


      // frees up the connection to the server so that other SQL statements may be issued, but leaves the statement in a state that enables it to be executed again.
      $response->closeCursor();
      return;
    }

    else {

      echo 'the passwords need to match!';
      return;
    }


}

 ?>

 