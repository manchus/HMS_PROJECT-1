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
}