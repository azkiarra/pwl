<html>
	<head>
		<title>Native MVC Example</title>
		<link rel="stylesheet" href="/mvc-example/assets/css/bootstrap.css" />
		<script type="text/javascript" src="/mvc-example/assets/js/bootstrap.js"></script>
	</head>
	<body>
		<div class="row">
			<div class="col-md-12">
				<div class="col-md-4">&nbsp;</div>
				<div class="col-md-4"><h3>Data Mahasiswa</h3>
					<?php 

						echo 'ID: ' . $rs['id'] . '<br/>';
						echo 'NIM: ' . $rs['nim'] . '<br/>';
						echo 'Nama: ' . $rs['nama'] . '<br/>';
						echo 'Created At: ' . $rs['created_at'] . '<br/>';

					?>
					<br/>
					<a href="/mvc-example/?act=delete&i=<?php echo $rs['id']; ?>" class="btn btn-danger">Delete</a>
				</div>
				<div class="col-md-4">&nbsp;</div>
			</div>
		</div>
	</body>
</html>

<html>
<head></head>

<body>

</body>
</html>
