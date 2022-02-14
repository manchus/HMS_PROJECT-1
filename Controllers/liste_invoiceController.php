<?php
require_once('Views/View.php');

class liste_invoiceController
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
            $this->linv();
        }
    }

    private function linv()
    {
        if(isset($_GET["user"]))
        {
            $usr = $_GET["user"];
        }
        else
            $usr = "patient";
        
        $this->_manager = new SummaryInvoiceManager;
        if($usr == "patient")
        {
            $invo = $this->_manager->getSummaryInvoice("patient");
            $menu =["Patient", "Medecin","Quantité rendez-vous","Prix rendez-vous"];
    
        }
        if($usr == "doctor")
        {
            $invo = $this->_manager->getSummaryInvoice("doctor");
            $menu =["Medecin", "Patient","Quantité rendez-vous","Prix rendez-vous"];

        }
            
        if($usr == "date")
        {
            $invo = $this->_manager->getSummaryInvoice("date");
            $menu =["Patient", "Medecin","Quantité rendez-vous","Prix rendez-vous"];
        }
            
        
        $this->_view = new View('liste_invoice');
        $this->_view->generate(array('invoice' => $invo, 'menu' => $menu));
    }
}
?>