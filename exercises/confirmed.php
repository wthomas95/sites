<html>
<body>
    <h1>Confirmed<h1>
    Greetings <?php echo $_POST["first"]; echo (" "); echo $_POST["last"]; ?><br>
    Your age is: <?php echo $_POST["age"]; ?><br>
    Your Karmic Balance is <?php
    if ($_POST["karma"] == "hero")
    {
        echo("heroic");
    }
    else if ($_POST["karma"] == "neutral")
    {
        echo("neutral");
    }
    else if ($_POST["karma"] == "villain")
    {
        echo("villainous");
    }
    ?>
</body>
</html>