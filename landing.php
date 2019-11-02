<?php 
    session_start(); 

  if (!isset($_SESSION['pseudo'])) {
    $_SESSION['msg'] = "You must log in first";
    echo '<h1 style="color: white;">' .'you must login to add comments!' . '</h1>';
     die();
   }

    ?>

<!DOCTYPE html>
<html>
<head>
	<title>landing page</title>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- BOOTSTRAP -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- FONTAWESOME -->
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<!-- FAVICON -->
	<link rel='icon' href='./images/icon.ico' type='image/x-icon' >
	<link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>


<!-- HEADER -->
<!-- DEV HAMZA -->
<?php include("header.php"); ?>   

 <div class="content">
    <!-- notification message -->
    <?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
        <span style="color: white;">
          <?php 
            echo $_SESSION['success']; 
          ?>
          </span>
      </div>
    <?php endif ?>

    <!-- logged in user information -->
    
</div>
<div class="container" style="padding-top:3%;">
<div class="card" style="width: 35.2rem;">
  <!-- ADDED BY HAMZA -->
<?php
    $db = new PDO('mysql:host=localhost;dbname=getflix', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    if(isset($_GET['id'])) {
        $idlion = $_GET['id'];
    
    $demande = $db -> prepare('SELECT *FROM media2 WHERE id = ?');
    $demande-> execute(array( $idlion));
    while($ligne = $demande -> fetch()){
    echo $ligne['linkvideo']."<br> <div class='card-body'><h5 class='card-title'>".$ligne['title']. '<hr>'. $ligne['date']. '<hr>' . $ligne['genre']. '<hr>'. $ligne['synopsis'].
    "</h5> </div";


    }
    }
    
    ?>
<!-- HAMZA END -->
    <p class="card-text"></p>
  </div>
  <ul class="list-group list-group-flush">
  
   
    
  </ul>
  <div class="card-body">
 
  </div>
</div>
</div>
<br>
<div class="container">
<div class="card" style="width: 35.2rem;"> 
<form action ="" method ="POST">
<label for = "message">Message:</label><input type="text" name="message" placeholder="Your Message..." value="" autocomplete="off" required><br>
<input type="submit" class="btn btn-warning float-right" value="Send message"><br>
</form>
</div>

<?php
// connect to the server and display errors.
try{
$db = new PDO('mysql:host=localhost;dbname=getflix', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}

// display errors
catch (Exception $e) {
die('Error : ' . $e->getMessage());
}
if(isset($_SESSION['pseudo'])) {



}
// insert the input into the database
if( isset($_POST['message']) && !empty($_POST['message'])) {

  $message = $_POST['message'];
  $pseudo = $_SESSION['pseudo'];
  $req = $db->prepare('INSERT INTO commentaires (idvideo,pseudo, message, date_comment) VALUES (?,? , ?, NOW())');
  $req->execute(array($idlion, $pseudo, $message));
}


// get all data from commentaires table, and most recent at the top, and set a limit of 10 lines
$response = $db->prepare('SELECT * FROM commentaires WHERE idvideo=? ORDER BY date_comment DESC ');
$response -> execute(array($idlion));
?>

<p>
  <center>
  <button class="btn btn-warning" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    Afficher commentaire
  </button> </center>
</p>
<div class="collapse col-md-9 text-align: center;"    id="collapseExample">

<div id= "comment" class="card card-body ">



<?php 
  // get the data and display it on the page
while ($db = $response->fetch()){
  echo   $db['pseudo']. ' | le '. $db['date_comment']. '<br>' . ' : ' . $db['message'] .''. '<br>'. '<hr>' ;



}
// frees up the connection to the server so that other SQL statements may be issued, but leaves the statement in a state that enables it to be executed again.
$response->closeCursor();
?>

<!-- END DEV HAMZA -->
  </div>
</div>

 <!--------FOOTER------->
 
 <?php include("footer.php"); ?>

<!-- BOOTSTRAP JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>