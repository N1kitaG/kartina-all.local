<?php
/**
 * @var $dataProvider yii\data\ActiveDataProvider
 *
 */
use common\models\Wishlist;
use yii\bootstrap\ActiveForm;
use yii\bootstrap\Html;
use yii\captcha\Captcha;
use yii\widgets\ListView;
use yii\widgets\Pjax;



$this->title = 'Список желаний';
$this->params['breadcrumbs'][] = 'Список желаний';
?>
<h1>Список желаний</h1>
<?php Pjax::begin(['enablePushState' => false])?>
<?= ListView::widget([
    'dataProvider' => $dataProvider,
    'itemView' => '_list',
    'summary'=>false,
    'emptyText' => false,
])?>


<?php if($dataProvider->count>0): ?>
    <div class="wishlist-form">
        <p class="wishlist-form-title">Рассказать друзьям по E-mail</p>
        <?$mod = new Wishlist()?>
        <?$form = ActiveForm::begin(['layout' => 'horizontal'])?>
        <?=$form->field($mod,'name')->label('Ваше имя: <span>*</span>')?>
        <?=$form->field($mod,'email')->label('E-mail друга: <span>*</span>')?>
        <?=$form->field($mod,'comment')->textarea(['rows'=>5,'cols'=>80])->label('Комментарий:')?>
        <?=$form->field($mod, 'verifyCode')->widget(Captcha::className(), ['template' => '{image}{input}',])->label(false) ?>
        <div class="form-group">
            <?= Html::submitButton('ОТПРАВИТЬ', ['class' => 'btn btn-2 send23', 'name' => 'contact-button']) ?>
        </div>
        <?ActiveForm::end()?>
    </div>
<?php endif;?>
<?php Pjax::end()?>