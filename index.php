<?php
session_start();
?>
<!doctype html>
<head>
  <title>Password Generator</title>
  <link rel="stylesheet" type="text/css" href="style/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="style/css/main.css">
</head>

<div class="container">


      <h1>Password Generator</h1>
     
      <form method="post" action="./pass.php">
<div class="checkbox">
  <label><input type="checkbox" checked="checked"name="alpha">Lowercase a-z</label>
</div>
<div class="checkbox">
  <label><input type="checkbox" checked="checked" name="alpha_upper" >Uppercase A-Z</label>
</div>
<div class="checkbox ">
  <label><input type="checkbox" checked="checked" name="numeric" >Numbers (0-9)</label>
</div>
<div class="checkbox ">
  <label><input type="checkbox" checked="checked" name="special" >Special Characters (.-+=_,!@$#*%<>[]{})</label>
</div>


<div class="pass-input">Password Length</div>


 <input type="text" class="col-xs-2" name="length"  size="2" maxlength="2"><br><br><br>


<div>
<input type="submit" class="btn btn-danger" value="Generate">
</div>
<div>Your Password:</div>

 <div class="result">
      <?php
      echo $_SESSION['password'];
      ?>
</div>
</div>
</div>

<?php
session_destroy();
?>
        
    </form>

</body>
</html>