<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<form action="week5_day2.php">
  First name:<br>
  <input type="text" name="first" value="Stefan">
  <br>
  Last name:<br>
  <input type="text" name="last" value="Stefansson">
  <br>
  <input type="radio" name="rank" value="number 1" checked> Number 1
  <br>
  <input type="radio" name="rank" value="needs lesson"> I need a little lesson in trickery
  <br>
  <input type="checkbox" name="orientation" value = "villain">I'm a villain
  <br>
  <input type="checkbox" name="orientation" value = "hero">I'm a hero
  <br><br>
  <input type="submit" value="Submit">
</form> 
<textarea name="about" form="you">tell us more about your heroic or villainous exploits</textarea>

<p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

</body>
</html>
