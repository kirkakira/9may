<?php
use yii\helpers\Html;

$this->title = 'О проекте';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-about">
    <div class="text-center mb-5">
        <h1 class="mb-4"><?= Html::encode($this->title) ?></h1>
        <p class="lead text-muted">Платформа для сохранения памяти о Великой Победе</p>
    </div>

    <div class="row justify-content-center mb-5">
        <div class="col-lg-10">
            <div class="card border-0 shadow">
                <div class="card-body p-5">
                    <div class="row align-items-center">
                        <div class="col-lg-6 mb-4 mb-lg-0">
                            <h2 class="mb-4">Наша миссия</h2>
                            <p class="lead">
                                Сохранить память о героях Великой Отечественной войны для будущих поколений.
                            </p>
                            <p>
                                Проект "Память Победы" создан с целью объединения людей, которые хотят сохранить историческую правду о событиях 1941-1945 годов. Мы верим, что память о подвиге наших предков должна жить вечно.
                            </p>
                        </div>
                        <div class="col-lg-6">
                            <?= Html::img('@web/images/gallery/5.jpg', [
                                'class' => 'img-fluid rounded',
                                'alt' => 'Наша миссия'
                            ]) ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mb-5">
        <div class="col-lg-4 mb-4">
            <div class="card border-0 shadow h-100">
                <div class="card-body text-center p-4">
                    <div class="icon-circle bg-dark-red text-white mb-4 mx-auto">
                        <i class="fas fa-book fa-2x"></i>
                    </div>
                    <h3 class="h4">Исторические материалы</h3>
                    <p class="mb-0">
                        Коллекция статей, документов и фотографий, связанных с событиями Великой Отечественной войны.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-lg-4 mb-4">
            <div class="card border-0 shadow h-100">
                <div class="card-body text-center p-4">
                    <div class="icon-circle bg-dark-red text-white mb-4 mx-auto">
                        <i class="fas fa-users fa-2x"></i>
                    </div>
                    <h3 class="h4">Сообщество</h3>
                    <p class="mb-0">
                        Возможность для каждого поделиться историями своих героев и сохранить память о них.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-lg-4 mb-4">
            <div class="card border-0 shadow h-100">
                <div class="card-body text-center p-4">
                    <div class="icon-circle bg-dark-red text-white mb-4 mx-auto">
                        <i class="fas fa-graduation-cap fa-2x"></i>
                    </div>
                    <h3 class="h4">Образование</h3>
                    <p class="mb-0">
                        Просветительские материалы для школьников и студентов о событиях Великой Отечественной войны.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>