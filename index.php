<!doctype html>
<html lang="ru">
    <head>
         <meta charset="UTF-8">
         <meta name="viewport"
             content="width=device-width, user-scalable=no, initial-scale=1.0,
            maximum-scale=1.0, minimum-scale=1.0">
         <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title>PHP</title>
    </head>
<body>
    <h3>задание 1</h3>
    <?php
        echo '<b>Hello</b> World!';
         echo "<br>Hello";
         echo '\'';
    ?>
    <h3>задание 2</h3>
    <?php
         define(MY_AGE, 24);
         echo MY_AGE . '<br>';
         $number = 5; // int
         // $number = 45;
         $num = -0.55; // float
         $str = "Переменная"; // string
         $bool = false; // boolean
         $a = 0.5;
         $b = "0.5";
         echo $a + floatval($b).'<br>';
         echo $str . ': ' . $number . '. Var 2: ' . $num;
    ?>
    <?php
        $name = 'Павел';
        $surname = 'Иванов';
        $date = 1;
        $month = 11;
        $year = 1999;
        $age = 22;
        $happy = 0.76;
        echo "Имя: $name, фамилия: $surname" . '<br>';
        echo "Дата рождения: $date.$month.$year". '<br>';
        echo "Возраст: $age". '<br>';
        echo "Уровень счастья: $happy";
    ?>
    <?php
        $hasCar = false;
        $number = -0.78902;
        // Вывод в консоль
        echo "Есть машина? $hasCar". '<br>';
        echo "Число: $number";
    ?>
    <?php
        define("NUMBER_E", 2.71828);
        echo NUMBER_E;
    ?>
    <?php
        echo defined("NUMBER_E");
    ?>
    <?php
        $x = 10;
         $y = 20;
         echo $x + $y.'<br>';
        echo $x - $y.'<br>';
        echo $x * $y.'<br>';
        echo $x / $y.'<br>';
        echo $x % $y.'<br>';
        $x += 10; // $x = $x + 10;
        $y -= 10; // $y = $y - 10;
        echo $x.'<br>';
        echo $y.'<br>';
        $x++; // $x += 1;
        $x--; // $x -= 1;
        echo M_PI.'<br>';
        echo M_E.'<br>';
        echo abs(-22).'<br>';
        echo round(3.5556734, 2).'<br>';
        $rand = mt_rand(1, 20);
        $rand++;
        echo $rand.'<br>';
        echo max(2, 5, 6, 1, 8, 3, 6).'<br>';

    ?>
    <?php
        $first = 5.6;
        $second = 8.9;
        $summ = $first + $second;
        $diff = $first - $second;
        $mult = $first * $second;
        $divide = $first / $second;
        $ostatok = $first % $second;
        echo "Сумма: $summ".'<br>';
        echo "Разница: $diff".'<br>';
        echo "Умножение: $mult".'<br>';
        echo "Деление: $divide".'<br>';
        echo "Остаток: $ostatok".'<br>';
    ?>
    <?php
        $a = -2;
        $a *= 3;
        $a++;
        echo "Результат: $a";
    ?>
    <?php
         echo "Максимум : " . max(9, 23, 0, -24.5, 34, 11, 41, 3, -3.2, 3);
    ?>
    <?php
         echo floor(sqrt(2));
    ?>
    <?php
        $str = "Hello";
        echo "VAR: $str" . '!'.'<br>';
        echo "<input type=\"text\"><br>";

        $length = strlen($str);
        echo strtoupper(trim(" some ").'<br>');
        echo $length.'<br>';
        echo md5("qwerty");


    ?>
    <?php
         echo "\"".'<br>';
        echo " ' ".'<br>';
        echo "\\".'<br>';
        echo "\n".'<br>';
        echo "<div>Просто блок</div>".'<br>';
        echo "\"" . " ' " . "\\" . "\n" . "<div>Просто блок</div>";
    ?>
    <?php
         $string = "ASDПросто текстASD";
        // Первое задание
        $newStr = substr($string, 0, strlen($string) - 3).'<br>'; // Обрезаем все символы, кроме 3
        //последних
        echo "Обрезанная строка - $newStr".'<br>';
        // Второе задание
        $lowerCase = substr($newStr, 0, 3);
        // Обрезанную часть в нижний регистр + добавляем прежнюю строку, но без первых трех
        //элементов
        $result = strtolower($lowerCase);
        $result .= substr($newStr, 3, strlen($newStr));
        echo "Нижний регистр - $result".'<br>';
        // Третье задание
        echo "Первые три символа - " . substr($result, 0, 3).'<br>';
    ?>
    <?php
         $a = 2;
        $b = 10;
        if ($a == $b) { // Если $a будет равным $b, тогда будет выполнен код
            // Здесь код который будет выполнен
            // Если все одна строка кода, то фигурные скобки {}
            // можно не ставить
        echo "$a == $b";
        } else if ($a <= $b) { // Если $а будет меньшим или равным $b
        // Если предыдущее условие не будет выполнено,
        // а здесь условие окажется верным,
        // то будет выполнен этот код
        echo "$a <= $b";
        } else {
        // Этот код сработает, если другие условия не будут выполнены
        echo "$a > $b";
}
    ?>
    <?php
         $a = 5;
         $str = "Hello";
        $isWeatherGood = false;
        if($str == "Hello" && !$isWeatherGood)
            echo 'First';
        else if($a == 5) {
            $res = "Second";
            echo $res;
        if($str == "Hello") {
            echo "<br>Yes";
            }
        }
        else if($a > 50)
            echo '$a > 50';
        else if($a <= 45)
            echo '$a <= 45';
        else
            echo 'Else';
    ?>
    <?php
         $a = 23;
        if ($a == 5)
            echo "10";
        else if ($a == 10)
            echo "15";
        else if ($a == 30)
            echo "20";
        else
            echo "Что-то не то!";
    ?>
    <?php
    //это задания сделал на скрине
        $x = 4.2;
        $y = 5.6;
        echo $x == 15;
        echo $y >= 6;
        echo $x == $y;
    ?>
    <?php
        $a = 34;
        echo ($a < 50 && $a != 37 && $a >= 32) || ($a == 0 || $a == 15);
    ?>
    <?php
        $x = 7;
        $y = "7";
        $res = $x === $y;
        echo "$x === $y = $res";

    ?>
    <?php
         $a = 2;
        $b = 5;
        if ($a % 2 == 0)
            echo $b.' - нечетное число';
        else
            echo $a.' - нечетное число';
    ?>
    <?php
         $a = 5;
        $b = -3;
        $res = $b != 0 ? ($a / $b) : 1;
        echo "Результат: $res";

    ?>
</body>
</html>
