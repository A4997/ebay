$("document").ready(function () {
$("#scroll").click(function () {
  $("#fblock").slideToggle(1000);
  $("#sblock").toggle(1000);
});
$("#switch").click(function () {
  $("#switch").fadeOut(500);
  $("#switch").fadeIn(500);
if ($("body").hasClass("dark")) {
  $("body").removeClass("dark");
  $("body").addClass("whiteM");
  $("#switch").text("Black");
  $("#switch").css("color","black");
  $("#all").addClass("bg-light");
}
else {
  $("body").removeClass("whiteM");
  $("body").addClass("dark");
  $("#switch").text("White");
  $("#switch").css("color","#023359");
  $("#all").removeClass("bg-light");

}
});
$("#top").click(function () {
  $("html ,body").animate({scrollTop:0},1000);
});

})
