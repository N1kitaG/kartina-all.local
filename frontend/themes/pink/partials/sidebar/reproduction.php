<?php
use common\models\Category;
use yii\bootstrap\Html;
use yii\helpers\Url;
use yii\widgets\Menu;

$category  = isset($category)?$category:new Category();

$items = [
    [
        'label' => 'Афремов',
        'url' => Url::to(['/category/seoview', 'slug' => 'smotret-vse-reproduqtcii/afremov-leonid-arqadevich']).'#tovar',
        'active' => (Yii::$app->controller->id == 'category' and Yii::$app->controller->actionParams['slug'] == 'smotret-vse-reproduqtcii/afremov-leonid-arqadevich'),
    ],
    [
        'label' => 'Айвазовский',
        'url' => Url::to(['/category/seoview', 'slug' => 'smotret-vse-reproduqtcii/aivazowsqii-ivan-konstantinovich']).'#tovar',
        'active' => (Yii::$app->controller->id == 'category' and Yii::$app->controller->actionParams['slug'] == 'smotret-vse-reproduqtcii/aivazowsqii-ivan-konstantinovich'),
    ],
    [
        'label' => 'Васнецов',
        'url' => Url::to(['/category/seoview', 'slug' => 'smotret-vse-reproduqtcii/vasnetcov-victor-mihailovich']).'#tovar',
        'active' => (Yii::$app->controller->id == 'category' and Yii::$app->controller->actionParams['slug'] == 'smotret-vse-reproduqtcii/vasnetcov-victor-mihailovich'),
    ],
    [
        'label' => 'Вельде',
        'url' => Url::to(['/category/seoview', 'slug' => 'smotret-vse-reproduqtcii/velde-adrian-van-de']).'#tovar',
        'active' => (Yii::$app->controller->id == 'category' and Yii::$app->controller->actionParams['slug'] == 'smotret-vse-reproduqtcii/velde-adrian-van-de'),
    ],
    [
        'label' => 'Ван Гог',
        'url' => Url::to(['/category/seoview', 'slug' => 'smotret-vse-reproduqtcii/vincent-wiliam-van-gog']).'#tovar',
        'active' => (Yii::$app->controller->id == 'category' and Yii::$app->controller->actionParams['slug'] == 'smotret-vse-reproduqtcii/vincent-wiliam-van-gog'),
    ],
    [
        'label' => 'Якобс',
        'url' => Url::to(['/category/seoview', 'slug' => 'smotret-vse-reproduqtcii/kyoip-albert-iaqobs']).'#tovar',
        'active' => (Yii::$app->controller->id == 'category' and Yii::$app->controller->actionParams['slug'] == 'smotret-vse-reproduqtcii/kyoip-albert-iaqobs'),
    ],
    [
        'label' => 'Да Винчи',
        'url' => Url::to(['/category/seoview', 'slug' => 'smotret-vse-reproduqtcii/leonardo-da-winchi']).'#tovar',
        'active' => (Yii::$app->controller->id == 'category' and Yii::$app->controller->actionParams['slug'] == 'smotret-vse-reproduqtcii/leonardo-da-winchi'),
    ],
    [
        'label' => 'Мелевич',
        'url' => Url::to(['/category/seoview', 'slug' => 'smotret-vse-reproduqtcii/malevich-kazimir-severinovich']).'#tovar',
        'active' => (Yii::$app->controller->id == 'category' and Yii::$app->controller->actionParams['slug'] == 'smotret-vse-reproduqtcii/malevich-kazimir-severinovich'),
    ],
    [
        'label' => 'Мотичелли',
        'url' => Url::to(['/category/seoview', 'slug' => 'smotret-vse-reproduqtcii/montichelli-adolf-zhozef-toma']).'#tovar',
        'active' => (Yii::$app->controller->id == 'category' and Yii::$app->controller->actionParams['slug'] == 'smotret-vse-reproduqtcii/montichelli-adolf-zhozef-toma'),
    ],
    [
        'label' => 'Остаде',
        'url' => Url::to(['/category/seoview', 'slug' => 'smotret-vse-reproduqtcii/ostade-isaaq-van']).'#tovar',
        'active' => (Yii::$app->controller->id == 'category' and Yii::$app->controller->actionParams['slug'] == 'smotret-vse-reproduqtcii/ostade-isaaq-van'),
    ],
    [
        'label' => 'Перов',
        'url' => Url::to(['/category/seoview', 'slug' => 'smotret-vse-reproduqtcii/perov-vasilii-grigorevich']).'#tovar',
        'active' => (Yii::$app->controller->id == 'category' and Yii::$app->controller->actionParams['slug'] == 'smotret-vse-reproduqtcii/perov-vasilii-grigorevich'),
    ],
    [
        'label' => 'Репин',
        'url' => Url::to(['/category/seoview', 'slug' => 'smotret-vse-reproduqtcii/repin-ilia-efimovich']).'#tovar',
        'active' => (Yii::$app->controller->id == 'category' and Yii::$app->controller->actionParams['slug'] == 'smotret-vse-reproduqtcii/repin-ilia-efimovich'),
    ],
    [
        'label' => 'Дали',
        'url' => Url::to(['/category/seoview', 'slug' => 'smotret-vse-reproduqtcii/salvador-dali']).'#tovar',
        'active' => (Yii::$app->controller->id == 'category' and Yii::$app->controller->actionParams['slug'] == 'smotret-vse-reproduqtcii/salvador-dali'),
    ],
    [
        'label' => 'Серов',
        'url' => Url::to(['/category/seoview', 'slug' => 'smotret-vse-reproduqtcii/serov-valentin-alexanderovich']).'#tovar',
        'active' => (Yii::$app->controller->id == 'category' and Yii::$app->controller->actionParams['slug'] == 'smotret-vse-reproduqtcii/serov-valentin-alexanderovich'),
    ],
    [
        'label' => 'Рембрант',
        'url' => Url::to(['/category/seoview', 'slug' => 'smotret-vse-reproduqtcii/harmens-van-rein-rembrandt']).'#tovar',
        'active' => (Yii::$app->controller->id == 'category' and Yii::$app->controller->actionParams['slug'] == 'smotret-vse-reproduqtcii/harmens-van-rein-rembrandt'),
    ],
    [
        'label' => 'Шагал',
        'url' => Url::to(['/category/seoview', 'slug' => 'smotret-vse-reproduqtcii/shagal-mark-zaharovich']).'#tovar',
        'active' => (Yii::$app->controller->id == 'category' and Yii::$app->controller->actionParams['slug'] == 'smotret-vse-reproduqtcii/shagal-mark-zaharovich'),
    ],
    [
        'label' => 'Шишкин',
        'url' => Url::to(['/category/seoview', 'slug' => 'smotret-vse-reproduqtcii/shishqin-ivan-ivanovich']).'#tovar',
        'active' => (Yii::$app->controller->id == 'category' and Yii::$app->controller->actionParams['slug'] == 'smotret-vse-reproduqtcii/shishqin-ivan-ivanovich'),
    ],
    [
        'label' => 'Эльсхаймер',
        'url' => Url::to(['/category/seoview', 'slug' => 'smotret-vse-reproduqtcii/elshaimer-adam']).'#tovar',
        'active' => (Yii::$app->controller->id == 'category' and Yii::$app->controller->actionParams['slug'] == 'smotret-vse-reproduqtcii/elshaimer-adam'),
    ],
];

if (isset($limit)) {
    $items = array_slice($items, 0, $limit);
}

if(isset($all)){
    $items[] = [
        'label'=>'Смотреть все репродукции',
        'url'=>Url::to(['/category/seoview','slug'=>'smotret-vse-reproduqtcii']).'#tovar',
        'active'=>Yii::$app->controller->id == 'category' and Yii::$app->controller->actionParams['slug'] == 'smotret-vse-reproduqtcii',
    ];
}

?>
<a class="sidebar-title" href="<?=Url::to(['/category/seoview','slug'=>'smotret-vse-reproduqtcii']).'#tovar'?>" style="font-size: 19px; text-decoration: none;">Репродукции</a>
<nav>
    <?= Menu::widget(['items'=> $items]);?>
</nav>



















