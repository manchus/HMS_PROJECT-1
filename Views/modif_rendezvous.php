<br>
<?php $this->_t = "Modification du Rendez vous" ?>
<?php var_dump($_GET);
 var_dump($_POST);
?>
<form method="post" class="form-group container jumbotron" id="form" enctype="multipart/form-data">
    <label for="id_patient">Nom du Patient<b style="color:red;">*</b></label>
        <div class="row">
            <div class="col">
                    <label><?php echo($patient->nom()." ".$patient->prenom()); ?></label>            
            </div>
        </div>
        <br>
        <label for="id_medecin">Medecin <b style="color:red;">*</b></label>
        <div class="row">
            <div class="col">
            <div class="col">
                    <label><?php echo($doctor->nom()." ".$doctor->prenom()); ?></label>            
            </div>
            </div>
        </div>
        <br>
        <label for="date_rendezvous">Date <b style="color:red;">*</b></label>
        <div class="row">
            <div class="col-6">
            <input type="date" class="form-control" value="<?php echo($rendezvous->date_rendezvous()); ?>" name="date_rendezvous" required>
            </div>
        </div>
        <label for="heure_rendezvous">Heure <b style="color:red;">*</b></label>
        <div class="row">
            <div class="col-4">
            <input type="time" class="form-control" value="<?php echo($rendezvous->heure_rendezvous()); ?>" id="heure_rendezvous" name="heure_rendezvous" min="8:00" max="18:00" step="6000" required>
             </div>
        </div>
        <br>
        <div class="row">
            <div class="col-3">
                <a href="/HMS_PROJECT/liste_rendezvous" class="btn btn-info">Retour</a>
            </div>
            <div class="col-6">
            </div>
            <div class="col-3">
                <input type="submit" class="btn btn-info" name="update" value="Mettre à jour">
            </div>
        </div>
</form>