<!doctype html>
<html>
    <head>
    <style>
            #zago{ text-align: center; }
            .txt{color:aliceblue; font-size: 30px;}
            img{object-fit: cover; height: 600px; width: 925px;}
        </style>
    </head>
    <body bgcolor="steelblue">
    <div id="zago"><font color="yellow" face="Arial"><h1> Выбор дачников! </h1></font></div>
    <img src="https://ladaautos.ru/wp-content/uploads/2016/05/obzor-komplektacij-lady-granta-liftbek-v-novom-kuzove-2016-goda.jpg">
    <img src="https://element-car.ru/upload/iblock/38f/38fcd71d5d613a35d94b1095fa1645b8.jpg">
    
    <?php
    $host = 'localhost';  // Хост, у нас все локально
    $user = 'root';    // Имя созданного вами пользователя
    $pass = ''; // Установленный вами пароль пользователю
    $db_name = 'timur';   // Имя базы данных
    $link = mysqli_connect($host, $user, $pass, $db_name); // Соединяемся с базой
    ?>

    
    <form action="" method="post">
  <table>
    <tr>
      <td>Производитель:</td>
      <td><input type="text" name="Fabric"></td>
    </tr>
    <tr>
      <td>Модель:</td>
      <td><input type="text" name="Model"></td>
    </tr>
    <tr>
      <td colspan="3"><input type="submit" name="nazvanie_knopki" value="Записать в БД">
       <?php if(isset($_POST['nazvanie_knopki']))
       {
        
        //Если переменная Name передана
        if (isset($_POST["Fabric"])) {
        //Вставляем данные, подставляя их в запрос
        $sql = mysqli_query($link, "INSERT INTO `auto` (`Fabric`, `Model`) VALUES ('{$_POST['Fabric']}','{$_POST['Model']}')");
        //Если вставка прошла успешно
        if ($sql) {
          echo '<p>Данные успешно добавлены в таблицу.</p>';
        } else {
          echo '<p>Произошла ошибка: ' . mysqli_error($link) . '</p>';
        } 
        }
       }
       ?>

    </td>
    </tr>
  </table>
</form>


    </body>
</html>