<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;

$this->title = 'Article Upload';
$this->params['breadcrumbs'][] = $this->title;
$model->date = Date('Y-m-d');
?>

<div class="admin-index" style="background-color: #ff; min-height: 200px; width: 80%; margin-left: auto; margin-right: auto">
    <div style="width: 80%; padding-left: 20%; padding-right: 20%; padding-bottom: 0">
        <p>
            &nbsp;
        </p>
        <a href="<?= Url::base() . '/admin'; ?>"><< Go back to choose another action</a>
        <p>
            &nbsp;
        </p>
        <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
        <div style="display: none">
            <?= $form->field($model, 'date') ?>
        </div>
        <?= $form->field($model, 'category') ?>
        <?= $form->field($model, 'title') ?>
        <?= $form->field($model, 'body') ?>
        <?= $form->field($model, 'status')->dropDownList(['show' => 'Show Article to Public', 'hide' => 'Hide Article from Public']); ?>
        <?= $form->field($model, 'picture') ?>
        <p>
            <?= $form->field($model, 'file')->fileInput() ?>
        <p>
        <p>
            <font style="color: blue">Name of picture above must match that of uploaded picture</font>

        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>

        <?php ActiveForm::end(); ?>
    </div>
</div>

