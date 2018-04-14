<?php
/**
 * @var $model Category
 * @var $products yii\data\ActiveDataProvider
 *
 *
 */

use common\models\Category;
use yii\helpers\Url;
use yii\widgets\ListView;
use \yii\helpers\Html;

$this->title = $model->meta_title;

$this->params['category'] = $model->slug;

$this->params['category_id'] = $model->id;

$this->registerMetaTag([
    'name' => 'description',
    'content' => $model->meta_description
]);

$this->registerMetaTag([
    'name' => 'keywords',
    'content' => $model->meta_keywords
]);

$currentPage = Yii::$app->request->get('page');

$nextPage = $currentPage + 1;

$prevPage = $currentPage - 1;

$countPages = ceil($products->totalCount / $products->pagination->pageSize);

switch ($model->parent_id){
    case 77:
        $sl = 'modulnye-kartiny/' . $model->slug;
        $this->registerLinkTag([
            'rel' => 'canonical',
            'href' => Url::to(['/category/seoview', 'slug' => $sl], true)
        ]);
        break;

    case 76:
        $sl = 'vse-posteri/' . $model->slug;
        $this->registerLinkTag([
            'rel' => 'canonical',
            'href' => Url::to(['/category/seoview', 'slug' => $sl], true)
        ]);
        break;

    case 23:
        $sl = 'smotret-vse-reproduqtcii/' . $model->slug;
        $this->registerLinkTag([
            'rel' => 'canonical',
            'href' => Url::to(['/category/seoview', 'slug' => $sl], true)
        ]);
        break;
}

if ($prevPage >= 0) {
    $this->registerLinkTag([
        'rel' => 'prev',
        'href' => Url::current(['page' => $prevPage], true)
    ]);
}

if ($nextPage <= $countPages) {
    $this->registerLinkTag([
        'rel' => 'next',
        'href' => Url::current(['page' => $nextPage], true)
    ]);
}

if ($currentPage>0) {

    if($model->parent_id == 0) {
        $sl = $model->slug;
    }else{
        $sl = 'modulnye-kartiny/' . $model->slug;
    }

    $this->registerLinkTag([
        'rel' => 'canonical',
        'href' => Url::to(['/category/seoview', 'slug' => $sl], true)
    ]);

    $this->params['breadcrumbs'][] = [
        'url' => Url::to(['/category/seoview', 'slug' => $sl]),
        'label' => $model->title,
    ];

    $this->params['breadcrumbs'][] = 'Страница '.$currentPage;
    $h1  = $model->title .' страница '.$currentPage;

}else{
    $this->params['breadcrumbs'][] = $model->title;
    $h1  = $model->title;
}

?>
<h1 id="tovar"><?=$h1?></h1>
<p>Сортировать по:</p>
<?= Html::beginForm(); ?>
<?= Html::radioList('sort', $sort, ['order' => 'Рейтингу', 'price' => 'Цене'], ['class' => 'order-change']); ?>
<?= Html::endForm(); ?>
<div class="category-excerpt">
    <?=$model->excerpt; ?>
</div>
<?= ListView::widget([
    'dataProvider' => $products,
    'itemView' => '_list',
    'itemOptions' => [
        'tag' => 'div',
        'class' => 'catalog-item',
    ],
    'pager' => [
        'class' => 'frontend\themes\pink\components\UpsidePinkPagination',
    ],
    'layout' => "<div class=\"catalog-items clearfix\">{items}</div>\n<div class=\"pink-pagination\">{pager}</div>",
]) ?>
<?php if ($model->content): ?>
    <div id="content">
        <?= $model->content; ?>
    </div>
<?php endif; ?>

<?php $pop_products = '"' . implode('","', $model->getCategoryProducts()->select('id')->orderBy('order')->limit(3)->column()) . '"'; ?>

<?php $this->beginBlock('track'); ?>
<script type="text/javascript">
    window.criteo_q = window.criteo_q || [];
    window.criteo_q.push(
        {event: "setAccount", account: 27568},
        {event: "setSiteType", type: "d"},
        {event: "viewList", item: [<?=$pop_products?>]}
    );
</script>

<?php
$pr = [];
foreach ($products->getModels() as $prr) {
    $pr[] = $prr->id;
}
$pr = implode(',', $pr);
?>
<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-86979120-1', 'auto');
    ga('send', 'pageview');
    ga('set', 'dimension1', '<?=$pr?>');
    ga('set', 'dimension2', 'product');
</script>
<?php $this->endBlock(); ?>
