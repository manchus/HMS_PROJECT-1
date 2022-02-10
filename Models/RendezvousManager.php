<?php

class RendezvousManager extends Model
{
    public function getRendezvous()
    {
        $this->getBdd();
        return $this->getAll('appointment','Appointment');
    }
    
    public function deleteRendezvous()
    {
        $this->getBdd();
        if(isset($_GET["id"]))
        {
            $id = $_GET["id"];
            return $this->delete('appointment','Appointment',$id);
        }
    }
    public function addRendezvous()
    {
        $this->getBdd();
        if(isset($_POST["add"]) && !empty($_POST))
        {
            
            echo "<script>window.location.href = '/HMS_PROJECT/liste_rendezvous';</script>";
            try{
                $this->addAppointment('appointment',$_POST["id_patient"],$_POST["id_medecin"],
                $_POST["date_rendezvous"],$_POST["heure_rendezvous"],'Appointment');
                
                return true;
            }
            catch(Exception $e){
                echo 'Exception: ',  $e->getMessage(), "\n";
                return false;
            }


        }
    }
    public function updateRendezvous()
    {
        $this->getBdd();
        if(isset($_POST["update"]) && !empty($_POST))
        {
            echo "<script>window.location.href = '/HMS_PROJECT/liste_rendezvous';</script>";
            return $this->updateAppointment('appointment',$_POST["id_patient"],$_POST["id_medecin"],
            $_POST["date_rendezvous"],$_POST["heure_rendezvous"],'Appointment',$_GET["id"]);
        }
    }
    
    public function getRendezvousDetailId($id)
    {
        $this->getBdd();
        return $this->details('appointment','Rendezvous','id',$id);
    }
}

?>