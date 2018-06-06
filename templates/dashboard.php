<div class="header">
  <div class="container-fluid">
    <div class="row">
      <div class="col-2 text-left">
        <a href="#settings" id="menu-icon-left"><i class="fa fa-cog fa-2x"></i></a>
      </div>

      <div class="col-8 text-center">
        <h1>Dashboard</h1>
      </div>

      <div class="col-2 text-right">
        <a href="#messages" id="menu-icon-right"><i class="fa fa-envelope fa-2x"></i></a>
      </div>
    </div>
  </div>
</div>


<ul>
  <li class="Divider">
    Profil
  </li>
  <li><span>Name: Marcel</span></li>
  <li><a id="dashb-role-button" href="#" class="text-center text-muted" onclick="roleClick()"><i class="far fa-eye"></i> Rolle</a></li>
</ul>

<ul>
  <li class="Divider">Mitspieler</li>

  <?php foreach($_PAGE['player'] as $id=>$player) { ?>
  <li>

    <span>
      <span class="dashb-poll dashb-poll-role fa-layers fa-fw fa-2x" data-pid="<?= $id ?>">
        <i class="fas fa-circle" style="color:grey"></i>
        <i class="fa-inverse fa-question fas" data-fa-transform="shrink-6"></i>
      </span>

      <span class="list-player-name">
        <?= $player ?>
      </span>

      <!-- Icons -->
      <span style="float: right;">

        <!-- Abstimmung Alle -->
        <span class="dashb-poll dashb-poll-norm fa-layers fa-fw fa-2x" data-pid="<?= $id ?>" onclick="dashbClickNorm(this)">
          <?php if ($id == 4) { ?>
            <i class="fas fa-circle"></i>
            <i class="fa-inverse fa-crosshairs fas" data-fa-transform="shrink-6"></i>
          <?php } else { ?>
            <i class="far fa-circle"></i>
            <i class="fa-crosshairs fas" data-fa-transform="shrink-6"></i>
          <?php } if ($id == 2) { ?>
            <span class="fa-layers-counter" style="background:Tomato">2</span>
          <?php } ?>
          <?php if ($id == 3) { ?>
            <span class="fa-layers-counter" style="background:Tomato">3</span>
          <?php } ?>
        </span>

        <!-- Abstimmung Spezi -->
        <span class="dashb-poll dashb-poll-speci fa-layers fa-fw fa-2x d-none" data-pid="<?= $id ?>" onclick="dashbClickSpeci(this)">

          <?php if ($id == 0) { ?>
            <i class="fas fa-circle" style="color:red"></i>
            <i class="fa-plus fas" data-fa-transform="shrink-6" style="color: white;"></i>
          <?php } else { ?>
            <i class="far fa-circle" style="color:red"></i>
            <i class="fa-plus fas" data-fa-transform="shrink-6" style="color: red;"></i>
          <?php } if ($id == 1) { ?>
            <span class="fa-layers-counter" style="background:Tomato">1</span>
          <?php } ?>
        </span>


        <span class="dashb-poll dashb-poll-msg fa-layers fa-fw fa-2x" data-pid="<?= $id ?>" onclick="dashbOpenChat(this)">
          <i class="fas fa-circle" style="color:grey"></i>
          <i class="fa-inverse fa-envelope fa" data-fa-transform="shrink-6"></i>
        </span>
      </span>
    </span>
  </li>

<?php } ?>
</ul>
