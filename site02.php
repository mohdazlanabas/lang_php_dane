
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<title>Title</title>
</head>

<body>


<form action="site02.php" method="post">

    First Num: <input type ="number" step="0.1" name ="num1"> <br>
    OP: <input tytpe="text" type ="text" name ="op"> <br>
    Second Num: <input type ="number" step="0.1" name ="num2"> <br>
    <input type="submit">

</form>

<?php

    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $op = $_POST["op"];

    if($op == "+") {
        echo $num1 + $num2;
    } elseif($op == "-") {
        echo $num1 - $num2;
    } elseif($op == "/") {
        echo $num1 / $num2;
    } elseif($op == "*") {
        echo $num1 * $num2;
    } else {
        echo "Invalid Operator";
    }

?>

<form action="site02.php" method="post">
    What was yoru grade ? 
    <input type="text" name="grade">
    <input type="submit">
</form>

<br><br>
<?php
    $grade = $_POST["grade"];
    switch($grade) {
        case "A":
            echo "You did amazing";
            break;
        case "B":
            echo "You did pretty good";
            break;
        case "C":
            echo "You did poorly";
            break;
        case "D":
            echo "You did very bad";
            break;
        case "F":
            echo "You failed";
            break;
        default:
            echo "Invalid Grade";
        }
?>

<!-- WHILE LOOP-->
<?php
    $index = 2;
    while($index <= 5) {
        echo "$index <br>";
        $index++;
    }
?>

<!-- DO WHILE LOOP-->
<?php
    $index = 6;
    do {
        echo "$index <br>";
        $index++;
    } while($index <= 5);
?>

<!-- FOR LOOP-->
<?php
   $luckyNumbers = array(4,6,8,10,12,14,16,18,20);
   for ($i = 0; $i <= count($luckyNumbers); $i++) {
    echo "$luckyNumbers[$i] <br>";
   }
?>

<?php include "header.html" ?>
<p>Hello World</p>
<?php include "footer.html" ?>

<?php
$title = "My First Post";
$author = "Azlan";
$wordCount = 400;
include "article.php"
?>

</body>
</html>
