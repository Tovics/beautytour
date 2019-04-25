<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="static/css/fancy.css" crossorigin="anonymous">

</head>

<body>
<h1>Hover the dot to see the magic!</h1>
<div class="box-cont">
    <!--eliminare-->
    <svg version="1.1" id="contenitore" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
         x="0px" y="0px" width="500px" height="500px" viewBox="0 0 500 500" enable-background="new 0 0 500 500"
         xml:space="preserve">

      <circle id="esterno" fill="transparent" stroke="#2AAAE2" stroke-width="2" stroke-miterlimit="10" cx="245.209"
              cy="376.541" r="16.667"/>
        <circle id="interno" fill="#FFFFFF" cx="245.700" cy="377" r="10.667"/>
        <g id="content-txt">
            <text transform="matrix(1 0 0 1 148.636 203.9392)" font-family="'ArialMT'" font-size="12"></text>
            <text transform="matrix(1 0 0 1 148.636 203.9392)" fill="#FFFFFF" font-family="'Varela Round'"
                  font-size="14">Lorem ipsum dolor sit amet,
            </text>
            <text transform="matrix(1 0 0 1 148.636 220.739)" fill="#FFFFFF" font-family="'Varela Round'"
                  font-size="14">consectetur adipiscing elit.
            </text>
            <text transform="matrix(1 0 0 1 331.053 220.739)" font-family="'ArialMT'" font-size="12"></text>
            <text transform="matrix(1 0 0 1 148.636 237.5388)" fill="#FFFFFF" font-family="'Varela Round'"
                  font-size="14">Pellentesque eu nisl non nisl
            </text>
            <text transform="matrix(1 0 0 1 336.8352 237.5388)" font-family="'ArialMT'" font-size="12"></text>
            <text transform="matrix(1 0 0 1 148.636 254.3386)" fill="#FFFFFF" font-family="'Varela Round'"
                  font-size="14">consequat sollicitudin in quis
            </text>
            <text transform="matrix(1 0 0 1 344.8713 254.3386)" font-family="'ArialMT'" font-size="12"></text>
            <text transform="matrix(1 0 0 1 148.636 271.1384)" fill="#FFFFFF" font-family="'Varela Round'"
                  font-size="14">arcu. Praesent a lobortis
            </text>
            <text transform="matrix(1 0 0 1 313.4827 271.1384)" font-family="'ArialMT'" font-size="12"></text>
            <text transform="matrix(1 0 0 1 148.636 287.9392)" fill="#FFFFFF" font-family="'Varela Round'"
                  font-size="14">sapien. Nunc vel fermentum
            </text>
            <text transform="matrix(1 0 0 1 339.594 287.9392)" font-family="'Varela Round'" font-size="12"></text>
            <text transform="matrix(1 0 0 1 148.636 304.739)" fill="#FFFFFF" font-family="'Varela Round'"
                  font-size="14">lacus.
            </text>
            <text transform="matrix(1 0 0 1 186.5193 304.739)" font-family="'Varela Round'" font-size="12"></text>
            <line id="separatopre" fill="none" stroke="#FFFFFF" stroke-miterlimit="10" x1="149" y1="183.5" x2="296"
                  y2="183.5"/>
            <text transform="matrix(1 0 0 1 150.9998 137.365)" font-family="'Varela Round'" font-size="12"></text>
            <text transform="matrix(1 0 0 1 150.9998 137.365)" fill="#FFFFFF" font-family="'Varela Round'"
                  font-size="27">Costruiamo
            </text>
            <text transform="matrix(1 0 0 1 306.1389 137.365)" font-family="'ArialMT'" font-size="12"></text>
            <text transform="matrix(1 0 0 1 150.9998 169.7654)" fill="#FFFFFF" font-family="'Varela Round'"
                  font-size="27">Strategie
            </text>
            <text transform="matrix(1 0 0 1 267.8274 169.7654)" font-family="'Varela Round'" font-size="12"></text>
        </g>
        <linearGradient id="bordo-s" gradientUnits="userSpaceOnUse" x1="204.1355" y1="722.6853" x2="426.135"
                        y2="722.6853" gradientTransform="matrix(1 0 0 1 -70.1353 -491.1855)">
            <stop offset="0" style="stop-color:#EC2227"/>
            <stop offset="0.0555" style="stop-color:#D84E41"/>
            <stop offset="0.1465" style="stop-color:#B9736B"/>
            <stop offset="0.2338" style="stop-color:#9B8991"/>
            <stop offset="0.3151" style="stop-color:#7C98B1"/>
            <stop offset="0.389" style="stop-color:#5CA3CA"/>
            <stop offset="0.4531" style="stop-color:#3EA8DA"/>
            <stop offset="0.5" style="stop-color:#2AAAE2"/>
            <stop offset="0.5449" style="stop-color:#38ACD8"/>
            <stop offset="0.6283" style="stop-color:#4CAFC5"/>
            <stop offset="0.7411" style="stop-color:#62B5A5"/>
            <stop offset="0.8773" style="stop-color:#7ABC76"/>
            <stop offset="0.9944" style="stop-color:#8DC641"/>
        </linearGradient>
        <path id="bordo" fill="transparent" stroke="url(#bordo-s)" stroke-width="2" stroke-linecap="round"
              stroke-linejoin="round" stroke-miterlimit="10" d="
	M242.667,360L273,339h72c6.074,0,10-5.925,10-12V113c0-6.075-3.926-10-10-10H147c-6.075,0-12,3.925-12,10v214
	c0,6.075,5.925,12,12,12h73"/>
    </svg>
</div>
<script src="static/js/fancy.js" crossorigin="anonymous" defer></script>
</body>
</html>