<?php
$connect = mysqli_connect('localhost', 'root', '', 'data_users');
if (!$connect) {
    die('Error connect to DataBase');
}
$login = $_POST['login'];
$password = $_POST['password'];

$password = md5($password);
$check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");


if (mysqli_num_rows($check_user) > 0) {

    $user = mysqli_fetch_assoc($check_user);
    echo 'Вход выполнен успешно!';
} else {
    echo 'Не верный логин или пароль';
}
?>

<pre>
    <?php
    print_r($check_user);
    print_r($user);
    ?>
</pre>