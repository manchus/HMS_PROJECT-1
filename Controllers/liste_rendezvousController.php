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
        if(isset($_GET["qry"]))
        {
            $qry = $_GET["qry"];
        }
        else
            $qry = "patient";
        $field = $qry=="patient"?"id_patient":"id_medecin";
        
        if(isset($_COOKIE["adminemail"])){
            $this->_manager = new SummaryUserAppointmentManager;
            $old = $this->_manager->getSummaryUserAppointmentSummary($qry,"SummaryUserAppointment",$field,0);
            $this->_manager = new ListUserAppointmentManager;
            $new = $this->_manager->getListUserAppointment($qry,"ListUserAppointment",$field,1);
    
            $this->_view = new View('liste_rendezvous');
            $this->_view->generate(array(  'oldApp'=>$old,'newApp'=>$new,'qry'=>$qry));
        }
        if(isset($_COOKIE["patientemail"])){
            $this->_manager = new SummaryUserAppointmentManager;
            $old = $this->_manager->getSummaryUserAppointmentSummary($qry,"SummaryUserAppointment",$field,0);
            $this->_manager = new ListUserAppointmentManager;
            $new = $this->_manager->getListUserAppointment($qry,"ListUserAppointment",$field,1);
    
            $this->_view = new View('liste_rendezvous');
            $this->_view->generate(array(  'oldApp'=>$old,'newApp'=>$new,'qry'=>$qry));
            }
            
        if(isset($_COOKIE["doctoremail"])){
            $this->_manager = new SummaryUserAppointmentManager;
            $old = $this->_manager->getSummaryUserAppointmentSummary($qry,"SummaryUserAppointment",$field,0);
            $this->_manager = new ListUserAppointmentManager;
            $new = $this->_manager->getListUserAppointment($qry,"ListUserAppointment",$field,1);
    
            $this->_view = new View('liste_rendezvous');
            $this->_view->generate(array(  'oldApp'=>$old,'newApp'=>$new,'qry'=>$qry));
            }
            
        if(isset($_COOKIE["employeemail"])){
            $this->_manager = new SummaryUserAppointmentManager;
            $old = $this->_manager->getSummaryUserAppointmentSummary($qry,"SummaryUserAppointment",$field,0);
            $this->_manager = new ListUserAppointmentManager;
            $new = $this->_manager->getListUserAppointment($qry,"ListUserAppointment",$field,1);
    
            $this->_view = new View('liste_rendezvous');
            $this->_view->generate(array(  'oldApp'=>$old,'newApp'=>$new,'qry'=>$qry));
            }

    }

}
?>