<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gallery</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style class="anchorjs"></style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"
          integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="/static/css/header.css" crossorigin="anonymous">
    <link rel="stylesheet" href="/static/css/gallery.css" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" rel="stylesheet">



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"
            defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
            integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"
            defer></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"
            integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"
            defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js" defer></script>
    <script src="/static/js/gallery.js" crossorigin="anonymous" defer></script>

</head>
<body>
<!-- Ezt minden felhasználásnál meg kell jeleníteni, így ingyenesen használható:
       # Dual licensed under the MIT or GPL Version 2 licenses. -->
<?php
    include('header.php');
?>
<div class="top-container">
    <div data-code="example-2">
        <div class="row justify-content-center">
            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-0 col-xs-0 row justify-content-center advertisement">
                <p>Reklám</p>
            </div>
            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <div><a href="/static/img/img1.jpg" data-toggle="lightbox"
                        data-gallery="example-gallery"><img src="/static/img/img1.jpg" class="photo"></a></div>
                <div><a href="/static/img/img2.jpg" data-toggle="lightbox"
                        data-gallery="example-gallery"><img src="/static/img/img2.jpg" class="photo"></a></div>
                <div><a href="/static/img/img3.jpg" data-toggle="lightbox"
                        data-gallery="example-gallery"><img src="/static/img/img3.jpg" class="photo"></a></div>
                <div><a href="/static/img/img4.jpg" data-toggle="lightbox"
                        data-gallery="example-gallery"><img src="/static/img/img4.jpg" class="photo"></a></div>
                <div><a href="/static/img/img5.jpg" data-toggle="lightbox"
                        data-gallery="example-gallery"><img src="/static/img/img5.jpg" class="photo"></a></div>
                <div><a href="/static/img/img6.jpg" data-toggle="lightbox"
                        data-gallery="example-gallery"><img src="/static/img/img6.jpg" class="photo"></a></div>
                <div><a href="/static/img/img7.jpg" data-toggle="lightbox"
                        data-gallery="example-gallery"><img src="/static/img/img7.jpg" class="photo"></a></div>
                <div><a href="/static/img/img8.jpg" data-toggle="lightbox"
                        data-gallery="example-gallery"><img src="/static/img/img8.jpg" class="photo"></a></div>
                <div><a href="/static/img/img9.jpg" data-toggle="lightbox"
                        data-gallery="example-gallery"><img src="/static/img/img9.jpg" class="photo"></a></div>
                <div><a href="/static/img/img6.jpg" data-toggle="lightbox"
                        data-gallery="example-gallery"><img src="/static/img/img6.jpg" class="photo"></a></div>
                <div><a href="/static/img/img6.jpg" data-toggle="lightbox"
                        data-gallery="example-gallery"><img src="/static/img/img6.jpg" class="photo"></a></div>
                <div><a href="/static/img/img6.jpg" data-toggle="lightbox"
                        data-gallery="example-gallery"><img src="/static/img/img6.jpg" class="photo"></a></div>
                <div><a href="/static/img/img6.jpg" data-toggle="lightbox"
                        data-gallery="example-gallery"><img src="/static/img/img6.jpg" class="photo"></a></div>

            </div>
            <!--<div class="row">
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-xs-6">
                    <a href="static/img/img1.jpg" data-toggle="lightbox"
                       data-gallery="example-gallery">
                        <img src="static/img/img1.jpg" class="img-fluid">
                    </a>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-xs-6">
                    <a href="static/img/img2.jpg" data-toggle="lightbox"
                       data-gallery="example-gallery">
                        <img src="static/img/img2.jpg" class="img-fluid">
                    </a>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-xs-6">
                    <a href="static/img/img3.jpg" data-toggle="lightbox"
                       data-gallery="example-gallery">
                        <img src="static/img/img3.jpg" class="img-fluid">
                    </a>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-xs-6">
                    <a href="static/img/img4.jpg" data-toggle="lightbox"
                       data-gallery="example-gallery">
                        <img src="static/img/img4.jpg" class="img-fluid">
                    </a>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-xs-6">
                    <a href="static/img/img5.jpg" data-toggle="lightbox"
                       data-gallery="example-gallery">
                        <img src="static/img/img5.jpg" class="img-fluid">
                    </a>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-xs-6">
                    <a href="static/img/img6.jpg" data-toggle="lightbox"
                       data-gallery="example-gallery">
                        <img src="static/img/img6.jpg" class="img-fluid">
                    </a>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-xs-6">
                    <a href="static/img/img7.jpg" data-toggle="lightbox"
                       data-gallery="example-gallery">
                        <img src="static/img/img7.jpg" class="img-fluid">
                    </a>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-xs-6">
                    <a href="static/img/img8.jpg" data-toggle="lightbox"
                       data-gallery="example-gallery">
                        <img src="static/img/img8.jpg" class="img-fluid">
                    </a>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-xs-6">
                    <a href="static/img/img9.jpg" data-toggle="lightbox"
                       data-gallery="example-gallery">
                        <img src="static/img/img9.jpg" class="img-fluid">
                    </a>
                </div>
            </div>
        </div>-->
            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-0 col-xs-0 row justify-content-center advertisement">
                <p>Reklám</p>
            </div>
        </div>
    </div>
</div>
</body>
</html>

