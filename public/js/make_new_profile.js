function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
  }

  window.onclick = function (event) {
    if (!event.target.matches('#dot3')) {


      var dropdowns = document.getElementsByClassName("dropdown-content");
      var i;
      for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
          openDropdown.classList.remove('show');
        }
      }
    }
  }
  function mySecond() {
    document.getElementById("dropdown-contentsss").classList.toggle("shows");
  }


  window.onclick = function (event) {
    if (!event.target.matches('#toggle1')) {
      var dropdowns = document.getElementsByClassName("dropdown-contentss");
      var i;
      for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('shows')) {
          openDropdown.classList.remove('shows');
        }
      }
    }
  }