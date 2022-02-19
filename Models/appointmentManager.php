<?php

class AppointmentManager extends Model
{
    /*public function takeAppointment()
    {
        $this->getBdd();
        if(isset($_POST["take"]) && !empty($_POST))
        {
            $id_medecin = $_POST["id_medecin"];
            $date = $_POST["date"];
            $heure = $_POST["heure"];
            return $this->addAppointment("appointment","Appointment",3,$id_medecin,$date,$heure);
        }
    }*/
    public function getAppointment()
    {
        $this->getBdd();
        return $this->getAll("appointment","Appointment");
    }
    public function getAppointmentDetail()
    {
        $this->getBdd();
        if(isset($_GET["id"]))
            return $this->details("appointment","Appointment","id",$_GET["id"]);
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
            return $this->addAppointment('appointment',$_POST["id_patient"],$_POST["id_medecin"],
            $_POST["date_rendezvous"],$_POST["heure_rendezvous"],'Appointment');

        }
    }



}