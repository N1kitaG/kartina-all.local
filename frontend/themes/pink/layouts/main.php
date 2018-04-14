<?php
/* @var $this \yii\web\View */
/* @var $content string */

use common\models\Category;
use common\models\search\ProductSearch;
use common\widgets\UBreadcrumbs;
use frontend\themes\pink\assets\PinkAsset;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use yii\widgets\Breadcrumbs;
use yii\widgets\Menu;

PinkAsset::register($this);

$isHome = ((Yii::$app->controller->id === Yii::$app->defaultRoute) && (Yii::$app->controller->action->id === Yii::$app->controller->defaultAction)) ? true : false;
$category = isset($category) ? $category : new Category();


$siteTel = Yii::$app->params['siteTel'];
$requisites = Yii::$app->params['requisites'];

if (isset($_GET['variant']))
    $variant = $_GET['variant'];
else
    $variant = ABTest::instance()->getTestValue('kartina-menu');

if ($variant === 'v0') {
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
} else {
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
}

?>
<?php $this->beginPage() ?>
<!doctype html>
<html class="no-js" lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <?php $this->head() ?>
    <!--[if lt IE 9]>
    <script src="<?=$this->theme->getUrl('js/vendor/html5shiv.js')?>"></script>
    <![endif]-->
    <title><?= Html::encode($this->title) ?></title>
    <script type="text/javascript">(window.Image ? (new Image()) : document.createElement('img')).src = location.protocol + '//vk.com/rtrg?r=BR2dJcxXYF8ddfExOpDcPNnVCyfeQ10CWABPzbdeS4NmT7BAPOuGfwQ7uYTK8q8Hf46gbOX*jZxXDa2*PeVIh0HRqt/wzZM9OoYeG8P2rN7aAU8GQkSJRyNrQIACDkIIHk6oZcccjZxqLwCLJLeoiG/CiiZ1vibaGZ6vScCJZQI-&pixel_id=1000040068';</script>
    <script type="text/javascript">(window.Image ? (new Image()) : document.createElement('img')).src = location.protocol + '//vk.com/rtrg?r=jSSOHRsOxxo4Z/0oewX*x/oh9GSLOiir0eUeCPZkl0DpEwWlYEd4e1Xo2T977rTZ618/aW8VXC4rdXbD4202MfSmBewinPbbhR/5YBs2qnuT1qBzRIJ0tp06IuWjewI6zb9d5ZGyidDLYvOjFNzOsKsMlW0KsgIdzEV6BY4V0ds-&pixel_id=1000058431';</script>
    <script type="text/javascript">(window.Image ? (new Image()) : document.createElement('img')).src = location.protocol + '//vk.com/rtrg?r=Ztkbax*5nO7U4/cLuKdbyYGBhGsfBO8R55x4O2LvH0/d9n2T*EBnnPLhEyeh2s0buKhm2xzP5XUfegh7zS7/*Oitz/neiCOgdyy3b*QV9yoncR28BdVnLIyRvBJfvPIwUZdhdaRphr1EhItJ1dRYunjZSw/JpVGkr4MwICweMT8-&pixel_id=1000061980';</script>
    <script type="text/javascript" src="//api.ok.ru/js/fapi5.js"></script>
    <script type="text/javascript" src="/odnkl_script.js" defer="defer"></script>
</head>
<body data-variant="<?= ABTEST_VARIANT ?>">
<?php $this->beginBody() ?>

<div class="header-fixed">
    <div class="header-fixed-wrapper">
        <div class="search-widget">
            <form id="fixsearch" action="/search/">
                <input name="q" placeholder="Поиск по сайту">
                <button type="submit" class="btn btn-dark-pink" style="border:none;">.</button>
            </form>
        </div>

        <div class="u-right-header-top-item" style="display:block">
            <div class="u-right-header-top-phone phonefix">
                <a href="tel:<?= $siteTel['Russia']['full'] ?>"><span><?= $siteTel['Russia']['country'] ?> <?= $siteTel['Russia']['city'] ?></span> <?= $siteTel['Russia']['number'] ?>
                </a>
                <p>Бесплатный звонок по России</p>
            </div>
        </div>
    </div>

</div>

<div class="main-wrapper">
    <header class="site-header clearfix">
        <div class="u-wrapper clearfix">
            <div class="h1 u-logo">
                <a href="<?= Url::home(); ?>">
                    <?= Html::img($this->theme->getUrl('img/logo.png'), ['alt' => 'kartina-rus.ru', 'class' => 'hide-685']) ?>
                    <span class="logo-text">Kartina-Rus — Магазин модульных картин <br>с доставкой по России и СНГ</span>
                    <span>KARTINA-RUS</span>
                </a>
            </div>
            <div class="u-right-header">
                <div class="u-right-header-top">
                    <div class="u-right-header-top-item hide-1200">
                        <div class="u-right-header-top-description">
                            Звоните в любой день с 9:00 до 21:00
                            Заказывайте через сайт в любое время суток!
                        </div>
                    </div>
                    <div class="u-right-header-top-item hide-1200">
                        <div class="u-right-header-top-call">
                            <a href="#callback-form" class="u-right-header-top-call-btn needhelp fancybox-callback">Бесплатная консультация</a>
                        </div>
                    </div>
                    <div class="u-right-header-top-item hide-880">
                        <div class="u-right-header-top-phone">
                            <a href="tel:<?= $siteTel['Moscow']['full'] ?>"><span><?= $siteTel['Moscow']['country'] ?> <?= $siteTel['Moscow']['city'] ?></span> <?= $siteTel['Moscow']['number'] ?>
                            </a>
                            <p></p>
                        </div>
                    </div>
                    <div class="u-right-header-top-item hide-685">
                        <div class="u-right-header-top-phone">
                            <a href="tel:<?= $siteTel['Russia']['full'] ?>"><span><?= $siteTel['Russia']['country'] ?> <?= $siteTel['Russia']['city'] ?></span> <?= $siteTel['Russia']['number'] ?>
                            </a>
                            <p>Бесплатный звонок по России</p>
                        </div>
                    </div>
                    <div class="u-right-header-top-item">
                        <div class="u-right-header-top-call">
                            <a href="tel:88007075359" class="u-right-header-top-call-btn needhelp">Бесплатная консультация</a>
                        </div>
                    </div>
                </div>
                <div class="u-right-header-bottom">
                    <div class="u-right-header-bottom-block">
                        <div class="u-right-header-bottom-border">
                            <div title="Доставка по всей России от 2-х дней до вашей двери прямо в руки!">
                                <i class="icon icon-car"></i>
                                <p class="hide-1200">Доставка по всей России от 2-х дней до вашей двери прямо в
                                    руки!</p>
                                <p class="show-1200">Доставка от 2-х дней</p>
                            </div>
                            <div title="Оплата после получения и осмотра заказа. Никаких рисков!">
                                <i class="icon icon-money"></i>
                                <p class="hide-1200">Оплата после получения и осмотра заказа. Никаких рисков!</p>
                                <p class="show-1200">Оплата при получении</p>
                            </div>
                            <div title="Высокое качество, натуральные материалы, гарантия 1 год">
                                <i class="icon icon-quality"></i>
                                <p class="hide-1200">Высокое качество, натуральные материалы, гарантия 10 лет</p>
                                <p class="show-1200">Гарантия 10 лет</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="responsive-menu-wrapper">
            <div class="responsive-menu">
                <div class="menu-button">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div id="r-menu-title" class="responsive-menu-totle">Меню</div>
                <?= Menu::widget(
                    [
                        'options' => [
                            'id' => 'r-menu',
                            'class' => 'r-menu',
                        ],
                        'activeCssClass' => 'active',
                        'items' => $items
                    ]
                ); ?>
            </div>
        </div>
        <nav class="main-menu">
            <div class="wrapper">
                <?= $this->render('/partials/_main-menu.php', ['isHome' => $isHome]) ?>
            </div>
        </nav>
    </header>



    <main>

        <div class="wrapper">
            <div class="content-header clearfix">



                <!--<div class="sale-slider">
                    <div class="slider-wrapper">
                        <div class="saleslide one">123</div>
                        <div class="saleslide two">123</div>
                        <div class="saleslide three">123</div>
                        <div class="saleslide four">123</div>
                        <div class="saleslide five">123</div>
                    </div>
                </div>-->


<!--                <div class="timer-block">-->
<!--                    <style>-->
<!---->
<!--                        .akc-block-center .title {-->
<!--                            font: 700 20px "Roboto Slab", Arial, Helvetica, sans-serif;-->
<!--                        }-->
<!---->
<!--                        .akc-block-discount {-->
<!--                            margin-right: 5px;-->
<!--                        }-->
<!---->
<!--                        @media screen and (max-width: 639px) {-->
<!--                            .akc-block-discount {-->
<!--                                text-align: center;-->
<!--                                height: 25px;-->
<!--                                position: relative;-->
<!--                                width: 100%;-->
<!--                                background: #ed479d;-->
<!--                                margin: 0;-->
<!--                            }-->
<!---->
<!--                            .akc-block-discount p {-->
<!--                                margin: 0;-->
<!--                                display: inline;-->
<!--                                font-size: 18px !important;-->
<!--                                line-height: 18px;-->
<!--                                position: relative;-->
<!--                                top: -151px;-->
<!--                            }-->
<!---->
<!--                            .akc-block-discount span {-->
<!--                                font-size: 18px;-->
<!--                                text-align: left;-->
<!--                                display: inline;-->
<!--                            }-->
<!---->
<!--                            .akc-block-discount p:last-child {-->
<!--                                display: inline;-->
<!--                                width: auto;-->
<!--                                margin: 0;-->
<!--                                text-align: left;-->
<!--                                font-size: 16px;-->
<!--                                line-height: 18;-->
<!--                            }-->
<!---->
<!--                            .content-header .timer-block {-->
<!--                                background-position: center;-->
<!--                            }-->
<!--                        }-->
<!--                    </style>-->
<!--                    <div class="akc-block-discount">-->
<!--                        <p>---><?//= Yii::$app->params['discount'] ?><!--<span>%</span></p>-->
<!--                        <p>скидка на любой заказ</p>-->
<!--                    </div>-->
<!--                    <div class="akc-block-center">-->
<!--                        <div class="titles">-->
<!--                            <p class="title">Закажи картину сегодня</p>-->
<!--                            <p class="sub-title">И получи уникальную возможность выиграть iPad!</p>-->
<!--                        </div>-->
<!--                        <div class="img-ipad">-->
<!--                            <img src="--><?//= $this->theme->getUrl('img/ipad.png') ?><!--" alt="Картинка">-->
<!--                        </div>-->
<!--                        <div class="sub-text clearfix">-->
<!--                            <p class="plus">+</p>-->
<!--                            <div>-->
<!--                                <p>mp3-плеер в подарок<br> к каждой картине!</p>-->
<!--                            </div>-->
<!--                            <p class="img">-->
<!--                                <img src="--><?//= $this->theme->getUrl('img/ipod.png') ?><!--" alt="Картинка">-->
<!--                            </p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="akc-block-timer" style="float: right;">-->
<!--                        <p>До конца акции осталось</p>-->
<!--                        <div id="timer1" class="is-countdown">-->
<!---->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="video">-->
<!--                    <a class="fancybox-video" href="https://www.youtube.com/embed/qiz2KbIZDjU?rel=0&autoplay=1">-->
<!--                        <span>Видео: как создают модульные картины</span>-->
<!--                        <i class="ic"></i>-->
<!--                    </a>-->
<!--                </div>-->
            </div>
            <div class="show-960" style="padding-bottom: 5px">
                <div class="responsive-menu-button"><a class="btn btn-dark-pink" href="#" style=""><span
                                class="responsive-menu-icon"><span></span><span></span><span></span></span> <? if ($variant === 'v0'): ?> Смотреть все категории <? else: ?> Главное меню <? endif; ?>
                    </a></div>
                <div class="responsive-menu-2" style="display: none">
                    <div class="first clearfix">
                        <?= $this->render('/partials/sidebar/modul'); ?>
                    </div>
                    <div class="clearfix last">
                        <div class="fl">
                            <?= $this->render('/partials/sidebar/poster', ['limit' => 0, 'all' => true]); ?>
                        </div>
                        <div class="fl">
                            <?= $this->render('/partials/sidebar/reproduction', ['limit' => 0, 'all' => true]); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix">
                <?= $this->render('/partials/sidebar', ['isHome' => $isHome]) ?>
                <section class="page-content">
                    <?php if (isset($this->params['breadcrumbs']) and $isHome === false): ?>
                        <div class="breadcrumbs" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                            <?php echo UBreadcrumbs::widget([
                                'links' => $this->params['breadcrumbs'],
                                'homeLink' => [
                                    'label' => 'Главная',
                                    'url' => Url::home(),
                                    'encode' => false,
                                ],
                            ]); ?>
                        </div>
                    <?php endif; ?>
                    <?= $content ?>
                    <?= $this->render('/partials/representation') ?>
                </section>
            </div>
        </div>
    </main>
    <footer class="site-footer">
        <div class="wrapper clearfix">
            <div class="footer-copy">
                <p>ООО "<?= $requisites['ooo'] ?>"<br>Юр. адрес: 425000, <br>РЕСПУБЛИКА МАРИЙ ЭЛ, <br>ГОРОД ВОЛЖСК,<br>
                    УЛИЦА ЛЕНИНА, <br>ДОМ 15 ПОМЕЩЕНИЕ 13</p>
                <p>ОГРН <?= $requisites['ogrn'] ?><br>ИНН/КПП <?= $requisites['inn'] ?></p>
                <p><a data-fancybox-type="iframe" href="/offerta.html" class="ooft">Оферта</a></p>
            </div>
            <div class="footer-menu">
                <ul>
                    <li><a href="<?= Url::to(['/category/seoview', 'slug' => 'modulnye-kartiny']) . '#tovar' ?>">Каталог
                            картин</a></li>
                    <li><a href="<?= Url::to(['/site/page', 'slug' => 'o-nas']) . '#tovar'; ?>">О нас</a></li>
                    <li><a href="<?= Url::to(['/site/page', 'slug' => 'dostavka']) . '#tovar'; ?>">Доставка</a></li>
                    <li><a href="<?= Url::to(['/site/page', 'slug' => 'garantiya']) . '#tovar'; ?>">Гарантия</a></li>
                    <li><a href="<?= Url::to(['/site/page', 'slug' => 'kontaktyi']) . '#tovar'; ?>">Контакты</a></li>
                    <li><a href="<?= Url::to(['/site/page', 'slug' => 'kak-sdelat-zakaz']) . '#tovar'; ?>">Как сделать
                            заказ</a></li>
                </ul>
            </div>
            <div class="footer-pay">
                <p class="pay-title">Способы оплаты</p>
                <ul>
                    <li><a href="#"><img src="<?= $this->theme->getUrl('img/visa.png') ?>" alt="Картинка"></a></li>
                    <li><a href="#"><img src="<?= $this->theme->getUrl('img/mastercard.png') ?>" alt="Картинка"></a>
                    </li>
                    <li><a href="#"><img src="<?= $this->theme->getUrl('img/webmoney.png') ?>" alt="Картинка"></a></li>
                    <li><a href="#"><img src="<?= $this->theme->getUrl('img/yandexmoney.png') ?>" alt="Картинка"></a>
                    </li>
                </ul>
                <p class="pay-desc">Вы можете оплатить покупки<br>
                    наличными при получении,<br>
                    либо онлайн.</p>
            </div>
            <div class="footer-social">
                <script src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
                <script src="//yastatic.net/share2/share.js"></script>
                <div class="ya-share2" data-services="vkontakte,odnoklassniki,moimir" data-counter=""></div>
            </div>
            <div class="footer-contacts">
                <p>Звоните в любой день с <strong>9:00</strong> до <strong>21:00</strong><br>
                    Заказывайте через сайт в любое время суток!</p>
                <p class="footer-tel">
                    <span><?= $siteTel['Russia']['country'] ?> <?= $siteTel['Russia']['city'] ?></span> <?= $siteTel['Russia']['number'] ?>
                </p>
                <p class="footer-tel-desc">беслатный для регионов</p>
                <p class="footer-tel">
                    <span><?= $siteTel['Moscow']['country'] ?> <?= $siteTel['Moscow']['city'] ?></span> <?= $siteTel['Moscow']['number'] ?>
                </p>
                <p class="footer-tel-desc"></p>
            </div>
        </div>
    </footer>
    <a class="popup-u" href="/">
        <span class="border-u">
            Ольга из Костромы заказала картину Белый цветок
        </span>
    </a>
</div>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-114986991-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-114986991-1');
</script>
<?= $this->render('/order/_form'); ?>
<?= $this->render('/partials/oferta'); ?>
<?= $this->render('/partials/_callback'); ?>
<?= $this->render('/partials/_designer'); ?>
<?= $this->render('/partials/_ipad_form'); ?>
<?= $this->render('/partials/_counters'); ?>
<?php if (isset($this->blocks['track'])): ?>
    <?= $this->blocks['track']; ?>
<?php else: ?>
    <?php if ($isHome): ?>

    <?php else: ?>
        <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                        (i[r].q = i[r].q || []).push(arguments)
                    }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-86979120-1', 'auto');
            ga('send', 'pageview');
        </script>
    <?php endif; ?>
<?php endif; ?>
<?php $this->endBody() ?>
<?php if (isset($_GET['subscriber'])) { ?>
    <script type="text/javascript">
        $(document).ready(function () {
            $.fancybox({
                href: '#lidform_unisender',
                padding: 0
            })
        });
    </script>
<?php } ?>
</body>
</html>
<?php $this->endPage() ?>
