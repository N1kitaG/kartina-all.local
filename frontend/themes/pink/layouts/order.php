<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
?>
<?php $this->beginPage() ?>
<!doctype html>
<html class="no-js" lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <?= Html::csrfMetaTags() ?>
    <?php $this->head() ?>
    <title>Заказ оформлен</title>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,700italic,400italic&amp;subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <script type="text/javascript">(window.Image ? (new Image()) : document.createElement('img')).src = location.protocol + '//vk.com/rtrg?r=BR2dJcxXYF8ddfExOpDcPNnVCyfeQ10CWABPzbdeS4NmT7BAPOuGfwQ7uYTK8q8Hf46gbOX*jZxXDa2*PeVIh0HRqt/wzZM9OoYeG8P2rN7aAU8GQkSJRyNrQIACDkIIHk6oZcccjZxqLwCLJLeoiG/CiiZ1vibaGZ6vScCJZQI-&pixel_id=1000040068';</script>
    <script type="text/javascript">(window.Image ? (new Image()) : document.createElement('img')).src = location.protocol + '//vk.com/rtrg?r=jSSOHRsOxxo4Z/0oewX*x/oh9GSLOiir0eUeCPZkl0DpEwWlYEd4e1Xo2T977rTZ618/aW8VXC4rdXbD4202MfSmBewinPbbhR/5YBs2qnuT1qBzRIJ0tp06IuWjewI6zb9d5ZGyidDLYvOjFNzOsKsMlW0KsgIdzEV6BY4V0ds-&pixel_id=1000058431';</script>
    <script type="text/javascript">(window.Image ? (new Image()) : document.createElement('img')).src = location.protocol + '//vk.com/rtrg?r=Ztkbax*5nO7U4/cLuKdbyYGBhGsfBO8R55x4O2LvH0/d9n2T*EBnnPLhEyeh2s0buKhm2xzP5XUfegh7zS7/*Oitz/neiCOgdyy3b*QV9yoncR28BdVnLIyRvBJfvPIwUZdhdaRphr1EhItJ1dRYunjZSw/JpVGkr4MwICweMT8-&pixel_id=1000061980';</script>
    <script type="text/javascript" src="//api.ok.ru/js/fapi5.js"></script>
    <script type="text/javascript" src="/odnkl_script.js" defer="defer"></script>
    <style>
        .order-form {

            padding: 14px 20px 14px 20px;
            margin: 16px 0 0;
            border: none;
            background: red;
            text-shadow: 1px 1px 0 rgba(0, 0, 0, 0.2);
            color: #fff;
            text-transform: uppercase;
            font: bold 28px 'PT Sans Narrow', Arial, Helvetica, sans-serif;
            cursor: pointer;
            box-shadow: 0 3px 3px 0 rgba(0, 0, 0, 0.5);
            text-decoration: none;
        }

        .clearfix {
            *zoom: 1
        }

        .clearfix:before {
            content: " ";
            display: table
        }

        .clearfix:after {
            content: " ";
            display: table;
            clear: both
        }

        .order-form:hover {
            background: red;
            box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.5);
        }

        .content-post {
            margin: 76px 0 12px;
            overflow: hidden;
            font-size: 15px;
            line-height: 18px;
            font-family: 'PT Sans narrow', serif;
        }

        .item-list {
            width: 100%;
            overflow: hidden;
            margin: 0 0 20px;
            padding: 0 !important;
        }

        .item-list li {
            display: inline-block;
            vertical-align: top;
            margin: 0 2px 2px 0;
            border: 1px solid #e4e4e4;
            padding: 1px;
            width: 293px;
        }

        .item-list-title {
            padding: 3px 0 0;
            font: bold 16px/19px 'PT Sans Narrow', Arial, Helvetica, sans-serif;
            text-transform: uppercase;
            text-align: center;
            min-height: 40px;
        }

        .item-list .visual {
            text-align: center;
            margin: 0 0 10px;
        }

        .item-list .visual img {
            display: block;
            margin: 0 auto;
            width: 293px;
            height: 209px;
        }

        .item-list .price {
            margin: 0 auto;
            width: 245px;
            text-transform: uppercase;
            height: 35px;
        }

        .item-list .price strong {
            display: block;
            margin: 0 0 2px;
            padding: 0 30px;
            font: bold 25px/29px 'PT Sans Narrow', Arial, Helvetica, sans-serif;
            color: #de0000;
            text-align: left;
        }

        .item-list .price span {
            display: block;
            text-align: right;
            padding: 0 34px;
            font: bold 17px/23px 'PT Sans Narrow', Arial, Helvetica, sans-serif;
            color: #616161;
            text-decoration: line-through;
            position: relative;
            top: -25px;
        }

        .loop-vidget {
            position: absolute;
            width: 130px;
            height: 61px;
            /*background: url(./templates/abtest/images/skidka500.png) no-repeat;*/
            margin: -37px 0 0 233px;
            z-index: 100;
        }

        .item-list .btn-holder {
            width: 100%;
            overflow: hidden;
            margin: 0;
        }

        .item-list .btn1, .btn1 {
            float: left;
            width: 99%;
            margin: 0 1px 0 0;
            padding: 8px 0 7px;
            background: url('./img/bg-btn-4.png') repeat-x;
            color: #151515;
            text-align: center;
            text-shadow: 1px 1px 0 rgba(255, 255, 255, 0.4);
            text-transform: uppercase;
            font: bold 15px/19px 'PT Sans Narrow', Arial, Helvetica, sans-serif;
        }

        .item-list .btn1.btn-2, .btn1.btn-2 {
            background: url('./img/bg-btn-5.png') repeat-x;
            text-shadow: 1px 1px 0 rgba(0, 0, 0, 0.2);
            color: #fff;
            margin: 0;
            text-decoration: none;
        }

        .item-list .btn1.btn-2:hover, .btn1.btn-2:hover {
            text-decoration: underline;
        }

        .btn1.btn-2 {
            margin: 0 30%;
        }

        #parent_win_div, #parent_win_div1 {
            background: black;
            height: 100%;
            opacity: 0.55;
            position: fixed;
            display: none;
            width: 100%;
            z-index: 100;
            top: 0;
            left: 0;
        }

        a#close_win, a#close_win1 {
            color: gray;
            font-weight: bold;
            text-decoration: underline;
            cursor: pointer;
        }

        .popup {
            width: 400px;
            height: 220px;
            margin: auto;
            background-color: #fff;
            border: 3px solid #fff;
            display: none;
            opacity: 1000;
            left: 0;
            right: 0;
            padding: 30px;
            position: fixed;
            top: 150px;
            z-index: 1000;
            -webkit-transition: opacity .5s, top .5s;
            -moz-transition: opacity .5s, top .5s;
            -ms-transition: opacity .5s, top .5s;
            -o-transition: opacity .5s, top .5s;
            transition: opacity .5s, top .5s;
            color: #333333;
            font-size: 20px;
            text-align: center;
            font-family: inherit;
        }

        .overlay:target + .popup {
            top: 20%;
            opacity: 1;
            visibility: visible;
        }

        .closepop {
            background-color: rgba(0, 0, 0, 0.8);
            border: 2px solid #fff;
            height: 24px;
            line-height: 20px;
            position: absolute;
            right: -13px;
            font-weight: bold;
            text-align: center;
            text-decoration: none;
            padding: 0;
            top: -15px;
            width: 24px;
            -webkit-border-radius: 15px;
            -moz-border-radius: 15px;
            -ms-border-radius: 15px;
            -o-border-radius: 15px;
            border-radius: 15px;
            -moz-box-shadow: 1px 1px 3px #000;
            -webkit-box-shadow: 1px 1px 3px #000;
            box-shadow: 1px 1px 3px #000;
            cursor: pointer;
        }

        .closepop:before {
            color: rgba(255, 255, 255, 1.0);
            content: "X";
            font-family: tahoma, serif;
            font-size: 14px;
            text-shadow: 0 -1px rgba(0, 0, 0, 0.9);
        }
    </style>
</head>
<body>
<?php $this->beginBody() ?>
    <div class="wrapper">
        <div id="header" style="text-align: center;">
            <?= $content ?>
        </div>
    </div>
<?php
//Показываем после оформления
if(ABTEST_VARIANT == 'v1'){
    echo $this->render('/subscribe/form1');
}
?>
<?=$this->render('/partials/_counters');?>
    <?php if (isset($this->blocks['track'])): ?>
        <?=$this->blocks['track']; ?>
    <?php endif;?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
