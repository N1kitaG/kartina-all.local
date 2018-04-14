<?php
/**
 * @var $model Product
 * @var $category Category
 */

use common\helpers\OrderBtn;
use common\helpers\UImage;
use common\helpers\USize;
use common\models\Category;
use common\models\Interior;
use common\models\Product;
use frontend\themes\pink\assets\PinkAsset;
use yii\bootstrap\Html;
use yii\data\ActiveDataProvider;
use yii\db\Expression;
use yii\helpers\Url;
use yii\widgets\ListView;
use yii\widgets\Pjax;

$bundle = PinkAsset::register($this);

$this->theme->setBaseUrl($bundle->baseUrl);

$this->title = $model->meta_title;
$this->params['breadcrumbs'][] = ['label' => $category->title, 'url' => ['/category/seoview','slug'=>$category->slug]];
$this->params['breadcrumbs'][] = $model->title;

Yii::$app->params['category'] = $category;




$this->registerMetaTag([
    'name'=>'description',
    'content'=>$model->meta_description
]);

$this->registerMetaTag([
    'name'=>'keywords',
    'content'=>$model->meta_keywords
]);


//$cat = (isset($model->cats[0]))?$model->cats[0]->id:3;//TODO: Раздать категории репродукциям с багетом
//$cat2 = (isset($model->cats[0]))?$model->cats[0]->category->parent_id:3;//TODO: Раздать категории репродукциям с багетом

$tmp1 = false;
$tmp2 = false;
$tmp3 = false;
$tmp4 = false;

if(in_array($category->id,[77,111,112,113,114,115,116,117,118,119,120,121,122,123,124,125,126,127,128,129,130,131,132,133,134,135,136,137,147,176]) or in_array($category->parent_id,[77,111,112,113,114,115,116,117,118,119,120,121,122,123,124,125,126,127,128,129,130,131,132,133,134,135,136,137,147,176])){
    $tmp1 = true;
}

if(in_array($category->id,[76]) or in_array($category->parent_id,[76])){
    $tmp2 = true;
}

if(in_array($category->id,[23]) or in_array($category->parent_id,[23])){
    $tmp3 = true;
}

if(in_array($category->id,[197]) or in_array($category->parent_id,[197])){
    $tmp4 = true;
}






$analog = false;
$f = $model->productFieldsBase;

foreach($f as $key => $field){

    if($field->field_id == 12 ){
        $analog = Product::find()->where(['id'=>$field->value])->one();
        unset($f[$key]);
    }

}

$interiors = Interior::getDb()->cache(function(){return Interior::find()->limit(10)->all();}, 3600);
//$interiors = [];

//$img = [7365,7366,7368,7372,7373,7376,1374,1374,895,690,38,89,140,142,145,297,527,586,638,639,644,647,691,692,694,695,697,698,805,807,808,819,828,831,833,871,1358,1510,2877,3186,1019,1378,1273,4367,1934,930,4276,1940,3218,202,1472,1342,862,524,3998,893,744,1048,908,1512,3097,715,2907,1316,319,717,589,402,102,1477,7234,963,1419,646,1886,4271,575,849,780,760,98,344,597,7260,922,316,1324,321,1855,903,1473,774,788,68,1353,1906,926,7322,3182,157,95,3191,2811,960,7264,812,946,7270,329,7256,7228,404,1463,7204,743,3198,1007,954,184,569,783,218,685,888,196,839,58,606,3094,1459,139,1383,1369,71,826,1027,1522,302,4188,918,624,921,686,548,566,110,1930,1932,992,1536,2902,7302,201,1535,1884,1321,1476,4374,174,528,53,870,526,1318,1951,2895,618,352,2889,856,815,292,890,303,3225,355,944,1456,2695,2874,1379,916,7330,1025,7288,216,2810,1887,1471,1382,46,3992,924,600,2789,1952,796,2716,920,1524,1857,738,577,765,3195,4371,3090,672,1570,688,4365,562,1271,1304,7318,415,973,351,3096,358,872,205,158,952,1579,811,545,621,4366,342,674,989,30,126,571,2700,4003,1467,32,1956,4016,1925,1272,1942,1339,2871,3081,1371,891,162,1041,3100,863,1367,943,1469,850,512,1937,887,1450,1854,2865,41,3084,601,979,730,107,54,1429,1867,1439,1442,758,2726,1452,2896,532,2696,160,757,2872,928,7254,2497,733,834,1518,7300,1534,845,3177,3080,7190,552,1381,7202,1036,7308,1348,357,551,2679,2806,929,2864,1250,356,894,605,1294,803,1368,3361,876,7244,328,550,941,1307,7230,1861,2793,2832,1896,790,1537,3082,3184,645,966,2881,1046,1531,309,7238,590,2883,1881,1018,7252,2706,3098,1516,1453,681,1928,1013,1501,1354,3222,362,1352,640,787,3396,1882,4370,215,1955,766,297,1513,3099,2906,3394,2791,687,252,789,7316,555,1566,1939,99,3224,873,905,514,1488,1328,3101,886,2831,560,902,361,120,1479,3091,769,1375,976,1492,3076,1885,325,80,541,167,1377,1362,535,1349,3362,1957,553,1380,414,1343,7334,1407,1462,354,2790,3079,1260,1370,1868,964,165,636,851,959,7210,620,1011,2829,786,1012,1037,1010,7246,3181,1268,318,7286,549,1527,7224,953,1936,286,7250,919,838,3996,3990,7262,3085,1366,1475,822,144,927,3243,1544,7292,3185,1040,3176,20,865,7294,3223,7336,82,401,3242,2813,1016,741,1541,4178,950,331,1052,7312,3180,3221,1500,376,7242,340,791,792,509,1350,1026,1341,200,7218,897,802,7304,4364,317,1461,530,1005,1478,154,543,940,1515,343,1441,1346,861,412,1860,1409,1317,793,7290,567,1919,759,761,268,3077,1029,3083,602,7226,854,219,207,2876,962,657,3967,4368,62,213,537,2812,7216,1421,2861,1507,1028,840,310,7240,289,7306,3969,1440,1305,256,700,3103,2792,533,563,1487,262,1779,28,874,4004,1325,359,2863,345,1521,153,806,896,1529,1864,3392,1538,3095,777,798,1457,125,732,1309,413,1308,2814,7274,982,212,94,1920,1517,2905,564,1540,181,1878,675,399,3086,958,1474,1546,7236,556,740,1024,155,7198,1871,1903,74,1481,4069,539,1351,1543,1889,1935,1357,679,907,1447,1032,168,7192,797,842,972,844,7276,1365,2894,1035,1372,770,1465,595,7212,171,7280,994,312,7214,1520,2690,1355,129,1258,1360,1051,221,3102,1904,56,326,1514,7332,1384,683,1460,130,598,1542,1929,7220,3183,659,536,3088,1414,1413,2828,1888,2788,7278,1468,7324,179,1502,3244,4270,817,1322,1528,7328,124,1306,43,848,3246,889,795,616,7194,949,570,898,977,150,2705,767,1033,745,143,868,1926,163,186,366,1408,1470,855,910,182,913,7196,210,615,7298,16,2808,857,3187,4177,899,935,7248,338,2807,417,335,1931,742,947,1404,119,565,832,172,522,2691,327,911,971,961,214,2830,1363,1356,177,843,408,2879,720,3240,998,4372,1526,166,1437,2862,938,847,3978,2815,1958,3248,291,737,189,3250,2875,1432,1001,246,1385,1420,1416,1034,7284,917,7232,997,3984,7268,534,1427,7314,411,676,7266,1499,4105,1021,2900,1443,892,33,7272,3393,1504,1511,846,975,2680,3093,7258,18,1918,1941,1890,3247,416,59,4375,2897,3217,648,658,1803,1880,996,27,934,7208,3075,923,626,7326,1312,699,3251,558,513,1344,739,1865,1262,1891,1523,836,7206,1373,7200,680,866,1519,641,7282,860,1466,7320,1924,222,117,955,799,1530,1943,726,1883,727,1323,7310,7296,951,287,265,3089,4369,1948,557,901,1338,7222,841,875,2873,1545,906,206,1954,830,141,3220];

$alt = ($model->meta_h1) ? $model->meta_h1 : $this->title;
?>
<?php if($model->id > 7338 and $model->id < 7386):?>
<style type="text/css">
    .product-desc ul li:last-child{
        color: #ed479d;
        font-weight: bold;
        font-size: 15px;
    }
    .product-desc ul li:last-child:before{
        color: #ed479d;
    }
</style>
<?php endif;?>
<div itemscope itemtype="http://schema.org/Product" class="product-page">
    <h1 itemprop="name" class="page-title"><?= ($model->meta_h1) ? $model->meta_h1 : $this->title; ?></h1>
    <div class="product-content">
        <div class="product-main-info clearfix">
            <div class="fl">
                <div class="product-image">
                    <?php if(empty($model->image)):?>
                        <?php
                            $images = explode('|',$model->images);
                            $first = $images[0];
                            unset($images[0]);

                        ?>
                        <a href="/images/products_a/<?=$first?>" class="fancybox" data-fancybox-group="group1">
                            <?= Html::img(UImage::getResizedImage($first,560,435),['alt'=>$alt, 'itemprop' => 'image'])?>
                        </a>
                    <?php else:?>
                        <?php if($model->baget == 1):?>
                            <?php if(in_array($model->id, Yii::$app->params['altImages'])):?>
                                <a href="/img2/900/<?=$model->id;?>.jpg" class="fancybox" data-fancybox-group="group1"><?= Html::img('/img2/560/'.$model->id.'.jpg',['alt'=>$alt, 'itemprop' => 'image'])?></a>
                            <?php else:?>
                                <a href="<?= UImage::getProductImageBorder($model,'fon1',900,900)?>" class="fancybox" data-fancybox-group="group1"><?= Html::img(UImage::getProductImageBorder($model,'fon1',560,435),['alt'=>$alt, 'itemprop' => 'image'])?></a>
                            <?php endif;?>
                        <?php else:?>
                            <?php if(in_array($model->id, Yii::$app->params['altImages'])):?>
                                <a href="/img2/900/<?=$model->id;?>.jpg" class="fancybox" data-fancybox-group="group1">
                                    <span class="zoom"></span>
                                    <?= Html::img('/img2/560/'.$model->id.'.jpg',['alt'=>$alt, 'itemprop' => 'image'])?>
                                </a>
                            <?php else:?>
                                <a href="<?= UImage::getProductImage($model,'fon2',900,900)?>" class="fancybox" data-fancybox-group="group1">
                                    <span class="zoom"></span>
                                    <?= Html::img(UImage::getProductImage($model,'fon2',560,435),['alt'=>$alt, 'itemprop' => 'image'])?>
                                </a>
                            <?php endif;?>
                        <?php endif;?>
                    <?php endif;?>
                    <p class="discount">-<?=Yii::$app->params['discount']?><span>%</span></p>
                </div>
            </div>
            <div class="product-desc">
                <div class="clearfix">
					<div itemprop="description">
						<ul class="hide-480">
							<li>Гарантия качества (ГОСТ)</li>
							<li>Натуральные материалы</li>
							<li>Доставка до двери</li>
							<li>Оплата при получении</li>
							<?php if($model->id > 7338 and $model->id < 7386):?>
								<?php if($model->price<4500):?>
								<li>Эта картина с рамкой</li>
								<?php else:?>
								<li>Эта картина с багетом</li>
								<?php endif;?>
							<?php endif;?>
						</ul>
					</div>
                    <?php $rating = ($model->rating == 5)?'5.0':$model->rating; ?>
                    <div class="rating">
                        <p>Рейтинг товара: <img alt="Рейтинг" style="position: relative; top: -3px; width: 100px;" src="<?=$this->theme->getUrl('img/rating/plusstar'.$rating.'.png')?>"> (<?=$rating?>)</p>
                    </div>
                    <div class="price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                        <div class="price-current-title">Цена без акции завтра:</div>
                        <div class="price-current"><?= number_format($model->getOldPrice(), 0, '', ' ');?> <span><?=Yii::$app->params['currency']?></span></div>
                        <hr class="dotted">
                        <div class="price-old-title">Цена по акции сегодня:</div>
                        <div class="price-old" itemprop="price" content="<?= number_format($model->price, 0, '', ' ');?>"><?= number_format($model->price, 0, '', ' ');?> <span><?=Yii::$app->params['currency']?></span><meta itemprop="priceCurrency" content="RUB"></div>
                    </div>
                </div>
                <div class="order-button-wrapper">
                    <?= OrderBtn::getBtn($model,'Заказать', 'btn btn-pink fancybox-order');?>
                </div>
                <div class="order">
                    <?php if($analog != false):?>
                        <?php if($tmp1): ?>
                            <div class="clearfix">
                                <a class="btn btn-dark-pink">Модульная</a>
                                <a class="btn btn-default" href="<?= Url::to(['/product/view','category'=>'vse-posteri','slug'=>$analog->slug])?>#tovar">Обычная</a>
                            </div>
                        <?php elseif ($tmp2): ?>
                            <div class="clearfix">
                                <a class="btn btn-default" href="<?= Url::to(['/product/view','category'=>'modulnye-kartiny','slug'=>$analog->slug])?>#tovar">Модульная</a>
                                <a class="btn btn-dark-pink">Обычная</a>
                            </div>
                        <?php elseif ($tmp3): ?>
                            <div class="clearfix">
                                <a class="btn btn-dark-pink">Без багета</a>
                                <a class="btn btn-default" href="<?= Url::to(['/product/view','category'=>'reprodukcii-s-bagetom','slug'=>$analog->slug])?>#tovar">С багетом</a>
                            </div>
                        <?php elseif ($tmp4): ?>
                            <div class="clearfix">
                                <a class="btn btn-default" href="<?= Url::to(['/product/view','category'=>'smotret-vse-reproduqtcii','slug'=>$analog->slug])?>#tovar" >Без багета</a>
                                <a class="btn btn-dark-pink" >С багетом</a>
                            </div>
                        <?php endif; ?>
                    <?php endif;?>
                </div>
                <div style="font-size: 16px; text-transform: none; color: #919191; margin-top: 10px; margin-left: 20px;    font-family: 'Trebuchet MS',Helvetica,sans-serif">
                    Данную картину купили <b><?= $model->sale_count ?></b> раз(а).
                </div>
            </div>
        </div>
    </div>
    <div class="item-page-row clearfix">
        <div class="block-border fl">
            <div class="clearfix">
                <div class="img">
                    <img src="<?=$this->theme->getUrl('img/item-page-mp3.png')?>" alt="Картинка">
                </div>
                <div class="text">
                    <div class="h5">Стильный mp3-плеер <br>в подарок к картине!</div>
                    <p>Спешите, количество подарков<br>ограничено!</p>
                </div>
            </div>
        </div>
        <div class="block-border fr">
            <div class="clearfix">
                <div class="img">
                    <img src="<?=$this->theme->getUrl('img/item-page-clip.jpg')?>" alt="Картинка">
                    <div class="discount">
                        <p class="new-price">70 <span>р.</span></p>
                        <p class="old-price">180 р.</p>
                    </div>
                </div>
                <div class="text">
                    <div class="h2">Вы повесите картину<br>за 1 минуту!</div>
                    <p>Без сверления стен, справится<br>даже ребенок!</p>
                </div>
            </div>
        </div>
    </div>

    <div class="product-gallery clearfix">
        <?php if(empty($model->image)):?>
            <?php foreach ($images as $img):?>
                <a class="fancybox" data-fancybox-group="group1" href="/images/products_a/<?=$img?>"><img alt="Модульная картина в интерьере" src="<?= UImage::getResizedImage($img,176,110);?>"></a>
            <?php endforeach;?>
        <?php else:?>
            <?php foreach ($interiors as $interior):?>
                <?php if($model->baget == 1):?>
                    <a class="fancybox" data-fancybox-group="group1" href="<?= UImage::getInteriorBorderSourceUrl($interior,$model);?>"><img  alt="Модульная картина в интерьере" src="<?= UImage::getInteriorBorder($interior,$model,176,110);?>"></a>
                <?php else:?>
                    <a class="fancybox" data-fancybox-group="group1" href="<?= UImage::getInteriorSourceUrl($interior,$model);?>"><img alt="Модульная картина в интерьере" src="<?= UImage::getInterior($interior,$model,176,110);?>"></a>
                <?php endif;?>
            <?php endforeach;?>
        <?php endif;?>
    </div>

    <div class="h1 pink tac">Картина полностью готова! Осталось только повесить.</div>
    <p class="page-desc tac">Что вы получаете при покупке картины у нас</p>
    <div class="clearfix">
        <div class="fully-prepared">
            <div class="img"><img src="<?=$this->theme->getUrl('img/fully-prepared-img1.png')?>" alt="Картинка"></div>
            <h5>Эко-холсты</h5>
            <p>Картина печатается на натуральных хлопковых холстах европейского производства</p>
        </div>
        <div class="fully-prepared">
            <div class="img"><img src="<?=$this->theme->getUrl('img/fully-prepared-img2.png')?>" alt="Картинка"></div>
            <h5>Натяжка холста вручную</h5>
            <p>Холст натягивается на подрамник галерейной натяжкой (изображение продолжается
                на торце, никаких белых или черных торцов)</p>
        </div>
        <div class="fully-prepared">
            <div class="img"><img src="<?=$this->theme->getUrl('img/fully-prepared-img3.png')?>" alt="Картинка"></div>
            <h5>Галерейный подрамник</h5>
            <p>Изготавливается из высококачественной сосны. Толщина подрамника — 4×2 см</p>
        </div>
        <div class="fully-prepared">
            <div class="img"><img src="<?=$this->theme->getUrl('img/fully-prepared-img4.png')?>" alt="Картинка"></div>
            <h5>Ultra HD печать</h5>
            <p>Картина печатается экологически чистыми пигментными красками (не имеют специфического запаха) на японском оборудовании</p>
        </div>
        <div class="fully-prepared">
            <div class="img"><img src="<?=$this->theme->getUrl('img/fully-prepared-img5.png')?>" alt="Картинка"></div>
            <h5>Покрытие лаком</h5>
            <p>Декоративный акриловый безвредный лак
                защитит картину от внешних воздействий
                и создаст эффект глубины изображения</p>
        </div>
        <div class="fully-prepared">
            <div class="img"><img src="<?=$this->theme->getUrl('img/fully-prepared-img6.png')?>" alt="Картинка"></div>
            <h5>Надежная упаковка</h5>
            <p>Мы даем гарантию, что с вашей картиной ничего не случится во время транспортировки. Если картина повредится, мы вышлем новую бесплатно!</p>
        </div>
    </div>
    <div class="bg-pink" style="margin-bottom: 30px">
        <div class="dotted-border">
            <div class="clearfix">
                <div class="icon icon-shield"></div>
                <div class="content" style="width: 750px;">
                    <h2>Оплата без риска</h2>
                    <p>Вы можете открыть посылку и осмотреть картину и только потом принимать решение о покупке.
                        Если вас что-то не устроило в картине, вы можете отказаться и ничего не платить (условия действуют по всей России)</p>
                </div>
            </div>
        </div>
    </div>
    <div class="sizeblocks clearfix">
        <div class="linex" style="padding-bottom: 15px; margin-bottom: 15px; border-bottom: 1px dashed #ddd;">
            <div class="item-page-tovar-left fl">
                <div class="price-shares" style="margin-top: 22px">
                    <p style="color: #888 !important; margin: 0;">Цена без акции завтра:</p>
                    <p class="price" style="font-size: 34px;color: #888!important; margin-bottom: 10px; margin-top: 0;"> <?= number_format($model->getOldPrice(), 0, '', ' ');?> <span style="font-size: 26px;"> <?=Yii::$app->params['currency']?></span></p>
                </div>
                <div class="not price-shares" style="margin-top: 15px">
                    <p style="color:#111 !important; margin: 0;">Цена по акции сегодня:</p>
                    <p class="price" style="font: bold 50px 'Roboto Slab', Arial, Helvetica, sans-serif;color: #ed479d !important; margin: 0;"> <?= number_format($model->price, 0, '', ' ');?><span style="font-size: 40px;"> <?=Yii::$app->params['currency']?></span></p>
                </div>
            </div>
            <div class="rightbtn fr">
                <?= OrderBtn::getBtn($model,'Заказать','btn btn-pink fancybox-order');?>
            </div>
            <div style="clear: both;"></div>
        </div>
        <div class="h1">Варианты размеров</div>
        <?php
        $sizes = USize::getFields($model);
        $ss = [];
        foreach ($sizes as $k=>$v){
            if(isset($v[1]) and isset($v[2])){
                $ss[] = $k;
            }
        }
        ?>
        <div class="sizes-35">
            <div class="infoorder">
                <span>При покупке в графе "Комментарии к заказу:"<br> укажите пожалуйста<br>желаемый размер модульной картины <br><b style="text-transform: uppercase;"><?=implode('\\',$ss)?></b></span>
            </div>
        </div>
        <div class="sizes-60">
            <table class="table sizes hide-361">
                <?php $i=0?>
                <?php foreach($sizes as $ksize => $size):?>
                    <?php if(isset($size[1]) and isset($size[2])):?>
                    <tr>
                        <td class="size"><?=strtoupper($ksize)?></td>
                        <td>
                            <div class="size-number"><?= isset($size[2])?$size[2]:''?> см</div>
                            <div class="size-desc"><?= isset($size[3])?$size[3]:''?></div>
                        </td>
                        <td>
                            <div class="table-price"><?= isset($size[1])?number_format((int)$size[1], 0, '', ' '):''?> <span><?=Yii::$app->params['currency']?></span></div>
                            <div class="table-price-old">Вместо <?= isset($size[1])?number_format((int)$model->getOldPrice($size[1]), 0, '', ' '):''?> <?=Yii::$app->params['currency']?></div>
                        </td>
                    </tr>
                    <?endif;?>
                    <?php $i++?>
                <? endforeach;?>
            </table>
            <div class="show-361 sizes">
                <?php $i=0?>
                <?php foreach($sizes as $ksize => $size):?>
                    <?php if(isset($size[1]) and isset($size[2])):?>
                    <div class="size-item">
                        <div class="size"><?=strtoupper($ksize)?></div>
                        <div>
                            <div class="size-number"><?= isset($size[2])?$size[2]:''?> см</div>
                            <div class="size-desc"><?= isset($size[3])?$size[3]:''?></div>
                        </div>
                        <div>
                            <div class="table-price"><?= isset($size[1])?number_format((int)$size[1], 0, '', ' '):''?> <span><?=Yii::$app->params['currency']?></span></div>
                            <div class="table-price-old">Вместо <?= isset($size[1])?number_format((int)$model->getOldPrice($size[1]), 0, '', ' '):''?> <?=Yii::$app->params['currency']?></div>
                        </div>
                    </div>
                    <?endif;?>
                    <?php $i++?>
                <? endforeach;?>
            </div>
        </div>
    </div>
    <div class="h1 pink tac" style="margin-bottom: 30px">Закажите дополнительные услуги</div>
    <div class="additional-services clearfix">
        <div class="additional-service">
            <div class="additional-services-icon-block">
                <i class="additional-services-icon-1"></i>
            </div>
            <h5>Ручная обработка художественным гелем</h5>
            <p>Картина фактически отрисовывается художником мелкой кистью, создается впечатление нарисованной маслом картины и добавляется эффект глубины изображения. Стоимость услуги от 4000 рублей (в зависимости от размера картины и сложности исполнения).</p>
        </div>
        <a href="/satin-holst.html" class="additional-service">
            <div class="additional-services-icon-block">
                <i class="additional-services-icon-2"></i>
            </div>
            <h5>Картина на сатиновом холсте premium-качества</h5>
            <p>Изображение при этом будет выглядеть более насыщено, реалистично и ярко. Стоимость данной услуги от 3000 рублей (в зависимости от размера картины).</p>
        </a>
        <div class="additional-service">
            <div class="additional-services-icon-block">
                <i class="additional-services-icon-3"></i>
            </div>
            <h5>Бесплатная услуга дизайнера</h5>
            <p>Еще до покупки вы сможете увидеть как будет смотреться эта картина у вас дома.</p>
        </div>
        <div class="additional-service">
            <div class="additional-services-icon-block">
                <i class="additional-services-icon-4"></i>
            </div>
            <h5>Размер или композиция не подходят?</h5>
            <p>Вы можете заказать любой размер картины и любое расположение сегментов.</p>
        </div>
        <div class="additional-service">
            <div class="additional-services-icon-block">
                <i class="additional-services-icon-5"></i>
            </div>
            <h5>100% гарантия возврата</h5>
            <p>Вы можете обменять картину или вернуть деньги в течение 14 дней с момента покупки.</p>
        </div>
    </div>
    <div class="bg-green childrens">
        <div class="dotted-border">
            <div class="clearfix">
                <div class="img">
                    <img src="<?=$this->theme->getUrl('img/item-page-block-border-green-img.jpg')?>" alt="Картинка">
                </div>
                <div class="content">
                    <h2>Наши картины можно вывешивать
                        даже в детских учреждениях и комнатах</h2>
                </div>
            </div>
        </div>
    </div>
    <div id="discount-products" data-category="<?=$category->id?>" data-product="<?=$model->id?>"></div>

</div>
<div class="more-block">
    <div class="bg-gray">
        <a href="<?=Url::to(['/category/seoview','slug'=>'modulnye-kartiny']).'#tovar'?>" class="btn btn-dark-pink">Все картины</a>
    </div>
</div>
<?php $this->beginBlock('track'); ?>

    <script type="text/javascript">
        window.criteo_q = window.criteo_q || [];
        window.criteo_q.push(
            {event: "setAccount", account: 27568},
            {event: "setSiteType", type: "d"},
            {event: "viewItem", item: "<?=$model->id?>"}
        );

        dataLayer.push({
            "ecommerce": {
                "detail": {
                    "products": [
                        {
                            "id": "<?=$model->id?>",
                            "name": "<?=$model->title?>",
                            "price": <?=$model->price?>,
                            "category": "<?=(isset($model->cats[0])) ? $model->cats[0]->title : '';?>"
                        }
                    ]
                }
            }
        });
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
        ga('set', 'dimension1', "<?=$model->id?>");
        ga('set', 'dimension2', 'product');
        ga('set', 'dimension3', "<?=$model->price?>");
    </script>
<?php $this->endBlock(); ?>
