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
  <link href="admin.css" rel="stylesheet">
  <!-- Load an icon library -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- JAVASCRIPT FILES -->
  <script src="admin.js"></script>

  <!-- DYNAMIC CALENDAR-->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.css" rel="stylesheet" />
  <!-- JS for jQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- JS for full calender -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.1/moment.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.js"></script>
  <!-- bootstrap js -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</head>

<body>

  <!-- START OF NAV -->
  <div class="sidebar">
    <!-- letak logo dgn search kt sini -->
    <div class="tab">
      <button class="tablinks" onclick="openNav(event, 'Dashboard')" id="defaultOpen"><i class="fa fa-fw fa-home"></i>
        Dashboard</button>
    </div>

    <button class="accordion"><i class="fa-solid fa-users"></i> Team Hub<i class="fa fa-caret-down"></i></button>
    <div class="panel">
      <div class="tab">
        <button class="tablinks" onclick="openNav(event, 'MyTeam')"><i class="fa-solid fa-user-plus"></i> My
          Team</button>
      </div>
      <div class="tab">
        <button class="tablinks" onclick="openNav(event, 'TeamSales')"><i class="fa-solid fa-comments-dollar"></i> Team
          Sales</button>
      </div>
      <div class="tab">
        <button class="tablinks" onclick="openNav(event, 'ProjectSales')"><i
            class="fa-solid fa-circle-dollar-to-slot"></i> Personal Sales</button>
      </div>
      <div class="tab">
        <button class="tablinks" onclick="openNav(event, 'MeetingRoom')"><i class="fa-solid fa-handshake"></i> Meeting
          Room</button>
      </div>
    </div>

    <button class="accordion"><i class="fa-solid fa-satellite-dish"></i> Real Estate Radar<i
        class="fa fa-caret-down"></i></button>
    <div class="panel">
      <div class="tab">
        <button class="tablinks" onclick="openNav(event, 'ProjectCenter')"><i
            class="fa-solid fa-hands-holding-circle"></i> Project Center</button>
      </div>
      <div class="tab">
        <button class="tablinks" onclick="openNav(event, 'PICProject')"><i class="fa-solid fa-circle-user"></i> PIC
          Project</button>
      </div>
    </div>

    <button class="accordion"><i class="fa-solid fa-user-group"></i> Engagement Hub<i
        class="fa fa-caret-down"></i></button>
    <div class="panel">
      <div class="tab">
        <a href="https://drive.google.com/drive/folders/1Z7T8Wc-yLzTv9YcbovkMC_-1dKlfDr_b?usp=drive_link">
          <button class="tablinks" onclick="openNav(event, 'Leads')"><i class="fa-solid fa-chalkboard-user"></i>
            Leads</button></a>
      </div>
    </div>

    <button class="accordion"><i class="fa-solid fa-coins"></i> Financial Hub<i class="fa fa-caret-down"></i></button>
    <div class="panel">
      <div class="tab">
        <button class="tablinks" onclick="openNav(event, 'PaymentVouchers')"><i class="fa-solid fa-file-invoice"></i>
          Payment Vouchers</button>
      </div>
    </div>

    <div class="tab">
      <button class="tablinks" onclick="openNav(event, 'Calendar')"><i class="fa-solid fa-calendar-days"></i>
        Calendar</button>
    </div>

    <button class="accordion"><i class="fa-solid fa-book-open-reader"></i> Learning Hub<i
        class="fa fa-caret-down"></i></button>
    <div class="panel">
      <div class="tab">
        <button class="tablinks" onclick="openNav(event, 'MyTrainings')"><i class="fa-solid fa-chalkboard"></i> My
          Trainings</button>
      </div>
      <div class="tab">
        <!-- LINK KE TAB BARU -->
        <button class="tablinks" onclick="openNav(event, 'Academy')"><i class="fa-solid fa-graduation-cap"></i>
          Synergy Realty Academy</button>
      </div>
      <div class="tab">
        <button class="tablinks" onclick="openNav(event, 'Tutorials')"><i class="fa-solid fa-laptop-file"></i>
          Tutorials</button>
      </div>
    </div>

    <button class="accordion"><i class="fa-solid fa-store"></i> Store Hub<i class="fa fa-caret-down"></i></button>
    <div class="panel">
      <div class="tab">
        <!-- link ke new tab -->
        <button class="tablinks" onclick="openNav(event, 'Store')"><i class="fa-solid fa-store"></i>
          Synergy Realty Store</button>
      </div>
    </div>

    <button class="accordion"><i class="fa-solid fa-gear"></i> Settings
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="panel">
      <div class="tab">
        <button class="tablinks" onclick="openNav(event, 'Profile')"><i class="fa-solid fa-id-badge"></i>
          Profile</button>
      </div>
      <div class="tab">
        <a href="login.php"><button class="tablinks"><i class="fa-solid fa-right-from-bracket"></i> Log
            Out</button></a>
      </div>
    </div>

  </div>
  <!-- END OF NAV -->

  <!-- START OF PAGE CONTENT -->
  <div class="main">

    <!-- DASHBOARD -->
    <div id="Dashboard" class="tabcontent">
      <hr>
      <h1><i class="fa fa-fw fa-home"></i> My Dashboard</h1>
      <hr>
      <!-- Tab dashboard -->
      <div class="tabdashboard">
        <!-- defaultOpen utk keep dashboard still display and tk biarkn dia kosong(tk jdi)-->
        <button class="tabdashboardlinks" onclick="openDashboard(event, 'Newsfeed')" id="defaultOpen"><i
            class="fa-regular fa-newspaper"></i> Newsfeed</button>
        <button class="tabdashboardlinks" onclick="openDashboard(event, 'Summary')"><i
            class="fa-solid fa-clipboard-list"></i> Summary</button>
        <button class="tabdashboardlinks" onclick="openDashboard(event, 'Project')"><i class="fa-solid fa-building"></i>
          Project</button>
        <button class="tabdashboardlinks" onclick="openDashboard(event, 'Subsales')"><i
            class="fa-solid fa-person-shelter"></i> Subsales</button>
      </div>

      <!-- NEWSFEED -->
      <div id="Newsfeed" class="tabdashboardcontent">
        <h1></i>Newsfeed <button onclick="openModalAdmin()"><i class="fa-solid fa-plus"></i> Add Newsfeed</button></h1>

        <!-- the modal ADD NEWSFEED -->
        <div id="themodalnewsfeed" class="modal">

          <!-- modal content newsfeed -->
          <div class="modal-content">
            <span class="close" onclick="closeModalAdmin()">&times;</span>
            <h1>New Newsfeed</h1>
            <div class="container-modals">
              <h3>Newsfeed Details</h3>

              <form action="admindb.php" method="post" enctype="multipart/form-data">
                <label for="newsfeedphotos"><b>Photos :</b></label>
                <input type="file" id="myImage" name="nf-photos">
                <label for="newsfeedtopic"><b>Topic :</b></label>
                <input type="text" placeholder="Topic" name="nf-topic" required>
                <label for="newsfeeddates"><b>Date : </b></label>
                <input type="date" id="newsfeeddate" name="nf-date">
            </div>
            <div class="modal__footer">
              <button type="reset">Reset</button><button name="submitnewsfeed">Save</button>
            </div>
            </form>
          </div>

        </div>

        <!-- display output -->
        <?php

          $sql = "SELECT * FROM newsfeed";
          $result = mysqli_query($conn, $sql);
          $resultCheck = mysqli_num_rows($result);

          if ($resultCheck > 0){
            while ($row = mysqli_fetch_assoc($result)){
              echo '
              <div class="cardnewsfeed">
                <img src="images/'.$row["nf_photos"].'" style="width:100%">
                  <div class="containernewsfeed">
                    <h4><b>'.$row["nf_topic"].'</b></h4>
                    <p>'.date('d-m-Y', strtotime($row["nf_date"])).'</p>
                  </div>
              </div>';
            }
          }
                                                
         ?>

      </div>

      <!-- SUMMARY (buat 2 column)-->
      <div id="Summary" class="tabdashboardcontent">
        <h1>Summary</h1>

        <!-- Team Size -->
        <?php 
            $sql = "SELECT * FROM users";
            $result = mysqli_query($conn, $sql);
            $totalUsers = mysqli_num_rows($result);
         ?>
        <div class="containersummary">
          <h3><i class="fa-solid fa-people-group"></i> Team Size</h3>
          <h2><b>
              <?php echo $totalUsers; ?>
            </b></h2>
          <p>Active Agent</p>
          <h2><b>
              <?php echo $totalUsers; ?>
            </b></h2>
        </div>

        <!-- Team Sales -->
        <div class="containersummary">
          <h3><i class="fa-solid fa-universal-access"></i><b> Team Sales in 2024</b></h3>
          <p>Total Team Sales (starting April 2024)</p>
          <h2><b>RM0</b></h2>
        </div>

        <!-- Campaign Tracker -->
        <div class="containersummary">
          <h3><b>Campaign Tracker</b></h3>
          <div id="myProgress">
            <div id="myBar">Campaign Tracker</div>
          </div>
        </div>

      </div>

      <!-- PROJECT (buat 2 column)-->
      <div id="Project" class="tabdashboardcontent">
        <h1>Project</h1>

        <!-- Project Podium -->
        <div class="containerproject">
          <h3><i class="fa-solid fa-building-wheat"></i> Project</h3>
          <p>Top Agent</p>
          <h2><b>0</b></h2>
        </div>

        <!-- Project Sales -->
        <div class="containerproject">
          <h3><i class="fa-solid fa-person-chalkboard"></i><b> Project Sales in 2024</b></h3>
          <p>Total Sales Unit</p>
          <h2><b>9</b></h2>
          <hr>
          <h4>SALES BY TYPE</h4>
          <p><i class="fa-solid fa-circle"></i> Total Booked Unit</p>
          <h2><b>0</b></h2>
          <p><i class="fa-solid fa-circle"></i> Total Converted Unit</p>
          <h2><b>0</b></h2>
        </div>

        <!-- Cancelled Unit -->
        <div class="containerproject">
          <h3><i class="fa-solid fa-rectangle-xmark"></i> Cancelled Unit</h3>
          <h2><b>0</b></h2>
        </div>

      </div>

      <!-- SUBSALES (buat 2 column)-->
      <div id="Subsales" class="tabdashboardcontent">
        <h1>Subsales</h1>

        <!-- Subsales Podium -->
        <div class="containersubsales">
          <h3><i class="fa-solid fa-building-user"></i> SUBSALES</h3>
          <p>Top Agent</p>
          <h2><b>0</b></h2>
        </div>

        <!-- Current Progress Subsales -->
        <div class="containersubsales">
          <h3><b>TROOPER</b></h3>
        </div>

        <!-- Subsales Sales -->
        <div class="containersubsales">
          <h3><i class="fa-solid fa-house-chimney-user"></i><b> Subsales Sales in 2024</b></h3>
          <hr>
          <p><i class="fa-solid fa-circle"></i> Converted Unit</p>
          <h2><b>0</b></h2>
          <p><i class="fa-solid fa-circle"></i> Estimated Booked Unit</p>
          <h2><b>0</b></h2>
          <p><i class="fa-solid fa-circle"></i> Cancelled Unit</p>
          <h2><b>0</b></h2>
        </div>

        <!-- Cancelled Unit -->
        <div class="containersubsales">
          <h3><i class="fa-solid fa-hand-holding-dollar"></i> Total Agency Comm.</h3>
          <h2><b>0</b></h2>
        </div>

      </div>

    </div>

    <!-- TEAM HUB-->
    <!-- MY TEAM -->
    <div id="MyTeam" class="tabcontent">
      <hr>
      <h1><i class="fa-solid fa-users-rectangle"></i> My Team</h1>
      <hr>
      <!-- Tab MyTeam -->
      <div class="tabdashboard">
        <button class="tabdashboardlinks" onclick="openDashboard(event, 'Members')"><i
            class="fa-solid fa-users-between-lines"></i> Members</button>
        <button class="tabdashboardlinks" onclick="openDashboard(event, 'Birthdays')"><i
            class="fa-solid fa-cake-candles"></i> Birthdays</button>
      </div>

      <!-- MEMBERS -->
      <div id="Members" class="tabdashboardcontent">
        <h1>Members </h1>

        <!-- search -->
        <div class="container">
          <form action="#" method="get">
            <label for="uname"><b>Full Name :</b></label>
            <input type="text" placeholder="Full Name" name="uname" value="<?php 
            if(isset($_GET['uname'])){echo $_GET['uname'];}?>">
            <button type="reset">Reset</button><button>Search</button>
            <div>
              <p id="text"></p>
            </div>
          </form>
        </div>

        <!--display search -->
        <table id="myTable">
          <tr class="header">
            <th style="width:40%;">Full Name</th>
            <th style="width:20%;">Display Name</th>
            <th style="width:20%;">Mobile Number</th>
          </tr>
          <?php
          if(isset($_GET['uname'])){
            $displayname = $_GET['uname'];
            $query = "SELECT * FROM users WHERE CONCAT(u_fullname, u_nickname) LIKE '%$displayname%'";
            $query_run = mysqli_query($conn, $query);

            if(mysqli_num_rows($query_run) > 0)
            {
              foreach($query_run as $items)
              {
                ?>
          <tr>
            <td>
              <?= $items['u_fullname']; ?>
            </td>
            <td>
              <?= $items['u_nickname']; ?>
            </td>
            <td>0
              <?= $items['u_phone']; ?>
            </td>
          </tr>
          <?php
              }

            }else
            {
              ?>

          <?php
            }
          }
        ?>
        </table>

      </div>

      <!-- Birthdays -->
      <div id="Birthdays" class="tabdashboardcontent">
        <h1></i>Birthdays</h1>

        <form action="#" method="post">
          <div class="container">
            <button>All</button><button>My Registered Event</button>
            <input type="checkbox" id="myCheck" onclick="myFunction()"> Team Birthday

            <p id="text" style="display:none">Checkbox is CHECKED!</p>
          </div>
        </form>

        <div id="calendarteam"></div>
      </div>

    </div>

    <!-- TEAM SALES-->
    <div id="TeamSales" class="tabcontent">
      <hr>
      <h1><i class="fa-solid fa-universal-access"></i> Team Sales <button onclick="openModalAdmin()"><i
            class="fa-solid fa-plus"></i> Add Sales</button></h1>
      <hr>

      <!-- the modal add team sales (bagi nmpk kemas) -->
      <div id="themodalteamsalesproject" class="modal">

        <!-- modal content add team sales  -->
        <div class="modal-content">
          <span class="close" onclick="closeModalAdmin()">&times;</span>
          <h1>New Team Project Sales</h1>
          <div class="container">
            <form action="admindb.php" method="post">
              <label for="pt-buyername"><b>Buyer Name</b><i class="fa fa-asterisk" style="font-size:11px;color:red"></i>
                :</label>
              <input type="text" placeholder="Buyer Name" name="tsp-buyername" required>
              <label for="memberdisplayname"><b>Agent<i class="fa fa-asterisk" style="font-size:11px;color:red"></i> :
                </b></label>

              <select name="tsp-agent" id="agent">
                <?php
                    $sql = "SELECT * FROM users";
                    $result = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($result);

                    if ($resultCheck > 0){
                      while ($row = mysqli_fetch_assoc($result)){
                        //if($_SESSION[""] != $row['u_fullname']){
                        echo '
                        <option value="'.$row['u_id'].'">'.$row['u_nickname'].'</option>';
                        //}
                      }
                    }  
                ?>

              </select>
              <label for="pt-developername"><b>Developer Name<i class="fa fa-asterisk"
                    style="font-size:11px;color:red"></i> :</b></label>
              <input type="text" placeholder="Developer Name" name="tsp-developername" required>
              <label for="pt-projectname"><b>Project Name<i class="fa fa-asterisk" style="font-size:11px;color:red"></i>
                  :</b></label>
              <input type="text" placeholder="Project Name" name="tsp-projectname" required>
              <label for="pt-pt"><b>PT<i class="fa fa-asterisk" style="font-size:11px;color:red"></i> :</b></label>
              <input type="text" placeholder="PT" name="tsp-pt" required>
              <label for="pt-spaprice"><b>Spa Price<i class="fa fa-asterisk" style="font-size:11px;color:red"></i>
                  :</b></label>
              <input type="text" placeholder="Spa Price" name="tsp-spaprice" required>
              <label for="pt-houseprice"><b>House Price<i class="fa fa-asterisk" style="font-size:11px;color:red"></i>
                  :</b></label>
              <input type="text" placeholder="House Price" name="tsp-houseprice" required>
              <label for="pt-rebatemarkup"><b>Rebate / Markup<i class="fa fa-asterisk"
                    style="font-size:11px;color:red"></i> :</b></label>
              <input type="text" placeholder="Rebate / Markup" name="tsp-rebatemarkup" required>
              <label for="pt-openloan"><b>Open Loan<i class="fa fa-asterisk" style="font-size:11px;color:red"></i>
                  :</b></label>
              <input type="text" placeholder="Open Loan" name="tsp-openloan" required>
              <label for="pt-closeloan"><b>Close Loan<i class="fa fa-asterisk" style="font-size:11px;color:red"></i>
                  :</b></label>
              <select name="tsp-closeloan">
                <option value="awam">AWAM</option>
                <option value="tentera">TENTERA</option>
                <option value="none">NONE</option>
              </select>
              <label for="pt-typeofloan"><b>Type Of Loan<i class="fa fa-asterisk" style="font-size:11px;color:red"></i>
                  :</b></label>
              <select name="tsp-typeofloan">
                <option value="LPPSA">LPPSA</option>
                <option value="bank">Bank</option>
              </select>
              <label for="pt-bankname"><b>Bank Name :</b></label>
              <input type="text" placeholder="Bank Name" name="tsp-bankname">
              <!--DATE-->
              <label for="pt-booking"><b>Booking :</b></label>
              <input type="date" id="ts-bookingproject" name="tsp-booking">
              <label for="pt-submit"><b>Submit :</b></label>
              <input type="date" id="ts-submitproject" name="tsp-submit">

              <label for="pt-confirmation"><b>Confirmation :</b></label>
              <input type="date" id="ts-confirmationproject" name="tsp-confirmation">
              <label for="pt-lpssaform"><b>LPPSA Form :</b></label>
              <input type="date" id="ts-lppsaformproject" name="tsp-lppsaform">
              <label for="pt-hodout"><b>Hod Out :</b></label>
              <input type="date" id="ts-hodoutproject" name="tsp-hodout">
              <label for="pt-hodreturn"><b>Hod Return :</b></label>
              <input type="date" id="ts-hodreturnproject" name="tsp-hodreturn">
              <label for="pt-mindef"><b>Mindef :</b></label>
              <input type="date" id="ts-mindefproject" name="tsp-mindef">
              <label for="pt-lppsa"><b>LPPSA :</b></label>
              <input type="date" id="ts-lppsaproject" name="tsp-lppsa">
              <label for="pt-passed"><b>Passed :</b></label>
              <input type="date" id="ts-passedproject" name="tsp-passed">
              <label for="pt-signlo"><b>Sign L.O :</b></label>
              <input type="date" id="ts-signloproject" name="tsp-signlo">
              <label for="pt-signsnp"><b>Sign SNP :</b></label>
              <input type="date" id="ts-signsnpproject" name="tsp-signsnp">
              <label for="pt-status"><b>Status<i class="fa fa-asterisk" style="font-size:11px;color:red"></i>
                  :</b></label>
              <select name="tsp-status">
                <option value="Waiting Approval">Waiting Approval</option>
                <option value="Pending">Pending</option>
                <option value="Cancel/Reject">Cancel/Reject</option>
                <option value="Loan Approved">Loan Approved</option>
              </select>
          </div>
          <div class="modal__footer">
            <button type="reset">Reset</button><button name="submitteamsalesproject">Save</button>
          </div>
          </form>
        </div>

      </div>

      <!-- search -->
      <div class="container">
        <form action="" method="post">
          <label for="salesdatefrom"><b>From : </b></label>
          <input type="date" id="teamsalesprojectfrom" name="teamsalesprojectfrom" value="<?php 
            if(isset($_POST['searchtsadmin'])){echo $_POST['searchtsadmin'];}?>">
          <label for="salesdateto"><b>To : </b></label>
          <input type="date" id="teamsalesprojectto" name="teamsalesprojectto">
          <button type="reset">Reset</button><button name="searchtsadmin">Search</button>
        </form>
      </div>

      <!-- display search-->
      <div class="container-team-sales">
        <form action="#" method="post">
          <p>Group Sales</p>
          <h2>0.00</h2>
        </form>
      </div>

      <div class="container-team-sales">
        <form action="#" method="post">
          <p>Team Project Sales</p>
          <h2>0.00</h2>
        </form>
      </div>

      <div class="container-team-sales">
        <form action="#" method="post">
          <p>Team Subsales Sales</p>
          <h2>0.00</h2>
        </form>
      </div>

      <?php
        //(KELUAR SKLI JE BILA SEARCH & TK KELUAR SEMUA DATA BALIK)
          if(isset($_POST['searchtsadmin'])){
            $teamsalesprojectfrom = $_POST["teamsalesprojectfrom"];
            $teamsalesprojectto = $_POST["teamsalesprojectto"];

            //CODE SUSUN IKUT TARIKH - ORDER BY ASC/DESC
            $query = mysqli_query($conn, "SELECT * FROM master_tracking WHERE mt_booking BETWEEN '$teamsalesprojectfrom' AND '$teamsalesprojectto'");

            if(mysqli_num_rows($query)>0){
      ?>

      <table id="myTable">
        <thead>
          <tr class="header">
            <th style="width:40%;">Buyer Name</th>
            <th style="width:15%;">Agent</th>
            <th style="width:15%;">Booking</th>
            <th style="width:15%;">Submit</th>
            <th style="width:15%;">Status</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($query as $value){ 
             $sql2 = "SELECT * FROM users";
             $result2 = mysqli_query($conn, $sql2);
             $resultCheck2 = mysqli_num_rows($result2);
             ?>

          <tr>
            <?php echo '<td><a href="updatemastertracking.php?updateMTid='.$value["mt_id"].'" > '.$value["mt_buyername"].' </a></td>'?>
            <?php 
           if ($resultCheck2 > 0){
            while ($row2 = mysqli_fetch_assoc($result2)){
              if($value["mt_agent"] == $row2["u_id"]){
          ?>
            <td>
              <?=$row2["u_nickname"]?>
            </td>
            <?php
              }
            }
            ?>
            <td>
              <?php 
                if($value["mt_booking"] != NULL ){
              ?>
              <?=date('d/m/Y', strtotime($value["mt_booking"]))?>
              <?php 
                }
              ?>
            </td>
            <td>
              <?php 
                if($value["mt_submit"] != NULL ){
              ?>
              <?=date('d/m/Y', strtotime($value["mt_submit"]))?>
              <?php 
                }
              ?>
            </td>
            <td>
              <?=$value["mt_status"]?>
            </td>
          </tr>

          <?php
            }
          }
        }  
          ?>
        </tbody>
      </table>
      <?php
        }
        ?>


      <!-- display all data-->
      <?php
          //CODE SUSUN IKUT TARIKH - ORDER BY ASC/DESC
          $sql = "SELECT * FROM master_tracking";
          $result = mysqli_query($conn, $sql);
          $resultCheck = mysqli_num_rows($result);

        ?>

      <table id="myTable">
        <thead>
          <tr class="header">
            <th style="width:40%;">Buyer Name</th>
            <th style="width:15%;">Agent</th>
            <th style="width:15%;">Booking</th>
            <th style="width:15%;">Submit</th>
            <th style="width:15%;">Status</th>
          </tr>
        </thead>

        <?php 
           if ($resultCheck > 0){
            while ($row = mysqli_fetch_assoc($result)){

              $mtid = $row["mt_id"];

              $sql2 = "SELECT * FROM users";
              $result2 = mysqli_query($conn, $sql2);
              $resultCheck2 = mysqli_num_rows($result2);
              
          ?>
        <tbody>
          <tr>
            <?php echo '<td><a href="updatemastertracking.php?updateMTid='.$mtid.'" > '.$row["mt_buyername"].' </a></td>'?>

            <?php 
           if ($resultCheck2 > 0){
            while ($row2 = mysqli_fetch_assoc($result2)){
              if($row["mt_agent"] == $row2["u_id"]){

          ?>
            <td>
              <?php echo $row2["u_nickname"]; ?>
            </td>

            <?php
              }
            }
            ?>
            <td>
              <?php 
                if($row["mt_booking"] != NULL ){
              ?>
              <?= date('d/m/Y', strtotime($row["mt_booking"])); ?>
              <?php
               }
            ?>
            </td>
            <td>
              <?php 
                if($row["mt_submit"] != NULL ){
              ?>
              <?= date('d/m/Y', strtotime($row["mt_submit"])); ?>
              <?php
               }
            ?>
            </td>
            <td>
              <?php echo $row["mt_status"]; ?>
            </td>
          </tr>

          <?php 
            }
          }
          }
          ?>

        </tbody>
      </table>

    </div>

    <!-- PERSONAL SALES -->
    <div id="ProjectSales" class="tabcontent">
      <hr>
      <h1><i class="fa-solid fa-person-chalkboard"></i> Personal Sales <button onclick="openModalAdmin()"><i
            class="fa-solid fa-plus"></i> Add Sales</button></h1>
      <hr>

      <!-- the modal personal sales -->
      <div id="themodalpersonalsales" class="modal">

        <!-- modal content personal sales (bagi nmpk kemas) -->
        <div class="modal-content">
          <span class="close" onclick="closeModalAdmin()">&times;</span>
          <h1>New Personal Sales</h1>
          <div class="container">
            <form action="admindb.php" method="post">
              <label for="pt-buyername"><b>Buyer Name<i class="fa fa-asterisk" style="font-size:11px;color:red"></i>
                  :</b></label>
              <input type="text" placeholder="Buyer Name" name="ps-buyername" required>
              <label for="pt-developername"><b>Developer Name<i class="fa fa-asterisk"
                    style="font-size:11px;color:red"></i> :</b></label>
              <input type="text" placeholder="Developer Name" name="ps-developername" required>
              <label for="pt-agent"><b>Agent : </b></label>
              <label for="pt-projectname"><b>Project Name<i class="fa fa-asterisk" style="font-size:11px;color:red"></i>
                  :</b></label>
              <input type="text" placeholder="Project Name" name="ps-projectname" required>
              <label for="pt-pt"><b>PT<i class="fa fa-asterisk" style="font-size:11px;color:red"></i> :</b></label>
              <input type="text" placeholder="PT" name="ps-pt" required>
              <label for="pt-spaprice"><b>Spa Price<i class="fa fa-asterisk" style="font-size:11px;color:red"></i>
                  :</b></label>
              <input type="text" placeholder="Spa Price" name="ps-spaprice" required>
              <label for="pt-houseprice"><b>House Price<i class="fa fa-asterisk" style="font-size:11px;color:red"></i>
                  :</b></label>
              <input type="text" placeholder="House Price" name="ps-houseprice" required>
              <label for="pt-rebatemarkup"><b>Rebate / Markup<i class="fa fa-asterisk"
                    style="font-size:11px;color:red"></i> :</b></label>
              <input type="text" placeholder="Rebate / Markup" name="ps-rebatemarkup" required>
              <label for="pt-openloan"><b>Open Loan<i class="fa fa-asterisk" style="font-size:11px;color:red"></i>
                  :</b></label>
              <input type="text" placeholder="Open Loan" name="ps-openloan" required>
              <label for="pt-closeloan"><b>Close Loan<i class="fa fa-asterisk" style="font-size:11px;color:red"></i>
                  :</b></label>
              <select name="ps-closeloan">
                <option value="awam">Awam</option>
                <option value="tentera">Tentera</option>
                <option value="none">None</option>
              </select>
              <label for="pt-typeofloan"><b>Type Of Loan<i class="fa fa-asterisk" style="font-size:11px;color:red"></i>
                  :</b></label>
              <select name="ps-typeofloan">
                <option value="LPPSA">LPPSA</option>
                <option value="bank">Bank</option>
              </select>
              <label for="pt-bankname"><b>Bank Name :</b></label>
              <input type="text" placeholder="Bank Name" name="ps-bankname">
              <!--DATE-->
              <label for="pt-booking"><b>Booking :</b></label>
              <input type="date" id="ps-booking" name="ps-booking">
              <label for="pt-submit"><b>Submit :</b></label>
              <input type="date" id="ps-submit" name="ps-submit">
              <label for="pt-confirmation"><b>Confirmation :</b></label>
              <input type="date" id="ps-confirmation" name="ps-confirmation">
              <label for="pt-lpssaform"><b>LPPSA Form :</b></label>
              <input type="date" id="ps-lppsaform" name="ps-lppsaform">
              <label for="pt-hodout"><b>Hod Out :</b></label>
              <input type="date" id="ps-hodout" name="ps-hodout">
              <label for="pt-hodin"><b>Hod In :</b></label>
              <input type="date" id="ps-hodin" name="ps-hodin">
              <label for="pt-mindef"><b>Mindef :</b></label>
              <input type="date" id="ps-mindef" name="ps-mindef">
              <label for="pt-lppsa"><b>LPPSA :</b></label>
              <input type="date" id="ps-lppsa" name="ps-lppsa">
              <label for="pt-passed"><b>Passed :</b></label>
              <input type="date" id="ps-passed" name="ps-passed">
              <label for="pt-signlo"><b>Sign L.O :</b></label>
              <input type="date" id="ps-signlo" name="ps-signlo">
              <label for="pt-signsnp"><b>Sign SNP :</b></label>
              <input type="date" id="ps-signsnp" name="ps-signsnp">
              <label for="pt-notes"><b>Notes :</b></label>
              <input type="date" id="ps-notes" name="ps-notes">
              <label for="pt-comission"><b>Comission Receipt Date :</b></label>
              <input type="date" id="ps-comission" name="ps-comission">
              <label for="pt-status"><b>Status<i class="fa fa-asterisk" style="font-size:11px;color:red"></i>
                  :</b></label>
              <select name="ps-status">
                <option value="Waiting Approval">Waiting Approval</option>
                <option value="Pending">Pending</option>
                <option value="Cancel/Reject">Cancel/Reject</option>
                <option value="Loan Approved">Loan Approved</option>
              </select>
          </div>
          <div class="modal__footer">
            <button type="reset">Reset</button><button name="submitpersonalsales">Save</button>
          </div>
          </form>
        </div>

      </div>

      <!-- search -->
      <div class="projectsalescontainer-search">
        <form action="" method="post">
          <label for="fromprojectsales"><b>From : </b></label>
          <input type="date" id="projectsalesfrom" name="personalsalesfrom">
          <label for="toprojectsales"><b>To : </b></label>
          <input type="date" id="projectsalesto" name="personalsalesto">
          <button type="reset">Reset</button><button name="searchpsadmin">Search</button>
        </form>
      </div>

      <!-- display search -->
      <div class="projectsalescontainer">
        <form action="#" method="post">
          <p>Total Booked Unit</p>
          <h2>0</h2>
        </form>
      </div>

      <div class="projectsalescontainer">
        <form action="#" method="post">
          <p>Total Converted Unit</p>
          <h2>0</h2>
        </form>
      </div>

      <div class="projectsalescontainer">
        <form action="#" method="post">
          <p>Total Cancelled Unit</p>
          <h2>0</h2>
        </form>
      </div>

      <div class="projectsalescontainer">
        <form action="#" method="post">
          <p>Total Sales Amount</p>
          <h2>0.00</h2>
        </form>
      </div>

      <div class="projectsalescontainer">
        <form action="#" method="post">
          <p>Total Converted Sales Amount</p>
          <h2>0.00</h2>
        </form>
      </div>

      <div class="projectsalescontainer">
        <form action="#" method="post">
          <p>Total Cancelled Sales Amount</p>
          <h2>0.00</h2>
        </form>
      </div>

      <?php
          if(isset($_POST['searchpsadmin'])){
            $personalsalesprojectfrom = $_POST["personalsalesfrom"];
            $personalsalesprojectto = $_POST["personalsalesto"];

            $query = mysqli_query($conn, "SELECT * FROM master_tracking WHERE mt_booking BETWEEN '$personalsalesprojectfrom' AND '$personalsalesprojectto'");

            if(mysqli_num_rows($query)>0){
      ?>

      <table id="myTable">
        <thead>
          <tr class="header">
            <th style="width:50%;">Buyer Name</th>
            <th style="width:20%;">Booking</th>
            <th style="width:15%;">Submit</th>
            <th style="width:10%;">Status</th>
          </tr>
        </thead>
        <tbody>
          <?php 
            foreach($query as $value){
              if($_SESSION["userid"] == $value["mt_agent"]){
                ?>
          <tr>
            <?php echo '<td><a href="updatemastertracking.php?updateMTid='.$value["mt_id"].'" > '.$value["mt_buyername"].' </a></td>'?>
            <td>
              <?php 
                if($value["mt_booking"] != NULL ){
              ?>
              <?=date('d/m/Y', strtotime($value["mt_booking"]))?>
              <?php 
                }
              ?>
            </td>
            <td>
              <?php 
                if($value["mt_submit"] != NULL ){
              ?>
              <?=date('d/m/Y', strtotime($value["mt_submit"]))?>
              <?php 
                }
              ?>
            </td>
            <td>
              <?=$value["mt_status"]?>
            </td>
          </tr>
          <?php
              }
            }
              ?>
        </tbody>
      </table>
      <?php
            }
          }
        ?>


      <!-- display all data -->
      <?php
          $sql = "SELECT * FROM master_tracking";
          $result = mysqli_query($conn, $sql);
          $resultCheck = mysqli_num_rows($result);
        ?>

      <table id="myTable">
        <thead>
          <tr class="header">
            <th style="width:50%;">Buyer Name</th>
            <th style="width:20%;">Booking</th>
            <th style="width:15%;">Submit</th>
            <th style="width:10%;">Status</th>
          </tr>
        </thead>

        <?php
           if ($resultCheck > 0){
            while ($row = mysqli_fetch_assoc($result)){   
              $mtid = $row["mt_id"];
              if($_SESSION["userid"] == $row["mt_agent"]){
          ?>

        <tbody>
          <tr>
            <?php echo '<td><a href="updatemastertracking.php?updateMTid='.$mtid.'" > '.$row["mt_buyername"].' </a></td>'?>
            <td>
              <?php 
                if($row["mt_booking"] != NULL ){
              ?>
              <?= date('d/m/Y', strtotime($row["mt_booking"])); ?>
              <?php 
                }
              ?>
            </td>
            <td>
              <?php 
                if($row["mt_submit"] != NULL ){
              ?>
              <?= date('d/m/Y', strtotime($row["mt_submit"])); ?>
              <?php 
                }
              ?>
            </td>
            <td>
              <?php echo $row["mt_status"]; ?>
            </td>
          </tr>
        </tbody>

        <?php 
            }
          } 
          } 
          ?>

      </table>

    </div>

    <!-- MEETING ROOM -->
    <div id="MeetingRoom" class="tabcontent">
      <hr>
      <h1><i class="fa-regular fa-handshake"></i> Meeting Room <button onclick="openModalAdmin()"><i
            class="fa-solid fa-plus"></i> Add Meeting Room</button></h1>
      <hr>

      <!-- the modal add meeting room -->
      <div id="themodalmeetingroom" class="modal">

        <!-- modal content meeting hub (bagi nmpk kemas)  -->
        <div class="modal-content">
          <span class="close" onclick="closeModalAdmin()">&times;</span>
          <h1>New Meeting Room</h1>
          <div class="container">
            <form action="admindb.php" method="post" enctype="multipart/form-data">
              <label for="meetingroom"><b>Photos :</b></label>
              <input type="file" id="myImage" name="mr-photos">
              <label for="mr-meetingroomname"><b>Meeting Room Name :</b></label>
              <input type="text" placeholder="Meeting Room Name" name="mr-name" required>
              <label for="mr-numberofseat"><b>Number of Seat : </b></label>
              <input type="text" placeholder="Number of Seat" name="mr-numofseat" required>
              <label for="mr-location"><b>Location : </b></label>
              <input type="text" placeholder="Location" name="mr-location" required>
          </div>
          <div class="modal__footer">
            <button type="reset">Reset</button><button name="submitmeetingroom">Save</button>
          </div>
          </form>
        </div>

      </div>

      <!-- display output -->
      <?php
            $sql = "SELECT * FROM meetingroom";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);

              if ($resultCheck > 0){
                while ($row = mysqli_fetch_assoc($result))
                  echo '
                  <div class="cardmeetingroom">
                  <img src="images/'.$row["mr_photos"].'" style="width:100%">
                  <div class="containernewsfeed">
                    <h1><b>'.$row['mr_name'].'</b></h1>
                    <p>'.$row['mr_numofseat'].' seats </p>
                    <p> '.$row['mr_location'].' </p>
                    <a href="http://www.wasap.my/601161885958"><button>Book Now</button></a>
                    <button onclick="openModalAdminEditMeetingRoom()" name="'.$row['mr_id'].'">Edit Info</button>
                  </div>
                </div>';
                                   
        ?>

      <!-- the modal update info meeting room -->
      <div id="themodaleditinfomeetingroom" class="modal">

        <!-- modal content update info meeting hub (bagi nmpk kemas)  -->
        <div class="modal-content">
          <span class="close" onclick="closeModalAdminEditMeetingRoom()">&times;</span>
          <h1>Edit Meeting Room</h1>
          <div class="container">
            <form action="admindb.php" method="post" enctype="multipart/form-data">
              <label for="meetingroom"><b>Photos :</b></label>
              <input type="file" id="myImage" name="mr-photosupdate">
              <label for="mr-meetingroomname"><b>Meeting Room Name :</b></label>
              <input type="text" placeholder="Meeting Room Name" name="mr-nameupdate" required>
              <label for="mr-numberofseat"><b>Number of Seat : </b></label>
              <input type="text" placeholder="Number of Seat" name="mr-numofseatupdate" required>
              <label for="mr-location"><b>Location : </b></label>
              <input type="text" placeholder="Location" name="mr-locationupdate" required>
          </div>
          <div class="modal__footer">
            <button type="reset">Reset</button><button name="submiteditinfomeetingroom">Save</button>
          </div>
          </form>
        </div>

      </div>

      <?php
    }
      ?>


    </div>

    <!-- REAL ESTATE RADAR-->
    <!-- PROJECT CENTER -->
    <div id="ProjectCenter" class="tabcontent">
      <hr>
      <h1><i class="fa-solid fa-hands-holding-circle"></i> Project Center <button onclick="openModalAdmin()"><i
            class="fa-solid fa-plus"></i> New Project </button></h1>
      <hr>

      <!-- the modal project under construction -->
      <div id="themodaluc" class="modal">

        <!-- modal content project under contruction (bagi nmpk kemas) -->
        <div class="modal-content">
          <span class="close" onclick="closeModalAdmin()">&times;</span>
          <h1>New Project Under Construction</h1>
          <div class="container">
            <form action="admindb.php" method="post" enctype="multipart/form-data">
              <label for="projectphotos"><b>Photos :</b></label>
              <input type="file" id="myImage" name="pc-photos">
              <label for="pc-projectname"><b>Project Name :</b></label>
              <input type="text" placeholder="Project Name" name="pc-projectname" required>
              <label for="pc-numberofbedroom"><b>Number of Bedroom : </b></label>
              <input type="text" placeholder="Number of Bedroom" name="pc-numberofbedroom" required>
              <label for="pc-numberofbathroom"><b>Number of Bathroom :</b></label>
              <input type="text" placeholder="Number of Bathroom" name="pc-numberofbathroom" required>
              <label for="pc-price"><b>Price :</b></label>
              <input type="text" placeholder="Price" name="pc-price" required>
              <label for="pc-state"><b>State :</b></label>
              <select name="pc-state" id="state">
                <option value="perak">Perak</option>
                <option value="selangor">Selangor</option>
                <option value="kelantan">Kelantan</option>
                <option value="kedah">Kedah</option>
                <option value="negeri sembilan">Negeri Sembilan</option>
                <option value="johor">Johor</option>
              </select>
              <label for="pc-area"><b>Area :</b></label>
              <input type="text" placeholder="Area" name="pc-area" required>
          </div>
          <div class="modal__footer">
            <button type="reset">Reset</button><button name="submitucproject">Save</button>
          </div>
          </form>
        </div>

      </div>

      <!-- search  -->
      <div class="container">
        <form action="" method="POST">
          <label for="pstate"><b>State :</b></label>
          <select name="statesUC" id="statesUC">
            <option value="perak">Perak</option>
            <option value="selangor">Selangor</option>
            <option value="kelantan">Kelantan</option>
            <option value="kedah">Kedah</option>
            <option value="johor">Johor</option>
            <option value="melaka">Melaka</option>
            <option value="negeri sembilan">Negeri Sembilan</option>
            <option value="pahang">Pahang</option>
            <option value="terengganu">Terengganu</option>
            <option value="perlis">Perlis</option>
          </select>
          <button type="reset">Reset</button><button name="searchpcadmin">Search</button>
        </form>
      </div>

      <!-- display search -->
      <?php

              if(isset($_POST['searchpcadmin'])){
                $searchpcadmin = $_POST['statesUC'];

                $sql = "SELECT * FROM project_center WHERE pc_state='$searchpcadmin'";
                $result=mysqli_query($conn, $sql);
                if($result){
                  if(mysqli_num_rows($result)> 0){
                    while($row=mysqli_fetch_assoc($result)){
                    echo '<a href="https://synergy-realty.my.canva.site/projek-perumahan-baru-setiap-negeri">
                    <div class="cardprojectcenter" >
                    <img src="images/'.$row["pc_photos"].'" style="width:100%">
                    <div class="containerprojectcenter">
                      <h2><b>'.$row['pc_name'].'</b></h2>
                      <p>'.$row['pc_numofbedroom'].' bedroom | '.$row['pc_numofbathroom'].' bathroom</p>
                      <p>'.$row['pc_area'].'</p>
                      <p>RM'.$row['pc_price'].'</p>
                    </div>
                  </div></a>';
                    }
                  }else{
                    echo "Data not found";
                  }
                }else {
                  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }

              } else {
              $sql = "SELECT * FROM project_center";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);

                  if ($resultCheck > 0){
                    while ($row = mysqli_fetch_assoc($result))
                      echo '
                      <a href="https://synergy-realty.my.canva.site/projek-perumahan-baru-setiap-negeri">
                      <div class="cardprojectcenter">
                      <img src="images/'.$row["pc_photos"].'" style="width:100%">
                      <div class="containerprojectcenter">
                        <h2><b>'.$row['pc_name'].'</b></h2>
                        <p>'.$row['pc_numofbedroom'].' bedroom | '.$row['pc_numofbathroom'].' bathroom</p>
                        <p>'.$row['pc_area'].'</p>
                        <p>RM'.$row['pc_price'].'</p>
                      </div>
                    </div></a>';
                  }
                }
                                      
            ?>

    </div>

    <!-- PIC PROJECT -->
    <div id="PICProject" class="tabcontent">
      <hr>
      <h1><i class="fa-solid fa-circle-user"></i> PIC Project </h1>
      <hr>

      <div class="cardPICproject">
        <img src="images/Azrif2.png" style="width:86%">
        <div class="containerPICproject">
          <h3><b>Azrif</b></h3>
          <p>Kampar</p>
          <a href="http://www.wasap.my/60146637375/Kampar"><button>Contact Now</button></a>
        </div>
      </div>

      <div class="cardPICproject">
        <img src="images/hazlinawati.png" style="width:100%">
        <div class="containerPICproject">
          <h3><b>Hazlinawati</b></h3>
          <p>Jeniang</p>
          <a href="http://www.wasap.my/60194549142/Jeniang"><button>Contact Now</button></a>
        </div>
      </div>

      <div class="cardPICproject">
        <img src="images/Idan2.png" style="width:92%">
        <div class="containerPICproject">
          <h3><b>Safrulidan</b></h3>
          <p>Terong</p>
          <a href="http://www.wasap.my/60133219564/Terong"><button>Contact Now</button></a>
        </div>
      </div>

      <div class="cardPICproject">
        <img src="images/teha2.png" style="width:95%">
        <div class="containerPICproject">
          <h3><b>Teha</b></h3>
          <p>Sungkai</p>
          <a href="http://www.wasap.my/60189733680/Sungkai"><button>Contact Now</button></a>
        </div>
      </div>

    </div>

    <!-- FINANCIAL HUB-->
    <!-- PAYMENT VOUCHERS (TAK SIAP LAGI) -->
    <div id="PaymentVouchers" class="tabcontent">
      <hr>
      <h1><i class="fa fa-fw fa-home"></i> Payment Vouchers <button onclick="openModalAdmin()"><i
            class="fa-solid fa-plus"></i> Add Payment Vouchers</button></h1>
      <hr>

      <!-- the modal PV (TK JDI)-->
      <div id="themodalPV" class="modal">

        <!-- modal content PV -->
        <div class="modal-content">
          <span class="close" onclick="closeModalAdmin()">&times;</span>
          <h1>New Payment Vouchers</h1>
          <div class="container">
            <form action="admindb.php" method="post">
              <label for="pv-No."><b>PV No. :</b></label>
              <input type="text" placeholder="PV No." name="pv-no" required>
              <label for="pv-date"><b>PV Date : </b></label>
              <input type="date" placeholder="PV Date" name="pv-date" id="paymentvouchersdate" required>
              <label for="pv-receivedby"><b>Received By : </b></label>
              <input type="text" placeholder="Received By" name="pv-receivedby" required>
              <label for="pv-project"><b>Project : </b></label>
              <input type="text" placeholder="Project" name="pv-project" required>
              <label for="pv-buyer"><b>Buyer : </b></label>
              <input type="text" placeholder="Buyer" name="pv-buyer" required>
              <label for="pv-paymentamount"><b>Payment Amount : </b></label>
              <input type="text" placeholder="Payment Amount" name="pv-paymentamount" required>
              <label for="pv-project"><b>Bank Name : </b></label>
              <input type="text" placeholder="Bank Name" name="pv-bankname" required>
              <label for="pv-buyer"><b>Bank Account : </b></label>
              <input type="text" placeholder="Bank Account" name="pv-bankaccount" required>
          </div>
          <div class="modal__footer">
            <button type="reset">Reset</button><button name="submitpv">Save</button>
          </div>
          </form>
        </div>

      </div>

      <!-- search -->
      <div class="container">
        <form action="#" method="post">
          <label for="pstate"><b>From :</b></label>
          <input type="date" id="PVFrom" name="pvfromdate">
          <label for="parea"><b>To : </b></label>
          <input type="date" id="PVTo" name="pvtodate">
          <button type="reset">Reset</button><button name="submitpv">Search</button>
        </form>
      </div>

      <?php
          if(isset($_POST['searchpv'])){
            $pvfromdate = $_POST["pvfromdate"];
            $pvtodate = $_POST["pvtodate"];

            $query = mysqli_query($conn, "SELECT * FROM payment_vouchers WHERE pv_date BETWEEN '$pvfromdate' AND '$pvtodate'");

            if(mysqli_num_rows($query)>0){
      ?>
      <?php
            }
          }
      ?>
      <!-- display search-->
      <table id="myTable">
        <tr class="header">
          <th style="width:20%;">PV No.</th>
          <th style="width:20%;">PV Date</th>
          <th style="width:50%;">Received By</th>
          <th style="width:10%;">Payment Amount</th>
          <th style="width:10%;">Action</th>
        </tr>
        <tr>
          <td>PVS-431796</td>
          <td>08 JUN 2023</td>
          <td>40% Negotiator's Commission: 93, Lorong Cakera Purnama 12/12, Seksyen 12, 42300 Bandar Puncak Alam,
            Selangor Darul Ehsan</td>
          <td>2,280.00</td>
          <td><a href="pvinvoice.php"><button>Print</button></a></td>
        </tr>
        <tr>
          <td>PVS-436191</td>
          <td>16 JUN 2023</td>
          <td>40% Negotiator's Commission: C2-03-09, JALAN TEMPUA P9 B/2 (JALAN P9 B/2) PRESINT 9 62250 PUTRAJAYA</td>
          <td>1,440.00</td>
          <td><button>Print</button></td>
        </tr>
        <tr>
          <td>PVS-431796-1</td>
          <td>08 JUN 2023</td>
          <td>Marketing Bonus: 423694</td>
          <td>1,140.00</td>
          <td><button>Print</button></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
      </table>

    </div>

    <!-- CALENDAR -->
    <div id="Calendar" class="tabcontent">
      <hr>
      <h1><i class="fa fa-fw fa-home"></i> Calendar</h1>
      <hr>

      <form action="" method="post">
        <div class="container">
          <button class="btn">All</button><button class="btn">Search</button>
          <input type="checkbox" id="myCheck" onclick="myFunction()"> Event

          <p id="text" style="display:none">Checkbox is CHECKED!</p>

        </div>
      </form>

      <!-- letak event kt sini -->
      <div id="calendar"></div>

      <!-- Start popup dialog box -->
      <div class="modal fade" id="event_entry_modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modalLabel">Add New Event</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="img-container">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label for="event_name">Event name</label>
                      <input type="text" name="event_name" id="event_name" class="form-control"
                        placeholder="Enter your event name">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="event_start_date">Event start</label>
                      <input type="date" name="event_start_date" id="event_start_date"
                        class="form-control onlydatepicker" placeholder="Event start date">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="event_end_date">Event end</label>
                      <input type="date" name="event_end_date" id="event_end_date" class="form-control"
                        placeholder="Event end date">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary" onclick="save_event()">Save Event</button>
            </div>
          </div>
        </div>
      </div>
      <!-- End popup dialog box -->

    </div>

    <!-- LEARNING HUB -->
    <!-- MY TRAININGS -->
    <div id="MyTrainings" class="tabcontent">
      <hr>
      <h1><i class="fa fa-fw fa-home"></i> My Trainings </h1>
      <hr>

      <table id="myTable">
        <tr class="header">
          <th style="width:60%;">Title</th>
          <th style="width:40%;">Category</th>
          <th style="width:40%;">Action</th>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td><button> View</button></td>
        </tr>
      </table>

    </div>

    <!-- SYNERGY REALTY ACADEMY -->
    <div id="Academy" class="tabcontent">
      <hr>
      <h1><i class="fa fa-fw fa-home"></i> Synergy Realty Academy </h1>
      <hr>

      <table id="myTable">
        <tr class="header">
          <th style="width:60%;">Title</th>
          <th style="width:40%;">Category</th>
          <th style="width:40%;">Action</th>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td><button> View</button></td>
        </tr>
      </table>

    </div>

    <!-- TUTORIALS -->
    <div id="Tutorials" class="tabcontent">
      <hr>
      <h1><i class="fa fa-fw fa-home"></i> Tutorials </h1>
      <hr>

      <table id="myTable">
        <tr class="header">
          <th style="width:60%;">Title</th>
          <th style="width:40%;">Category</th>
          <th style="width:40%;">Action</th>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td><button> View</button></td>
        </tr>
      </table>

    </div>

    <!-- STORE HUB -->
    <!-- SYNERGY REALTY STORE -->
    <div id="Store" class="tabcontent">
      <hr>
      <h1><i class="fa fa-fw fa-home"></i> Synergy Realty Store <button onclick="openModalAdmin()"><i
            class="fa-solid fa-plus"></i> Add Product</button></h1>
      <hr>

      <!-- the modal store -->
      <div id="themodalstore" class="modal">

        <!-- modal content store -->
        <div class="modal-content">
          <span class="close" onclick="closeModalAdmin()">&times;</span>
          <h1>New Product</h1>
          <div class="container">
            <form action="admindb.php" method="post" enctype="multipart/form-data">
              <label for="store"><b>Photos :</b></label>
              <input type="file" id="myImage" name="s-photos">
              <label for="s-productname"><b>Product Name : </b></label>
              <input type="text" placeholder="Product Name" name="s-productname" id="storeproductname" required>
              <label for="s-price"><b>Price : </b></label>
              <input type="text" placeholder="Price" name="s-price" required>
          </div>
          <div class="modal__footer">
            <button type="reset">Reset</button><button name="submitstore">Save</button>
          </div>
          </form>
        </div>

      </div>

      <?php
      $sql = "SELECT * FROM store";
      $result = mysqli_query($conn, $sql);
      $resultCheck = mysqli_num_rows($result);

      if ($resultCheck > 0){
        while ($row = mysqli_fetch_assoc($result))
       echo '<div class="cardprojectcenter">
        <img src="images/'.$row["s_photos"].'" style="width:100%">
        <div class="containerPICproject">
          <h3><b>'.$row["s_name"].'</b></h3>
          <p>RM'.$row["s_price"].'</p>
          <a href="http://www.wasap.my/601161885958"><button>Contact Now</button></a>
        </div>
      </div>';
      }
      ?>

    </div>

    <!-- SETTINGS -->
    <!-- PROFILE -->
    <div id="Profile" class="tabcontent">
      <hr>
      <h1><i class="fa fa-fw fa-home"></i> Profile</h1>
      <hr>

      <!-- Tab Profile -->
      <div class="tabdashboard">
        <button class="tabdashboardlinks" onclick="openDashboard(event, 'ProfileDetails')"><i
            class="fa-solid fa-building"></i> Profile</button>
        <button class="tabdashboardlinks" onclick="openDashboard(event, 'ChangePassword')"><i
            class="fa-solid fa-person-shelter"></i> Change Password</button>
      </div>

      <!-- PROFILE -->
      <div id="ProfileDetails" class="tabdashboardcontent">
        <h1>Profile</h1>

        <?php

              $sql = "SELECT * FROM users";
              $result = mysqli_query($conn, $sql);
              $resultCheck = mysqli_num_rows($result);
                if ($resultCheck > 0){
                  while ($row = mysqli_fetch_assoc($result)){ 
                    if($_SESSION['userid'] == $row["u_id"]){
            ?>

        <!--kena ambik gmbr yg size 1:1 shja (gmbr passport)-->
        <div class="container-team-sales">
          <form action="#" method="post">
            <div class="imgcontainer">
              <img src="gmbrprofile.jpg" alt="Avatar" class="avatar" style="width: 200px">
            </div>

            <div class="profilecontainer">
              <h2>
                <?php echo $row["u_nickname"] ?>
              </h2>
              <p>
                <?php echo $row["u_fullname"] ?>
              </p>
              <p>
                <?php echo $row["u_position"] ?>
              </p>
              <button href="">Facebook</button>
              <button href="">Youtube</button>
            </div>

          </form>
        </div>

        <div class="container-settings-profile">
          <form action="#" method="post">
            <h2>About</h2>
            <div class="floatleftprofile">
              <b><i class="fa-solid fa-phone"></i> Mobile</b>
              <p>
                <?php echo $row["u_phone"] ?>
              </p>
              <p><b><i class="fa-solid fa-globe"></i> Country</b></p>
              <p>Malaysia</p>
              <p><b><i class="fa-solid fa-cake-candles"></i> Birthday</b></p>
              <p>
                <?php echo date('d/m/Y', strtotime($row["u_birthday"])) ?>
              </p>

              <p><b><i class="fa-solid fa-envelope"></i> Email</b></p>
              <p>
                <?php echo $row["u_email"] ?>
              </p>
              <p><b><i class="fa-solid fa-code-branch"></i> Branch</b></p>
              <p>Synergy Realty</p>

              <p><b> <i class="fa-solid fa-chalkboard-user"></i> Introducer</b></p>
              <?php 
                if($row["u_introducer"] == true){
              ?>
              <p>
                <?php echo $row["u_introducer"] ?>
              </p>
              <?php
                }else
                echo "None";
              ?>
            </div>

            <h2>Bank Account</h2>
            <p><b><i class="fa-solid fa-building-columns"></i> Bank Name</b></p>
            <p>
              <?php echo $row["u_bankname"] ?>
            </p>
            <p><b> <i class="fa-solid fa-hands-holding-child"></i> Holder Name</b></p>
            <p>
              <?php echo $row["u_holderbankname"] ?>
            </p>
            <p><b><i class="fa-brands fa-cc-mastercard"></i> Account Number</b></p>
            <p>
              <?php echo $row["u_bankaccno"] ?>
            </p>
          </form>
        </div>

        <?php
            }
          }
        }                     
        ?>

      </div>

      <!-- CHANGE PASSWORD -->
      <div id="ChangePassword" class="tabdashboardcontent">
        <h1>Change Password</h1>
        <div class="container">
          <form action="" method="post">
            <label for="newpassword"><b>New Password :</b></label>
            <div>
              <input type="password" placeholder="Enter your new password" name="cp-newpassword" required>
            </div>
            <label for="confirmnewpassword"><b>Confirm New Password : </b></label>
            <div>
              <input type="password" placeholder="Confirm your new password" name="cp-confirmnewpassword" required>
            </div>
            <button name="submitupdatepassword">Update Password</button>
          </form>
        </div>
      </div>

      <?php

      if(isset($_POST["submitupdatepassword"])){

        $newpassword = $_POST["cp-newpassword"];
        $confirmnewpassword = $_POST["cp-confirmnewpassword"];
        $changepasswordid = $_SESSION['userid'];

        if($newpassword == $confirmnewpassword){
        $sql = "UPDATE users SET u_password='$newpassword' WHERE u_id=$changepasswordid";
        $result = mysqli_query($conn, $sql);
        } else{
          echo  '<script>
                      window.location.href = "admin.php";
                      alert("Password does not match!")
                  </script>';
        }

        if (!$result){
          die("query failed".mysqli_error());
        }else{
          echo  '<script>
                  window.location.href = "admin.php";
                  alert("You have succcessfully updated the password")
              </script>';
        }
      }

    ?>

    </div>

  </div>

  <!-- END OF PAGE CONTENT -->

  <!-- START OF FOOTER-->
  <footer class="site-footer">
    <div class="container-footer">
      <div class="row">

        <div class="col-lg-12 col-12">
          <p class="copyright-text">Copyright © Synergy Realty 2022 </p>
        </div>

      </div>
    </div>
  </footer>
  <!-- END OF FOOTER -->

  <!-- JAVASCRIPT -->
  <!-- ACCORDIAN -->
  <script type="text/javascript">

    /*accordian*/
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
      acc[i].addEventListener("click", function () {
        /* Toggle between adding and removing the "active" class,
        to highlight the button that controls the panel */
        this.classList.toggle("active");

        /* Toggle between hiding and showing the active panel */
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
          panel.style.display = "none";
        } else {
          panel.style.display = "block";
        }
      });
    }


  </script>

  <!--DATE ERROR HANDLING-->
  <script>

    /*date*/
    var date = new Date();
    var fromdate = date.getDate();
    var todate = date.getDate();
    var month = date.getMonth() + 1;

    /*time*/
    var hour = date.getHours();
    var minutes = date.getMinutes();


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
    var minDate = year + "-" + month + "-" + fromdate + "T" + hour + ":" + minutes;
    var minDateNewsfeed = year + "-" + month + "-" + fromdate;
    var maxDate = year + "-" + month + "-" + todate;
    var minMonth = year + "-" + month;
    console.log(minDate);

    /*PV DATE*/
    document.getElementById("PVFrom").setAttribute('max', maxDate);
    document.getElementById("PVFrom").setAttribute('value', maxDate);
    document.getElementById("PVTo").setAttribute('max', maxDate);
    document.getElementById("PVTo").setAttribute('value', maxDate);

    /*TEAM SALES DATE(SEARCH)*/
    document.getElementById("teamsalesprojectfrom").setAttribute('max', maxDate);
    document.getElementById("teamsalesprojectfrom").setAttribute('value', maxDate);
    document.getElementById("teamsalesprojectto").setAttribute('max', maxDate);
    document.getElementById("teamsalesprojectto").setAttribute('value', maxDate);

    /*PERSONAL SALES DATE(SEARCH)*/
    document.getElementById("projectsalesfrom").setAttribute('max', maxDate);
    document.getElementById("projectsalesfrom").setAttribute('value', maxDate);
    document.getElementById("projectsalesto").setAttribute('max', maxDate);
    document.getElementById("projectsalesto").setAttribute('value', maxDate);

    /*TEAM SALES PROJECT (MODAL - TK JDI)*/
    document.getElementById("ts-bookingproject").setAttribute('min', minDate);
    document.getElementById("ts-bookingproject").setAttribute('value', minDate);
    document.getElementById("ts-submitproject").setAttribute('min', minDate);
    document.getElementById("ts-submitproject").setAttribute('value', minDate);
    document.getElementById("ts-confirmationproject").setAttribute('min', minDate);
    document.getElementById("ts-confirmationproject").setAttribute('value', minDate);
    document.getElementById("ts-lppsaformproject").setAttribute('min', minDate);
    document.getElementById("ts-lppsaformproject").setAttribute('value', minDate);
    document.getElementById("ts-hodoutproject").setAttribute('min', minDate);
    document.getElementById("ts-hodoutproject").setAttribute('value', minDate);
    document.getElementById("ts-hodinproject").setAttribute('min', minDate);
    document.getElementById("ts-hodinproject").setAttribute('value', minDate);
    document.getElementById("ts-mindefproject").setAttribute('min', minDate);
    document.getElementById("ts-mindefproject").setAttribute('value', minDate);
    document.getElementById("ts-lppsaproject").setAttribute('min', minDate);
    document.getElementById("ts-lppsaproject").setAttribute('value', minDate);
    document.getElementById("ts-passedproject").setAttribute('min', minDate);
    document.getElementById("ts-passedproject").setAttribute('value', minDate);
    document.getElementById("ts-signloproject").setAttribute('min', minDate);
    document.getElementById("ts-signloproject").setAttribute('value', minDate);
    document.getElementById("ts-signsnpproject").setAttribute('min', minDate);
    document.getElementById("ts-signsnpproject").setAttribute('value', minDate);
    document.getElementById("ts-notesproject").setAttribute('min', minDate);
    document.getElementById("ts-notesproject").setAttribute('value', minDate);
    document.getElementById("ts-comissionproject").setAttribute('min', minDate);
    document.getElementById("ts-comissionproject").setAttribute('value', minDate);

    /*PERSONAL SALES(MODAL)*/
    document.getElementById("ps-booking").setAttribute('min', minDate);
    document.getElementById("ps-booking").setAttribute('value', minDate);
    document.getElementById("ps-submit").setAttribute('min', minDate);
    document.getElementById("ps-submit").setAttribute('value', minDate);
    document.getElementById("ps-confirmation").setAttribute('min', minDate);
    document.getElementById("ps-confirmation").setAttribute('value', minDate);
    document.getElementById("ps-lppsaform").setAttribute('min', minDate);
    document.getElementById("ps-lppsaform").setAttribute('value', minDate);
    document.getElementById("ps-hodout").setAttribute('min', minDate);
    document.getElementById("ps-hodout").setAttribute('value', minDate);
    document.getElementById("ps-hodin").setAttribute('min', minDate);
    document.getElementById("ps-hodin").setAttribute('value', minDate);
    document.getElementById("ps-mindef").setAttribute('min', minDate);
    document.getElementById("ps-mindef").setAttribute('value', minDate);
    document.getElementById("ps-lppsa").setAttribute('min', minDate);
    document.getElementById("ps-lppsa").setAttribute('value', minDate);
    document.getElementById("ps-passed").setAttribute('min', minDate);
    document.getElementById("ps-passed").setAttribute('value', minDate);
    document.getElementById("ps-signlo").setAttribute('min', minDate);
    document.getElementById("ps-signlo").setAttribute('value', minDate);
    document.getElementById("ps-signsnp").setAttribute('min', minDate);
    document.getElementById("ps-signsnp").setAttribute('value', minDate);
    document.getElementById("ps-notes").setAttribute('min', minDate);
    document.getElementById("ps-notes").setAttribute('value', minDate);
    document.getElementById("ps-comission").setAttribute('min', minDate);
    document.getElementById("ps-comission").setAttribute('value', minDate);

    /*DASHBOARD > NEWSFEED*/
    document.getElementById("newsfeeddate").setAttribute('min', minDateNewsfeed);
    document.getElementById("newsfeeddate").setAttribute('value', minDateNewsfeed);

    /*FINANCIAL > PV */
    document.getElementById("pvFrom").setAttribute('min', minDate);
    document.getElementById("pvFrom").setAttribute('value', minDate);
    document.getElementById("pvTo").setAttribute('min', minDate);
    document.getElementById("pvTo").setAttribute('value', minDate);
    /*(modals)*/
    document.getElementById("paymentvouchersdate").setAttribute('min', minDate);
    document.getElementById("paymentvouchersdate").setAttribute('value', minDate);

    /*LEADS*/
    document.getElementById("ldmonthyearmodals").setAttribute('value', minMonth);
    document.getElementById("ldmonthyearsearch").setAttribute('value', minMonth);


  </script>

  <!--DYNAMIC CALENDAR-->
  <script>
    $(document).ready(function () {

      $('#calendarteam').fullCalendar({
        /*tk jdi*/
        header: {
          left: 'month',
          center: 'title'
        },
        events: [{
          title: 'Example',
          start: '2024-14-18T09:00',
          end: '2024-4-18T13:00',
          color: 'blue',
          textColor: 'black'
        }]
      });

      $('#calendar').fullCalendar({
        /*tk jdi*/
        events: [{
          title: 'Example',
          start: '2024-14-18T09:00',
          end: '2024-4-18T13:00',
          color: 'blue',
          textColor: 'black'
        }]
      });
    });
  </script>

</body>

<!--CALENDAR BOLEH TMBH EVENT(TK JDI)-->
<script>
  $(document).ready(function () {
    display_events();
  }); //end document.ready block

  function display_events() {
    var events = new Array();
    $.ajax({
      //url: 'display_event.php',  
      dataType: 'json',
      success: function (response) {

        var result = response.data;
        $.each(result, function (i, item) {
          events.push({
            event_id: result[i].event_id,
            title: result[i].title,
            start: result[i].start,
            end: result[i].end,
            color: result[i].color,
            url: result[i].url
          });
        })
        var calendar = $('#calendar').fullCalendar({
          defaultView: 'month',
          timeZone: 'local',
          editable: true,
          selectable: true,
          selectHelper: true,
          select: function (start, end) {
            alert(start);
            alert(end);
            $('#event_start_date').val(moment(start).format('YYYY-MM-DD'));
            $('#event_end_date').val(moment(end).format('YYYY-MM-DD'));
            $('#event_entry_modal').modal('show');
          },
          events: events,
          eventRender: function (event, element, view) {
            element.bind('click', function () {
              alert(event.event_id);
            });
          }
        }); //end fullCalendar block	
      },//end success block
      error: function (xhr, status) {
        alert(response.msg);
      }
    });//end ajax block	
  }

  function save_event() {
    var event_name = $("#event_name").val();
    var event_start_date = $("#event_start_date").val();
    var event_end_date = $("#event_end_date").val();
    if (event_name == "" || event_start_date == "" || event_end_date == "") {
      alert("Please enter all required details.");
      return false;
    }
    $.ajax({
      url: "save_event.php",
      type: "POST",
      dataType: 'json',
      data: { event_name: event_name, event_start_date: event_start_date, event_end_date: event_end_date },
      success: function (response) {
        $('#event_entry_modal').modal('hide');
        if (response.status == true) {
          alert(response.msg);
          location.reload();
        }
        else {
          alert(response.msg);
        }
      },
      error: function (xhr, status) {
        console.log('ajax error = ' + xhr.statusText);
        alert(response.msg);
      }
    });
    return false;
  }
</script>

</html>
