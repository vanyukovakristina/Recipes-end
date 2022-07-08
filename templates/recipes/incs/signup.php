
    <?php
    $connect = mysqli_connect('localhost','root', '', 'data_users');
    if(!$connect){
        die('Error connect to DataBase');
    }

    $full_name=$_POST['name'];
    $login=$_POST['login'];
    $password = $_POST['password'];
    $password_confirm=$_POST['password_confirm'];

    if($password===$password_confirm){
        $password = md5($password);//хеш из пароля
        mysqli_query($connect, "INSERT INTO `users` ( `name`, `login`, `password`) VALUES ( '$full_name', '$login', '$password')");
        die("Регистрация прошла успешно!");
    } else {
      die("Пароли не совпадают!");
    }
    ?>