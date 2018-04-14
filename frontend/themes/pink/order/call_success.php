<h1>ЗАЯВКА ОСТАВЛЕНА</h1>
<p>В ближайшее время с вами свяжется менеджер для оформления заказа</p>
<p>В рабочее время менеджеры свяжутся с вами в течении 30 минут после оставления заказа! Если вы оставили заказ в не рабочее время - с вами свяжутся с 10:00 до 12:00</p>

<?php $this->beginBlock('track'); ?>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-86979120-1', 'auto');
    ga('send', 'pageview');

    ga('send', 'event', 'ZVONOK','OBR_ZVONOK');
</script>
<script type="text/javascript">
	//Отправка в заказы RetailCRM
    (function(_,r,e,t,a,i,l){_['retailCRMObject']=a;_[a]=_[a]||function(){(_[a].q=_[a].q||[]).push(arguments)};_[a].l=1*new Date();l=r.getElementsByTagName(e)[0];i=r.createElement(e);i.async=!0;i.src=t;l.parentNode.insertBefore(i,l)})(window,document,'script','https://collector.retailcrm.pro/w.js','_rc');

    _rc('create', 'RC-92478486493-2', {
    });

    var phone = "<? echo $model->client_tel ?>";

    _rc('send', 'order', {
    	'name': '*',
    	'phone': phone,
    	'orderMethod': 'callback'
	});

</script>
<?php $this->endBlock(); ?>