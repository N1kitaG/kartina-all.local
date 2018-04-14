<style>
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
            <div class="lidform-heading">Подпишись! Будь в курсе всех акций и скидок от Kartina-Rus.</div>
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
        <div class="line-form" style="margin-bottom: 32px">
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
        
        var subscriptionFirstVisit = $.cookie('subscriptionFirstVisit');
        
          // проверяем куку со временм первого визита
        if (subscriptionFirstVisit == null) {      // если куки нет
            subscriptionFirstVisit = new Date().getTime();
            $.cookie('subscriptionFirstVisit', subscriptionFirstVisit,{expires: 365, path: '/' }); // устанавливаем куку на всю сессию
        }
        
        console.log($.cookie('subscriptionFirstVisit'));
        
        
        $('html').on('mouseleave',function(){
            
            console.log('sub_mouse');
            
            var subscriptionShown = $.cookie('subscriptionShown');
            var subscriptionOk = $.cookie('subscriptionOk');
            var subscriptionFirstVisit = $.cookie('subscriptionFirstVisit');
            var curTime = new Date().getTime();
            
            //console.log(((curTime  - subscriptionFirstVisit) > (4 * 60 * 1000)));
            //console.log(curTime);
            //console.log(subscriptionFirstVisit);
            //console.log(4 * 60 * 1000);
            
            
            
            if(subscriptionShown == null && subscriptionOk == null && ((curTime  - subscriptionFirstVisit) > (4 * 60 * 1000)) && $.fancybox.isOpen == false){
                
                console.log('sub_show');
                
                $.fancybox({type: 'inline', href: '#lidform_unisender', padding: 0});
                $.cookie('subscriptionShown', '1', {expires: 365, path: '/' });
                
                
                $( ".lidform" ).submit(function( event ) {
                  event.preventDefault();
                  var data = $(this).serialize();
                  
                  $.ajax({
                   type: "POST",
                   url: "/ajax_subscribe2.php",
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
            }
        });
    });
JS
); ?>