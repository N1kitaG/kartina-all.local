<?php

use yii\data\ActiveDataProvider;
use yii\db\Expression;
use yii\widgets\ListView;
?>
<h1 class="int tac" style="margin-bottom: 25px">Успейте купить со скидкой <?= Yii::$app->params['discount']?>%!</h1>
<div class="clearfix">
    <?= ListView::widget([
        'dataProvider' => new ActiveDataProvider([
            'query'=> $category->getCategoryProducts()->andWhere(['status'=>1])->andWhere(['<>','id',$model->id])->orderBy(new Expression('rand()'))->limit(10),
            'pagination' => false,
        ]),
        'itemView' => '_list',
        'itemOptions' => [
            'tag' => 'div',
            'class' => 'catalog-item',
        ],
        'summary'=>false,
        'layout' => "<div class=\"b-front-categories clearfix\">{items}</div>",
    ])?>
</div>