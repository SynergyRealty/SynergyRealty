<?php
//FILE NI TK DIGUNAKAN
  include 'dbconnect.php';

if(isset($_GET['updateMTDid']) || $_POST["submitstatusupdate"] ){
  $mtidupdate = $_GET['updateMTDid'];
  $status = $_POST["mtu-status"];

  $sql = "UPDATE master_tracking SET mt_status='$status' WHERE mt_id=$mtidupdate";

    if (mysqli_query($conn, $sql)) {
      header('Location:updatemastertracking.php');
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

}

?>