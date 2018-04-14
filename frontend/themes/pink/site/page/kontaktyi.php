<?php
/**
 * @var $model common\models\Page
 * @var $this \yii\web\View
 */


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

$siteTel = Yii::$app->params['siteTel'];
$email = Yii::$app->params['supportEmail'];
$skype = Yii::$app->params['skype'];
$requisites = Yii::$app->params['requisites'];

?>
<main class="contacts-page">
    <h2><?=$this->title?></h2>
    <div>
        <div class="contacts">
            <div class="icon-block">
                <i class="icon"></i>
            </div>
            <ul>
                <li>
                    <p>Звоните в любой день с <span>9:00</span> до <span>21:00</span> по Московскому времени</p>
                    <p>Заказывайте через сайт в любое время суток!</p>
                </li>
                <li class="contacts-phone">
                    <p class="contacts-phone-region">Телефон для Москвы</p>
                    <p class="contacts-phone-number"><span><?=$siteTel['Moscow']['country']?> <?=$siteTel['Moscow']['city']?></span> <?=$siteTel['Moscow']['number']?></p>
                </li>
                <li class="contacts-phone">
                    <p class="contacts-phone-region">Беслатный для регионов</p>
                    <a href="tel:88007075359" style="text-decoration:none"><p class="contacts-phone-number" ><span><?=$siteTel['Russia']['country']?> <?=$siteTel['Russia']['city']?></span> <?=$siteTel['Russia']['number']?></p></a>
                </li>
                <li><a href="#callback-form" class="btn btn-dark-pink lightbox fancybox-callback" style="width: 162px">Позвонить вам?</a></li>
            </ul>
        </div>
        <ul class="contacts-internet">
            <li>
                <div class="icon-block">
                    <i class="icon email"></i>
                </div>
                <div class="contacts-internet-block">
                    <p>E-mail для связи:</p>
                    <p><a href="mailto:<?=$email?>"><?=$email?></a></p>
                </div>
            </li>
<!--            <li>-->
<!--                <div class="icon-block">-->
<!--                    <i class="icon skype"></i>-->
<!--                </div>-->
<!--                <div class="contacts-internet-block">-->
<!--                    <p>Звоните по Скайпу:</p>-->
<!--                    <p><a href="skype:--><?//=$skype?><!--?call">--><?//=$skype?><!--</a></p>-->
<!--                </div>-->
<!--            </li>-->
        </ul>
    </div>
    <div class="block-border">
        <div class="clearfix">
            <ul class="soc">
                <li><a href="https://vk.com/kartinarusss" target="_blank" class="icon vkru"></a></li>
                <li><a href="http://ok.ru/kartinaruss?st._aid=ExternalGroupWidget_OpenGroup" target="_blank" class="icon ok"></a></li>
                <li><a href="http://instagram.com/kartina_rus" target="_blank" class="icon in"></a></li>
            </ul>
            <div>
                <p>А в соцсетях мы проводим розыгрыши бесплатных модульных картин.</p>
                <p>Присоединяйтесь!</p>
            </div>
        </div>
    </div>
    <section class="adress">
        <div class="h6">
            <div class="icon-block">
                <i class="icon"></i>
            </div>
            <h6>Наш адрес и реквизиты</h6>
        </div>
        <ul>
            <li>ООО «<?=$requisites['ooo']?>»</li>
            <li>ОГРН: <?=$requisites['ogrn']?></li>
            <li>ИНН: <?=$requisites['inn']?></li>
            <li><?=$requisites['adress']?></li>
        </ul>
        <div class="map">
            <script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=IdfGfe-rqWGcBFfb-MK7JveUOmVpnEiN&lang=ru_RU&sourceType=constructor"></script>
        </div>
    </section>
</main>