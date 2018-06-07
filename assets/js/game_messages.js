


$(document).ready(function( $ ) {
$("#messages #menu-icon-right").click(function() {

/*$("#chat-group-container").addClass("list-group-item list-group-item-action flex-column align-items-start");
$("#chat-group-container #div1").addClass("d-flex w-100 justify-content-between");

$("chatname").text("Gruppenchat");
$("chat-badge").text("5");
$("chat-last-message").text("Hier könnte die letzte Textnachricht stehen");*/
  var pname ="Ferdi";

  var html = '<a href="#" class="list-group-item list-group-item-action flex-column align-items-start">';
  html += '<div class="d-flex w-100 justify-content-between">';
  html += '<h5 class="mb-1">Gruppenchat</h5>';
  html += '<h5 class="badge badge-primary badge-pill">5</h5> </div>';
  html += '<p class="mb-1">Hier könnte die letzte Textnachricht stehen.</p>';
  html += '</a>';

  $("#chat-group-container").append(html);
  });
  });
