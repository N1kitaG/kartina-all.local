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

?>
<main class="howto-page">
    <h2><?=$this->title?></h2>
    <p class="pink-text">Вы можете сделать заказ в нашем магазине несколькими способами</p>
    <article>
        <div class="howto-page-article-left order">
            <p>Заказать</p>
        </div>
        <div class="howto-page-article-right">
            <div>
                <h5>Нажмите кнопку «Заказать» рядом с понравившейся картиной</h5>
                <p>В появившемся окне введите номер телефона. Через 20-30 минут наш сотрудник свяжется с Вами, чтобы обсудить все детали (адрес, размер картины, крепления и т.д.)</p>
            </div>
        </div>
    </article>
    <article>
        <div class="howto-page-article-left phone">
            <p><i class="icon"></i></p>
        </div>
        <div class="howto-page-article-right">
            <div>
                <h5>Оформите заказ по телефону</h5>
                <p>В появившемся окне введите свой номер телефона, и имя и наш сотрудник Вам позвонит.</p>
            </div>
        </div>
    </article>
    <article>
        <div class="howto-page-article-left call-you">
            <p>Позвонить<br>вам?</p>
        </div>
        <div class="howto-page-article-right">
            <div>
                <h5>Нажмите «Позвонить вам?» вверху сайта</h5>
                <p>Позвоните по номеру <?=$siteTel['Moscow']['country']?> <?=$siteTel['Moscow']['city']?> <?=$siteTel['Moscow']['number']?> (для Москвы) или <?=$siteTel['Russia']['country']?> <?=$siteTel['Russia']['city']?> <?=$siteTel['Russia']['number']?> (звонок для всей России бесплатный)</p>
            </div>
        </div>
    </article>
    <article>
        <div class="howto-page-article-left email">
            <p><i class="icon"></i></p>
        </div>
        <div class="howto-page-article-right">
            <div>
                <h5>Напишите нам на электронную почту</h5>
                <p><a href="mailto:<?=$email?>"><?=$email?></a></p>
            </div>
        </div>
    </article>
    <article>
        <div class="howto-page-article-left skype">
            <p><i class="icon"></i></p>
        </div>
        <div class="howto-page-article-right">
            <div>
                <h5>Свяжитесь с нами по Скайпу</h5>
                <p><a href="skype:<?=$skype?>?call"><?=$skype?></a></p>
            </div>
        </div>
    </article>
</main>