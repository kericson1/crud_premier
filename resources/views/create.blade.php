<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href=" {{url('assets/css/bootstrap.css')}} ">
</head>
<body>
	<div class="container">
		<h1>Formulaire d'inscription</h1>
	<form action="{{ url('store')}}" method="post">@csrf
		<div class="form-group">
			<label for="nom">nom</label>
			<input type="text" id="nom" name="nom" placeholder="Votre nom" class="form-control">
		</div>
		<div class="form-group">
			<label for="prenom">Prénom</label>
			<input type="text" id="prenom" name="prenom" placeholder="Votre prenom" class="form-control">
		</div>
		<div class="form-group">
			<br>
			<p class="text-center"><button type="submit" class="btn btn-primary">Ajouter</button></p>
		</div>
	</form>
	</div>
</body>
</html>