<?php

use yii\helpers\Url;

$this->title = 'Administration';
$this->params['breadcrumbs'][] = $this->title;
?>
<style>
    
    ol > li {
        font-size: large;
    }
</style>

<div class="site-contact" style="width: 30%; margin: 0 auto; padding-top: 10%">

    <ol>
        <li>
            <p>
                <a href="<?= Url::base() . '/audio/upload'; ?>">Upload Audio Track</a>
        </li>
        <li>
            <p>
                <a href="<?= Url::base() . '/article/article-upload'; ?>">Upload Article to publish</a>
        </li>
        <li>
            <p>
                <a href="<?= Url::base() . '/quotes'; ?>">Upload Quotable Quotes</a>
        </li>   
        <li>
            <p>
                <a href="<?= Url::base() . '/audio-search/'; ?>">Search and Edit Uploaded Audio</a>
        </li> 
        <li>
            <p>
                <a href="<?= Url::base() . '/article-search/'; ?>">Search and Edit Uploaded Article</a>
        </li> 
        
    </ol>

</div> 



