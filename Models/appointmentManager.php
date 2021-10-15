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
}