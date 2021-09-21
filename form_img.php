<?php
$name = $_FILES["filename"]["name"];
$imgDir = "img/gallery/".$newName;
$thumDir = "thumbs/" . $newName;
$type = $_FILES["filename"]["type"];

if ($_FILES && $_FILES["filename"]["error"]== UPLOAD_ERR_OK)
{
	if ($type == "image/jpeg" || $type == "image/png")
	{
		copy($_FILES["filename"]["tmp_name"], $imgDir);
		copy ($_FILES["filename"]["tmp_name"], $thumDir);
	}
	else
		echo "Invalid type, please upload image file";
}
header('Location: gallery.php');
exit;