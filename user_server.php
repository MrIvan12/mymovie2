<?php ob_start(); ?>
<meta charset="UTF-8">

<?php 

include_once "includes/function.php";
include_once "includes/config.php";
$image = $_FILES['poster'];
$img_name = $image['name'];
move_uploaded_file($image['tmp_name'],'img/' . $image['name']);
$movie = $_FILES['video'];
$movie_name = $movie['name'];
move_uploaded_file($movie['tmp_name'],'video/' . $movie ['name']);
$name  = $_POST['name'];
$id  = $_POST['id'];
$desc  = $_POST['desc'];
$old  = $_POST['old'];
$genre = $_POST['genre'];
$old  = $_POST['old'];
$raiting  = $_POST['raiting'];

$year  = $_POST['year'];
$mysql = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
$result =  $mysql->query("SELECT * FROM `films`")->fetch_assoc();
if($id == $result["id"]){
	echo "Такой id уже есть";
die;
}
 $mysql->query("INSERT INTO `film` (`id_film`,`film`,`desc`,`year`,`old`)VALUES('$id ','video/$movie_name','$desc','$year ','$old ')");
  $mysql->query("INSERT INTO `films` (`id`,`img_film`,`film_text`,`raiting`)VALUES('$id ','img/$img_name','$name','$raiting')");
$mysql->close(); 
ob_clean();
header("Location:index.php");


?>