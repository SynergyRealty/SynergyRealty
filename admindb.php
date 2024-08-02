<?php
  include 'dbconnect.php';

  //ADD NEWSFEED
  if(isset($_POST["submitnewsfeed"])){

    //UPLOAD IMAGES
    $photos = time() . '_' . ($_FILES["nf-photos"]["name"]);
    $target = 'images/' . $photos;

    move_uploaded_file($_FILES["nf-photos"]["tmp_name"], $target);

    $topic = $_POST["nf-topic"];
    $date = $_POST['nf-date'];

    $sql = "INSERT INTO newsfeed(nf_photos, nf_topic, nf_date) VALUES ('$photos', '$topic', '$date')";

    if (mysqli_query($conn, $sql)) {

    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

  }

  //ADD TEAM SALES
  if(isset($_POST["submitteamsalesproject"])){

    $tspbuyername = $_POST["tsp-buyername"];
    $tspagent = $_POST["tsp-agent"];
    $tspdevelopername = $_POST["tsp-developername"];
    $tspprojectname = $_POST["tsp-projectname"];
    $tspPT = $_POST["tsp-pt"];
    $tspspaprice = $_POST["tsp-spaprice"];
    $tsphouseprice = $_POST["tsp-houseprice"];
    $tsprebatemarkup = $_POST["tsp-rebatemarkup"];
    $tspopenloan = $_POST["tsp-openloan"];
    $tspcloseloan = $_POST["tsp-closeloan"];
    $tsptypeofloan = $_POST["tsp-typeofloan"];
    $tspbankname = $_POST["tsp-bankname"];
    $tspbooking = $_POST["tsp-booking"];
    $tspsubmit = $_POST["tsp-submit"];
    $tspconfirmation = $_POST["tsp-confirmation"];
    $tsplppsaform = $_POST["tsp-lppsa"];
    $tsphodout = $_POST["tsp-hodout"];
    $tsphodin = $_POST["tsp-hodin"];
    $tspmindef = $_POST["tsp-mindef"];
    $tsplppsa = $_POST["tsp-lppsa"];
    $tsppassed = $_POST["tsp-passed"];
    $tspsignlo = $_POST["tsp-signlo"];
    $tspsignsnp = $_POST["tsp-signsnp"];
    $tspnotes = $_POST["tsp-notes"];
    $tspcommission = $_POST["tsp-comission"];
    $tspstatus = $_POST["tsp-status"];

    $sql = "INSERT INTO master_tracking(mt_buyername, mt_agent, mt_developer, mt_projectname, mt_PT, mt_spaprice, mt_houseprice, mt_rebate, 
    mt_openloan, mt_closeloan, mt_typeloan, mt_bankname, mt_booking, mt_submit, mt_confirmation, mt_lppsaform, mt_hodout, mt_hodin, mt_mindef, mt_lppsa, 
    mt_passed, mt_signlo, mt_signsnp, mt_notes, mt_commisionreceiptdate, mt_status) 
    VALUES ('$tspbuyername', '$tspagent', '$tspdevelopername', '$tspprojectname', '$tspPT', '$tspspaprice', '$tsphouseprice', '$tsprebatemarkup', 
    '$tspopenloan', '$tspcloseloan', '$tsptypeofloan', '$tspbankname', '$tspbooking', '$tspsubmit', '$tspconfirmation', '$tsplppsaform', '$tsphodout', 
    '$tsphodin', '$tspmindef', '$tsplppsa', '$tsppassed', '$tspsignlo', '$tspsignsnp', '$tspnotes', '$tspcommission', '$tspstatus')";

    if (mysqli_query($conn, $sql)) {

    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
            

  }

    //ADD PERSONAL SALES
    if(isset($_POST["submitteamsalesproject"])){

      $tspbuyername = $_POST["tsp-buyername"];
      $tspagent = $_POST["tsp-agent"];
      $tspdevelopername = $_POST["tsp-developername"];
      $tspprojectname = $_POST["tsp-projectname"];
      $tspPT = $_POST["tsp-pt"];
      $tspspaprice = $_POST["tsp-spaprice"];
      $tsphouseprice = $_POST["tsp-houseprice"];
      $tsprebatemarkup = $_POST["tsp-rebatemarkup"];
      $tspopenloan = $_POST["tsp-openloan"];
      $tspcloseloan = $_POST["tsp-closeloan"];
      $tsptypeofloan = $_POST["tsp-typeofloan"];
      $tspbankname = $_POST["tsp-bankname"];
      $tspbooking = $_POST["tsp-booking"];
      $tspsubmit = $_POST["tsp-submit"];
      $tspconfirmation = $_POST["tsp-confirmation"];
      $tsplppsaform = $_POST["tsp-lppsa"];
      $tsphodout = $_POST["tsp-hodout"];
      $tsphodin = $_POST["tsp-hodin"];
      $tspmindef = $_POST["tsp-mindef"];
      $tsplppsa = $_POST["tsp-lppsa"];
      $tsppassed = $_POST["tsp-passed"];
      $tspsignlo = $_POST["tsp-signlo"];
      $tspsignsnp = $_POST["tsp-signsnp"];
      $tspnotes = $_POST["tsp-notes"];
      $tspcommission = $_POST["tsp-comission"];
      $tspstatus = $_POST["tsp-status"];
  
      $sql = "INSERT INTO master_tracking(mt_buyername, mt_agent, mt_developer, mt_projectname, mt_PT, mt_spaprice, mt_houseprice, mt_rebate, 
      mt_openloan, mt_closeloan, mt_typeloan, mt_bankname, mt_booking, mt_submit, mt_confirmation, mt_lppsaform, mt_hodout, mt_hodin, mt_mindef, mt_lppsa, 
      mt_passed, mt_signlo, mt_signsnp, mt_notes, mt_commisionreceiptdate, mt_status) 
      VALUES ('$tspbuyername', '$tspagent', '$tspdevelopername', '$tspprojectname', '$tspPT', '$tspspaprice', '$tsphouseprice', '$tsprebatemarkup', 
      '$tspopenloan', '$tspcloseloan', '$tsptypeofloan', '$tspbankname', '$tspbooking', '$tspsubmit', '$tspconfirmation', '$tsplppsaform', '$tsphodout', 
      '$tsphodin', '$tspmindef', '$tsplppsa', '$tsppassed', '$tspsignlo', '$tspsignsnp', '$tspnotes', '$tspcommission', '$tspstatus')";
  
      if (mysqli_query($conn, $sql)) {
  
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
              
  
    }

  //ADD MEETING ROOM
  if(isset($_POST["submitmeetingroom"])){

    $mrname = $_POST["mr-name"];
    $mrnumofseat = $_POST["mr-numofseat"];
    $mrlocation = $_POST["mr-location"];

    $mrphotos = time() . '_' . ($_FILES["mr-photos"]["name"]);
    $mrtarget = 'images/' . $mrphotos;

    move_uploaded_file($_FILES["mr-photos"]["tmp_name"], $mrtarget);

    $sql = "INSERT INTO meetingroom(mr_photos, mr_name, mr_numofseat, mr_location) 
    VALUES ('$mrphotos', '$mrname', '$mrnumofseat', '$mrlocation')";

    if (mysqli_query($conn, $sql)) {

    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

  }

  //ADD PROJECT CENTER
  if(isset($_POST["submitucproject"])){

    //UPLOAD IMAGES
    $pcphotos = time() . '_' . ($_FILES["pc-photos"]["name"]);
    $pctarget = 'images/' . $pcphotos;

    move_uploaded_file($_FILES["pc-photos"]["tmp_name"], $pctarget);

    $pcprojectname = $_POST["pc-projectname"];
    $pcnumofbedroom = $_POST["pc-numberofbedroom"];
    $pcnumofbathroom = $_POST["pc-numberofbathroom"];
    $pcprice = $_POST["pc-price"];
    $pcstate = $_POST["pc-state"];
    $pcarea = $_POST["pc-area"];
    
    //TUKAR INSERT TO UPDATE
    $sql = "INSERT INTO project_center(pc_photos, pc_name, pc_numofbedroom, pc_numofbathroom, pc_price, pc_state, pc_area) 
    VALUES ('$pcphotos','$pcprojectname', '$pcnumofbedroom', '$pcnumofbathroom', '$pcprice', '$pcstate', '$pcarea')";

    if (mysqli_query($conn, $sql)) {

    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

  }

  //ADD PAYMENT VOUCHER
  if(isset($_POST["submitpv"])){

    $pvno = $_POST["pv-no"];
    $pvdate = $_POST["pv-date"];
    $pvreceivedby = $_POST["pv-receivedby"];
    $pvproject = $_POST["pv-project"];
    $pvbuyer = $_POST["pv-buyer"];
    $pvpaymentamount = $_POST["pv-paymentamount"];
    $pvbankname= $_POST["pv-bankname"];
    $pvbankaccount = $_POST["pv-bankaccount"];

    $sql = "INSERT INTO payment_vouchers(pv_no, pv_date, pv_project, pv_buyer, pv_amount, pv_receivedby, pv_bankname, pv_bankaccount) 
    VALUES ('$pvno', '$pvdate', '$pvproject', '$pvbuyer', '$pvpaymentamount', '$pvreceivedby', '$pvbankname', '$pvbankaccount')";

    if (mysqli_query($conn, $sql)) {

    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  }

  //ADD STORE
  if(isset($_POST["submitstore"])){

    //UPLOAD IMAGES
    $sphotos = time() . '_' . ($_FILES["s-photos"]["name"]);
    $starget = 'images/' . $sphotos;

    move_uploaded_file($_FILES["s-photos"]["tmp_name"], $starget);

    $sproductname = $_POST["s-productname"];
    $sprice = $_POST["s-price"];
    
    $sql = "INSERT INTO store(s_photos, s_name, s_price) 
    VALUES ('$sphotos','$sproductname', '$sprice')";

    if (mysqli_query($conn, $sql)) {

    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

  }

  //UPDATE MEETING ROOM
  if(isset($_POST["submiteditinfomeetingroom"])){

    
    $mrname = $_POST["mr-nameupdate"];
    $mrnumofseat = $_POST["mr-numofseatupdate"];
    $mrlocation = $_POST["mr-locationupdate"];
  
    $mrphotos = time() . '_' . ($_FILES["mr-photosupdate"]["name"]);
    $mrtarget = 'images/' . $mrphotos;
  
    move_uploaded_file($_FILES["mr-photosupdate"]["tmp_name"], $mrtarget);
  
    $sql = "UPDATE meetingroom SET mr_photos='$mrphotos', mr_name='$mrname', mr_numofseat='$mrnumofseat', mr_location='$mrlocation' WHERE ";
  
    if (mysqli_query($conn, $sql)) {
  
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  }

  header('Location:admin.php');

  
?>

FUTURE USE CODING
echo "<pre>", print_r($_FILES), "</pre>";
        die();