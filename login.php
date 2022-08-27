<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="center">
      <h1>Register</h1>
      <form name="myform" action="register.php" method="post">
        <div class="txt_field">
          <input type="text" name="usrname" required>
          <span></span>
          <label>Username</label>
        </div>
        <div class="txt_field">
            <input type="text" name="email" required>
            <span></span>
            <label>Email-id</label>
          </div>
        <div class="txt_field">
          <input type="password" name="pswd1" required>
          <span></span>
          <label>Create Password</label>
        </div>
        <div class="txt_field">
            <input type="password" name="pswd2" required>
            <label>Re-type Password</label>
            <span></span>
          </div>
        <input type="submit" value="Login">
        <div class="signup_link">
          Already a member? <a href="index.php">Signin</a>
        </div>
      </form>
    </div>

  </body>
</html>