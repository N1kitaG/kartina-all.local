<?php
use yii\widgets\ListView;
?>
<?php $this->beginBlock('track'); ?>

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-86979120-1', 'auto');
        ga('send', 'pageview');
    </script>

<?php $this->endBlock(); ?>

<?= ListView::widget([
    'dataProvider' => $dataProvider,
    'itemView' => '/site/_list',
    'itemOptions' => [
        'tag' => 'div',
        'class' => 'catalog-item',
    ],
    'pager' => [
        'class' => 'frontend\themes\pink\components\UpsidePinkPagination',
    ],
    'layout' => "<div class=\"catalog-items clearfix\">{items}</div>\n<div class=\"pink-pagination\">{pager}</div>",
])?>