$(document).ready(function( $ ) {
$("#chat-send-button").click(function() {

var text_me = $("#chat-input-field").val();

var text_somebodyelse = "Hi";

var system_message = "Das ist eine Systemnachricht";

var html = '<div class=".chat-container-bubble-r">';
    html += '<h5> '+text_me+'</h5>';
    html += '</div>';

$("#chat-text-container").append(html);

})
});
