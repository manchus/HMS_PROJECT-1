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
        <th scope="col">id_patient</th>
        <th scope="col">id_medecin</th>
        <th scope="col">Prix Rendez Vous</th>
        <th></th>
      </tr>
    </thead>
    <?php
    $appointmentm = new AppointmentManager;
    $patientm = new PatientManager;
    $doctorm = new DoctorManager;
    foreach ($invoice as $d) {
      $curRV = $appointmentm->getAppointmentDetailId($d->id_rendezvous());
      $curPat = $patientm->getPatientDetailId($curRV->id_patient());
      $curDoc = $doctorm->getDoctorDetailId($curRV->id_medecin());

    ?>
      <tbody>
        <tr>
          <td><?= $curPat->nom() ?> <?= $curPat->prenom() ?></td>
          <td>Dr. <?= $curDoc->nom() ?> <?= $curDoc->prenom() ?></td>
          <td><?= $d->prix_rendezvous() ?></td>
          <td>
            <a href="http://localhost/HMS_PROJECT/index.php?url=detail_invoice&id=<?= $d->id(); ?>" id="link" style="text-decoration:none;" id="link" style="text-decoration:none;"><i class="fas fa-info-circle"></i> </a>
            <a href="http://localhost/HMS_PROJECT/index.php?url=delete_invoice&id=<?= $d->id(); ?>" id="link" style="text-decoration:none;" id="link" style="text-decoration:none;"><i class="fas fa-trash-alt"></i></a>
            <a href="http://localhost/HMS_PROJECT/index.php?url=modif_invoice&id=<?= $d->id(); ?>" id="link" style="text-decoration:none;"><i class="fas fa-pen-square"></i></a>
          </td>
        </tr>
      </tbody>


    <?php
    }
    ?>
  </table>
</div>