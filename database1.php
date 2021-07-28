<html>
<head>
 <title>База данных Auto. Таблица Auto</title>
 <style>

            img{object-fit: cover; height: 50px;}
        </style>
</head>
<body bgcolor="pink" leftmargin="10%" rightmargin="10%">

<?php
$str= mysqli_connect('localhost', 'root', '', 'timur');
$select= mysqli_query($str, "SELECT Code, HP, Type, Volume FROM engine;");
while ($r= mysqli_fetch_array($select)) {
 echo $r['Code'] . " ";
 echo $r['HP'] . " ";
 echo $r['Volume'] . " ";
 echo $r['Type'] . "<br />";
}
mysqli_close($str);
?>
<img src="https://i.ytimg.com/vi/wu7aEyVX5bY/maxresdefault.jpg">

</body>
</html>
