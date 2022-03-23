<?php
session_start();
if (!$_SESSION['user']) {
  header('location:login.php');
}

if (isset($_POST['login'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  // $errorEmpty = false;
  // $errorPassword = false;

  if ($username == 'admin' && $password == 'pw123') {
    $_SESSION['user'] = $username;
    header('location: index.php');
    // $errorEmpty = false;
  }
  // elseif ($username != 'admin' || $password != 'pw123') {
  //   echo "<span class='form-error'>Username or Password Not Correct!</span>";
  //   $errorEmpty = true;
  // } else {
  //   echo "<span class='form-error'>Fill in all field!</span>";
  //   $errorEmpty = true;
  // }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Web Search Bar</title>
  <link rel="stylesheet" href="assets/css/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>

  <div class="wrapper">
    <div class="logout">
      <a href="logout.php" style="text-decoration: none; color:white">Log Out</a>
    </div>

    <div class="search-input">
      <a href="" target="_blank" hidden></a>
      <input type="text" placeholder="Type to search..">
      <div class="autocom-box">
      </div>
      <div class="icon"><i class="fas fa-search"></i></div>
    </div>
  </div>

  <script src="assets/js/suggestions.js"></script>
  <script src="assets/js/script.js"></script>

</body>

</html>