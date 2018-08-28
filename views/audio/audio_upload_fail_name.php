<?php $this->title = 'Upload Failed';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="admin-index" style="background-color: #fff; min-height: 200px; width: 80%; margin-left: auto; margin-right: auto">
    <div style="text-align: center">
        <a href="<?= Yii::$app->request->baseUrl ?>/admin"><< Go back to choose another Activity</a>
    </div>
    <div style="width: 80%; padding-left: 20%; padding-right: 20%; padding-bottom: 0">
        &nbsp;
        <h3 style="padding-top: 2em; color: red" >
            Audio upload Failed. Date format and Audio name do not match.
        </h3>
    </div>
</div>