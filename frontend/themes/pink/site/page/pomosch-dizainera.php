<?php
//TODO: Форма заказа помощи дизайнера
/**
 * @var $model common\models\Page
 * @var $this \yii\web\View
 */


use frontend\themes\pink\assets\PinkAsset;
use yii\helpers\Url;

$this->registerMetaTag([
    'name' => 'description',
    'content' => $model->meta_description
]);

$this->registerMetaTag([
    'name' => 'keywords',
    'content' => $model->meta_keywords
]);

$this->title = $model->title;
$this->params['breadcrumbs'][] = $this->title;

$bundle = PinkAsset::register($this);

$this->theme->setBaseUrl($bundle->baseUrl);

?>
<main class="designer-page">
    <h2>Бесплатная помощь дизайнера в подборе картины</h2>
    <div class="button-block">
        <a href="#order-popup2" class="knopkadesign1 button pink">
            <p>Воспользоваться услугой дизайнера</p>
            <p>Это бесплатно!</p>
        </a>
    </div>
    <p>Хотите еще до покупки посмотреть как будут выглядеть модульные картины в вашем интерьере? <br>Вот пример того,
        как наш дизайнер совершенно <span class="pink-text">бесплатно подбирает картину</span> в интерьер.</p>
    <article>
        <h5>Модульные картины в&nbsp;интерьере спальни</h5>
        <div class="designer-img">
            <ul>
                <li><img src="<?=$this->theme->getUrl('img/designer-img1.png')?>" alt="Картинка"></li>
                <li><img src="<?=$this->theme->getUrl('img/designer-img2.png')?>" alt="Картинка"></li>
                <li><img src="<?=$this->theme->getUrl('img/designer-img3.png')?>" alt="Картинка"></li>
                <li><img src="<?=$this->theme->getUrl('img/designer-img4.png')?>" alt="Картинка"></li>
                <li><img src="<?=$this->theme->getUrl('img/designer-img5.png')?>" alt="Картинка"></li>
                <li><img src="<?=$this->theme->getUrl('img/designer-img6.png')?>" alt="Картинка"></li>
            </ul>
        </div>
        <div class="clearfix"></div>
        <p>Практически ни один магазин не предоставляет такую услугу. Вам приходится на свой страх и риск покупать
            модульную картину. Только потом Вы видите как она смотрится в вашем интерьере. </p>
    </article>
    <article>
        <h5>Модульные картины на&nbsp;лестнице</h5>
        <div class="designer-img">
            <ul>
                <li><img src="<?=$this->theme->getUrl('img/designer-img7.png')?>" alt="Картинка"></li>
                <li><img src="<?=$this->theme->getUrl('img/designer-img8.png')?>" alt="Картинка"></li>
                <li><img src="<?=$this->theme->getUrl('img/designer-img9.png')?>" alt="Картинка"></li>
            </ul>
        </div>
        <div class="clearfix"></div>
        <p class="title">Что Вам не придется делать с нашей <span class="pink-text">бесплатной услугой</span> «Помощь
            дизайнера»:</p>
        <ul>
            <li>Думать и представлять как же будет смотреться картина.</li>
            <li>Хорошо ли подойдет размер панно.</li>
            <li>Если картина Вам не подошла, обычно Вы можете ее поменять, но это трата сил и времени!</li>
            <li>С нашей помощью Вы сразу видите как будет смотреться панно в вашем доме.</li>
            <li>Что же выбрать? Диптих, триптих или полиптих? Мы поможем!</li>
            <li>Какую же модульную картину выбрать? С радостью подскажем Вам!</li>
        </ul>
        <div class="button-block">
            <a href="#order-popup2" class="knopkadesign1 button pink">
                <p>Воспользоваться услугой дизайнера</p>
                <p>Это бесплатно!</p>
            </a>
        </div>
    </article>
    <article>
        <h5>Модульные картины в&nbsp;интерьере гостиной</h5>
        <div class="designer-img">
            <ul>
                <li><img src="<?=$this->theme->getUrl('img/designer-img10.png')?>" alt="Картинка"></li>
                <li><img src="<?=$this->theme->getUrl('img/designer-img11.png')?>" alt="Картинка"></li>
                <li><img src="<?=$this->theme->getUrl('img/designer-img12.png')?>" alt="Картинка"></li>
                <li><img src="<?=$this->theme->getUrl('img/designer-img13.png')?>" alt="Картинка"></li>
                <li><img src="<?=$this->theme->getUrl('img/designer-img14.png')?>" alt="Картинка"></li>
                <li><img src="<?=$this->theme->getUrl('img/designer-img15.png')?>" alt="Картинка"></li>
            </ul>
        </div>
        <div class="clearfix"></div>
        <p>Вы можете выбрать самостоятельно несколько вариантов картин (количество практически не ограничено, хоть 5,
            хоть 20) и сказать нам: <br>«Я хочу увидеть, как это все будет смотреться у меня дома», и мы с радостью
            сделаем для Вас презентацию.</p>
        <p>Если же Вы затрудняетесь выбрать картину самостоятельно, то наш профессиональный дизайнер с удовольствием
            сделает для Вас подбор самых оптимальных вариантов для вашего интерьера с учетом Ваших пожеланий.</p>
        <p class="pink-text">Эта услуга совершенно бесплатна!</p>
    </article>
    <article>
        <h5>Модульные картины в&nbsp;интерьере кухни</h5>
        <div class="designer-img">
            <ul>
                <li><img src="<?=$this->theme->getUrl('img/designer-img16.png')?>" alt="Картинка"></li>
                <li><img src="<?=$this->theme->getUrl('img/designer-img17.png')?>" alt="Картинка"></li>
                <li><img src="<?=$this->theme->getUrl('img/designer-img18.png')?>" alt="Картинка"></li>
                <li><img src="<?=$this->theme->getUrl('img/designer-img19.png')?>" alt="Картинка"></li>
                <li><img src="<?=$this->theme->getUrl('img/designer-img20.png')?>" alt="Картинка"></li>
                <li><img src="<?=$this->theme->getUrl('img/designer-img21.png')?>" alt="Картинка"></li>
            </ul>
        </div>
        <div class="clearfix"></div>
        <div class="button-block">
            <a href="#order-popup2" class="knopkadesign1 button pink">
                <p>Воспользоваться услугой дизайнера</p>
                <p>Это бесплатно!</p>
            </a>
        </div>
    </article>
    <article>
        <h5>Или напишите нам на электронную почту</h5>
        <p class="title">Вы можете написать нам по адресу <a href="mailto:info@kartina-rus.ru">info@kartina-rus.ru</a>, в котором необходимо написать свои
            пожелания<br>по модульной картине (если они есть):</p>
        <ul>
            <li><span>Сюжет (цветы, города, природа, люди и тд.)</span></li>
            <li><span>Размеры</span></li>
            <li><span>Цветовая гамма</span></li>
            <li><span>Количество модулей</span></li>
            <li><span>Номер телефона для связи</span></li>
            <li><span>Имя (как к Вам обращаться)</span></li>
        </ul>
        <p>И прикрепить изображение стены, куда собираетесь повесить картину.</p>
        <p>Желательно описать словами, куда именно на фотографии Вы хотите повесить картину и описать комнату, а лучше
            прислать несколько фотографий комнаты, что бы дизайнер понял к какому интерьеру надо подбирать картину.</p>
        <p>В ответ Вы получите подтверждение, что заявка принята. В этот же день или на следующий Вы получите
            фотомонтаж!</p>
    </article>
</main>
