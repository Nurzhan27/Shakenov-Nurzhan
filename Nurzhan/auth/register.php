<?php
    include "../SETTINGS.php";
    include "../model_functions.php";
    include "../functions.php";
        $data = array();
        $data['login']= get_POST_data('login');
        $data['password']= get_POST_data('password');
        $data['full_name']= get_POST_data('full_name');
        $data['email']= get_POST_data('email');
        $error = '';
    if($data['login']&& $data['password']&& $data['full_name']&& $data['email']){
    if(!get_user($data['login'], $db)){
        insert_user($data,$db);
        header("Location: /$SITE_DOMAIN");
    }
    else{
        $error = "Уже есть такой пароль";
    }
    }
    else{
        $error = "Заполнить форму";
    }
    ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Proforientation</title>
</head>
<body>
<?php
if($error){
    echo $error;
}
?>
<form action="register.php" method="post">
    Login:<input type="text" name="login"required >
    Password:<input type="password" name="password" required>
    Full name:<input type="text" name="full_name"required>
    email:<input type="email" name="email"required>
    <input type="submit">
</form>
</body>
</html>
