<?php
  include 'dbconnect.php';

  session_start();
  
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Admin - Synergy Realty</title>

  <!-- CSS FILES -->
  <link href="updatemastertracking.css" rel="stylesheet">
  <!-- Load an icon library -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"></script>

  <!-- JAVASCRIPT FILES -->
  <script src="updatemastertracking.js"></script>


</head>

<body>
  <?php

        if(isset($_GET['updateMTid'])){
          $mtidupdate = $_GET['updateMTid'];

          $sql = "SELECT * FROM master_tracking WHERE mt_id=$mtidupdate";
          $result = mysqli_query($conn, $sql);
          $resultCheck = mysqli_num_rows($result);
          if ($resultCheck > 0){
           $row = mysqli_fetch_assoc($result)

        ?>

  <!-- BUYER & AGENT NAME -->
  <h1>
    <?php echo $row["mt_buyername"] ?>

    <?php
      $sql2 = "SELECT * FROM users";
      $result2 = mysqli_query($conn, $sql2);
      $resultCheck2 = mysqli_num_rows($result2);
      if ($resultCheck2 > 0){
        while ($row2 = mysqli_fetch_assoc($result2)){
          if($row["mt_agent"] == $row2["u_id"]){
    ?>

    (AGENT
    <?php echo $row2["u_nickname"]; ?>)
  </h1>

  <?php
          }
        }
      ?>
  <!-- DETAILS STRING -->
  <div class="container-team-sales">
    <form action="#" method="post">
      <p>DEVELOPER NAME</p>
      <h2>
        <?php echo $row["mt_developer"]?>
      </h2>
    </form>
  </div>

  <div class="container-team-sales">
    <form action="#" method="post">
      <p>PROJECT NAME</p>
      <h2>
        <?php echo $row["mt_projectname"]?>
      </h2>
    </form>
  </div>

  <div class="container-team-sales">
    <form action="#" method="post">
      <p>PT</p>
      <h2>
        <?php echo $row["mt_PT"]?>
      </h2>
    </form>
  </div>

  <div class="container-team-sales">
    <form action="#" method="post">
      <p>SPA PRICE</p>
      <h2>
        <?php echo number_format($row["mt_spaprice"])?>
      </h2>
    </form>
  </div>

  <div class="container-team-sales">
    <form action="#" method="post">
      <p>HOUSE PRICE(NETT PRICE)</p>
      <h2>
        <?php echo number_format($row["mt_houseprice"])?>
      </h2>
    </form>
  </div>

  <div class="container-team-sales">
    <form action="#" method="post">
      <p>REBATE / MARKUP </p>
      <h2>
        <?php echo number_format($row["mt_rebate"])?>
      </h2>
    </form>
  </div>

  <div class="container-team-sales">
    <form action="#" method="post">
      <p>OPEN LOAN</p>
      <h2>
        <?php echo number_format($row["mt_openloan"])?>
      </h2>
    </form>
  </div>

  <div class="container-team-sales">
    <form action="#" method="post">
      <p>CLOSE LOAN</p>
      <h2>
        <?php echo $row["mt_closeloan"]?>
      </h2>
    </form>
  </div>

  <div class="container-team-sales">
    <form action="#" method="post">
      <p>LOAN TYPE</p>
      <h2>
        <?php echo $row["mt_typeloan"]?>
      </h2>
    </form>
  </div>

  <!-- DATES -->
  <table id="myTable">
    <tr class="header">
      <th>CONTENT</th>
      <th>DATE</td>
      <th><a>ACTION</a></td>
    </tr>
    <tr>
      <th>Status</th>
      <td>
        <?php echo $row["mt_status"]; ?>
      </td>
      <td><a href="#" data-bs-toggle="modal" data-bs-target="#modalstatus">edit</a></td>
    </tr>
    <tr>
      <th>Bank Name</th>
      <td>
        <?php echo $row["mt_bankname"]; ?>
      </td>
      <td><a href="#" data-bs-toggle="modal" data-bs-target="#modalbankname">edit</a></td>
    </tr>
    <tr>
      <th>Booking</th>
      <td>
        <?= date('d/m/Y', strtotime($row["mt_booking"])); ?>
      </td>
      <td><a href="#" data-bs-toggle="modal" data-bs-target="#modalbooking">edit</a></td>
    </tr>
    <tr>
      <th>Submit</th>
      <td>
        <?= date('d/m/Y', strtotime($row["mt_submit"])); ?>
      </td>
      <td><a href="#" data-bs-toggle="modal" data-bs-target="#modalsubmit">edit</a></td>
    </tr>
    <tr>
      <th>Confirmation</th>
      <td>
        <?= date('d/m/Y', strtotime($row["mt_confirmation"])); ?>
      </td>
      <td><a href="#" data-bs-toggle="modal" data-bs-target="#modalconfirmation">edit</a></td>
    </tr>
    <tr>
      <th>LPPSA Form</th>
      <td>
        <?= date('d/m/Y', strtotime($row["mt_lppsaform"])); ?>
      </td>
      <td><a href="#" data-bs-toggle="modal" data-bs-target="#modallppsaform">edit</a></td>
    </tr>
    <tr>
      <th>Hod Out</th>
      <td>
        <?= date('d/m/Y', strtotime($row["mt_hodout"])); ?>
      </td>
      <td><a href="#" data-bs-toggle="modal" data-bs-target="#modalhodout">edit</a></td>
    </tr>
    <tr>
      <th>Hod Return</th>
      <td>
        <?= date('d/m/Y', strtotime($row["mt_hodin"])); ?>
      </td>
      <td><a href="#" data-bs-toggle="modal" data-bs-target="#modalhodreturn">edit</a></td>
    </tr>
    <tr>
      <th>Mindef</th>
      <td>
        <?= date('d/m/Y', strtotime($row["mt_mindef"])); ?>
      </td>
      <td><a href="#" data-bs-toggle="modal" data-bs-target="#modalmindef">edit</a></td>
    </tr>
    <tr>
      <th>LPPSA</th>
      <td>
        <?= date('d/m/Y', strtotime($row["mt_lppsa"])); ?>
      </td>
      <td><a href="#" data-bs-toggle="modal" data-bs-target="#modallppsa">edit</a></td>
    </tr>
    <tr>
      <th>Loan Approved</th>
      <td>
        <?= date('d/m/Y', strtotime($row["mt_passed"])); ?>
      </td>
      <td><a href="#" data-bs-toggle="modal" data-bs-target="#modalpassed">edit</a></td>
    </tr>
    <tr>
      <th>Sign L.O</th>
      <td>
        <?= date('d/m/Y', strtotime($row["mt_signlo"])); ?>
      </td>
      <td><a href="#" data-bs-toggle="modal" data-bs-target="#modalsignlo">edit</a></td>
    </tr>
    <tr>
      <th>Sign SNP</th>
      <td>
        <?= date('d/m/Y', strtotime($row["mt_signsnp"])); ?>
      </td>
      <td><a href="#" data-bs-toggle="modal" data-bs-target="#modalsignsnp">edit</a></td>
    </tr>

    <?php 
        }
      }
    ?>

    <!-- MODAL STATUS(SETTLE) -->
    <div class="modal fade" id="modalstatus" tabindex="-1" aria-labelledby="modalstatusLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="modalstatusLabel">Edit Booking Date</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form action="" method="post">
          <div class="modal-body">
            <label><b>Status :</b></label>
            <input type="text" placeholder="Status" name="mtu-status" id="mtustatus" required>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" name="submitstatusupdate">Save changes</button>
          </div>
          </form>
        </div>
      </div>
    </div>

    <!-- MODAL BANK NAME -->
    <div class="modal fade" id="modalbankname" tabindex="-1" aria-labelledby="modalbanknameLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="modalbanknameLabel">Edit Bank Name</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form action="" method="post">
          <div class="modal-body">
              <label><b>Bank Name :</b></label>
              <input type="text" placeholder="Bank Name" name="mtu-bankname" id="mtubankname">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" name="updatebankname">Save changes</button>
          </div>
          </form>
        </div>
      </div>
    </div>

    <!-- MODAL BOOKING -->
    <div class="modal fade" id="modalbooking" tabindex="-1" aria-labelledby="modalbookingLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="modalbookingLabel">Edit Booking Date</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form action="" method="post">
          <div class="modal-body">
              <label><b>Booking Date :</b></label>
              <input type="date" name="mtu-bookingdate" id="mtubookingdate" required>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" name="bookingdateupdate">Save changes</button>
          </div>
          </form>
        </div>
      </div>
    </div>

    <!-- MODAL SUBMIT -->
    <div class="modal fade" id="modalsubmit" tabindex="-1" aria-labelledby="modalsubmitLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="modalsubmitLabel">Edit Submit Date</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form action="" method="post">
          <div class="modal-body">
              <label><b>Submit Date :</b></label>
              <input type="date" name="mtu-submitdate" id="mtusubmitdate">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" name="updatesubmitdate">Save changes</button>
          </div>
          </form>
        </div>
      </div>
    </div>

    <!-- MODAL CONFIRMATION -->
    <div class="modal fade" id="modalconfirmation" tabindex="-1" aria-labelledby="modalconfirmationLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="modalconfirmationLabel">Edit Confirmation Date</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form action="" method="post">
          <div class="modal-body">
              <label><b>Confirmation Date :</b></label>
              <input type="date" name="mtu-confirmationdate" id="mtuconfirmationdate">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" name="updateconfirmationdate">Save changes</button>
          </div>
          </form>
        </div>
      </div>
    </div>

    <!-- MODAL LPPSA FORM -->
    <div class="modal fade" id="modallppsaform" tabindex="-1" aria-labelledby="modallppsaformLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="modallppsaformLabel">Edit LPPSA Form Date</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form action="" method="post">
          <div class="modal-body">
              <label><b>LPPSA Form Date :</b></label>
              <input type="date" name="mtu-lppsaformdate" id="mtulppsaformdate">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" name="updatelppsaformdate">Save changes</button>
          </div>
          </form>
        </div>
      </div>
    </div>

    <!-- MODAL HOD OUT -->
    <div class="modal fade" id="modalhodout" tabindex="-1" aria-labelledby="modalhodoutLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="modalhodoutLabel">Edit Hod Out Date</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form action="" method="post">
          <div class="modal-body">
              <label><b>Hod Out Date :</b></label>
              <input type="date" name="mtu-hodoutdate" id="mtuhodoutdate">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" name="updatehodoutdate">Save changes</button>
          </div>
          </form>
        </div>
      </div>
    </div>

    <!-- MODAL HOD RETURN -->
    <div class="modal fade" id="modalhodreturn" tabindex="-1" aria-labelledby="modalhodreturnLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="modalhodreturnLabel">Edit Hod Return Date</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form action="" method="post">
          <div class="modal-body">
              <label><b>Hod Return Date :</b></label>
              <input type="date" name="mtu-hodreturndate" id="mtuhodreturndate">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" name="updatehodreturndate">Save changes</button>
          </div>
          </form>
        </div>
      </div>
    </div>

    <!-- MODAL MINDEF -->
    <div class="modal fade" id="modalmindef" tabindex="-1" aria-labelledby="modalmindefLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="modalmindefLabel">Edit Mindef Date</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form action="" method="post">
          <div class="modal-body">
              <label><b>Mindef Date :</b></label>
              <input type="date" name="mtu-mindefdate" id="mtumindefdate">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" name="updatemindefdate">Save changes</button>
          </div>
          </form>
        </div>
      </div>
    </div>

    <!-- MODAL LPPSA -->
    <div class="modal fade" id="modallppsa" tabindex="-1" aria-labelledby="modallppsaLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="modallppsaLabel">Edit LPPSA Date</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form action="" method="post">
          <div class="modal-body">
              <label><b>LPPSA Date :</b></label>
              <input type="date" name="mtu-lppsadate" id="mtulppsadate">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" name="updatelppsadate">Save changes</button>
          </div>
          </form>
        </div>
      </div>
    </div>

    <!-- MODAL PASSED -->
    <div class="modal fade" id="modalpassed" tabindex="-1" aria-labelledby="modalpassedLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="modalpassedLabel">Edit Passed Date</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form action="" method="post">
          <div class="modal-body">
              <label><b>Loan Approved Date :</b></label>
              <input type="date" name="mtu-passeddate" id="mtupasseddate">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" name="passeddateupdate">Save changes</button>
          </div>
          </form>
        </div>
      </div>
    </div>

    <!-- MODAL SIGN L.O -->
    <div class="modal fade" id="modalsignlo" tabindex="-1" aria-labelledby="modalsignloLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="modalsignloLabel">Edit Sign L.O Date</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form action="" method="post">
          <div class="modal-body">
              <label><b>Sign L.O Date :</b></label>
              <input type="date" name="mtu-signlodate" id="mtusignlodate">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" name="signlodateupdate">Save changes</button>
          </div>
          </form>
        </div>
      </div>
    </div>

    <!-- MODAL SIGN SNP -->
    <div class="modal fade" id="modalsignsnp" tabindex="-1" aria-labelledby="modalsignsnpLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="modalsignsnpLabel">Edit Sign SNP Date</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form action="" method="post">
          <div class="modal-body">
              <label><b>Confirmation Date :</b></label>
              <input type="date" name="mtu-signsnpdate" id="mtusignsnpdate">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" name="signsnpdateupdate">Save changes</button>
          </div>
          </form>
        </div>
      </div>
    </div>

    <?php
      }
    ?>

  </table>

  <script>

    /*date*/
    var date = new Date();
    var fromdate = date.getDate();
    var todate = date.getDate();
    var month = date.getMonth() + 1;

    if (todate < 10) {
      todate = '0' + todate;
    }
    if (fromdate < 10) {
      fromdate = '0' + fromdate;
    }
    if (month < 10) {
      month = '0' + month;
    }
    var year = date.getUTCFullYear();
    var minDate = year + "/" + month + "/" + fromdate;
    console.log(minDate);

    /*BOOKING DATE*/
    document.getElementById("mtubookingdate").setAttribute('min', minDate);

  </script>

</body>

</html>

<?php

//UPDATE STATUS(SETTLE)
if(isset($_POST["submitstatusupdate"] )){
$status = $_POST["mtu-status"];

  $sql = "UPDATE master_tracking SET mt_status='$status' WHERE mt_id=$mtidupdate";

    if (mysqli_query($conn, $sql)) {
      echo  '<script>
                  window.location.href = "admin.php";
                  alert("You have succcessfully updated the Status")
              </script>';
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

//UPDATE BANK NAME
if(isset($_POST["updatebankname"] )){
  $bankname = $_POST["mtu-bankname"];

    $sql = "UPDATE master_tracking SET mt_bankname='$bankname' WHERE mt_id=$mtidupdate";
  
      if (mysqli_query($conn, $sql)) {
        echo  '<script>
                    window.location.href = "admin.php";
                    alert("You have succcessfully updated the Bank Name")
                </script>';
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
}

//UPDATE BOOKING
if(isset($_POST["bookingdateupdate"] )){
  $bookingdate = $_POST["mtu-bookingdate"];

    $sql = "UPDATE master_tracking SET mt_booking='$bookingdate' WHERE mt_id=$mtidupdate";
  
      if (mysqli_query($conn, $sql)) {
        echo  '<script>
                    window.location.href = "admin.php";
                    alert("You have succcessfully updated the Booking Date")
                </script>';
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
}

//UPDATE SUBMIT
if(isset($_POST["updatesubmitdate"] )){
  $submitdate = $_POST["mtu-submitdate"];
  
    $sql = "UPDATE master_tracking SET mt_submit='$submitdate' WHERE mt_id=$mtidupdate";
  
      if (mysqli_query($conn, $sql)) {
        echo  '<script>
                    window.location.href = "admin.php";
                    alert("You have succcessfully updated the Submit Date")
                </script>';
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
}

//UPDATE CONFIRMATION
if(isset($_POST["updateconfirmationdate"] )){
  $confirmationdate = $_POST["mtu-confirmationdate"];
  
    $sql = "UPDATE master_tracking SET mt_confirmation='$confirmationdate' WHERE mt_id=$mtidupdate";
  
      if (mysqli_query($conn, $sql)) {
        echo  '<script>
                    window.location.href = "admin.php";
                    alert("You have succcessfully updated the Confirmation Date")
                </script>';
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
}

//UPDATE LPPSA FORM
if(isset($_POST["updatelppsaformdate"] )){
  $lppsaformdate = $_POST["mtu-lppsaformdate"];
  
    $sql = "UPDATE master_tracking SET mt_lppsaform='$lppsaformdate' WHERE mt_id=$mtidupdate";
  
      if (mysqli_query($conn, $sql)) {
        echo  '<script>
                    window.location.href = "admin.php";
                    alert("You have succcessfully updated the LPPSA Form")
                </script>';
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
}

//UPDATE HOD OUT
if(isset($_POST["updatehodoutdate"] )){
  $hodoutdate = $_POST["mtu-hodoutdate"];
  
    $sql = "UPDATE master_tracking SET mt_hodout='$hodoutdate' WHERE mt_id=$mtidupdate";
  
      if (mysqli_query($conn, $sql)) {
        echo  '<script>
                    window.location.href = "admin.php";
                    alert("You have succcessfully updated the Hod Out Date")
                </script>';
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
}

//UPDATE HOD RETURN
if(isset($_POST["updatehodreturndate"] )){
  $hodreturndate = $_POST["mtu-hodreturndate"];
  
    $sql = "UPDATE master_tracking SET mt_hodin='$hodreturndate' WHERE mt_id=$mtidupdate";
  
      if (mysqli_query($conn, $sql)) {
        echo  '<script>
                    window.location.href = "admin.php";
                    alert("You have succcessfully updated the Hod Return Date")
                </script>';
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
}

//UPDATE MINDEF
if(isset($_POST["updatemindefdate"] )){
  $mindefdate = $_POST["mtu-mindefdate"];
  
    $sql = "UPDATE master_tracking SET mt_mindef='$mindefdate' WHERE mt_id=$mtidupdate";
  
      if (mysqli_query($conn, $sql)) {
        echo  '<script>
                    window.location.href = "admin.php";
                    alert("You have succcessfully updated the Mindef Date")
                </script>';
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
}

//UPDATE LPPSA
if(isset($_POST["updatelppsadate"] )){
  $lppsadate = $_POST["mtu-lppsadate"];
  
    $sql = "UPDATE master_tracking SET mt_lppsa='$lppsadate' WHERE mt_id=$mtidupdate";
  
      if (mysqli_query($conn, $sql)) {
        echo  '<script>
                    window.location.href = "admin.php";
                    alert("You have succcessfully updated the LPPSA Date")
                </script>';
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
}

//UPDATE PASSED
if(isset($_POST["passeddateupdate"] )){
  $passed = $_POST["mtu-passeddate"];
  
    $sql = "UPDATE master_tracking SET mt_passed='$passed' WHERE mt_id=$mtidupdate";
  
      if (mysqli_query($conn, $sql)) {
        echo  '<script>
                    window.location.href = "admin.php";
                    alert("You have succcessfully updated the Loan Approved Date")
                </script>';
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
}

//UPDATE SIGN L.O
if(isset($_POST["signlodateupdate"] )){
  $signlodate = $_POST["mtu-signlodate"];
  
    $sql = "UPDATE master_tracking SET mt_signlo='$signlodate' WHERE mt_id=$mtidupdate";
  
      if (mysqli_query($conn, $sql)) {
        echo  '<script>
                    window.location.href = "admin.php";
                    alert("You have succcessfully updated the Sign L.O Date")
                </script>';
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
}

//UPDATE SIGN SNP
if(isset($_POST["signsnpdateupdate"] )){
  $signsnpdate = $_POST["mtu-signsnpdate"];
  
    $sql = "UPDATE master_tracking SET mt_signsnp='$signsnpdate' WHERE mt_id=$mtidupdate";
  
      if (mysqli_query($conn, $sql)) {
        echo  '<script>
                    window.location.href = "admin.php";
                    alert("You have succcessfully updated the Sign SNP Date")
                </script>';
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
}


?>