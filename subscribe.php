<?php 
    session_start(); 
    ?>


    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- BOOTSTRAP -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css"><div class="container">



<fieldset>
<form action="" method="POST">
<div class="m-auto pt-5 w-50">
<div class="card">
<h5 class="card-header bg-warning" style="color:white; display:flex; justify-content:center;">Register</h5>
<div class="card-body">
<div class="form-group">
<label for="pseudo">Pseudo</label>
<input type="text" class="form-control" id="pseudo" name="pseudo" placeholder="pseudo" required>
</div>
<div class="form-group">
<label for="username">Password</label>
<input type="password" class="form-control" id="password"  name="password"  placeholder="Password" required>
</div><div class="form-group">
<label for="username">Password Confirm</label>
<input type="password" class="form-control" id="password"  name="password_confirm"  placeholder="password_confirm" required>
</div>



<?php



// isset to check whether the variables $pseudo and $message contain anything, it will return FALSE if the value is NULL
if(isset($_POST['submit'])){ 
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
     
    }

        // get all data from members table, and only find the pseudo put in by user and see if it matches the pseudo from the table
        $response = $db->query('SELECT * FROM members  WHERE pseudo = "'.$pseudo.'" ');


        // get the data and display it on the page
        $results = $response->fetch();
        // make sure there isn't already the same pseudo in the table
        if ($results['pseudo'] === $pseudo) {
          $pseudoexists = 'your pseudo already exists in the database! Put in a different pseudo!';
          
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
          $_SESSION['success'] = "";
          header('location: index.php');


      // frees up the connection to the server so that other SQL statements may be issued, but leaves the statement in a state that enables it to be executed again.
      $response->closeCursor();
     
    }

    else {

      echo 'the passwords need to match!';
      
    }


}

 ?>


 <small class="form-text text-danger mb-3"></small>
<hr>

<p class="text-right">
  <div>
     <?php if(isset($pseudoexists)){
      echo $pseudoexists;
     } ?>

    <a href="signIn.php"style="margin-top:2%" >Login</a>

  </div>
<button type="submit" class="btn btn-warning float-right" name="submit" value="submit">Submit</button>
</p>

</div>
</div>
</div>

</form>
  </fieldset>