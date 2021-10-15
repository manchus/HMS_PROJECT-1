<?php
    class Modif_patientController
    {
        private $_view;
        private $_doctormanager;
    
        public function __construct($url)
        {
            if(isset($url) && $url && count($url) > 1)
            {
                throw new Exception('Page introuvable');
            }
            else
            {
                $this->doctors();
            }
        }
    
        private function doctors()
        {
            $this->_doctormanager = new PatientManager;
            $docs = $this->_doctormanager->updatepatient();
    
            $this->_view = new View('modif_patient');
            $this->_view->generate(array('patient' => $docs));
        }
    }
?>