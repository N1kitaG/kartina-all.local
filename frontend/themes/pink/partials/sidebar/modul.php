<?php
use common\models\Category;
use yii\bootstrap\Html;
use yii\helpers\Url;
use yii\widgets\Menu;

$category = isset($category) ? $category : new Category();

$items = [
    [
        'label' => 'Природа',
        'url' => Url::to(['/category/seoview', 'slug' => 'modulnye-kartiny/priroda']) . '#tovar',
        'active' => (Yii::$app->controller->id == 'category' and Yii::$app->controller->actionParams['slug'] == 'modulnye-kartiny/priroda'),
    ],
    [
        'label' => 'Цветы',
        'url' => Url::to(['/category/seoview', 'slug' => 'modulnye-kartiny/cvety']) . '#tovar',
        'active' => (Yii::$app->controller->id == 'category' and Yii::$app->controller->actionParams['slug'] == 'modulnye-kartiny/cvety'),

    ],
    [
        'label' => 'Для детей',
        'url' => Url::to(['/category/seoview', 'slug' => 'children']) . '#tovar',
        'active' => (Yii::$app->controller->id == 'category' and Yii::$app->controller->actionParams['slug'] == 'children'),
    ],
    [
        'label' => 'Абстракция',
        'url' => Url::to(['/category/seoview', 'slug' => 'modulnye-kartiny/abstrakciya']) . '#tovar',
        'active' => (Yii::$app->controller->id == 'category' and Yii::$app->controller->actionParams['slug'] == 'modulnye-kartiny/abstrakciya'),
    ],
    [
        'label' => 'VIP композиции',
        'url' => Url::to(['/category/seoview', 'slug' => 'modulnye-kartiny/vip']) . '#tovar',
        'active' => (Yii::$app->controller->id == 'category' and Yii::$app->controller->actionParams['slug'] == 'modulnye-kartiny/vip'),
    ],
    [
        'label' => 'Для кухни',
        'url' => Url::to(['/category/seoview', 'slug' => 'modulnye-kartiny/kuhnya']) . '#tovar',
        'active' => (Yii::$app->controller->id == 'category' and Yii::$app->controller->actionParams['slug'] == 'modulnye-kartiny/kuhnya'),
    ],
    [
        'label' => 'Для кафе',
        'url' => Url::to(['/category/seoview', 'slug' => 'cafe']) . '#tovar',
        'active' => (Yii::$app->controller->id == 'category' and Yii::$app->controller->actionParams['slug'] == 'cafe'),
    ],
    [
        'label' => 'Города',
        'url' => Url::to(['/category/seoview', 'slug' => 'modulnye-kartiny/goroda']) . '#tovar',
        'active' => (Yii::$app->controller->id == 'category' and Yii::$app->controller->actionParams['slug'] == 'modulnye-kartiny/goroda'),
    ],
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