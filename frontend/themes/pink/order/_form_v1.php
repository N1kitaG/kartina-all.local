<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\MaskedInput;
use common\models\Order;

$order_model = new Order();
?>
<div id="order-form" class="order-form">
    <?php $form = ActiveForm::begin([
        'action' =>['order/send/'],
        'validateOnBlur'         => false,
        'validateOnType'         => false,
        'validateOnChange'       => false,
        'validateOnSubmit'       => true,
        'id'=>'order_form',
        'options' => ['role'=>false],
    ])?>
    <div class="clearfix desc-wrapper">
        <p class="title"></p>
        <div class="order-image-block">
            <div class="order-img"></div>
            <div class="discount">-<?=Yii::$app->params['discount']?><span>%</span></div>
        </div>
        <div class="description">
            <p class="price">Цена сейчас:</p>
            <p><span class="price-count"></span></p>
            <p class="bonus">+ mp3-плеер в подарок!</p>
            <hr class="dotted">
            <p class="price-tomorrow">Цена завтра:</p>
            <p><span class="price-t-count"></span></p>
        </div>
    </div>
    <div style="text-align: center; margin: 0 auto;">
        <?= Html::activeHiddenInput($order_model, 'product_id')?>
        <?= Html::activeHiddenInput($order_model, 'client_time')?>
        <?= $form->field($order_model, 'client_name')->textInput()->label('Ваше имя:')->hint('чтобы мы знали, как к Вам обратиться') ?>
        <?= $form->field($order_model, 'client_tel')->widget(MaskedInput::className(),['name' => 'phone', 'mask' => '+7(999)9999999'])->label('Номер телефона:')->hint('чтобы мы смогли с Вами связаться и уточнить детали заказа') ?>
        <div class="sizes-title">Выберите размер картины</div>
        <div class="sizes">
            <div class="size active" id="s">
                <label>
                    <input checked class="radio" type="radio" name="size" value="s">
                    <span class="radio-custom"></span>
                    <span class="size-name">S</span>
                    <span class="size-desc">Размер<br><span id="size-s"></span> см</span>
                </label>
            </div>
            <div class="size" id="m">
                <label>
                    <input class="radio" type="radio" name="size"  value="m">
                    <span class="radio-custom"></span>
                    <span class="size-name">M</span>
                    <span class="size-desc">Размер<br><span id="size-m"></span> см</span>
                    <span id="size-price-m"></span>
                </label>
            </div>
            <div class="size hit" id="l">
                <label>
                    <input class="radio" type="radio" name="size"  value="l">
                    <span class="radio-custom"></span>
                    <span class="size-name">L</span>
                    <span class="size-desc">Размер<br><span id="size-l"></span> см</span>
                    <span id="size-price-l"></span>
                </label>
            </div>
            <div class="size" id="xl">
                <label>
                    <input class="radio" type="radio" name="size"  value="xl">
                    <span class="radio-custom"></span>
                    <span class="size-name">XL</span>
                    <span class="size-desc">Размер<br><span id="size-xl"></span> см</span>
                    <span id="size-price-xl"></span>
                </label>
            </div>
        </div>
        <?= Html::submitButton('Заказать',['class'=>'btn btn-pink', 'style' => 'margin: 0 auto']) ?>
    </div>
    <?php ActiveForm::end(); ?>
    <div class="minicat cat-ani" >
        <div class="minicat-text">введите ваше имя</div>
        <div class="cat-lap" style="left: 70px"></div>
    </div>
</div>
