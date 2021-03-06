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

    public function execute()
    {
        $sAction    = $this->sAction;
        $oView      = new View();
        if( method_exists($this, $sAction) )
        {
            $result = $this->{$sAction}();
        }

        $oView->render($result);
    }
    
}