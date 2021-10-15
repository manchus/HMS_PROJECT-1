<?php
$this->_t = "Liste des patients";
?>  

  <?php 
    include("Public/sidebar.php");
    
  ?>
  <div class="col-10 table-responsive">
    <br>
    <a href="/HMS_PROJECT/ajout_patient" class="btn btn-info float-right"><i class="fas fa-plus-square"></i></a>
    <br>
  <table class="table table-bordered">
  <thead>
    <tr class="table-primary">
      <th scope="col">Nom complet</th>
      <th scope="col">Email</th>
      <th scope="col">telephone</th>
      <th></th>
    </tr>
  </thead>
<?php
foreach($patient as $d): 
  //var_dump($d);
?>
  <tbody>
    <tr>
      <td><?= $d->prenom(); ?> <?= $d->nom(); ?></td>
      <td><?= $d->email(); ?></td>
      <td><?= $d->telephone(); ?></td>
      <td>
        <a href="http://localhost/HMS_PROJECT/index.php?url=detail_patient&id=<?=$d->id();?>" id="link" style="text-decoration:none;"><i class="fas fa-info-circle"></i>  </a>
        <a href="http://localhost/HMS_PROJECT/index.php?url=delete_patient&id=<?=$d->id();?>" id="link" style="text-decoration:none;"  id="link" style="text-decoration:none;"><i class="fas fa-trash-alt"></i></a>
        <a href="http://localhost/HMS_PROJECT/index.php?url=modif_patient&id=<?=$d->id();?>" id="link" style="text-decoration:none;"><i class="fas fa-pen-square"></i></a>
      </td>
    </tr>
  </tbody>


<?php
    endforeach;
?>
</table>
</div>