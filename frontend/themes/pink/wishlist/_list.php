<?php
/**
 * @var $model common\models\Product
 *
 */
use common\helpers\UImage;
use yii\bootstrap\Html;
use yii\helpers\Url;

$category = $model->cats[0]->slug;
?>

<div class="wishlist-item clearfix">
    <div class="wishlist-img fl">
        <div class="wishlist-title">
            <a href="<?=Url::to(['product/view','category'=>$category,'slug'=>$model->slug])?>"><?=$model->title;?></a>
        </div>
        <div class="visual">
            <a href="<?=Url::to(['product/view','category'=>$category,'slug'=>$model->slug])?>">
                <?= Html::img(UImage::getProductImage($model,'fon1',350,250),['alt'=>$model->title])?>
                <span class="loop-widget"></span>
            </a>
        </div>
    </div>
    <div class="wishlist-desc fl">
        <div class="price">
            <div class="price-row" style="margin-bottom: 20px;">Цена без акции: <em><?=number_format($model->getOldPrice(), 0, '', ' ');?> руб.</em></div>
            <div class="price-row">
                Цена по акции<br>
                <span>сейчас: <strong><?=$model->price;?> руб.</strong></span>
            </div>
        </div>
        <div class="order-btn-wrp">
            <a class="order-btn green fancybox-order" href="#order-form" data-product="<?php echo $model->id;?>" data-price-old="<?=number_format($model->getOldPrice(), 0, '', ' ');?>" data-price="<?php echo $model->price;?>" data-image="<?= UImage::getProductImage($model,'fon1',150,150)?>" data-title="<?= $model->title;?>">Заказать</a>
        </div>
        <div class="remove-btm-wrp">
            <?= Html::a('удалить', ['/wishlist/delete','id'=>$model->id], ['class' => 'btn']) ?>
        </div>
    </div>
</div>