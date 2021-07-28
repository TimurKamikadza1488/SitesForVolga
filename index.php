<html>
    <head>
        <title>Мой сайт про машинки</title>
        <style>
            #header{ text-align: center; width: 100%; height: 55px; }
            #navigation{ width: 100%; height: 400px; }
            #content{  }
            .txt{color:aliceblue; font-size: 30px;}
            img{object-fit: cover; max-width: 49%;  min-width: 1%;  }
        </style>
        <link rel="stylesheet" type="text/css" href="maincss.css">
<script language="JavaScript" type="text/javascript">
<!--
function linklist(what){
var selectedopt=what.options[what.selectedIndex]
if (document.getElementById && selectedopt.getAttribute("target")=="new")
window.open(selectedopt.value)
else
window.location=selectedopt.value
}
-->
</script>

        
        
    </head>
    <body bgcolor="black">
        <div id="container">
            <div id="header">
                <font color="red" face="Arial"><h1> База данных про машинки </h1></font>
            </div>
        
            
            
            <div id="navigation">
                <img src="https://im0-tub-ru.yandex.net/i?id=d6d2be181b007be560bd077e63058892-l&n=13">
                <img src="https://dtcar.ru/download/news/1/51.jpg">
            </div>
            <div id="content">
            
                <nav>
  <ul class="topmenu">
    <li><a href="mus.php">Mustang</a></li>
    <li><a href="gra.php">Granta</a></li>
    <li><a href="gramus.php" class="down">Gramus</a>
      <ul class="submenu">
        <li><a href="">Category</a></li>
      </ul>
    </li>
    <li><a href="autorization.php" class="down">Для авторизации</a>
      <ul class="submenu">
        <li><a href="registration.php">Регистрация</a></li>
      </ul>
    </li>
    <li><a href="">Contact</a></li>
  </ul>
</nav>
                
                <p class="txt">В данной базе данных содержится информация о Мустанге(<a href="https://autopremiumgroup.ru/katalog-avtomobilej/ford-mustang-2021-kupe/">Мустанги крутые</a>) и Гранте (<a href="https://vgg.agat.lada.ru/ds/cars/granta/sedan/prices.html">Гранты не крутые</a>).
            Имеется 3 таблицы:</p>
            
                <ul class="txt">
                    <li><b>Название</b> - производитель и модель.</li>
                    <li><b>Двигатель</b> - кодовое название, Л.С., тип двигателя и объём.</li>
                    <li><b>Коробка Переключения Передач</b> - кодовое название и вид коробки.</li>
                </ul>
            </div>
            <div id="footer">
                <form name="menu">
                    <select name="sel" onChange="linklist(document.menu.sel)">
                        <option value="#">Выберите желаемую машину</option>
                        <option title="Переход к mustang" value="mus.php">Мустанг</option>
                        <option title="Переход к granta" value="gra.php">Гранта</option>
                        <option title="Переход к mustgrantu" value="gramus.php">И то и то</option>
                        <option title="Переход к бд" value="autorization.php">Перейти к кабинету</option>
                        <option title="Переход к бд1" value="database1.php">Перейти к БД двигателей(простой текст)</option>
                        <option title="Переход к добавлению двигателя" value="testovaya.php">Перейти к добавлению двигателя</option>
                        <option title="Переход к добавлению коробки передач" value="transplus.php">Перейти к добавлению КПП</option>
                        <option title="Переход к добавлению новой машины" value="naviicar.php">Перейти к добавлению новой машины</option>
                    </select>
                </form>
            </div>
        </div>
    </body>
</html>