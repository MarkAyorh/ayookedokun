<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ArticleComments */
/* @var $form ActiveForm */


$this->title = 'Read More';
$this->params['breadcrumbs'][] = $this->title;

$model->article_id = $id;
$model->date = Date('d-M-Y h:i:sa');
?>

<?php $form = ActiveForm::begin(); ?>

<div style="display: none">
    <?= $form->field($model, 'article_id') ?>
    <?= $form->field($model, 'date') ?>
</div>
<div style="width: 40%">
    <?= $form->field($model, 'firstname') ?>
    <?= $form->field($model, 'surname') ?>
    <?= $form->field($model, 'email') ?>
    <?= $form->field($model, 'location_town')->textInput()->input('text', ['placeholder' => "City of Residence"]) ?>
    <?= $form->field($model, 'location_country')->textInput()->input('text', ['placeholder' => "Country of Residence"]) ?>
</div>
    <?= $form->field($model, 'comment')->textarea(array('rows' => 6, 'cols' => 100, 'placeholder' => 'Limit: 500 characters')) ?>
    <div style="display: none">
        <?= $form->field($model, 'status')->dropDownList(['show' => 'Show Comment to Public', 'hide' => 'Hide Comment from Public']) ?>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>

</div><!-- article-comment -->
</div>

