<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="bgded overlay site-contact" style="background-image:url('theme/images/demo/backgrounds/herbs.jpg');"> 

    <div class="site-contact" style="width: 40%; margin: 0 auto; background-color: #ddd; padding: 1%">
        <div style=" margin-top: 2%; color: #000">
            <h1><?= Html::encode($this->title) ?> Form</h1>

            <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

                <div class="alert alert-success" style="min-height: 500px">
                    Thank you for contacting us. We will respond to you as soon as possible.
                </div>


            <?php else: ?>
                <p>
                    &nbsp;
                </p>


                <p>
                    If you have business inquiries or other matters, please contact us by filling out the following form or email us through above addressS.
                    Thank you.
                </p>

                <div >
                    <div style="width: 40%">

                        <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                        <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

                        <?= $form->field($model, 'email') ?>

                        <?= $form->field($model, 'subject') ?>
                    </div>
                    <div>

                        <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>

                        <?=
                        $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                            'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                        ])
                        ?>

                        <div class="form-group">
                            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                        </div>

                        <?php ActiveForm::end(); ?>

                    </div>
                </div>

            <?php endif; ?>
        </div>
    </div>
</div>
