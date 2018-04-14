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

?>
<h1><?=$this->title?></h1>
<ul class="list">
    <li>
        <blockquote>
            г.Красноярск (Жанна Григорьевна)<br>
            <audio controls>
                <source src="/audio/5.mp3" type="audio/mpeg">
            </audio>
        </blockquote>
    </li>
</ul>
<ul class="list">
    <li>
        <blockquote>
            Новосибирская обл. г. Куйбышев (Тамара Владимировна)<br>
            <audio controls>
                <source src="/audio/6.mp3" type="audio/mpeg">
            </audio>
        </blockquote>
    </li>
</ul>
<ul class="list">
    <li>
        <blockquote>
            г.Иркутск (Анастасия Геннадьевна) - Чай с лимоном<br>
            <audio controls>
                <source src="/audio/1.mp3" type="audio/mpeg">
            </audio>
        </blockquote>
    </li>
</ul>
<ul class="list">
    <li>
        <blockquote>
            г. Надым (Анна Викторовна) - Нежный натюрморт<br>
            <audio controls>
                <source src="/audio/2.mp3" type="audio/mpeg">
            </audio>
        </blockquote>
    </li>
</ul>
<ul class="list">
    <li>
        <blockquote>
            г.Екатеринбург (Денис Борисович)<br>
            <audio controls>
                <source src="/audio/3.mp3" type="audio/mpeg">
            </audio>
        </blockquote>
    </li>
</ul>
<ul class="list">
    <li>
        <blockquote>
            Картина "Аромат" (Наталья Петровна)<br>
            <audio controls>
                <source src="/audio/22.mp3" type="audio/mpeg">
            </audio>
        </blockquote>
    </li>
</ul>
<ul class="list">
    <li>
        <blockquote>
            г.Бузулук (Екатерина Владимировна)<br>
            <audio controls>
                <source src="/audio/4.mp3" type="audio/mpeg">
            </audio>
        </blockquote>
    </li>
</ul>
<ul class="list">
    <li>
        <blockquote>
            Картина "Бег городской жизни" (Татьяна Владимировна)<br>
            <audio controls>
                <source src="/audio/23.mp3" type="audio/mpeg">
            </audio>
        </blockquote>
    </li>
</ul>
<ul class="list">
    <li>
        <blockquote>
            Московская обл. г. Фрязино (Оксана Игоревна)<br>
            <audio controls>
                <source src="/audio/7.mp3" type="audio/mpeg">
            </audio>
        </blockquote>
    </li>
</ul>
<ul class="list">
    <li>
        <blockquote>
            Картина "Белый цветок" (Наталья Викторовна)<br>
            <audio controls>
                <source src="/audio/24.mp3" type="audio/mpeg">
            </audio>
        </blockquote>
    </li>
</ul>
<ul class="list">
    <li>
        <blockquote>
            Саратовская обл. Красный Яр (Мария Александровна)<br>
            <audio controls>
                <source src="/audio/8.mp3" type="audio/mpeg">
            </audio>
        </blockquote>
    </li>
</ul>
<ul class="list">
    <li>
        <blockquote>
            Картина "Битва с драконом" (Сергей Сергеевич)<br>
            <audio controls>
                <source src="/audio/25.mp3" type="audio/mpeg">
            </audio>
        </blockquote>
    </li>
</ul>
<ul class="list">
    <li>
        <blockquote>
            Челябинск (Оксана Владимировна) - Морской закат<br>
            <audio controls>
                <source src="/audio/9.mp3" type="audio/mpeg">
            </audio>
        </blockquote>
    </li>
</ul>
<ul class="list">
    <li>
        <blockquote>
            Картина "Взгляд животного" (Вера Михайловна)<br>
            <audio controls>
                <source src="/audio/26.mp3" type="audio/mpeg">
            </audio>
        </blockquote>
    </li>
</ul>
<ul class="list">
    <li>
        <blockquote>
            г. Владимир (Наталья Александровна)<br>
            <audio controls>
                <source src="/audio/11.mp3" type="audio/mpeg">
            </audio>
        </blockquote>
    </li>
</ul>
<ul class="list">
    <li>
        <blockquote>
            Картина "Животворящие лучи солнца" (Наталья Николаевна)<br>
            <audio controls>
                <source src="/audio/27.mp3" type="audio/mpeg">
            </audio>
        </blockquote>
    </li>
</ul>
<ul class="list">
    <li>
        <blockquote>
            г. Димитровград (Наталья Александровна) - Ванильное настроение<br>
            <audio controls>
                <source src="/audio/12.mp3" type="audio/mpeg">
            </audio>
        </blockquote>
    </li>
</ul>
<ul class="list">
    <li>
        <blockquote>
            Картина "Интрига" (Наталья Юрьевна)<br>
            <audio controls>
                <source src="/audio/28.mp3" type="audio/mpeg">
            </audio>
        </blockquote>
    </li>
</ul>
<ul class="list">
    <li>
        <blockquote>
            г. Сургут ( Вера Константиновна) - Нежная орхидея<br>
            <audio controls>
                <source src="/audio/13.mp3" type="audio/mpeg">
            </audio>
        </blockquote>
    </li>
</ul>
<ul class="list">
    <li>
        <blockquote>
            Картина "Лунное дерево" (Елена Ивановна)<br>
            <audio controls>
                <source src="/audio/29.mp3" type="audio/mpeg">
            </audio>
        </blockquote>
    </li>
</ul>
<ul class="list">
    <li>
        <blockquote>
            г. Кемерово - Цветы радости<br>
            <audio controls>
                <source src="/audio/14.mp3" type="audio/mpeg">
            </audio>
        </blockquote>
    </li>
</ul>
<ul class="list">
    <li>
        <blockquote>
            Картина "Мир прекрасного" (Елена Сергеевна)<br>
            <audio controls>
                <source src="/audio/30.mp3" type="audio/mpeg">
            </audio>
        </blockquote>
    </li>
</ul>
<ul class="list">
    <li>
        <blockquote>
            г. Москва - Яркие цветы<br>
            <audio controls>
                <source src="/audio/15.mp3" type="audio/mpeg">
            </audio>
        </blockquote>
    </li>
</ul>
<ul class="list">
    <li>
        <blockquote>
            Картина "Нежная орхидея" (Наталья Анатольевна)<br>
            <audio controls>
                <source src="/audio/31.mp3" type="audio/mpeg">
            </audio>
        </blockquote>
    </li>
</ul>
<ul class="list">
    <li>
        <blockquote>
            г. Москва - Цветение<br>
            <audio controls>
                <source src="/audio/16.mp3" type="audio/mpeg">
            </audio>
        </blockquote>
    </li>
</ul>
<ul class="list">
    <li>
        <blockquote>
            Картина "Отдых зверя" (Анатолий Алексеевич)<br>
            <audio controls>
                <source src="/audio/32.mp3" type="audio/mpeg">
            </audio>
        </blockquote>
    </li>
</ul>
<ul class="list">
    <li>
        <blockquote>
            Чувашская Республика г.Чебоксары - Сексуальная Африка<br>
            <audio controls>
                <source src="/audio/17.mp3" type="audio/mpeg">
            </audio>
        </blockquote>
    </li>
</ul>
<ul class="list">
    <li>
        <blockquote>
            Картина "Пасмурный лондон" (Светлана Александровна)<br>
            <audio controls>
                <source src="/audio/33.mp3" type="audio/mpeg">
            </audio>
        </blockquote>
    </li>
</ul>
<ul class="list">
    <li>
        <blockquote>
            г. Саратов - Морской закат<br>
            <audio controls>
                <source src="/audio/18.mp3" type="audio/mpeg">
            </audio>
        </blockquote>
    </li>
</ul>
<ul class="list">
    <li>
        <blockquote>
            Картина "Хочу сюда" (Наталья Геннадьевна)<br>
            <audio controls>
                <source src="/audio/34.mp3" type="audio/mpeg">
            </audio>
        </blockquote>
    </li>
</ul>
<ul class="list">
    <li>
        <blockquote>
            г. Москва - Дерево на закате<br>
            <audio controls>
                <source src="/audio/19.mp3" type="audio/mpeg">
            </audio>
        </blockquote>
    </li>
</ul>
<ul class="list">
    <li>
        <blockquote>
            Картина "Цветы клубники" (Светлана Олеговна)<br>
            <audio controls>
                <source src="/audio/36.mp3" type="audio/mpeg">
            </audio>
        </blockquote>
    </li>
</ul>
<ul class="list">
    <li>
        <blockquote>
            г. Томск - Сексуальная Африка<br>
            <audio controls>
                <source src="/audio/20.mp3" type="audio/mpeg">
            </audio>
        </blockquote>
    </li>
</ul>
<ul class="list">
    <li>
        <blockquote>
            Картина "Яркий месяц" (Наталья Николаевна)<br>
            <audio controls>
                <source src="/audio/35.mp3" type="audio/mpeg">
            </audio>
        </blockquote>
    </li>
</ul>
<ul class="list">
    <li>
        <blockquote>
            г. Тула - Пятнистый хищник<br>
            <audio controls>
                <source src="/audio/21.mp3" type="audio/mpeg">
            </audio>
        </blockquote>
    </li>
</ul>