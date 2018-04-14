<?php
/**
 * @var $model common\models\Designer
 *
 *
 */
?>
<div class="product"></div>
<div style="text-align: center; width:600px;  border: 1px solid #e4e4e4; padding: 0 20px 0 20px;">
    <h1 style="background: #94fd7c; width:300px; padding:10px;"  align="center">Ваша заявка передана дизайнеру</h1>
    <div style="text-align: center;" >
        <p style="font-size:22px;">
            В ближайшее время с вами свяжется дизайнер <br>
            и бесплатно поможет вам подобрать картину<br><br>
            <span style="font-size:28px;">Вы указали E-mail: <b><?=$model->email?> </b> </span>
        <div id="block_id" style="display: none;">
            <form id="form_1" method="post" action="/order/designer/">
                <input type="text" name="email" id="id-2" style="width:280px; height:30px; font-size:22px; padding-left:5px;" placeholder="Введите E-Mail">
                <input type="submit" value="Отправить" name="Send" style="margin-left:15px; padding:10px; background: #01bb12; color:#fff; box-shadow: 0 3px 3px 0 rgba(0,0,0,0.5); font-size:18px; cursor:pointer;">
            </form>
        </div>
        <div id="block_idd" style="display: block;">
            <a href="#" id="showForm" style="font-size:22px;">Я хочу указать другой E-mail</a>
        </div>
        </p>
    </div>
    <br>
    <a href="/" class="order-form">&larr; Вернуться на сайт </a><br><br>
    <div style="font-size: 2rem;  text-align: center;">Есть вопросы? Звоните: <br> 8 800 707-53-93 <br> <span style="font-size:14px">(с 09:00 до 21:00 по Москве)</span> <br> <span style="font-size:14px"> Бесплатный звонок по России </span>  </div>
    <br>
</div>
<?php $this->beginBlock('track'); ?>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-86979120-1', 'auto');
        ga('send', 'pageview');

        ga('send', 'event', 'DEZINER','VIZOV_DEZINER');
    </script>
<script type="text/javascript">
    //Отправка в заказы RetailCRM
    (function(_,r,e,t,a,i,l){_['retailCRMObject']=a;_[a]=_[a]||function(){(_[a].q=_[a].q||[]).push(arguments)};_[a].l=1*new Date();l=r.getElementsByTagName(e)[0];i=r.createElement(e);i.async=!0;i.src=t;l.parentNode.insertBefore(i,l)})(window,document,'script','https://collector.retailcrm.pro/w.js','_rc');

    _rc('create', 'RC-92478486493-2', {
    });

    var name = "<? echo $model->name ?>";
    var phone = "<? echo $model->phone ?>";
    var email = "<? echo $model->email ?>";
    var comment = "<? echo $model->comment ?>";


    _rc('send', 'order', {
        'name': name,
        'phone': phone,
        'email': email,
        'customerComment': comment,
        'orderMethod': 'designer'
    });

</script>
<?php $this->endBlock(); ?>
