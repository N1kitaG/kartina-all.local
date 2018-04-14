<?php
use common\models\Category;
use yii\helpers\Url;
use yii\widgets\Menu;

$category  = isset($category)?$category:new Category();

$items  = [
    [
        'label'=>'Цветы',
        'url'=>Url::to(['/category/seoview','slug'=>'vse-posteri/cvety-kartina']).'#tovar',
        'active'=>(Yii::$app->controller->id == 'category' and Yii::$app->controller->actionParams['slug'] == 'vse-posteri/cvety-kartina'),
    ],
    [
        'label'=>'Котики',
        'url'=>Url::to(['/category/seoview','slug'=>'vse-posteri/cats-kartini']).'#tovar',
        'active'=>(Yii::$app->controller->id == 'category' and Yii::$app->controller->actionParams['slug'] == 'vse-posteri/cats-kartini'),
    ],
    [
        'label'=>'Природа, пейзажи',
        'url'=>Url::to(['/category/seoview','slug'=>'vse-posteri/priroda-kartina']).'#tovar',
        'active'=>(Yii::$app->controller->id == 'category' and Yii::$app->controller->actionParams['slug'] == 'vse-posteri/priroda-kartina'),
    ],
    [
        'label'=>'Абстракция',
        'url'=>Url::to(['/category/seoview','slug'=>'vse-posteri/abstrakciya-kartina']).'#tovar',
        'active'=>(Yii::$app->controller->id == 'category' and Yii::$app->controller->actionParams['slug'] == 'vse-posteri/abstrakciya-kartina'),
    ],
    [
        'label'=>'Для кухни',
        'url'=>Url::to(['/category/seoview','slug'=>'vse-posteri/kuhnya-kartina']).'#tovar',
        'active'=>(Yii::$app->controller->id == 'category' and Yii::$app->controller->actionParams['slug'] == 'vse-posteri/kuhnya-kartina'),
    ],
    [
        'label'=>'Города',
        'url'=>Url::to(['/category/seoview','slug'=>'vse-posteri/goroda-kartina']).'#tovar',
        'active'=>(Yii::$app->controller->id == 'category' and Yii::$app->controller->actionParams['slug'] == 'vse-posteri/goroda-kartina'),
    ],
    [
        'label'=>'Животные',
        'url'=>Url::to(['/category/seoview','slug'=>'vse-posteri/zhivotnye-kartina']).'#tovar',
        'active'=>(Yii::$app->controller->id == 'category' and Yii::$app->controller->actionParams['slug'] == 'vse-posteri/zhivotnye-kartina'),
    ],
    /*[
        'label'=>'VIP КОМПОЗИЦИИ',
        'url'=>Url::to(['/category/seoview','slug'=>'vse-posteri/vip']),
        'active'=>Yii::$app->controller->id == 'category' and Yii::$app->controller->actionParams['slug'] == 'vip',
    ],*/
    [
        'label'=>'Ручная обработка',
        'url'=>Url::to(['/category/seoview','slug'=>'vse-posteri/ruchnaia-obrabotka-kartina']).'#tovar',
        'active'=>(Yii::$app->controller->id == 'category' and Yii::$app->controller->actionParams['slug'] == 'vse-posteri/ruchnaia-obrabotka-kartina'),
    ],
    [
        'label'=>'НОВИНКИ',
        'url'=>Url::to(['/category/seoview','slug'=>'vse-posteri/poster-novelty']).'#tovar',
        'active'=>(Yii::$app->controller->id == 'category' and Yii::$app->controller->actionParams['slug'] == 'vse-posteri/poster-novelty'),
    ],
];

if (isset($limit)) {
    $items = array_slice($items, 0, $limit);
}

if(isset($all)){
    $items[] = [
        'label'=>'Смотреть все постеры',
        'url'=>Url::to(['/category/seoview','slug'=>'vse-posteri']).'#tovar',
        'active'=>Yii::$app->controller->id == 'category' and Yii::$app->controller->actionParams['slug'] == 'vse-posteri',
    ];
}

?>
<a class="sidebar-title" href="<?=Url::to(['/category/seoview','slug'=>'vse-posteri']).'#tovar'?>" style="font-size: 19px; text-decoration: none;">Постеры</a>
<nav>
    <?= Menu::widget(['items'=> $items]);?>
</nav>