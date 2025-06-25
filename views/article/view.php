<?php
use yii\helpers\Html;

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Статьи', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="article-view">
    <div class="article-header text-center mb-5">
        <h1><?= Html::encode($model->title) ?></h1>
    </div>

    <div class="article-meta">
        <div class="article-author-img me-3">
            <?= mb_substr($model->author->username, 0, 1) ?>
        </div>
        <div>
            <div class="fw-bold fs-5"><?= Html::encode($model->author->username) ?></div>
            <div class="text-muted">
                <i class="fas fa-calendar-alt me-1"></i>
                <?= Yii::$app->formatter->asDatetime($model->created_at) ?>
                <?php if ($model->created_at != $model->updated_at): ?>
                    <span class="mx-2">|</span>
                    <i class="fas fa-sync-alt me-1"></i>
                    <?= Yii::$app->formatter->asDatetime($model->updated_at) ?>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <?php if ($model->image): ?>
        <div class="text-center mb-5">
            <?= Html::img($model->getImageUrl(), [
                'class' => 'article-image',
                'alt' => $model->title
            ]) ?>
        </div>
    <?php endif; ?>

    <div class="article-content mb-5">
        <?= nl2br(Html::encode($model->content)) ?>
    </div>

    <?php if (!Yii::$app->user->isGuest && $model->author_id == Yii::$app->user->id): ?>
        <div class="border-top pt-4 d-flex justify-content-center gap-3">
            <?= Html::a('<i class="fas fa-edit me-2"></i>Редактировать',
                ['update', 'id' => $model->id],
                ['class' => 'btn btn-primary px-4']) ?>

            <?= Html::a('<i class="fas fa-trash me-2"></i>Удалить',
                ['delete', 'id' => $model->id],
                [
                    'class' => 'btn btn-outline-danger px-4',
                    'data' => [
                        'confirm' => 'Вы уверены, что хотите удалить эту статью?',
                        'method' => 'post',
                    ],
                ]) ?>
        </div>
    <?php endif; ?>
</div>