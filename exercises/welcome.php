<html>
<body>
    <form action="week5_day2.php" method="post">    
    Greetings <?php echo $_POST["first"]; echo (" "); echo $_POST["last"]; ?><br>
    Your age is: <?php echo $_POST["age"]; ?>
    <input type="submit" value="confirm">
</body>
</html>