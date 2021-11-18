<?php 
 include_once "includes/config.php";
 $mysql = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
 $id_film2 = $_GET['id'];
 $result2 = $mysql->query("SELECT film.*,films.film_text FROM `film` JOIN `films` ON film.id_film = films.id WHERE film.id_film = '$id_film2' ")->fetch_assoc();
 $title =  $result2["film_text"]  .  '  смотреть онлайн бесплатно на My Movie!';
 $mysql->close();
 

 include_once "includes/header.php" ;
 ?>
    <div class="wrapper">
        <div class="content">
            <?php
            $activ;
             function get_film($id_film){
             $mysql = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
            $result =  $mysql->query("SELECT film.*,films.img_film,films.film_text,films.raiting FROM `film` JOIN `films` ON film.id_film = films.id WHERE film.id_film = $id_film ");

            foreach ($result as $item) {
                echo'
                <div class="film_main">
                <div class="film_desc">
                <img src="'.$item["img_film"].'"
                    alt="" class="image-film">
                <div class="all">
                    <ul>
                        <li class="all_item">Год:'.$item["year"].'</li>
                        <li class="all_item">Жанр:'.$item["genre"].'</li>
                        <li class="all_item">Возрастное ограничение:'.$item["old"].'</li>
                        <li class="all_item">Название:'.$item["film_text"].'</li>
                        <li class="all_item rating">Рейтинг:'.$item["raiting"].'</li>
                    </ul>
                </div>
                
                <div class="desc">
                <h1>'.$item["film_text"].'</h1>
                '.$item["desc"].'
                </div>
                </div>
               
                <video class="film-video" controls>
                <source src="'.$item["film"].'">
            </video>
           
            <div class="likes"> <span style="color:white">Если видео не грузится перезагрузите страницу</span><form action="servers/liked.php?id_post='.$_GET['id'].'" method="post"><button class="like "'. $class.'">&#10084</button>'.$item['likes'].'</form></div> </div>
                ';
               
              
            };
            $mysql->close();
             }
             get_film($_GET['id']);
            ?>

<?php include_once "includes/footer.php" ?>