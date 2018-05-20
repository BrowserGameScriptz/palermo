<div id="page">
  <div id="header">


    <div id="open-menu-hamburger" class="hamburger">
      <div class="bar1"></div>
      <div class="bar2"></div>
      <div class="bar3"></div>
    </div>


    <h1>Mord in Palermo</h1>
  </div>

  <div class="container">
    <div class="row justify-content-center align-items-center">
      <div class="col-12 col-md-6 text-center">

        <br>

        <div class="form-group">
          <input oninput="inputOnChange()" type="text" class="form-control form-control-lg" id="input-gamecode" placeholder="Spielcode Eingeben">
        </div>

        <div class="form-group">
          <a href="<?= Template::getUrl("/game.php") ?>" class="form-control btn btn-dark btn-lg" id="button-gamecode">Neues Spiel</a>
        </div>

        <small>Klicke auf Neues Spiel, um ein neues Spiel zu erstellen und anschließend deine Freunde einzuladen. Oder gib hier deinen Einladecode ein um einem Spiel beizutreten.</small>

        <script>
          function inputOnChange()
          {
            if ($('#input-gamecode').val().length > 0)
            {
              $('#button-gamecode').text("Spiel Beitreten");
            }
            else
            {
              $('#button-gamecode').text("Neues Spiel");
            }
          }
        </script>

      </div>
    </div>
  </div>
</div>
