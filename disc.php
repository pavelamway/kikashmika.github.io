<!doctype html>
<html lang="en-US">
<head>
<title>Все для шкилы</title>
<meta charset="utf-8">
<meta name="description" content="Закачала танчиксы и стала крутым.">
<meta name="keywords" content="rpcs3, playstation, playstation 3, ps3, emulator, debugger, windows, linux, macos, freebsd, open source, nekotekina, kd11, home">
<meta name="google-site-verification" content="cO1o6sx54cvKxhbnYsABWtl4sYFj9uVKV0DxLKZkWv8"/>
<?php include 'lib/module/sys-meta.php';?>
<meta property="og:title" content="RPCS3 - The PlayStation 3 Emulator" />
<meta property="og:description" content="RPCS3 is a multi-platform open-source Sony PlayStation 3 emulator and debugger written in C++ for Windows, Linux, macOS and FreeBSD made possible with the power of reverse engineering." />
<meta property="og:image" content="https://rpcs3.net/img/meta/mobile/1200.png" />
<meta property="og:image:width" content="1200" />
<meta property="og:image:height" content="630" />
<meta property="og:url" content="https://rpcs3.net" />
<meta property="og:locale" content="en_US"/>
<meta property="og:type" content="website" />
<meta property="og:site_name" content="RPCS3" />

<meta name="twitter:title" content="RPCS3 - The PlayStation 3 Emulator">
<meta name="twitter:description" content="RPCS3 is a multi-platform open-source Sony PlayStation 3 emulator and debugger written in C++ for Windows, Linux, macOS and FreeBSD made possible with the power of reverse engineering.">
<meta name="twitter:image" content="https://rpcs3.net/img/meta/mobile/1200.png">
<meta name="twitter:site" content="@rpcs3">
<meta name="twitter:creator" content="@rpcs3">
<meta name="twitter:card" content="summary_large_image">
<?php include 'lib/module/sys-css.php';?>
<?php include 'lib/module/sys-js.php';?>
<script data-cfasync="false" src='/lib/js/carousel.js?v=1'></script>
</head>
<body>
<img src="/img/graphics/landing/hero-main.png" width="1" height="1" alt="preload"/>
<img src="/img/videos/1.jpg" width="1" height="1" alt="Preload"/>
<img src="/img/videos/2.jpg" width="1" height="1" alt="Preload"/>
<img src="/img/videos/3.jpg" width="1" height="1" alt="Preload"/>
<?php include 'lib/module/sys-php.php';?>
<?php include 'lib/module/inc-video-popout.php'?>
<?php
    preloadVideo(
    '1',
    'OtLsuwHBQl0',
    '1'
    );
    preloadVideo(
    '2',
    'OtLsuwHBQl0',
    '2'
    );
    preloadVideo(
    '3',
    'OtLsuwHBQl0',
    '3'
    );
?>
<div class="page-con-content landing-con-override">
    <div class="wavebar-con-container-master">
        <div class="wavebar-con-wrap">
            <div class="wavebar-svg-object">
            </div>
            <div class="wavebar-svg-object">
            </div>
        </div>
    </div>
    <div class='landing-ico-scrolldown'>
    </div>
    <div class="landing-con-main">
        <div id="object-particles">
        </div>
        <div class="content-con-backdrop darkmode-header">
        </div>
        <div class="content-con-outside">
            <div class="content-con-inside">
                <div class='landing-con-left content-expand '>
                    <div class="landing-con-container scale-content-txt-1 fade-in-onload">
                        <div class='landing-ico-logo'>
                        </div>
                        <div class='landing-tx1-heading pulsate'>
                            <h6>Высчитать Дискриминантик?<br>
                             Только так!</h6>

<?php
error_reporting(-1);
if (isset($_GET['send'])){
    $a = (int) $_GET['a'];
    $b = (int) $_GET['b'];
    $c = (int) $_GET['c'];

    $result = eq_roots($a, $b, $c);
}
function eq_roots($a, $b, $c) {
    if ($a==0) return false;

    if ($b==0) {
        if ($c<0) {
            $x1 = sqrt(abs($c/$a));
            $x2 = sqrt(abs($c/$a));
        } elseif ($c==0) {
            $x1 = $x2 = 0;
        } else {
            $x1 = sqrt($c/$a).'i';
            $x2 = -sqrt($c/$a).'i';
        }
    } else {
        $d = $b*$b-4*$a*$c;
        if ($d>0) {
            $x1 = (-$b+sqrt($d))/2*$a;
            $x2 = (-$b-sqrt($d))/2*$a;
        } elseif ($d==0) {
            $x1 = $x2 = (-$b)/2*$a;
        } else {
            $x1 = -$b . '+' . sqrt(abs($d)) . 'i';
            $x2 = -$b . '-' . sqrt(abs($d)) . 'i';
        }
    }
    return array($x1, $x2);
}
?>

<p>Введите коэффициенты :</p>
<h1>a * x<sup>2</sup> + b * x + с = 0</h1>
<form method="GET">
    <p style="color: red">a = <input type="text" name="a" /></p>
    <p style="color: red">b = <input type="text" name="b" /></p>
    <p style="color: red">c = <input type="text" name="c" /></p>
    <p style="color: red"><input type="submit" name="send" value="решить"/></p>
</form>

<? if (isset($result)): ?>
<hr />
<h3><?=$a ?> * x<sup>2</sup> + <?=$b ?> * x + <?=$c ?> = 0</h3>
<p>Корни уравнения :</p>
<p>X<sub>1</sub> = <?=$result[0] ?></p>
<p>X<sub>2</sub> = <?=$result[1] ?></p>
<? endif ?>

                        </div>
                        <div class='landing-tx2-heading'>
                            <p>
                                 гоооо
                            </p>
                            <div class='landing-btn-container'>
                                <div class="build-btn-button">
                                    <div class="build-ico-button">
                                        <div class="build-ico-os">
                                            <img alt="Windows" src="img/tank.png" style='height: 100%; width: 100%; object-fit: contain'/>
                                            <img alt="Linux"   src="img/tank.png" style='height: 100%; width: 100%; object-fit: contain; display:none;'/>
                                            <img alt="Linux"   src="img/tank.png" style='height: 100%; width: 100%; object-fit: contain; display:none;'/>
                                            <img alt="FreeBSD" src="img/tank.png" style='height: 100%; width: 100%; object-fit: contain; display:none;'/>
                                        </div>
                                    </div>
                                    <a href='/disc.php'>
                                    <div class="menu-btn-select">
                                    <a href='/disc.php'>
                                    <div class="build-tx1-button">
                                    
            
         
            
                <script >
                        </script>
                <ins ></ins>
                <script>
    </div>
    <div>
        </div>
        <di
                           
        </div>
    </div>
               
                </script>
            </div>
        </div>
    
    </div>

    
</div>
</body>
</html>
