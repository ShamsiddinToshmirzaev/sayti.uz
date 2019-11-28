<?php

use frontend\assets\AppAsset;
use yii\helpers\Html;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="sayti.uz">
        <meta name="description" content="veb sayti">
        <meta name="author" content="sayti.uz">
        <?php $this->head() ?>
        <?= Html::csrfMetaTags() ?>
        <title>Sayti.uz |</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <link rel="icon" type="image/icon type" href="/img/logoImage/logoForIcon.png">
        <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
    </head>
    <body>
    <?php $this->beginBody() ?>

    <!--     navbar -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark">
        <a href="/" class="navbar-brand"><img src="/img/logoImage/logoForIcon.png" alt="LOGO OF SAYTI.UZ"></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="navbar-nav">
                <li class="nav-item fromleft">
                    <a href="#" class="nav-link">Наши услуги</a>
                </li>
                <li class="nav-item dropdown">
                    <a  class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">DropDown</a>
                    <div class="dropdown-menu">
                        <a href="#" class="dropdown-item">Something</a>
                        <a href="#" class="dropdown-item">Anything</a>
                        <a href="#" class="dropdown-item">Whatever</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="<?= \yii\helpers\Url::to(['site/contact'])?>" class="nav-link">Обратная связь</a>
                </li>
                <li class="nav-item">
                    <a href="<?= \yii\helpers\Url::to(['site/blog'])?>" class="nav-link">Блог</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" style="outline: 0;">
                        <i class="fa fa-search"></i>
                    </button>
                    <div class="modal fade" id="myModal">
                        <div class="modal-dialog modal-lg modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <button type="button" class="close" data-dismiss="mxodal">×</button>
                                    <input type="text" placeholder="Что вы ищете?" class="form-control p-4">
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>

            <?= \frontend\widgets\MenuWidget::widget() ; ?>
    </nav>
    <!-- end of navbar -->


    <!-- content -->
    <div class="content print">
        <!--        --><?php //= Alert::widget() ?>
        <?= $content ?>
    </div>
    <!-- //content -->


    <!-- footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4 text-md-left text-center">
                    <div class="row linkInFooter">
                        <div class="col-md-12">
                            <a href="#">Услуги</a>
                        </div>
                        <div class="col-md-12">
                            <a href="#">Блог</a>
                        </div>
                        <div class="col-md-12">
                            <a href="#">Контакты</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-md-left text-center">
                    <div class="row linkInFooter">
                        <div class="col-md-12">
                            <a href="#">Услуги</a>
                        </div>
                        <div class="col-md-12">
                            <a href="#">Блог</a>
                        </div>
                        <div class="col-md-12">
                            <a href="#">Контакты</a>
                        </div>
                    </div>

                </div>
                <div class="col-md-4 text-md-left text-center">
                    <a href="https://fb.com/">
                        <div class="iconInFooter">
                            <i class="fab fa-facebook-f"></i>
                        </div>
                    </a>
                    <a href="https://telegram.org/">
                        <div class="iconInFooter">
                            <i class="fab fa-telegram-plane"></i>
                        </div>
                    </a>
                    <a href="https://vk.com/">
                        <div class="iconInFooter">
                            <i class="fab fa-vk"></i>
                        </div>
                    </a>
                    <a href="https://instagram.com/">
                        <div class="iconInFooter">
                            <i class="fab fa-instagram	"></i>
                        </div>
                    </a>
                    <a href="https://youtube.com/">
                        <div class="iconInFooter">
                            <i class="fab fa-youtube"></i>
                        </div>
                    </a>

                </div>
            </div>
            <div class="col-md-12">
                <p class="text-center">
                    Powered by: <a href="#" id="logo">sayti.uz</a>
                </p>
            </div>
        </div>
    </footer>
    <!-- end footer -->

    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>