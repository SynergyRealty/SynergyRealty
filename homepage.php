<?php
  include 'dbconnect.php';

  session_start();

  //echo $_SESSION['userid'], $_SESSION['userposition'];                          
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Team - Synergy Realty</title>

  <!-- CSS FILES -->
  <link href="homepage.css" rel="stylesheet">
  <!-- Load an icon library -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- JAVASCRIPT FILES -->
  <script src="homepage.js"></script>

  <!-- DYNAMIC CALENDAR -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>

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
      <!--<div class="tab">
        <button class="tablinks" onclick="openNav(event, 'TeamSales')"><i class="fa-solid fa-comments-dollar"></i> Team
          Sales</button>
      </div>-->
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
      <a href="https://drive.google.com/drive/folders/1Z7T8Wc-yLzTv9YcbovkMC_-1dKlfDr_b?usp=drive_link"><button class="tablinks" onclick="openNav(event, 'Leads')"><i class="fa-solid fa-chalkboard-user"></i>
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

        <a href="logout.php"><button class="tablinks"><i class="fa-solid fa-right-from-bracket"></i> Log
            Out </button></a>
      </div>
    </div>
  </div>
  <!-- END OF NAV -->

  <!-- START OF PAGE CONTENT -->
  <div class="main">

    <!-- DASHBOARD -->
    <div id="Dashboard" class="tabcontent">
      <hr>
      <h1><i class="fa fa-fw fa-home"></i> My Dashboard </h1>
      <hr>
      <!-- TAB DASHBOARD -->
      <div class="tabdashboard">
        <button class="tabdashboardlinks" onclick="openDashboard(event, 'Newsfeed')" id="defaultOpen"><i
            class="fa-regular fa-newspaper"></i> Newsfeed</button>
        <button class="tabdashboardlinks" onclick="openDashboard(event, 'Summary')"><i
            class="fa-solid fa-clipboard-list"></i> Summary</button>
        <button class="tabdashboardlinks" onclick="openDashboard(event, 'Project')"><i class="fa-solid fa-building"></i>
          Project</button>
        <button class="tabdashboardlinks" onclick="openDashboard(event, 'Subsales')"><i
            class="fa-solid fa-person-shelter"></i> Subsales</button>
      </div>

      <!-- NEWSFEED-->
      <div id="Newsfeed" class="tabdashboardcontent">
        <h1>Newsfeed</h1>

        <!-- display output -->
        <?php

                    $sql = "SELECT * FROM newsfeed";
                    $result = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($result);

                      if ($resultCheck > 0){
                        while ($row = mysqli_fetch_assoc($result))
                          echo '
                        <div class="cardnewsfeed">
                        <img src="images/'.$row["nf_photos"].'" style="width:100%">
                        <div class="containernewsfeed">
                          <h4><b>'.$row["nf_topic"].'</b></h4>
                          <p>'.date('d-m-Y', strtotime($row["nf_date"])).'</p>
                        </div>
                      </div>';
                      }
                                          
                    ?>

      </div>

      <!-- SUMMARY (buat 2 column) -->
      <div id="Summary" class="tabdashboardcontent">
        <h1>Summary</h1>

        <!-- TEAM SIZE -->
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

        <!-- TEAM SALES -->
        <div class="containersummary">
          <h3><i class="fa-solid fa-universal-access"></i><b> Team Sales in 2024</b></h3>
          <p>Total Team Sales (including personal sales)</p>
          <h2><b>RM0</b></h2>
          <!--<hr>
          <h4>TEAM SALES BY TYPE</h4>
          <p><i class="fa-solid fa-circle"></i> Team Project Sales</p>
          <h2><b>RM0 (0%)</b></h2>
          <p><i class="fa-solid fa-circle"></i> Total Team Subsales - Sale</p>
          <h2><b>0 (0%)</b></h2>-->
        </div>

        <!-- CAMPAIGN TRACKER -->
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

        <!-- PROJECT PODIUM -->
        <div class="containerproject">
          <h3><i class="fa-solid fa-building-wheat"></i> Project</h3>
          <p>Top Agent</p>
          <h2><b>0</b></h2>
        </div>

        <!-- PROJECT SALES -->
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

        <!-- CANCELLED UNIT -->
        <div class="containerproject">
          <h3><i class="fa-solid fa-rectangle-xmark"></i> Cancelled Unit</h3>
          <h2><b>0</b></h2>
        </div>

      </div>

      <!-- SUBSALES (buat 2 column)-->
      <div id="Subsales" class="tabdashboardcontent">
        <h1>Subsales</h1>

        <!-- SUBSALES PODIUM -->
        <div class="containersubsales">
          <h3><i class="fa-solid fa-building-user"></i> SUBSALES</h3>
          <p>Top Agent</p>
          <h2><b>0</b></h2>
        </div>

        <!-- CURRENT PROGRESS SUBSALES -->
        <div class="containersubsales">
          <h3><b>TROOPER</b></h3>
        </div>

        <!-- SUBSALE SALES -->
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

        <!-- CANCELLED UNIT -->
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
      <!-- TAB MY TEAM -->
      <div class="tabdashboard">
        <button class="tabdashboardlinks" onclick="openDashboard(event, 'Members')"><i
            class="fa-solid fa-users-between-lines"></i> Members</button>
        <button class="tabdashboardlinks" onclick="openDashboard(event, 'Birthdays')"><i
            class="fa-solid fa-cake-candles"></i> Birthdays</button>
      </div>

      <!-- MEMBERS -->
      <div id="Members" class="tabdashboardcontent">
        <h1>Members </h1>

        <!--search-->
        <div class="container">
          <form action="" method="get">
            <label for="uname"><b>Full Name :</b></label>
            <input type="text" placeholder="Full Name" name="uname" value="<?php 
            if(isset($_GET['uname'])){echo $_GET['uname'];}?>">
            <button type="reset">Reset</button><button>Search</button>
          </form>
        </div>

        <!--display search-->
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
            <td>0<?= $items['u_phone']; ?>
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

      <!-- BIRTHDAYS -->
      <div id="Birthdays" class="tabdashboardcontent">
        <h1></i>Birthdays</h1>

        <form action="#" method="post">
          <div class="container">
            <button>All</button><button>My Registered Event</button>
            <input type="checkbox" id="myCheck" onclick="myFunction()"> Team Birthday
          </div>
        </form>

        <!-- (tmbh modal utk tambah event) -->
        <div id="calendarteam"></div>
      </div>


    </div>

    <!-- PERSONAL SALES -->
    <div id="ProjectSales" class="tabcontent">
      <hr>
      <h1><i class="fa-solid fa-person-chalkboard"></i> Personal Sales</h1>
      <hr>

      <div class="projectsalescontainer-search">
        <form action="" method="post">
          <label for="fromprojectsales"><b>From : </b></label>
          <input type="date" id="projectsalesfrom" name="personalsalesfrom">
          <label for="toprojectsales"><b>To : </b></label>
          <input type="date" id="projectsalesto" name="personalsalesto">
          <button type="reset">Reset</button><button name="searchpsagent">Search</button>
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
          <h2>0</h2>
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
          if(isset($_POST['searchpsagent'])){
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
            <td>
              <?=$value["mt_buyername"]?>
            </td>
            <td>
              <?=date('d/m/Y', strtotime($value["mt_booking"]))?>
            </td>
            <td>
              <?=date('d/m/Y', strtotime($value["mt_submit"]))?>
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
          } else {
        ?>

      <!-- display all data -->
      <?php
          $sql = "SELECT * FROM master_tracking";
          $result = mysqli_query($conn, $sql);
          $resultCheck = mysqli_num_rows($result);
        ?>

      <table id="myTable">
        <tr class="header">
          <th style="width:50%;">Buyer Name</th>
          <th style="width:20%;">Booking</th>
          <th style="width:15%;">Submit</th>
          <th style="width:10%;">Status</th>
        </tr>

        <?php
           if ($resultCheck > 0){
            while ($row = mysqli_fetch_assoc($result)){   
              if($_SESSION["userid"] == $row["mt_agent"]){
          ?>

        <tr>
          <td>
            <?php echo $row["mt_buyername"]; ?>
          </td>
          <td>
            <?php echo date('d/m/Y', strtotime($row["mt_booking"])); ?>
          </td>
          <td>
            <?php echo date('d/m/Y', strtotime($row["mt_submit"])); ?>
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

      </table>
      <?php } ?>

    </div>

    <!-- MEETING ROOM -->
    <div id="MeetingRoom" class="tabcontent">
      <hr>
      <h1><i class="fa-regular fa-handshake"></i> Meeting Room</h1>
      <hr>

      <!-- Display Output-->
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
                    <h2><b>'.$row['mr_name'].'</b></h2>
                    <p>'.$row['mr_numofseat'].' seats</p>
                    <a href="http://www.wasap.my/601161885958"><button>Book Now</button></a>
                  </div>
                </div>';
              }
                                  
        ?>


    </div>

    <!-- REAL ESTATE RADAR-->
    <!-- PROJECT CENTER -->
    <div id="ProjectCenter" class="tabcontent">
      <hr>
      <h1><i class="fa-solid fa-hands-holding-circle"></i> Project Center</h1>
      <hr>

      <!--search -->
      <div class="container">
        <form method="post">
          <label for="pstate"><b>State :</b></label>
          <select name="statesUC">
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
          <button type="reset">Reset</button><button name="searchpc">Search</button>
        </form>
      </div>


      <!-- Display All Output (INTERFACE : CARD BERTERABUR) -->
      <?php

                /*$sql = "SELECT * FROM project_center";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);

                  if ($resultCheck > 0){
                    while ($row = mysqli_fetch_assoc($result))
                      echo '
                      <a href="https://synergy-realty.my.canva.site/projek-perumahan-baru-setiap-negeri">
                      <div class="cardprojectcenter" >
                      <img src="images/'.$row["pc_photos"].'" style="width:100%">
                      <div class="containerprojectcenter">
                        <h2><b>'.$row['pc_name'].'</b></h2>
                        <p>'.$row['pc_numofbedroom'].' bedroom | '.$row['pc_numofbathroom'].' bathroom</p>
                        <p>'.$row['pc_area'].'</p>
                        <p>RM'.$row['pc_price'].'</p>
                      </div>
                    </div></a>';
                  }*/

            ?>


      <!-- display search -->
      <?php

              if(isset($_POST['searchpc'])){
                $searchpc = $_POST['statesUC'];

                $sql = "SELECT * FROM project_center WHERE pc_state='$searchpc'";
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
                    echo '<h2>Data not found</h2>';
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
      <h1><i class="fa-solid fa-circle-user"></i> PIC Project</h1>
      <hr>

      <div class="cardPICproject">
        <img src="images/Azrif2.png" style="width:86%">
        <div class="containerPICproject">
          <h3><b>Kampar</b></h3>
          <p>Lekir</p>
          <a href="http://www.wasap.my/60146637375/Lekir"><button>Contact Now</button></a>
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

      <!-- display search -->
      <?php

              if(isset($_POST['searchpic'])){
                $searchpc = $_POST['statesUC'];

                $sql = "SELECT * FROM pic_project WHERE pic_location='$searchpic'";
                $result=mysqli_query($conn, $sql);
                if($result){
                  if(mysqli_num_rows($result)> 0){
                    while($row=mysqli_fetch_assoc($result)){
                      echo '
                      <div class="cardPICproject">
                      <img src="images/'.$row["pic_photos"].'" style="width:100%">
                      <div class="containerPICproject">
                        <h3><b>'.$row["pic_name"].'</b></h3>
                        <p>'.$row["pic_location"].'</p>
                        <a href="http://www.wasap.my/601161885958"><button>Contact Now</button></a>
                      </div>
                    </div>';
                    }
                  }else{
                    echo '<h2>Data not found</h2>';
                  }
                }else {
                  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }

              }

          ?>

      <!-- display output (buat modals setiap cards - letak details PIC project)-->
      <?php
                $sql = "SELECT * FROM pic_project";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);

                  if ($resultCheck > 0){
                    while ($row = mysqli_fetch_assoc($result))
                      echo '
                      <div class="cardPICproject">
                      <img src="images/'.$row["pic_photos"].'" style="width:100%">
                      <div class="containerPICproject">
                        <h3><b>'.$row["pic_name"].'</b></h3>
                        <p>'.$row["pic_location"].'</p>
                        <a href="http://www.wasap.my/601161885958"><button>Contact Now</button></a>
                      </div>
                    </div>';
                  }
                                      
      ?>

      <!-- the modal detail PIC  -->
      <div id="themodalPIC" class="modal">


        <!-- modal content -->
        <div class="modal-content">
          <span class="close" onclick="closeModal()">&times;</span>
          <h1>PIC Project Details</h1>
          <div class="container">
            <h3>Leads Details</h3>
            <form action="#" method="post">
              <label for="pstate"><b>Name :</b></label>
              <input type="text" placeholder="Name" name="ename" required>
              <label for="parea"><b>Email : </b></label>
              <input type="email" placeholder="Email" name="e-email" required>
              <label for="parea"><b>Contact Number : </b></label>
              <input type="text" placeholder="Contact Number" name="econtactnumber" required>
            </form>
          </div>
          <div class="modal__footer">
            <button type="reset">Reset</button><button>Search</button>
          </div>
        </div>

      </div>

    </div>

    <!-- FINANCIAL HUB-->
    <!-- PAYMENT VOUCHERS  -->
    <div id="PaymentVouchers" class="tabcontent">
      <hr>
      <h1><i class="fa-solid fa-file-invoice"></i> Payment Vouchers</h1>
      <hr>

      <!-- search -->
      <div class="container">
        <form action="#" method="post">
          <label for="pstate"><b>From :</b></label>
          <input type="date" id="PVFrom" name="birthday">
          <label for="parea"><b>To : </b></label>
          <input type="date" id="PVTo" name="birthday">
          <button type="reset">Reset</button><button>Search</button>
        </form>
      </div>

      <!-- display output -->
      <table id="myTable">
        <tr class="header">
          <th style="width:20%;">PV No.</th>
          <th style="width:20%;">PV Date</th>
          <th style="width:30%;">Paid For</th>
          <th style="width:13%;">Payment Type</th>
          <th style="width:10%;">Payment Amount</th>
          <th style="width:10%;">Action</th>
        </tr>
        <tr>
          <td>PVS-431796</td>
          <td>08 JUN 2023</td>
          <td>40% Negotiator's Commission: 93, Lorong Cakera Purnama 12/12, Seksyen 12, 42300 Bandar Puncak Alam,
            Selangor Darul Ehsan</td>
          <td>Commission</td>
          <td>2,280.00</td>
          <td><button>Print</button></td>
        </tr>
        <tr>
          <td>PVS-436191</td>
          <td>16 JUN 2023</td>
          <td>40% Negotiator's Commission: C2-03-09, JALAN TEMPUA P9 B/2 (JALAN P9 B/2) PRESINT 9 62250 PUTRAJAYA</td>
          <td>Commission</td>
          <td>1,440.00</td>
          <td><button>Print</button></td>
        </tr>
        <tr>
          <td>PVS-431796-1</td>
          <td>08 JUN 2023</td>
          <td>Marketing Bonus: 423694</td>
          <td>Overriding</td>
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
      <h1><i class="fa-solid fa-calendar-days"></i> Calendar</h1>
      <hr>

      <form action="#" method="post">
        <div class="container">
          <button class="btn">All</button><button class="btn">Search</button>
          <input type="checkbox" id="myCheck" onclick="myFunction()"> Event

          <p id="text" style="display:none">Checkbox is CHECKED!</p>

        </div>
      </form>

      <!-- tambah modal utk tmbh events  -->
      <div id="calendar"></div>
    </div>

    <!-- LEARNING HUB -->
    <!-- MY TRAININGS -->
    <div id="MyTrainings" class="tabcontent">
      <hr>
      <h1><i class="fa-solid fa-chalkboard"></i> My Trainings</h1>
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

      </form>
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
      <h1><i class="fa-solid fa-laptop-file"></i> Tutorials</h1>
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
      <h1><i class="fa fa-fw fa-home"></i> Synergy Realty Store </h1>
      <hr>

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
      <h1><i class="fa-solid fa-gear"></i> Settings</h1>
      <hr>

      <!-- TAB PROFILE -->
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
          <form action="" method="post">
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
                <?=date('d/m/Y', strtotime($row["u_birthday"])) ?>
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
              <input type="password" placeholder="Enter your new password" name="snewpassword" required>
            </div>
            <label for="confirmnewpassword"><b>Confirm New Password : </b></label>
            <div>
              <input type="password" placeholder="Confirm your new password" name="sconfirmnewpassword" required>
            </div>
            <button name="submitupdatepassword">Update Password</button>
          </form>
        </div>
      </div>

      <?php

          if(isset($_POST["submitupdatepassword"])){

            $newpassword = $_POST["snewpassword"];
            $confirmnewpassword = $_POST["sconfirmnewpassword"];
            $changepasswordid = $_SESSION['userid'];

            if($newpassword == $confirmnewpassword){
            $sql = "UPDATE users SET u_password='$newpassword' WHERE u_id=$changepasswordid";
            $result = mysqli_query($conn, $sql);
            } else {
              echo  '<script>
              window.location.href = "homepage.php";
              alert("Password does not match!")
              </script>';
            }

            if (!$result){
              die("query failed".mysqli_error());
            }else{
              echo  '<script>
              window.location.href = "homepage.php";
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

  <!-- ACCORDION NAVIGATION-->
  <script type="text/javascript">

    /*accordion*/
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

  <!-- ACCORDION FILTER-->
  <script type="text/javascript">

    /*accordion*/
    var acc = document.getElementsByClassName("filter");
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

    var date = new Date();

    /*date*/
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
    var maxDate = year + "-" + month + "-" + todate;
    var minMonth = year + "-" + month;
    console.log(year);

    /*PV DATE*/
    document.getElementById("PVFrom").setAttribute('max', maxDate);
    document.getElementById("PVFrom").setAttribute('value', maxDate);
    document.getElementById("PVTo").setAttribute('max', maxDate);
    document.getElementById("PVTo").setAttribute('value', maxDate);

    /*PROJECT SALES DATE*/
    document.getElementById("projectsalesfrom").setAttribute('max', maxDate);
    document.getElementById("projectsalesfrom").setAttribute('value', maxDate);
    document.getElementById("projectsalesto").setAttribute('max', maxDate);
    document.getElementById("projectsalesto").setAttribute('value', maxDate);

    /*LEADS*/
    document.getElementById("ldmonthyearsearch").setAttribute('value', minMonth);

    /*MEETING ROOM DATE*/
    document.getElementById("meetingroomdatetime").setAttribute('min', minDate);
    document.getElementById("meetingroomdatetime").setAttribute('value', minDate);


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

</html>