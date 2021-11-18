<?php include_once "includes/header.php" ?>
    <div  class="wrapper">
        <div class="content">
            <?php
             $get_watch = $_GET['watch'];
             $mysql = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
            $result =  $mysql->query("SELECT films.* FROM `films` WHERE films.watch = '$get_watch'");
            $result->fetch_assoc();
            
            foreach ($result as $item) {
                echo '
                <a href="film.php?id='.$item["id"].'" class="film">
                <img src="'.$item["img_film"].'" alt="' .$item["film_text"].'" class="image-film">
                <span class="name">' .$item["film_text"].'</span>
                <div class="raiting_film">' .$item["raiting"].'</div>
            </a>
              ';
            }
             $mysql->close(); 
            ?>
<?php include_once "includes/footer.php" ?>