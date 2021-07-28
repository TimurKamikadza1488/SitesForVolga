<html>
<head>
<title>Внесение данных в таблицу AUTO</title>
<style>
.pic{text-align:center;}
img{object-fit: cover; height: 600px;}

</style>
</head>
<body>
<?php

$Fabric=trim($_POST["Fabric"]);
$Model=trim($_POST["Model"]);
$Engine=$_POST["Engine"];
$Transmission=$_POST["Transmission"];

if (strlen($Fabric)=="0" && strlen($Model)=="0" && strlen($Engine)=="0" &&
strlen($Transmission)=="0") $error=null;
else if(strlen($Fabric)=="0") $error="Это поле не должно быть пустым!";

mysql_connect("localhost", "root", "") or die (mysql_error ());

mysql_select_db("timur") or die(mysql_error());

$insert_sql = "INSERT INTO auto (Fabric, Model, Engine, Transmission)" .
"VALUES('{$Fabric}', '{$Model}', '{$Engine}', '{$Transmission}');";

if ($error==null && mysql_query($insert_sql)) {$Fabric=null; $Model=null;
$Engine=null; $Transmission=null; $messageOK="Запись успешно добавлена";}
 else if ($error!=null) $messageERR="Произошла ошибка при добавлении новой
записи";
?>

<form action="naviicar.php" method="post">
<fieldset>
<label for="Fabric">Производитель:</label><br>
<input type="text" name="Fabric" size="30" value="<?=@$Fabric;?>">
&nbsp;&nbsp;&nbsp;<font color="red"><?=@$error;?></font><br>
<label for="Model">Модель:</label><br>
<input type="text" name="Model" size="30" value="<?=@$Model;?>"><br>

<label for="Engine">Двигатель:</label><br>
<select name="Engine" value="<?=@$Engine;?>">
<?

$sql = "SELECT Code FROM `engine`";
$Eng_ID = mysql_query($sql);
while($row1 = mysql_fetch_array($Eng_ID)){
?>
<option value = "<?=@$row1['Code']?>" <?php if(@$Engine==@$row1['Code'])
{print "selected";}?> ><?=@$row1['Code']?> </option>
<?
}
?><br>


</select>
</fieldset>
<br/>
<input id="submit" type="submit" value="Отправить данные"><br/>
</form>
<p><font color='green'><?=$messageOK?></font><font color='red'> <?=$messageERR?>
</font></p>

<p class="pic"><img  src="https://cdn.motor1.com/images/mgl/WRg7L/s1/ultra-rare-2005-ford-gt-gtx1-roadster-for-sale.jpg">

</body>
</html>