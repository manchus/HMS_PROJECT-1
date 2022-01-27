<?php
require_once('Views/View.php');

class ajout_rendezvousController
{
    private $_view;
    private $_rvmanager;
    private $_patientmanager;
    private $_doctormanager;

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
        $this->_rvmanager = new RendezvousManager;
        $docs = $this->_rvmanager->addRendezvous();
        $this->_patientmanager = new PatientManager;
        $pat = $this->_patientmanager->getPatients();
        $this->_doctormanager = new DoctorManager; 
        $med = $this->_doctormanager->getDoctors();

        $this->_view = new View('ajout_rendezvous');
        $this->_view->generate(array('rendezvous' => $docs,'patient'=>$pat,'medecin'=>$med));
        //$this->_view->generate(array('rendezvous' => $docs));
    }
}
?>