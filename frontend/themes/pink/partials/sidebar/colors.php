<?php
use common\models\Category;
use yii\bootstrap\Html;
use yii\helpers\Url;
use yii\widgets\Menu;

$category  = isset($category)?$category:new Category();

$items = [
    [
        'label'=>'Белый',
        'url'=>Url::to(['/category/seoview','slug'=>'cveta/belii']).'#tovar',
        'active'=>(Yii::$app->controller->id == 'category' and Yii::$app->controller->actionParams['slug'] == 'modulnye-kartiny/cvety'),
        'options'=>['id'=>'white-circle'],
    ],
    [
        'label'=>'Ч/Б',
        'url'=>Url::to(['/category/seoview','slug'=>'cveta/cherno-belii']).'#tovar',
        'active'=>(Yii::$app->controller->id == 'category' and Yii::$app->controller->actionParams['slug'] == 'modulnye-kartiny/cvety'),
        'options'=>['id'=>'bw-circle'],
    ],
    [
        'label'=>'Красный',
        'url'=>Url::to(['/category/seoview','slug'=>'cveta/krasnii']).'#tovar',
        'active'=>(Yii::$app->controller->id == 'category' and Yii::$app->controller->actionParams['slug'] == 'modulnye-kartiny/cvety'),
        'options'=>['id'=>'red-circle'],
    ],
    [
        'label'=>'Бежевый',
        'url'=>Url::to(['/category/seoview','slug'=>'cveta/bezjevii']).'#tovar',
        'active'=>(Yii::$app->controller->id == 'category' and Yii::$app->controller->actionParams['slug'] == 'modulnye-kartiny/cvety'),
        'options'=>['id'=>'beige-circle'],
    ],
    [
        'label'=>'Зеленый',
        'url'=>Url::to(['/category/seoview','slug'=>'cveta/zelenii']).'#tovar',
        'active'=>(Yii::$app->controller->id == 'category' and Yii::$app->controller->actionParams['slug'] == 'modulnye-kartiny/cvety'),
        'options'=>['id'=>'green-circle'],
    ],
    [
        'label'=>'Фиолетовый',
        'url'=>Url::to(['/category/seoview','slug'=>'cveta/fioletovii']).'#tovar',
        'active'=>(Yii::$app->controller->id == 'category' and Yii::$app->controller->actionParams['slug'] == 'modulnye-kartiny/cvety'),
        'options'=>['id'=>'purple-circle'],
    ],
    [
        'label'=>'Желтый',
        'url'=>Url::to(['/category/seoview','slug'=>'cveta/zjeltii']).'#tovar',
        'active'=>(Yii::$app->controller->id == 'category' and Yii::$app->controller->actionParams['slug'] == 'modulnye-kartiny/cvety'),
        'options'=>['id'=>'yellow-circle'],
    ],
    [
        'label'=>'Розовый',
        'url'=>Url::to(['/category/seoview','slug'=>'cveta/rozovii']).'#tovar',
        'active'=>(Yii::$app->controller->id == 'category' and Yii::$app->controller->actionParams['slug'] == 'modulnye-kartiny/cvety'),
        'options'=>['id'=>'pink-circle'],
    ]
];
if (isset($limit)) {
    $items = array_slice($items, 0, $limit);
}

if(isset($all)){
    $items[] = [
        'label'=>'Смотреть все модульные картины',
        'url'=>Url::to(['/category/seoview','slug'=>'modulnye-kartiny']).'#tovar',
        'active'=>Yii::$app->controller->id == 'category' and Yii::$app->controller->actionParams['slug'] == 'modulnye-kartiny',
    ];
}

?>
<a class="sidebar-title" href="<?=Url::to(['/category/seoview','slug'=>'modulnye-kartiny']).'#tovar'?>" style="font-size: 18px; text-decoration: none;">Выбор по цвету</a>
<nav class="menu-colors">
    <?= Menu::widget(['items'=> $items]);?>
</nav>
