<?php

namespace tugmaks\Jivosite;

use Yii;
use yii\base\InvalidConfigException;
use yii\web\View;

/**
 * Jivosite chat widget
 */
class Chat extends \yii\base\Widget
{

    public $widgetId;

    public function init()
    {
        $this->widgetId = (null == $this->widgetId) ? array_key_exists('jivosite.widgetId', Yii::$app->params) ? Yii::$app->params['jivosite.widgetId'] :
                null :
            $this->widgetId;

        if ($this->widgetId == null) {
            throw new InvalidConfigException('No Jivosite widgetId specified');
        }
        parent::init();
    }

    public function run()
    {
        $js = <<< JS
(function(){ var widget_id = '{$this->widgetId}';
var d=document;var w=window;function l(){var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true;s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();
JS;
        $this->view->registerJs($js, View::POS_END);
    }
}
