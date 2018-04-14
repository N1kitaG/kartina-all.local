<?php
/**
 * @var $model common\models\Order
 */
use yii\bootstrap\ActiveForm;
use yii\bootstrap\Html;
use yii\helpers\Url;
use yii\widgets\MaskedInput;
use yii\widgets\Pjax;

?>

<div  style="text-align: center; margin: 0 auto; width:600px;  border: 1px solid #e4e4e4; padding: 0 20px 0 20px;">
    <h1 style="background: #94fd7c; width:300px; padding:10px; margin: 20px auto;" align="center">Заказ оформлен</h1>
    <div style="margin: 0 auto;">
        <p style="font-size:22px;">
            В ближайшее время с вами свяжется менеджер <br>
            для уточнения заказа<br><br>
            <span style="font-size:28px;">Вы указали номер: <b><?= $model->client_tel?></b> </span>
        </p>
        <?php Pjax::begin(['enablePushState' => false])?>
        <div id="block_idd" style="display: block;">
            <!--<a href="#" id="resend" style="font-size:22px;">Я хочу указать другой номер телефона</a>-->
            <div style="display: none;" class="clearfix" id="resend-form">
                <?php $form = ActiveForm::begin(['fieldConfig' => ['template' => '{label}{input}']]); ?>
                <?= $form->field($model,'product_id')->hiddenInput()->label(false); ?>
                <?= $form->field($model,'client_name')->hiddenInput()->label(false); ?>
                <?= $form->field($model,'client_comment')->hiddenInput()->label(false); ?>
                <?= $form->field($model,'client_time')->hiddenInput()->label(false); ?>
                <div style="float: left; margin-left: 89px; position: relative; margin-right: -89px; margin-top: 7px;">
                    <?= $form->field($model,'client_tel')->widget(MaskedInput::className(),['name' => 'phone', 'mask' => '+7(999)9999999'])->textInput(['style'=>'width:280px; height:30px; font-size:22px; padding-left:5px;','placeholder'=>'Введите номер телефона'])->label(false)?>
                </div>
                <?= Html::submitButton('Отправить',['style'=>'margin-left:15px; padding:10px; background: #01bb12; color:#fff; box-shadow: 0 3px 3px 0 rgba(0,0,0,0.5); font-size:18px; cursor:pointer;'])?>
                <?php ActiveForm::end();?>
            </div>
        </div>
        <?php Pjax::end()?>

        <p style="font-size:20px; border: 1px solid #e4e4e4; padding:10px; box-shadow: 0 3px 3px 0 rgba(0,0,0,0.5); background: #fefdc6; margin-bottom: 40px;">
            В рабочее время менеджеры свяжутся с вами в течение 30 минут. <br><br>
            Если вы оставили заказ в не рабочее
            время - с вами свяжутся с 09:00 до 12:00 (по Москве)</p>
    </div>
    <a href="<?= Url::home()?>" class="order-form">← Вернуться на сайт </a><br><br>
    <div style="font-size: 2rem;  text-align: center;">
        Есть вопросы? Звоните: <br>
        8 800 707-53-59 <br>
        <span style="font-size:14px">(с 09:00 до 21:00 по Москве)</span> <br>
        <span style="font-size:14px"> Бесплатный звонок по России </span>
    </div>
    <br>
</div>

<?php $this->beginBlock('track'); ?>
    <?php
        $output = '';

        $all_get = Yii::$app->request->cookies->getValue('utm_allget', '-');

        parse_str($all_get, $output);

        $deduplication = isset($output['utm_source'])?$output['utm_source']:'-';

        $ab_price = $model->product->price;


    ?>

<script type="text/javascript">

    fbq('track', 'Purchase');

    window.criteo_q = window.criteo_q || [];
    window.criteo_q.push(
        { event: "setAccount", account: 27568 },
        { event: "setSiteType", type: "d" },
        { event: "trackTransaction",
            id: "<?=$model->trans;?>",
            deduplication: <?= $deduplication=='criteo'?1:0;?>,
            item: [{ id: "<?=$model->product->id?>", price: <?=$ab_price?>, quantity: 1 }]});


    dataLayer.push({
        'ecommerce': {
            'purchase': {
                'actionField': {
                    'id': '<?=$model->trans;?>',
                    'affiliation': 'kartina-rus.ru',
                    'revenue': '<?=$ab_price?>'
                },
                'products': [{
                    'name': '<?=$model->product->title?>',
                    'id': '<?=$model->product->id?>',
                    'price': '<?=$ab_price?>',
                    'quantity': 1
                }]
            }
        }
    });



    setTimeout(function () {roistatGoal.reach();}, 2000);

</script>

<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-86979120-1', 'auto');
    ga('send', 'pageview');
    ga('set', 'dimension2','purchase');

    ga('send', 'event', 'ORDER','ORDER_KARTINA');
</script>

<!-- Rating@Mail.ru counter -->
<script type="text/javascript">
    var _tmr = window._tmr || (window._tmr = []);
    _tmr.push({id: "2849959", type: "pageView", start: (new Date()).getTime()});
    (function (d, w, id) {
        if (d.getElementById(id)) return;
        var ts = d.createElement("script"); ts.type = "text/javascript"; ts.async = true; ts.id = id;
        ts.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//top-fwz1.mail.ru/js/code.js";
        var f = function () {var s = d.getElementsByTagName("script")[0]; s.parentNode.insertBefore(ts, s);};
        if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); }
    })(document, window, "topmailru-code");
</script><noscript><div style="position:absolute;left:-10000px;">
        <img src="//top-fwz1.mail.ru/counter?id=2849959;js=na" style="border:0;" height="1" width="1" alt="Рейтинг@Mail.ru" />
    </div></noscript>
<!-- //Rating@Mail.ru counter -->

<script type="text/javascript">
    //Отправка в заказы RetailCRM
    (function(_,r,e,t,a,i,l){_['retailCRMObject']=a;_[a]=_[a]||function(){(_[a].q=_[a].q||[]).push(arguments)};_[a].l=1*new Date();l=r.getElementsByTagName(e)[0];i=r.createElement(e);i.async=!0;i.src=t;l.parentNode.insertBefore(i,l)})(window,document,'script','https://collector.retailcrm.pro/w.js','_rc');

    _rc('create', 'RC-92478486493-2', {
    });

    var name = "<? echo $model->client_name ?>";
    var phone = "<? echo $model->client_tel ?>";
    var comment = "<? echo $model->client_comment ?>";
    var product_id = "s-" + "<? echo $model->product_id ?>";


    _rc('send', 'order', {
        'name': name,
        'phone': phone,
        'customerComment': comment,
        'itemId': product_id,
        'orderMethod': 'one-click'
    });

</script>

<?php $this->endBlock(); ?>
