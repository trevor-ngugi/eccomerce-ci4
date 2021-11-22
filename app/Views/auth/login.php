<!DOCTYPE html>
<html>
    <head>
        <title>login</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width-device-width ,inital-scale=1">
    </head>
    <body>
        <h1> this is the login page<h1>
        <form action="/action_page.php">
  <div class="container">
    <h1>login</h1>
    <hr>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

    
    <hr>
    <button type="submit" class="registerbtn">Register</button>
  </div>
  
  <div class="container signin">
    <p>do not have an account? <a href="#">register</a></p>
  </div>
</form>

        <a href="<?php echo site_url('auth/processLogin');?>">Process Login</a>
    </body>
</html>