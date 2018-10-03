<?
$index=count(scandir("../full/"))-1;
$path="../full/".$index.".jpg";
move_uploaded_file($_FILES[photo][tmp_name], $path);
include_once("get_min.php");
get_min($path, "../minimal/".$index, 200, 200, 1000);
echo "<p> Картинка успешно загружена. <a href=\"../index.php\">Продолжить</a></p>"
?>