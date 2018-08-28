<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;

$this->title = 'Audio Upload';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="admin-index" style="background-color: #ff; min-height: 200px; width: 80%; margin-left: auto; margin-right: auto">
    <div style="width: 80%; padding-left: 20%; padding-right: 20%; padding-bottom: 0">
        <p>
            &nbsp;
        </p>
        <a href="javascript:javascript:history.go(-1)"><< Go back to choose another action</a>
        <p>
            &nbsp;
        </p>
        <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
        <?php
        echo '<label>Pick appropriate Date</label>';
        echo DatePicker::widget([
            'name' => 'date',
            'size' => 'md',
            'value' => date('d-M-Y', strtotime('0 days')),
            'options' => ['placeholder' => 'Select seminar date ...'],
            'pluginOptions' => [
                'format' => 'dd-M-yyyy',
                'todayHighlight' => true
            ]
        ]);
        ?>
        <?= $form->field($model, 'short_note') ?>
        <p>
            <?= $form->field($model, 'status')->dropDownList(['show' => 'Show Audio to Public', 'hide' => 'Hide Audio from Public']); ?>
        <p>
            <?= $form->field($model, 'file')->fileInput() ?>
        <p>
            <font style="color: blue">Date format and Audio name must match e.g (<?= Date('d-M-Y') ?>)</font>

        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>

        <?php ActiveForm::end(); ?>
    </div>
</div>
