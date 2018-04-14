<?php
/**
 * @var $model \common\models\Order
 *
 */
use yii\bootstrap\ActiveForm;
use yii\bootstrap\Html;
use yii\widgets\MaskedInput;
?>
<?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model,'client_tel')->widget(MaskedInput::className(),['name' => 'phone', 'mask' => '+7(999)9999999'])->label(false)?>
    <?= Html::submitButton('Отправить')?>
<?php ActiveForm::end();?>