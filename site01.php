
<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8">
            <title>Title</title>
        </head>
        <body>

            <?php

            echo("Hello World");
            echo "<hr>";
            echo "<h1>Azlan Site</h1>";

            $characterName = "Bret";
            $characterAge = 35;
            echo "The once was a man named $characterName <br>";
            echo "He was $characterAge years old <br>";
            $characterName = "John";
            $characterAge = 27;
            echo "He really like the name $characterName <br>";
            echo "But did not like being $characterAge<br>";

            $phrase = "To Be Or Not To Be";
            $age = 37;
            $gpa = 3.4;
            // php does not require to define type
            $isMale = true;
            echo "<br>";
            echo "Hello";
            echo "<br>";
            echo 4.57;
            echo "<br>";

            $phrase = "Ninth Language";
            echo $phrase;
            echo "<br>";
            echo strtolower($phrase);
            echo "<br>";
            echo strtoupper($phrase);
            echo "<br>";
            echo strlen($phrase);
            echo "<br>";

            echo "<br>";
            echo $phrase[2];
            echo "<br>";
            $phrase[0] = "G";
            echo $phrase;
            echo "<br>";

            echo str_replace ("Ginth", "Eleventh", $phrase);
            echo "<br>";
            echo $phrase;
            echo "<br>";
            echo 5+9;
            echo "<br>";
            echo 10%3;
            echo "<br>";

            $num =10;
            echo $num;
            echo "<br>";
            $num++;
            echo $num;
            echo "<br>";

            $num = 10;
            // $num = $num + 25;
            $num += 25;
            echo abs(-100); echo "<br>";
            echo pow(2,4); echo "<br>";
            echo sqrt(144); echo "<br>";
            echo max (4,6,1,8); echo "<br>";
            echo round (3.53345,3); echo "<br>";
            echo ceil(3.3); echo "<br>";
            echo floor(3.3); echo "<br>";
            ?>

            <br>
            <form action="site01.php" method="get">
                Name: <input type="text" name="name">
                <input type="submit">
            </form>

            <br>
            <form action="site01.php" method="get">
                <input type="number" name="num1">
                <br>
                <input type="number" name="num2">
                <input type="submit">
            </form>
            Answer:  <?php echo $_GET["num1"] + $_GET["num2"] ?>
        <br>

        Your name is
        <?php echo $_GET["name"]  ?>
        <br><br>

            <form action="site02.php" method="get">
                Color: <input type="text" name="color"> <br>
                Plural Noun: <input type="text" name="pluralNoun"> <br>
                Celebrity: <input type="text" name="celebrity"> <br>
                <input type="submit">
            </form>
            <br> <br>
            <?php
            $color = $_GET["color"];
            $pluralNoun = $_GET["pluralNoun"];
            $celebrity = $_GET["celebrity"];
            echo "Roses are $color<br>";
            echo "$pluralNoun noun are blue  <br>";
            echo "I love $celebrity <br>";
            ?>
            <br><br>

            <form action="site02.php" method="post">
                Password: <input type="password" name="password"><br>
                <input type="submit">
            </form>
            <br><br>
            <?php
            echo $_POST["password"]
            ?>

            <br><br>
            <?php
            $friends = array("kevin", "karen", "oscar", "jim");
            $friends[1] = "Angela";
            $friends[4] = "Dwight";
            echo $friends[1];
            echo count($friends);
            ?>

            <form action="site02.php" method="post">

                Apples: <input type="checkbox" name="fruits[]" value="apples" <br>
                Mango: <input type="checkbox" name="fruits[]" value="mango" <br>
                Orange: <input type="checkbox" name="fruits[]" value="orange" <br>
                Cherry: <input type="checkbox" name="fruits[]" value="cherry" <br>
                <input type="submit">
            </form>

            <?php
            $fruits = $_POST["fruits"];
            echo $fruits[0];
            ?>

            <form action="site02.php" method="post">
                <input type="text" name="student">
                <input type="submit">
            </form>

            <?php
            $grades = array("Jim"=>"A+", "Pam"=>"B-", "Oscar"=>"C-" );
            $grades["Jim"] ="F";
            echo $grades["Jim"];
            echo $grades[$_POST["student"]];
            echo count ($grades);
            ?>

            <?php
            function sayHi($name, $age){
                echo "Hello $name, you are $age <br>";

            }
            sayHi("Tom",40);
            sayHi("Mike",25);
            sayHi("Sally",35);
            ?>

            <br><br>
            <?php
                function cube($num) {
                    return $num * $num * $num;
                };

                    $cubeResult = cube(4);
                    echo $cubeResult;
            ?>

            <br><br>
            <?php
                $isMale = true;
                $isTall = false;
                if ($isMale && $isTall) {
                    echo "You are al tal male";
                } elseif ($isMale && !$isTall) {
                    echo "You are a short male";
                } elseif ($isMale && $isTall) {
                    echo "You are not male but are tall";
                } else{ 
                    echo "You are not male and not tall";
                }
            ?>

            <br><br>
            <?php
            function getMax($num3, $num4, $num5) {
                if($num3 != $num4 && $num3 >= $num5) {
                    return $num3;
                } elseif ($num4 >= $num3 && $num4 >= $num5) {
                    return $num4;
                } else {
                    return $num5;
                    } // has elseif too and operand == != < <= > >=
                }
                echo getMax (300, 600, 90);
            ?>


        </body>
</html>

