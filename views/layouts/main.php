<?php
/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <?php $this->title = 'Ayo Okedokun: Ohùn Enu Yoòbá'; ?>
        <title><?= Html::encode($this->title) ?></title>
        <link rel="shortcut icon" href="<?php echo Yii::$app->getHomeUrl(); ?>favicon.ico"/>
        <?php $this->head() ?>
    </head>
    <body>
        <?php $this->beginBody() ?>

        <div class="wrap">

            <div class="wrapper row0">
                <div id="topbar" class="hoc clear"> 
                    <!-- ################################################################################################ -->
                    <div class="fl_left">
                        <ul class="nospace">
                            <li><i class="fa fa-phone"></i> +234 802 6703 619</li>
                            <li><i class="fa fa-envelope-o"></i><text style="text-transform: lowercase"> ayowriteokedokun@yahoo.com</text></li>
                        </ul>
                    </div>
                    <div class="fl_right">
                        <?php
                        echo Nav::widget([
                            'options' => ['class' => 'navbar-nav navbar-right'],
                            'items' => [
                                ['label' => 'Home', 'url' => ['/']],
                                ['label' => 'About', 'url' => ['/about']],
                                ['label' => 'Contact', 'url' => ['/contact']],
                                Yii::$app->user->isGuest ? (
                                        ['label' => 'Login', 'url' => ['/login']]
                                        ) : (
                                        '<li>'
                                        . Html::beginForm(['/login/logout'], 'post')
                                        . Html::submitButton(
                                                'Logout (' . Yii::$app->user->identity->username . ')', ['class' => 'btn btn-link logout']
                                        )
                                        . Html::endForm()
                                        . '</li>'
                                        )
                            ],
                        ]);
                        ?>
                    </div>
                    <!-- ################################################################################################ -->
                </div>
            </div>

            <div class="container" style="width: 100%">
                <?=
                Breadcrumbs::widget([
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ])
                ?>
                <?= Alert::widget() ?>
                <?= $content ?>
            </div>
        </div>

        <!-- Footer Background Image Wrapper -->
        <div class="bgded overlay" style="background-image:url('images/demo/backgrounds/04.png');"> 
            <!-- ################################################################################################ -->

            <div class="wrapper row4">
                <footer id="footer" class="hoc clear"> 
                    <!-- ################################################################################################ -->
                    <div class="btmspace-50 center">
                        <h2 class="heading">Ohùn Enu Yoòbá: Contact Us</h2>
                        <!--<p>How to Contact Us</p>-->
                    </div>
                    <ul class="nospace group">
                        <li class="one_quarter first">
                            <div class="infobox"><i class="fa fa-phone"></i>
                                <ul class="nospace">
                                    <li>+234 802 670 3619</li>
                                    <li style="visibility: hidden">+000 000 000 0000</li>
                                </ul>
                            </div>
                        </li>
                        <li class="one_quarter">
                            <div class="infobox"><i class="fa fa-envelope-o"></i>
                                <ul class="nospace">
                                    <li>Email Us:</li>
                                    <li>ayowriteokedokun</li>
                                    <li>@yahoo.com</li>
                                </ul>
                            </div>
                        </li>
                        <li class="one_quarter">
                            <div class="infobox"><i class="fa fa-microphone"></i>
                                <ul class="nospace">
                                    <li>Eko 107.5 FM</li>
                                    <li>Thursdays: 8:10pm</li>
                                    <li>Tuesdays: 1.05am</li>
                                </ul>
                            </div>
                        </li>
                        <li class="one_quarter">
                            <a href="https://web.facebook.com/ayoade.okedokun" style="color: #EBECE9; text-decoration: none">
                                <div class="infobox"><i class="fa fa-facebook"></i>
                                    <ul class="nospace">                                    
                                        <li>Like the Author
                                        On Facebook</li>
                                        
                                    </ul>
                                </div                       
                    </ul></a>
                    <!-- ################################################################################################ -->
                </footer>
            </div>
            <!-- ################################################################################################ -->
            <!-- ################################################################################################ -->
            <!-- ################################################################################################ -->
            <nav class="quicklinks row4">
                <ul class="hoc clear">
                    <li><a href="#"><i class="fa fa-lg fa-home"></i></a></li>
                    <li><a style="text-decoration: none" href="<?= Yii::$app->request->baseUrl ?>#episodes">Past Episodes</a></li>                    
                    <li><a style="text-decoration: none" href="<?= Yii::$app->request->baseUrl ?>#articles"">Articles</a></li>
                    <!--
                    <li><a href="#">Photo Gallery</a></li>
                    -->
                    <li><a style="text-decoration: none" href="<?= Yii::$app->request->baseUrl ?>/advert">Advert Rate</a></li>
                </ul>
            </nav>
            <!-- ################################################################################################ -->
            <!-- ################################################################################################ -->
            <!-- ################################################################################################ -->
            <div class="wrapper row5">
                <div id="copyright" class="hoc clear"> 
                    <!-- ################################################################################################ -->
                    <p class="fl_left">Copyright &copy; <?= date('Y') ?>. Ohùn Enu Yoòbá. All Rights Reserved. Powered by Mark Toriola</p>
                    <!--
                    <p class="fl_right">Powered by <!--<a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates"></a>Ayo Toriola</p>-->
                    <!-- ################################################################################################ -->
                </div>
            </div>
            <!-- ################################################################################################ -->
        </div>
        <!-- End Footer Background Image Wrapper -->
        <!-- ################################################################################################ -->
        <!-- ################################################################################################ -->
        <!-- ################################################################################################ -->
        <a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>

        <?php $this->endBody() ?>
        <?= \bluezed\scrollTop\ScrollTop::widget() ?>
    </body>
</html>
<?php $this->endPage() ?>
