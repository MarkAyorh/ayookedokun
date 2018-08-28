<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ArticleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Articles';
$this->params['breadcrumbs'][] = $this->title;
?>
<div style="padding: 3%" class="articles-index">
    <div style="text-align: center">
        <a href="<?= Yii::$app->request->baseUrl ?>/admin"><< Go back to choose another activity</a>
    </div>
    
    <div style="width: 30%; margin: 0 auto; padding-top: 3%">
        <?php echo $this->render('_search', ['model' => $searchModel]); ?>
    </div>
    <!--
        <p>
    <?= Html::a('Create Articles', ['create'], ['class' => 'btn btn-success']) ?>
        </p>
    -->
    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            //'id',
            'category',
            'title',
            'body:ntext',
            'status',
            'picture',
            ['class' => 'yii\grid\ActionColumn',
                'template' => '{view} {update}',],
        ],
    ]);
    ?>
</div>
