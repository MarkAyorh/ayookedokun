<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'listen';
$this->params['breadcrumbs'][] = $this->title;
?>



<div class="bgded overlay" style="background-image:url('<?= Yii::$app->request->baseUrl ?>/theme/images/demo/backgrounds/herbs.jpg')">
    <div class="readmore">
        <div style="text-align: center">
            <a href="<?= Yii::$app->request->baseUrl ?>#episodes"><< Go back to choose another Audio Piece</a>

            <div style="margin-bottom: 3px; padding-top: 1em; padding-left: 2em;">
                <strong style="color: #C00">
                    <h3>
                        <?= date("d-M-Y", strtotime($get_audio->date)) ?> Episode of Ohùn Enu Yoòbá
                    </h3>
                </strong>
            </div>
            <p style=" color: #000">
                <?= $get_audio->short_note ?>
            <p>
                <a href="#people"
                   <button class="btn btn-primary" type="button">
                        Comments <span class="badge"><?= Html::encode($audio_comments_count) ?></span>
                    </button>
                </a>

            <div style="width: 80%; margin: 0 auto">
                <img class="imgframe" alt="Picture" src="<?= Yii::$app->request->baseUrl ?>/images/studio_img1.jpg">
            </div>

            <div class="onecolumns">  
                <p>
                    &nbsp;
                </p>
                <font style="color: #000">Click play <span class="glyphicon glyphicon-play"></span> button to listen<font><br>
                <audio controls>
                    <source src="<?= Yii::$app->request->baseUrl ?>/audios/<?= date("d-M-Y", strtotime($get_audio->date)) ?>.mp3" type="audio/mp3"> 
                </audio>

            </div>
            <div class="readmoreButtons">
                <p>

                </p>

            </div>
            <div class="fontsize-sm-comments" style="padding-left: 1%; color: green; width: 100%; text-align: left">   
                <p>
                    &nbsp;
                </p>
                <p>
                   &nbsp; 
                </p>
                <strong id="people">
                    People's Comments on this topic:<br>
                </strong>      
                &nbsp; &nbsp; &nbsp; &nbsp;<br>
                <?php
                if (Html::encode($audio_comments_count) == 0) {
                    echo '(<strong>Be the first to post a comment on this topic</strong>)';
                }
                ?>
                <?php foreach ($audio_comments as $comment): ?>        
                    <span class="glyphicon glyphicon-user"></span>
                    <?= Html::encode($comment->firstname) ?> 
                    <?= Html::encode($comment->surname) ?><i>......from 
                    <?= $comment->location_town ?> <?= $comment->location_country ?> 
                        &nbsp; &nbsp;<?= date("d-M-Y", strtotime($comment->date)) ?>&nbsp; &nbsp; 
                        <?= $comment->time?></i>

                    <div style="text-align: left; color: blue">
                        <?= Html::encode($comment->comment) ?><br>
                    </div>  
                    <hr style="height:1px; border:none; background-color:#060" /> 
                <?php endforeach; ?>
                    <div style="text-align: center; padding-top: 2%">
                        <h1>
                           Post a Comment 
                        </h1>
                    </div> 
            </div>
            
            <div style="background-color: #8cce3b; padding: 2%; text-align: left">
                
                <?php 
                date_default_timezone_set("Africa/Lagos");
                $model->audio_id = $date;
                $model->date = Date('d-M-Y'); 
                $model->time = Date('h:i:sa');
                $model->status = 'show';
                $form = ActiveForm::begin(); ?>
                
                <div style="display: none">
                    <?= $form->field($model, 'audio_id') ?>
                    <?= $form->field($model, 'date') ?>
                    <?= $form->field($model, 'time') ?>
                </div>
                <div class="comment_form">
                    <?= $form->field($model, 'firstname') ?>
                    <?= $form->field($model, 'surname') ?>
                    <?= $form->field($model, 'location_town')->textInput()->input('text', ['placeholder' => "City of Residence"]) ?>
                    <?= $form->field($model, 'location_country')->textInput()->input('text', ['placeholder' => "Country of Residence"]) ?>
                </div>
                <?= $form->field($model, 'comment')->textarea(array('rows' => 6, 'cols' => 100, 'placeholder' => 'Limit 500 characters')) ?>

                <div style="display: none">
                    <?= $form->field($model, 'status')->dropDownList(['show' => 'Show Comment to Public', 'hide' => 'Hide Comment from Public']) ?>
                </div>

                <div class="form-group">
                    <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
                </div>
                <?php ActiveForm::end(); ?>
            </div>

        </div>
    </div>
</div>
