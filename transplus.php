<html>
<head>
<title>Внесение данных в таблицу коробки</title>
<style>
.pic{text-align:center; }

</style>
</head>
<body>
<?php
// это основной скрипт, который проверят заполненность полей и добавляет
//данные в БД//
// получаем данные из формы, если они уже были внесены//
$Code=trim($_POST["Code"]);
$Type=$_POST["Type"];
$Volume=$_POST["Volume"];
// проверяем, начали ли мы заполнять форму. Если начали, но не заполнили
//поле с фамилией, то записываем в переменную $error сообщение об ошибке//
if (strlen($Code)=="0" && strlen($Type)=="0") $error=null;
else if(strlen($Code)=="0") $error="Это поле не должно быть пустым!";
// Соединяемся сервером БД //
mysql_connect("localhost", "root", "") or die (mysql_error ());
 // Выбираем БД //
mysql_select_db("timur") or die(mysql_error());
// создаем переменную с запросом на вставку данных в БД
$insert_sql = "INSERT INTO transmission (Code, Type)" .
"VALUES('{$Code}', '{$Type}');";
// выполняем запрос, если поле Фамилия было заполнено. Обнуляем
//переменные //
if ($error==null && mysql_query($insert_sql)) {$Code=null; $Type=null; $messageOK="Запись успешно добавлена";}
 else if ($error!=null) $messageERR="Произошла ошибка при добавлении новой
записи";
?>
<form action="transplus.php" method="post">
<fieldset>
<label for="Code">Кодовое имя КПП:</label><br>
<input type="text" name="Code" size="30" value="<?=@$Code;?>">
&nbsp;&nbsp;&nbsp;<font color="red"><?=@$error;?></font><br>
<label for="Type">Тип коробки:</label><br>
<input type="text" name="Type" size="30" value="<?=@$Type;?>"><br>

</select>
</fieldset>
<br/>
<input id="submit" type="submit" value="Отправить данные"><br/>
</form>
<p><font color='green'><?=$messageOK?></font><font color='red'> <?=$messageERR?>
</font></p>
<p class="pic"><img src="https://natachku.ru/images/Foto1/8/Ford_Mustang-8.jpg">
</body>
</html>