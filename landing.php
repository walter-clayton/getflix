

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
</head>


<body>

<!-- HEADER -->
<?php include("header.php"); ?>

<div class="card" style="width: 35.2rem;">
<iframe width="560" height="315" src="https://www.youtube.com/embed/x9gkHthYj4U" 
frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" 
allowfullscreen></iframe> <br>
  <div class="card-body">
    <h5 class="card-title">Captain fantastic VF</h5>
    <p class="card-text">Dans les forêts reculées du nord-ouest des États-Unis, vivant isolé de la société, un père dévoué a consacré sa vie <br> 
toute entière à faire de ses six jeunes enfants d'extraordinaires adultes. Cependant, quand le destin frappe sa famille, <br>
 ils doivent abandonner ce paradis qu'il avait créé pour eux. La découverte du monde extérieur va l'obliger à questionner <br>
ses méthodes d'éducation et remettre en cause tout ce qu'il leur a appris.</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Un film réalisé par Matt Ross <br>
Avec Viggo Mortensen, Frank Langella, George Mackay </li>
    <li class="list-group-item">Date de sortie au cinéma en France : 12 Octobre 2016</li>
    <li class="list-group-item">Genre : Drame</li>
  </ul>
  <div class="card-body">
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>

<br>
<div class="container">
            <div class="row">

                <div class="col-md-7 d-flex justify-content-center">
                    <div class="form-group">
                        <textarea name="txtMsg" class="form-control" placeholder="Your Message *"
                            style="width: 200%; height: 150px;"></textarea> <br>
                            <input type="submit" name="btnSubmit" class="btnContact" value="Send Message" /> <br><br>
                            <input type="submit" name="btnSubmit" class="btnContact" value="See Comment" />

                    </div>
            </div>
  
            
 <!--------FOOTER------->
<?php include("footer.php"); ?>
</body>


</html>
