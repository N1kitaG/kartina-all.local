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

<?php $this->beginBlock('before-content'); ?>
    before Content
<?php $this->endBlock(); ?>

<?php echo $model->content; ?>

<?php $this->beginBlock('after-content'); ?>
    After Content
<?php $this->endBlock(); ?>