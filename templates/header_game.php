<!doctype html>
<html lang="de">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="<?= Template::getUrl("/assets/css/bootstrap.min.css") ?>">
    <link rel="stylesheet" href="<?= Template::getUrl("/assets/css/fa-svg-with-js.css") ?>">
    <link rel="stylesheet" href="<?= Template::getUrl("/assets/css/jquery.mmenu.all.css") ?>">
    <link rel="stylesheet" href="<?= Template::getUrl("/assets/css/site.css") ?>">

    <script src="<?= Template::getUrl("/assets/js/fontawesome-all.min.js") ?>"></script>
    <script src="<?= Template::getUrl("/assets/js/jquery-3.3.1.min.js") ?>"></script>
    <script src="<?= Template::getUrl("/assets/js/jquery.mmenu.all.js") ?>"></script>
    <script src="<?= Template::getUrl("/assets/js/game.js") ?>"></script>
<<<<<<< HEAD
    <script src="<?= Template::getUrl("/assets/js/game_messages.js") ?>"></script>
=======
    <script src="<?= Template::getUrl("/assets/js/game_dashboard.js") ?>"></script>
>>>>>>> 5539fc9b028900e90f9193771f1f705ce3859e46

    <script>
       $(document).ready(function( $ ) {
          $("#menu").mmenu({
            offCanvas	: false
          }, {});

          var api = $("#menu").data( "mmenu" );

          api.openPanel( $("#dashboard") );
       });
    </script>


    <title><?= $_PAGE['title'] ?></title>
  </head>
  <body>
