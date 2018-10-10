<html>
<body>
    <form action="week5_day3.php" method="post">
    <?php require 'header.php'?>
    <h1>Information<h1>
        First name: <br>
        <input type="text" name="first" value=""><br>
        <?php
            if(isset($_POST["first"])) 
            {
                $first = $_POST["first"];
                if ( !preg_match ("/^[a-zA-Z\s]+$/",$first)) {
                    $L_errors = '<font color="red">Name must only contain letters!</font>';
                    echo $L_errors;
                }
                else
                {
                    echo "Welcome $first $last"
                }
            }
        ?>
        <br>
        Last name : <br>
        <input type="text" name="last" value=""><br>
        <?php
            if(isset($_POST["last"])) 
            {
                $last = $_POST["last"];
                if ( !preg_match ("/^[a-zA-Z\s]+$/",$last)) 
                {
                    $L_errors = '<font color="red">Name must only contain letters!</font>';
                    echo $L_errors;
                }
            }
        ?>
        <br>
        Age: <br>
        <input type ="text" name="age" value=""><br>
        <?php    
            if(isset($_POST["age"])) 
            {
                $age = $_POST["age"];
                if ( !preg_match ("/([+-]?[0-9]+(?:\.[0-9]*)?)/m",$age)) {
                    $N_errors = '<font color="red">Age must only contain numbers!</font>';
                    echo $N_errors;
                }
            }
        ?>
        <br>
        <input type="radio" name="karma" value="villain">villain
        <input type="radio" name="karma" value="neutral">neutral
        <input type="radio" name="karma" value="hero">hero
        <br>
        <br>
      <input type="submit" value="Confirm">
      <br>
      <br>
      <?php include 'datetime.php'?>
    </form>
</body>
</html>