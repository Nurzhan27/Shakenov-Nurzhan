<?php
    include "../SETTINGS.php";
    include "../functions.php";
    include "../model_functions.php";
    session_start();
        $login = get_POST_data('login');
        $password = get_POST_data('password');
        $error = '';
    if($login && $password){
        $user = get_user($login, $db);
    if($user['password'] == $password){
        $_SESSION['user'] = $login;
        $_SESSION['user_id'] = $user['user_id'];
        $_SESSION['user_email'] = $user['email'];
        $_SESSION['user_money'] = $user['kalta'];
		$is_admin = false;
	if($_SESSION['user']==$ADMIN){
			$is_admin = true;
		}
	if($is_admin){
	header("Location: /$SITE_DOMAIN/proftable.php");
		}
	else{
	header("Location: /$SITE_DOMAIN");
		}
        }
        $error = "НЕ правльный пароль или логин ";
    }else{
        $error = "Заполните фрому";
        }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
    if($error){

        echo $error;

    }

?>

</body>
</html>
