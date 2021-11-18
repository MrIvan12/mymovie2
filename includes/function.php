<?php

function change_title($title = ''){
    if($title == ''){
        return SITE_NAME . " Бесплатный сервис для промотра фильмов";
    }else{
        return  $title;
    }
}
function location(){
	header("Location:index.php");
}


?>