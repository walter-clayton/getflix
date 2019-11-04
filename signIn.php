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
<h5 class="card-header bg-warning" style="color:white; display:flex; justify-content:center;">Login</h5>
<div class="card-body">
<div class="form-group">
<label for="pseudo">Pseudo</label>
<input type="text" class="form-control" id="pseudo" name="pseudo" placeholder="Username" autocomplete="off" required>
</div>
<div class="form-group">
<label for="username">Password</label>
<input type="password" class="form-control" id="password"  name="password"  placeholder="Password" autocomplete="off" required>
</div>


<?php

// isset to check whether the variables $pseudo and $message contain anything, it will return FALSE if the value is NULL
if(isset($_POST['submit'])) { 

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
  
    $wrongpassword  = '';
    $notexist = '';
    $pseudo = htmlspecialchars($_POST['pseudo']); 
    $password = htmlspecialchars($_POST['password']);
    


    // get all data from members table,
    $response = $db->query("SELECT * FROM members WHERE pseudo = '".$pseudo."' ");
    $results = $response->fetch();


    if ( $pseudo == $results['pseudo']) {

      $notexist = '';

      


      if (password_verify($password, $results['password'])) {
          session_start(); 
          $wrongpassword = 'goooood';
          $_SESSION['ID'] = $results['ID'];
          $_SESSION['pseudo'] = $pseudo;

          $_SESSION['success'] = "";

          header('location: index.php');
        
      }
              else {

                $wrongpassword = 'Wrong password !';

                
                 }
    
      }


                  else {
          $notexist ='You do not exist, register!'; 
                
                 }

// frees up the connection to the server so that other SQL statements may be issued, but leaves the statement in a state that enables it to be executed again.

}


?>

<small class="form-text text-danger mb-3"></small>
<hr>

<p class="text-right">

  <div style="color:red;">

     <?php if(isset($wrongpassword)){
      echo $wrongpassword;
     } ?>
     <?php if(isset($notexist)){
      echo $notexist;
    }
       ?>

    <a href="subscribe.php"style="margin-top:2%" >Register</a>
  </div>
<button type="submit" class="btn btn-warning float-right" name="submit" value="submit">Submit</button>
</p>

</div>
</div>
</div>

</form>
  </fieldset>