<?php
require_once('Views/View.php');

class liste_rendezvousController
{
    private $_view;
    private $_manager;

    public function __construct($url)
    {
        if(isset($url) && $url && count($url) > 1)
        {
            throw new Exception('Page introuvable');
        }
        else
        {
            $this->pat();
        }
    }

    private function pat()
    {
        if(isset($_GET["user"]))
        {
            $usr = $_GET["user"];
        }
        else
            $usr = "medicin";
        
        if(isset($_COOKIE["adminemail"])){
            $this->_manager = new SummaryUserAppointmentManager;
            $docOld = $this->_manager->getSummaryUserAppointmentSummary("doctor","SummaryUserAppointment","id_medecin",0);
            $patOld = $this->_manager->getSummaryUserAppointmentSummary("patient","SummaryUserAppointment","id_patient",0);
            $this->_manager = new ListUserAppointmentManager;
            $docNew = $this->_manager->getListUserAppointmentSummary("doctor","ListUserAppointment","id_medecin",1);
            $patNew = $this->_manager->getListUserAppointmentSummary("patient","ListUserAppointment","id_patient",1);
    
            $this->_view = new View('liste_rendezvous');
            $this->_view->generate(array( 'doctor' => $docOld,'doctorN' => $docNew, 'patient'=>$patOld,'patientN'=>$patNew,'usr'=>$usr));
        }
        if(isset($_COOKIE["patientemail"])){
            $this->_manager = new SummaryUserAppointmentManager;
            $docOld = $this->_manager->getSummaryUserAppointmentSummary("patient","SummaryUserAppointment","id_patient",0);
            $patOld = $this->_manager->getSummaryUserAppointmentSummary("patient","SummaryUserAppointment","id_patient",0);
            $this->_manager = new ListUserAppointmentManager;
            $docNew = $this->_manager->getListUserAppointmentSummary("patient","ListUserAppointment","id_patient",1);
            $patNew = $this->_manager->getListUserAppointmentSummary("patient","ListUserAppointment","id_patient",1);
    
            $this->_view = new View('liste_rendezvous');
            $this->_view->generate(array( 'doctor' => $docOld,'doctorN' => $docNew, 'patient'=>$patOld,'patientN'=>$patNew,'usr'=>$usr));
        }
        if(isset($_COOKIE["employeemail"])){
            $this->_manager = new SummaryUserAppointmentManager;
            $docOld = $this->_manager->getSummaryUserAppointmentSummary("patient","SummaryUserAppointment","id_patient",0);
            $patOld = $this->_manager->getSummaryUserAppointmentSummary("patient","SummaryUserAppointment","id_patient",0);
            $this->_manager = new ListUserAppointmentManager;
            $docNew = $this->_manager->getListUserAppointmentSummary("patient","ListUserAppointment","id_patient",1);
            $patNew = $this->_manager->getListUserAppointmentSummary("patient","ListUserAppointment","id_patient",1);
    
            $this->_view = new View('liste_rendezvous');
            $this->_view->generate(array( 'doctor' => $docOld,'doctorN' => $docNew, 'patient'=>$patOld,'patientN'=>$patNew,'usr'=>$usr));
        }

    }

}
?>