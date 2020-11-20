<?php
	$conn = mysqli_connect('foon.mysql.database.azure.com', 'taifhoon@foon', 'Tai35821', 'ITFLab');

	$name = $_POST['name'];
	$comment = $_POST['comment'];
	$link = $_POST['link'];
	$id = $_POST['id'];

	$sql = 'UPDATE guestbook SET Name = "'.$name.'", Comment = "'.$comment.'", Link = "'.$link.'" WHERE ID = '.$id.'';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit LAB ITF</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
	<style type="text/css">
		.card {
			border-top: solid 10px #00B900;
		}
	</style>
</head>
<body class="bg-dark py-5">
	<div class="container text-dark">
		<div class="row">
			<div class="col-12 col-lg-8 offset-lg-2">
				<div class="card shadow">
					<div class="card-body">
						<h2 align="center">
						<?php
							if(mysqli_query($conn, $sql)) {
								echo "EDIT COMPLETED";
							}
							else {
								echo "EDIT FAILED";
							}
						?>
						</h2>
						<p align="center" class="mt-4 mb-0"><a href="show.php" class="btn btn-sm btn-success font-weight-bold">BACK</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
