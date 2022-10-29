<!DOCTYPE html>
<html lang="en">
<head>
  <?php require_once $_SERVER['DOCUMENT_ROOT'] . './PHPMotors/snippets/heading.php'?>    
  <title>Login</title>
  <link rel="stylesheet" href="/PHPMotors/css/form.css">
</head>
<body>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/PHPMotors/snippets/navigation.php'?>

  <h2 id="login">Login</h2>
  <form>
    <div class="form_element">
      <input type="text" id="email" name="email" required>
      <label>Email</label>
    </div>
    <div class="form_element">
      <input type="password" name="password" required>
      <label>Password</label>
    </div>
    <div id="form_submit">
        <input type="submit" id="submit" value="Login">
    </div>
  </form>
  <h3 id="create">No account? <a href="/PHPMotors/accounts/index.php" id="newacc">Sign-up</a></h3>
  <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/PHPMotors/snippets/footer.php'?>
</body>
</html>
