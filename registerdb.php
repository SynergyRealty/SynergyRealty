<?php

include 'dbconnect.php';

if(isset($_POST["submitregister"])){

$fullname = $_POST["fullname"];
$nickname = $_POST["nickname"];
$ic = $_POST["IC"];
$houseaddress = $_POST["houseaddress"];
$worktype = $_POST["worktype"];
$age = $_POST["age"];
$birthday = $_POST["birthday"];
$email = $_POST["email"];
$introducer = $_POST["introducer"];
$position = $_POST["position"];
$password = $_POST["password"];
//$hashpassword = md5($password);
$phonenumber = $_POST["phonenumber"];
$bankname = $_POST["bankname"];
$bankaccno = $_POST["bankaccno"];
$holderbankname = $_POST["holderbankname"];
$heirname = $_POST["heirname"];
$heirnotel = $_POST["heirnotel"];
$heirrelationship = $_POST["heirrelationship"];

$sql = "INSERT INTO users(u_fullname, u_nickname, u_ic, u_houseaddress, u_worktype, u_age, u_birthday, u_email, 
u_introducer, u_position, u_password, u_phone, u_bankname, u_bankaccno, u_holderbankname, u_heirname, u_heirnotel, 
u_heirrelationship) VALUES ('$fullname', '$nickname', '$ic', '$houseaddress', '$worktype', '$age', '$birthday', 
'$email', '$introducer', '$position', '$password', '$phonenumber', '$bankname', '$bankaccno', '$holderbankname', '$heirname', 
'$heirnotel', '$heirrelationship')";

if (mysqli_query($conn, $sql)) {
    echo  '<script>
    window.location.href = "login.php";
    alert("You have succcessfully register your account. Click OK to Login.")
    </script>';
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

}
?>