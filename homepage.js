  /*TAB NAVIGATION*/
  function openNav(evt, navContent) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(navContent).style.display = "block";
    evt.currentTarget.className += " active";
  }
  
  // Get the element with id="defaultOpen" and click on it
  document.getElementById("defaultOpen").click();

  /*TAB DASHBOARD*/
  function openDashboard(evt, dashboardContent) {
    // Declare all variables
    var i, tabdashboardcontent, tabdashboardlinks;
  
    // Get all elements with class="tabcontent" and hide them
    tabdashboardcontent = document.getElementsByClassName("tabdashboardcontent");
    for (i = 0; i < tabdashboardcontent.length; i++) {
      tabdashboardcontent[i].style.display = "none";
    }
  
    // Get all elements with class="tablinks" and remove the class "active"
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

            /*FILTERED TABLE(TK JDI - nnti tukar kpd php)*/
            function myFunctionFilteredTable() {
            // Declare variables
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");
            
            // Loop through all table rows, and hide those who don't match the search query
            for (i = 0; i < tr.length; i++) {
              td = tr[i].getElementsByTagName("td")[0];
              if (td) {
              txtValue = td.textContent || td.innerText;
              if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
              } else {
                tr[i].style.display = "none";
              }
              }
            }
            }

  /*MODAL*/
function openModal(){

  themodalleads.classList.add("open-modal");
  themodalPIC.classList.add("open-modal");
}

function closeModal(){

  themodalleads.classList.remove("open-modal");
  themodalPIC.classList.remove("open-modal");

}





