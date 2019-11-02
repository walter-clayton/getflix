

<!DOCTYPE html>
<html>
<head>


  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- STYLESHEET -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- BOOTSTRAP -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!-- FONTAWESOME -->
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
<!--  SAMUEL SCROLL-->
  <script type="text/javascript" src="app.js"></script>
<!--  SAMUEL SCROLL-->
  
  
  <link rel='icon' href='./images/icon.ico' type='image/x-icon' >



  <title>GetFlix</title>

  
</head>


<body>

<body class="body">


<!-- NAVBAR -->
  
<!--------HEADER----------->
<header>
  <!-- NAVBAR -->
 <!--  DEV MOUAD -->
 <div class="container-fluid-fullwidth">
	
	<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    
  <a class="navbar-brand hover" href="index.php"><span class="hover" style="color:#F7ECE1;"> GETFLIX</span> </a>
  </div>
    <form class="form-inline smallsearch col-sm-8 col-xs-11" name="form" action="searchpage.php">
    <div class="row col-10">
      <button class="btn btn-outline-warning col-xs-11 col-11 ml-auto " type="submit" autocomplete="off" required>Chercher un film</button>
  </form>

</form>
  </div >


<div class="collapse navbar-collapse justify-content-center" id="navbarTogglerDemo02">

<?php  if (isset($_SESSION['pseudo'])) : ?>
      <p style="color : white;">Welcome <strong> <?php echo $_SESSION['pseudo']; ?> </strong></p>
      <?php endif ?>
   <p> <a href="index.php?logout='1'" style="color: red;" onclick ="logout();" name="logout" >&nbsp;logout <?php include('logout.php') ?> </a> </p>
</div>


</nav>
 </div>

<!-- END NAVBAR -->
<!-- END DEV MOUAD -->


</header>


<!-- WALTER creating sessions -->


<!-- Walter creating sessions end -->


