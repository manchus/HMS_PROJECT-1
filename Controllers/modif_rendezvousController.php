<?php
require_once('Views/View.php');

class modif_rendezvousController
{
    private $_view;
    private $_manager;
    private $_managerDoctor;
    private $_managerPatient;

    public function __construct($url)
    {
        if(isset($url) && $url && count($url) > 1)
        {
            throw new Exception('Page introuvable');
        }
        else
        {
         //   if(isset($_GET["id"]))
         //       
            if(!isset($_POST["update"]))
              $this->rdvUpdate();
            else
              $this->rdv();
        }
    }

    private function rdv()
    {

        $this->_manager = new AppointmentManager;
        $rdv = $this->_manager->updateRendezvous();

    //    $this->_view = new View('modif_rendezvous');
    //    $this->_view->generate(array('rendezvous' => $rdv));
    }

    private function rdvUpdate()
    {
        $this->_manager = new AppointmentManager;
        $rdv = $this->_manager->getAppointmentDetail();

        $this->_managerDoctor = new DoctorManager;
        $rdvDoctor = $this->_managerDoctor->getDoctorDetailId($rdv->id_medecin());

        $this->_managerPatient = new PatientManager;
        $rdvPatient = $this->_managerPatient->getPatientDetailId($rdv->id_patient());


        $this->_view = new View('modif_rendezvous');
        $this->_view->generate(array('rendezvous' => $rdv,'patient'=>$rdvPatient,'doctor'=>$rdvDoctor));
    }
}
?>