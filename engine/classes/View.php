<?php

/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2016-04-23
 * Time: 오후 12:43
 */
class View extends Singleton
{
    protected $sType;
    protected $nCode;
    protected $aData;

    public function __construct() {
        
    }
    public function setType($sType='json') {
        $this->sType = $sType;
    }
    public function setData($nCode, $aOut) {
        $this->nCode = $nCode;
        $this->aData = $aOut;
    }
    public function render($aData) {
        switch(strtolower($this->sType)) {
            case 'json':
                $this->printJson();
                break;
            case 'xml':
                $this->printXml();
                break;
            case '404':
                $this->print404();
                break;
            default:
                $this->printHtml();
                break;
        }
    }

    private function print404() {
        echo 'file not found';
    }
    
    private function printXml() {

    }
    private function printJson() {
        echo json_encode(array('result' => $this->nCode, 'data' => $this->aData ));
    }

    private function printHtml() {
        extract($this->aData);
        include APP_ROOT.DS.'views'.DS.APP_CTRL_DIR.DS.APP_ACTION.APP_VIEW_EXT;
    }
}