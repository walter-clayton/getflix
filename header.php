

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
<div class="container-fluid-fullwidth flex-row ">
	
	<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    
  <a class="navbar-brand hover" href="index.php"><span class="hover" style="color:#F7ECE1;"> GETFLIX</span> </a>
  </div>
    <form class="form-inline smallsearch col-sm-8 col-xs-11">
    <div class="row col-11">
      <input class="form-control col-xs-11 col-9"  type="search" placeholder="Search">&nbsp;
      <button class="btn btn-outline-warning " type="submit" autocomplete="off" required>Search</button>
  </form>

</form>
  </div >

<div class="collapse navbar-collapse justify-content-center" id="navbarTogglerDemo02">

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

      <p> <a href="index.php?logout='1'" name="logout" class="text-warning">logout <?php include('logout.php') ?> </a> </p>
    
</div>

</div>

</nav>
 </div>

<!-- END NAVBAR -->
<!-- END DEV MOUAD -->
</header>


<!-- WALTER creating sessions -->


<!-- Walter creating sessions end -->


