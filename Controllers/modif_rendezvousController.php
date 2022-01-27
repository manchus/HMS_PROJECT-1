<?php
require_once('Views/View.php');

class modif_rendezvousController
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
        $this->_manager = new rendezvousManager;
        $rdv = $this->_manager->updateRendezvous();

        $this->_view = new View('modif_rendezvous');
        $this->_view->generate(array('rendezvous' => $rdv));
    }
}
?>