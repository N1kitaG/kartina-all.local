<?php

/* @var $this yii\web\View */
use yii\helpers\Url;

/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

$this->title = $name;
?>
<div class="page-404">
    <div class="content-404">
        Ошибка 404. Страница не существует или была удалена.<br>
        Пожалуйста перейдите в интересующий раздел сайта.
    </div>
    <br><br>
    <div class="menu-wrapper-404 clearfix">
        <div class="menu-404 fl">
            <ul>
               <li><a href="<?= Url::home()?>"><img src="/img/home.png"> Главная страница</a></li>
               <li><a href="<?= Url::to(['site/page','slug'=>'o-nas'])?>"><img src="/img/tie13.png"> О нас</a></li>
               <li><a href="<?= Url::to(['site/page','slug'=>'dostavka'])?>"><img src="/img/delivery50.png"> Доставка</a></li>
               <li><a href="<?= Url::to(['site/page','slug'=>'garantiya'])?>"><img src="/img/sticker1.png"> Гарантии</a></li>
            </ul>
        </div>
        <div class="menu-404 fl">
            <ul>
                <li><a href="<?= Url::to(['/category/view','slug'=>'modulnye-kartiny'])?>"><img src="/img/gallery7.png"> Модульные картины</a></li>
                <li><a href="<?= Url::to(['/category/view','slug'=>'smotret-vse-reproduqtcii'])?>"><img src="/img/picture47.png"> Репродукции</a></li>
                <li><a href="<?= Url::to(['site/page','slug'=>'kartina-po-vashemu-foto'])?>"><img src="/img/photos13.png"> Картины по фото</a></li>
                <li><a href="<?= Url::to(['site/page','slug'=>'kontaktyi'])?>"><img src="/img/envelope92.png"> Контакты</a></li>
            </ul>
        </div>
    </div>
    <div class="footer-404">
        Если вы считаете, что страницы нет по нашей вине, <a href="mailto:mkartina-rus@yandex.ru"><span style="color:#1e7bc5; text-decoration:none;">напишите нам</span></a>.
    </div>
</div>