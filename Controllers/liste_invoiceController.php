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
        $this->_manager = new InvoiceManager;
        $invo = $this->_manager->getInvoice();

        $this->_view = new View('liste_invoice');
        $this->_view->generate(array('invoice' => $invo));
    }
}
?>