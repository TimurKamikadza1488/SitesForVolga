<html>
<head>
<title>Внесение данных в таблицу двигатели</title>
<style>
.pic{text-align:center; }

</style>
</head>
<body bgcolor="black">
<?php
// это основной скрипт, который проверят заполненность полей и добавляет
//данные в БД//
// получаем данные из формы, если они уже были внесены//
$Code=trim($_POST["Code"]);
$HP=trim($_POST["HP"]);
$Type=$_POST["Type"];
$Volume=$_POST["Volume"];
// проверяем, начали ли мы заполнять форму. Если начали, но не заполнили
//поле с фамилией, то записываем в переменную $error сообщение об ошибке//
if (strlen($Code)=="0" && strlen($HP)=="0" && strlen($Type)=="0" &&
strlen($Volume)=="0") $error=null;
else if(strlen($Code)=="0") $error="Это поле не должно быть пустым!";
// Соединяемся сервером БД //
mysql_connect("localhost", "root", "") or die (mysql_error ());
 // Выбираем БД //
mysql_select_db("timur") or die(mysql_error());
// создаем переменную с запросом на вставку данных в БД
$insert_sql = "INSERT INTO engine (Code, HP, Type, Volume)" .
"VALUES('{$Code}', '{$HP}', '{$Type}', '{$Volume}');";
// выполняем запрос, если поле Фамилия было заполнено. Обнуляем
//переменные //
if ($error==null && mysql_query($insert_sql)) {$Code=null; $HP=null;
$Type=null; $Volume=null; $messageOK="Запись успешно добавлена";}
 else if ($error!=null) $messageERR="Произошла ошибка при добавлении новой
записи";
?>
<form action="testovaya.php" method="post">
<fieldset>
<font color="white"><label for="Code">Кодовое имя двигателя:</label><br>
<input type="text" name="Code" size="30" value="<?=@$Code;?>">
&nbsp;&nbsp;&nbsp;<font color="red"><?=@$error;?></font><br>
<label for="HP">Л.С.:</label><br>
<input type="text" name="HP" size="30" value="<?=@$HP;?>"><br>
<label for="Type">Тип двигателя:</label><br>
<input type="text" name="Type" size="30" value="<?=@$Type;?>"><br>
<label for="Volume">Объём двигателя:</label><br>
<input type="text" name="Volume" size="30" value="<?=@$Volume;?>">
</font>
</select>
</fieldset>
<br/>
<input id="submit" type="submit" value="Отправить данные"><br/>
</form>
<p><font color='green'><?=$messageOK?></font><font color='red'> <?=$messageERR?>
</font></p>
<p class="pic"><img  src="https://fordcobraengines.com/wp-content/uploads/2013/03/coyote_3-Copy2.jpg">
</body>
</html>