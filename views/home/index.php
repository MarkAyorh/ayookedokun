<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
?>
<div class="bgded overlay" style="background-image:url('theme/images/demo/backgrounds/herbs.jpg');"> 
    <!-- ################################################################################################ -->
    <div class="wrapper row1">
        <header id="header" class="hoc clear"> 
            <!-- ################################################################################################ -->
            <div id="logo" class="fl_left" style=" text-align: center">
                <img src='<?= Yii::$app->request->baseUrl ?>/images/lips_circular.png' style=" width: 50%">
                <h1>
                    Ohùn Enu Yoòbá
                </h1>
                (Yoruba Oral Tradition)
            </div>
            <nav id="mainav" class="fl_right">
                <ul class="clear">
                    <li><a style="text-decoration: none" href="<?= Yii::$app->request->baseUrl ?>#episodes">Past Episodes</a></li>                    
                    <li><a style="text-decoration: none" href="<?= Yii::$app->request->baseUrl ?>#articles">Articles</a></li>
                    <!--
                    <li><a href="#">Photo Gallery</a></li>
                    -->
                    <li><a style="text-decoration: none" href="<?= Yii::$app->request->baseUrl ?>/advert-rate">Advert Rate</a></li>
                </ul>
            </nav>

            <!-- ################################################################################################ -->
        </header>
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div id="pageintro" class="hoc clear"> 
        <!-- ################################################################################################ -->
        <div class="flexslider basicslider">
            <ul class="slides">
                <li>
                    <article>
                        <p>Listen Live!</p>
                        <h3 class="heading">Radio Lagos</h3>
                        <p>107.5 FM, Thursdays 8:10pm</p>
                        <footer><a class="btn">Repeat<font class="hide_text"> Broadcast</font>: Tuesdays 1:05am</a></footer>
                    </article>                   
                </li>
                <li>
                    <article>
                        <p>For Sponsorship!</p>
                        <h3 class="heading">Advertise Here</h3>
                        <p>Promote Your Goods and Services</p>
                        <footer><a class="btn inverse" href="<?= Yii::$app->request->baseUrl ?>/advert-rate">Click for Advert Rate</a></footer>
                    </article>
                </li>
                <li>
                    <article>
                        <p>Listen Live!</p>
                        <h3 class="heading">Radio Lagos</h3>
                        <p>107.5 FM, Thursdays 8:10pm</p>
                        <footer><a class="btn">Repeat<font class="hide_text"> Broadcast</font>: Tuesdays 1:05am</a></footer>
                    </article>
                </li>
                <li>
                    <article>
                        <p>For Sponsorship!</p>
                        <h3 class="heading">Advertise Here</h3>
                        <p>Promote Your Goods and Services</p>
                        <footer><a class="btn inverse" href="<?= Yii::$app->request->baseUrl ?>/advert-rate">Click for Advert Rate</a></footer>
                    </article>
                </li>
            </ul>
        </div>
        <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->
</div>
<!-- End Top Background Image Wrapper -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
    <p>
        &nbsp;
    </p>
    <div class="center btmspace-30" style="font-size: xx-large">
        Ohùn Enu Yoòbá
    </div> 
    <div class="recentEpisodes">
        <span id="episodes">
            Recent Episodes
        </span>
    </div>
    <div class=" audioWrapper">
        <div class="audioInnerWrapperLeft">        
            <div class="audioInnerLeftLeft"> 
                <?php foreach ($recent_audio_left as $left_audios): ?>
                    <a href="<?= Yii::$app->request->baseUrl ?>/audio/listen?date=<?= Html::encode($left_audios->date) ?>" style="color: #000">
                        <div>
                            <div style="background-color: #e4b9b9; padding: 2%; border-radius: 10px 10px 0px 0px; border-color: #008000">
                                <?= date("d-M-Y", strtotime($left_audios->date)) ?>
                            </div>
                            <div>
                                <img src='<?= Yii::$app->request->baseUrl ?>/images/audioplayer.jpg'>
                            </div>
                            <div style="background-color: darkseagreen; width: 100%; padding: 2%">
                                <?= $left_audios->short_note ?>
                            </div>
                        </div>
                    </a>
                    <hr style="height:1px; border:none; background-color:#060" /> 
                <?php endforeach; ?>
            </div>
            <div class="audioInnerLeftRight">
                <?php foreach ($recent_audio_right as $right_audios): ?>
                    <a href="<?= Yii::$app->request->baseUrl ?>/audio/listen?date=<?= Html::encode($right_audios->date) ?>" style="color: #000">
                        <div>
                            <div style="background-color: #e4b9b9; padding: 2%; border-radius: 10px 10px 0px 0px; border-color: #008000">
                                <?= date("d-M-Y", strtotime($right_audios->date)) ?>
                            </div>
                            <div>
                                <img src='<?= Yii::$app->request->baseUrl ?>/images/audioplayer.jpg'>
                            </div>
                            <div style="background-color: darkseagreen; width: 100%; padding: 2%">
                                <?= $right_audios->short_note ?>
                            </div>
                        </div>
                    </a>
                    <hr style="height:1px; border:none; background-color:#060" /> 
                <?php endforeach; ?>
            </div> 
        </div>
        <div class="audioInnerWrapperRight">
            <img src='<?= Yii::$app->request->baseUrl ?>/images/egberun.jpg'>            

            <div class="audioInnerRightLeft">

                <div class="past_episodes" style=" display: inline-block; width: 45%; margin-left: 3%; padding-left: 2%; border: 1px solid">
                    <font style=" color: #cc0000;">  
                    <p>
                        PAST EPISODES
                    </p>
                    </font>
                    
                    <div style="width: 90%">
                        <?php foreach ($all_years_audios as $each_year): ?> 
                            <a href="<?= Yii::$app->request->baseUrl ?>/past-episodes?year=<?= Html::encode($each_year->date) ?>" style="color: #008000">- Year <?= $each_year->date ?>
                            </a><br>
                            &nbsp;<br>
                        <?php endforeach; ?>
                        <br>

                    </div>
                </div>
                <div class="audioInnerRightRight">
                    <img src='<?= Yii::$app->request->baseUrl ?>/images/eagle_aromatic1.jpg'>
                </div>
            </div>

        </div>
    </div>

</div>


</div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/02.png');">
    <article class="hoc container clear"> 
        <!-- ################################################################################################ -->
        <div class="three_quarter first">
            <h6 class="nospace">Publish An Article!</h6>
            <p class="nospace">Write articles on traditions, traditional and orthodox medicine, 
                traditional science and conventional technology. We promote originality. Mention author's name if not original.</p>
        </div>
        <footer class="one_quarter"><a class="btn" href="<?= Yii::$app->request->baseUrl ?>/advert-rate">Publishing Rate &raquo;</a></footer>
        <!-- ################################################################################################ -->
    </article>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<div class="wrapper row3" style="padding: 15px">
    <p>
        &nbsp;
    </p>
    <div class="center btmspace-80" style="font-size: xx-large">
        Articles

    </div> 
    <div id="articles" class="recentEpisodes">
        <span style="color: #a00">
            Recent Articles
        </span>
    </div>
    <div class="articleWrapper">     
        <div class="articleInnerWrapperLeft">
            <div class="articleInnerLeftLeft"> 
                <?php foreach ($recent_article_left as $left_articles): ?>
                    <p style="color: #C00; font-size: 1.3em">
                        <?= ucfirst(Html::encode($left_articles->category)) ?>
                    </p>
                    <a href="<?= Yii::$app->request->baseUrl ?>/article/read?id=<?= Html::encode($left_articles->id) ?>">                    
                        <img class="imgFramePost" alt="Picture" src="<?= Yii::$app->request->baseUrl ?>/articles/<?= $left_articles->picture ?>.jpg">
                    </a>

                    <p style="color: #C00">
                        <b>
                            <?= strtoupper($left_articles->title) ?><br>
                        </b>
                    </p>
                    <?php
                    $limit = implode(' ', array_slice(explode(' ', $left_articles->body), 0, 30));
                    echo nl2br($limit);
                    ?> .....<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <a href="<?= Yii::$app->request->baseUrl ?>/article/read-?id=<?= Html::encode($left_articles->id) ?>" style="color: #C00;">                            
                        <br><span id="readMore" class="glyphicon glyphicon-hand-right"></span>
                        <b id="readMore">
                            Read More 
                        </b>
                    </a>
                    <hr style="height:1px; border:none; background-color:#060" />
                <?php endforeach; ?>            
            </div>   

            <div class="articleInnerLeftRight">
                <?php foreach ($recent_article_right as $right_articles): ?>
                    <p style="color: #C00; font-size: 1.3em">
                        <?= ucfirst(Html::encode($right_articles->category)) ?>
                    </p>
                    <a href="<?= Yii::$app->request->baseUrl ?>/article/read?id=<?= Html::encode($right_articles->id) ?>">                    
                        <img alt="Picture" src="<?= Yii::$app->request->baseUrl ?>/articles/<?= $right_articles->picture ?>.jpg">
                    </a>

                    <p style="color: #C00">
                        <b>
                            <?= strtoupper($right_articles->title) ?><br>
                        </b>
                    </p>
                    <?php
                    $limit = implode(' ', array_slice(explode(' ', Html::encode($right_articles->body)), 0, 30));
                    echo nl2br($limit);
                    ?> .....<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <a href="<?= Yii::$app->request->baseUrl ?>/article/read?id=<?= Html::encode($right_articles->id) ?>" style="color: #C00;">                            
                        <br><span id="readMore" class="glyphicon glyphicon-hand-right"></span>
                        <b id="readMore">
                            Read More 
                        </b>
                    </a>
                    <hr style="height:1px; border:none; background-color:#060" />
                <?php endforeach; ?> 
            </div>

        </div>
        <div class="articleInnerWrapperRight" style="background-color: #e4b9b9;">
            <div class="articleInnerRightLeft">
                <font class="quote">
                QUOTE: 
                </font>
                <blockquote>
                    <?= $quote->quote ?>"....... <?= $quote->author ?>.
                </blockquote>
                <p>
                </p>
                <img src='<?= Yii::$app->request->baseUrl ?>/images/omo_elede.jpg'>
            </div>
            <div class="articleInnerRightRight">

                <div class="past_episodes" style="display: inline-block; width: 50%; margin-top: 3%; border: 1px solid; padding-left: 2%">
                    <font style=" color: #cc0000;">  
                    <p>
                        PAST ARTICLES
                    </p>
                    
                    <div style="width: 90%">
                        <?php foreach ($all_years_articles as $each_year_articles): ?> 
                            <a href="<?= Yii::$app->request->baseUrl ?>/past-articles?year=<?= Html::encode($each_year_articles->date) ?>" style="color: #008000">- Year <?= $each_year_articles->date ?>
                            </a><br>
                            &nbsp;<br>
                        <?php endforeach; ?>
                        <br>
                    </div>
                </div>
                <div style="display: inline-block; width: 50%">
                    &nbsp;
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/03.png');">
    <article class="hoc container center"> 
        <!-- ################################################################################################ -->
        <i class="block btmspace-50 fa fa-4x fa-support"></i>
        <h6>For Sponsorship!</h6>
        <p class="btmspace-50">Advertise your Goods, Services and Events with us</p>
        <footer><a class="btn inverse" href="<?= Yii::$app->request->baseUrl ?>/advert-rate">See Advert Rate</a></footer>
        <!-- ################################################################################################ -->
    </article>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
    <section class="hoc container clear"> 
        <!-- ################################################################################################ -->
        <div class="btmspace-50 center" style=" color: #cc0000;">
            <h2><strong>For Webpage Advertisements</strong> </h2>
            <p>(Introduce Your Website. Clicking "Read More" will take people to your webpage)</p>
        </div>
        <ul class="nospace group">
            <li class="one_third first">
                <article class="excerpt"><a href="#"><img class="inspace-10 borderedbox" src="<?= Yii::$app->request->baseUrl ?>/images/demo/320x220.png" alt=""></a>
                    <div class="excerpttxt">            
                        <h6 class="heading font-x1">Sports news like none before. This is where to get latest news on sports.</h6>
                        <p><a href="#">Read More &raquo;</a></p>
                    </div>
                </article>
            </li>
            <li class="one_third">
                <article class="excerpt"><a href="#"><img class="inspace-10 borderedbox" src="<?= Yii::$app->request->baseUrl ?>/images/demo/320x220.png" alt=""></a>
                    <div class="excerpttxt">            
                        <h6 class="heading font-x1">Traditional Medicine at its best; God did not build medical schools but herbal doctors.</h6>
                        <p><a href="#">Read More &raquo;</a></p>
                    </div>
                </article>
            </li>
            <li class="one_third">
                <article class="excerpt"><a href="#"><img class="inspace-10 borderedbox" src="<?= Yii::$app->request->baseUrl ?>/images/demo/320x220.png" alt=""></a>
                    <div class="excerpttxt">            
                        <h6 class="heading font-x1">What is true worship; Church sponsored programme</h6>
                        <p><a href="#">Read More &raquo;</a></p>
                    </div>
                </article>
            </li>
        </ul>
        <!-- ################################################################################################ -->
    </section>
</div>
<div>

</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

