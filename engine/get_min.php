<?
function get_min($tmp_name, $new_name, $resolution_width, $resolution_height, $max_size){

//проверяем размер файла
$image_size = filesize($tmp_name);
$image_size = floor($image_size / '1048576') ;
if($image_size <= $max_size) {

$params = getimagesize($tmp_name) ;
//проверяем ширину и высоту, нужно ли обрезание
if($params['0'] > $resolution_width || $params['1'] > $resolution_height) {
//пишем фото --------->
//получаем нужные переменные
$old_img = imagecreatefromjpeg($tmp_name); 
//вычисляем новые размеры
if($params['0'] > $params['1']) {
$size = $params['0'] ;
$resolution = $resolution_width;
}
else {
$size = $params['1'] ;
$resolution = $resolution_height;
}
$new_width = floor($params['0'] * $resolution / $size) ;
$new_height = floor($params['1'] * $resolution / $size) ;
//создаём новое изображение
$new_img = imagecreatetruecolor($new_width, $new_height) ;
imagecopyresampled ($new_img, $old_img, 0, 0, 0, 0, $new_width, $new_height, $params['0'], $params['1']) ;

//сохраняем новое изображение----->>>>>>
$type = '.jpg';
//Сохраняем
$new_name = "$new_name$type" ;
imagejpeg($new_img, $new_name, 100);
$message = ('<font class="message">Изображение добавлено</font><br>') ;
imagedestroy($old_img);
}
//если не нужно обрезать-------------------->>>>>>>>>>>>>>>>>>>>>>>
else {
//сохраняем новое изображение----->>>>>>
$type = '.jpg';
//Сохраняем
$new_name = "$new_name$type" ;
move_uploaded_file($tmp_name, $new_name);
$message = ('<font class="message">Изображение добавлено</font><br>') ;
}
}
else $errors = ('<font class="error">Слишком большой размер</font><br>') ;
return($message);
return($errors);
}
?>