<?php
/**
 * @var $model common\models\Page
 * @var $this \yii\web\View
 */

//TODO: Форма отправки заявки на картину по фото

use frontend\themes\pink\assets\PinkAsset;

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

$bundle = PinkAsset::register($this);

$this->theme->setBaseUrl($bundle->baseUrl);

?>
<main class="photopic-page">
    <h2><?=$this->title?></h2>
    <p class="pink-text">Вы можете сделать у нас индивидуальный заказ по вашей фотографии</p>
    <p>Наши дизайнеры учтут все ваши пожелания и выполнят заказ на высшем уровне. <br>Примеры работ, вы можете посмотреть ниже.</p>
    <p>
        Для того чтобы заказать модульную картину по вашей фотографии, Вам необходимо всего лишь нажать на кнопку<br><span class="pink-text">«Заказать модульную картину по фото»</span>
    </p>
    <div class="button-block">
        <a href="#order-popup2" class="btn btn-pink knopkadesign1">Заказать модульную картину по фото</a>
    </div>
    <section class="photopic-example">
        <h2>Примеры модульных картин по фото</h2>
        <div class="photopic-example-row-img">
            <div class="photopic-example-row-img__left">
                <img src="<?=$this->theme->getUrl('img/photopic-example-img1.jpg')?>" alt="Картинка">
            </div>
            <div class="photopic-example-row-img__right">
                <img src="<?=$this->theme->getUrl('img/photopic-example-img2.png')?>" alt="Картинка">
            </div>
            <div class="clearfix"></div>
            <div class="photopic-example-arrow"></div>
        </div>
        <div class="photopic-example-row-img">
            <div class="photopic-example-row-img__left">
                <img src="<?=$this->theme->getUrl('img/photopic-example-img3.jpg')?>" alt="Картинка">
            </div>
            <div class="photopic-example-row-img__right">
                <img src="<?=$this->theme->getUrl('img/photopic-example-img4.png')?>" alt="Картинка">
            </div>
            <div class="clearfix"></div>
            <div class="photopic-example-arrow"></div>
        </div>
        <div class="photopic-example-row-img">
            <div class="photopic-example-row-img__left">
                <img src="<?=$this->theme->getUrl('img/photopic-example-img5.jpg')?>" alt="Картинка">
            </div>
            <div class="photopic-example-row-img__right">
                <img src="<?=$this->theme->getUrl('img/photopic-example-img6.png')?>" alt="Картинка">
            </div>
            <div class="clearfix"></div>
            <div class="photopic-example-arrow"></div>
        </div>
        <div class="button-block">
            <a href="#order-popup2" class="btn btn-pink knopkadesign1">Заказать модульную картину по фото</a>
        </div>
    </section>
</main>