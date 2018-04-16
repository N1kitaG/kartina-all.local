<?php
use yii\helpers\Url;
use yii\widgets\Menu;

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
?>
<?= Menu::widget(
    [
        'items' => $items
    ]
);
?>