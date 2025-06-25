<?php
use yii\helpers\Html;
use yii\widgets\ListView;

$this->title = 'Статьи о Великой Победе';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="article-index container-fluid px-0">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-5 mx-3">
            <h1 class="mb-0"><?= Html::encode($this->title) ?></h1>
            <?= Html::a('<i class="fas fa-plus-circle me-2"></i>Новая статья', ['create'], [
                'class' => 'btn btn-primary btn-lg'
            ]) ?>
        </div>
    </div>

    <div class="container">
        <?= ListView::widget([
            'dataProvider' => $dataProvider,
            'itemView' => '_article',
            'options' => ['class' => 'row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 mx-0'],
            'itemOptions' => ['class' => 'col px-2'],
            'layout' => "{items}\n<div class='mt-5 d-flex justify-content-center'>{pager}</div>",
            'emptyText' => '<div class="col-12 text-center py-5"><i class="fas fa-book-open fa-3x mb-3 text-muted"></i><h4>Статьи не найдены</h4><p>Будьте первым, кто добавит статью</p></div>',
        ]) ?>
    </div>
</div>