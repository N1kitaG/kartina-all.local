<?php
/**
 * @var $model common\models\Page
 * @var $this \yii\web\View
 */

use yii\helpers\Url;
use yii\widgets\Pjax;

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

?>
<h1><?= $this->title ?></h1>

<style type="text/css">
    .content-post .text ul {
        list-style: none;
        padding-top: 15px;
        padding-bottom: 15px;
    }

    .all_review {
        margin-bottom: 20px;
        padding-bottom: 20px;
        border-bottom: 1px dashed #555;
    }

    .all_review:after {
        clear: both;
        content: "";
        display: block;
    }

    .review_name {
        text-transform: uppercase;
        font-size: 16px;
        margin: 5px 0;
        font-weight: bold;
    }

    .avatar_review {
        float: left;
        margin: 15px;
        border: 7px solid #ddd;
    }

    .image_review {
        text-align: center;
        padding: 15px;
        box-sizing: border-box;
    }

    .review_text {
        text-align: left;
    }

    .image_review img {
        max-width: 400px;
        max-height: 300px;
        border: 1px solid #fff;
    }

    .audio_block {
        width: 49%;
        box-sizing: border-box;
        padding: 10px 10px 20px 10px;
        display: inline-block;
        vertical-align: top;
        text-align: center;
        margin-bottom: 10px;
        border-bottom: 1px dashed #555;
    }

    .audio_block .audio_img img {
        max-width: 300px;
        max-height: 300px;
        margin: 10px 0;
    }

    .audio_block blockquote {
        line-height: 30px;
        font-weight: bold;
        margin: 0;
        border: none;
        padding: 0;
        font-size: 15px;
        white-space: nowrap;
    }

    .btn.btn-pink{
        font-size: 20px;
        width: 300px;
        margin: 0 auto;
        line-height: 30px;
    }
</style>


<div class="tabs-name_x" id="tabs">
    <a href="#tab-review" class="textlink selected">Текстовые отзывы</a>
    <a href="#tab-audio" class="audiolink">Аудиоотзывы</a>
</div>

<div class="tabs_x" id="tab-review" style="display: block;">
    <?php Pjax::begin(['enablePushState' => false,'linkSelector' => '#review-text','enableReplaceState' => false,])?>
    <div class="all_review">
        <div class="review_name"> Анастасия, 21 год</div>
        <div class="review_block">
            <div class="avatar_review"><img src="/uploads/images/reviews/avatars/1.jpg"></div>
            <div class="review_text">
                «Искала в интернете, где дешевле можно заказать модульную картину, Хотела подарить
                родителям на их годовщину. Нашла несколько интернет-магазинов , где цена дешевле чем тут , но как всегда
                бывает , при подробном уточнении оказалось что там продают просто само полотно , а что бы оно было с
                подрамником надо доплатить еще 2 тысячи! 2 тысячи ! Они сошли с ума. В этом магазине цена указана уже
                готовой модульной картины , не надо доплачивать ни за подрамник , ни за нанесение лака ( представляете
                еще и за это дерут в некоторых магазинах , или говорят , мол сами купите и покроете). Так заказав здесь
                я еще и плеер в подарок получила! Огромное спасибо!»
            </div>
            <div class="image_review"><img src="/uploads/images/reviews/interiers_new/1.jpg"></div>
        </div>
    </div>
    <div class="all_review">
        <div class="review_name"> Екатерина, 26 лет, Кострома</div>
        <div class="review_block">
            <div class="avatar_review"><img src="/uploads/images/reviews/avatars/2.jpg"></div>
            <div class="review_text">«Оформила спецзаказ по своему изображению в данном интернет - магазине. Сказать что
                осталась довольна - мало... Я очень довольна!!! Во-первых, сервис: при оформлении заказа быстро
                связались со мной, уточнили все детали, за меня нашли изображение высокого качества для печати картины,
                что очень порадовало. Во-вторых: будущий шедевр оплатила заранее, так как, повторюсь, спецзаказ, не
                наложенный платеж. В третьих: изготовление заняло около двух недель, включая праздничные дни. Достаточно
                быстро. Сама картина высокого качества, делали на славу! Так как это был подарок, данный факт имел
                большое значение. Все качественно. Упаковано так, что всей семьей минут 30 раскрывали... Так что будущим
                покупателям можно не переживать за сохранность покупки при транспортировке (доставка была осуществлена
                Почтой России). Спасибо большое за отличную работу!»
            </div>
            <div class="image_review"><img src="/uploads/images/reviews/interiers/2.jpg"></div>
        </div>
    </div>
    <div class="all_review">
        <div class="review_name"> Таня, 28 лет, Хабаровск</div>
        <div class="review_block">
            <div class="avatar_review"><img src="/uploads/images/reviews/avatars/3.jpg"></div>
            <div class="review_text">«Заказала модульную картину на этом сайте в выходной день,вечером.Перезвонили уже
                через 3 минуты. Заказ подтвердили. СМС с подтверждением отправки получил очень быстро. Очень
                понравилось. Обязательно порекомендую друзьям. Всем удачных покупок!!!»
            </div>
            <div class="image_review"><img src="/uploads/images/reviews/interiers/3.jpg"></div>
        </div>
    </div>
    <div class="all_review">
        <div class="review_name"> Артем, 36 лет, Краснодар</div>
        <div class="review_block">
            <div class="avatar_review"><img src="/uploads/images/reviews/avatars/4.jpg"></div>
            <div class="review_text">«Решили подарить босу картину для его кабинета. Стал вопрос выбора продавца.
                Взбесило что во многих магазинах выбираешь картину а потом с тебя дерут за подрамник , за покрытие лаком
                , еще за что-нибудь , за доставку и тд , вроде вначале цены был 3300 а в итоге получается аж 7 тысяч.
                Если честно , думал что и здесь так , но оказалось иначе. Стоит на картине цена 5500 - значит заплатишь
                5500 и не копейки больше. Спасибо интернет-магазину картина-рус за честность , буду советовать вам и
                другим отделам нашей фирмы. Кстати шеф был в востроге от картины разбитой на части.»
            </div>
            <div class="image_review"><img src="/uploads/images/reviews/interiers_new/23.jpg"></div>
        </div>
    </div>
    <div class="all_review">
        <div class="review_name"> Диана, Ростов-на-Дону</div>
        <div class="review_block">
            <div class="avatar_review"><img src="/uploads/images/reviews/avatars/5.jpg"></div>
            <div class="review_text">«Приятный магазин. Очень порадовала услуга помощи дизайнера. Сразу увидела как
                будет смотреться сегментная картина у меня дома. Попросила сделать мне подбор из 5 картин , которые
                понравились и на следующий день уже получила развернутую помощь. Выбрала что надо и заказала. Приятно
                удивлена была подарком при покупке.»
            </div>
            <div class="image_review"><img src="/uploads/images/reviews/interiers_new/5.jpg"></div>
        </div>
    </div>
    <div class="all_review">
        <div class="review_name"> Екатерина, 30 лет, Москва</div>
        <div class="review_block">
            <div class="avatar_review"><img src="/uploads/images/reviews/avatars/6.jpg"></div>
            <div class="review_text">«Хочу присоединиться ко всем положительным отзывам. Получили картину, которую
                заказывали для переговорной комнаты "Дерево у воды". Сделана под рисунок маслом. Очень красиво
                смотрится! Цены намного приятнее других магазинов. В подарок прислали MP3 плеер и купон на скидку при
                заказе следующей картины. И закажем обязательно еще, уже домой. Спасибо! Все отлично.»
            </div>
            <div class="image_review"><img src="/uploads/images/reviews/interiers/6.jpg"></div>
        </div>
    </div>
    <br>
    <div class="btn-more">
        <a href="<?=Url::to(['review/text','page'=>1]);?>" class="btn btn-pink" id="review-text">ПОКАЗАТЬ ЕЩЕ ОТЗЫВЫ</a>
    </div>
    <?php Pjax::end()?>
</div>
<div class="tabs_x" id="tab-audio" style="display: none;">
    <?php Pjax::begin(['enablePushState' => false,'linkSelector' => '#review-audio','enableReplaceState' => false,])?>
    <div class="audio_block">
        <div class="audio_img"><img src="/uploads/images/audio_reviews/avatars/1.png"></div>
        <div class="audio_flash">
            <div class="review_audio">
                <blockquote> г. Красноярск (Жанна Григорьевна)
                    <audio controls>
                        <source src="/audio/5.mp3" type="audio/mpeg">
                    </audio>
                </blockquote>
            </div>
        </div>
    </div>
    <div class="audio_block">
        <div class="audio_img"><img src="/uploads/images/audio_reviews/avatars/2.png"></div>
        <div class="audio_flash">
            <div class="review_audio">
                <blockquote> Новосибирская обл., г. Куйбышев (Тамара Владимировна)
                    <audio controls>
                        <source src="/audio/6.mp3" type="audio/mpeg">
                    </audio>
                </blockquote>
            </div>
        </div>
    </div>
    <div class="audio_block">
        <div class="audio_img"><img src="/uploads/images/audio_reviews/avatars/3.png"></div>
        <div class="audio_flash">
            <div class="review_audio">
                <blockquote> г. Иркутск (Анастасия Геннадьевна)
                    <audio controls>
                        <source src="/audio/1.mp3" type="audio/mpeg">
                    </audio>
                </blockquote>
            </div>
        </div>
    </div>
    <div class="audio_block">
        <div class="audio_img"><img src="/uploads/images/audio_reviews/avatars/4.png"></div>
        <div class="audio_flash">
            <div class="review_audio">
                <blockquote> г. Надым (Анна Викторовна)
                    <audio controls>
                        <source src="/audio/2.mp3" type="audio/mpeg">
                    </audio>
                </blockquote>
            </div>
        </div>
    </div>
    <div class="audio_block">
        <div class="audio_img"><img src="/uploads/images/audio_reviews/avatars/5.png"></div>
        <div class="audio_flash">
            <div class="review_audio">
                <blockquote> г. Екатеринбург (Денис Борисович)
                    <audio controls>
                        <source src="/audio/3.mp3" type="audio/mpeg">
                    </audio>
                </blockquote>
            </div>
        </div>
    </div>
    <div class="audio_block">
        <div class="audio_img"><img src="/uploads/images/audio_reviews/avatars/6.png"></div>
        <div class="audio_flash">
            <div class="review_audio">
                <blockquote> г. Магнитогорск (Наталья Петровна)
                    <audio controls>
                        <source src="/audio/22.mp3" type="audio/mpeg">
                    </audio>
                </blockquote>
            </div>
        </div>
    </div>
    <br>
    <div class="btn-more">
        <a href="<?=Url::to(['review/audio','page'=>1]);?>" class="btn btn-pink" id="review-audio">ПОКАЗАТЬ ЕЩЕ ОТЗЫВЫ</a>
    </div>
    <?php Pjax::end()?>
</div>
