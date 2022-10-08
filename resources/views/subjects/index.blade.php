<html>
<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h2>Subjects</h2><br/>
		<table class="table table-striped">
			<tr>
				<th>Code</th>
				<th>Description</th>
				<th>Units</th>
			</tr>
			@foreach($subjects2 as $subject)
			<tr>
				<td>{{$subject->code}}</td>
				<td>{{$subject->description}}</td>
				<td>{{$subject->units}}</td>
			</tr>
			@endforeach
			
		</table>
		<p><a href="/subjects/create">Add Subject</a></p>
	</div>
</body>
</html>