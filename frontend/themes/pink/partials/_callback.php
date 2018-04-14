<?php
use common\models\Call;
use yii\bootstrap\ActiveForm;
use yii\bootstrap\Html;
use yii\widgets\MaskedInput;

$callback_model = new Call();
?>
<div id="callback-form" class="order-form call-back">
    <div class="title" style="text-align: center">Мы вам позвоним</div>
    <p style='font: 14px/22px "Trebuchet MS",Helvetica,sans-serif; color: #111;'>Оставьте свой телефон и мы позвоним вам
        в ближайшие несколько минут</p>
    <?php $form = ActiveForm::begin([
        'action' =>['order/call/'],
        'validateOnBlur'         => false,
        'validateOnType'         => false,
        'validateOnChange'       => false,
        'validateOnSubmit'       => true,
        'id'=>'callback_form',
        'options' => ['role'=>false],
    ])?>
    <?= Html::activeHiddenInput($callback_model, 'client_time')?>
    <?= $form->field($callback_model, 'client_name')->hiddenInput()->label(false)?>
    <?= $form->field($callback_model, 'client_tel')->widget(MaskedInput::className(),['name' => 'phone', 'mask' => '+7(999)9999999'])->label('Номер телефона:') ?>
    <div style="text-align: center;">
        <?= Html::submitButton('Позвоните мне',['class'=>'btn btn-pink','style'=>'height: 58px; margin: 20px auto; font-size: 25px; line-height: 20px;']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>
