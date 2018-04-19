<?php
/**
 * Шаблон главной страницы
 *
 * @var $model common\models\Page
 * @var $show_categories common\models\Category[]
 * @var $hide_categories common\models\Category[]
 * @var $productsDataProvider yii\data\ActiveDataProvider
 * @var $this yii\web\View
 */

use common\helpers\UImage;
use common\models\Category;
//use common\models\Product;
use frontend\themes\pink\assets\PinkAsset;
use yii\db\Expression;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ListView;

$this->registerMetaTag([
    'name' => 'description',
    'content' => $model->meta_description
]);

$this->registerMetaTag([
    'name' => 'keywords',
    'content' => $model->meta_keywords
]);


$this->title = $model->title;
$this->params['breadcrumbs'][] = $this->title;

$bundle = PinkAsset::register($this);

$this->theme->setBaseUrl($bundle->baseUrl);

$isHome = ((Yii::$app->controller->id === Yii::$app->defaultRoute) && (Yii::$app->controller->action->id === Yii::$app->controller->defaultAction)) ? true : false;

$currentPage = Yii::$app->request->get('page');

$nextPage = $currentPage + 1;

$prevPage = $currentPage - 1;

$countPages = ceil($productsDataProvider->totalCount / $productsDataProvider->pagination->pageSize);

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
    $this->registerLinkTag([
        'rel' => 'canonical',
        'href' => Url::home(true)
    ]);
}

?>
<h2 class="page-title">Модульные картины</h2>
<div class="categories-items clearfix">
    <?php foreach ($show_categories as $show_category): ?>
        <div class="category-item">

                <?php
                switch ($show_category->id) {
                    case 1:
                        $img = '/img2/446/530.jpg';
                        $url = Url::to(['/category/seoview', 'slug' => 'modulnye-kartiny/' . $show_category->slug]);
                        break;
                    case 2:
                        $img = '/img2/446/598.jpg';
                        $url = Url::to(['/category/seoview', 'slug' => 'modulnye-kartiny/' . $show_category->slug]);
                        break;
                    case 4:
                        $img = '/img2/446/207.jpg';
                        $url = Url::to(['/category/seoview', 'slug' => 'modulnye-kartiny/' . $show_category->slug]);
                        break;
                    case 5:
                        $img = '/img2/446/402.jpg';
                        $url = Url::to(['/category/seoview', 'slug' => 'modulnye-kartiny/' . $show_category->slug]);
                        break;
                    case 8:
                        $img = '/img2/446/329.jpg';
                        $url = Url::to(['/category/seoview', 'slug' => 'modulnye-kartiny/' . $show_category->slug]);
                        break;
                    case 10:
                        $img = '/img2/446/562.jpg';
                        $url = Url::to(['/category/seoview', 'slug' => 'modulnye-kartiny/' . $show_category->slug]);
                        break;
                    case 47:
                        $img = '/img2/446/3076.jpg';
                        $url = Url::to(['/category/seoview', 'slug' => 'modulnye-kartiny/' . $show_category->slug]);
                        break;
                    case 13:
                        $img = '/img2/446/1467.jpg';
                        $url = Url::to(['/category/seoview', 'slug' => 'modulnye-kartiny/' . $show_category->slug]);
                        break;
                    case 511:
                        $img = '/img2/skret-v-kosmose.png';
                        $url = Url::to(['/category/seoview', 'slug' => $show_category->slug]);
                        break;
                    case 512:
                        $img = '/img2/vertical.jpg';
                        $url = Url::to(['/category/seoview', 'slug' => $show_category->slug]);
                        break;
                    case 248:
                        $img = '/img2/cafe.jpg';
                        $url = Url::to(['/category/seoview', 'slug' => $show_category->slug]);
                        break;
                    case 249:
                        $img = '/img2/hotel.jpg';
                        $url = Url::to(['/category/seoview', 'slug' => $show_category->slug]);
                        break;
                    case 250:
                        $img = '/img2/office.jpg';
                        $url = Url::to(['/category/seoview', 'slug' => $show_category->slug]);
                        break;
                    default:
                        $img = '/img2/446/207.jpg';
                        break;
                }
                ?>
            <a href="<?= $url ?>">
                <?= Html::img($img, ['alt' => $show_category->title]) ?>
                <span><?= $show_category->title ?></span>
            </a>
        </div>
    <?php endforeach; ?>
</div>

<h2 class="page-title">Все картины</h2>
<?= ListView::widget([
    'dataProvider' => $productsDataProvider,
    'itemView' => '_list',
    'itemOptions' => [
        'tag' => 'div',
        'class' => 'catalog-item',
    ],
    'pager' => [
        'class' => 'frontend\themes\pink\components\UpsidePinkPagination',
    ],
    'layout' => "<div class=\"catalog-items clearfix\">{items}</div>\n<div class=\"bg-gray-pagination\"><div class=\"pink-pagination\">{pager}</div></div>",
]) ?>
<div class="cur-sales-title">
    <h2 class="page-title">Прямо сейчас купили</h2>
</div>
<div class="cur-sales clearfix">
    <?php $products = Category::findOne(['slug' => 'modulnye-kartiny'])->getCategoryProducts()->andWhere(['status' => 1])->orderBy(new Expression('rand()'))->limit(6)->all(); ?>
    <?php foreach ($products as $product): ?>
        <div class="cur-sales-item">
            <div class="cur-sales-image">
                <a href="<?= Url::to(['/product/view', 'category' => 'modulnye-kartiny', 'slug' => $product->slug]); ?>">
                    <img src="<?= UImage::getProductImage($product, 'fon1', 140, 100) ?>" width="140" height="100"
                         alt="<?= $product->title ?>">
                </a>
            </div>
            <div class="cur-sale-title">
                <a href="<?= Url::to(['/product/view', 'category' => 'modulnye-kartiny', 'slug' => $product->slug]); ?>"><?= $product->title ?></a>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<!--
<div class="bg-pink">
    <div class="dotted-border">
        <div class="clearfix">
            <div class="icon icon-pencil"></div>
            <div class="content">
                <h2>Бесплатная помощь дизайнера</h2>
                <p>Узнайте еще до покупки как будут выглядеть модульные картины в вашем интерьере!</p>
            </div>
            <div class="button-block">
                <a href="#order-popup2" class="btn btn-dark-pink knopkadesign1">Попробовать</a>
            </div>
        </div>
    </div>
</div>
-->
<div class="social-widgets-title">
    <h2 class="page-title">Присоединяйтесь к нам в соцсетях!</h2>
    <p class="page-desc">Нас уже более 60 000 участников</p>
</div>
<div class="social-widgets clearfix">
    <div class="widget-vk fl">
        <div>
            <div class="vk color2">
                <div id="community_groups_main2" class="community_groups_main clear_fix" style="height: 210px;">
                    <a href="https://vk.com/kartinarusss" target="_blank" class="community_head color3_bg"
                       onmouseover="Community.headerOver(event);" onmouseout="Community.headerOut(event);">
                        <span class="wcommuinty_logo fl_r"
                              style="margin: 0 0 -2px 0;" title="ВКонтакте"></span>
                        <img width="22" height="22" src="https://pp.vk.me/c621930/v621930621/34bd4/lU-zukQSTbM.jpg" alt="Вконтакте">
                        <div id="wcommunity_name_cont2" style="width: 183px;" class="">
                            <span id="wcommunity_name_anim2" class="wcommunity_name" style="margin-left: 0;">Модульные картины ?Розыгрыш картины БЕСПЛАТНО!</span>
                        </div>
                    </a>
                    <div class="community_soft_head">
                        <a id="community_count_state1" onmousedown="return cancelEvent(event);"
                           onclick="Community.toggleStat(-75729351, 255);" class="color2" style="display: none;">42<span
                                    class="num_delim"> </span>503 участника</a>
                        <a id="community_count_state2" onmousedown="return cancelEvent(event);"
                           onclick="Community.toggleStat(-75729351, 255);" class="color2">42<span
                                    class="num_delim"> </span>502 участника</a>
                    </div>
                    <div class="community_content" id="community_content2" style="">
                        <div id="page_wall_posts2" class="wall_module">
                            <div class="anim_row" style="width:239px;">
                                <div id="anim_row2" style="width:340px;">


                                    <div class="community_square_user">
                                        <div class="community_square_pic">
                                            <a href="https://vk.com/a.kudrina86" target="_blank"><img alt="Картинка" width="50"
                                                                                                      height="50"
                                                                                                      src="<?= $this->theme->getUrl('img/22.jpg') ?>"></a>
                                        </div>
                                        <a href="https://vk.com/a.kudrina86" target="_blank" class="color2">Анна</a>
                                    </div>

                                    <div class="community_square_user">
                                        <div class="community_square_pic">
                                            <a href="https://vk.com/cherrrylicious" target="_blank"><img alt="Картинка" width="50"
                                                                                                         height="50"
                                                                                                         src="<?= $this->theme->getUrl('img/3.jpg') ?>"></a>
                                        </div>
                                        <a href="https://vk.com/cherrrylicious" target="_blank" class="color2">Александра</a>
                                    </div>

                                    <div class="community_square_user">
                                        <div class="community_square_pic">
                                            <a href="https://vk.com/ale_xandra" target="_blank"><img alt="Картинка" width="50"
                                                                                                     height="50"
                                                                                                     src="<?= $this->theme->getUrl('img/4.jpg') ?>"></a>
                                        </div>
                                        <a href="https://vk.com/ale_xandra" target="_blank" class="color2">Alexandra</a>
                                    </div>
                                </div>
                            </div>
                            <div class="clear"></div>
                            <div class="community_square_user">
                                <div class="community_square_pic">
                                    <a href="https://vk.com/tereshenko_karina" target="_blank"><img alt="Картинка" width="50"
                                                                                                    height="50"
                                                                                                    src="<?= $this->theme->getUrl('img/5.jpg') ?>"></a>
                                </div>
                                <a href="https://vk.com/tereshenko_karina" target="_blank" class="color2">Карина</a>
                            </div>
                            <div class="community_square_user">
                                <div class="community_square_pic">
                                    <a href="https://vk.com/fantaz" target="_blank"><img alt="Картинка" width="50" height="50"
                                                                                         src="<?= $this->theme->getUrl('img/6.jpg') ?>"></a>
                                </div>
                                <a href="https://vk.com/fantaz" target="_blank" class="color2">Екатерина</a>
                            </div>
                            <div class="community_square_user">
                                <div class="community_square_pic">
                                    <a href="https://vk.com/id30469" target="_blank"><img alt="Картинка" width="50" height="50"
                                                                                          src="<?= $this->theme->getUrl('img/77.jpg') ?>"></a>
                                </div>
                                <a href="https://vk.com/id30469" target="_blank" class="color2">Евгения</a>
                            </div>
                        </div>

                    </div>

                </div>
                <div id="community_like2" class="community_widget_bottom">
                    <a href="https://vk.com/kartinarusss" target="_blank" id="join_community3"
                       class="join_community  color3_bg clear_fix">
                        Подписаться на новости
                    </a>
                </div>

            </div>
        </div>
    </div>
    <div class="widget-ok fl" style="margin-left: 80px;">
        <div>
            <div class="ok hookBlock" id="hook_Block_WidgetGroup">
                <div class="widget">
                    <div class="widget_t"> Мы на Одноклассниках</div>
                    <div class="widget_gr">
                        <a class="widget_gr-i" href="https://ok.ru/ruskartina" target="_blank">
                            <div class="img_ok_logo"></div>
                        </a>
                        <div class="widget_gr-cont">
                            <a class="widget_gr-t" href="https://ok.ru/ruskartina" target="_blank">Группа&nbsp;«Магазин модульных картин. Доставка по всей России»</a>
                            <a class="widget_gr-l al" href="https://ok.ru/ruskartina" target="_blank">присоединиться</a>
                        </div>
                    </div>
                    <div class="widget_memb-list_w">
                        <ul class="widget_memb-list">
                            <li class="widget_member">
                                <a class="widget_member_img-w" href="https://ok.ru/profile/97001017?st._aid=ExternalGroupWidget_OpenProfile" target="_blank"><div class="memb1"></div></a>
                            </li>
                            <li class="widget_member">
                                <a class="widget_member_img-w" href="https://ok.ru/profile/100930025?st._aid=ExternalGroupWidget_OpenProfile" target="_blank"><div class="memb2"></div></a>
                            </li>
                            <li class="widget_member">
                                <a class="widget_member_img-w" href="https://ok.ru/profile/117811857?st._aid=ExternalGroupWidget_OpenProfile" target="_blank"><div class="memb3"></div></a>
                            </li>
                            <li class="widget_member">
                                <a class="widget_member_img-w" href="https://ok.ru/profile/119046655?st._aid=ExternalGroupWidget_OpenProfile" target="_blank"><div class="memb4"></div></a>
                            </li>
                            <li class="widget_member">
                                <a class="widget_member_img-w" href="https://ok.ru/profile/121375116?st._aid=ExternalGroupWidget_OpenProfile" target="_blank"><div class="memb5"></div></a>
                            </li>
                            <li class="widget_member">
                                <a class="widget_member_img-w" href="https://ok.ru/profile/124373366?st._aid=ExternalGroupWidget_OpenProfile" target="_blank"><div class="memb6"></div></a>
                            </li>
                            <li class="widget_member">
                                <a class="widget_member_img-w" href="https://ok.ru/profile/131460913?st._aid=ExternalGroupWidget_OpenProfile" target="_blank"><div class="memb7"></div></a>
                            </li>
                            <li class="widget_member">
                                <a class="widget_member_img-w" href="https://ok.ru/profile/136058128?st._aid=ExternalGroupWidget_OpenProfile" target="_blank"><div class="memb8"></div></a>
                            </li>
                        </ul>
                    </div>
                    <div class="widget_soc-count">
                        <span class="widget_count">В группе уже 12&nbsp;306 участников</span>
                    </div>
                    <div class="widget_soc-link_w">
                        <a class="widget_soc-link" href="https://apiok.ru/wiki/pages/viewpage.action?pageId=42476655" target="_blank">Получить виджет</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="widget-in fr">
        <div>
            <div class="in">
                <div class="widget">
                    <a href="https://instagram.com/kartina_rus" target="_blank" class="title">
                        <div class="inst_logo icon"></div>
                        <div class="text">Мы в Instagram:</div>
                        <div class="clear">&nbsp;</div>
                    </a>

                    <table class="profile">
                        <tbody>
                        <tr>
                            <td rowspan="2" class="avatar">
                                <a href="https://instagram.com/kartina_rus" target="_blank">
                                    <div class="ava_logo"></div>
                                </a>
                            </td>
                            <td class="value">
                                384
                                <span>Посты</span>
                            </td>
                            <td class="value">
                                8594
                                <span>Подписчики</span>
                            </td>
                            <td class="value" style="border-right:none !important;">
                                2652
                                <span>Подписки</span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3" style="border-right:none !important;">
                                <a href="https://instagram.com/kartina_rus" class="follow" target="_blank">Посмотреть ></a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="data" id="widgetData2">
                        <a class="image" href="https://www.instagram.com/p/_mEOtSQDg2/" target="_blank">
                            <div class="memb1"></div>
                        </a>
                        <a class="image" href="https://www.instagram.com/p/_WnVLvwDqw/" target="_blank">
                            <div class="memb2"></div>
                        </a>
                        <a class="image" href="https://www.instagram.com/p/_4QFvGwDqT/" target="_blank">
                            <div class="memb3"></div>
                        </a>
                        <a class="image" href="https://www.instagram.com/p/_3zZheQDpS/" target="_blank">
                            <div class="memb4"></div>
                        </a>
                        <a class="image" href="https://www.instagram.com/p/_JN72OwDvM/" target="_blank">
                            <div class="memb5"></div>
                        </a>
                        <a class="image" href="https://www.instagram.com/p/_biP1FwDvv/" target="_blank">
                            <div class="memb6"></div>
                        </a>
                        <a class="image" href="https://www.instagram.com/p/_6Ud-pQDvU/" target="_blank">
                            <div class="memb7"></div>
                        </a>
                        <a class="image" href="https://www.instagram.com/p/_mMwKsQDvv/" target="_blank">
                            <div class="memb8"></div>
                        </a>
                        <a class="image" href="https://www.instagram.com/p/_Y_E5rQDnD/" target="_blank">
                            <div class="memb9"></div>
                        </a>
                        <a class="image" href="https://www.instagram.com/p/_E0QE2QDhV/" target="_blank">
                            <div class="memb10"></div>
                        </a>
                        <a class="image" href="https://www.instagram.com/p/_Rr3TDQDud/" target="_blank">
                            <div class="memb11"></div>
                        </a>
                        <a class="image" href="https://www.instagram.com/p/_1hqYWwDnp/" target="_blank">
                            <div class="memb12"></div>
                        </a>
                        <div class="clear">&nbsp;</div>
                    </div>
                </div>
            </div>
            <br>
        </div>
    </div>
</div>
<?php if (empty(Yii::$app->request->queryParams['page'])): ?>
    <div class="page-content">
<!--        --><?//= $model->content ?>
    </div>
<?php endif; ?>
<?php $this->beginBlock('after-content'); ?>
<?php $this->endBlock(); ?>
<?php $this->beginBlock('track'); ?>
<script type="text/javascript">
    window.criteo_q = window.criteo_q || [];
    window.criteo_q.push(
        {event: "setAccount", account: 27568},
        {event: "setSiteType", type: "d"},
        {event: "viewHome"}
    );
</script>

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
    ga('set', 'dimension2', 'home');
</script>
<?php $this->endBlock(); ?>


