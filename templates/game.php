<div id="page">
  <div id="header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-2 text-left">
          <a href="#" id="menu-icon-left"><i class="fa fa-cog fa-2x"></i></a>
        </div>

        <div class="col-8 text-center">
          <h1>Dashboard</h1>
        </div>

        <div class="col-2 text-right">
          <a href="#" id="menu-icon-right"><i class="fa fa-envelope fa-2x"></i></a>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row justify-content-center align-items-center">
      <div class="col-12 col-md-6">

        Name: Marcel <br>
        Rolle: Arzt <br>
        Mitspieler:

        <table>
          <?php foreach($_PAGE['player'] as $id=>$player) { ?>
          <tr>
            <td>
              <span class="fa-layers fa-fw fa-2x">
                <i class="fas fa-circle" style="color:grey"></i>
                <i class="fa-inverse fa-question fas" data-fa-transform="shrink-6"></i>
              </span>
            </td>
            <td style="width: 100%"><b><?= $player ?></b></td>
            <td>
              <span class="fa-layers fa-fw fa-2x">
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
            </td>

            <td>
              <span class="fa-layers fa-fw fa-2x">

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
            </td>

            <td>
              <span class="fa-layers fa-fw fa-2x">
                <i class="fas fa-circle" style="color:grey"></i>
                <i class="fa-inverse fa-envelope fa" data-fa-transform="shrink-6"></i>
              </span>
            </td>
            <?php } ?>
        </table>

      </div>
    </div>
  </div>
</div>
