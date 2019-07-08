<html>

<form action="" method="POST">
    <p><pre>Login   </pre><input type="text" name="login"></p>
    <p><pre>Password</pre><input type="password" name="paasword"></p>
    <p><pre>Email   </pre><input type="text" name="email"></p>
    <p><pre>About   </pre><textarea name="about"></textarea></p>
    <p><input type="submit" name="submit"</p>
</form>

</html>

<?php
if (!empty($_POST['submit'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $about = $_POST['about'];

    if (strlen($login) > 15) echo "Error: Login > 15" . "<br>";

    if (strlen($password) < 8) echo "Error: password < 8" . "<br>";

//Проверяем на валидность email:
    if (!preg_match("/([a-z0-9_\.\-]{1,20})@([a-z0-9\.\-]{1,5})\.([a-z]{2,4})/", $email)) {
        echo "Incorrect email" . "<br>";
    }

//Меняем заглавные буквы напрописные в About-е
    $newAbout = preg_replace_callback ("/[A-DА-Я]+/",
                                       function ($matches) {
                                           return strtolower($matches[0]);
                                       },
                                        $about);
    echo "New About:$newAbout";

}

?>


