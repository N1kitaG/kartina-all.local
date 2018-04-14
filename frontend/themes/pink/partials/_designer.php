<?php
use common\models\Designer;
use yii\bootstrap\ActiveForm;
use yii\bootstrap\Html;
use yii\widgets\MaskedInput;

$designer_model = new Designer();
?>
    <div id="order-popup2" class="order-form designer">
        <div class="title" style="text-align: center">БЕСПЛАТНАЯ ПОМОЩЬ ПРОФЕССИОНАЛЬНОГО <br> ДИЗАЙНЕРА</div>
        <?php $form = ActiveForm::begin([
            'action' =>['order/designer/'],
            'validateOnBlur'         => false,
            'validateOnType'         => false,
            'validateOnChange'       => false,
            'validateOnSubmit'       => true,
            'options' => ['enctype' => 'multipart/form-data', 'role'=>false],
            'id' => 'designer_order'
        ])?>
        <?= $form->field($designer_model, 'name')->textInput()->label('Ваше имя')->hint('чтобы мы знали как к Вам обращаться')?>
        <?= $form->field($designer_model, 'email')->textInput()->label('E-Mail')->hint('на него мы пришлём варианты картин')?>
        <?= $form->field($designer_model, 'phone')->widget(MaskedInput::className(),['name' => 'phone', 'mask' => '+7(999)9999999'])->label('Телефон')->hint('чтобы дизайнер мог с вами связаться');?>
        <?= $form->field($designer_model, 'comment')->textInput()->textarea()->label('пожелания/комментарии')?>
        <div>
            <?= $form->field($designer_model, 'file[]')->textInput()->fileInput(['id'=>'file-input','style'=>'display:none;'])?>
            <a href="#" id="select-file" class="btn btn-dark-pink" style="width: 160px; margin: 0 auto;">Выбрать фаил</a>
        </div>
        <div id="file-duplicate">

        </div>
        <p><a id="add-file" href="#" class="btn btn-default">Загрузить ещё одну фотографию</a></p>
        <div style="text-align: center;">
            <?= Html::submitButton('Отправить',['class'=>'btn btn-pink', 'style' => 'margin: 0 auto']) ?>
        </div>
        <?php ActiveForm::end(); ?>
        <!--
        <div class="minicat3 cat-ani" >
            <div class="minicat-text">введите ваше имя</div>
            <div class="cat-lap" style="left: 70px"></div>
        </div>
        -->
    </div>
<?php
$js=<<<SCRIPT

$('#select-file').on('click',function(e){
    $('#file-input').click();
    return false;
});


var phoneError = $("form#designer_order .field-designer-phone p");

phoneError
    .css('line-height', '32px')
    .css('outline', '1px solid red')
    .css('outline-offset', '-1px')
    .css('padding-left', '5px')
    .css('margin-bottom', '-32px')
    .css('display','none')
    .css('background','white')
    ;


phoneError.on('click', function(){
    $(this).text('');
    $(this).css('display','none');
    $(this).prev().focus();
});

$("form#designer_order").on('submit', function(){
    setTimeout(function(){

        if(phoneError.text().length>0){
            phoneError.css('margin-bottom', '-32px');
            phoneError.css('display','block');
        }

    }, 200)

})

SCRIPT;
$this->registerJs($js);
