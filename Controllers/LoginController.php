<?php
require_once('Views/View.php');

class LoginController
{
    private $_view;
    private $_adminmanager;
    private $_patientmanager;

    public function __construct($url)
    {
        if(isset($url) && $url && count($url) > 1)
        {
            throw new Exception('Page introuvable');
        }
        else
        {
            $tmp = 0;
            $usr="";
            if(isset($_GET["tusr"]))
            {
                if($_GET["tusr"]=="patient"){
                    $this->loginPatients();
                }
                else if($_GET["tusr"]=="admin"){
                    $this->loginAdmins();
                }

    
                
            }
            else
                $usr = "No me funciono mi idea para login";
            //$this->loginPatients();
           
        }
    }

    private function loginAdmins()
    {   

        $this->_adminmanager = new AdminManager;
        $admin = $this->_adminmanager->loginAdmin();

        $this->_view = new View('login');
        //echo array('administrator' => $admin);
        $this->_view->generate(array('administrator' => $admin));
    }

    private function loginPatients()
    {
        $this->_patientmanager = new PatientManager;
        $patient = $this->_patientmanager->loginPatient();
        
        $this->_view = new View('login');
        $this->_view->generate(array('patient' => $patient));
    }
}
?>