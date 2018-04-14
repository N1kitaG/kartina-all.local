<?php
/**
 * @var $model common\models\Page
 * @var $this \yii\web\View
 */

$this->registerMetaTag([
    'name'=>'description',
    'content'=>$model->meta_description
]);

$this->registerMetaTag([
    'name'=>'keywords',
    'content'=>$model->meta_keywords
]);

$this->title = $model->title;
$this->params['breadcrumbs'][] = $this->title;

?>

<main class="faq-page">
    <h2><?=$this->title?></h2>
    <?=$model->content?>
</main>