$(window).ready(function () {
  $("#boton").click(function () {
    var x = document.getElementById("ok");
    x.style.display = "block";
    setTimeout(function () {
      $("#ok").fadeOut(3000);
    }, 3000);
  });
});
