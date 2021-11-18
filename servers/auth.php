<?php
    include "../includes/config.php";
    $login = filter_var(trim($_POST['alogin']),
    FILTER_SANITIZE_STRING
);
    $pass = filter_var(trim($_POST['apass']),
    FILTER_SANITIZE_STRING
);
$pass = md5($pass."ergtaergteargterag");
    $mysql = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
    $resolt = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass' ");
    $user = $resolt->fetch_assoc();
    if(count($user) == 0){
        echo '
<meta charset="UTF-8">
<script>
function myFunction()
{
alert("Вы что то не правильно ввели"); // this is the message in ""
}
myFunction()
window.location.href = "/"
</script>
';
die;
    }
   
    setcookie('user',$user['name'],time() + 3600 * 24,"/");

    $mysql->close();


    header('Location:/');


?>