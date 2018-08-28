<?php

use yii\helpers\Html;

$this->title = 'Past Episodes';
$this->params['breadcrumbs'][] = $this->title;
?>
<style>

</style>
<div class="bgded overlay" style="background-color: #0a0">

    <div class="readmore">
        <div style=" text-align: center">
            <a href="<?= Yii::$app->request->baseUrl ?>#articles"><< Go back to choose another Article</a>
        </div>       
        <p>
            &nbsp;
        </p>
        <?php foreach ($articles as $each_year_article): ?>
            <a href="<?= Yii::$app->request->baseUrl ?>/article/read?id=<?= Html::encode($each_year_article->id) ?>">
                <div class="card_past_articles"> 
                    <div class="card_inner_left">
                        <img style="width: 100%; height: 100%" alt="Picture" src="<?= Yii::$app->request->baseUrl ?>/articles/<?= Html::encode($each_year_article->picture) ?>.jpg">        

                    </div>
                    <div class="card_inner_right">
                        <?= strtoupper(Html::encode($each_year_article->title)) ?>
                    </div>
                </div>
            </a> 
            <p>
                &nbsp;
            </p>
        <?php endforeach; ?>
    </div>
</div>


