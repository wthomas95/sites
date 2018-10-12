<?php include 'header.php'?>
  <body>
    <form action="week5_day2.php" method="post">
      <h1>PHP Exercises</h1>
      <h2>Scope Changes and the Global Keyword</h2>
      <?php
        $var1 = "hello"; // var1 in global scope
        $newline = "<br>";
        function increment()
        {
          static $var1 = 1; //var1 in the scope of the increment function
          echo $var1;
          $var1++;
        }
        increment();
        echo $newline;
        increment();
        echo $newline;
        increment();
        echo $newline;
        echo $newline;
        echo $var1;//should display hello because var1 is only an integer in the increment function
        echo $newline;
        echo $newline;
        echo ("<strong>The above is showing variable scope. the same variable is used for the numbers and for hello, but hello is global, so unless in the increment function that uses numbers, the variable whill show hello</strong>");
        echo $newline;
        echo $newline;
        $float = 3.14159;
        $list = array(1, 2, 3, 4, 5);
        class Car{
          public $make = 'toyota';
          public $model = 'camry';
          public $year = 2009;
        }
        $class = new Car;
        echo ("<strong>This is demonstrating a float variable</strong>");
        echo $newline;
        echo $newline;
        echo $float;
        echo $newline;
        echo $newline;
        $bool = false;
        function T_F()
        {
          $ans = "hi";
          global $bool;
          if ($bool == true){
            $ans = "this statement is true";
          }
          else {
            $ans = "this statement is false";
          }
          echo $ans;
        }
        echo ("<strong>This is demonstrating a boolean variable</strong>");
        echo $newline;
        T_F();
        echo $newline;
        echo "<pre>";
        echo ("<strong>This is demonstrating a PHP array</strong>");
        echo $newline;
        print_r ($list);
        echo "</pre>";
        echo $newline;
        echo ("<strong>This is demonstrating a PHP class</strong>");
        echo $newline;
        echo $newline;
        print_r ($class);
        echo $newline;
        echo $newline;
        echo $newline;
        echo $newline;
        echo $newline;
        echo ("<strong>This portion is demonstrating diffrent string functions in reference to the string 'this statement is false'</strong>");
        echo $newline;
        echo $newline;
        echo ("<strong>This shows the length of the string</strong>");
        echo $newline;
        echo strlen("this statement is false");
        echo $newline;
        echo $newline;
        echo ("<strong>This shows how many words are in the string</strong>");
        echo $newline;
        echo str_word_count("this statement is false");
        echo $newline;
        echo $newline;
        echo ("<strong>This reverses the string</strong>");
        echo $newline;
        echo strrev("this statement is false");
        echo $newline;
        echo $newline;
        echo ("<strong>This shows the position of the word 'false' in the string</strong>");
        echo $newline;
        echo strpos("this statement is false", "false");
        echo $newline;
        echo $newline;
        echo ("<strong>This replaces 'false' with 'true' in the string</strong>");
        echo $newline;
        echo str_replace("false", "true", "this statement is false");
        echo ("If this page of gibberish is proof enough for you, please click continue");
        ?>
        <input type="submit" value="continue">
        <?php include 'datetime.php'?>
  </body>