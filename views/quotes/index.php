<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Quotes */
/* @var $form ActiveForm */

$this->title = 'Quotes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="quotes-index" style="width: 40%; margin: 0 auto; padding-top: 3%">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'quote')->textInput()->input('text', ['placeholder' => "The body of the quotable quote"]) ?>
        <?= $form->field($model, 'author')->textInput()->input('text', ['placeholder' => "The Author of the quotable quote"]) ?>
    
        <div class="form-group">
            <?= Html::submitButton('Upload', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- quotes-index -->
