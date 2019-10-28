<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- BOOTSTRAP -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
    <title>Page connexion</title>
</head>
<body class="body">
<div class="container">
<div class="m-auto pt-5 w-50">
<div class="card">
<h5 class="card-header bg-info" style="color:white;">Login</h5>
<div class="card-body">
<form action="" method="POST">
<div class="form-group">
<label for="username">Nom utilisateur</label>
<input type="text" class="form-control" id="username" placeholder="Username" name="username">
</div>
<div class="form-group">
<label for="password">Mot de passe</label>
<input type="password" class="form-control" id="password" placeholder="Password" name="password">
</div>
<small class="form-text text-danger mb-3"></small>
<hr>
<button type="submit" class="btn btn-dark float-right">Connexion</button>
</form>
</div>
</div>
</div>
</div>
</body>
</html>