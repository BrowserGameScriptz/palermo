function dashbClickNorm(self)
{
  var pid = self.dataset.pid;

  $('#dashboard .dashb-poll-norm .fa-crosshairs.fa-inverse').removeClass('fa-inverse');
  $('#dashboard .dashb-poll-norm .fa-circle[data-prefix=fas]').attr('data-prefix', 'far');

  $('#dashboard .dashb-poll-norm[data-pid=' + pid + '] .fa-crosshairs').addClass('fa-inverse');
  $('#dashboard .dashb-poll-norm[data-pid=' + pid + '] .fa-circle').attr('data-prefix', 'fas');
}

function dashbClickSpeci(self) {
  var pid = self.dataset.pid;

  $('#dashboard .dashb-poll-speci .fa-plus').css('color','red');
  $('#dashboard .dashb-poll-speci .fa-circle[data-prefix=fas]').attr('data-prefix', 'far');

  $('#dashboard .dashb-poll-speci[data-pid=' + pid + '] .fa-plus').css('color','white');
  $('#dashboard .dashb-poll-speci[data-pid=' + pid + '] .fa-circle').attr('data-prefix', 'fas');
}


function dashbOpenChat(self) {
  var pid = self.dataset.pid;

  var api = $("#menu").data( "mmenu" );
  api.openPanel( $("#messages") );
}


var roleClick_active = false;
function roleClick()
{
  if (roleClick_active) return;
  roleClick_active = true;

  setTimeout(roleTimerTrigger, 5000);

  $('.dashb-poll-speci').removeClass('d-none');
  $('#dashb-role-button').removeClass('text-muted');
  $('#dashb-role-button').html("<i class=\"fas fa-plus\"></i> Arzt");
}

function roleTimerTrigger() {
  $('.dashb-poll-speci').addClass('d-none');

  $('#dashb-role-button').addClass('text-muted');
  $('#dashb-role-button').html("<i class=\"far fa-eye\"></i> Rolle");

  roleClick_active = false;
}
