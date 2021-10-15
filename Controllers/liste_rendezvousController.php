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
        $this->_manager = new AppointmentManager;
        $dep = $this->_manager->getAppointment();

        $this->_view = new View('liste_rendezvous');
        $this->_view->generate(array('appointment' => $dep));
    }
}
?>