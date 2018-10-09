<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practice Page 2</title>
</head>
<body>
    <h1>PHP Exercises 2: Electric Boogaloo</h1>
    <h2>Constants, Operators, Conditionals</h2>
    <?php
        $newline = "<br>";
        define("Stefansson", "Number 1");
        echo("Stefan Karl Stefansson");
        echo $newline;
        echo(Stefansson);


        
        $num1 = 10;
        $num2 = 5;
        $res = 15;
        echo("<h2>Operators</h2>");
        echo $newline;
        echo("<strong>showing operators with the numbers '10' and '5'</strong>");
        echo $newline;
        echo("<strong>+ adds two numbers, 10 + 5 = </strong>");
        $res = $num1 + $num2;
        echo $res;
        echo $newline;
        echo("<strong>- subtracts two numbers, 10 - 5 = </strong>");
        $res = $num1 - $num2;
        echo $res;
        echo $newline;
        echo("<strong>* multiplies two numbers, 10 * 5 = </strong>");
        $res = $num1 * $num2;
        echo $res;
        echo $newline;
        echo("<strong>/ divides two numbers, 10 / 5 = </strong>");
        $res = $num1 / $num2;
        echo $res;
        echo $newline;
        $num2 = 2;
        $res = $num1 % $num2;
        echo("<strong>% shows the remainder when two numbers are divided. It is good for determining if a number is even or odd. For example 10 % 2 = ${res}, so 10 is even, but 11 % 2 = 1, so 11 is odd </strong>");
        echo $newline;
        echo $newline;
        echo("<h2>Conditionals</h2>");
        echo("<strong>If, Else, and Switch are used so that the machine can perform different actions in different circumstances.</strong>");
        if ($num1 > $num2)
        {
            echo("${num1} is greater than ${num2}");
        }
        else if ($num1 < $num2)
        {
            echo("${num1} is less than ${num2}");
        } else {

        }
        switch ($num1)
        {
            case ($num1 > $num2):
                echo("${num1} is greater than ${num2}");
                echo $newline;
                break;
            case ($num1 < $num2):
                echo("${num1} is less than ${num2}");
                break;
            case ($num1 == $num2):
                echo("${num1} is equal to ${num2}");
                break;
            default:
                echo("Not a number m8");
                break;
        }
        echo $newline;
        echo("<h2>Loops</h2>");
        echo("<strong>While, For, and For each can be used to loop through data/instructions until conditions are met</strong>");
        echo $newline;
        $loops= 0;
        while ($loops < 10)
        {
            echo("Only ${loops} loops? Moar loops pls bröther");
            echo $newline;
            $loops++;
        }
        echo("${loops} loops is plenty bröther");
        echo $newline;
        for ($i = 0; $i < 10; $i++)
        {
            echo("Only ${i} loops? Moar loops pls bröther");
            echo $newline;
        }
        echo("${loops} loops is plenty bröther");
        echo $newline;
        foreach (array("froot loops", "loop holes", "code loops") as &$value) {
            echo $value;
            echo $newline;
        }
        echo("<h2>Functions</h2>");
        echo("<strong>Functions follow algorithms to complete a task Here's a function that will tell us if 5 numbers are even or odd</strong>");
        echo $newline;
        function EvenOrOdd($num){
            $ans = $num % 2;
            $num = $num;
            if ($ans == 1)
            {
                echo("${num} is odd<br>");
            }
            else if ($ans == 0)
            {
                echo("${num} is even<br>");
            }
        }
        EvenOrOdd(5);
        EvenOrOdd(18);
        EvenOrOdd(21);
        EvenOrOdd(100);
        echo("<h2>Arrays</h2>");
        echo("<strong>Some array functions. These will reference this array [Stark, Targaryan, Lannister, Baratheon]</strong>");
        echo $newline;
        $houses = array("Stark", "Targaryan", "Lannister", "Baratheon");
        echo("<strong>index</strong>");
        echo $newline;
        echo("Some of the biggest houses in Westeros are ".$houses[0].", ".$houses[2].", and ".$houses[3]);
        echo $newline;
        echo("<strong>count</strong>");
        echo $newline;
        echo("there are".count($houses)."important houses in the Game Of Thrones show.");
        echo $newline;
        echo("<strong>Associated Arrays</strong>");
        $houseLeader = array("Stark"=>"Ned", "Targaryan"=>"Dany", "Lannister"=>"Tywin", "Baratheon"=>"Robert");
        echo $newline;
        foreach($houseLeader as $house => $leader) 
        {
            echo($leader . " is in charge of the " . $house . "s");
            echo $newline;
        }
        echo("<strong>Sort functions</strong>");
        echo $newline;
        echo("<strong>Sort: sorts in decending order</strong>");
        echo $newline;
        sort($houseLeader);
        foreach ($houseLeader as $house => $leader) {
            echo "$leader leads $house \n";
        }
        echo $newline;
        echo("<strong>rsort: reverses sort</strong>");
        echo $newline;
        rsort($houseLeader);
        foreach ($houseLeader as $house => $leader) {
            echo "$leader leads $house \n";
        }
        echo $newline;
        echo("<strong>asort: sorts by association</strong>");
        echo $newline;
        asort($houseLeader);
        foreach ($houseLeader as $house => $leader) {
            echo "$leader leads $house \n";
        }
        echo $newline;
        echo("<strong>ksort: sorts by key</strong>");
        echo $newline;
        ksort($houseLeader);
        foreach ($houseLeader as $house => $leader) {
            echo "$leader leads $house \n";
        }
        echo $newline;
        echo("<strong>arsort: sorts by association in reverse</strong>");
        echo $newline;
        arsort($houseLeader);
        foreach ($houseLeader as $house => $leader) {
            echo "$leader leads $house \n";
        }
        echo $newline;
        echo("<strong>krsort: sorts by key in reverse</strong>");
        echo $newline;
        krsort($houseLeader);
        foreach ($houseLeader as $house => $leader) {
            echo "$leader leads $house \n";
        }
        echo $newline;
    ?>
</body>
</html>