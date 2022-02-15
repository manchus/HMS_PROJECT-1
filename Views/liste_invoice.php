<?php
$this->_t = "Liste des factures";
?>

<?php
include("Public/sidebar.php");
?>
<div class="col-10 table-responsive">
  <h1 class="mytitle"><?php echo ($this->_t) ?></h1>
</div>
<div class="col-10 table-responsive">
  <br>
  <a href="/HMS_PROJECT/liste_invoice&user=patient" class="btn btn-secondary float-right"><i class="fas fa-hospital-user"></i> Patients</a>
  <a href="/HMS_PROJECT/liste_invoice&user=doctor" class="btn btn-info float-right"><i class="fas fa-user-md"></i> Medicin</a>
  <a href="/HMS_PROJECT/liste_invoice&user=date" class="btn btn-info float-right"><i class="fas fa-books-medical"></i>Rendez-Vous</a>

  <br>
  <table class="table table-bordered">
    <thead>
    <tr class="table-primary">
        <th scope="col"><?= $menu[0] ?></th>
        <th scope="col"><?= $menu[1] ?></th>
        <th scope="col"><?= $menu[2] ?></th>
        <?php
          if ($user == "date") { ?>
        <th scope="col"><?= $menu[4] ?></th>
        <?php } ?>
        <th scope="col"><?= $menu[3] ?></th>
        <th></th>
      </tr>
    </thead>
    <?php

    foreach ($invoice as $d) {

    ?>
      <tbody>
        <tr>
          <?php
          if ($user == "doctor") { ?>
            <td><?= $d->nom_d() . " " . $d->prenom_d() ?></td>
            <td><?= $d->nom_p() . " " . $d->prenom_p() ?></td>

          <?php } else { ?>
            <td><?= $d->nom_p() . " " . $d->prenom_p() ?></td>
            <td><?= $d->nom_d() . " " . $d->prenom_d() ?></td>
          <?php } ?>
          <td><?= $d->n_rv() ?></td>
          <?php
          if ($user == "date") { ?>
          <td><?= $d->date_rv() ?></td>
          <?php } ?>
          <td><?= $d->prix_rv() ?></td>
          <td>
            <?php if($user =="doctor"){ ?>
              <a href="http://localhost/HMS_PROJECT/index.php?url=detail_invoice&opt=<?= $user ?>&id=<?= $d->id_d(); ?>" id="link" style="text-decoration:none;" id="link" style="text-decoration:none;"><i class="fas fa-info-circle"></i> </a>
            <?php } ?>
            <?php if($user =="patient"){ ?>
              <a href="http://localhost/HMS_PROJECT/index.php?url=detail_invoice&opt=<?= $user ?>&id=<?= $d->id_d(); ?>" id="link" style="text-decoration:none;" id="link" style="text-decoration:none;"><i class="fas fa-info-circle"></i> </a>
            <?php } ?>
            <?php if($user =="date"){ ?>
              <a href="http://localhost/HMS_PROJECT/index.php?url=detail_invoice&opt=<?= $user ?>&id=<?= $d->date_rv(); ?>" id="link" style="text-decoration:none;" id="link" style="text-decoration:none;"><i class="fas fa-info-circle"></i> </a>
            <?php } ?>
           </td>
        </tr>
      </tbody>


    <?php
    }
    ?>
  </table>
</div>