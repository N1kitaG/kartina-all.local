<?php
/* @var $this \yii\web\View */
/* @var $content string */

use common\models\Category;
use common\models\search\ProductSearch;
use frontend\themes\pink\assets\PinkAsset;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use yii\widgets\Breadcrumbs;
use yii\widgets\Menu;

$bundle = PinkAsset::register($this);

$this->theme->setBaseUrl($bundle->baseUrl);


$isHome = ((Yii::$app->controller->id === Yii::$app->defaultRoute) && (Yii::$app->controller->action->id === Yii::$app->controller->defaultAction)) ? true : false;
$category  = isset($category)?$category:new Category();
?>
<?php $this->beginPage() ?>
<!doctype html>
<html class="no-js" lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="Cache-Control" content="no-cache">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <?= Html::csrfMetaTags() ?>
    <?php $this->head() ?>
    <!--[if lt IE 9]>
    <script src="<?=$this->theme->getUrl('js/vendor/html5shiv.js')?>"></script>
    <![endif]-->
    <title><?= Html::encode($this->title) ?></title>
</head>
<body>
<?php $this->beginBody() ?>
<div class="main-wrapper">
    <header class="site-header clearfix">
        <div class="wrapper clearfix">
            <div class="logo">
                <h1>
                    <a href="<?= Url::home();?>">
                        <?=Html::img($this->theme->getUrl('img/logo.png'),['alt'=>'kartina-rus.ru'])?><br>
                        <span class="logo-text"><span>Kartina-Rus —</span> Магазин <span class="hide-410">модульных</span> картин<span><br>с доставкой по России и СНГ</span></span>
                        <span class="logo-text-resp"><span class="hide-410">Магазин</span> Kartina-Rus</span>
                    </a>
                </h1>
            </div>
            <div class="header-right">
                <div class="header-right-top clearfix">
                    <div>
                        <p class="call-desc">Звоните в любой день с <strong>9:00</strong> до <strong>21:00</strong><br>
                            Заказывайте через сайт в любое время суток!</p>
                    </div>
                    <div class="hidden-1200">
                        <a class="btn btn-dark-pink btn-border fancybox-callback" href="#callback-form">Позвонить вам?</a>
                    </div>
                    <div class="hide-480">
                        <a class="header-tel" href="tel:84953332136"><span>8 495</span> 333-21-36</a>
                        <a class="header-tel-help">телефон для Москвы</a>
                    </div>
                    <div class="hidden-870">
                        <a class="header-tel" href="tel:88007075359"><span>8 800</span> 707-53-59</a>
                        <a class="header-tel-help">беслатный для регионов</a>
                    </div>
                    <div class="show-1200">
                        <a class="btn btn-dark-pink btn-border fancybox-callback" href="#callback-form">Позвонить вам?</a>
                    </div>
                </div>
                <div class="header-right-bottom">
                    <div class="bg-blue">
                        <div class="dotted-border">
                            <div class="clearfix">
                                <div class="header-icon-text">
                                    <div class="icon icon-1"></div>
                                    <div class="text">Доставка по всей России от 2-х дней<br>до вашей двери прямо в руки!</div>
                                </div>
                                <div class="header-icon-text">
                                    <div class="icon icon-2"></div>
                                    <div class="text">Оплата после получения<br>и осмотра заказа. Никаких рисков!</div>
                                </div>
                                <div class="header-icon-text">
                                    <div class="icon icon-3"></div>
                                    <div class="text">Высокое качество, натуральный<br>хлопковый холст, гарантия от 10 лет</div>
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
                                'id'=>'r-menu',
                                'class' => 'r-menu',
                            ],
                            'activeCssClass'=>'active',
                            'items'=>[
                                [
                                    'label'=>'Главная',
                                    'url'=> Url::home().'#tovar',
                                    'active'=>$isHome,
                                    'template'=> $isHome?'<span>{label}</span>':'<a href="{url}">{label}</a>',
                                ],
                                [
                                    'label'=>'Фото с производства',
                                    'url'=>Url::to(['/site/page','slug'=>'fotografii-s-proizvodstva']).'#tovar',
                                    'active'=>Yii::$app->controller->action->id == 'page' and Yii::$app->controller->actionParams['slug'] == 'fotografii-s-proizvodstva',
                                    'template'=> (Yii::$app->controller->action->id == 'page' and Yii::$app->controller->actionParams['slug'] == 'fotografii-s-proizvodstva')?'<span>{label}</span>':'<a href="{url}">{label}</a>',
                                ],
                                [
                                    'label'=>'О нас',
                                    'url'=>Url::to(['/site/page','slug'=>'o-nas']).'#tovar',
                                    'active'=>Yii::$app->controller->action->id == 'page' and Yii::$app->controller->actionParams['slug'] == 'o-nas',
                                    'template'=> (Yii::$app->controller->action->id == 'page' and Yii::$app->controller->actionParams['slug'] == 'o-nas')?'<span>{label}</span>':'<a href="{url}">{label}</a>',
                                ],
                                [
                                    'label'=>'Доставка',
                                    'url'=>Url::to(['/site/page','slug'=>'dostavka']).'#tovar',
                                    'active'=>Yii::$app->controller->action->id == 'page' and Yii::$app->controller->actionParams['slug'] == 'dostavka',
                                    'template'=> (Yii::$app->controller->action->id == 'page' and Yii::$app->controller->actionParams['slug'] == 'dostavka')?'<span>{label}</span>':'<a href="{url}">{label}</a>',
                                ],
                                [
                                    'label'=>'Гарантия',
                                    'url'=>Url::to(['/site/page','slug'=>'garantiya']).'#tovar',
                                    'active'=>Yii::$app->controller->action->id == 'page' and Yii::$app->controller->actionParams['slug'] == 'garantiya',
                                    'template'=> (Yii::$app->controller->action->id == 'page' and Yii::$app->controller->actionParams['slug'] == 'garantiya')?'<span>{label}</span>':'<a href="{url}">{label}</a>',
                                ],
                                [
                                    'label'=>'Контакты',
                                    'url'=>Url::to(['/site/page','slug'=>'kontaktyi']).'#tovar',
                                    'active'=>Yii::$app->controller->action->id == 'page' and Yii::$app->controller->actionParams['slug'] == 'kontaktyi',
                                    'template'=> (Yii::$app->controller->action->id == 'page' and Yii::$app->controller->actionParams['slug'] == 'kontaktyi')?'<span>{label}</span>':'<a href="{url}">{label}</a>',
                                ],
                                [
                                    'label'=>'Фото живых картин',
                                    'url'=>Url::to(['/site/page','slug'=>'foto-zhivyh-kartin']).'#tovar',
                                    'active'=>Yii::$app->controller->action->id == 'page' and Yii::$app->controller->actionParams['slug'] == 'foto-zhivyh-kartin',
                                    'template'=> (Yii::$app->controller->action->id == 'page' and Yii::$app->controller->actionParams['slug'] == 'foto-zhivyh-kartin')?'<span>{label}</span>':'<a href="{url}">{label}</a>',
                                ],
                                [
                                    'label'=>'Как заказать',
                                    'url'=>Url::to(['/site/page','slug'=>'kak-sdelat-zakaz']).'#tovar',
                                    'active'=>Yii::$app->controller->action->id == 'page' and Yii::$app->controller->actionParams['slug'] == 'kak-sdelat-zakaz',
                                    'template'=> (Yii::$app->controller->action->id == 'page' and Yii::$app->controller->actionParams['slug'] == 'kak-sdelat-zakaz')?'<span>{label}</span>':'<a href="{url}">{label}</a>',
                                ],
                                [
                                    'label'=>'Благотворительность',
                                    'url'=>Url::to(['/site/page','slug'=>'vy-pomogaete-detiam']).'#tovar',
                                    'active'=>Yii::$app->controller->action->id == 'page' and Yii::$app->controller->actionParams['slug'] == 'vy-pomogaete-detiam',
                                    'template'=> (Yii::$app->controller->action->id == 'page' and Yii::$app->controller->actionParams['slug'] == 'vy-pomogaete-detiam')?'<span>{label}</span>':'<a href="{url}">{label}</a>',
                                ],
                                [
                                    'label'=>'Картина по фото',
                                    'url'=>Url::to(['/site/page','slug'=>'kartina-po-vashemu-foto']).'#tovar',
                                    'active'=>Yii::$app->controller->action->id == 'page' and Yii::$app->controller->actionParams['slug'] == 'kartina-po-vashemu-foto',
                                    'template'=> (Yii::$app->controller->action->id == 'page' and Yii::$app->controller->actionParams['slug'] == 'kartina-po-vashemu-foto')?'<span>{label}</span>':'<a href="{url}">{label}</a>',
                                ]
                            ]
                        ]
                    );?>
                </div>
            </div>
        </div>
        <div class="show-960">
            <!--
            <div class="search-block clearfix">
                <?php $form = ActiveForm::begin(['action' => '/search/', 'method' => 'post']); ?>
                <?= $form->field(new ProductSearch(), 'title')->input('text', ['placeholder' => 'Поиск по сайту'])->label('Поиск по сайту:') ?>
                <?= Html::button('Найти', ['type' => 'submit']) ?>
                <?php ActiveForm::end(); ?>
            </div>
            -->
            <div class="bg-blue hidden-640">
                <div class="dotted-border">
                    <div class="clearfix">
                        <div class="header-icon-text">
                            <div class="icon icon-1"></div>
                            <div class="text">Доставка по всей России от 2-х дней<br>до вашей двери прямо в руки!</div>
                        </div>
                        <div class="header-icon-text">
                            <div class="icon icon-2"></div>
                            <div class="text">Оплата после получения<br>и осмотра заказа. Никаких рисков!</div>
                        </div>
                        <div class="header-icon-text">
                            <div class="icon icon-3"></div>
                            <div class="text">Высокое качество, натуральный<br>хлопковый холст, гарантия от 10 лет</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="show-640 hide-670">
                <div class="bg-blue" style="margin-bottom: 10px">
                    <div class="dotted-border">
                        <div class="header-icon-text">
                            <div class="icon icon-1"></div>
                            <div class="text" style="padding-top: 13px;">Доставка по всей России от 2-х дней до вашей двери прямо в руки!</div>
                        </div>
                    </div>
                </div>
                <div class="bg-blue" style="margin-bottom: 10px">
                    <div class="dotted-border">
                        <div class="header-icon-text">
                            <div class="icon icon-2"></div>
                            <div class="text" style="padding-top: 13px;">Оплата после получения и осмотра заказа. Никаких рисков!</div>
                        </div>
                    </div>
                </div>
                <div class="bg-blue" style="margin-bottom: 10px">
                    <div class="dotted-border">
                        <div class="header-icon-text">
                            <div class="icon icon-3"></div>
                            <div class="text" style="padding-top: 13px;">Высокое качество, натуральный хлопковый холст, гарантия от 10 лет</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="main-menu">
            <div class="wrapper">
                <?= $this->render('/partials/_main-menu.php',['isHome'=>$isHome])?>
            </div>
        </nav>
    </header>
    <main>
        <div class="wrapper">
            <div class="content-header clearfix">
                <div class="timer-block">
                    <div class="akc-block-discount">
                        <p>-<?=Yii::$app->params['discount']?><span>%</span></p>
                        <p>скидка на любой заказ</p>
                    </div>
                    <div class="akc-block-center">
                        <p class="title"><span class="show-640">+плеер<br>в подарок!</span><span class="hidden-640">Акция! Успейте купить!</span></p>
                        <div>
                            <p class="img">
                                <img src="<?=$this->theme->getUrl('img/akc-mp3.png')?>" alt="Картинка">
                            </p>
                            <p class="plus">+</p>
                            <div>
                                <p>Стильный mp3-плеер<br>в подарок к каждой картине!</p>
                                <p>Спешите, количество подарков ограничено!</p>
                            </div>
                        </div>
                    </div>
                    <div class="akc-block-timer">
                        <p>До конца акции осталось</p>
                        <div id="timer1" class="is-countdown">

                        </div>
                    </div>
                </div>
                <div class="video">
                    <a class="fancybox-video" href="https://www.youtube.com/embed/qiz2KbIZDjU?rel=0&autoplay=1">
                        <span>Видео: как создают модульные картины</span>
                        <i class="ic"></i>
                    </a>
                </div>
            </div>
            <div class="show-960" style="padding-bottom: 5px">
                <div class="responsive-menu-button"><a class="btn btn-dark-pink" href="#" style=""><span class="responsive-menu-icon"><span></span><span></span><span></span></span> Смотреть все категории</a></div>
                <div class="responsive-menu-2" style="display: none">
                    <div class="first clearfix">
                        <?= $this->render('/partials/sidebar/modul');?>
                    </div>
                    <div class="clearfix last">
                        <div class="fl">
                            <?= $this->render('/partials/sidebar/poster',['limit'=>0,'all'=>true]);?>
                        </div>
                        <div class="fl">
                            <?= $this->render('/partials/sidebar/reproduction',['limit'=>0,'all'=>true]);?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix">
                <?= $this->render('/partials/sidebar',['isHome'=>$isHome])?>
                <section class="page-content">
                    <?php if(isset($this->params['breadcrumbs']) and $isHome===false):?>
                        <div class="breadcrumbs">
                            <?php echo Breadcrumbs::widget([
                                'links' =>$this->params['breadcrumbs'],
                                'tag' => 'ul',
                                'options'=>['class'=>false],
                                'homeLink'=>[
                                    'label'=>'Главная',
                                    'url'=>Url::home(),
                                    'encode' => false,
                                ],
                            ]);?>
                        </div>
                    <?php endif;?>
                    <?= $content ?>
                </section>
            </div>
        </div>
    </main>
    <footer class="site-footer">
        <div class="wrapper clearfix">
            <div class="footer-copy">
                <p>© ООО «Картина маслом»<br>Интернет-магазин модульных картин</p>
                <p>ОГРН: 1137746670214<br>ИНН: 7724884212</p>
            </div>
            <div class="footer-menu">
                <ul>
                    <li><a href="<?=Url::to(['/category/view','slug'=>'modulnye-kartiny']).'#tovar'?>">Каталог картин</a></li>
                    <li><a href="<?=Url::to(['/site/page','slug'=>'o-nas']).'#tovar';?>">О нас</a></li>
                    <li><a href="<?=Url::to(['/site/page','slug'=>'dostavka']).'#tovar';?>">Доставка</a></li>
                    <li><a href="<?=Url::to(['/site/page','slug'=>'garantiya']).'#tovar';?>">Гарантия</a></li>
                    <li><a href="<?=Url::to(['/site/page','slug'=>'kontaktyi']).'#tovar';?>">Контакты</a></li>
                    <li><a href="<?=Url::to(['/site/page','slug'=>'kak-sdelat-zakaz']).'#tovar';?>">Как сделать заказ</a></li>
                </ul>
            </div>
            <div class="footer-pay">
                <p class="pay-title">Способы оплаты</p>
                <ul>
                    <li><a href="#"><img src="<?=$this->theme->getUrl('img/visa.png')?>"></a></li>
                    <li><a href="#"><img src="<?=$this->theme->getUrl('img/mastercard.png')?>"></a></li>
                    <li><a href="#"><img src="<?=$this->theme->getUrl('img/webmoney.png')?>"></a></li>
                    <li><a href="#"><img src="<?=$this->theme->getUrl('img/yandexmoney.png')?>"></a></a></li>
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
                <p class="footer-tel"><span>8 800</span> 333-21-36</p>
                <p class="footer-tel-desc">беслатный для регионов</p>
                <p class="footer-tel"><span>8 495</span> 333-21-36</p>
                <p class="footer-tel-desc">телефон для Москвы</p>
            </div>
        </div>
    </footer>
</div>
<?=$this->render('/order/_form');?>
<?=$this->render('/partials/_callback');?>
<?=$this->render('/partials/_designer');?>
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function () {
            try {
                w.yaCounter29748944 = new Ya.Metrika({
                    id:29748944,
                    webvisor: true,
                    clickmap: true,
                    trackLinks: true,
                    accurateTrackBounce: true
                });
            } catch (e) {
            }
        });


        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () {
                n.parentNode.insertBefore(s, n);
            };
        s.type = "text/javascript";
        s.async = true;
        s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";


        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else {
            f();
        }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript>
    <div><img src="//mc.yandex.ru/watch/29748944" style="position:absolute; left:-9999px;" alt=""/></div>
</noscript>
<!-- /Yandex.Metrika counter -->
<?=$this->render('/partials/_counters');?>
<?php if (isset($this->blocks['track'])): ?>
    <?=$this->blocks['track']; ?>
<?php else:?>
    <?php if($isHome):?>

    <?php else:?>
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-86979120-1', 'auto');
            ga('send', 'pageview');
        </script>
    <?php endif;?>
<?php endif; ?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
