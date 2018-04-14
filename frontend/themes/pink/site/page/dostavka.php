<?php
/**
 * @var $model common\models\Page
 * @var $this \yii\web\View
 */

use frontend\themes\pink\assets\PinkAsset;

$this->registerMetaTag([
    'name'=>'description',
    'content'=>$model->meta_description
]);

$this->registerMetaTag([
    'name'=>'keywords',
    'content'=>$model->meta_keywords
]);

$this->title = $model->title;
$this->params['breadcrumbs'][] = $this->title;

$bundle = PinkAsset::register($this);

$this->theme->setBaseUrl($bundle->baseUrl);

$siteTel = Yii::$app->params['siteTel'];

?>
<div class="delivery-page">
    <section>
        <h2><?=$this->title?></h2>
        <p class="pink" style="font-size: 15px">Вы сами можете выбрать наиболее подходящий вам способ доставки</p>
        <div class="delivery-page-article-row">
            <article>
                <div class="img">
                    <img src="<?=$this->theme->getUrl('img/logo-pochta.jpg')?>" alt="Картинка">
                </div>
                <h5>Почта России</h5>
                <p>Срок доставки от 4-х дней</p>
            </article>
            <article>
                <div class="img">
                    <img src="<?=$this->theme->getUrl('img/logo-courier.jpg')?>" alt="Картинка">
                </div>
                <h5>Курьером прямо до вашей двери</h5>
                <p>Срок доставки от 2-х дней</p>
            </article>
        </div>
        <div class="block-border green">
            <div class="clearfix">
                <i class="icon2"></i>
                <div>
                    <p class="title">Стоимость доставки</p>
                    <p>Стоимость доставки расчитывается по тарифам Вашего населенного пункта. <br>Дешевле чем в других магазинах!</p>
                </div>
            </div>
        </div>
        <div class="block-border pink">
            <div class="clearfix">
                <i class="icon2"></i>
                <div>
                    <p class="title">Оплата без риска</p>
                    <p>Вы можете открыть посылку и осмотреть картину и только потом принимать решение о покупке.<br>Если вас что-то не устроило в картине, вы можете отказаться и ничего не платить (условия действуют по всей России)</p>
                </div>
            </div>
        </div>
        <p>Если картина нестандартного размера или не из нашего каталога, то мы вынуждены брать предоплату, так как если Вы ее не заберете, то мы не сможем уже никому ее продать.</p>
        <p>Все картины из нашего каталога указанных размеров мы шлем без предоплаты.</p>
    </section>
    <section>
        <h2>Гарантия возврата</h2>
        <p class="pink">Если картина повредится во время транспортировки, мы вышлем вам новую!</p>
        <ul>
            <li>При отправке каждый модуль надежно упаковывается, что исключает любое повреждение во время пересылки. <br>Картины приходят в сборе (холсты натянуты на подрамники). Вам останется только повесить картину. Инструкция прилагается!</li>
            <li>Возможна отправка товара любой другой транспортной компанией на выбор клиента.<br>Просьба уточнять эту возможность у наших менеджеров.</li>
        </ul>
    </section>
    <section class="production-time">
        <h2>Сроки изготовления</h2>
        <p class="pink-text">Мы изготовим картину так быстро, насколько это возможно</p>
        <div class="production-time-row">
            <article>
                <div class="img">
                    <i class="icon"></i>
                </div>
                <h5>Напечатанная модульная картина<br>и панно с ручной доработкой<br>изготавливаются 2-5 дней</h5>
                <p>Могут быть небольшие задержки, если очень много заказов</p>
            </article>
            <article>
                <div class="img">
                    <i class="icon"></i>
                </div>
                <h5>Модульные картины ручной работы<br>делаются 5-14 дней акрилом<br>и около месяца маслом</h5>
                <p>Масло долго сохнет</p>
            </article>
        </div>
    </section>
    <div class="block-border">
        <div>
            <h2>Свяжитесь с нами</h2>
            <p class="pink-text">Позвоните нашим менеджерам и они с радостью скажут, когда вы увидите свою картину</p>
            <div class="block-border-row">
                <p class="img"><img src="<?=$this->theme->getUrl('img/delivery-page-img.png')?>" alt="Картинка"></p>
                <div>
                    <div class="contacts">
                        <ul>
                            <li class="contacts-phone">
                                <p class="contacts-phone-region">Телефон для Москвы</p>
                                <p class="contacts-phone-number"><span><?=$siteTel['Moscow']['country']?> <?=$siteTel['Moscow']['city']?></span> <?=$siteTel['Moscow']['number']?></p>
                            </li>
                            <li class="contacts-phone">
                                <p class="contacts-phone-region">Беслатный для регионов</p>
                                <p class="contacts-phone-number"><span><?=$siteTel['Russia']['country']?> <?=$siteTel['Russia']['city']?></span> <?=$siteTel['Russia']['number']?></p>
                            </li>
                        </ul>
                    </div>
                    <p>Или закажите звонок</p>
                    <a href="#callback-form" class="btn btn-dark-pink fancybox-callback">Позвонить вам?</a>
                </div>
            </div>
        </div>
    </div>
    <section class="payment-methods">
        <h2>Способы оплаты</h2>
        <p class="pink-text">Оплатить заказ можно наличными, банковской картой или электронными деньгами</p>
        <ul>
            <li>
                <p class="img">
                    <i class="icon yandexmoney"></i>
                </p>
                <h5>Яндекс.Деньги</h5>
            </li>
            <li>
                <p class="img">
                    <i class="icon webmoney"></i>
                </p>
                <h5>Вебмани</h5>
            </li>
            <li>
                <p class="img">
                    <i class="icon visa"></i>
                </p>
                <h5>Карты Visa</h5>
            </li>
            <li>
                <p class="img">
                    <i class="icon mastercard"></i>
                </p>
                <h5>Карты MasterCard</h5>
            </li>
        </ul>
    </section>
</div>