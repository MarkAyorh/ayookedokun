<?php

use yii\helpers\Html;
use yii\grid\GridView;

use yii\bootstrap\Modal;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AudioSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Audios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="audios-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::button('Create Audios', ['id' => 'modelButton', 'value' => \yii\helpers\Url::to(['audio-search/create']), 'class' => 'btn btn-primary']) ?>
    </p>
    <?php
    Modal::begin([
        'header' => '<h4>Create Audios</h4>',
        'id' => 'modal',
        'size' => 'model-lg',
    ]);
    echo "<div id='modelContent'></div>";

    Modal::end();
    ?>

    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            'date',
            'short_note',
            'status',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]);
    ?>
</div>
