<?php
    class Modif_profilController
    {
        private $_view;
        private $_usermanager;
    
        public function __construct($url)
        {
            if(isset($url) && $url && count($url) > 1)
            {
                throw new Exception('Page introuvable');
            }
            else
            {

                if(!isset($_POST["update"]))
                    $this->getProfilUpdate();
                else
                    $this->doctors();
            }
        }
    
        private function doctors()
        {
            /*
            if($_COOKIE["doctoremail"]){
                $this->_usermanager = new DoctorManager;

            }
            if($_COOKIE["employeemail"]){
                $this->_usermanager = new EmployeManager;

            }
            if($_COOKIE["nurseemail"]){
                $this->_usermanager = new NurseManager;

            }
            if($_COOKIE["patientemail"]){
              $this->_usermanager = new PatientManager;
              $docs = $this->_usermanager->updatePatient();
            }
        */
        $this->_usermanager = new DoctorManager;
        $docs = $this->_usermanager->updateDoctor();
    
            $this->_view = new View('modif_profil');
            $this->_view->generate(array('doctor' => $docs));
        }

        private function getProfilUpdate()
        {
            var_dump($_COOKIE);
            var_dump($_REQUEST);
            if(isset($_COOKIE["doctoremail"])){
                $this->_usermanager = new DoctorManager;
                $docs = $this->_usermanager->getDoctorDetailId($_COOKIE["doctoremail"]);
            }
            if(isset($_COOKIE["patientemail"])){
                $this->_usermanager = new PatientManager;
                $docs = $this->_usermanager->getPatientDetailId($_COOKIE["patientemail"]);
            }
            if(isset($_COOKIE["adminemail"])){
                $this->_usermanager = new AdminManager;
                $docs = $this->_usermanager->getDetailId($_COOKIE["adminemail"]);
            }

                
            $this->_view = new View('modif_profil');
            $this->_view->generate(array('doctor' => $docs));
        }
    }
?>