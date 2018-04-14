<?php
/**
 * @var $model common\models\Page
 * @var $this \yii\web\View
 */


use common\models\Product;
use yii\data\ActiveDataProvider;
use yii\widgets\ListView;

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
    <div class="videoWrapper">
        <iframe width="700" height="394" src="https://www.youtube.com/embed/qiz2KbIZDjU?rel=0" frameborder="0" allowfullscreen></iframe>
    </div>
    <div class="slider_boxes">
        <ul class="bxslider">
            <li><a class="fancybox" href="/uploads/images/proizvodstvo/1448476082__mg_9831.jpg" data-fancybox-group="gallery"><img src="/uploads/images/proizvodstvo/thumbs/1448476082__mg_9831.jpg"/></a></li>
            <li><a class="fancybox" href="/uploads/images/proizvodstvo/1448476081__mg_9841.jpg" data-fancybox-group="gallery"><img src="/uploads/images/proizvodstvo/thumbs/1448476081__mg_9841.jpg"/></a></li>
            <li><a class="fancybox" href="/uploads/images/proizvodstvo/1448476061__mg_9839.jpg" data-fancybox-group="gallery"><img src="/uploads/images/proizvodstvo/thumbs/1448476061__mg_9839.jpg"/></a></li>
            <li><a class="fancybox" href="/uploads/images/proizvodstvo/1448476010__mg_9837.jpg" data-fancybox-group="gallery"><img src="/uploads/images/proizvodstvo/thumbs/1448476010__mg_9837.jpg"/></a></li>
            <li><a class="fancybox" href="/uploads/images/proizvodstvo/1448476032__mg_9836.jpg" data-fancybox-group="gallery"><img src="/uploads/images/proizvodstvo/thumbs/1448476032__mg_9836.jpg"/></a></li>
            <li><a class="fancybox" href="/uploads/images/proizvodstvo/1448476000__mg_9829.jpg" data-fancybox-group="gallery"><img src="/uploads/images/proizvodstvo/thumbs/1448476000__mg_9829.jpg"/></a></li>
            <li><a class="fancybox" href="/uploads/images/proizvodstvo/1448203900_06.jpg" data-fancybox-group="gallery"><img src="/uploads/images/proizvodstvo/thumbs/1448203900_06.jpg"/></a></li>
            <li><a class="fancybox" href="/uploads/images/proizvodstvo/1448476002__mg_9824.jpg" data-fancybox-group="gallery"><img src="/uploads/images/proizvodstvo/thumbs/1448476002__mg_9824.jpg"/></a></li>
            <li><a class="fancybox" href="/uploads/images/proizvodstvo/1448476075__mg_9822.jpg" data-fancybox-group="gallery"><img src="/uploads/images/proizvodstvo/thumbs/1448476075__mg_9822.jpg"/></a></li>
            <li><a class="fancybox" href="/uploads/images/proizvodstvo/1448476076__mg_9819.jpg" data-fancybox-group="gallery"><img src="/uploads/images/proizvodstvo/thumbs/1448476076__mg_9819.jpg"/></a></li>
            <li><a class="fancybox" href="/uploads/images/proizvodstvo/1448476046__mg_9817.jpg" data-fancybox-group="gallery"><img src="/uploads/images/proizvodstvo/thumbs/1448476046__mg_9817.jpg"/></a></li>
            <li><a class="fancybox" href="/uploads/images/proizvodstvo/1448476038__mg_9816.jpg" data-fancybox-group="gallery"><img src="/uploads/images/proizvodstvo/thumbs/1448476038__mg_9816.jpg"/></a></li>
            <li><a class="fancybox" href="/uploads/images/proizvodstvo/1448203861_04.jpg" data-fancybox-group="gallery"><img src="/uploads/images/proizvodstvo/thumbs/1448203861_04.jpg"/></a></li>
            <li><a class="fancybox" href="/uploads/images/proizvodstvo/1448476078__mg_9815.jpg" data-fancybox-group="gallery"><img src="/uploads/images/proizvodstvo/thumbs/1448476078__mg_9815.jpg"/></a></li>
            <li><a class="fancybox" href="/uploads/images/proizvodstvo/1448476003__mg_9813.jpg" data-fancybox-group="gallery"><img src="/uploads/images/proizvodstvo/thumbs/1448476003__mg_9813.jpg"/></a></li>
            <li><a class="fancybox" href="/uploads/images/proizvodstvo/1448475995__mg_9809.jpg" data-fancybox-group="gallery"><img src="/uploads/images/proizvodstvo/thumbs/1448475995__mg_9809.jpg"/></a></li>
            <li><a class="fancybox" href="/uploads/images/proizvodstvo/1448476036__mg_9805.jpg" data-fancybox-group="gallery"><img src="/uploads/images/proizvodstvo/thumbs/1448476036__mg_9805.jpg"/></a></li>
            <li><a class="fancybox" href="/uploads/images/proizvodstvo/1448475992__mg_9803.jpg" data-fancybox-group="gallery"><img src="/uploads/images/proizvodstvo/thumbs/1448475992__mg_9803.jpg"/></a></li>
            <li><a class="fancybox" href="/uploads/images/proizvodstvo/1448476031__mg_9844.jpg" data-fancybox-group="gallery"><img src="/uploads/images/proizvodstvo/thumbs/1448476031__mg_9844.jpg"/></a></li>
        </ul>

        <div id="bx-pager" class="bxslider-pager">
            <a data-slide-index="0" href=""><img src="/uploads/images/proizvodstvo/thumbs/1448476091__mg_9834.jpg"/><span class="fancybox-pager" data-fancybox-type="image" data-fancybox-group="gallery2" data-href="/uploads/images/proizvodstvo/1448476091__mg_9834.jpg"></span></a>
            <a data-slide-index="1" href=""><img src="/uploads/images/proizvodstvo/thumbs/1448476050__mg_9832.jpg"/><span class="fancybox-pager" data-fancybox-type="image" data-fancybox-group="gallery2" data-href="/uploads/images/proizvodstvo/1448476050__mg_9832.jpg"></span></a>
            <a data-slide-index="2" href=""><img src="/uploads/images/proizvodstvo/thumbs/1448476082__mg_9831.jpg"/><span class="fancybox-pager" data-fancybox-type="image" data-fancybox-group="gallery2" data-href="/uploads/images/proizvodstvo/1448476082__mg_9831.jpg"></span></a>
            <a data-slide-index="3" href=""><img src="/uploads/images/proizvodstvo/thumbs/1448476081__mg_9841.jpg"/><span class="fancybox-pager" data-fancybox-type="image" data-fancybox-group="gallery2" data-href="/uploads/images/proizvodstvo/1448476081__mg_9841.jpg"></span></a>
            <a data-slide-index="4" href=""><img src="/uploads/images/proizvodstvo/thumbs/1448476061__mg_9839.jpg"/><span class="fancybox-pager" data-fancybox-type="image" data-fancybox-group="gallery2" data-href="/uploads/images/proizvodstvo/1448476061__mg_9839.jpg"></span></a>
            <a data-slide-index="5" href=""><img src="/uploads/images/proizvodstvo/thumbs/1448476010__mg_9837.jpg"/><span class="fancybox-pager" data-fancybox-type="image" data-fancybox-group="gallery2" data-href="/uploads/images/proizvodstvo/1448476010__mg_9837.jpg"></span></a>
            <a data-slide-index="6" href=""><img src="/uploads/images/proizvodstvo/thumbs/1448476032__mg_9836.jpg"/><span class="fancybox-pager" data-fancybox-type="image" data-fancybox-group="gallery2" data-href="/uploads/images/proizvodstvo/1448476032__mg_9836.jpg"></span></a>
            <a data-slide-index="7" href=""><img src="/uploads/images/proizvodstvo/thumbs/1448476000__mg_9829.jpg"/><span class="fancybox-pager" data-fancybox-type="image" data-fancybox-group="gallery2" data-href="/uploads/images/proizvodstvo/1448476000__mg_9829.jpg"></span></a>
            <a data-slide-index="8" href=""><img src="/uploads/images/proizvodstvo/thumbs/1448203900_06.jpg"/><span class="fancybox-pager" data-fancybox-type="image" data-fancybox-group="gallery2" data-href="/uploads/images/proizvodstvo/1448203900_06.jpg"></span></a>
            <a data-slide-index="9" href=""><img src="/uploads/images/proizvodstvo/thumbs/1448476002__mg_9824.jpg"/><span class="fancybox-pager" data-fancybox-type="image" data-fancybox-group="gallery2" data-href="/uploads/images/proizvodstvo/1448476002__mg_9824.jpg"></span></a>
            <a data-slide-index="10" href=""><img src="/uploads/images/proizvodstvo/thumbs/1448476075__mg_9822.jpg"/><span class="fancybox-pager" data-fancybox-type="image" data-fancybox-group="gallery2" data-href="/uploads/images/proizvodstvo/1448476075__mg_9822.jpg"></span></a>
            <a data-slide-index="11" href=""><img src="/uploads/images/proizvodstvo/thumbs/1448476076__mg_9819.jpg"/><span class="fancybox-pager" data-fancybox-type="image" data-fancybox-group="gallery2" data-href="/uploads/images/proizvodstvo/1448476076__mg_9819.jpg"></span></a>
            <a data-slide-index="12" href=""><img src="/uploads/images/proizvodstvo/thumbs/1448476046__mg_9817.jpg"/><span class="fancybox-pager" data-fancybox-type="image" data-fancybox-group="gallery2" data-href="/uploads/images/proizvodstvo/1448476046__mg_9817.jpg"></span></a>
            <a data-slide-index="13" href=""><img src="/uploads/images/proizvodstvo/thumbs/1448476038__mg_9816.jpg"/><span class="fancybox-pager" data-fancybox-type="image" data-fancybox-group="gallery2" data-href="/uploads/images/proizvodstvo/1448476038__mg_9816.jpg"></span></a>
            <a data-slide-index="14" href=""><img src="/uploads/images/proizvodstvo/thumbs/1448203861_04.jpg"/><span class="fancybox-pager" data-fancybox-type="image" data-fancybox-group="gallery2" data-href="/uploads/images/proizvodstvo/1448203861_04.jpg"></span></a>
            <a data-slide-index="15" href=""><img src="/uploads/images/proizvodstvo/thumbs/1448476078__mg_9815.jpg"/><span class="fancybox-pager" data-fancybox-type="image" data-fancybox-group="gallery2" data-href="/uploads/images/proizvodstvo/1448476078__mg_9815.jpg"></span></a>
            <a data-slide-index="16" href=""><img src="/uploads/images/proizvodstvo/thumbs/1448476003__mg_9813.jpg"/><span class="fancybox-pager" data-fancybox-type="image" data-fancybox-group="gallery2" data-href="/uploads/images/proizvodstvo/1448476003__mg_9813.jpg"></span></a>
            <a data-slide-index="17" href=""><img src="/uploads/images/proizvodstvo/thumbs/1448475995__mg_9809.jpg"/><span class="fancybox-pager" data-fancybox-type="image" data-fancybox-group="gallery2" data-href="/uploads/images/proizvodstvo/1448475995__mg_9809.jpg"></span></a>
            <a data-slide-index="18" href=""><img src="/uploads/images/proizvodstvo/thumbs/1448476036__mg_9805.jpg"/><span class="fancybox-pager" data-fancybox-type="image" data-fancybox-group="gallery2" data-href="/uploads/images/proizvodstvo/1448476036__mg_9805.jpg"></span></a>
            <!--<a data-slide-index="19" href=""><img src="/uploads/images/proizvodstvo/thumbs/1448475992__mg_9803.jpg"/><span class="fancybox-pager" data-fancybox-type="image" data-fancybox-group="gallery2" data-href="/uploads/images/proizvodstvo/1448475992__mg_9803.jpg"></span></a>-->
            <!--<a data-slide-index="20" href=""><img src="/uploads/images/proizvodstvo/thumbs/1448476031__mg_9844.jpg"/><span class="fancybox-pager" data-fancybox-type="image" data-fancybox-group="gallery2" data-href="/uploads/images/proizvodstvo/1448476031__mg_9844.jpg"></span></a>-->
        </div>
    </div>

    <h2>Успейте купить со <span class="pink">скидкой <?=Yii::$app->params['discount']?>%!</span></h2>

    <?php
        $dataProvider = new ActiveDataProvider([
            'query'=>Product::find()->limit(3),
            'pagination' => false,
        ]);
    ?>

    <?= ListView::widget([
        'dataProvider' => $dataProvider,
        'itemView' => '/site/_list',
        'itemOptions' => [
            'tag' => 'div',
            'class' => 'catalog-item',
        ],
        'pager' => [
            'class' => 'frontend\components\UpsidePinkPagination',
        ],
        'layout' => "<div class=\"catalog-items clearfix\">{items}</div>",
    ])?>

    <div class="more-block">
        <div class="bg-gray">
            <a href="#" class="btn btn-dark-pink">Все картины</a>
        </div>
    </div>

    <p><a class="fancybox" href="/uploads/images/proizvodstvo/1448476050__mg_9832.jpg" data-fancybox-group="gallery"><img class="adaptive-image" src="/uploads/images/proizvodstvo/thumbs/1448476050__mg_9832.jpg"/></a></p>
    <p><a class="fancybox" href="/uploads/images/proizvodstvo/1448476082__mg_9831.jpg" data-fancybox-group="gallery"><img class="adaptive-image" src="/uploads/images/proizvodstvo/thumbs/1448476082__mg_9831.jpg"/></a></p>

    <?php
    $dataProvider2 = new ActiveDataProvider([
        'query'=>Product::find()->limit(9),
        'pagination' => false,
    ]);
    ?>

    <?= ListView::widget([
        'dataProvider' => $dataProvider2,
        'itemView' => '/site/_list',
        'itemOptions' => [
            'tag' => 'div',
            'class' => 'catalog-item',
        ],
        'pager' => [
            'class' => 'frontend\components\UpsidePinkPagination',
        ],
        'layout' => "<div class=\"catalog-items clearfix\">{items}</div>",
    ])?>

    <div class="more-block">
        <div class="bg-gray">
            <a href="#" class="btn btn-dark-pink">Все картины</a>
        </div>
    </div>
</div>