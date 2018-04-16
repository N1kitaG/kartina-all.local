<?php
use common\models\Category;
use yii\bootstrap\Html;
use yii\helpers\Url;
use yii\widgets\Menu;

$category = isset($category) ? $category : new Category();

$items = [
    [
        'label' => 'Цветы',
        'url' => Url::to(['/category/seoview', 'slug' => 'modulnye-kartiny/cvety']) . '#tovar',
        'active' => (Yii::$app->controller->id == 'category' and Yii::$app->controller->actionParams['slug'] == 'modulnye-kartiny/cvety'),

    ],
    [
        'label' => 'Природа, пейзажи',
        'url' => Url::to(['/category/seoview', 'slug' => 'modulnye-kartiny/priroda']) . '#tovar',
        'active' => (Yii::$app->controller->id == 'category' and Yii::$app->controller->actionParams['slug'] == 'modulnye-kartiny/priroda'),
    ],
    [
        'label' => 'Абстракция',
        'url' => Url::to(['/category/seoview', 'slug' => 'modulnye-kartiny/abstrakciya']) . '#tovar',
        'active' => (Yii::$app->controller->id == 'category' and Yii::$app->controller->actionParams['slug'] == 'modulnye-kartiny/abstrakciya'),
    ],
    [
        'label' => 'Для кухни',
        'url' => Url::to(['/category/seoview', 'slug' => 'modulnye-kartiny/kuhnya']) . '#tovar',
        'active' => (Yii::$app->controller->id == 'category' and Yii::$app->controller->actionParams['slug'] == 'modulnye-kartiny/kuhnya'),
    ],
    [
        'label' => 'Города',
        'url' => Url::to(['/category/seoview', 'slug' => 'modulnye-kartiny/goroda']) . '#tovar',
        'active' => (Yii::$app->controller->id == 'category' and Yii::$app->controller->actionParams['slug'] == 'modulnye-kartiny/goroda'),
    ],
    [
        'label' => 'Животные',
        'url' => Url::to(['/category/seoview', 'slug' => 'modulnye-kartiny/zhivotnye']) . '#tovar',
        'active' => (Yii::$app->controller->id == 'category' and Yii::$app->controller->actionParams['slug'] == 'modulnye-kartiny/zhivotnye'),
    ],
    [
        'label' => 'VIP композиции',
        'url' => Url::to(['/category/seoview', 'slug' => 'modulnye-kartiny/vip']) . '#tovar',
        'active' => (Yii::$app->controller->id == 'category' and Yii::$app->controller->actionParams['slug'] == 'modulnye-kartiny/vip'),
    ],
    [
        'label' => 'Картины ручной работы',
        'url' => Url::to(['/category/seoview', 'slug' => 'modulnye-kartiny/ruchnoy-raboty']) . '#tovar',
        'active' => (Yii::$app->controller->id == 'category' and Yii::$app->controller->actionParams['slug'] == 'modulnye-kartiny/ruchnoy-raboty'),
    ],
    [
        'label' => 'НОВИНКИ',
        'url' => Url::to(['/category/seoview', 'slug' => 'modulnye-kartiny/modules-novelty']) . '#tovar',
        'active' => (Yii::$app->controller->id == 'category' and Yii::$app->controller->actionParams['slug'] == 'modulnye-kartiny/modules-novelty'),
    ],
    [
        'label' => 'Вертикальные картины',
        'url' => Url::to(['/category/seoview', 'slug' => 'vertical']) . '#tovar',
        'active' => (Yii::$app->controller->id == 'category' and Yii::$app->controller->actionParams['slug'] == 'vertical'),
    ],
    [
        'label' => 'Триптих',
        'url' => Url::to(['/category/seoview', 'slug' => 'triptih']) . '#tovar',
        'active' => (Yii::$app->controller->id == 'category' and Yii::$app->controller->actionParams['slug'] == 'triptih'),
    ],
    [
        'label' => 'Для кафе',
        'url' => Url::to(['/category/seoview', 'slug' => 'cafe']) . '#tovar',
        'active' => (Yii::$app->controller->id == 'category' and Yii::$app->controller->actionParams['slug'] == 'cafe'),
    ],
    [
        'label' => 'Для отелей',
        'url' => Url::to(['/category/seoview', 'slug' => 'hotel']) . '#tovar',
        'active' => (Yii::$app->controller->id == 'category' and Yii::$app->controller->actionParams['slug'] == 'hotel'),
    ],
    [
        'label' => 'Для офиса',
        'url' => Url::to(['/category/seoview', 'slug' => 'office']) . '#tovar',
        'active' => (Yii::$app->controller->id == 'category' and Yii::$app->controller->actionParams['slug'] == 'office'),
    ],
    [
        'label' => 'Для детей',
        'url' => Url::to(['/category/seoview', 'slug' => 'children']) . '#tovar',
        'active' => (Yii::$app->controller->id == 'category' and Yii::$app->controller->actionParams['slug'] == 'children'),
    ],
    /*
    [
        'label'=>'Картины в багете',
        'url'=>Url::to(['/category/seoview','slug'=>'baguette']).'#tovar',
        'active'=>(Yii::$app->controller->id == 'category' and Yii::$app->controller->actionParams['slug'] == 'baguette'),
    ],
    */
];

if (isset($limit)) {
    $items = array_slice($items, 0, $limit);
}

if (isset($all)) {
    $items[] = [
        'label' => 'Смотреть все модульные картины',
        'url' => Url::to(['/category/seoview', 'slug' => 'modulnye-kartiny']) . '#tovar',
        'active' => Yii::$app->controller->id == 'category' and Yii::$app->controller->actionParams['slug'] == 'modulnye-kartiny',
    ];
}

?>
<a class="sidebar-title" href="<?= Url::to(['/category/seoview', 'slug' => 'modulnye-kartiny']) . '#tovar' ?>"
   style="font-size: 18px; text-decoration: none;">Модульные картины</a>
<nav>
    <?= Menu::widget(['items' => $items]); ?>
</nav>