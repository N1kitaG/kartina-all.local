<style>
    /*! fancyBox v2.1.5 fancyapps.com | fancyapps.com/fancybox/#license */
    .fancybox-wrap, .fancybox-skin, .fancybox-outer, .fancybox-inner, .fancybox-image, .fancybox-wrap iframe, .fancybox-wrap object, .fancybox-nav, .fancybox-nav span, .fancybox-tmp {
        padding: 0;
        margin: 0;
        border: 0;
        outline: none;
        vertical-align: top
    }

    .fancybox-wrap {
        position: absolute;
        top: 0;
        left: 0;
        z-index: 8020
    }

    .fancybox-skin {
        position: relative;
        background: #f9f9f9;
        color: #444;
        text-shadow: none;
        -webkit-border-radius: 4px;
        -moz-border-radius: 4px;
        border-radius: 4px
    }

    .fancybox-opened {
        z-index: 8030
    }

    .fancybox-opened .fancybox-skin {
        -webkit-box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5);
        -moz-box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5)
    }

    .fancybox-outer, .fancybox-inner {
        position: relative
    }

    .fancybox-inner {
        overflow: hidden
    }

    .fancybox-type-iframe .fancybox-inner {
        -webkit-overflow-scrolling: touch
    }

    .fancybox-error {
        color: #444;
        font: 14px/20px "Helvetica Neue", Helvetica, Arial, sans-serif;
        margin: 0;
        padding: 15px;
        white-space: nowrap
    }

    .fancybox-image, .fancybox-iframe {
        display: block;
        width: 100%;
        height: 100%
    }

    .fancybox-image {
        max-width: 100%;
        max-height: 100%
    }

    #fancybox-loading, .fancybox-close, .fancybox-prev span, .fancybox-next span {
        background-image: url("/js/vendor/fancybox/fancybox_sprite.png")
    }

    #fancybox-loading {
        position: fixed;
        top: 50%;
        left: 50%;
        margin-top: -22px;
        margin-left: -22px;
        background-position: 0 -108px;
        opacity: 0.8;
        cursor: pointer;
        z-index: 8060
    }

    #fancybox-loading div {
        width: 44px;
        height: 44px;
        background: url("/js/vendor/fancybox/fancybox_loading.gif") center center no-repeat
    }

    .fancybox-close {
        position: absolute;
        top: -18px;
        right: -18px;
        width: 36px;
        height: 36px;
        cursor: pointer;
        z-index: 8040
    }

    .fancybox-nav {
        position: absolute;
        top: 0;
        width: 40%;
        height: 100%;
        cursor: pointer;
        text-decoration: none;
        background: transparent url("/js/vendor/fancybox/blank.gif");
        -webkit-tap-highlight-color: transparent;
        z-index: 8040
    }

    .fancybox-prev {
        left: 0
    }

    .fancybox-next {
        right: 0
    }

    .fancybox-nav span {
        position: absolute;
        top: 50%;
        width: 36px;
        height: 34px;
        margin-top: -18px;
        cursor: pointer;
        z-index: 8040;
        visibility: hidden
    }

    .fancybox-prev span {
        left: 10px;
        background-position: 0 -36px
    }

    .fancybox-next span {
        right: 10px;
        background-position: 0 -72px
    }

    .fancybox-nav:hover span {
        visibility: visible
    }

    .fancybox-tmp {
        position: absolute;
        top: -99999px;
        left: -99999px;
        visibility: hidden;
        max-width: 99999px;
        max-height: 99999px;
        overflow: visible !important
    }

    .fancybox-lock {
        overflow: hidden !important;
        width: auto
    }

    .fancybox-lock body {
        overflow: hidden !important
    }

    .fancybox-lock-test {
        overflow-y: hidden !important
    }

    .fancybox-overlay {
        position: absolute;
        top: 0;
        left: 0;
        overflow: hidden;
        display: none;
        z-index: 8010;
        background: url("/js/vendor/fancybox/fancybox_overlay.png")
    }

    .fancybox-overlay-fixed {
        position: fixed;
        bottom: 0;
        right: 0
    }

    .fancybox-lock .fancybox-overlay {
        overflow: auto;
        overflow-y: scroll
    }

    .fancybox-title {
        visibility: hidden;
        font: normal 13px/20px "Helvetica Neue", Helvetica, Arial, sans-serif;
        position: relative;
        text-shadow: none;
        z-index: 8050
    }

    .fancybox-opened .fancybox-title {
        visibility: visible
    }

    .fancybox-title-float-wrap {
        position: absolute;
        bottom: 0;
        right: 50%;
        margin-bottom: -35px;
        z-index: 8050;
        text-align: center
    }

    .fancybox-title-float-wrap .child {
        display: inline-block;
        margin-right: -100%;
        padding: 2px 20px;
        background: transparent;
        background: rgba(0, 0, 0, 0.8);
        -webkit-border-radius: 15px;
        -moz-border-radius: 15px;
        border-radius: 15px;
        text-shadow: 0 1px 2px #222;
        color: #FFF;
        font-weight: bold;
        line-height: 24px;
        white-space: nowrap
    }

    .fancybox-title-outside-wrap {
        position: relative;
        margin-top: 10px;
        color: #fff
    }

    .fancybox-title-inside-wrap {
        padding-top: 10px
    }

    .fancybox-title-over-wrap {
        position: absolute;
        bottom: 0;
        left: 0;
        color: #fff;
        padding: 10px;
        background: #000;
        background: rgba(0, 0, 0, 0.8)
    }

    @media only screen and (-webkit-min-device-pixel-ratio: 1.5), only screen and (min--moz-device-pixel-ratio: 1.5), only screen and (min-device-pixel-ratio: 1.5) {
        #fancybox-loading, .fancybox-close, .fancybox-prev span, .fancybox-next span {
            background-image: url("/js/vendor/fancybox/fancybox_sprite@2x.png");
            background-size: 44px 152px
        }

        #fancybox-loading div {
            background-image: url("/js/vendor/fancybox/fancybox_loading@2x.gif");
            background-size: 24px 24px
        }
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

    .lidform {
        background: #984b99 url(/img/form_bg.jpg) repeat-x top;
        height: 470px;
        width: 600px;
        box-sizing: border-box;
        padding: 0 40px;
        margin: 0 auto;
        overflow: hidden;
        border-radius: 15px;
        font-family: arial;
    }

    .lidform .line-form {
        text-align: center;
    }

    .lidform .line-form:after {
        content: '';
        clear: both;
        display: block;
    }

    .exclusive-img {
        margin: 10px 0 5px 0;
    }

    .lidform-heading {
        font-size: 25px;
        color: #000000;
        line-height: 24px;

    }

    .lidform-underheading {
        font-size: 19px;
        margin-top: 4px;
        margin-bottom: 0;
        color: #777;
    }

    .input-block {
        width: 235px;
        text-align: left;
        margin-top: 5px;
        margin-bottom: 24px;
    }

    .input-block input {
        width: 100%;
        line-height: 50px;
        display: block;
        box-sizing: border-box;
        padding: 0 10px;
        background: #ffffff;
        border: 1px solid #aaa;
    }

    .input-block label {
        font-size: 14px;
    }

    .input-block.ib1 {
        float: left;
    }

    .input-block.ib2 {
        float: right;
    }

    .lidform input[type="submit"] {
        text-decoration: none;
        font-size: 24px;
        color: #fff;
        line-height: 48px;
        display: inline-block;
        width: 247px;
        background: #00a800;
        box-shadow: -2px 2px 25px #000;
        border: none;
        cursor: pointer;
        transition: .1s;
    }

    .lidform input[type="submit"]:hover {
        background: #00ce00;
    }

    .icon-line-form .lidform-icon {
        box-sizing: border-box;
        float: left;
        padding-right: 0;
        color: #5f5f5f;
        font-size: 15px;
    }

    .lidform-undertext {
        margin-bottom: 20px;
        padding-left: 18px;
        font-size: 13px;
        background: url(/img/check.png) no-repeat left;
        display: inline-block;
        margin: 20px 0;
        color: #9d9d9d;
    }

    .icon-line-form .lidform-icon img {
        float: left;
        margin-right: 10px;
    }

    .icon-line-form .lidform-icon:nth-child(1) {
        width: 215px;
    }

    .icon-line-form .lidform-icon:nth-child(2) {
        width: 190px;
    }

    .icon-line-form .lidform-icon:nth-child(3) {
        width: 110px;
    }

    .section-hidden {
        display: none;
    }

    .fancybox-skin {
        position: relative;
        background: #f9f9f9;
        color: #444;
        text-shadow: none;
        -webkit-border-radius: 4px;
        -moz-border-radius: 4px;
        border-radius: 18px;
    }

</style>

<section class="section-hidden" id="hidden-subscribe">
    <form method="POST" class="lidform" id="lidform_unisender" action="/">
        <div class="line-form">
            <img src="/assets/img/exclusive.png" alt="" class="exclusive-img">
        </div>
        <div class="line-form">
            <div class="lidform-heading">Подпишись! Дополнительные спец. предложения только для клиентов Kartina-Rus.</div>
        </div>
        <div class="line-form">
            <div class="input-block ib1">
                <label>Ваше имя:</label>
                <input type="text" name="lidform_name" required="required" style="background: #fff" value="">
            </div>
            <div class="input-block ib2">
                <label>Ваше E-mail:</label>
                <input type="email" name="lidform_email" required="required" style="background: #fff" value="">
            </div>
        </div>
        <div class="line-form" style="margin-bottom: 12px;">
            <input type="submit" value="Получить доступ" name="lidform_submit">
            <input type="hidden" name="lidform_ip" value="<?=\Yii::$app->request->userIP?>">
        </div>
        <div class="line-form">
            <div class="lidform-undertext">Я соглашаюсь получать бесплатную рассылку от Kartina-Rus</div>
        </div>
        <div class="icon-line-form">
            <div class="lidform-icon">
                <img src="/assets/img/utp-icon1.png" alt="">
                <span>Быстрая доставка<br/>по всей России</span>
            </div>
            <div class="lidform-icon">
                <img src="/assets/img/utp-icon2.png" alt="">
                <span>Оплата<br/>после проверки</span>
            </div>
            <div class="lidform-icon">
                <img src="/assets/img/utp-icon3.png" alt="">
                <span>Гарантия<br/>1 год</span>
            </div>
        </div>
    </form>
</section>

<?php
$this->registerJs(<<<JS
    $(document).ready(function () {
        
        
        var subscriptionOk = $.cookie('subscriptionOk');
        
        if(subscriptionOk == null){
            $.fancybox({type: 'inline', href: '#lidform_unisender', padding: 0});
            $.cookie('subscriptionShown', '1', {expires: 365, path: '/' });
        }
        
        
        
        
        
          $( ".lidform" ).submit(function( event ) {
              event.preventDefault();
              var data = $(this).serialize();
              
              $.ajax({
               type: "POST",
               url: "/ajax_subscribe.php",
               data: data,
               //padding: 0,
               success: function (msg) { 
                
                //$.fancybox.close();
                 $.fancybox({content: msg});
            
                 //Устанавливаем куку что пользователь подписался
                    $.cookie('subscriptionOk', '1', {expires: 365, path: '/' });
               }  
              });
             });
        
        
    });
JS
); ?>