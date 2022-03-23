<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="stylesheet" href="assets/css/styleLogin.css">
  <script type="text/javascript" src="assets/js/script.js"></script>
  <title>Web Search Bar</title>
</head>

<body>
  <section class="wrapper Form my-4 mx-5">
    <div class="container">
      <div class="row no-gutters">
        <div class="col-lg-5">
          <img src="assets/login2.jpg" class="img-fluid" alt="">
        </div>
        <div class="col-lg-7 px-5 pt-5">
          <h1 class="font-weight-bold py-3">Welcome Back</h1>
          <h4>Sign Into Your Account</h4>
          <p class="form-message"></p>
          <form action="index.php" method="POST">
            <div class="form-row">
              <div class="col-lg-7">
                <input type="text" name="username" id="username" placeholder="Input Your Username" class="form-control my-3 p-2" required>
              </div>
            </div>
            <div class="form-row">
              <div class="col-lg-7">
                <input type="password" name="password" id="password" placeholder="Input Your password" class="form-control my-3 p-2" required>
              </div>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="showPass">
              <label class="form-check-label" for="showPass">
                Show Password
              </label>
            </div>
            <div class="form-row">
              <div class="col-lg-7">
                <button type="submit" id="submit" name="login" class="btn1 mt-3 mb-5">Login</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <script>
    $(document).ready(function() {
      $('#showPass').click(function() {
        if ($(this).is(':checked')) {
          $('#password').attr('type', 'text');
        } else {
          $('#password').attr('type', 'password');
        }
      })
    });
  </script>

</body>

</html>