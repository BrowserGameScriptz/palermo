
// OPEN / CLOSE MMENU, Handle Hamburger
$(document).ready(function( $ ) {
  $("#menu").mmenu();

  var API = $("#menu").data( "mmenu" );

  $("#open-menu-hamburger").click(function() {
    API.open();
  });


  API.bind( "open:start", function() {
    setTimeout(function() {
      $("#open-menu-hamburger").addClass("hamburger-change");
    }, 100);
  });
  API.bind( "close:start", function() {
    setTimeout(function() {
      $("#open-menu-hamburger").removeClass("hamburger-change");
    }, 100);
  });
});
