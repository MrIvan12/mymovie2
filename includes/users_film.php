<div class="users_film">
                <div><h1 style="color:white">Добавляйте свои фильмы</h1></div>
                <?php if($_COOKIE['user'] != ''){?>
                <form action="user_server.php" class="film_canhge" method="POST" enctype="multipart/form-data">
        
        <input type="file" name="poster" > 
        <em style="color:white">Это кнопка для загрузки постера</em>
        <input placeholder="В ведите название фильма" type="text" id = "film_name" name="name"> 
       <input placeholder="В ведите адрес постера" type="text" id = "film_poster" name="poster"> -->
         <input placeholder="В ведите уникальный id " type="text" id = "film_name" name="id">
       <textarea placeholder="В ведите описание фильма" name="desc" id="input_desc" cols="30" rows="10"></textarea>
       <input placeholder="В ведите возрастное ограничение" type="text" id = "film_name" name="old">
       <input placeholder="В ведите жанр" type="text" id = "film_name" name="genre">
       <input placeholder="В ведите год" type="text" id = "film_name" name="year">
       <input placeholder="В ведите рейтинг" type="text" id = "film_name" name="raiting">
       
       <input placeholder="В ведите адрес фильма" type="text" name="video">
       <input type="file" name="video"  > 
       <em style="color:white">Это кнопка для загрузки фильма</em>
       <button class="button-header">Создать фильм</button>
 </form>
      <span style="color:white;cursor:pointer" class="open_film">Добавить фильм</span>
      <?php }else{?>
     <span style="color:white;cursor:pointer" >Вы должны быть зарегестрированы что бы добавлять свои фильмы</span>
    
      <?php }?>
            </div>