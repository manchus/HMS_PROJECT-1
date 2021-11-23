<?php
    class rendez_vousController
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
                $this->add();
            }
        }
        private function add()
        {
            $this->_manager = new AppointmentManager;
            // take appoinment not implemented correctly GH
            //    $apps = $this->_manager->takeAppointment();
            $apps = $this->_manager->getAppointment();
            
            $this->_view = new View('rendez_vous');
            $this->_view->generate(array('appointment' => $apps));
        }
    }
?>