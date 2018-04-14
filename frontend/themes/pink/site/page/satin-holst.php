<?php
/**
 * @var $model common\models\Page
 * @var $this \yii\web\View
 */

$this->registerMetaTag([
    'name' => 'description',
    'content' => $model->meta_description
]);

$this->registerMetaTag([
    'name' => 'keywords',
    'content' => $model->meta_keywords
]);

$this->title = $model->title;
$this->params['breadcrumbs'][] = $this->title;

?>
<h1><?= $this->title ?></h1>

<h3 style="color: #b60101; text-align: left; text-transform: uppercase; font: bold 20px/24px 'Pt Sans Narrow', Arial, Helvetica, sans-serif;">Мы изготавливаем картины на двух видах холста<br> Выбирайте тот, который нравится вам больше!</h3>

<div class="second" style="width: 906px; margin-left:auto; margin-right:auto; margin-bottom: 40px;">
    <div class="holst" style="width: 400px; display: inline-block; vertical-align: top; text-align: center; margin-top: 35px;">
        <div class="holst-img" style="border: 3px solid #d94141; padding-top: 47px; border-radius: 10px; padding-bottom: 20px; margin-right: 25px;">
            <h3 style="margin-top: -40px; text-align: center; text-transform: uppercase; font: bold 20px/24px 'Pt Sans Narrow', Arial, Helvetica, sans-serif;"> Матовый холст, изготовленный из натурального хлопка</h3>
            <p style="margin-bottom: 15px; margin-top: 15px;">Хлопковый холст не бликует,<br> цвета на нем матовые и приглушенные.</p>
            <img src="/img/matovii71-1200x1200.jpg" style="width: 369px;"></div>
        <div class="holst-text"></div>
    </div>

    <div class="holst" style="width: 400px; display: inline-block; vertical-align: top; text-align: center; margin-top: 35px; margin-left: 50px;">
        <div class="holst-img" style="border: 3px solid #d94141; padding-top: 47px; border-radius: 10px; padding-bottom: 20px;margin-left: 25px;">
            <h3 style=" margin: -40px 0 41px 0; text-align: center; text-transform: uppercase; font: bold 20px/24px 'Pt Sans Narrow', Arial, Helvetica, sans-serif;"> Холст, изготовленный<br> из сатина</h3>
            <p style="margin-bottom: 15px; margin-top: 15px;">Сатиновый холст, более яркий и насыщенный,<br> легкий шелковый блеск.</p>
            <img src="/img/satinovii26-1200x1200.jpg" style="width: 369px; border-top: 3px solid #515151;"></div>
        <div class="holst-text"></div>
    </div>

    <h3 style="margin-top: 30px; margin-bottom: 30px; text-align: center; text-transform: uppercase; font: bold 20px/24px 'Pt Sans Narrow', Arial, Helvetica, sans-serif;">
        Посмотрите, как отличается яркостью и насыщенностью сатиновый холст</h3>
    <!--Исходное изображение-->
    <div class="basic-img" style="text-align:center;">
        <p style="text-transform: uppercase;font: bold 20px/24px 'Pt Sans Narrow', Arial, Helvetica, sans-serif;">Исходное изображение</p>
        <img src="/img/base-img.png">
    </div>
    <div class="left-arrow" style="width:150px; display:inline-block; vertical-align:top; text-align:center;margin-left: 183px;margin-top: 15px;">
        <img src="/img/DownLeft.png">
    </div>
    <div class="right-arrow" style="width:150px; display:inline-block; vertical-align:top; text-align:center;margin-top: 15px;margin-left: 240px;">
        <img src="/img/DownRight.png">
    </div>

    <!--Хлопок изображение-->
    <div class="before" style="width:350px; display:inline-block; vertical-align:top; text-align:center;">
        <p style="margin-bottom: 15px; color: #d94141; text-transform: uppercase;font: bold 20px/24px 'Pt Sans Narrow', Arial, Helvetica, sans-serif;">Обычный хлопковый холст</p>
        <img src="/img/cotton-holst.png" style="width: 350px;">
    </div>

    <div class="arrow" style="width:150px;margin-top: 277px; display:inline-block; vertical-align:top; text-align:center;">
        <img src="/img/LongArrowRight-96.png">
    </div>
    <!--Сатин изображение-->
    <div class="after" style="width:350px; display:inline-block; vertical-align:top; text-align:center;">
        <p style="margin-bottom: 15px; color: #d94141; text-transform: uppercase; font: bold 20px/24px 'Pt Sans Narrow', Arial, Helvetica, sans-serif;">
            Сатиновый холст</p>
        <img src="/img/satin-holst.png" style="width: 350px;">
    </div>

    <!--Пример 1-->
    <div class="before" style="width:350px; display:inline-block; vertical-align:top; text-align:center;margin-top: 60px;">
        <img src="/img/cotton-1.png" style="width: 350px;">
    </div>
    <div class="arrow" style="width:150px;margin-top: 185px; display:inline-block; vertical-align:top; text-align:center;">
        <img src="/img/LongArrowRight-96.png">
    </div>
    <div class="after" style="width:350px; display:inline-block; vertical-align:top; text-align:center; margin-top: 60px;">
        <img src="/img/satin-1.png" style="width: 350px;">
    </div>

    <!--Пример 2-->
    <div class="before" style="width:350px; display:inline-block; vertical-align:top; text-align:center; margin-top: 60px;">
        <img src="/img/cotton-2.png" style="width: 350px;">
    </div>
    <div class="arrow" style="width:150px; margin-top: 141px; display:inline-block; vertical-align:top; text-align:center;">
        <img src="/img/LongArrowRight-96.png">
    </div>
    <div class="after" style="width:350px; display:inline-block; vertical-align:top; text-align:center;margin-top: 60px;">
        <img src="/img/satin-2.png" style="width: 350px;">
    </div>

    <!--Пример 3-->
    <div class="before" style="width:350px; display:inline-block; vertical-align:top; text-align:center;margin-top: 60px;">
        <img src="/img/cotton-3.png" style="width: 350px;">
    </div>
    <div class="arrow" style="width:150px;margin-top: 125px; display:inline-block; vertical-align:top; text-align:center;">
        <img src="/img/LongArrowRight-96.png">
    </div>
    <div class="after" style="width:350px; display:inline-block; vertical-align:top; text-align:center;margin-top: 60px;">
        <img src="/img/satin-3.png" style="width: 350px;">
    </div>

    <!--Пример 4-->
    <div class="before" style="width:350px; display:inline-block; vertical-align:top; text-align:center;margin-top: 60px;">
        <img src="/img/cotton-4.png" style="width: 350px;">
    </div>
    <div class="arrow" style="width:150px;margin-top: 125px; display:inline-block; vertical-align:top; text-align:center;">
        <img src="/img/LongArrowRight-96.png">
    </div>
    <div class="after" style="width:350px; display:inline-block; vertical-align:top; text-align:center;margin-top: 60px;">
        <img src="/img/satin-4.png" style="width: 350px;">
    </div>

    <!--Пример 5-->
    <div class="before" style="width:350px; display:inline-block; vertical-align:top; text-align:center;margin-top: 60px;">
        <img src="/img/cotton-5.png" style="width: 350px;">
    </div>
    <div class="arrow" style="width:150px;margin-top: 125px; display:inline-block; vertical-align:top; text-align:center;">
        <img src="/img/LongArrowRight-96.png">
    </div>
    <div class="after" style="width:350px; display:inline-block; vertical-align:top; text-align:center;margin-top: 60px;">
        <img src="/img/satin-5.png" style="width: 350px;">
    </div>

    <!--Пример 6-->
    <div class="before" style="width:350px; display:inline-block; vertical-align:top; text-align:center;margin-top: 60px;">
        <img src="/img/cotton-6.png" style="width: 350px;">
    </div>
    <div class="arrow" style="width:150px;margin-top: 125px; display:inline-block; vertical-align:top; text-align:center;">
        <img src="/img/LongArrowRight-96.png">
    </div>
    <div class="after" style="width:350px; display:inline-block; vertical-align:top; text-align:center;margin-top: 60px;">
        <img src="/img/satin-6.png" style="width: 350px;">
    </div>
</div>

