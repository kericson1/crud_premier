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
		<h1>Welcome</h1>
			@if (session('status'))
		    <div class="alert alert-success">
		        {{ session('status') }}
		    </div>
			@endif
            @if (session('success'))
		    <div class="alert alert-success">
		        {{ session('success') }}
		    </div>
			@endif
            @if (session('delete'))
		    <div class="alert alert-danger">
		        <p>Vous avez suprimé {{ session('delete') }} avec succès</p>
		    </div>
			@endif
		<h2><a href="{{ url('create') }}">Ajouter un nouveau membres</a></h2>
	</div>
	<h1 class="text-center">Liste des membres</h1>
	<div class="container">
		<table id="sections" class="table table-bordered table-striped">
		    <thead>
		        <tr>
		            <th>Id</th>
		            <th>Name</th>
		            <th>URL</th>
		            <th>Actions</th>
		        </tr>
		    </thead>
		    <tbody>
		        @foreach($students as $student)
		        <tr>
		            <td> {{ $student->id }} </td>
		            <td>{{ $student->nom }}</td>

		            <td>{{ $student->prenom }}</td>
		            <td>
                        <a class="btn btn-info" href="{{route('edit', $student->id)}}">Modifier</a>
                        <a class="btn btn-danger" href="{{route('delete', $student->id)}}">Supprimer</a>
                    </td>
		        </tr>
		        @endforeach
		    </tbody>
		</table>
	</div>
</body>
</html
