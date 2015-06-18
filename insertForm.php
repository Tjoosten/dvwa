<!DOCTYPE html>
<html lang="nl">
  <head>
    <title> DVWA - Insert Form </title>
  </head>
  <body>
    <h1> DVWA - <i>(XSS via Request)</i> </h1>
    
    <form method="POST" action="/insertDB.php">
      <input type="text" name="firstname" placeholder="firstname" />
      <input type="text" name="lastname"  placeholder="lastname" />
    
      <input type="submit" value="Insert" />
      <input type="reset"  value="Reset">
    </form>
  </body>
</html>
