<!DOCTYPE html>
<html>
<head>
	<title>Галерея - Домашнее задание к уроку №4</title>
	<link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>
	<header>
		<h1 class="header">Галерея</h1>
	</header>
	<main>
		<div class="gallery">
			
			<?
			include("engine/gallery.php"); 
			?>
		</div>
		<form class ="upload_form" action="engine/upload.php" method="post" enctype="multipart/form-data">
				<p>Загрузите Фото (только JPEG)</p>
				<input type="file" name="photo" accept="image/jpeg"=""><br>
				<input type="submit" name="save" capture>
			</form>
	</main>

</body>
</html>