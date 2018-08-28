<?php

use yii\helpers\Html;

$this->title = 'Past Episodes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bgded overlay" style="background-color: #0a0">
    <div class="readmore">
        <div style=" text-align: center">
            <a href="<?= Yii::$app->request->baseUrl ?>#episodes"><< Go back to choose another Audio piece</a>
        </div>       
        <p>
            &nbsp;
        </p>
        <div class="past_episodes" style="margin: 0 auto">
            <?php foreach ($episodes as $each_year_episode): ?>
                <a href="<?= Yii::$app->request->baseUrl ?>/audio/listen?date=<?= Html::encode($each_year_episode->date) ?>" style="color: #000">
                    <div>
                        <div style="background-color: #e4b9b9; padding: 2%; border-radius: 10px 10px 0px 0px; border-color: #008000">
                            <?= date("d-M-Y", strtotime($each_year_episode->date)) ?>
                        </div>
                        <div>
                            <img src='images/audioplayer.jpg'>
                        </div>
                        <div style="background-color: darkseagreen; width: 100%; padding: 2%">
                            <?= $each_year_episode->short_note ?>
                        </div>
                    </div>
                </a>
                <hr style="height:1px; border:none; background-color:#060" /> 
            <?php endforeach; ?>
        </div>
    </div>
</div>


