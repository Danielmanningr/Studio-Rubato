window.onscroll = function() {
  if (document.body.scrollTop > 140 || document.documentElement.scrollTop > 140) {
      document.getElementById("bottomHeader").setAttribute(
        "style", "border-bottom: #FFFFFF solid 1px;");
    } else {
        document.getElementById("bottomHeader").setAttribute(
          "style", "border-bottom: #292f38;");
      }
  };