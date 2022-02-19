<?php
require_once('Views/View.php');

class ajout_rendezvousController
{
    private $_view;
    private $_appmanager;
    private $_patientmanager;
    private $_depmanager;

    public function __construct($url)
    {
        if(isset($url) && $url && count($url) > 1)
        {
            throw new Exception('Page introuvable');
        }
        else
        {
            $this->rendezvous();
        }
    }

    private function rendezvous()
    {
        $this->_appmanager = new AppointmentManager;
        $apoint = $this->_appmanager->addRendezvous();
        $this->_docmanager = new DoctorManager;
        $med = $this->_docmanager->getDoctors();
        $this->_patientmanager = new PatientManager;
        $pat = $this->_patientmanager->getPatients();
        $this->_depmanager = new DepartementManager;
        $dep = $this->_depmanager->getDepartements();


        $this->_view = new View('ajout_rendezvous');
        $this->_view->generate(array('rendezvous' => $apoint,'patient'=>$pat,'medecin'=>$med,'depart'=>$dep));
    }
}
?>