<?php

class prestashopservicedeskServiceDeskApiModuleFrontController extends ModuleFrontController {
    public $template = "module:prestashopservicedesk/views/templates/front/api.tpl";

    public function initContent(){
        parent::initContent();
        // $this->setTemplate($this->template);
        $response = ["test"=>'name'];
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($response);
        exit;
    }

    
}