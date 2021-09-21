<!doctype html>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<title><?=$title?></title>
		<link rel="stylesheet" href="CSS/style.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
		<style type="text/css">
  .miniature, #full{margin:4px; border: solid 1px green; padding: 5px}
  </style>
	</head>
	<body>
	<header>
	<a href="index.php">Home</a>
	</header>
	
<div class="container mt-2">
<!---------------------------Галерея--------------------------------------------------------->
	<?php
		$galleryDir = "img/gallery/";
		$thumbs = " thumbs/";

		function getImg($path)
		{

			$gallery = array();
	
			$files  = scandir($path);
			foreach($files as $key => $val)
			{
				if((filetype($path .$val)) == "file" && (strtolower(substr($val, -4))) == "jpeg" || 
				(strtolower(substr($val, -3))) == "jpg" || (strtolower(substr($val, -3))) == "png")
				$gallery[] = $val;	
			}
			return ($gallery);
		}

	?>
		<div class="container" align="center">
			
	<p><img id="full" src="<?php echo $galleryDir.(array_shift(getImg($galleryDir))) ?>" width="400px" height="400px"/></p>
	<?php 
	foreach(getImg($galleryDir) as $img)
	{
		echo '<img class="miniature" src="'.$thumbs.$img.'" width="50px" height="50px" onclick="document.getElementById(\'full\').src=\''.$galleryDir.$img.'\'"/>';
	}
	?>
	
	<!-------------------------------------- Форма загрузки картинок---------------------------------- -->
<div align=left style="margin-top: 30px">
	<form action="form_img.php" method="post" enctype="multipart/form-data">
		<label for="file" >You can upload new photo</label>
		<br><br>
		<input type="file" name="filename" value="Upload">
		<br><br>
		<input type="submit" value="submit">
	</form>
</div>
</div>
<br><br>

<footer>
	</footer>
	<script type="text/javascript" src="js/main.js"></script> 
</body>
</html>
