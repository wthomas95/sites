<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP website</title>
  </head>
  <body>
    <?php 
      require 'header.php';
      echo ("<h1>Thanks for looking at my quick php demonstrations, " . $_COOKIE["First"] . ". We saved your info with cookies for the day, and remember that you are  " . $_COOKIE["First"] . "  " . $_COOKIE["Last"] . ". A  " . $_COOKIE["Age"] . " year old " . $_COOKIE["Karma"] . ". Have a great day</h1>");
      include 'datetime.php';
      ?>
  </body>