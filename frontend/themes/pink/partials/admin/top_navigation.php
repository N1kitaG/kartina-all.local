<?php
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
?>

<?php if(Yii::$app->user->can('admin')):?>
    <div class="admin" style="width: 100%; position: fixed; top: 0; left: 0; z-index: 1000;">
        <?php
        NavBar::begin([
            'brandLabel' => 'Yii Navbar',
            'brandUrl' => Yii::$app->homeUrl,
            'options' => [
                'class' => 'navbar-default'
            ]
        ]);
        echo Nav::widget([
            'options' => [
                'class' => 'navbar-nav navbar-right'
            ],
            'items' => [
                [
                    'label' => 'Главная',
                    'url' => [
                        '#'
                    ]
                ],
                [
                    'label' => 'About',
                    'url' => [
                        '#'
                    ]
                ],
                [
                    'label' => 'Обратная связь',
                    'url' => [
                        '#'
                    ]
                ],
                Yii::$app->user->isGuest ? [
                    'label' => 'Войти',
                    'url' => [
                        '#'
                    ]
                ] : [
                    'label' => 'Выйти ('.Yii::$app->user->identity->username.')',
                    'url' => [
                        '#'
                    ],
                    'linkOptions' => [
                        'data-method' => 'post'
                    ]
                ]
            ]
        ]);
        NavBar::end();
        ?>
    </div>
<?php endif;?>