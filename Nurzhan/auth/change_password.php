<?php
    include "../model_functions.php";
    include "../functions.php";
    include "../SETTINGS.php";
    session_start();
    if(isset($_SESSION['user'])){
        $user_id = $_SESSION['user_id'];
        $new = get_POST_data('new_password');
    if($new){
    update_user_password($user_id, $new, $db);
    header("Location: /$SITE_DOMAIN");
    }
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Change password</title>
</head>
<body>
<form action="change_password.php"  method="post">
    <input type="text" name="new_password">
    <input type="submit">
</form>
</body>
</html>
