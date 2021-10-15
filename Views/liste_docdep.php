<?php
$this->_t = "Liste des médecins à l'hôpital";
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
    <a href="/HMS_PROJECT/ajout_docdep" class="btn btn-info float-right"><i class="fas fa-plus-square"></i></a>
    <br>
  <table class="table table-bordered">
  <thead>
    <tr class="table-primary">
      <th scope="col">Nom complet</th>
      <th scope="col">Département</th>
      <th scope="col">Adresse</th>
      <th scope="col">Ville</th>
      <th scope="col">Spécialité</th>
      <th></th>
    </tr>
  </thead>
<?php
    foreach($doctor_departement as $d){
      $sql1 = "SELECT nom,prenom FROM doctor WHERE id = ".$d->id_doc().";";
      $sql2 = "SELECT * FROM departement WHERE id = ".$d->id_dep().";";
      $stmt1 = $pdo->prepare($sql1);
      $stmt2 = $pdo->prepare($sql2);
      $stmt1->execute();
      $stmt2->execute();
      $row1 = $stmt1->fetch(PDO::FETCH_ASSOC);
      $row2 = $stmt2->fetch(PDO::FETCH_ASSOC);
?>
  <tbody>
    <tr>
      <td>Dr. <?=$row1["nom"]?> <?=$row1["prenom"]?></td>
      <td><?=$row2["nom_dep"]?></td>
      <td><?=$row2["adresse"]?></td>
      <td><?=$row2["lieu"]?></td>
      <td><?=$row2["specialite"]?></td>
      <td>
        <a href="http://localhost/HMS_PROJECT/index.php?url=delete_docdep&id=<?=$d->id();?>" id="link" style="text-decoration:none;"  id="link" style="text-decoration:none;"><i class="fas fa-trash-alt"></i></a>
        <a href="http://localhost/HMS_PROJECT/index.php?url=modif_docdep&id=<?=$d->id();?>" id="link" style="text-decoration:none;"><i class="fas fa-pen-square"></i></a></td>
    </tr>
  </tbody>


<?php
}
?>
</table>
</div>