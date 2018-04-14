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

<div class="slider_boxes">
    <ul class="bx-slider" id="slide-1">
        <li><a class="fancybox" href="/uploads/images/foto-zhivyh-kartin/slide-1/1.jpg" data-fancybox-group="gallery"><img src="/uploads/images/foto-zhivyh-kartin/slide-1/1.jpg"/></a></li>
        <li><a class="fancybox" href="/uploads/images/foto-zhivyh-kartin/slide-1/2.jpg" data-fancybox-group="gallery"><img src="/uploads/images/foto-zhivyh-kartin/slide-1/2.jpg"/></a></li>
        <li><a class="fancybox" href="/uploads/images/foto-zhivyh-kartin/slide-1/3.jpg" data-fancybox-group="gallery"><img src="/uploads/images/foto-zhivyh-kartin/slide-1/3.jpg"/></a></li>
    </ul>

    <div class="bxslider-pager" id="pager-1">
        <a href="" data-slide-index="0"><img src="/uploads/images/foto-zhivyh-kartin/slide-1/1_m.jpg"/><span class="fancybox-pager" data-fancybox-type="image" data-fancybox-group="gallery-1" data-href="/uploads/images/foto-zhivyh-kartin/slide-1/1.jpg"></span></a>
        <a href="" data-slide-index="1"><img src="/uploads/images/foto-zhivyh-kartin/slide-1/2_m.jpg"/><span class="fancybox-pager" data-fancybox-type="image" data-fancybox-group="gallery-1" data-href="/uploads/images/foto-zhivyh-kartin/slide-1/2.jpg"></span></a>
        <a href="" data-slide-index="2"><img src="/uploads/images/foto-zhivyh-kartin/slide-1/3_m.jpg"/><span class="fancybox-pager" data-fancybox-type="image" data-fancybox-group="gallery-1" data-href="/uploads/images/foto-zhivyh-kartin/slide-1/3.jpg"></span></a>
    </div>
</div>

<div class="slider_boxes">
    <ul class="bx-slider" id="slide-2">
        <li><a class="fancybox" href="/uploads/images/foto-zhivyh-kartin/slide-2/1.jpg" data-fancybox-group="gallery"><img src="/uploads/images/foto-zhivyh-kartin/slide-2/1.jpg"/></a></li>
        <li><a class="fancybox" href="/uploads/images/foto-zhivyh-kartin/slide-2/2.jpg" data-fancybox-group="gallery"><img src="/uploads/images/foto-zhivyh-kartin/slide-2/2.jpg"/></a></li>
        <li><a class="fancybox" href="/uploads/images/foto-zhivyh-kartin/slide-2/3.jpg" data-fancybox-group="gallery"><img src="/uploads/images/foto-zhivyh-kartin/slide-2/3.jpg"/></a></li>
    </ul>

    <div class="bxslider-pager" id="pager-2">
        <a href="" data-slide-index="0"><img src="/uploads/images/foto-zhivyh-kartin/slide-2/1_m.jpg"/><span class="fancybox-pager" data-fancybox-type="image" data-fancybox-group="gallery-1" data-href="/uploads/images/foto-zhivyh-kartin/slide-2/1.jpg"></span></a>
        <a href="" data-slide-index="1"><img src="/uploads/images/foto-zhivyh-kartin/slide-2/2_m.jpg"/><span class="fancybox-pager" data-fancybox-type="image" data-fancybox-group="gallery-1" data-href="/uploads/images/foto-zhivyh-kartin/slide-2/2.jpg"></span></a>
        <a href="" data-slide-index="2"><img src="/uploads/images/foto-zhivyh-kartin/slide-2/3_m.jpg"/><span class="fancybox-pager" data-fancybox-type="image" data-fancybox-group="gallery-1" data-href="/uploads/images/foto-zhivyh-kartin/slide-2/3.jpg"></span></a>
    </div>
</div>

<div class="slider_boxes">
    <ul class="bx-slider" id="slide-3">
        <li><a class="fancybox" href="/uploads/images/foto-zhivyh-kartin/slide-3/1.jpg" data-fancybox-group="gallery"><img src="/uploads/images/foto-zhivyh-kartin/slide-3/1.jpg"/></a></li>
        <li><a class="fancybox" href="/uploads/images/foto-zhivyh-kartin/slide-3/2.jpg" data-fancybox-group="gallery"><img src="/uploads/images/foto-zhivyh-kartin/slide-3/2.jpg"/></a></li>
        <li><a class="fancybox" href="/uploads/images/foto-zhivyh-kartin/slide-3/3.jpg" data-fancybox-group="gallery"><img src="/uploads/images/foto-zhivyh-kartin/slide-3/3.jpg"/></a></li>
        <li><a class="fancybox" href="/uploads/images/foto-zhivyh-kartin/slide-3/4.jpg" data-fancybox-group="gallery"><img src="/uploads/images/foto-zhivyh-kartin/slide-3/4.jpg"/></a></li>
        <li><a class="fancybox" href="/uploads/images/foto-zhivyh-kartin/slide-3/5.jpg" data-fancybox-group="gallery"><img src="/uploads/images/foto-zhivyh-kartin/slide-3/5.jpg"/></a></li>
    </ul>

    <div class="bxslider-pager" id="pager-3">
        <a href="" data-slide-index="0"><img src="/uploads/images/foto-zhivyh-kartin/slide-3/1_m.jpg"/><span class="fancybox-pager" data-fancybox-type="image" data-fancybox-group="gallery-1" data-href="/uploads/images/foto-zhivyh-kartin/slide-3/1.jpg"></span></a>
        <a href="" data-slide-index="1"><img src="/uploads/images/foto-zhivyh-kartin/slide-3/2_m.jpg"/><span class="fancybox-pager" data-fancybox-type="image" data-fancybox-group="gallery-1" data-href="/uploads/images/foto-zhivyh-kartin/slide-3/2.jpg"></span></a>
        <a href="" data-slide-index="2"><img src="/uploads/images/foto-zhivyh-kartin/slide-3/3_m.jpg"/><span class="fancybox-pager" data-fancybox-type="image" data-fancybox-group="gallery-1" data-href="/uploads/images/foto-zhivyh-kartin/slide-3/3.jpg"></span></a>
        <a href="" data-slide-index="3"><img src="/uploads/images/foto-zhivyh-kartin/slide-3/4_m.jpg"/><span class="fancybox-pager" data-fancybox-type="image" data-fancybox-group="gallery-1" data-href="/uploads/images/foto-zhivyh-kartin/slide-3/4.jpg"></span></a>
        <a href="" data-slide-index="4"><img src="/uploads/images/foto-zhivyh-kartin/slide-3/5_m.jpg"/><span class="fancybox-pager" data-fancybox-type="image" data-fancybox-group="gallery-1" data-href="/uploads/images/foto-zhivyh-kartin/slide-3/5.jpg"></span></a>
    </div>
</div>

<div class="slider_boxes">
    <ul class="bx-slider" id="slide-4">
        <li><a class="fancybox" href="/uploads/images/foto-zhivyh-kartin/slide-4/1.jpg" data-fancybox-group="gallery"><img src="/uploads/images/foto-zhivyh-kartin/slide-4/1.jpg"/></a></li>
        <li><a class="fancybox" href="/uploads/images/foto-zhivyh-kartin/slide-4/2.jpg" data-fancybox-group="gallery"><img src="/uploads/images/foto-zhivyh-kartin/slide-4/2.jpg"/></a></li>
        <li><a class="fancybox" href="/uploads/images/foto-zhivyh-kartin/slide-4/3.jpg" data-fancybox-group="gallery"><img src="/uploads/images/foto-zhivyh-kartin/slide-4/3.jpg"/></a></li>
        <li><a class="fancybox" href="/uploads/images/foto-zhivyh-kartin/slide-4/4.jpg" data-fancybox-group="gallery"><img src="/uploads/images/foto-zhivyh-kartin/slide-4/4.jpg"/></a></li>
        <li><a class="fancybox" href="/uploads/images/foto-zhivyh-kartin/slide-4/5.jpg" data-fancybox-group="gallery"><img src="/uploads/images/foto-zhivyh-kartin/slide-4/5.jpg"/></a></li>
    </ul>

    <div class="bxslider-pager" id="pager-4">
        <a href="" data-slide-index="0"><img src="/uploads/images/foto-zhivyh-kartin/slide-4/1_m.jpg"/><span class="fancybox-pager" data-fancybox-type="image" data-fancybox-group="gallery-1" data-href="/uploads/images/foto-zhivyh-kartin/slide-4/1.jpg"></span></a>
        <a href="" data-slide-index="1"><img src="/uploads/images/foto-zhivyh-kartin/slide-4/2_m.jpg"/><span class="fancybox-pager" data-fancybox-type="image" data-fancybox-group="gallery-1" data-href="/uploads/images/foto-zhivyh-kartin/slide-4/2.jpg"></span></a>
        <a href="" data-slide-index="2"><img src="/uploads/images/foto-zhivyh-kartin/slide-4/3_m.jpg"/><span class="fancybox-pager" data-fancybox-type="image" data-fancybox-group="gallery-1" data-href="/uploads/images/foto-zhivyh-kartin/slide-4/3.jpg"></span></a>
        <a href="" data-slide-index="3"><img src="/uploads/images/foto-zhivyh-kartin/slide-4/4_m.jpg"/><span class="fancybox-pager" data-fancybox-type="image" data-fancybox-group="gallery-1" data-href="/uploads/images/foto-zhivyh-kartin/slide-4/4.jpg"></span></a>
        <a href="" data-slide-index="4"><img src="/uploads/images/foto-zhivyh-kartin/slide-4/5_m.jpg"/><span class="fancybox-pager" data-fancybox-type="image" data-fancybox-group="gallery-1" data-href="/uploads/images/foto-zhivyh-kartin/slide-4/5.jpg"></span></a>
    </div>
</div>

<div class="slider_boxes">
    <ul class="bx-slider" id="slide-5">
        <li><a class="fancybox" href="/uploads/images/foto-zhivyh-kartin/slide-5/1.jpg" data-fancybox-group="gallery"><img src="/uploads/images/foto-zhivyh-kartin/slide-5/1.jpg"/></a></li>
        <li><a class="fancybox" href="/uploads/images/foto-zhivyh-kartin/slide-5/2.jpg" data-fancybox-group="gallery"><img src="/uploads/images/foto-zhivyh-kartin/slide-5/2.jpg"/></a></li>
        <li><a class="fancybox" href="/uploads/images/foto-zhivyh-kartin/slide-5/3.jpg" data-fancybox-group="gallery"><img src="/uploads/images/foto-zhivyh-kartin/slide-5/3.jpg"/></a></li>
        <li><a class="fancybox" href="/uploads/images/foto-zhivyh-kartin/slide-5/4.jpg" data-fancybox-group="gallery"><img src="/uploads/images/foto-zhivyh-kartin/slide-5/4.jpg"/></a></li>
        <li><a class="fancybox" href="/uploads/images/foto-zhivyh-kartin/slide-5/5.jpg" data-fancybox-group="gallery"><img src="/uploads/images/foto-zhivyh-kartin/slide-5/5.jpg"/></a></li>
    </ul>

    <div class="bxslider-pager" id="pager-5">
        <a href="" data-slide-index="0"><img src="/uploads/images/foto-zhivyh-kartin/slide-5/1_m.jpg"/><span class="fancybox-pager" data-fancybox-type="image" data-fancybox-group="gallery-1" data-href="/uploads/images/foto-zhivyh-kartin/slide-5/1.jpg"></span></a>
        <a href="" data-slide-index="1"><img src="/uploads/images/foto-zhivyh-kartin/slide-5/2_m.jpg"/><span class="fancybox-pager" data-fancybox-type="image" data-fancybox-group="gallery-1" data-href="/uploads/images/foto-zhivyh-kartin/slide-5/2.jpg"></span></a>
        <a href="" data-slide-index="2"><img src="/uploads/images/foto-zhivyh-kartin/slide-5/3_m.jpg"/><span class="fancybox-pager" data-fancybox-type="image" data-fancybox-group="gallery-1" data-href="/uploads/images/foto-zhivyh-kartin/slide-5/3.jpg"></span></a>
        <a href="" data-slide-index="3"><img src="/uploads/images/foto-zhivyh-kartin/slide-5/4_m.jpg"/><span class="fancybox-pager" data-fancybox-type="image" data-fancybox-group="gallery-1" data-href="/uploads/images/foto-zhivyh-kartin/slide-5/4.jpg"></span></a>
        <a href="" data-slide-index="4"><img src="/uploads/images/foto-zhivyh-kartin/slide-5/5_m.jpg"/><span class="fancybox-pager" data-fancybox-type="image" data-fancybox-group="gallery-1" data-href="/uploads/images/foto-zhivyh-kartin/slide-5/5.jpg"></span></a>
    </div>
</div>

<div class="slider_boxes">
    <ul class="bx-slider" id="slide-6">
        <li><a class="fancybox" href="/uploads/images/foto-zhivyh-kartin/slide-6/1.jpg" data-fancybox-group="gallery"><img src="/uploads/images/foto-zhivyh-kartin/slide-6/1.jpg"/></a></li>
        <li><a class="fancybox" href="/uploads/images/foto-zhivyh-kartin/slide-6/2.jpg" data-fancybox-group="gallery"><img src="/uploads/images/foto-zhivyh-kartin/slide-6/2.jpg"/></a></li>
        <li><a class="fancybox" href="/uploads/images/foto-zhivyh-kartin/slide-6/3.jpg" data-fancybox-group="gallery"><img src="/uploads/images/foto-zhivyh-kartin/slide-6/3.jpg"/></a></li>
        <li><a class="fancybox" href="/uploads/images/foto-zhivyh-kartin/slide-6/4.jpg" data-fancybox-group="gallery"><img src="/uploads/images/foto-zhivyh-kartin/slide-6/4.jpg"/></a></li>
    </ul>

    <div class="bxslider-pager" id="pager-6">
        <a href="" data-slide-index="0"><img src="/uploads/images/foto-zhivyh-kartin/slide-6/1_m.jpg"/><span class="fancybox-pager" data-fancybox-type="image" data-fancybox-group="gallery-1" data-href="/uploads/images/foto-zhivyh-kartin/slide-6/1.jpg"></span></a>
        <a href="" data-slide-index="1"><img src="/uploads/images/foto-zhivyh-kartin/slide-6/2_m.jpg"/><span class="fancybox-pager" data-fancybox-type="image" data-fancybox-group="gallery-1" data-href="/uploads/images/foto-zhivyh-kartin/slide-6/2.jpg"></span></a>
        <a href="" data-slide-index="2"><img src="/uploads/images/foto-zhivyh-kartin/slide-6/3_m.jpg"/><span class="fancybox-pager" data-fancybox-type="image" data-fancybox-group="gallery-1" data-href="/uploads/images/foto-zhivyh-kartin/slide-6/3.jpg"></span></a>
        <a href="" data-slide-index="3"><img src="/uploads/images/foto-zhivyh-kartin/slide-6/4_m.jpg"/><span class="fancybox-pager" data-fancybox-type="image" data-fancybox-group="gallery-1" data-href="/uploads/images/foto-zhivyh-kartin/slide-6/4.jpg"></span></a>
    </div>
</div>

<div class="slider_boxes">
    <ul class="bx-slider" id="slide-7">
        <li><a class="fancybox" href="/uploads/images/foto-zhivyh-kartin/slide-7/1.jpg" data-fancybox-group="gallery"><img src="/uploads/images/foto-zhivyh-kartin/slide-7/1.jpg"/></a></li>
        <li><a class="fancybox" href="/uploads/images/foto-zhivyh-kartin/slide-7/2.jpg" data-fancybox-group="gallery"><img src="/uploads/images/foto-zhivyh-kartin/slide-7/2.jpg"/></a></li>
        <li><a class="fancybox" href="/uploads/images/foto-zhivyh-kartin/slide-7/3.jpg" data-fancybox-group="gallery"><img src="/uploads/images/foto-zhivyh-kartin/slide-7/3.jpg"/></a></li>
        <li><a class="fancybox" href="/uploads/images/foto-zhivyh-kartin/slide-7/4.jpg" data-fancybox-group="gallery"><img src="/uploads/images/foto-zhivyh-kartin/slide-7/4.jpg"/></a></li>
    </ul>

    <div class="bxslider-pager" id="pager-7">
        <a href="" data-slide-index="0"><img src="/uploads/images/foto-zhivyh-kartin/slide-7/1_m.jpg"/><span class="fancybox-pager" data-fancybox-type="image" data-fancybox-group="gallery-1" data-href="/uploads/images/foto-zhivyh-kartin/slide-7/1.jpg"></span></a>
        <a href="" data-slide-index="1"><img src="/uploads/images/foto-zhivyh-kartin/slide-7/2_m.jpg"/><span class="fancybox-pager" data-fancybox-type="image" data-fancybox-group="gallery-1" data-href="/uploads/images/foto-zhivyh-kartin/slide-7/2.jpg"></span></a>
        <a href="" data-slide-index="2"><img src="/uploads/images/foto-zhivyh-kartin/slide-7/3_m.jpg"/><span class="fancybox-pager" data-fancybox-type="image" data-fancybox-group="gallery-1" data-href="/uploads/images/foto-zhivyh-kartin/slide-7/3.jpg"></span></a>
        <a href="" data-slide-index="3"><img src="/uploads/images/foto-zhivyh-kartin/slide-7/4_m.jpg"/><span class="fancybox-pager" data-fancybox-type="image" data-fancybox-group="gallery-1" data-href="/uploads/images/foto-zhivyh-kartin/slide-7/4.jpg"></span></a>
    </div>
</div>

<div class="slider_boxes">
    <ul class="bx-slider" id="slide-8">
        <li><a class="fancybox" href="/uploads/images/foto-zhivyh-kartin/slide-8/1.jpg" data-fancybox-group="gallery"><img src="/uploads/images/foto-zhivyh-kartin/slide-8/1.jpg"/></a></li>
        <li><a class="fancybox" href="/uploads/images/foto-zhivyh-kartin/slide-8/2.jpg" data-fancybox-group="gallery"><img src="/uploads/images/foto-zhivyh-kartin/slide-8/2.jpg"/></a></li>
        <li><a class="fancybox" href="/uploads/images/foto-zhivyh-kartin/slide-8/3.jpg" data-fancybox-group="gallery"><img src="/uploads/images/foto-zhivyh-kartin/slide-8/3.jpg"/></a></li>
        <li><a class="fancybox" href="/uploads/images/foto-zhivyh-kartin/slide-8/4.jpg" data-fancybox-group="gallery"><img src="/uploads/images/foto-zhivyh-kartin/slide-8/4.jpg"/></a></li>
        <li><a class="fancybox" href="/uploads/images/foto-zhivyh-kartin/slide-8/5.jpg" data-fancybox-group="gallery"><img src="/uploads/images/foto-zhivyh-kartin/slide-8/5.jpg"/></a></li>
    </ul>

    <div class="bxslider-pager" id="pager-8">
        <a href="" data-slide-index="0"><img src="/uploads/images/foto-zhivyh-kartin/slide-8/1_m.jpg"/><span class="fancybox-pager" data-fancybox-type="image" data-fancybox-group="gallery-1" data-href="/uploads/images/foto-zhivyh-kartin/slide-8/1.jpg"></span></a>
        <a href="" data-slide-index="1"><img src="/uploads/images/foto-zhivyh-kartin/slide-8/2_m.jpg"/><span class="fancybox-pager" data-fancybox-type="image" data-fancybox-group="gallery-1" data-href="/uploads/images/foto-zhivyh-kartin/slide-8/2.jpg"></span></a>
        <a href="" data-slide-index="2"><img src="/uploads/images/foto-zhivyh-kartin/slide-8/3_m.jpg"/><span class="fancybox-pager" data-fancybox-type="image" data-fancybox-group="gallery-1" data-href="/uploads/images/foto-zhivyh-kartin/slide-8/3.jpg"></span></a>
        <a href="" data-slide-index="3"><img src="/uploads/images/foto-zhivyh-kartin/slide-8/4_m.jpg"/><span class="fancybox-pager" data-fancybox-type="image" data-fancybox-group="gallery-1" data-href="/uploads/images/foto-zhivyh-kartin/slide-8/4.jpg"></span></a>
        <a href="" data-slide-index="4"><img src="/uploads/images/foto-zhivyh-kartin/slide-8/5_m.jpg"/><span class="fancybox-pager" data-fancybox-type="image" data-fancybox-group="gallery-1" data-href="/uploads/images/foto-zhivyh-kartin/slide-8/5.jpg"></span></a>
    </div>
</div>

<div class="slider_boxes">
    <ul class="bx-slider" id="slide-9">
        <li><a class="fancybox" href="/uploads/images/foto-zhivyh-kartin/slide-9/1.jpg" data-fancybox-group="gallery"><img src="/uploads/images/foto-zhivyh-kartin/slide-9/1.jpg"/></a></li>
        <li><a class="fancybox" href="/uploads/images/foto-zhivyh-kartin/slide-9/2.jpg" data-fancybox-group="gallery"><img src="/uploads/images/foto-zhivyh-kartin/slide-9/2.jpg"/></a></li>
        <li><a class="fancybox" href="/uploads/images/foto-zhivyh-kartin/slide-9/3.jpg" data-fancybox-group="gallery"><img src="/uploads/images/foto-zhivyh-kartin/slide-9/3.jpg"/></a></li>
        <li><a class="fancybox" href="/uploads/images/foto-zhivyh-kartin/slide-9/4.jpg" data-fancybox-group="gallery"><img src="/uploads/images/foto-zhivyh-kartin/slide-9/4.jpg"/></a></li>
        <li><a class="fancybox" href="/uploads/images/foto-zhivyh-kartin/slide-9/5.jpg" data-fancybox-group="gallery"><img src="/uploads/images/foto-zhivyh-kartin/slide-9/5.jpg"/></a></li>
    </ul>

    <div class="bxslider-pager" id="pager-9">
        <a href="" data-slide-index="0"><img src="/uploads/images/foto-zhivyh-kartin/slide-9/1_m.jpg"/><span class="fancybox-pager" data-fancybox-type="image" data-fancybox-group="gallery-1" data-href="/uploads/images/foto-zhivyh-kartin/slide-9/1.jpg"></span></a>
        <a href="" data-slide-index="1"><img src="/uploads/images/foto-zhivyh-kartin/slide-9/2_m.jpg"/><span class="fancybox-pager" data-fancybox-type="image" data-fancybox-group="gallery-1" data-href="/uploads/images/foto-zhivyh-kartin/slide-9/2.jpg"></span></a>
        <a href="" data-slide-index="2"><img src="/uploads/images/foto-zhivyh-kartin/slide-9/3_m.jpg"/><span class="fancybox-pager" data-fancybox-type="image" data-fancybox-group="gallery-1" data-href="/uploads/images/foto-zhivyh-kartin/slide-9/3.jpg"></span></a>
        <a href="" data-slide-index="3"><img src="/uploads/images/foto-zhivyh-kartin/slide-9/4_m.jpg"/><span class="fancybox-pager" data-fancybox-type="image" data-fancybox-group="gallery-1" data-href="/uploads/images/foto-zhivyh-kartin/slide-9/4.jpg"></span></a>
        <a href="" data-slide-index="4"><img src="/uploads/images/foto-zhivyh-kartin/slide-9/5_m.jpg"/><span class="fancybox-pager" data-fancybox-type="image" data-fancybox-group="gallery-1" data-href="/uploads/images/foto-zhivyh-kartin/slide-9/5.jpg"></span></a>
    </div>
</div>

<div class="slider_boxes">
    <ul class="bx-slider" id="slide-10">
        <li><a class="fancybox" href="/uploads/images/foto-zhivyh-kartin/slide-10/1.jpg" data-fancybox-group="gallery"><img src="/uploads/images/foto-zhivyh-kartin/slide-10/1.jpg"/></a></li>
        <li><a class="fancybox" href="/uploads/images/foto-zhivyh-kartin/slide-10/2.jpg" data-fancybox-group="gallery"><img src="/uploads/images/foto-zhivyh-kartin/slide-10/2.jpg"/></a></li>
        <li><a class="fancybox" href="/uploads/images/foto-zhivyh-kartin/slide-10/3.jpg" data-fancybox-group="gallery"><img src="/uploads/images/foto-zhivyh-kartin/slide-10/3.jpg"/></a></li>
        <li><a class="fancybox" href="/uploads/images/foto-zhivyh-kartin/slide-10/4.jpg" data-fancybox-group="gallery"><img src="/uploads/images/foto-zhivyh-kartin/slide-10/4.jpg"/></a></li>
    </ul>

    <div class="bxslider-pager" id="pager-10">
        <a href="" data-slide-index="0"><img src="/uploads/images/foto-zhivyh-kartin/slide-10/1_m.jpg"/><span class="fancybox-pager" data-fancybox-type="image" data-fancybox-group="gallery-1" data-href="/uploads/images/foto-zhivyh-kartin/slide-10/1.jpg"></span></a>
        <a href="" data-slide-index="1"><img src="/uploads/images/foto-zhivyh-kartin/slide-10/2_m.jpg"/><span class="fancybox-pager" data-fancybox-type="image" data-fancybox-group="gallery-1" data-href="/uploads/images/foto-zhivyh-kartin/slide-10/2.jpg"></span></a>
        <a href="" data-slide-index="2"><img src="/uploads/images/foto-zhivyh-kartin/slide-10/3_m.jpg"/><span class="fancybox-pager" data-fancybox-type="image" data-fancybox-group="gallery-1" data-href="/uploads/images/foto-zhivyh-kartin/slide-10/3.jpg"></span></a>
        <a href="" data-slide-index="3"><img src="/uploads/images/foto-zhivyh-kartin/slide-10/4_m.jpg"/><span class="fancybox-pager" data-fancybox-type="image" data-fancybox-group="gallery-1" data-href="/uploads/images/foto-zhivyh-kartin/slide-10/4.jpg"></span></a>
    </div>
</div>

<div class="slider_boxes">
    <ul class="bx-slider" id="slide-11">
        <li><a class="fancybox" href="/uploads/images/foto-zhivyh-kartin/slide-11/1.jpg" data-fancybox-group="gallery"><img src="/uploads/images/foto-zhivyh-kartin/slide-11/1.jpg"/></a></li>
        <li><a class="fancybox" href="/uploads/images/foto-zhivyh-kartin/slide-11/2.jpg" data-fancybox-group="gallery"><img src="/uploads/images/foto-zhivyh-kartin/slide-11/2.jpg"/></a></li>
        <li><a class="fancybox" href="/uploads/images/foto-zhivyh-kartin/slide-11/3.jpg" data-fancybox-group="gallery"><img src="/uploads/images/foto-zhivyh-kartin/slide-11/3.jpg"/></a></li>
        <li><a class="fancybox" href="/uploads/images/foto-zhivyh-kartin/slide-11/4.jpg" data-fancybox-group="gallery"><img src="/uploads/images/foto-zhivyh-kartin/slide-11/4.jpg"/></a></li>
    </ul>

    <div class="bxslider-pager" id="pager-11">
        <a href="" data-slide-index="0"><img src="/uploads/images/foto-zhivyh-kartin/slide-11/1_m.jpg"/><span class="fancybox-pager" data-fancybox-type="image" data-fancybox-group="gallery-1" data-href="/uploads/images/foto-zhivyh-kartin/slide-11/1.jpg"></span></a>
        <a href="" data-slide-index="1"><img src="/uploads/images/foto-zhivyh-kartin/slide-11/2_m.jpg"/><span class="fancybox-pager" data-fancybox-type="image" data-fancybox-group="gallery-1" data-href="/uploads/images/foto-zhivyh-kartin/slide-11/2.jpg"></span></a>
        <a href="" data-slide-index="2"><img src="/uploads/images/foto-zhivyh-kartin/slide-11/3_m.jpg"/><span class="fancybox-pager" data-fancybox-type="image" data-fancybox-group="gallery-1" data-href="/uploads/images/foto-zhivyh-kartin/slide-11/3.jpg"></span></a>
        <a href="" data-slide-index="3"><img src="/uploads/images/foto-zhivyh-kartin/slide-11/4_m.jpg"/><span class="fancybox-pager" data-fancybox-type="image" data-fancybox-group="gallery-1" data-href="/uploads/images/foto-zhivyh-kartin/slide-11/4.jpg"></span></a>
    </div>
</div>

<div class="slider_boxes">
    <ul class="bx-slider" id="slide-12">
        <li><a class="fancybox" href="/uploads/images/foto-zhivyh-kartin/slide-12/1.jpg" data-fancybox-group="gallery"><img src="/uploads/images/foto-zhivyh-kartin/slide-12/1.jpg"/></a></li>
        <li><a class="fancybox" href="/uploads/images/foto-zhivyh-kartin/slide-12/2.jpg" data-fancybox-group="gallery"><img src="/uploads/images/foto-zhivyh-kartin/slide-12/2.jpg"/></a></li>
        <li><a class="fancybox" href="/uploads/images/foto-zhivyh-kartin/slide-12/3.jpg" data-fancybox-group="gallery"><img src="/uploads/images/foto-zhivyh-kartin/slide-12/3.jpg"/></a></li>
        <li><a class="fancybox" href="/uploads/images/foto-zhivyh-kartin/slide-12/4.jpg" data-fancybox-group="gallery"><img src="/uploads/images/foto-zhivyh-kartin/slide-12/4.jpg"/></a></li>
        <li><a class="fancybox" href="/uploads/images/foto-zhivyh-kartin/slide-12/5.jpg" data-fancybox-group="gallery"><img src="/uploads/images/foto-zhivyh-kartin/slide-12/5.jpg"/></a></li>
    </ul>

    <div class="bxslider-pager" id="pager-12">
        <a href="" data-slide-index="0"><img src="/uploads/images/foto-zhivyh-kartin/slide-12/1_m.jpg"/><span class="fancybox-pager" data-fancybox-type="image" data-fancybox-group="gallery-1" data-href="/uploads/images/foto-zhivyh-kartin/slide-12/1.jpg"></span></a>
        <a href="" data-slide-index="1"><img src="/uploads/images/foto-zhivyh-kartin/slide-12/2_m.jpg"/><span class="fancybox-pager" data-fancybox-type="image" data-fancybox-group="gallery-1" data-href="/uploads/images/foto-zhivyh-kartin/slide-12/2.jpg"></span></a>
        <a href="" data-slide-index="2"><img src="/uploads/images/foto-zhivyh-kartin/slide-12/3_m.jpg"/><span class="fancybox-pager" data-fancybox-type="image" data-fancybox-group="gallery-1" data-href="/uploads/images/foto-zhivyh-kartin/slide-12/3.jpg"></span></a>
        <a href="" data-slide-index="3"><img src="/uploads/images/foto-zhivyh-kartin/slide-12/4_m.jpg"/><span class="fancybox-pager" data-fancybox-type="image" data-fancybox-group="gallery-1" data-href="/uploads/images/foto-zhivyh-kartin/slide-12/4.jpg"></span></a>
        <a href="" data-slide-index="4"><img src="/uploads/images/foto-zhivyh-kartin/slide-12/5_m.jpg"/><span class="fancybox-pager" data-fancybox-type="image" data-fancybox-group="gallery-1" data-href="/uploads/images/foto-zhivyh-kartin/slide-12/5.jpg"></span></a>
    </div>
</div>

<div class="slider_boxes">
    <ul class="bx-slider" id="slide-13">
        <li><a class="fancybox" href="/uploads/images/foto-zhivyh-kartin/slide-13/1.jpg" data-fancybox-group="gallery"><img src="/uploads/images/foto-zhivyh-kartin/slide-13/1.jpg"/></a></li>
        <li><a class="fancybox" href="/uploads/images/foto-zhivyh-kartin/slide-13/2.jpg" data-fancybox-group="gallery"><img src="/uploads/images/foto-zhivyh-kartin/slide-13/2.jpg"/></a></li>
        <li><a class="fancybox" href="/uploads/images/foto-zhivyh-kartin/slide-13/3.jpg" data-fancybox-group="gallery"><img src="/uploads/images/foto-zhivyh-kartin/slide-13/3.jpg"/></a></li>
        <li><a class="fancybox" href="/uploads/images/foto-zhivyh-kartin/slide-13/4.jpg" data-fancybox-group="gallery"><img src="/uploads/images/foto-zhivyh-kartin/slide-13/4.jpg"/></a></li>
    </ul>

    <div class="bxslider-pager" id="pager-13">
        <a href="" data-slide-index="0"><img src="/uploads/images/foto-zhivyh-kartin/slide-13/1_m.jpg"/><span class="fancybox-pager" data-fancybox-type="image" data-fancybox-group="gallery-1" data-href="/uploads/images/foto-zhivyh-kartin/slide-13/1.jpg"></span></a>
        <a href="" data-slide-index="1"><img src="/uploads/images/foto-zhivyh-kartin/slide-13/2_m.jpg"/><span class="fancybox-pager" data-fancybox-type="image" data-fancybox-group="gallery-1" data-href="/uploads/images/foto-zhivyh-kartin/slide-13/2.jpg"></span></a>
        <a href="" data-slide-index="2"><img src="/uploads/images/foto-zhivyh-kartin/slide-13/3_m.jpg"/><span class="fancybox-pager" data-fancybox-type="image" data-fancybox-group="gallery-1" data-href="/uploads/images/foto-zhivyh-kartin/slide-13/3.jpg"></span></a>
        <a href="" data-slide-index="3"><img src="/uploads/images/foto-zhivyh-kartin/slide-13/4_m.jpg"/><span class="fancybox-pager" data-fancybox-type="image" data-fancybox-group="gallery-1" data-href="/uploads/images/foto-zhivyh-kartin/slide-13/4.jpg"></span></a>
    </div>
</div>

<div class="slider_boxes">
    <ul class="bx-slider" id="slide-14">
        <li><a class="fancybox" href="/uploads/images/foto-zhivyh-kartin/slide-14/1.jpg" data-fancybox-group="gallery"><img src="/uploads/images/foto-zhivyh-kartin/slide-14/1.jpg"/></a></li>
        <li><a class="fancybox" href="/uploads/images/foto-zhivyh-kartin/slide-14/2.jpg" data-fancybox-group="gallery"><img src="/uploads/images/foto-zhivyh-kartin/slide-14/2.jpg"/></a></li>
        <li><a class="fancybox" href="/uploads/images/foto-zhivyh-kartin/slide-14/3.jpg" data-fancybox-group="gallery"><img src="/uploads/images/foto-zhivyh-kartin/slide-14/3.jpg"/></a></li>
        <li><a class="fancybox" href="/uploads/images/foto-zhivyh-kartin/slide-14/4.jpg" data-fancybox-group="gallery"><img src="/uploads/images/foto-zhivyh-kartin/slide-14/4.jpg"/></a></li>
        <li><a class="fancybox" href="/uploads/images/foto-zhivyh-kartin/slide-14/5.jpg" data-fancybox-group="gallery"><img src="/uploads/images/foto-zhivyh-kartin/slide-14/5.jpg"/></a></li>
    </ul>

    <div class="bxslider-pager" id="pager-14">
        <a href="" data-slide-index="0"><img src="/uploads/images/foto-zhivyh-kartin/slide-14/1_m.jpg"/><span class="fancybox-pager" data-fancybox-type="image" data-fancybox-group="gallery-1" data-href="/uploads/images/foto-zhivyh-kartin/slide-14/1.jpg"></span></a>
        <a href="" data-slide-index="1"><img src="/uploads/images/foto-zhivyh-kartin/slide-14/2_m.jpg"/><span class="fancybox-pager" data-fancybox-type="image" data-fancybox-group="gallery-1" data-href="/uploads/images/foto-zhivyh-kartin/slide-14/2.jpg"></span></a>
        <a href="" data-slide-index="2"><img src="/uploads/images/foto-zhivyh-kartin/slide-14/3_m.jpg"/><span class="fancybox-pager" data-fancybox-type="image" data-fancybox-group="gallery-1" data-href="/uploads/images/foto-zhivyh-kartin/slide-14/3.jpg"></span></a>
        <a href="" data-slide-index="3"><img src="/uploads/images/foto-zhivyh-kartin/slide-14/4_m.jpg"/><span class="fancybox-pager" data-fancybox-type="image" data-fancybox-group="gallery-1" data-href="/uploads/images/foto-zhivyh-kartin/slide-14/4.jpg"></span></a>
        <a href="" data-slide-index="4"><img src="/uploads/images/foto-zhivyh-kartin/slide-14/5_m.jpg"/><span class="fancybox-pager" data-fancybox-type="image" data-fancybox-group="gallery-1" data-href="/uploads/images/foto-zhivyh-kartin/slide-14/5.jpg"></span></a>
    </div>
</div>

<div class="slider_boxes">
    <ul class="bx-slider" id="slide-15">
        <li><a class="fancybox" href="/uploads/images/foto-zhivyh-kartin/slide-15/1.jpg" data-fancybox-group="gallery"><img src="/uploads/images/foto-zhivyh-kartin/slide-15/1.jpg"/></a></li>
        <li><a class="fancybox" href="/uploads/images/foto-zhivyh-kartin/slide-15/2.jpg" data-fancybox-group="gallery"><img src="/uploads/images/foto-zhivyh-kartin/slide-15/2.jpg"/></a></li>
        <li><a class="fancybox" href="/uploads/images/foto-zhivyh-kartin/slide-15/3.jpg" data-fancybox-group="gallery"><img src="/uploads/images/foto-zhivyh-kartin/slide-15/3.jpg"/></a></li>
    </ul>

    <div class="bxslider-pager" id="pager-15">
        <a href="" data-slide-index="0"><img src="/uploads/images/foto-zhivyh-kartin/slide-15/1_m.jpg"/><span class="fancybox-pager" data-fancybox-type="image" data-fancybox-group="gallery-1" data-href="/uploads/images/foto-zhivyh-kartin/slide-15/1.jpg"></span></a>
        <a href="" data-slide-index="1"><img src="/uploads/images/foto-zhivyh-kartin/slide-15/2_m.jpg"/><span class="fancybox-pager" data-fancybox-type="image" data-fancybox-group="gallery-1" data-href="/uploads/images/foto-zhivyh-kartin/slide-15/2.jpg"></span></a>
        <a href="" data-slide-index="2"><img src="/uploads/images/foto-zhivyh-kartin/slide-15/3_m.jpg"/><span class="fancybox-pager" data-fancybox-type="image" data-fancybox-group="gallery-1" data-href="/uploads/images/foto-zhivyh-kartin/slide-15/3.jpg"></span></a>
    </div>
</div>

<div class="slider_boxes">
    <ul class="bx-slider" id="slide-16">
        <li><a class="fancybox" href="/uploads/images/foto-zhivyh-kartin/slide-16/1.jpg" data-fancybox-group="gallery"><img src="/uploads/images/foto-zhivyh-kartin/slide-16/1.jpg"/></a></li>
        <li><a class="fancybox" href="/uploads/images/foto-zhivyh-kartin/slide-16/2.jpg" data-fancybox-group="gallery"><img src="/uploads/images/foto-zhivyh-kartin/slide-16/2.jpg"/></a></li>
        <li><a class="fancybox" href="/uploads/images/foto-zhivyh-kartin/slide-16/3.jpg" data-fancybox-group="gallery"><img src="/uploads/images/foto-zhivyh-kartin/slide-16/3.jpg"/></a></li>
        <li><a class="fancybox" href="/uploads/images/foto-zhivyh-kartin/slide-16/4.jpg" data-fancybox-group="gallery"><img src="/uploads/images/foto-zhivyh-kartin/slide-16/4.jpg"/></a></li>
        <li><a class="fancybox" href="/uploads/images/foto-zhivyh-kartin/slide-16/5.jpg" data-fancybox-group="gallery"><img src="/uploads/images/foto-zhivyh-kartin/slide-16/5.jpg"/></a></li>
    </ul>

    <div class="bxslider-pager" id="pager-16">
        <a href="" data-slide-index="0"><img src="/uploads/images/foto-zhivyh-kartin/slide-16/1_m.jpg"/><span class="fancybox-pager" data-fancybox-type="image" data-fancybox-group="gallery-1" data-href="/uploads/images/foto-zhivyh-kartin/slide-16/1.jpg"></span></a>
        <a href="" data-slide-index="1"><img src="/uploads/images/foto-zhivyh-kartin/slide-16/2_m.jpg"/><span class="fancybox-pager" data-fancybox-type="image" data-fancybox-group="gallery-1" data-href="/uploads/images/foto-zhivyh-kartin/slide-16/2.jpg"></span></a>
        <a href="" data-slide-index="2"><img src="/uploads/images/foto-zhivyh-kartin/slide-16/3_m.jpg"/><span class="fancybox-pager" data-fancybox-type="image" data-fancybox-group="gallery-1" data-href="/uploads/images/foto-zhivyh-kartin/slide-16/3.jpg"></span></a>
        <a href="" data-slide-index="3"><img src="/uploads/images/foto-zhivyh-kartin/slide-16/4_m.jpg"/><span class="fancybox-pager" data-fancybox-type="image" data-fancybox-group="gallery-1" data-href="/uploads/images/foto-zhivyh-kartin/slide-16/4.jpg"></span></a>
        <a href="" data-slide-index="4"><img src="/uploads/images/foto-zhivyh-kartin/slide-16/5_m.jpg"/><span class="fancybox-pager" data-fancybox-type="image" data-fancybox-group="gallery-1" data-href="/uploads/images/foto-zhivyh-kartin/slide-16/5.jpg"></span></a>
    </div>
</div>

<div class="slider_boxes">
    <ul class="bx-slider" id="slide-17">
        <li><a class="fancybox" href="/uploads/images/foto-zhivyh-kartin/slide-17/1.jpg" data-fancybox-group="gallery"><img src="/uploads/images/foto-zhivyh-kartin/slide-17/1.jpg"/></a></li>
        <li><a class="fancybox" href="/uploads/images/foto-zhivyh-kartin/slide-17/2.jpg" data-fancybox-group="gallery"><img src="/uploads/images/foto-zhivyh-kartin/slide-17/2.jpg"/></a></li>
        <li><a class="fancybox" href="/uploads/images/foto-zhivyh-kartin/slide-17/3.jpg" data-fancybox-group="gallery"><img src="/uploads/images/foto-zhivyh-kartin/slide-17/3.jpg"/></a></li>
    </ul>

    <div class="bxslider-pager" id="pager-17">
        <a href="" data-slide-index="0"><img src="/uploads/images/foto-zhivyh-kartin/slide-17/1_m.png"/><span class="fancybox-pager" data-fancybox-type="image" data-fancybox-group="gallery-1" data-href="/uploads/images/foto-zhivyh-kartin/slide-17/1.jpg"></span></a>
        <a href="" data-slide-index="1"><img src="/uploads/images/foto-zhivyh-kartin/slide-17/2_m.png"/><span class="fancybox-pager" data-fancybox-type="image" data-fancybox-group="gallery-1" data-href="/uploads/images/foto-zhivyh-kartin/slide-17/2.jpg"></span></a>
        <a href="" data-slide-index="2"><img src="/uploads/images/foto-zhivyh-kartin/slide-17/3_m.png"/><span class="fancybox-pager" data-fancybox-type="image" data-fancybox-group="gallery-1" data-href="/uploads/images/foto-zhivyh-kartin/slide-17/3.jpg"></span></a>
    </div>
</div>

<!--
<p><a class="fancybox" href="/uploads/images/foto-zhivyh-kartin/slide-1/1.jpg" data-fancybox-group="gallery"><img class="adaptive-image" src="/uploads/images/foto-zhivyh-kartin/slide-1/1.jpg"/></a></p>
<p><a class="fancybox" href="/uploads/images/foto-zhivyh-kartin/slide-1/2.jpg" data-fancybox-group="gallery"><img class="adaptive-image" src="/uploads/images/foto-zhivyh-kartin/slide-1/2.jpg"/></a></p>
<h2>Успейте купить со <span class="pink">скидкой 72%!</span></h2>
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

<p><a class="fancybox" href="/uploads/images/foto-zhivyh-kartin/slide-1/3.jpg" data-fancybox-group="gallery"><img class="adaptive-image" src="/uploads/images/foto-zhivyh-kartin/slide-1/2.jpg"/></a></p>
<h2>Успейте купить со <span class="pink">скидкой <?=Yii::$app->params['discount']?>%!</span></h2>
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
-->