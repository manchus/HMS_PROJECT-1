<?php

class AdminManager extends Model
{
    public function loginAdmin()
    {
        $this->getBdd();
        if(isset($_POST["login"]) && !empty($_POST))
        {
            return $this->login('administration','Administrateur',
            $_POST["email"],$_POST["mdp"],"liste_medecin","adminemail");
        }
        if(isset($_COOKIE["adminemail"]))
        {
            echo "<script>document.location.href='/HMS_PROJECT/liste_medecin'</script>";  
        }
    }

    public function getDetailId($id)
    {
        $this->getBdd();
        return $this->details('administration','Patient','id',$id);
    }

    public function updateAdmin()
    {
        $this->getBdd();
        if (isset($_GET["id"]))
            $id = $_GET["id"];
        else
            $id = $_COOKIE["doctoradmin"];

        if (isset($_POST["update"])) {
            if (!empty($_POST)) {

                echo "<script>window.location.href = '/HMS_PROJECT/liste_medecin';</script>";
                return $this->updateDoctors(
                    'doctor',
                    $_POST["nom"],
                    $_POST["prenom"],
                    $_POST["ddn"],
                    $_POST["email"],
                    $_POST["adresse"],
                    $_POST["code_postal"],
                    $_POST["ville"],
                    $_POST["province"],
                    $_POST["telephone"],
                    'Doctor',
                    $id
                );
                $confirm = "La modification du médecin a été effectué avec succès!";
            }
        }
    }
}