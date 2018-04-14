<?php
use common\models\search\ProductSearch;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
<div class="search-widget">
    <div class="widget-title">Поиск по сайту</div>
    <!--
    <?php $form = ActiveForm::begin(['action' => '/search/', 'method' => 'get', 'options' => ['role'=>false]]); ?>
    <?= $form->field(new ProductSearch(), 'title')->input('text', ['placeholder' => 'Поиск по сайту'])->label(false) ?>
    <?= Html::button('Найти', ['type' => 'submit','class'=>'btn btn-dark-pink','style'=>'border:none; width: 100%;']) ?>
    <?php ActiveForm::end(); ?>
    -->

<!--
<form action="/search/">
       <input name="q" placeholder="Поиск по сайту">
       <button type="submit" class="btn btn-dark-pink" style="border:none; width: 100%;">Найти</button>
    </form>

    -->
</div>

<div class="ipad-widget">
    <div class="widget-title" style="text-align: center">Регистрация<br>на розыгрыш iPad</div>
    <a href="#ipad-form" class="btn btn-dark-pink fancybox">Регистрация</a>
</div>
<div class="clock-widget">
    <div class="bg-gray">
        <div class="dotted-border">
            <div class="clock-title">Картины с часами</div>
            <div class="clock-sub-title">Красивые и функциональные!</div>
            <img src="<?=$this->theme->getUrl('img/clock.png')?>" alt="Картины с часами">
            <a href="/kartiny-s-chasami.html" class="btn btn-dark-pink">Смотреть примеры</a>
        </div>
    </div>
</div>
