<?php
  include 'dbconnect.php';

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Synergy Realty - Login</title>

  <!-- CSS FILES -->
  <link href="login.css" rel="stylesheet">
  <!-- Load an icon library -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- JAVASCRIPT FILES -->
  <script src="login.js"></script>

    <!-- -->
    <script type="text/javascript">
    function preventBack(){
      window.history.forward()
    };
    setTimeout("preventBack()",0);
    window.onunload=function(){null;}
  </script>

</head>

<body>

  <div class="containerlogin">
    <img src="companylogo.png" alt="Logo" style="width:100%">
    <div class="heading">Sign In to Synergy Realty</div>
    <form class="form" action="logindb.php" method="POST">
      <label>Email</label>
      <input placeholder="Email" id="email" name="emaillogin" type="email" class="input" required="" />
      <label>Password </label>
      <input placeholder="Password" id="password" name="passwordlogin" type="password" class="input" required="" />
      <div class="flex-row">
        <span class="span">Forgot password ?</span>
      </div>
      <button  name="submitlogin">SIGN IN</button>
    </form>
    </div>

</body>
</html>
