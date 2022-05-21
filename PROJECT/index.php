<?php
session_start();
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
  header("location: poll.php");
  exit;
}
?>
<html>

<head>
  <title>Login Form Design</title>
  <link rel="stylesheet" type="text/css" href="login.css" />

<body>
  <div class="loginbox">
    <img src="logo.png" class="avatar" />
    <h1>Login Here</h1>
    <form action="" method="POST" id="auth_form">
      <p>Username</p>
      <input type="text" name="username" placeholder=" Enter Username" required />
      <p>Password</p>
      <input type="password" name="password" placeholder="Enter Password" required />
      <button type="submit" class="login">Login</button>
      <br /><br />
      <span class="auth-error" style="text-align:center;color:red;"></span>
    </form>
  </div>
  <!-- Jquery JS-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#auth_form').on('submit', function(e) {
        $('.auth-error').html('');
        e.preventDefault();
        $.ajax({
          url: 'auth.php',
          type: "POST",
          data: $('#auth_form').serialize(),
          success: function(res) {
            var data = JSON.parse(res);
            console.log(data);
            if (data.message === "")
              window.location = "poll.php";
            else
              $('.auth-error').html(data.message);
          }
        });
      });
    });
  </script>
</body>
</head>

</html>