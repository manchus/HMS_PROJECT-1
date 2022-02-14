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
  <a href="/HMS_PROJECT/ajout_invoice" class="btn btn-secondary float-right"><i class="fas fa-hospital-user"></i> Patients</a>
  <a href="/HMS_PROJECT/ajout_invoice" class="btn btn-info float-right"><i class="fas fa-user-md"></i> Medicin</a>
  <a href="/HMS_PROJECT/ajout_invoice" class="btn btn-info float-right"><i class="fas fa-plus-square"></i></a>

  <br>
  <table class="table table-bordered">
    <thead>
      <tr class="table-primary">
        <th scope="col">Patient</th>
        <th scope="col">Medecin</th>
        <th scope="col">Quantité rendez-vous</th>
        <th scope="col">Prix rendez-vous</th>
        <th></th>
      </tr>
    </thead>
    <?php

    foreach ($invoice as $d) {

    ?>
      <tbody>
        <tr>
          <td><?= $d->nom_p()." ".$d->prenom_p() ?></td>
          <td><?= $d->nom_d()." ".$d->prenom_d() ?></td>
          <td><?= $d->n_rv() ?></td>
          <td><?= $d->prix_rv() ?></td>
          <td>
            <a href="http://localhost/HMS_PROJECT/index.php?url=detail_invoice&id=<?= $d->id_p(); ?>" id="link" style="text-decoration:none;" id="link" style="text-decoration:none;"><i class="fas fa-info-circle"></i> </a>
            <a href="http://localhost/HMS_PROJECT/index.php?url=delete_invoice&id=<?= $d->id_p(); ?>" id="link" style="text-decoration:none;" id="link" style="text-decoration:none;"><i class="fas fa-trash-alt"></i></a>
            <a href="http://localhost/HMS_PROJECT/index.php?url=modif_invoice&id=<?= $d->id_p(); ?>" id="link" style="text-decoration:none;"><i class="fas fa-pen-square"></i></a>
          </td>
        </tr>
      </tbody>


    <?php
    }
    ?>
  </table>
</div>