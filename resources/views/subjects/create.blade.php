<html>
<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h2>Add New Subject</h2><br/>
		<form action="/subjects" method="POST">
			@csrf
			<div class="form-group">
				<label for="name">Code:</label>
				<input type="text" id="code" name="code" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="name">Description:</label>
				<input type="text" id="description" name="description" class="form-control">
			</div>
			<div class="form-group">
				<label for="name">Units:</label>
				<input type="text" id="units" name="units" class="form-control">
			</div>
			<input type="submit" value="Add Record" class="btn btn-default">
		</form>
	</div>
</body>
</html>