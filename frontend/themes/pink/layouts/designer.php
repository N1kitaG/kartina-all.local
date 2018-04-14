<?php
/* @var $this \yii\web\View */
/* @var $content string */


use frontend\themes\pink\assets\PinkAsset;
use yii\bootstrap\Html;

PinkAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!doctype html>
    <html class="no-js" lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <?= Html::csrfMetaTags() ?>
        <?php $this->head() ?>
        <title>Заявка отправленна</title>
        <style>
            .order-form {

                padding: 14px 20px 14px 20px;

                margin: 16px 0 0;
                border: none;
                background: red;
                text-shadow: 1px 1px 0 rgba(0,0,0,0.2);
                color: #fff;
                text-transform: uppercase;
                font: bold 28px 'PT Sans Narrow', Arial, Helvetica, sans-serif;
                cursor: pointer;
                box-shadow: 0 3px 3px 0 rgba(0,0,0,0.5);
                text-decoration:none;
            }

            .order-form:hover{


                background: red;
                box-shadow: 0 2px 2px 0 rgba(0,0,0,0.5);
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
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        (function (d, w, c) {
            (w[c] = w[c] || []).push(function () {
                try {
                    w.yaCounter29748944 = new Ya.Metrika({
                        id:29748944,
                        webvisor: true,
                        clickmap: true,
                        trackLinks: true,
                        accurateTrackBounce: true
                    });
                } catch (e) {
                }
            });


            var n = d.getElementsByTagName("script")[0],
                s = d.createElement("script"),
                f = function () {
                    n.parentNode.insertBefore(s, n);
                };
            s.type = "text/javascript";
            s.async = true;
            s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";


            if (w.opera == "[object Opera]") {
                d.addEventListener("DOMContentLoaded", f, false);
            } else {
                f();
            }
        })(document, window, "yandex_metrika_callbacks");
    </script>
    <noscript>
        <div><img src="//mc.yandex.ru/watch/29748944" style="position:absolute; left:-9999px;" alt=""/></div>
    </noscript>
    <!-- /Yandex.Metrika counter -->
    <?=$this->render('/partials/_counters');?>
    <?php if (isset($this->blocks['track'])): ?>
        <?=$this->blocks['track']; ?>
    <?php endif;?>
    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>
