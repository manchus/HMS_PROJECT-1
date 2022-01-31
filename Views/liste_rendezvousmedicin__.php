<?php
$this->_t = "Liste des rendez-vous";
?>  
  <?php 
    include("Public/sidebar.php");
  ?>

<div class="col-10 table-responsive">
  <h1><?php echo($this->_t) ?></h1>
</div>
  <div class="col-10 table-responsive">
    <br>
    <a href="/HMS_PROJECT/index.php?url=liste_rendezvouspatient" class="btn btn-secondary float-right"><i class="fas fa-hospital-user"></i> Patients</a>
    <a href="/HMS_PROJECT/liste_rendezvousmedicin" class="btn btn-info float-right"><i class="fas fa-user-md"></i> Medicin</a>
    <br>
    <p class="h4">Ajouter rendez-vous
    <a href="/HMS_PROJECT/ajout_rendezvous" class="btn btn-info float-right"><i class="fas fa-plus-square"></i></a>
    </p>
    <br>
    <br>
  <table class="table table-bordered">
  <thead>
    <tr class="table-primary">
      <?php print_r($usr); ?>
    <?php if(isset($_POST["user"]))
          {
              if($_POST["user"]=="medicin")
                echo("<th scope='col'>Pris avec</th>");
          }
          else//$POST["user"]=="patient"
            echo("<th scope='col'>Pris par</th>");
    ?>
      
      <th scope="col">Date du rendez-vous</th>
      <th scope="col">Heure du rendez-vous</th>
      <th></th>
    </tr>
  </thead>
<?php
    foreach($doctor as $d){
           
?>
  <tbody>
    <tr>
      
      <td>Dr. <?=$d->nom()?> <?=$d->prenom()?></td>
      <td><?=$d->dernier_rv()?>
    
    </td>
      <td><?=$d->qte_rv()?></td>
      <td>
        <a href="http://localhost/HMS_PROJECT/index.php?url=detail_rendezvous&id=<?=$d->id();?>" id="link" style="text-decoration:none;"  id="link" style="text-decoration:none;"><i class="fas fa-info-circle"></i>  </a>
        <a href="http://localhost/HMS_PROJECT/index.php?url=delete_rendezvous&id=<?=$d->id();?>" id="link" style="text-decoration:none;"  id="link" style="text-decoration:none;"><i class="fas fa-trash-alt"></i></a>
        <a href="http://localhost/HMS_PROJECT/index.php?url=modif_rendezvous&id=<?=$d->id();?>" id="link" style="text-decoration:none;"><i class="fas fa-pen-square"></i></a></td>
      </tr>
  </tbody>


<?php
}
?>
</table>
</div>