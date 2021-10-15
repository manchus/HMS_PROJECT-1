<?php
$this->_t = "Liste des rendez-vous";
?>  

  <?php 
    include("Public/sidebar.php");
  ?>
<?php
try{
    $pdo = new PDO("mysql:host=localhost;dbname=system_hopital;charset=utf8","root","");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("ERROR: Could not connect. " . $e->getMessage());
}
?>
  <div class="col-10 table-responsive">
    <br>
  <table class="table table-bordered">
  <thead>
    <tr class="table-primary">
      <th scope="col">Pris par</th>
      <th scope="col">Pris avec</th>
      <th scope="col">Date du rendez-vous</th>
      <th scope="col">Heure du rendez-vous</th>
      <th></th>
    </tr>
  </thead>
<?php
    foreach($appointment as $d){
      $sql1 = "SELECT nom,prenom FROM doctor WHERE id = ".$d->id_medecin().";";
      $sql2 = "SELECT nom,prenom FROM patient WHERE id = ".$d->id_patient().";";
      $stmt1 = $pdo->prepare($sql1);
      $stmt2 = $pdo->prepare($sql2);
      $stmt1->execute();
      $stmt2->execute();
      $row1 = $stmt1->fetch(PDO::FETCH_ASSOC);
      $row2 = $stmt2->fetch(PDO::FETCH_ASSOC);
?>
  <tbody>
    <tr>
      <td><?=$row2["nom"]?> <?=$row2["prenom"]?></td>
      <td>Dr. <?=$row1["nom"]?> <?=$row1["prenom"]?></td>
      <td><?=$d->date_rendezvous()?></td>
      <td><?=$d->heure_rendezvous()?></td>
      <td>
        <a href="http://localhost/HMS_PROJECT/index.php?url=detail_rendezvous&id=<?=$d->id();?>" id="link" style="text-decoration:none;"  id="link" style="text-decoration:none;"><i class="fas fa-info-circle"></i>  </a>
    </tr>
  </tbody>


<?php
}
?>
</table>
</div>