<?php $this->title = 'Upload Success';
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="admin-index" style="background-color: #fff; min-height: 200px; width: 80%; margin-left: auto; margin-right: auto">
    <div style="text-align: center">
        <a href="<?= Yii::$app->request->baseUrl ?>/admin"><< Go back to choose another Activity</a>
    </div>
    <div style="width: 80%; padding-left: 20%; padding-right: 20%; padding-bottom: 0">
        &nbsp;
        <h3 style="padding-top: 2em; color: green">
            Quotable Quote uploaded successfully. Thank you.
        </h3>
    </div>
</div>