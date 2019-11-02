<style>

.poster img{
    height: 300px;
    margin:20px;
    }

    #myUL {
  list-style-type: none;
  display :flex;
  flex-wrap:wrap;
  justify-content:center;
}
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <!-- BOOTSTRAP -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Search Page</title>
</head>
<body>
      <!-- NAVBAR -->
 <!--  DEV MOUAD -->
<div class="container-fluid-fullwidth">
	
	<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    
  <a class="navbar-brand hover" href="index.php"><span class="hover" style="color:#F7ECE1;"> GETFLIX</span> </a>
  
</div>
    
    <form class="form-inline smallsearch col-sm-8 col-xs-11" style="height:24px;">
		<div class="row col-11">
      <input class="form-control col-xs-11 col-9"  type="search" id="myInput" onkeyup="myFunction()"  placeholder="Search">&nbsp;
      
	</form>
	</div >


<div class="collapse navbar-collapse justify-content-center" id="navbarTogglerDemo02">

<?php  if (isset($_SESSION['pseudo'])) : ?>
      <p style="color : white;">Welcome <strong> <?php echo $_SESSION['pseudo']; ?> </strong></p>
      <?php endif ?>
   <p> <a href="index.php?logout='1'" style="color: red;" onclick ="logout();" name="logout" >&nbsp;logout <?php include('logout.php') ?> </a> </p>
</div>
</div>

</nav>
 </div>

<!-- END NAVBAR -->
<!-- END DEV MOUAD -->


<ul id="myUL">

<li class ="poster"><a id="black mirror" herf="landing.php?id=9"><img  src="Photos/blackmirror.jpg" alt="Black Mirror" ></a></li>
		  <li class ="poster"><a id="The Boys" herf="landing.php?id=10"><img  src="Photos/boys.jpg" alt="The Boys" ></a></li>
		  <li class ="poster"><a id="Game of Throne" herf="landing.php?id=11"><img  src="Photos/gof.jpg" alt="Game of Throne"></a></li>
		  <li class ="poster"><a id="Mis fits" herf="landing.php?id=12"><img  src="Photos/misfit.jpg" alt="Mis fits" ></a></li>
      <li class ="poster"><a  id="Angry Bird" herf="landing.php?id=5"><img  src="Photos/angry.jpg" alt="Angry Bird"></a></li>
	  <li class ="poster"><a id="Terminator" herf="landing.php?id=6"><img  src="Photos/terminator.jpg" alt="Terminator"></a></li>
	  <li class ="poster"><a id="Tarantino" herf="landing.php?id=6"><img  src="Photos/once.jpg" alt="Tarantino" ></a></li>
	  <li class ="poster"><a id="Dora" herf="landing.php?id=8"><img  src="Photos/dora.jpg" alt="Dora"></a></li>
    <li class ="poster"><a id="Joker" href="landing.php?id=1"><img  src="Photos/joker.jpg" alt="Joker" ></a></li>
		  <li class ="poster"><a id="ça" herf="landing.php?id=2"><img  src="Photos/ca.jpg" alt="ça" ></a></li>
		  <li class ="poster"><a id="fast and furious" herf="landing.php?id=3"><img  src="Photos/fast.jpg" alt="fast and furious"></a></li>
		  <li class ="poster"><a id="Président" herf="landing.php?id=4"><img  src="Photos/president.jpg" alt="Président" ></a></li>
	  <li class ="poster"><a id="Rick et Morty" herf="landing.php?id=13"><img  src="Photos/morty.jpg" alt="Rick et Morty"></a></li>
	  <li class ="poster"><a id="Happy" herf="landing.php?id=14"><img  src="Photos/happy.jpg" alt="Happy"></a></li>
	  <li class ="poster"><a id="The walking dead" herf="landing.php?id=15"><img  src="Photos/walking.jpg" alt="The walking dead" ></a></li>
	  <li class ="poster"><a id="Heroes" herf="landing.php?id=16"><img  src="Photos/heroes.jpg" alt="Heroes"></a></li>
	  <li class ="poster"><a id="Les dents de la mer" herf="www.coin.com"><img  src="Photos/dentmer.jpg" alt="Les dents de la mer"></a></li>
	  <li class ="poster"><a id="zombieland 2" herf="www.coin.com"><img  src="Photos/zombieland.jpg" alt="zombieland 2"></a></li>
	  <li class ="poster"><a id="Rambo" herf="www.coin.com"><img  src="Photos/rambo.jpg" alt="Rambo" ></a></li>
	  <li class ="poster"><a id="Steve Jobs" herf="www.coin.com"><img  src="Photos/jobs.jpg" alt="Steve Jobs"></a></li>
		  <li class ="poster"><a id="Capitain Fantastic" herf="www.coin.com"><img  src="Photos/capitaine.jpg" alt="Capitain Fantastic" ></a></li>
		  <li class ="poster"><a id="Sweet dream of america" herf="www.coin.com"><img  src="Photos/america.jpg" alt="Sweet dream of america" ></a></li>
		  <li class ="poster"><a id="Force et nature" herf="www.coin.com"><img  src="Photos/nature.jpg" alt="Force et nature"></a></li>
		  <li class ="poster"><a id="Mc Queeen" herf="www.coin.com"><img  src="Photos/queen.jpg" alt="Mc Queeen" ></a></li>
	  <li class ="poster"><a id="Nobody die here" herf="www.coin.com"><img  src="Photos/nobody.jpg" alt="Nobody die here"></a></li>
	  <li class ="poster"><a id="Deepweb" herf="www.coin.com"><img  src="Photos/deep.jpg" alt="Deepweb"></a></li>
	  <li class ="poster"><a id="War Crimes Dealers" herf="www.coin.com"><img  src="Photos/war.jpg" alt="War Crimes Dealers" ></a></li>
	  <li class ="poster"><a id="Avicii" herf="www.coin.com"><img  src="Photos/avicii.jpg" alt="Avicii"></a></li>
		
    
</ul>

<script src="test.js"></script>

<!-- END NAVBAR -->
<!-- END DEV MOUAD -->
 <!--------FOOTER------->
 <?php include("footer.php"); ?>
</body>
</html>