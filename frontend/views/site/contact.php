<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */

/* @var $model backend\models\Contact */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

//$this->title = 'Contact';
//$this->params['breadcrumbs'][] = $this->title;


use backend\models\Contact;
use frontend\assets\ContactsAsset;
use frontend\models\Lang;
//use yii\bootstrap\ActiveForm;
use yii\helpers\Url;

$this->title = Yii::t('app', 'Contacts');
//Yii::$app->params['sub-title'] = Yii::t('app', 'Contacts');
//$this->params['breadcrumbs'][] = ['label' => $this->title];


//$l = Lang::getCurrent();
//$text = 'text_' . $l->url;
//$title = 'title_' . $l->url;
//$this->title = 'ad';
//$info = ContactInfo::findOne(1);
?>
<?php //= $info->$text ?>


<div class="container" style="padding-top: 0px">
    <?php if (Yii::$app->session->hasFlash('success')): ?>
        <div style="margin:5px 0 0 0;"
             class="alert alert-success"><?= Yii::t('app', 'Thank you for contacting us. We will respond to you as soon as possible.') ?></div>
    <?php elseif (Yii::$app->session->hasFlash('error')): ?>
        <div style="margin:5px 0 0 0;"
             class="alert alert-danger"><?= Yii::t('app', 'There was an error sending email.') ?></div>
    <?php else: ?>
        <!--<p class="text-muted" style="text-align: left;"><?php //= Yii::$app->params['send-info'] ?></p>-->
    <?php endif; ?>
</div>


<header>
    <div class="container">
        <div class="row">
            <div class="col-md-12 p-sm-0">
                <nav aria-label="breadcrumb  " style="padding: 8px 5px !important">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/"><i class="fas fa-home fa-md"></i></a></li>
                        <li class="breadcrumb-item active" aria-current="page">Контакты</li>
                    </ol>
                </nav>
            </div>
            <div class="col-md-12">
                <h3 class="text-center upperCase">Контакты</h3>
            </div>
            <div class="col-md-12">
                <h4>Адрес:</h4>
                <span>Amir Temur Shox ko'chasi</span><br>
                <h4>Режим работы:</h4>
                <span>Пн-Пт с 9:00 до 19:00</span><br>
                <h4>Email:</h4>
                <span><a href="#">info@sayti.uz</a></span><br>
            </div>
            <div class="col-md-12">
                <div id="googleMap"></div>
            </div>


        </div>
    </div>
</header>

<div class="maps container">
    <div id="gmap_gmap0" style="width:99%;height:380px;
                 margin:10px 0 0 0;
                 border:1px solid #ccf;
                 background: #fafaff url('/img/loading.gif') no-repeat center;
                 border-radius:1px;"></div>
</div>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-center upperCase mt-4 mb-4">Обратная связь</h3>
            </div>

            <!--            <div class="col-md-12">-->
            <!--                <form action="">-->
            <!--                    <div class="form-group">-->
            <!--                        <div class="row">-->
            <!--                            <div class="col-md-6">-->
            <!--                                <input type="text" class="form-control mb-lg-0 mb-3" id="usr" name="username" placeholder="Ф.И.О">-->
            <!--                            </div>-->
            <!--                            <div class="col-md-6">-->
            <!--                                <input type="text" class="form-control" id="usr" name="username" placeholder="Номер телефона">-->
            <!--                            </div>-->
            <!--                        </div>-->
            <!--                    </div>-->
            <!--                    <div class="form-group">-->
            <!--                        <textarea class="form-control" rows="5" id="comment" placeholder="Сообщение"></textarea>-->
            <!--                    </div>-->
            <!--                    <button type="submit" class="btn btn-primary d-block mx-auto mb-4">Отправить</button>-->
            <!--                </form>-->
            <!--            </div>-->

        </div>
    </div>
</section>



<div class="contacts container">
    <div class="row">
        <div class="col-md-12">
            <?php $form = ActiveForm::begin(); ?>

            <?= $form->field($model, 'full_name')->textInput() ?>

            <?= $form->field($model, 'email_phone')->textInput() ?>

            <?= $form->field($model, 'message')->textArea(array('rows' => 5)) ?>

            <?=
            $form->field($model, 'verifyCode')->label(false)->widget(Captcha::class, ['captchaAction' => 'site/captcha',
                'template' => '<div class="row"><div class="col-sm-6">{image}</div><div class="col-sm-6">{input}</div></div>',
                'options' => ['class' => 'form-control', 'placeholder' => Yii::t('app', 'Tasdiqlash kodi')],
            ])
            ?>

            <div class="form-group">
                <?= Html::submitButton(Yii::t('app', 'Send'), ['class' => 'btn btn-primary']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>

    </div>
</div><br>
<br><br/>


<script type="text/javascript">
    $(document).ready(function () {

        function onload_gmap(func) {
            var oldonload = window.onload;
            if (typeof window.onload != 'function') {
                window.onload = func;
            } else {
                window.onload = function () {
                    if (oldonload) {
                        oldonload();
                    }
                    func();
                }
            }
        }

        function display_gmap_gmap(id, centerLatitude, centerLongitude, startZoom, description, kml, control, maptype, show_marker, addoverview, addscale, addgoogle, streetview) {
            var latlng = new google.maps.LatLng(centerLatitude, centerLongitude);
            if (startZoom == 0 || startZoom == '')
                startZoom = 10;
            var mapdiv = document.getElementById("gmap_gmap" + id);
            var myOptions = {zoom: startZoom, center: latlng};
            var map = new google.maps.Map(mapdiv, myOptions);
            if (kml != '') {
                var myKMLOptions = {/*suppressInfoWindows: true,*/map: map, preserveViewport: true};
                var georssLayer = new google.maps.KmlLayer(kml, myKMLOptions);
                georssLayer.setMap(map);
            }
            format_gmap(map, control, maptype, show_marker, addoverview, addscale, addgoogle);
            format2_gmap(map, id, streetview);
            if (show_marker)
                show_gmap_marker(map, latlng, centerLatitude, centerLongitude, description);
            return map;
        }

        function format_gmap(map, control, maptype, show_marker, addoverview, addscale, addgoogle) {
            if (addscale == 1)
                map.setOptions({scaleControl: true});
            if (addoverview == 1)
                map.setOptions({overviewMapControl: true, overviewMapControlOptions: {opened: true}});
            if (maptype == 'SATELLITE') {
                map.setOptions({MapTypeId: google.maps.MapTypeId.SATELLITE});
            } else if (maptype == 'TERRAIN') {
                map.setOptions({MapTypeId: google.maps.MapTypeId.TERRAIN});
            } else if (maptype == 'HYBRID') {
                map.setOptions({MapTypeId: google.maps.MapTypeId.HYBRID});
            } else {
                map.setOptions({MapTypeId: google.maps.MapTypeId.ROADMAP});
            }
        }

        function format2_gmap(map, id, streetview) {
            if (streetview == 1) {
                map.setOptions({streetViewControl: true});
            } else {
                map.setOptions({streetViewControl: false});
            }
        }

        function show_gmap_marker(map, latlng, centerLatitude, centerLongitude, description) {
            var desc = description;
            if (desc == '')
                desc = '(' + centerLatitude + ', ' + centerLongitude + ')';
            var title_desc = desc.replace(/<br \/>/g, ' ');
            title_desc = title_desc.replace(/~/g, '');
            var marker = new google.maps.Marker({position: latlng, map: map, title: title_desc});
            var infowindow = new google.maps.InfoWindow({content: desc.replace(/~/g, '<br />')});
            google.maps.event.addListener(marker, 'click', function () {
                infowindow.open(map, marker);
            });
        }

        function init_gmap_gmap(id, addr, centerLatitude, centerLongitude, startZoom, description, kml, control, maptype, show_marker, addoverview, addscale, addgoogle, streetview) {
            var map;
            if (addr != '') {
                var addr2 = addr.replace(/~/g, '');
                var latlng_RegExp = /(-?\d+\.\d+)\s*,\s*(-?\d+\.\d+)/;
                if (latlng_RegExp.test(addr2)) {
                    var str = addr2.match(latlng_RegExp);
                    map = display_gmap_gmap(id, str[1], str[2], startZoom, description, kml, control, maptype, show_marker, addoverview, addscale, addgoogle, streetview);
                } else {
                    var geocoder = new google.maps.Geocoder();
                    geocoder.geocode({'address': addr2}, function (results, status) {
                        if (status == google.maps.GeocoderStatus.OK) {
                            if (description == '')
                                description = addr;
                            map = display_gmap_gmap(id, results[0].geometry.location.lat(), results[0].geometry.location.lng(), startZoom, description, kml, control, maptype, show_marker, addoverview, addscale, addgoogle, streetview);
                        } else {
                            alert('Google cannot decode your address: ' + addr);
                        }
                    });
                }
            } else {
                map = display_gmap_gmap(id, centerLatitude, centerLongitude, startZoom, description, kml, control, maptype, show_marker, addoverview, addscale, addgoogle, streetview);
            }
        }

        function load_gmap() {
            init_gmap_gmap('0', '41.325048, 69.306933', 0, 0, 15, 'Address', '', '', '', 1, '1', '0', '1', '1');


        }

        onload_gmap(load_gmap);
    }); //Конец ready</script>
<script type="text/javascript"
        src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBrv9McsqkMZhGrujbjpVTc8ISE4gT8qI4"></script>





