<?php ob_start();?>
<?php
$activ = true;
$get_like_id = $_GET['id_post'];
include "../includes/config.php";
$mysql = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
$result = $mysql->query("UPDATE film SET likes = likes + 1 WHERE id_film = '$get_like_id'");
ob_clean();
$class = "liked";
header("Location:../film.php?id=$get_like_id");