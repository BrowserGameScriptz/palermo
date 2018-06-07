<div class="header">
  <div class="container-fluid">
    <div class="row">
      <div class="col-2 text-left">
      </div>

      <div class="col-8 text-center">
        <h1>Einstellungen</h1>
      </div>

      <div class="col-2 text-right">
        <a href="#dashboard" id="menu-icon-right"><i class="fa fa-arrow-right fa-2x"></i></a>
      </div>
    </div>
  </div>
</div>

<ul>
  <li class="Divider">
    Einladecode
  </li>
  <li><span class="text-center"><b>qrh982</b></span></li>
  <li><a href="#" class="text-center text-danger" onclick="roleClick()"><i class="fas fa-sign-out-alt"></i> Spiel Verlassen</a></li>
</ul>



<ul style="position: relative;">
  <div class="block-overlay">
    <div class="block-overlay-inner">
      <b>Einstellungen können während eines laufenden Spiels nicht verändert werden</b>
    </div>
  </div>

  <li class="Divider">
    Einstellungen
  </li>

  <li>
    <input type="checkbox" checked="checked" class="Toggle" />
		<span>Spione</span>
    <span class="slide-container">
      <span class="slider-text">2 / 3 (Standard: 2)</span>
      <input class="slider" type="range" min="0" max="3" step="1">
    </span>
  </li>
  <li>
    <input type="checkbox" checked="checked" class="Toggle" />
		<span>Ärzte</span>
    <span class="slide-container">
      <span class="slider-text">3 / 5 (Standard: 3)</span>
      <input class="slider" type="range" min="0" max="5" step="1">
    </span>
  </li>
  <li>
		<span>Mörder</span>
    <span class="slide-container">
      <span class="slider-text">3 / 5 (Standard: 3)</span>
      <input class="slider" type="range" min="0" max="2" step="1">
    </span>
  </li>
</ul>


<ul style="position: relative;">
  <div class="block-overlay">
    <div class="block-overlay-inner">
      <b>Spieler können nur vom Host (Martin) verwaltet werden</b>
    </div>
  </div>

  <li class="Divider">
    Spielerverwaltung
  </li>

  <?php foreach($_PAGE['player'] as $id=>$player) { ?>
  <li>
    <span>
      <span class="dashb-poll dashb-poll-role fa-layers fa-fw fa-2x" data-pid="<?= $id ?>" onclick="">
        <i class="fas fa-circle" style="color:Tomato"></i>
        <i class="fa-inverse fa-times fas" data-fa-transform="shrink-6"></i>
      </span>

      <span class="list-player-name">
        <?= $player ?>
      </span>
    </span>
  </li>
  <?php } ?>
</ul>
