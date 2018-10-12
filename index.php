<?php
setcookie("test_cookie", "test", time() + 3600, '/');
$first_name = "First";
$first_value = "John";
setcookie($first_name, $first_value, time() + (86400 * 30), "/"); // 86400 = 1 day
$last_name = "Last";
$last_value = "Doe";
setcookie($last_name, $last_value, time() + (86400 * 30), "/"); // 86400 = 1 day
$age_name = "Age";
$age_value = "30";
setcookie($age_name, $age_value, time() + (86400 * 30), "/"); // 86400 = 1 day
$karma_name = "Karma";
$karma_value = "neutral";
setcookie($karma_name, $karma_value, time() +(86400*30), "/");
?>

<?php include './exercises/header.php'?>
<body>
    <form action="index.php" method="post">

    <h1>Information<h1>
        <?php
        $valid = [0, 0, 0];
        if($valid[0] == 1 && $valid[1] == 1 && $valid[2] == 1){
            header("Location: ./exercises/week5_day1.php");
        }
        ?>
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
                else{
                    setcookie($first_name, $first, time() + (86400 * 30), "/"); // 86400 = 1 day
                    $valid[0] = 1;
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
                else{
                    setcookie($last_name, $last, time() + (86400 * 30), "/"); // 86400 = 1 day
                    $valid[1] = 1;
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
                else{
                    setcookie($age_name, $age, time() + (86400 * 30), "/"); // 86400 = 1 day
                    $valid[2] = 1;
                }
            }
            if($valid[0] == 1 && $valid[1] == 1 && $valid[2] == 1){
                header("Location: week5_day1.php");
            }
            
        ?>
        <br>
        Karmic Balance:<br>
        <input type="radio" name="karma" value="villainous">villain<br>
        <input type="radio" name="karma" value="neutral">neutral<br>
        <input type="radio" name="karma" value="heroic">hero<br>
        <?php
            if(isset($_POST["karma"])){
                $karma = $_POST["karma"];
                if($_POST['list'] == -1){
                echo 'Please select one on the List';
                }
                else {
                    setcookie($karma_name, $karma, time() + (86400 * 30), "/"); // 86400 = 1 day
                }
            }
        ?>
        <br>
        <br>
      <input type="submit" value="Confirm">
      <br>
      <br>
      <?php include './exercises/datetime.php'?>
    </form>
</body>
</html>