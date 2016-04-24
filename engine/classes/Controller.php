<?php

/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2016-04-23
 * Time: 오후 12:38
 */
abstract class Controller
{
    protected $sAction;
    
    public function __construct($sAction) {
        $this->sAction = $sAction;
    }

    public function execute() {
        $sAction    = $this->sAction;
        $oView      = View::getInstance();
        $oView->setView($this->sAction);
        if( method_exists($this, $sAction) )
        {
            try{
                $result = $this->{$sAction}();
                $oView->setData(1, $result);
            }catch(Exception $e) {
                $oView->setData($e->getCode(), $e);
            }
        }
        else
            $oView->setType(404);

        $oView->render($result);
    }
    
}