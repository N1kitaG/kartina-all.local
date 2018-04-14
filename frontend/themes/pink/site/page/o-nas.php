<?php
/**
 * @var $model common\models\Page
 * @var $this \yii\web\View
 */

use frontend\themes\pink\assets\PinkAsset;
use yii\web\AssetManager;

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
?>
<div class="page-about">
    <h1><?=$this->title?></h1>
    <div class="bg-pink" style="margin-bottom: 30px">
        <div class="dotted-border">
            <div class="clearfix">
                <div class="icon icon-shield"></div>
                <div class="content" style="width: 750px;">
                    <h2>Мы не требуем предоплат!</h2>
                    <p>Модульные картины отсылаются наложенным платежом. Заказ оплачивается только при получении.</p>
                </div>
            </div>
        </div>
    </div>

    <p>Мы занимаемся написанием картин уже много лет. Стараясь не отставать от трендов, вслед за появлением модульных картин на рынке, мы тоже приступили к их созданию. Также в сферу нашей деятельности входит и написание портретов (возможно по фотографии заказчика), создание фотоколлажей. Этот сайт создан нами, как сайт для продажи модульных картин, но связавшись с нашими менеджерами, Вы можете узнать и про другие наши услуги.</p>
    <div class="welcome-row clearfix">
        <div>
            <p class="img">
                <img src="<?=$this->theme->getUrl('img/welcome-row-img1.png')?>" alt="Картинка">
            </p>
            <p>Мы представляем Вашему вниманию диптихи, триптихи и полиптихи разнообразных сюжетов (животные, люди, природа, цветы, города, детские и т.д.).</p>
            <a href="/modulnye-kartiny/#tovar" class="btn btn-pink">Все картины</a>
        </div>
        <div>
            <p class="img">
                <img src="<?=$this->theme->getUrl('img/welcome-row-img2.png')?>" alt="Картинка">
            </p>
            <p>Для Вашего удобства у нас есть сервис «Бесплатной помощи дизайнера по подбору модульной картины в интерьер».</p>
            <a href="/pomosch-dizainera.html" class="btn btn-pink">Заказать</a>
        </div>
    </div>

    <h1>Пример подбора модульно картины в интерьер</h1>
    <div class="clerafix" style="width: 100%;">
        <div class="imgsl1">
            <div class="about-slider">
                <a class="fancybox" href="/uploads/images/about/1446129596_2_m420.png" rel="imgsl1"><img src="/uploads/images/about/1446129596_2_m420.png" alt='' title=''/></a>
                <a class="fancybox" href="/uploads/images/about/1446129516_2_m449.png" rel="imgsl1"><img src="/uploads/images/about/1446129516_2_m449.png" alt='' title=''/></a>
                <a class="fancybox" href="/uploads/images/about/1446129601_2_m494.png" rel="imgsl1"><img src="/uploads/images/about/1446129601_2_m494.png" alt='' title=''/></a>
                <a class="fancybox" href="/uploads/images/about/1446129599_11_m32.png" rel="imgsl1"><img src="/uploads/images/about/1446129599_11_m32.png" alt='' title=''/></a>
                <a class="fancybox" href="/uploads/images/about/1446129637_11_m47.png" rel="imgsl1"><img src="/uploads/images/about/1446129637_11_m47.png" alt='' title=''/></a>
                <a class="fancybox" href="/uploads/images/about/1446129648_11_m105.png" rel="imgsl1"><img src="/uploads/images/about/1446129648_11_m105.png" alt='' title=''/></a>
            </div>
            <a class="next"></a>
            <a class="prev"></a>
        </div>
    </div>


    <div class="how-are">
        <h2>Как же создаются наши модульные картины?</h2>
        <ul>
            <li>
                <div class="aticle">
                    <p class="number">1</p>
                    <h5>HD печать</h5>
                    <p>Цветная печать в макисмальном разрешении</p>
                </div>
            </li>
            <li>
                <div class="aticle">
                    <p class="number">2</p>
                    <h5>HD печать<br>с ручной обработкой</h5>
                    <p>Создает впечатление ручной работы</p>
                </div>
            </li>
            <li>
                <div class="aticle">
                    <p class="number">3</p>
                    <h5>Модульная картина, полностью написанная художником</h5>
                    <p>Читайте описание картин с ручной обработкой, там есть цена полностью ручной работы</p>
                </div>
            </li>
        </ul>
    </div>

    <div class="bg-gray">
        <div class="dotted-border">
            <h2 class="pink">Важно!</h2>
            <p>Мы не будем брать с Вас денег ни за лак, ни за подрамник, все это уже включено в стоимость! Мы не собираемся "добирать" с Вас на продаже доп. услуг или на каких-то хитрых схемах. Вам останется заплатить только за доставку от 450 рублей. В 99% случаев Вам доставит домой картину курьер</p>
            <ul>
                <li><i class="icon"></i><p>Не попадитесь на уловку мошенников! Если модульная картина стоит очень дешево, особенно большого размера, да и еще ручной работы и чтобы купить ее у Вас просят внести предоплату – вероятнее всего это мошенники. Потом будет практически нереально вернуть деньги! Мы не берем предоплаты. Вы оплачиваете картину только при еe получении!</p></li>
                <li><i class="icon"></i><p>Многие интернет-магазины продают только само полотно, и Вам придется либо самому думать где взять подрамник и как натянуть на него картину, либо платить дополнительно за эту услугу.</p></li>
                <li><i class="icon"></i><p>Также некоторые магазины продают модульные картины не обработанные лаком, что влечет за собой ее недолговечность + Вам придется самим покупать лак и покрывать.</p></li>
                <li><i class="icon"></i><p>Недобросовестные интернет-магазины продают картины китайского производства, и очень часто не самого лучшего качества.</p></li>
            </ul>
        </div>
    </div>

    <div class="any-suggestions">
        <h2>Исполним любые ваши пожелания!</h2>
        <ul>
            <li>
                <div class="aticle">
                    <div class="img"><i class="icon"></i></div>
                    <h5>Модульная картина<br>по фотографии</h5>
                    <p>Хотите, чтобы у Вас на стене висела картина, запечатлевшая Вашу свадьбу или другой радостный момент жизни? Картина с любимым актером или артистом? Любимой футбольной командой? Мы с радостью сделаем ее для вас по фотографии.</p>
                </div>
            </li>
            <li>
                <div class="aticle">
                    <div class="img"><i class="icon"></i></div>
                    <h5>Размер картины<br>не подходит?</h5>
                    <p>Не устраивает размер модульной картины, которая у нас продается, но нравится композиция? Мы с радостью сделаем для Вас панно любого размера. Просто позвоните нам и сообщите какой размер Вам нужен.</p>
                </div>
            </li>
            <li>
                <div class="aticle">
                    <div class="img"><i class="icon"></i></div>
                    <h5>Не устрраивает<br>количество модулей?</h5>
                    <p> картине 2 или 3 модуля, а Вы хотите 4 или 5 <br>(а может и наоборот) — просто свяжитесь с нами, мы сделаем для Вас именно то, что Вы хотите.</p>
                </div>
            </li>
        </ul>
    </div>


    <div class="wow">
        <h1>100% Вау-эффект вам обеспечен!</h1>
        <div class="wow-slider-wrapper">
            <ul class="wow-slider">
                <li><img src="/uploads/images/about/wow1.png"></li>
                <li><img src="/uploads/images/about/1446459964_m4.png"></li>
                <li><img src="/uploads/images/about/1442826751_m305.png"></li>
                <li><img src="/uploads/images/about/1442582853_m60.png"></li>
                <li><img src="/uploads/images/about/1442576973_m16.png"></li>
            </ul>
        </div>
    </div>
</div>