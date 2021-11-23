<br>
<?php $this->_t = "Ajouter Rendez-vous" ?>
<form method="post" class="form-group container jumbotron" id="form" enctype="multipart/form-data">
    <label for="id_patient">Nom du Patient<b style="color:red;">*</b></label>
        <div class="row">
            <div class="col">
                <select name="id_patient">
                    <?php foreach($patient as $pa): ?>
                        <option value="<?=$pa->id()?>">Dr.<?= $pa->prenom(); ?> <?= $pa->nom(); ?></option>
                    <?php endforeach; ?>
                </select>            
            </div>
        </div>
        <br>
        <label for="id_medecin">Medecin <b style="color:red;">*</b></label>
        <div class="row">
            <div class="col">
                <select name="id_medecin">
                    <?php foreach($medecin as $me): ?>
                        <option value="<?=$me->id()?>">Dr.<?= $me->prenom(); ?> <?= $me->nom(); ?></option>
                    <?php endforeach; ?>
                </select> 
            </div>
        </div>
        <br>
        <label for="date_rendezvous">Date <b style="color:red;">*</b></label>
        <div class="row">
            <div class="col-6">
            <input type="date" class="form-control" placeholder="Date de Rendez vous" id="date_rendezvous" name="date_rendezvous" required>
            </div>
        </div>
        <label for="heure_rendezvous">Heure <b style="color:red;">*</b></label>
        <div class="row">
            <div class="col-4">
            <input type="time" class="form-control" placeholder="Date de Rendez vous" id="heure_rendezvous" name="heure_rendezvous" required>
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
                <input type="submit" class="btn btn-info" name="add" value="Ajouter">
            </div>
        </div>
</form>