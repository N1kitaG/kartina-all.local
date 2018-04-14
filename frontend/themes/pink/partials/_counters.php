<?php

use common\models\Config;

$counters = Config::find()->where(['key'=>'counters'])->one();
?>
<?=isset($counters->value)?$counters->value:''?>
