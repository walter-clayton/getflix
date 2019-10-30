
<!-- HEADER -->
          <?php 
    session_start(); 

  if (!isset($_SESSION['pseudo'])) {
    $_SESSION['msg'] = "You must log in first";
    echo '<h1 style="color: white;">' .'you must login to add comments!' . '</h1>';
  }

        ?>

<?php include("header.php"); ?>



    <div class="content">
      <h1 style="color: white;">HELLO</h1>
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
    <?php  if (isset($_SESSION['pseudo'])) : ?>
      <p style="color : white;">Welcome <strong> <?php echo $_SESSION['pseudo']; ?> </strong></p>
      <?php endif ?>

      <p> <a href="index.php?logout='1'" style="color: red;" onclick ="logout();" name="logout" >logout <?php include('logout.php') ?> </a> </p>
    
</div>


  <!--  SAMUEL SCROLL-->
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
		  <li class ="poster"><a herf="www.coin.com"><img  src="Photos/joker.jpg" alt="Joker" ></a></li>
		  <li class ="poster"><a herf="www.coin.com"><img  src="Photos/ca.jpg" alt="ça" ></a></li>
		  <li class ="poster"><a herf="www.coin.com"><img  src="Photos/fast.jpg" alt="fast and furious"></a></li>
		  <li class ="poster"><a herf="www.coin.com"><img  src="Photos/president.jpg" alt="Président" ></a></li>
  </ul>
  </div>

  <div class="carousel-item ">
	
      <ul >
	  <li class ="poster"><a herf="www.coin.com"><img  src="Photos/angry.jpg" alt="Angry Bird"></a></li>
	  <li class ="poster"><a herf="www.coin.com"><img  src="Photos/terminator.jpg" alt="Terminator"></a></li>
	  <li class ="poster"><a herf="www.coin.com"><img  src="Photos/once.jpg" alt="Tarantino" ></a></li>
	  <li class ="poster"><a herf="www.coin.com"><img  src="Photos/dora.jpg" alt="Dora"></a></li>
		
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
		  <li class ="poster"><a herf="www.coin.com"><img  src="Photos/blackmirror.jpg" alt="Black Mirror" ></a></li>
		  <li class ="poster"><a herf="www.coin.com"><img  src="Photos/boys.jpg" alt="The Boys" ></a></li>
		  <li class ="poster"><a herf="www.coin.com"><img  src="Photos/gof.jpg" alt="Game of Throne"></a></li>
		  <li class ="poster"><a herf="www.coin.com"><img  src="Photos/misfit.jpg" alt="Mis fits" ></a></li>
  </ul>
  </div>

  <div class="carousel-item ">
	
      <ul >
	  <li class ="poster"><a herf="www.coin.com"><img  src="Photos/morty.jpg" alt="Rick et Morty"></a></li>
	  <li class ="poster"><a herf="www.coin.com"><img  src="Photos/happy.jpg" alt="Happy"></a></li>
	  <li class ="poster"><a herf="www.coin.com"><img  src="Photos/walking.jpg" alt="The walking dead" ></a></li>
	  <li class ="poster"><a herf="www.coin.com"><img  src="Photos/heroes.jpg" alt="Heroes"></a></li>
		
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
		  <li class ="poster"><a herf="www.coin.com"><img  src="Photos/clone.jpg" alt="Clones" ></a></li>
		  <li class ="poster"><a herf="www.coin.com"><img  src="Photos/paul.jpg" alt="Paul" ></a></li>
		  <li class ="poster"><a herf="www.coin.com"><img  src="Photos/legend.jpg" alt="Im Legend"></a></li>
		  <li class ="poster"><a herf="www.coin.com"><img  src="Photos/ralph.jpg" alt="Ralph 2.0" ></a></li>
  </ul>
  </div>

  <div class="carousel-item ">
	
      <ul >
	  <li class ="poster"><a herf="www.coin.com"><img  src="Photos/dentmer.jpg" alt="Les dents de la mer"></a></li>
	  <li class ="poster"><a herf="www.coin.com"><img  src="Photos/zombieland.jpg" alt="Zombieland 2"></a></li>
	  <li class ="poster"><a herf="www.coin.com"><img  src="Photos/rambo.jpg" alt="Rambo" ></a></li>
	  <li class ="poster"><a herf="www.coin.com"><img  src="Photos/jobs.jpg" alt="Steve Jobs"></a></li>
		
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
		  <li class ="poster"><a herf="www.coin.com"><img  src="Photos/capitaine.jpg" alt="Capitain Fantastic" ></a></li>
		  <li class ="poster"><a herf="www.coin.com"><img  src="Photos/america.jpg" alt="Sweet dream of america" ></a></li>
		  <li class ="poster"><a herf="www.coin.com"><img  src="Photos/nature.jpg" alt="Force et nature"></a></li>
		  <li class ="poster"><a herf="www.coin.com"><img  src="Photos/queen.jpg" alt="Mc Queeen" ></a></li>
  </ul>
  </div>

  <div class="carousel-item ">
	
      <ul >
	  <li class ="poster"><a herf="www.coin.com"><img  src="Photos/nobody.jpg" alt="Nobody die here"></a></li>
	  <li class ="poster"><a herf="www.coin.com"><img  src="Photos/deep.jpg" alt="Deepweb"></a></li>
	  <li class ="poster"><a herf="www.coin.com"><img  src="Photos/war.jpg" alt="War Crimes Dealers" ></a></li>
	  <li class ="poster"><a herf="www.coin.com"><img  src="Photos/avicii.jpg" alt="Avicii"></a></li>
		
  </ul>

  </div>
</div>
</div>
</div>
 <!--------FOOTER------->
<?php include("footer.php"); ?>

</body>
</html>
<script type="text/javascript">
  
li.onclick = () => {
          var xmlhttp = new XMLHttpRequest();
          xmlhttp.onreadystatechange = function() {
              if (this.readyState == 4 && this.status == 200) {
                window.location.href = `${window.location}?i=${elem.id}`
              }
          };
          xmlhttp.open("GET", "index.php?i=" + elem.id, true);
          xmlhttp.send();
        }

</script>


<!-- BOOTSTRAP JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


