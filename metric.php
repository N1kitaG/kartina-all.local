<!------------------------------------------Счётчики-------------------------------------------------->
<script type="text/javascript" src="//static.criteo.net/js/ld/ld.js" async="true"></script>

<script type="text/javascript" async="true">
    function criteobasket(p_id,p_price){
        window.criteo_q = window.criteo_q || [];
        window.criteo_q.push(
            { event: "setAccount", account: 27568 },
            { event: "setSiteType", type: "d" },
            { event: "viewBasket", item: [
                { id: p_id, price: p_price, quantity: 1 }
            ]});
    }
</script>


<!-- roistat_visit -->
<script>
    (function(w, d, s, h, id) {
        w.roistatProjectId = id; w.roistatHost = h;
        var p = d.location.protocol == "https:" ? "https://" : "http://";
        var u = /^.*roistat_visit=[^;]+(.*)?$/.test(d.cookie) ? "/dist/module.js" : "/api/site/1.0/"+id+"/init";
        var js = d.createElement(s); js.async = 1; js.src = p+h+u; var js2 = d.getElementsByTagName(s)[0]; js2.parentNode.insertBefore(js, js2);
    })(window, document, 'script', 'cloud.roistat.com', '8541');
</script>
<!-- /roistat_visit -->

<!-- GoogleAnalyticsObject -->
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-70756903-1', 'auto', {'allowLinker': true});
    ga('require', 'linker');
    ga('linker:autoLink', ['ml.kartina-rus.ru', 'kartini-rus.ru'] );
    ga('set', 'dimension2','home');
    ga('send', 'pageview');
</script>
<!-- /GoogleAnalyticsObject -->

<!-- googleadservices conversion-->
<script type="text/javascript">
    /* <![CDATA[ */
    var google_conversion_id = 946445015;
    var google_custom_params = window.google_tag_params;
    var google_remarketing_only = true;
    /* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
    <div style="display:inline;">
        <img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/946445015/?value=0&amp;guid=ON&amp;script=0"/>
    </div>
</noscript>
<!-- /googleadservices conversion -->

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-XXXX');</script>
<!-- End Google Tag Manager -->

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    window.dataLayer = window.dataLayer || [];
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter25515350 = new Ya.Metrika({id:25515350,
                    webvisor:true,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    ecommerce:"dataLayer"});
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/25515350" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<!-- Rating@Mail.ru counter -->
<script type="text/javascript">
    var _tmr = window._tmr || (window._tmr = []);
    _tmr.push({id: "2718514", type: "pageView", start: (new Date()).getTime()});
    (function (d, w, id) {
        if (d.getElementById(id)) return;
        var ts = d.createElement("script"); ts.type = "text/javascript"; ts.async = true; ts.id = id;
        ts.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//top-fwz1.mail.ru/js/code.js";
        var f = function () {var s = d.getElementsByTagName("script")[0]; s.parentNode.insertBefore(ts, s);};
        if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); }
    })(document, window, "topmailru-code");
</script>
<!-- /Rating@Mail.ru counter -->

<!-- Facebook Pixel Code  код Артемия-->
<script>
    !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
        n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
        document,'script','https://connect.facebook.net/en_US/fbevents.js');

    fbq('init', '242367762784033');
    fbq('track', "PageView");
    fbq('trackCustom', 'OPEN_SITE');
</script>
<noscript><img height="1" width="1" style="display:none" alt="" src="https://www.facebook.com/tr?id=242367762784033&ev=PageView&noscript=1"/></noscript>
<!-- End Facebook Pixel Code -->

<!--<script type="text/javascript" src="http://consultsystems.ru/script/20284/" charset="utf-8"></script>-->

<!------------------------------------------//Счётчики-------------------------------------------------->





<!--Цели заказ-->
yaCounter25515350.reachGoal('click_order');

<!--Цели картина-->
yaCounter25515350.reachGoal('click_order');
ga('send', 'event', 'button', 'click_order');


<!--Трекинг событий-->



criteobasket(359,2990);



//Добавление в карзину
<script type="text/javascript">
    window.criteo_q = window.criteo_q || [];
    window.criteo_q.push(
        { event: "setAccount", account: 27568 },
        { event: "setHashedEmail", email: "Хэшированный адрес эл. почты (MD5)" },
        { event: "setSiteType", type: "m для мобильного сайта, t для планшетного или d для классического" },
        { event: "viewBasket", item: [
            { id: "ID первого продукта", price: Цена первого продукта, quantity: Количество первого продукта },
            { id: "ID второго продукта", price: Цена второго продукта , quantity: Количество второго продукта }
            /* для каждого последующего продукта добавляем дополнительную строку */
        ]});

    dataLayer.push({
        "ecommerce": {
            "add": {
                "products": [
                    {
                        "id": "43521",
                        "name": "Сумка Яндекс",
                        "price": 654.32,
                        "brand": "Яндекс / Яndex",
                        "category": "Аксессуары/Сумки",
                        "quantity": 2
                    }
                ]
            }
        }
    });


</script>

//Удаление из карзины

<script>
    dataLayer.push({
        "ecommerce": {
            "remove": {
                "products": [
                    {
                        "id": "15243",
                        "name": "Набор протирашек для экрана телефона - Яндекс",
                        "category": "Аксессуары для мобильного телефона"
                    }
                ]
            }
        }
    });
</script>




