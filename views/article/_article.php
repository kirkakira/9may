<div class="card h-100 shadow-sm">
    <?php use yii\helpers\Html;

    if ($model->image): ?>
        <?= Html::img($model->getImageUrl(), [
            'class' => 'card-img-top',
            'alt' => $model->title,
            'style' => 'height: 200px; object-fit: cover;'
        ]) ?>
    <?php else: ?>
        <div class="card-img-top bg-light d-flex align-items-center justify-content-center" style="height: 200px;">
            <i class="fas fa-image fa-3x text-muted"></i>
        </div>
    <?php endif; ?>

    <div class="card-body">
        <h5 class="card-title"><?= Html::encode($model->title) ?></h5>
        <p class="card-text text-muted">
            <?= mb_substr(strip_tags($model->content), 0, 150) ?>...
        </p>
    </div>
    <div class="card-footer bg-transparent">
        <?= Html::a('Читать далее', ['view', 'id' => $model->id], [
            'class' => 'btn btn-outline-primary'
        ]) ?>
    </div>
</div>