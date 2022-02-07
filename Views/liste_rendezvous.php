<?php
$this->_t = "Liste des rendez-vous";
?>
<?php
include("Public/sidebar.php");
?>

<div class="col-10 table-responsive">
<p class="h3"><?php echo ($this->_usr); echo(" > ");?>
  <small class="text-muted"> <?php echo ($this->_name);?> </small></h3>
  <h2><?php echo ($this->_t)   ?></h2>
</div>
<div class="col-10 table-responsive">
  <br>
  <?php if(isset($_COOKIE["adminemail"])){ ?>

  
  <a href="/HMS_PROJECT/liste_rendezvous&user=patient" class="btn btn-secondary float-right"><i class="fas fa-hospital-user"></i> Patients</a>
  <a href="/HMS_PROJECT/liste_rendezvous&user=medicin" class="btn btn-info float-right"><i class="fas fa-user-md"></i> Medicin</a>
  <br>
  <p class="h4">Ajouter rendez-vous
    <a href="/HMS_PROJECT/ajout_rendezvous" class="btn btn-info float-right"><i class="fas fa-plus-square"></i></a>
  </p>
  <?php } ?>
  <br>
  <h3><b>Rendez-vous programmés</b></h3>
  <br>
  <table class="table table-bordered">
    <thead>
      <tr class="table-primary">
        <?php
        if ($usr == "medicin")
          echo ("<th scope='col'>Pris avec</th>");

        else //$_GET["user"]=="patient"
          echo ("<th scope='col'>Pris par</th>");
        ?>

        <th scope="col">Date du rendez-vous</th>
        <th scope="col">Heure du rendez-vous</th>
        <th></th>
      </tr>
    </thead>
    <?php
    if ($usr == "medicin"){
      foreach ($doctorN as $d) {
        ?>
          <tbody>
            <tr>
              <td>Dr. <?= $d->nom() ?> <?= $d->prenom() ?></td>
              <td><?= $d->date_rendezvous() ?></td>
              <td><?= $d->heure_rendezvous() ?></td>
              <td>
                <a href="http://localhost/HMS_PROJECT/index.php?url=detail_rendezvous&id=<?= $d->id(); ?>" id="link" style="text-decoration:none;" id="link" style="text-decoration:none;"><i class="fas fa-info-circle"></i> </a>
                <a href="http://localhost/HMS_PROJECT/index.php?url=delete_rendezvous&id=<?= $d->id(); ?>" id="link" style="text-decoration:none;" id="link" style="text-decoration:none;"><i class="fas fa-trash-alt"></i></a>
                <a href="http://localhost/HMS_PROJECT/index.php?url=modif_rendezvous&id=<?= $d->id(); ?>" id="link" style="text-decoration:none;"><i class="fas fa-pen-square"></i></a>
              </td>
            </tr>
          </tbody>
        <?php
          }
          
    }
      
      if ($usr == "patient")
    foreach ($patientN as $d) {
    ?>
      <tbody>
        <tr>
          <td><?= $d->nom() ?> <?= $d->prenom() ?></td>
          <td><?= $d->date_rendezvous() ?></td>
          <td><?= $d->heure_rendezvous() ?></td>
          <td>
            <a href="http://localhost/HMS_PROJECT/index.php?url=detail_rendezvous&id=<?= $d->id(); ?>" id="link" style="text-decoration:none;" id="link" style="text-decoration:none;"><i class="fas fa-info-circle"></i> </a>
            <a href="http://localhost/HMS_PROJECT/index.php?url=delete_rendezvous&id=<?= $d->id(); ?>" id="link" style="text-decoration:none;" id="link" style="text-decoration:none;"><i class="fas fa-trash-alt"></i></a>
            <a href="http://localhost/HMS_PROJECT/index.php?url=modif_rendezvous&id=<?= $d->id(); ?>" id="link" style="text-decoration:none;"><i class="fas fa-pen-square"></i></a>
          </td>
        </tr>
      </tbody>
    <?php
    }
    ?>
  </table>
  <br>
  <h3><b>Enregistrement</b></h3>
  <br>
  <table class="table table-bordered">
    <thead>
      <tr class="table-primary">
        <?php print_r($usr); ?>
        <?php
        if ($usr == "medicin")
          echo ("<th scope='col'>Pris avec</th>");

        else //$_GET["user"]=="patient"
          echo ("<th scope='col'>Pris par</th>");
        ?>

        <th scope="col">Date du dernier rendez-vous</th>
        <th scope="col">Quantité de rendez-vous</th>
        <th></th>
      </tr>
    </thead>
    <?php
    if ($usr == "medicin"){
      foreach ($doctor as $d) {
        ?>
          <tbody>
            <tr>
              <td>Dr. <?= $d->nom() ?> <?= $d->prenom() ?></td>
              <td><?= $d->dernier_rv() ?></td>
              <td><?= $d->qte_rv() ?></td>
              <td>
                <a href="http://localhost/HMS_PROJECT/index.php?url=detail_rendezvous&id=<?= $d->id(); ?>" id="link" style="text-decoration:none;" id="link" style="text-decoration:none;"><i class="fas fa-info-circle"></i> </a>
              </td>
            </tr>
          </tbody>
        <?php
          }
          
    }
      
      if ($usr == "patient")
    foreach ($patient as $d) {
    ?>
      <tbody>
        <tr>
          <td><?= $d->nom() ?> <?= $d->prenom() ?></td>
          <td><?= $d->dernier_rv() ?></td>
          <td><?= $d->qte_rv() ?></td>
          <td>
            <a href="http://localhost/HMS_PROJECT/index.php?url=detail_rendezvous&id=<?= $d->id(); ?>" id="link" style="text-decoration:none;" id="link" style="text-decoration:none;"><i class="fas fa-info-circle"></i> </a>
          </td>
        </tr>
      </tbody>
    <?php
    }
    ?>
  </table>
</div>