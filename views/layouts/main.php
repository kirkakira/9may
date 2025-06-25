<?php
use yii\helpers\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?> | Память Победы</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
        <?php $this->head() ?>
    </head>
    <body>
    <?php $this->beginBody() ?>

    <header class="site-header">
        <?php
        NavBar::begin([
            'brandLabel' => 'Память Победы',
            'brandUrl' => Yii::$app->homeUrl,
            'options' => [
                'class' => 'navbar navbar-expand-lg navbar-dark bg-dark-red fixed-top',
            ],
        ]);

        $menuItems = [
            ['label' => 'Главная', 'url' => ['/site/index']],
            ['label' => 'Статьи', 'url' => ['/article/index']],
            ['label' => 'О проекте', 'url' => ['/site/about']],
            ['label' => 'Курганский герой', 'url' => ['/hero/index']],
        ];

        if (Yii::$app->user->isGuest) {
            $menuItems[] = ['label' => 'Вход', 'url' => ['/user/login']];
            $menuItems[] = ['label' => 'Регистрация', 'url' => ['/user/signup'], 'options' => ['class' => 'btn-signup']];
        } else {
            $menuItems[] = [
                'label' => Yii::$app->user->identity->username,
                'items' => [
                    ['label' => 'Мои статьи', 'url' => ['/article/index', 'author_id' => Yii::$app->user->id]],
                    ['label' => 'Создать статью', 'url' => ['/article/create']],
                    '<li class="dropdown-divider"></li>',
                    ['label' => 'Выход', 'url' => ['/user/logout'], 'linkOptions' => ['data-method' => 'post']],
                ],
                'options' => ['class' => 'dropdown']
            ];
        }

        echo Nav::widget([
            'options' => ['class' => 'navbar-nav ms-auto'],
            'items' => $menuItems,
            'dropdownClass' => \yii\bootstrap5\Dropdown::class,
        ]);
        NavBar::end();
        ?>
    </header>

    <main class="main-content">
        <?= Breadcrumbs::widget([
            'links' => $this->params['breadcrumbs'] ?? [],
            'options' => ['class' => 'breadcrumb mb-4'],
        ]) ?>

        <?= $content ?>
    </main>

    <footer class="site-footer bg-dark-red text-white py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4 mb-md-0">
                    <h5 class="footer-title">Память Победы</h5>
                    <p>Проект посвящен сохранению памяти о Великой Отечественной войне и героях, отдавших свои жизни за наше будущее.</p>
                </div>

                <div class="col-md-4 mb-4 mb-md-0">
                    <h5 class="footer-title">Навигация</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2">
                            <?= Html::a('Главная', ['/site/index'], ['class' => 'nav-link p-0 text-white']) ?>
                        </li>
                        <li class="nav-item mb-2">
                            <?= Html::a('Статьи', ['/article/index'], ['class' => 'nav-link p-0 text-white']) ?>
                        </li>
                        <li class="nav-item mb-2">
                            <?= Html::a('О проекте', ['/site/about'], ['class' => 'nav-link p-0 text-white']) ?>
                        </li>
                    </ul>
                </div>

                <div class="col-md-4">
                    <h5 class="footer-title">Контакты</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2">
                            <i class="fas fa-envelope me-2"></i> info@pobeda-memory.ru
                        </li>
                        <li class="nav-item mb-2">
                            <i class="fas fa-phone me-2"></i> +7 (999) 123-45-67
                        </li>
                        <li class="nav-item mb-2">
                            <i class="fas fa-map-marker-alt me-2"></i> г. Москва, ул. Победы, 9
                        </li>
                    </ul>
                </div>
            </div>

            <div class="border-top mt-4 pt-4 text-center">
                <p>&copy; <?= date('Y') ?> Память Победы. Все права защищены. <br> Автор - Никитин Кира 33 гр.</p>
            </div>
        </div>
    </footer>

    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>