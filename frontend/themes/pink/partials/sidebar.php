<?php
use common\models\Category;
?>
<aside class="main-sidebar">
    <?php if($isHome):?>
        <?= $this->render('/partials/sidebar/modul');?>
        <?= $this->render('/partials/sidebar/colors');?>
        <?= $this->render('/partials/sidebar/poster',['limit'=>0,'all'=>true]);?>
        <?= $this->render('/partials/sidebar/reproduction',['limit'=>0,'all'=>true]);?>
        <?= $this->render('/partials/clockArt');?>
    <?php else:?>
        <?php if(Yii::$app->controller->id == 'category' or Yii::$app->controller->id == 'product'):?>
            <?php
            $cate = isset(Yii::$app->params['category'])?Yii::$app->params['category']: Category::find()->where(['id'=>77])->one();
            $ch = $cate->parent_id ? $cate->parent_id : $cate->id;
            ?>
            <?php switch($ch):
                case 77:?>
                    <?= $this->render('/partials/sidebar/modul',['category'=>$cate]);?>
                    <?= $this->render('/partials/sidebar/colors',['category'=>$cate]);?>
                    <?= $this->render('/partials/sidebar/poster',['limit'=>0,'all'=>true,'category'=>$cate]);?>
                    <?= $this->render('/partials/sidebar/reproduction',['limit'=>0,'all'=>true,'category'=>$cate]);?>
                    <?= $this->render('/partials/clockArt');?>
                    <?php break;?>
                <?php case 76:?>
                    <?= $this->render('/partials/sidebar/poster',['category'=>$cate]);?>
                    <?= $this->render('/partials/sidebar/colors',['category'=>$cate]);?>
                    <?= $this->render('/partials/sidebar/modul',['limit'=>0,'all'=>true,'category'=>$cate]);?>
                    <?= $this->render('/partials/sidebar/reproduction',['limit'=>0,'all'=>true,'category'=>$cate]);?>
                    <?= $this->render('/partials/clockArt');?>
                    <?php break;?>
                <?php case 23:?>
                    <?= $this->render('/partials/sidebar/reproduction',['category'=>$cate]);?>
                    <?= $this->render('/partials/sidebar/colors',['category'=>$cate]);?>
                    <?= $this->render('/partials/sidebar/modul',['limit'=>0,'all'=>true,'category'=>$cate]);?>
                    <?= $this->render('/partials/sidebar/poster',['limit'=>0,'all'=>true,'category'=>$cate]);?>
                    <?= $this->render('/partials/clockArt');?>
                    <?php break;?>
                <?php default:?>
                    <?= $this->render('/partials/sidebar/modul',['category'=>$cate]);?>
                    <?= $this->render('/partials/sidebar/colors',['category'=>$cate]);?>
                    <?= $this->render('/partials/sidebar/poster',['limit'=>0,'all'=>true,'category'=>$cate]);?>
                    <?= $this->render('/partials/sidebar/reproduction',['limit'=>0,'all'=>true,'category'=>$cate]);?>
                    <?= $this->render('/partials/clockArt');?>
                    <?php break;?>
                <?php endswitch;?>
        <?php else:?>
            <?= $this->render('/partials/sidebar/modul');?>
            <?= $this->render('/partials/sidebar/colors');?>
            <?= $this->render('/partials/sidebar/poster',['limit'=>0,'all'=>true]);?>
            <?= $this->render('/partials/sidebar/reproduction',['limit'=>0,'all'=>true]);?>
            <?= $this->render('/partials/clockArt');?>
        <?php endif;?>
    <?php endif;?>
    <?= $this->render('/partials/review');?>
</aside>