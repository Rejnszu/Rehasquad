var templateUrl = object_name.templateUrl;

///========================== Mobile Menu ========================================================================
/* Open when someone clicks on the span element */
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  $("body").addClass("sidebarOpen");
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  $("body").removeClass("sidebarOpen");
}

function toogleMobileDropdown(){    
  $( "#mobile-dropdown-content" ).toggle();
  $("#mobile-fa-caret-down").toggle();
  $("#mobile-fa-caret-up").toggle();
  
}

//==============MEnu mobile ===============================================
