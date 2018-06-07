function Game() {
  this.id;
  this.player;
}


function Player() {
  this.name;
  this.id;
}



$(document).ready(function() {
  $('.slider').change(function() {
    $(this).parent().children('.slider-text').text(this.value + ' / ' + $(this).attr('max') + ' (Standard: 2)');
  });

  $('.slider').on('input', function () {
    $(this).trigger('change');
  });
});
