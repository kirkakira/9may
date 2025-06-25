<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>


<div class="hero-section text-center py-5 mb-5" style="
        background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
        url('<?= Url::to('@web/images/gallery/10.jpg') ?>');
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        color: white;
        padding: 120px 0;
        margin-top: -20px;
        position: relative;
        overflow: hidden;
        clip-path: polygon(0 0, 100% 0, 100% 90%, 0 100%);
        margin-bottom: 80px;
        ">
    <div class="container position-relative z-index-1">
        <h1 class="display-3 mb-4 fw-bold">День Великой Победы</h1>
        <div class="divider mx-auto bg-accent mb-4" style="height: 4px; width: 100px;"></div>
        <p class="lead mb-5 fs-2" style="max-width: 800px; margin: 0 auto; text-shadow: 1px 1px 3px rgba(0,0,0,0.5)">
            Мы помним подвиг наших героев и чтим их память. Присоединяйтесь к нам, чтобы сохранить историческую правду для будущих поколений.
        </p>
        <div class="d-flex justify-content-center flex-wrap gap-4">
            <?= Html::a('Читать статьи', ['article/index'], [
                'class' => 'btn btn-primary btn-lg px-5 py-3 fw-bold'
            ]) ?>
            <?= Html::a('Создать статью', ['article/create'], [
                'class' => 'btn btn-outline-light btn-lg px-5 py-3 fw-bold'
            ]) ?>
        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-lg-10 text-center">
            <h2 class="mb-4 position-relative d-inline-block">Последние статьи
                <span class="position-absolute bottom-0 start-50 translate-middle-x bg-accent"
                      style="height: 3px; width: 80px;"></span>
            </h2>
            <p class="lead text-secondary fs-4">
                Читайте истории о подвигах, героях и событиях Великой Отечественной войны
            </p>
        </div>
    </div>

    <div class="row g-4">
        <?php foreach ($latestArticles as $article): ?>
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 border-0 shadow-sm transition hover-shadow">
                    <?php if ($article->image): ?>
                        <?= Html::img($article->getImageUrl(), [
                            'class' => 'card-img-top img-cover',
                            'alt' => $article->title,
                            'style' => 'height: 220px; object-fit: cover;'
                        ]) ?>
                    <?php else: ?>
                        <div class="card-img-top bg-secondary bg-opacity-10 d-flex align-items-center justify-content-center"
                             style="height: 220px;">
                            <i class="fas fa-image fa-4x text-secondary opacity-25"></i>
                        </div>
                    <?php endif; ?>

                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-primary bg-opacity-10 text-primary rounded-pill px-3 py-1 small">
                                <?= Yii::$app->formatter->asDate($article->created_at) ?>
                            </div>
                        </div>
                        <h3 class="card-title h5"><?= Html::encode($article->title) ?></h3>
                        <p class="card-text text-muted">
                            <?= mb_substr(strip_tags($article->content), 0, 120) ?>...
                        </p>
                    </div>
                    <div class="card-footer bg-transparent border-0 pt-0">
                        <?= Html::a('Читать далее', ['article/view', 'id' => $article->id], [
                            'class' => 'btn btn-outline-primary stretched-link'
                        ]) ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="text-center mt-5 mb-5">
        <?= Html::a('Все статьи', ['article/index'], [
            'class' => 'btn btn-primary btn-lg px-5 py-3 fw-bold'
        ]) ?>
    </div>

    <div class="about-section bg-light p-5 rounded-4 mb-5 shadow-sm">
        <div class="row align-items-center g-5">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h2 class="mb-4">О нашем проекте</h2>
                <p class="lead text-secondary">
                    "Память Победы" - это платформа, созданная для сохранения и передачи памяти о Великой Отечественной войне.
                </p>
                <p class="text-muted">
                    Здесь каждый может поделиться историями своих героев, опубликовать архивные материалы и сохранить память о подвиге нашего народа.
                </p>
                <div class="d-flex gap-3 mt-4">
                    <?= Html::a('Узнать больше', ['site/about'], [
                        'class' => 'btn btn-primary px-4'
                    ]) ?>
                    <?= Html::a('Галерея', ['site/gallery'], [
                        'class' => 'btn btn-outline-primary px-4'
                    ]) ?>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="rounded-4 overflow-hidden shadow">
                    <?= Html::img('@web/images/gallery/7.jpg', [
                        'class' => 'img-fluid w-100 transition hover-scale',
                        'alt' => 'О проекте',
                        'style' => 'height: 350px; object-fit: cover;'
                    ]) ?>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Кастомные стили для страницы */
    .hero-section {
        position: relative;
    }

    .hero-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.6);
        z-index: 0;
    }

    .img-cover {
        transition: transform 0.5s ease;
    }

    .hover-scale:hover .img-cover {
        transform: scale(1.05);
    }

    .hover-shadow:hover {
        box-shadow: 0 10px 30px rgba(0,0,0,0.1) !important;
    }

    .transition {
        transition: all 0.3s ease;
    }

    .bg-accent {

    }

    .z-index-1 {
        z-index: 1;
    }

    .btn-primary {
        background-color: #e63946;
        border-color: #e63946;
    }

    .btn-primary:hover {
        background-color: #c1121f;
        border-color: #c1121f;
    }

    .btn-outline-primary {
        color: #e63946;
        border-color: #e63946;
    }

    .btn-outline-primary:hover {
        background-color: #e63946;
        color: white;
    }
</style>