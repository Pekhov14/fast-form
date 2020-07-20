<?php

require_once __DIR__ . '/include/data.php';
require_once __DIR__ . '/include/functions.php';

if (!empty($_POST))
	$fields = load($fields);
    var_dump($fields);
    if ($errors = validate($fields)) {
//		var_dump($errors);
		print_r($errors);
    } else {
        echo 'OK';
        // mail
    }
?>


<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<title>Hello, world!</title>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<form method="post">
				<div class="form-group">
					<label for="email">Имя</label>
					<input type="text" name="name" class="form-control" id="name">
				</div>
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" name="email" class="form-control" id="email">
				</div>
				<div class="form-group">
					<label for="email">Адрес</label>
					<input type="text" name="address" class="form-control" id="address">
				</div>
				<div class="form-group">
					<label for="email">Телефон</label>
					<input type="text" name="phone" class="form-control" id="phone">
				</div>
				<div class="form-group">
					<label for="email">Коментарий</label>
					<textarea name="comment" id="comment" rows="3" class="form-control"></textarea>
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>
</div>

</body>
</html>