<?php ob_start();?>
<?php 

include "../includes/config.php";
 $login = filter_var(trim($_POST['login']),
 FILTER_SANITIZE_STRING
);
 $pass = filter_var(trim($_POST['pass']),
 FILTER_SANITIZE_STRING
);

 $name =  filter_var(trim($_POST['name']),
 FILTER_SANITIZE_STRING
); 

$pass = md5($pass."ergtaergteargterag");
$mysql = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
$resolt = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' ")->fetch_assoc();
if($resolt['login'] > ''){
echo '
<meta charset="UTF-8">
<script>
function myFunction()
{
alert("Такой логин уже есть"); // this is the message in ""
}
myFunction()
window.location.href = "/"
</script>
';
die;
}
$mysql->query("INSERT INTO `users` (`login`,`pass`,`name`)VALUES('$login','$pass','$name') ");
$user= $mysql->query("SELECT * FROM `users` WHERE `pass` = '$pass' ")->fetch_assoc();
setcookie('user',$user['name'],time() + 3600 * 24,"/");
$mysql->close();
ob_clean();
header('Location:/');
exit();
?>
