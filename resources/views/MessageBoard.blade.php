<!DOCTYPE html>
<html>
<body>

<h1 style=color:blue> MessageBoard</h1>

<form action="action_page.php">
  First name:<br>
  <input type="text" name="firstname" value="Mickey">
  <br>
  Last name:<br>
  <input type="text" name="lastname" value="Mouse">
  <br>
<!--  Choice Gender-->

  <input type="radio" name="gender" value="male" checked> Male<br>
  <input type="radio" name="gender" value="female"> Female<br>
  <input type="radio" name="gender" value="other"> Other
  <br>
  <input type="submit" value="Submit">
</form>

<p></p>
<form action="action_page.php">
  <textarea name="message" rows="10" cols="100">Unfinish.</textarea>
  <br>
  <button type="button" onclick="alert('Unfinish!')">up!</button>

</form>

</body>
</html>
