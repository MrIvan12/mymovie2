<?php include_once "includes/header.php" ?>
    <div  class="wrapper">
        <div class="content">
            
            <?php
             
             $mysql = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
            $result =  $mysql->query("SELECT * FROM `films`");
            $result->fetch_assoc();
            
            foreach ($result as $item) {
                echo '
                   <a href="film.php?id='.$item["id"].'" class="film">
                <img src="'.$item["img_film"].'" alt="' .$item["film_text"].'" class="image-film">
                <div class="name">' .$item["film_text"].'</div>
                <div class="raiting_film">&#9733 ' .$item["raiting"].'</div>
            </a>';
            }
             $mysql->close(); 
            ?>
            
<?php include_once "includes/footer.php"; ?>