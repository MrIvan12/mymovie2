<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/admin.css">
    <title>Admin</title>
</head>
<body>
    <h1 style="color:white;padding:0;">admin74</h1>
  <form action="server.php" class="film_canhge" method="POST" enctype="multipart/form-data">
        
         <input type="file" name="poster" > 
         <input placeholder="В ведите название фильма" type="text" id = "film_name" name="name"> 
        <!-- <input placeholder="В ведите адрес постера" type="text" id = "film_poster" name="poster"> -->
         <input placeholder="В ведите уникальный id " type="text" id = "film_name" name="id">
        <textarea placeholder="В ведите описание фильма" name="desc" id="input_desc" cols="30" rows="10"></textarea>
        <input placeholder="В ведите возрастное ограничение" type="text" id = "film_name" name="old">
        <input placeholder="В ведите жанр" type="text" id = "film_name" name="genre">
        <input placeholder="В ведите год" type="text" id = "film_name" name="year">
        <input placeholder="В ведите рейтинг" type="text" id = "film_name" name="raiting">
        <input placeholder="В ведите (anime,fight,comedy)" type="text" id = "film_name" name="tbl_genre">
        <input placeholder="В ведите (family,adult,teen)" type="text" id = "film_name" name="watch">
		 
        <input type="file" name="video" > 
        <button>Создать фильм</button>
  </form>
</body>
</html>