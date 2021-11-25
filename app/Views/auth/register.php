<!DOCTYPE html>
<html>

<head>
  <title>register</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width-device-width ,inital-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href="<?php echo base_url('css/register.css') ?>" rel="stylesheet">
  <script type="text/javascript" src="<?php echo base_url('js/jquery.min.js') ?>"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://use.fontawesome.com/22de2a47bc.js"></script>
</head>

<body>
  <form action="/action_page.php">
    <div class="container">
      <h1>Create a free account</h1>
      <hr>
      <i class="fa fa-envelope" aria-hidden="true"></i>
      <input type="text" placeholder="Enter Email" name="email" id="email" required><br><br>

      <i class="fa fa-lock" aria-hidden="true"></i>
      <input type="password" placeholder="Enter Password" name="psw" id="psw" required><br><br>

      <i class="fa fa-lock" aria-hidden="true"></i>
      <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required><br><br>
      <hr>
      <button type="submit" class="btn btn-info">Sign Up</button>
    </div>

    <div class="container signin">
      <p>Already have an account? <a href="#">Login in</a>.</p>
    </div>
  </form>
  <script type="text/javascript" src="<?php echo base_url('js/main.js') ?>"></script>
</body>

</html>