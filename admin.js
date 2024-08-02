  /*TAB CONTENT NAVIGATION*/
  function openNav(evt, navContent) {
    var i, tabcontent, tablinks;

    //Get all elements with class="tabcontent" and hide them (THIS ONE TK JDI - tk hide)
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace("active", "");
    }

    // Show the current tab, and add an "active" class to the button that opened the tab(bila klik)
    document.getElementById(navContent).style.display = "block";
    evt.currentTarget.className += " active";
  }
  
  // Get the element with id="defaultOpen" and click on it
  document.getElementById("defaultOpen").click();

  /*TAB CONTENT FOR EACH NAVIGATION*/
  function openDashboard(evt, dashboardContent) {
    // Declare all variables
    var i, tabdashboardcontent, tabdashboardlinks;
  
    // Get all elements with class="tabdashboardcontent" and hide them (THIS ONE JADI)
    tabdashboardcontent = document.getElementsByClassName("tabdashboardcontent");
    for (i = 0; i < tabdashboardcontent.length; i++) {
      tabdashboardcontent[i].style.display = "none";
    }
  
    // Get all elements with class="tabdashboardlinks" and remove the class "active"
    tabdashboardlinks = document.getElementsByClassName("tabdashboardlinks");
    for (i = 0; i < tabdashboardlinks.length; i++) {
      tabdashboardlinks[i].className = tabdashboardlinks[i].className.replace("active", "");
    }
  
    // Show the current tab, and add an "active" class to the button that opened the tab(bila klik)
    document.getElementById(dashboardContent).style.display = "block";
    evt.currentTarget.className += " active";
  }

   /*CHECKBOX*/
  function myFunctionCheckbox() {
    // Get the checkbox
    var checkBox = document.getElementById("myCheck");
    // Get the output text
    var text = document.getElementById("text");
  
    // If the checkbox is checked, display the output text
    if (checkBox.checked == true){
      text.style.display = "block";
    } else {
      text.style.display = "none";
    }
  }

  /*PROGRESS BAR*/
  var i = 0;
  function move() {
    if (i == 0) {
      i = 1;
      var elem = document.getElementById("myBar");
      var width = 1;
      var id = setInterval(frame, 10);
      function frame() {
        if (width >= 100) {
          clearInterval(id);
          i = 0;
        } else {
          width++;
          elem.style.width = width + "%";
        }
      }
    }
  }

  /*MODAL*/
  function openModalAdmin(){

    themodalnewsfeed.classList.add("open-modal-admin");
    themodalteamsalesproject.classList.add("open-modal-admin");
    themodalpersonalsales.classList.add("open-modal-admin");
    themodalmeetingroom.classList.add("open-modal-admin");
    themodaluc.classList.add("open-modal-admin"); /*project center*/
    themodalPV.classList.add("open-modal-admin");
    themodalstore.classList.add("open-modal-admin");
  
  }
  
  function closeModalAdmin(){
  
    themodalnewsfeed.classList.remove("open-modal-admin");
    themodalteamsalesproject.classList.remove("open-modal-admin");
    themodalpersonalsales.classList.remove("open-modal-admin");
    themodalmeetingroom.classList.remove("open-modal-admin");
    themodaluc.classList.remove("open-modal-admin"); /*project center*/
    themodalPV.classList.remove("open-modal-admin");
    themodalstore.classList.remove("open-modal-admin");
  
  }

  function openModalAdminEditMeetingRoom(){
    themodaleditinfomeetingroom.classList.add("open-modal-admin");
  }

  function closeModalAdminEditMeetingRoom(){
    themodaleditinfomeetingroom.classList.remove("open-modal-admin");
  }



