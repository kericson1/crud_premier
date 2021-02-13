<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href=" {{url('assets/css/bootstrap.css')}} ">
</head>
<body>

	<h1 class="bg-primary text-center">Liste des membres</h1>
	<div class="container">
		<table id="sections" class="table table-bordered table-striped">
		    <thead>
		        <tr>
		            <th>Id</th>
		            <th>Name</th>
		            <th>URL</th>
		        </tr>
		    </thead>
		    <tbody>
		        @foreach($students as $student)
		        <tr>
		            <td> {{ $student->id }} </td>
		            <td>{{ $student->nom }}</td>

		            <td>{{ $student->prenom }}</td>
		        </tr>
		        @endforeach
		    </tbody>
		</table>
	</div>
</body>
</html>