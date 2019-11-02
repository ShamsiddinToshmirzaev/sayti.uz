<?php

/* @var $this yii\web\View */


use backend\models\Tags;
use backend\models\Sites;
use yii\helpers\Html;
use yii\widgets\LinkPager;

//$this->title = 'My Yii Application';
?>


<!--<body>-->
<!--<form>-->
<!--    <span id = "ipaddress"></span>-->
<!--</form>-->
<!--</body>-->


<header>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5  mt-4 mb-4">
                <div class="square">
                    <div class="row">
                        <div class="col-md-4">
                            <i class="fas fa-globe fa-3x d-block mx-auto"></i>
                        </div>
                        <div class="col-md-8">
                            <div class="textCenter">
                                <h4 class="text-center">Разработка сайтов</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5 offset-md-1  mt-md-4 mt-0 mb-4">
                <div class="square">
                    <div class="row">
                        <div class="col-md-4">
                            <i class="fas fa-robot fa-3x  d-block mx-auto"></i>
                        </div>
                        <div class="col-md-8">
                            <div class="textCenter">
                                <h4 class="text-center">Разработка телеграм ботов</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-8">
                <div class="row d-md-none d-block">
                    <div class="col-12">
                        <div class="textCenter">
                            <h3 id="ipaddress">Ваш IP адрес:</h3>
                            <span style="font-size: 20px;"><strong></strong></span>
                        </div>
                    </div>
                    <div class="col-12">
                        <p class="paragraphSize">ОC:
                            <span>Microsoft Windows 7</span>
                        </p>
                        <p class="paragraphSize">Ваш браузер:
                            <span> Chrome 75.0.3770.80</span>
                        </p>
                        <p class="paragraphSize">Откуда вы:
                            <span>Uzbekistan, Tashkent</span>
                        </p>
                        <p class="paragraphSize">Прокси:
                            <span>Не используется</span>
                        </p>s
                    </div>
                </div>
                <div class="col-md-12">
                    <h3 class="text-center upperCase mt-4 mb-4">Новости</h3>
                </div>

                <!--For diplaying Tags -->
                <?php
                $tags = \yii\helpers\ArrayHelper::map(Tags::find()
                    ->orderBy('name')
                    ->all(), 'id', 'name');
                //                    print_r($tags);
                ?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="sortOfThings">
                            <?php foreach ($tags as $tag): ?>
                                <p>  <?php echo $tag ?></p>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

                <!--       For  Displaying Sites             -->
                <div class="row">
                    <?php foreach ($provider->getModels() as $site): ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="card">
                                <img src="<?= $site->getThumbFileUrl('photo', 'md', Yii::getAlias('@url/app-images/cache/sites/[[attribute_id]]/[[profile]]_[[filename]].[[extension]]')) ;?>" alt="">
                                <div class="card-body">
                                    <p><?= $site['title'] ?></p>
                                    <?php
                                    if ($site['is_taxis'] == true){
                                        echo ' <span class="tasIx">Tas-IX</span>';
                                    }
                                    ?>
                                    <span class="float-right counter"><i class="far fa-share-square"></i><?= $site['views'] ?></span>
                                    <a href="#" class="stretched-link"></a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>






                    <div class="col-md-12">
                        <ul class="pagination justify-content-center">
                            <!--                            <li class="page-item"><a class="page-link" href="javascript:void(0);"><i-->
                            <!--                                            class="fas fa-chevron-left fa-md"></i></a></li>-->
                            <?=
                            LinkPager::widget([
                                'pagination' => $provider->pagination,
                            ])
                            ?>
                            <!--                            <li class="page-item"><a class="page-link" href="javascript:void(0);"><i-->
                            <!--                                            class="fas fa-chevron-right fa-md"></i></a></li>-->

                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-4 mb-4">
                <div class="row d-md-block d-none">
                    <div class="col-md-12">
                        <div class="textCenter">
                            <h3>Ваш IP адрес:
                                <span style="font-size: 20px;"><strong id="datas">66.111.55.59</strong></span>
                            </h3>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <p class="paragraphSize">ОC:
                            <span id="os">Microsoft Windows 7</span>
                        </p>
                        <p class="paragraphSize">Ваш браузер:
                            <span id="browser"> Chrome 75.0.3770.80</span>
                        </p>
                        <p class="paragraphSize">Откуда вы:
                            <span id="city"></span>
                        </p>
                        <p class="paragraphSize">
                            Интернет провайдер:
                            <span id="isp">Не используется</span>
                        </p>
                        <p class="paragraphSize">Прокси:
                            <span>Не используется</span>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="text-center upperCase">Проверить интернет связь</h4>
                    </div>
                    <div class="col-md-12">
                        <div class="square">
                            <div class="row">
                                <div class="col-lg-4 pr-0">
                                    <i class="fab fa-searchengin fa-2x d-block mx-auto tasIx"></i>
                                </div>
                                <div class="col-lg-8 pl-0">
                                    <div class="textCenter">
                                        <h5>Tas-IX Checker</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="square">
                            <div class="row">
                                <div class="col-lg-4 pr-0">
                                    <i class="fas fa-tachometer-alt fa-2x d-block mx-auto speedTest"></i>
                                </div>
                                <div class="col-lg-8 pl-0">
                                    <div class="textCenter">
                                        <h5>SpeedTest</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="text-center upperCase">Блог</h4>
                    </div>
                    <div class="col-md-12 mt-2">
                        <div class="owl-carousel">
                            <div class="item">
                                <div class="col-md-12 p-0">
                                    <div class="card">
                                        <img src="img/kun.uz.PNG" alt="">
                                        <div class="card-body">
                                            <p>Сегодняшние сайты становятся все лучше и лучше в разработке</p>
                                            <p><span class="calendarColor"><i class="far fa-calendar-alt"> </i>   12.06.2019</span><span
                                                        class="float-right calendarColor"><i class="far fa-eye"> 11231231</i> </span>
                                            </p>
                                        </div>


                                    </div>
                                </div>

                            </div>
                            <div class="item">
                                <div class="col-md-12 p-0">
                                    <div class="card">
                                        <img src="img/kun.uz.PNG" alt="">
                                        <div class="card-body">
                                            <p>Сегодняшние сайты становятся все лучше и лучше в разработке</p>
                                            <p><span class="calendarColor"><i class="far fa-calendar-alt"> </i>   12.06.2019</span><span
                                                        class="float-right calendarColor"><i class="far fa-eye"> 11231231</i> </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>






<?php

function getRealIpAddr()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
    {
        $ip=$_SERVER['HTTP_CLIENT_IP'];
    }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
    {
        $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else
    {
        $ip=$_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

print getRealIpAddr();


?>



<!--Getting IP address, city , Internet provider -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "http://ip-api.com/json?callback=?",
        success: function (responseData) {
            // alert(responseData["isp"]);
            document.getElementById("datas").innerHTML = responseData.query;
            document.getElementById("city").innerHTML = responseData.country + ", " + responseData.city;
            document.getElementById("isp").innerHTML = responseData.isp;
        }

    });
</script>


<!-- Finding Operating System of a given Computer -->
<script>
    var OSName = "Unknown OS";
    if (navigator.appVersion.indexOf("Win") !== -1) OSName = "Windows";
    if (navigator.appVersion.indexOf("Mac") !== -1) OSName = "MacOS";
    if (navigator.appVersion.indexOf("X11") !== -1) OSName = "UNIX";
    if (navigator.appVersion.indexOf("Linux") !== -1) OSName = "Linux";
    document.getElementById("os").innerHTML = OSName;

</script>


<!--getting browser name and version -->
<script>
    var nVer = navigator.appVersion;
    var nAgt = navigator.userAgent;
    var browserName = navigator.appName;
    var fullVersion = '' + parseFloat(navigator.appVersion);
    var nameOffset, verOffset, ix;

    // In Opera 15+, the true version is after "OPR/"
    if ((verOffset = nAgt.indexOf("OPR/")) != -1) {
        browserName = "Opera";
        fullVersion = nAgt.substring(verOffset + 4);
    }
// In older Opera, the true version is after "Opera" or after "Version"
    else if ((verOffset = nAgt.indexOf("Opera")) != -1) {
        browserName = "Opera";
        fullVersion = nAgt.substring(verOffset + 6);
        if ((verOffset = nAgt.indexOf("Version")) != -1)
            fullVersion = nAgt.substring(verOffset + 8);
    }
// In MSIE, the true version is after "MSIE" in userAgent
    else if ((verOffset = nAgt.indexOf("MSIE")) != -1) {
        browserName = "Microsoft Internet Explorer";
        fullVersion = nAgt.substring(verOffset + 5);
    }
// In Chrome, the true version is after "Chrome"
    else if ((verOffset = nAgt.indexOf("Chrome")) != -1) {
        browserName = "Chrome";
        fullVersion = nAgt.substring(verOffset + 7);
    }
// In Safari, the true version is after "Safari" or after "Version"
    else if ((verOffset = nAgt.indexOf("Safari")) != -1) {
        browserName = "Safari";
        fullVersion = nAgt.substring(verOffset + 7);
        if ((verOffset = nAgt.indexOf("Version")) != -1)
            fullVersion = nAgt.substring(verOffset + 8);
    }
// In Firefox, the true version is after "Firefox"
    else if ((verOffset = nAgt.indexOf("Firefox")) != -1) {
        browserName = "Firefox";
        fullVersion = nAgt.substring(verOffset + 8);
    }
// In most other browsers, "name/version" is at the end of userAgent
    else if ((nameOffset = nAgt.lastIndexOf(' ') + 1) <
        (verOffset = nAgt.lastIndexOf('/'))) {
        browserName = nAgt.substring(nameOffset, verOffset);
        fullVersion = nAgt.substring(verOffset + 1);
        if (browserName.toLowerCase() == browserName.toUpperCase()) {
            browserName = navigator.appName;
        }
    }
    // trim the fullVersion string at semicolon/space if present
    if ((ix = fullVersion.indexOf(";")) != -1)
        fullVersion = fullVersion.substring(0, ix);
    if ((ix = fullVersion.indexOf(" ")) != -1)
        fullVersion = fullVersion.substring(0, ix);

    majorVersion = parseInt('' + fullVersion, 10);
    if (isNaN(majorVersion)) {
        fullVersion = '' + parseFloat(navigator.appVersion);
        majorVersion = parseInt(navigator.appVersion, 10);
    }
    document.getElementById('browser').innerHTML = browserName + "  " + fullVersion;

</script>






