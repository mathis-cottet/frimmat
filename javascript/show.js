var iscontact = false;
var isabout = false;

function showContact() {
    iscontact = !iscontact;
    setTimeout(() => {
      if (iscontact) {
        $("#contact").css("bottom", "0%");
      }
    }, 800);
    if (!iscontact) {
      $("#contact").css("bottom", "-100%");
    }
  }
  function showAbout() {
    isabout = !isabout;
    setTimeout(() => {
      if (isabout) {
        $("#about").css("bottom", "0%");
      }
    }, 800);
    if (!isabout) {
      $("#about").css("bottom", "-100%");
    }
  }