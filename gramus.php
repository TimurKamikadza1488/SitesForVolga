<html>
    <head>
    <style>
            #zago{ text-align: center; }
            .txt{color:aliceblue; font-size: 30px;}
            img{object-fit: cover; height: 600px; width: 925px;}
        </style>
    </head>
    <body bgcolor="mistyrose">
    <div id="zago"><font color="rosybrown" face="Arial"><h1> Буриданов выбор </h1></font></div>
    <img src="https://avatars.mds.yandex.net/get-autoru-vos/2156482/6e0267c791245eb4bc33f663d5f95f60/1200x900n">
    <img src="https://a.d-cd.net/fb02145s-1920.jpg">
    <form method="POST" action=''>
    первое число<input TYPE="text" name="a" value="10" /><br>
    второе число<input TYPE="text" name="b" value="20" /><br><br>
    <input TYPE="radio" name="operation" checked value='+'/>сложение
    <input TYPE="radio" name="operation" value='-'/>разность
    <input TYPE="radio" name="operation" value='*'/>произведение
    <input TYPE="radio" name="operation" value='/'/>деление<br><br>  
    <input type='submit' name='vichislit' value='Вычислить'> 
    <input type="reset" name='ochistit' value='Отменить'>  
    </form> 
    <?php
    $a = $_POST['a'];
    $b = $_POST['b'];
    $radio=$_POST['operation'];
    if ($_POST['vichislit'])
    {
    if ($radio=='+'){$c = $a + $b; echo "сумма=" . $c.'<br>';}
    elseif ($radio=='-'){$d = $a - $b; echo "разность=" . $d.'<br>';}
    elseif ($radio=='*'){$e = $a *$b;  echo  "произведение=" . $e.'<br>';}
    elseif ($radio=='/'){$f = $a / $b; echo "деление=" . $f;}
    else echo "ошибка";
    }
    ?>  
    </body>
</html>