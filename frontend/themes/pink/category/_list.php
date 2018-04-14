<?php

/**
 * @var $model common\models\Product
 * @var $this \yii\web\View
 */

use common\helpers\OrderBtn;
use common\helpers\UImage;
use yii\helpers\Html;
use yii\helpers\Url;


$alt = ($model->meta_h1) ? $model->meta_h1 : $this->title;

?>
<?php if (Yii::$app->user->can('admin')): ?>
    <a target="_blank" href="/admin/product/update?id=<?php echo $model->id;?>">Редактировать</a>
<?php endif;?>
<div class="item-discount">-<?= Yii::$app->params['discount'] ?><span>%</span></div>
<div class="item-image">
    <?php if (empty($model->image)): ?>
        <?php
        $images = explode('|', $model->images);
        $first = $images[0];
        unset($images[0]);
        ?>
        <a href="<?= Url::to(['/product/view', 'category' => $this->params['category'], 'slug' => $model->slug]); ?>"><?= Html::img(UImage::getResizedImage($first, 446, 318), ['alt' => $alt]) ?></a>
    <?php else: ?>
        <?php if ($model->baget == 1): ?>
            <a href="<?= Url::to(['/product/view', 'category' => $this->params['category'], 'slug' => $model->slug]); ?>">
                <?php if (in_array($model->id, Yii::$app->params['altImages'])): ?>
                    <?= Html::img('/img2/446/' . $model->id . '.jpg',['alt' => $alt]) ?>
                <?php else: ?>
                    <?= Html::img(UImage::getProductImageBorder($model, 'fon1', 446, 318), ['alt' => $alt]) ?>
                <?php endif; ?>
            </a>
        <?php else: ?>
            <a href="<?= Url::to(['/product/view', 'category' => $this->params['category'], 'slug' => $model->slug]); ?>">
                <?php if (in_array($model->id, Yii::$app->params['altImages'])): ?>
                    <?= Html::img('/img2/446/' . $model->id . '.jpg',['alt' => $alt]) ?>
                <?php else: ?>
                    <?= Html::img(UImage::getProductImage($model, 'fon1', 446, 318), ['alt' => $alt]) ?>
                <?php endif; ?>
            </a>
        <?php endif; ?>
    <?php endif; ?>
</div>
<div class="item-title"><a
            href="<?= Url::to(['/product/view', 'category' => $this->params['category'], 'slug' => $model->slug]); ?>"><?= $model->title; ?></a>
</div>
<div class="price">
    <span class="price-old"><?= number_format($model->getOldPrice(), 0, '', ' '); ?><span><?= Yii::$app->params['currency'] ?></span></span>
    <span class="price-cur"><?= number_format($model->price, 0, '', ' '); ?><span><?= Yii::$app->params['currency'] ?></span></span>
</div>
<div class="action_count" style="font-size: 18px; font-weight: bold;">
    <?php if(ABTEST_VARIANT == 'v0'):?>
        <p>Осталось по акции: <?=$model->v0?></p>
    <?php endif;?>
    <?php if(ABTEST_VARIANT == 'v1'):?>
        <p>Осталось по акции: <?=$model->v1?></p>
    <?php endif;?>
</div>
<div class="item-actions clearfix">
    <a class="more" href="<?= Url::to(['/product/view', 'category' => $this->params['category'], 'slug' => $model->slug]); ?>">Подробнее</a>
    <?= OrderBtn::getBtn($model);?>
</div>