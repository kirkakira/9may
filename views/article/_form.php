<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Article */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="article-form">
    <div class="card border-0 shadow">
        <div class="card-body">
            <?php $form = ActiveForm::begin([
                'options' => ['enctype' => 'multipart/form-data']
            ]); ?>

            <div class="row">
                <div class="col-lg-8">
                    <?= $form->field($model, 'title')->textInput([
                        'maxlength' => true,
                        'placeholder' => 'Введите заголовок статьи'
                    ]) ?>

                    <?= $form->field($model, 'content')->textarea([
                        'rows' => 10,
                        'placeholder' => 'Напишите содержание статьи...'
                    ]) ?>
                </div>

                <div class="col-lg-4">
                    <div class="card mb-4">
                        <div class="card-header bg-light">
                            <h5 class="mb-0">Изображение статьи</h5>
                        </div>
                        <div class="card-body">
                            <?= $form->field($model, 'imageFile')->fileInput([
                                'class' => 'form-control'
                            ])->label(false) ?>

                            <?php if ($model->image): ?>
                                <div class="mt-4 text-center">
                                    <p class="mb-2 fw-bold">Текущее изображение</p>
                                    <?= Html::img($model->getImageUrl(), [
                                        'class' => 'img-fluid rounded mb-2',
                                        'style' => 'max-height: 200px;'
                                    ]) ?>
                                    <p class="small text-muted mb-0"><?= $model->image ?></p>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="d-grid">
                        <?= Html::submitButton('Сохранить статью', [
                            'class' => 'btn btn-primary btn-lg'
                        ]) ?>
                    </div>
                </div>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>