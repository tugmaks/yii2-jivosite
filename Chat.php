<?php

namespace tugmaks\Jivosite;

/**
 * Jivosite chat widget
 */
class Chat extends \yii\base\Widget
{
    public $widgetId;
    public function init()
    {
        parent::init();
        
    }
    
    public function run()
    {
        echo $this->widgetId;
    }
}
