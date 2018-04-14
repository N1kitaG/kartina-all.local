<?php
use common\models\Category;
use yii\bootstrap\Html;
use yii\helpers\Url;
use yii\widgets\Menu;

$category = isset($category) ? $category : new Category();
if (isset($_GET['variant']))
    $variant = $_GET['variant'];
else
    $variant = ABTest::instance()->getTestValue('kartina-menu');

if ($variant === 'v0') {
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
} else {
    $isHome = false;
    $items = [
        [
            'label' => 'Главная',
            'url' => Url::home() . '#tovar',
            'active' => $isHome,
            'template' => $isHome ? '<span>{label}</span>' : '<a href="{url}">{label}</a>',
        ],
        [
            'label' => 'Фото с производства',
            'url' => Url::to(['/site/page', 'slug' => 'fotografii-s-proizvodstva']) . '#tovar',
            'active' => Yii::$app->controller->action->id == 'page' and Yii::$app->controller->actionParams['slug'] == 'fotografii-s-proizvodstva',
            'template' => (Yii::$app->controller->action->id == 'page' and Yii::$app->controller->actionParams['slug'] == 'fotografii-s-proizvodstva') ? '<span>{label}</span>' : '<a href="{url}">{label}</a>',
        ],
        [
            'label' => 'О нас',
            'url' => Url::to(['/site/page', 'slug' => 'o-nas']) . '#tovar',
            'active' => Yii::$app->controller->action->id == 'page' and Yii::$app->controller->actionParams['slug'] == 'o-nas',
            'template' => (Yii::$app->controller->action->id == 'page' and Yii::$app->controller->actionParams['slug'] == 'o-nas') ? '<span>{label}</span>' : '<a href="{url}">{label}</a>',
        ],
        [
            'label' => 'Доставка',
            'url' => Url::to(['/site/page', 'slug' => 'dostavka']) . '#tovar',
            'active' => Yii::$app->controller->action->id == 'page' and Yii::$app->controller->actionParams['slug'] == 'dostavka',
            'template' => (Yii::$app->controller->action->id == 'page' and Yii::$app->controller->actionParams['slug'] == 'dostavka') ? '<span>{label}</span>' : '<a href="{url}">{label}</a>',
        ],
        [
            'label' => 'Гарантия',
            'url' => Url::to(['/site/page', 'slug' => 'garantiya']) . '#tovar',
            'active' => Yii::$app->controller->action->id == 'page' and Yii::$app->controller->actionParams['slug'] == 'garantiya',
            'template' => (Yii::$app->controller->action->id == 'page' and Yii::$app->controller->actionParams['slug'] == 'garantiya') ? '<span>{label}</span>' : '<a href="{url}">{label}</a>',
        ],
        [
            'label' => 'Контакты',
            'url' => Url::to(['/site/page', 'slug' => 'kontaktyi']) . '#tovar',
            'active' => Yii::$app->controller->action->id == 'page' and Yii::$app->controller->actionParams['slug'] == 'kontaktyi',
            'template' => (Yii::$app->controller->action->id == 'page' and Yii::$app->controller->actionParams['slug'] == 'kontaktyi') ? '<span>{label}</span>' : '<a href="{url}">{label}</a>',
        ],
        [
            'label' => 'Фото живых картин',
            'url' => Url::to(['/site/page', 'slug' => 'foto-zhivyh-kartin']) . '#tovar',
            'active' => Yii::$app->controller->action->id == 'page' and Yii::$app->controller->actionParams['slug'] == 'foto-zhivyh-kartin',
            'template' => (Yii::$app->controller->action->id == 'page' and Yii::$app->controller->actionParams['slug'] == 'foto-zhivyh-kartin') ? '<span>{label}</span>' : '<a href="{url}">{label}</a>',
        ],
        [
            'label' => 'Как заказать',
            'url' => Url::to(['/site/page', 'slug' => 'kak-sdelat-zakaz']) . '#tovar',
            'active' => Yii::$app->controller->action->id == 'page' and Yii::$app->controller->actionParams['slug'] == 'kak-sdelat-zakaz',
            'template' => (Yii::$app->controller->action->id == 'page' and Yii::$app->controller->actionParams['slug'] == 'kak-sdelat-zakaz') ? '<span>{label}</span>' : '<a href="{url}">{label}</a>',
        ],
        [
            'label' => 'Благотворительность',
            'url' => Url::to(['/site/page', 'slug' => 'vy-pomogaete-detiam']) . '#tovar',
            'active' => Yii::$app->controller->action->id == 'page' and Yii::$app->controller->actionParams['slug'] == 'vy-pomogaete-detiam',
            'template' => (Yii::$app->controller->action->id == 'page' and Yii::$app->controller->actionParams['slug'] == 'vy-pomogaete-detiam') ? '<span>{label}</span>' : '<a href="{url}">{label}</a>',
        ],
        [
            'label' => 'Картина по фото',
            'url' => Url::to(['/site/page', 'slug' => 'kartina-po-vashemu-foto']) . '#tovar',
            'active' => Yii::$app->controller->action->id == 'page' and Yii::$app->controller->actionParams['slug'] == 'kartina-po-vashemu-foto',
            'template' => (Yii::$app->controller->action->id == 'page' and Yii::$app->controller->actionParams['slug'] == 'kartina-po-vashemu-foto') ? '<span>{label}</span>' : '<a href="{url}">{label}</a>',
        ],
        [
            'label' => 'Ответы на вопросы',
            'url' => Url::to(['/site/page', 'slug' => 'faq']) . '#tovar',
            'active' => Yii::$app->controller->action->id == 'page' and Yii::$app->controller->actionParams['slug'] == 'faq',
            'template' => (Yii::$app->controller->action->id == 'page' and Yii::$app->controller->actionParams['slug'] == 'faq') ? '<span>{label}</span>' : '<a href="{url}">{label}</a>',
        ]
    ];
}


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