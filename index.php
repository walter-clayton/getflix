

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
	<!-- FAVICON -->

<!--  SAMUEL SCROLL-->
	<script type="text/javascript" src="app.js"></script>
<!--  SAMUEL SCROLL-->
  
  
	<link rel='icon' href='./images/icon.ico' type='image/x-icon' >



	<title>GetFlix</title>

	
</head>
<body>
<!-- HEADER -->

<?php include("header.php"); ?>
  
  <!--  SAMUEL SCROLL-->
<div class="container-fluid" style="display:flex; justify-content:center;">
  <div class="container" style="padding-top:3%;">
<h2 style="color:white;">Populaire</h2>
  <div class="populaire-carousel">
  <div id="carousel-example-multi" class="carousel slide carousel-multi-item v-2" data-ride="carousel">
    <!--  SAMUEL SCROLL-->



  <!--Controls-->
  <div class="controls-top">
    <a class="btn-floating" href="#carousel-example-multi" data-slide="prev"><i
        class="fas fa-chevron-left"></i></a>
    <a class="btn-floating" href="#carousel-example-multi" data-slide="next"><i
        class="fas fa-chevron-right"></i></a>
  </div>
  <!--/.Controls-->

  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-multi" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-multi" data-slide-to="1"></li>
    <li data-target="#carousel-example-multi" data-slide-to="2"></li>
    <li data-target="#carousel-example-multi" data-slide-to="3"></li>
    <li data-target="#carousel-example-multi" data-slide-to="4"></li>
    <li data-target="#carousel-example-multi" data-slide-to="5"></li>
  </ol>
  <!--/.Indicators-->

  <div class="carousel-inner v-2" role="listbox">

	<div class="carousel-item active ">
		<ul>
		  <li class ="poster"><a href="landing.php?id=1"><img  src="Photos/joker.jpg" alt="Joker" ></a></li>
		  <li class ="poster"><a href="landing.php?id=2"><img  src="Photos/ca.jpg" alt="ça" ></a></li>
		  <li class ="poster"><a href="landing.php?id=3"><img  src="Photos/fast.jpg" alt="fast and furious"></a></li>
		  <li class ="poster"><a href="landing.php?id=4"><img  src="Photos/president.jpg" alt="Président" ></a></li>
  </ul>
  </div>

  <div class="carousel-item ">
	
      <ul >
	  <li class ="poster"><a href="landing.php?id=5"><img  src="Photos/angry.jpg" alt="Angry Bird"></a></li>
	  <li class ="poster"><a href="landing.php?id=6"><img  src="Photos/terminator.jpg" alt="Terminator"></a></li>
	  <li class ="poster"><a href="landing.php?id=7"><img  src="Photos/once.jpg" alt="Tarantino" ></a></li>
	  <li class ="poster"><a href="landing.php?id=8"><img  src="Photos/dora.jpg" alt="Dora"></a></li>
		
  </ul>

  </div>
  </div>
  </div>
<h2 style="color:white;">Serie</h2>
  <div class="serie-carousel">
  <div id="carousel-example-multi1" class="carousel slide carousel-multi-item v-2" data-ride="carousel">

  <!--Controls-->
  <div class="controls-top">
    <a class="btn-floating" href="#carousel-example-multi1" data-slide="prev"><i
        class="fas fa-chevron-left"></i></a>
    <a class="btn-floating" href="#carousel-example-multi1" data-slide="next"><i
        class="fas fa-chevron-right"></i></a>
  </div>
  <!--/.Controls-->

  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-multi" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-multi" data-slide-to="1"></li>
    <li data-target="#carousel-example-multi" data-slide-to="2"></li>
    <li data-target="#carousel-example-multi" data-slide-to="3"></li>
    <li data-target="#carousel-example-multi" data-slide-to="4"></li>
    <li data-target="#carousel-example-multi" data-slide-to="5"></li>
   
   
  </ol>
  <!--/.Indicators-->

  <div class="carousel-inner v-2" role="listbox">

	<div class="carousel-item active ">
		<ul>
		  <li class ="poster"><a href="landing.php?id=9"><img  src="Photos/blackmirror.jpg" alt="Black Mirror" ></a></li>
		  <li class ="poster"><a href="landing.php?id=10"><img  src="Photos/boys.jpg" alt="The Boys" ></a></li>
		  <li class ="poster"><a href="landing.php?id=11"><img  src="Photos/gof.jpg" alt="Game of Throne"></a></li>
		  <li class ="poster"><a href="landing.php?id=12"><img  src="Photos/misfit.jpg" alt="Mis fits" ></a></li>
  </ul>
  </div>

  <div class="carousel-item ">
	
      <ul >
	  <li class ="poster"><a href="landing.php?id=13"><img  src="Photos/morty.jpg" alt="Rick et Morty"></a></li>
	  <li class ="poster"><a href="landing.php?id=14"><img  src="Photos/happy.jpg" alt="Happy"></a></li>
	  <li class ="poster"><a href="landing.php?id=15"><img  src="Photos/walking.jpg" alt="The walking dead" ></a></li>
	  <li class ="poster"><a href="landing.php?id=16"><img  src="Photos/heroes.jpg" alt="Heroes"></a></li>
		
  </ul>

  </div>
  </div>
  </div>
<h2 style="color:white;">Film</h2>
  <div class="film-carousel">
  <div id="carousel-example-multi2" class="carousel slide carousel-multi-item v-3" data-ride="carousel">

  <!--Controls-->
  <div class="controls-top">
    <a class="btn-floating" href="#carousel-example-multi2" data-slide="prev"><i
        class="fas fa-chevron-left"></i></a>
    <a class="btn-floating" href="#carousel-example-multi2" data-slide="next"><i
        class="fas fa-chevron-right"></i></a>
  </div>
  <!--/.Controls-->

  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-multi2" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-multi2" data-slide-to="1"></li>
    <li data-target="#carousel-example-multi2" data-slide-to="2"></li>
    <li data-target="#carousel-example-multi2" data-slide-to="3"></li>
    <li data-target="#carousel-example-multi2" data-slide-to="4"></li>
    <li data-target="#carousel-example-multi2" data-slide-to="5"></li>
  </ol>
  <!--/.Indicators-->

  <div class="carousel-inner v- " role="listbox">

	<div class="carousel-item active ">
		<ul>
		  <li class ="poster"><a href="landing.php?id=17"><img  src="Photos/clone.jpg" alt="Clones" ></a></li>
		  <li class ="poster"><a href="landing.php?id=18"><img  src="Photos/paul.jpg" alt="Paul" ></a></li>
		  <li class ="poster"><a href="landing.php?id=19"><img  src="Photos/legend.jpg" alt="Im Legend"></a></li>
		  <li class ="poster"><a href="landing.php?id=20"><img  src="Photos/ralph.jpg" alt="Ralph 2.0" ></a></li>
  </ul>
  </div>

  <div class="carousel-item ">
	
      <ul >
	  <li class ="poster"><a href="landing.php?id=21"><img  src="Photos/dentmer.jpg" alt="Les dents de la mer"></a></li>
	  <li class ="poster"><a href="landing.php?id=22"><img  src="Photos/zombieland.jpg" alt="Zombieland 2"></a></li>
	  <li class ="poster"><a href="landing.php?id=23"><img  src="Photos/rambo.jpg" alt="Rambo" ></a></li>
	  <li class ="poster"><a href="landing.php?id=24"><img  src="Photos/jobs.jpg" alt="Steve Jobs"></a></li>
		
  </ul>

  </div>
  </div>
  </div>
<h2 style="color:white;">Documantaire</h2>
  <div class="documentaire-carousel">
  <div id="carousel-example-multi3" class="carousel slide carousel-multi-item v-2" data-ride="carousel">

  <!--Controls-->
  <div class="controls-top">
    <a class="btn-floating" href="#carousel-example-multi3" data-slide="prev"><i
        class="fas fa-chevron-left"></i></a>
    <a class="btn-floating" href="#carousel-example-multi3" data-slide="next"><i
        class="fas fa-chevron-right"></i></a>
  </div>
  <!--/.Controls-->

  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-multi" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-multi" data-slide-to="1"></li>
    <li data-target="#carousel-example-multi" data-slide-to="2"></li>
    <li data-target="#carousel-example-multi" data-slide-to="3"></li>
    <li data-target="#carousel-example-multi" data-slide-to="4"></li>
    <li data-target="#carousel-example-multi" data-slide-to="5"></li>
  </ol>
  <!--/.Indicators-->

  <div class="carousel-inner v-2" role="listbox">

	<div class="carousel-item active ">
		<ul>
		  <li class ="poster"><a href="landing.php?id=25"><img  src="Photos/capitaine.jpg" alt="Capitain Fantastic" ></a></li>
		  <li class ="poster"><a href="landing.php?id=26"><img  src="Photos/america.jpg" alt="Sweet dream of america" ></a></li>
		  <li class ="poster"><a href="landing.php?id=27"><img  src="Photos/nature.jpg" alt="Force et nature"></a></li>
		  <li class ="poster"><a href="landing.php?id=28"><img  src="Photos/queen.jpg" alt="Mc Queeen" ></a></li>
  </ul>
  </div>

  <div class="carousel-item ">
	
      <ul >
	  <li class ="poster"><a href="landing.php?id=29"><img  src="Photos/nobody.jpg" alt="Nobody die here"></a></li>
	  <li class ="poster"><a href="landing.php?id=30"><img  src="Photos/deep.jpg" alt="Deepweb"></a></li>
	  <li class ="poster"><a href="landing.php?id=31"><img  src="Photos/war.jpg" alt="War Crimes Dealers" ></a></li>
	  <li class ="poster"><a href="landing.php?id=32"><img  src="Photos/avicii.jpg" alt="Avicii"></a></li>
		
  </ul>

  </div>
</div>
</div>
</div>
</div>
 <!--------FOOTER------->
<?php include("footer.php"); ?>

</body>
</html>
<!-- BOOTSTRAP JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


