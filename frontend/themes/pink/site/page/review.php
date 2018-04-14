<?php
/**
 * @var $model common\models\Page
 * @var $this \yii\web\View
 */


use common\models\Review;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

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


$formModel = new Review();

$formModel->created_at = time();
$formModel->updated_at = time();


?>

<?php if($formModel->load(Yii::$app->request->post()) and $formModel->save()): ?>
    <h1><?=$this->title?></h1>
    <div class="review">
        <p>Спасибо ваш отзыв отправлен на модерацию</p>
    </div>
<?php else:?>
<h1><?=$this->title?></h1>
<div class="review">
    <p>Мы всегда рады вашим отзыва т.к. это помогает нам развиваться и улучшать качество обслуживания</p>
    <p>При указании ссылки на вашу страницу vk.com - ваша фотография, город и возраст будут получены автоматически т.е. заполнять эти данные не обязательно</p><br>
    <?php $form = ActiveForm::begin([
        //'enableClientValidation' => false,
        //'enableAjaxValidation' => false,
        'layout' => 'horizontal',
    ]); ?>
        <?= $form->field($formModel,'name')->label('Имя:')?>
        <?= $form->field($formModel,'age')->label('Возраст:')?>
        <?= $form->field($formModel,'city')->label('Город:')?>
        <?= $form->field($formModel,'tel')->label('Телефон с которого был оформлен заказ:')?>
        <?= $form->field($formModel,'vk')->label('Ссылка на вашу страницу vk.com:')?>
        <?= $form->field($formModel,'comment')->textarea(['rows'=>7,'cols'=>40])->label('Отзыв:')?>
        <div class="form-group">
            <div class="col-sm-12">
                <?=Html::submitButton('оставить отзыв',['style'=>'margin-left:148px;'])?>
            </div>
        </div>

    <?php ActiveForm::end(); ?>
</div>
<?php endif;?>