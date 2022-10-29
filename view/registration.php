<!DOCTYPE html>
<html lang="en">
<head>
  <?php require_once $_SERVER['DOCUMENT_ROOT'] . './PHPMotors/snippets/heading.php'?>    
  <title>Register</title>
  <link rel="stylesheet" href="/PHPMotors/css/form.css">
</head>
<body>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/PHPMotors/snippets/navigation.php'?>

  <h2 id="login">Create Account</h2>
  <form>
    <div class="form_element">
      <input type="text" id="firstname" name="firstname" required>
      <label for="firstname">First Name:</label>
    </div>
    <div class="form_element">
      <input type="text" id="lastname" name="lastname" required>
      <label for="lastname">Last Name:</label>
    </div>
    <div class="form_element">
      <input type="text" id="email" name="email" required>
      <label for="email">Email</label>
    </div>
    <div class="form_element">
      <input type="password" id="password" name="password" required>
      <label for="password">Password</label>
    </div>
    
    <div id="form_submit">
        <input type="submit" name="submit" id="regbtn" value="Register">
        <input type="hidden" name="action" value="register">
      </div>
  </form>
  <h3 id="create">Already have an account? <a href="login.php" id="newacc">Login</a></h3>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/PHPMotors/snippets/footer.php'?>
</body>
</html>