<?php
/**
 * @var $model common\models\Page
 * @var $this \yii\web\View
 */

$this->registerMetaTag([
    'name'=>'description',
    'content'=>$model->meta_description
]);

$this->registerMetaTag([
    'name'=>'keywords',
    'content'=>$model->meta_keywords
]);

$this->title = $model->title;
$this->params['breadcrumbs'][] = $this->title;

?>
<h1><?=$this->title?></h1>
<div class="text">
    <div class="brandNewBlock">
        <div class="text-block yellowBlock" style="padding: 30px 0;">
            <img src="/uploads/images/akcii/playermp3.png" style="float:right;margin:-50px 40px"/>
            <h3 class="red">Необычный подарок!</h3>
            <h3 class="black">К каждой модульной картине и
                постеру<br>
                мы дарим стильный MP3-плеер!<br>
                Мелочь, а приятно!</h3>
        </div>
        <div class="text-block yellowBlock" style="padding: 30px 0;">
            <img src="/uploads/images/akcii/sale30.png" style="float:left; margin:5px 20px;"/>
            <h3 class="red">Скидки более 47%</h3>
            <h3 class="black">До конца акции<br>
                действуют скидки<br>на модульные картины и постеры<br>более 47% !</h3>
        </div>
        <div class="text-block yellowBlock" style="padding: 30px 0;">
            <img src="/uploads/images/akcii/designHelp.png" style="float:right; margin:-20px 30px;"/>
            <h3 class="red">Бесплатная помощь дизайнера</h3>
            <h3 class="black">У нас в мастерской доступна
                услуга
                бесплатной помощи дизайнера по подбору
                модульной картины в Ваш интерьер.<br>
                Вы сможете увидеть, как будет смотреться
                модульная картина, еще до покупки!</h3>
        </div>
    </div>
</div>