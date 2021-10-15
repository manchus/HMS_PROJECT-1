<?php
$this->_t = "Détail du patient";
    foreach($patient as $d):
        ?>
        <style>
          .container{
            border-style:none;
            border-radius:10px;
            background-color:rgb(209, 255, 255)
          }
          .card-img-top{

          }
        </style>
        <br><br>
        <div class="container" align="center" style="width:50%;">
          <br>
        <div class="row">
          <div class="col-md-12" align="center">
          <table class="table">
          <tbody>
            <tr>
              <th>Nom complet du patient</th>
              <td><?=$d->prenom()?> <?=$d->nom()?></td>
            </tr>
            <tr>
              <th>Date de naissance</th>
              <td><?=$d->date_naissance()?></td>
            </tr>
            <tr>
              <th>Adresse Email</th>
              <td><?=$d->email()?></td>
            </tr>
            <tr>
              <th>Adresse Courriel</th>
              <td><?=$d->adresse()?>, <?=$d->code_postal()?>, <?=$d->ville()?>, <?=$d->province()?></td>
            </tr>
            <tr>
              <th>Numéro de téléphone</th>
              <td><?=$d->telephone()?></td>
            </tr>
            <tr>
              <th>Cause du rendez-vous</th>
              <td><?=$d->description()?></td>
            </tr>
          </tbody>
        </table>
        <a href="/HMS_PROJECT/liste_patient"><button class="btn btn-info">Retour</button></a>
          </div>
            </div>
            <br>
            </div>
        
<?php
    endforeach;
?>