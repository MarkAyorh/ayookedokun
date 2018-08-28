<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<?php
$this->title = 'Read More';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="bgded overlay" style="background-image:url('<?= Yii::$app->request->baseUrl ?>/theme/images/demo/backgrounds/herbs.jpg')">
    <div class="readmore">
        <div style="text-align: center">
            <a href="<?= Yii::$app->request->baseUrl ?>#articles"><< Go back to choose another Article</a>


            <div style="padding-top: 1em; padding-left: 2em; padding-bottom: 2em">
                <strong style="color: #C00">
                    <h3>
                        <?= ucfirst(Html::encode($get_article->category)) ?> <br>
                    </h3>
                    <?= strtoupper(Html::encode($get_article->title)) ?>
                </strong>
            </div>
            <p>
            </p>
            <div style="text-align: center;">

                <a href="#people"
                   <button class="btn btn-primary" type="button">
                        Comments <span class="badge"><?= Html::encode($article_comments_count) ?></span>
                    </button>
                </a>
            </div>
            <p>
            </p>
            <div style="width: 80%; margin: 0 auto">
                <img class="imgframe" alt="Picture" src="<?= Yii::$app->request->baseUrl ?>/articles/<?= Html::encode($get_article->picture) ?>.jpg">
            </div>

            <div style="color: #000; text-align: left" class="onecolumns">  
                <p>
                    &nbsp;
                </p>
                <?= nl2br($get_article->body) ?>

            </div>
            <div class="readmoreButtons">
                <p>

                </p>
                <?= Html::button('Post a Comment', ['id' => 'modelButton', 'value' => \yii\helpers\Url::to(['article/comment?id=' . $get_article->id]), 'class' => 'btn btn-primary']) ?>
                
            </div>

            <div class="fontsize-sm-comments" style="padding-left: 3%; color: green; width: 100%; text-align: left"> 
                <p>

                </p>
                <strong id="people">
                    People's Comments on this topic:<br>
                </strong>      
                &nbsp; &nbsp; &nbsp; &nbsp;<br>
                <?php
                if (Html::encode($article_comments_count) == 0) {
                    echo '(<strong>Be the first to post a comment on this topic</strong>)';
                }
                ?>
                <?php foreach ($article_comments as $comment): ?>        
                    <span class="glyphicon glyphicon-user"></span>
                    <?= Html::encode($comment->firstname) ?> 
                    <?= Html::encode($comment->surname) ?><i>......from 
                    <?= Html::encode($comment->location_town) ?> 
                    <?= Html::encode($comment->location_country) ?> &nbsp; &nbsp;
                    <?= Html::encode($comment->date) ?>&nbsp; &nbsp; 
                        <?= $comment->time?></i><br>

                    <div style="text-align: left; color: blue">
                        <?= Html::encode($comment->comment) ?><br>
                    </div>  
                    <hr style="height:1px; border:none; background-color:#060" /> 
                <?php endforeach; ?>
            </div>
            <div style="text-align: center; color: green; padding-top: 2%">
                <h1>
                    Post a Comment 
                </h1>
            </div> 
        </div>

        <div style="background-color: #8cce3b; padding: 2%; text-align: left">

            <?php
            date_default_timezone_set("Africa/Lagos");
            $model->article_id = $id;
            $model->date = Date('d-M-Y');
            $model->time = Date('h:i:sa');
            $model->status = 'show';
            $form = ActiveForm::begin();
            ?>

            <div style="display: none">
                <?= $form->field($model, 'article_id') ?>
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



