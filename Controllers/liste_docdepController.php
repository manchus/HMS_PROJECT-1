<?php
require_once('Views/View.php');

class liste_docdepController
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
            $this->docdep();
        }
    }

    private function docdep()
    {
        $this->_manager = new Doctor_DepartementManager;
        $docdep = $this->_manager->getDD();
        $doc = $this->_manager->Doc();
        $dep = $this->_manager->Dep();

        $this->_view = new View('liste_docdep');
        $this->_view->generate(array('doctor_departement' => $docdep, 'doctor' => $doc, 'departement' => $dep));
    }
}
?>