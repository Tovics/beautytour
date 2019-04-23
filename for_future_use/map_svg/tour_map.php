<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>BeautyTourMap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>jQuery UI Effects - Show Demo</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="static/css/tour_map.css">

    <script src="https://code.jquery.com/jquery-1.12.4.js" defer></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" defer></script>
    <script src="static/js/tour_map.js" defer></script>


</head>

<body>
    <div class="tits">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 680 429" preserveAspectRatio="xMinYMin meet">
            <image width="680" height="429" href="static/images/map.png"></image>
            <svg width="680" height="429">
                <a href="#" data-toggle="tooltip" data-placement="right" data-html="true" title="Cím: Budapest Váci út 1-3 1062 &#013;Időpont: 2019.05.Fenetudja">
                    <polygon id="budapest" points="297,76 274,185 357,189 370,159 331,79" style="fill:lime;stroke:purple;stroke-width:1"></polygon>
                </a>
                <a  href="#" data-toggle="tooltip" data-placement="right" data-html="true" title="Cím: Sopron &#013;Időpont: 2019.05.Fenetudja">
                    <polygon id="sopron" points="51,50 40,165 145,163 86,47" style="fill:lime;stroke:purple;stroke-width:1"></polygon>
                </a>
                <a href="#" data-toggle="tooltip" data-placement="right" data-html="true" title="Cím: Szolnok &#013;Időpont: 2019.05.Fenetudja">
                    <polygon id="szolnok" points="402,121 374,237 455,228 437,122" style="fill:lime;stroke:purple;stroke-width:1"></polygon>
                </a>
                <a href="#" data-toggle="tooltip" data-placement="right" data-html="true" title="Cím: Veszprém &#013;Időpont: 2019.05.Fenetudja">
                    <polygon id="veszprem" points="184,129 121,234 205,232 220,131" style="fill:lime;stroke:purple;stroke-width:1"></polygon>
                </a>
                <a href="#" data-toggle="tooltip" data-placement="right" data-html="true" title="Cím: Debrecen &#013;Időpont: 2019.05.Fenetudja">
                    <polygon id="debrecen" points="558,71 495,177 579,175 585,74" style="fill:lime;stroke:purple;stroke-width:1"></polygon>
                </a>
                <a href="#" data-toggle="tooltip" data-placement="right" data-html="true" title="Cím: Kaposvar &#013;Időpont: 2019.05.Fenetudja">
                    <polygon id="kaposvar" points="176,238 120,350 211,353 212,246" style="fill:lime;stroke:purple;stroke-width:1"></polygon>
                </a>
                <a href="#" data-toggle="tooltip" data-placement="right" data-html="true" title="Cím: Zalaegerszeg &#013;Időpont: 2019.05.Fenetudja">
                    <polygon id="zalaegerszeg" points="73,167 30,274 143,279 148,254 118,244 112,167" style="fill:lime;stroke:purple;stroke-width:1"></polygon>
                </a>
                <a href="#" data-toggle="tooltip" data-placement="right" data-html="true" title="Cím: Szeged &#013;Időpont: 2019.05.Fenetudja">
                    <polygon id="szeged" points="395,255 306,349 450,345 440,254 " style="fill:lime;stroke:purple;stroke-width:1"></polygon>
                </a>
                <a href="#" data-toggle="tooltip" data-placement="right" data-html="true" title="Cím: Szekesfehervar &#013;Időpont: 2019.05.Fenetudja">
                    <polygon id="szekesfehervar" points="230,119 214,236 347,233 344,206 268,197 271,120 " style="fill:lime;stroke:purple;stroke-width:1"></polygon>
                </a>
                <a href="#" data-toggle="tooltip" data-placement="right" data-html="true" title="Cím: Nyíregyháza Időpont: 2019.05.Fenetudja">
                    <polygon id="nyiregyhaza" points="433,64 430,98 531,101 559,61 593,56 586,3 561,1" style="fill:lime;stroke:purple;stroke-width:1"></polygon>
                </a>
            </svg>
            <div class="container">
                <h1>Tooltip with HTML</h1>
                <a href="#" class="tooltip-inner" data-toggle="tooltip" data-placement="right" data-html="true" title="1st line of text <br> 2nd line of text">Hover over me</a>
            </div>

            <!--<a href="https://www.google.hu/maps/place/WestEnd+City+Center/@47.5118509,19.0592058,16.19z/data=!4m5!3m4!1s0x0:0xa8fd4550e6a898c1!8m2!3d47.5139834!4d19.0594125?hl=hu&authuser=0">
                <circle cx="313" cy="339" r="79" style="fill:lime; stroke:darkmagenta; stroke-width:10px" />
                <title class="tooltip">Cím:&#013; Budapest, Váci út 1-3, 1062&#013;Időpont: &#013; 2019.05.Fenetudja
                </title>
                </circle>
            </a>
            <a href="https://www.google.hu/maps/place/Arena+Mall/@47.4982238,19.0746099,14z/data=!4m5!3m4!1s0x0:0x79ad6c8610deab9a!8m2!3d47.4982238!4d19.0921193?hl=hu&authuser=0">
                <ellipse id="tit_left" cx="180" cy="351" rx="69" ry="80" style="fill:lime; stroke:darkmagenta; stroke-width:10px" />
                <title class="tooltip">Cím:&#013; Budapest, Kerepesi út 9, 1087&#013;Időpont: &#013; 2019.05.Fenetudja
                </title>
                </ellipse>
            </a>-->
           <a href="#" data-toggle="tooltip" title="Cím: Nyíregyháza Időpont: 2019.05.Fenetudja">Hover over me
                <circle cx="200" cy="200" r="60" style="fill:lime; stroke:darkmagenta; stroke-width:10px" />
            </a>
        </svg>
    </div>
</body>

</html>