<?php

session_start();

  include 'dbconnect.php';
  
  if(isset($_POST["submitlogin"])){

  $email = $_POST["emaillogin"];
  $password = $_POST["passwordlogin"];

  $sql = "SELECT * FROM users WHERE u_email = '$email' AND u_password = '$password'";
  $result = mysqli_query($conn, $sql);
  $count = mysqli_num_rows($result);  

  if(mysqli_num_rows($result) > 0){

    $row = mysqli_fetch_array($result);

      if($row["u_position"] == 'SENIOR ADVISOR'){
      
        session_regenerate_id();

        $user_session_id = session_id();

        $sql2 = "UPDATE users SET u_session_id = '$user_session_id' WHERE u_email= '$email'";
        $result = mysqli_query($conn, $sql2);

        $_SESSION['userposition'] = $row["u_position"];
        $_SESSION['userid'] = $row["u_id"];
        $_SESSION['usersessionid'] = $user_session_id;
        header("Location: admin.php");

      }else if($row["u_position"] == 'JUNIOR ADVISOR'){

        session_regenerate_id();

        $user_session_id = session_id();

        $sql2 = "UPDATE users SET u_session_id = '$user_session_id' WHERE u_email= '$email'";
        $result = mysqli_query($conn, $sql2);

        $_SESSION['userposition'] = $row["u_position"];
        $_SESSION['userid'] = $row["u_id"];
        $_SESSION['usersessionid'] = $user_session_id;
        header("Location: homepage.php");

    }
      
  }else { 
      echo  '<script>
                  window.location.href = "login.php";
                  alert("Login failed. Invalid username or password!!")
              </script>';
  }
  
}

?>