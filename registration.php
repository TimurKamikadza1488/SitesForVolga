<html>
    <head>
        <title>Регистрация</title>
        <link rel="stylesheet" type="text/css" href="regizcss.css">
    </head>
    
    <body>
        <pre><? print_r($_POST)?></pre>
        <?php
            $servername = "localhost";
            $database = "users";
            $username = "root";
            $password = "";
            $mysql = new mysqli('$servername', '$username', '$password', '$database');
            
            $login = $_POST['loginemail'];
            $password = $_POST['password'];
            $name = $_POST['name'];
            
            $mysql->query("Insert into users(ID_user, loginemail, password, name) Values(NULL, '$login', '$password', '$name')");


            var_dump($login, $password, $name);
         ?>
        
        <form action="registration.php" method="post">
            <div class="container">
            <h1>Регистрация</h1>
            <p>Заполните форму для регистрации.</p>
            <hr>
            
            <label for="name"><b>Имя</b></label>
            <input type="text" placeholder="Enter ur name" name="name" size="15" value="<?=@name?>" >

            <label for="loginemail"><b>Email</b></label>
            <input type="text" name="loginemail" size="25" value="<?=@login?>" placeholder="Enter Email" >

            <label for="password"><b>Пароль</b></label>
            <input type="text" placeholder="Enter Password" name="password" size="50" value="<?=@password?>" >

            <label for="psw-repeat"><b>Повторите пароль</b></label>
            <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
            <hr>

            <input id="submit" value="Регистрация" type="submit" class="registerbtn">
            </div>

            <div class="container signin">
                <p>Уже есть аккаунт? <a href="autorization.php">Заходите</a>.</p>
            </div>
        </form>
        <?php var_dump($login, $password, $name); ?>
    </body>
</html>