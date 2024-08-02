<?php
  include 'dbconnect.php';

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Synergy Realty - Register</title>

  <!-- CSS FILES -->
  <link href="login.css" rel="stylesheet">
  <!-- Load an icon library -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- JAVASCRIPT FILES 
  <script src="login.js"></script>-->

</head>

<body>

  <div class="containerlogin">
    <div class="heading">Register to Synergy Realty</div>
    <form class="form" action="registerdb.php" method="POST">
      <label>Full Name</label>
      <input placeholder="Full Name" id="fullname" name="fullname" type="text" class="input" required="" />
      <label>Nickname </label>
      <input placeholder="Nickname" id="nickname" name="nickname" type="text" class="input" required="" />
      <label>Identification Card</label>
      <input placeholder="IC" id="IC" name="IC" type="text" class="input" required="" />
      <label>House Address </label>
      <input placeholder="House Address" id="houseaddress" name="houseaddress" type="text" class="input" required="" />
      <label>Age </label>
      <input placeholder="Age" id="age" name="age" type="text" class="input" required="" />
      <label>Work Type</label>
      <input placeholder="Work Type" id="worktype" name="worktype" type="text" class="input" required="" />
      <label>Birthday</label>
      <input placeholder="Birthday" id="birthday" name="birthday" type="date" class="input" required="" />
      <label>Introducer</label>
      <input placeholder="Introducer" id="introducer" name="introducer" type="text" class="input" required="" />
      <div class="details">
      <label>Position </label>
      <select name="position">
        <option value="Junior Advisor">Junior Advisor</option>
        <option value="Senior Advisor">Senior Advisor</option>
      </select>
      <label>Email </label>
      <input placeholder="Email" id="email" name="email" type="email" class="input" required="" />
      <label>Password</label>
      <input placeholder="Password" id="password" name="password" type="password" class="input" required="" />
      <label>Phone Number </label>
      <input placeholder="Phone Number" id="phonenumber" name="phonenumber" type="text" class="input" required="" />
      <label>Bank Name</label>
      <input placeholder="Bank Name" id="bankname" name="bankname" type="text" class="input" required="" />
      <label>Bank Account Number </label>
      <input placeholder="Bank Account Number" id="bankaccountnumber" name="bankaccno" type="text" class="input" required="" />
      <label>Holder Bank Name</label>
      <input placeholder="Holder Bank" id="holderbank" name="holderbankname" type="text" class="input" required="" />
      <label>Heir Name </label>
      <input placeholder="Heir Name" id="heirname" name="heirname" type="text" class="input" required="" />
      <label>Heir Phone Number </label>
      <input placeholder="Heir Phone Number" id="heirphonenumber" name="heirnotel" type="text" class="input" required="" />
      <label>Heir Relationship </label>
      <input placeholder="Heir Relationship" id="heirrelationship" name="heirrelationship" type="text" class="input" required="" />
      </div>
      <button name="submitregister">REGISTER</button>
    </form>
    </div>

</body>
</html>