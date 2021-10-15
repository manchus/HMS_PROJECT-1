<?php
require_once('Views/View.php');

class Detail_EmployeController
{
    private $_view;
    private $_nursemanager;

    public function __construct($url)
    {
        if(isset($url) && $url && count($url) > 1)
        {
            throw new Exception('Page introuvable');
        }
        else
        {
            $this->nursedetail();
        }
    }

    private function nursedetail()
    {
        $this->_nursemanager = new EmployeManager;
        $nurs = $this->_nursemanager->getEmployeDetail();

        $this->_view = new View('detail_employe');
        $this->_view->generate(array('employe' => $nurs));
    }
}
?>