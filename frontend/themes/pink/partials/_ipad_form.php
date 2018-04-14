<?php
use common\models\Ipad;
use yii\bootstrap\ActiveForm;
use yii\bootstrap\Html;
use yii\widgets\MaskedInput;

$siteTel = Yii::$app->params['siteTel'];

$callback_model = new Ipad();

?>
<div id="ipad-form" class="order-form call-back">
    <div class="title" style="text-align: center">Участвовать в розыгрыше</div>
    <p style='font: 14px/22px "Trebuchet MS",Helvetica,sans-serif; color: #111;'>Для того чтобы участвовать в розыгрыше - заполните форму ниже</p>
    <?php $form = ActiveForm::begin([
            'action' =>['/promo.php'],
            'options' => ['role'=>false],
    ])?>
    <?= $form->field($callback_model, 'name')->textInput()->label('Имя:')?>
    <?= $form->field($callback_model, 'tel')->widget(MaskedInput::className(),['name' => 'phone', 'mask' => '+7(999)9999999'])->label('Номер телефона:') ?>
    <?= $form->field($callback_model, 'promo')->textInput()->label('Промокод:')?>
    <div style="text-align: center;">
        <?= Html::submitButton('Учавствовать в акции',['class'=>'btn btn-pink','style'=>'height: 58px; margin-top: 20px; font-size: 25px; line-height: 20px;']) ?>
    </div>
    <?php ActiveForm::end(); ?>
    <p style='font: 14px/22px "Trebuchet MS",Helvetica,sans-serif; color: #111;'>Промокод находится в вашей посылке вместе с картиной.<br />Если у вас нет промокода пожалуйста позвоните нашим менеджерам -<br /><?=$siteTel['Russia']['country']?> <?=$siteTel['Russia']['city']?> <?=$siteTel['Russia']['number']?> (Бесплатно по всей России)</p>
</div>


<script>

</script>


<?php
$js=<<<SCRIPT
console.log('test');
$('#ipad-promo').on('change blur focus',function(e){
    $(this).val($(this).val().toLowerCase())
});
SCRIPT;
$this->registerJs($js);
