<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Map SVG</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js" defer></script>
    <link rel="stylesheet" href="static/css/map_svg.css" crossorigin="anonymous">
</head>

<body>
    <!-- tits ELEJE -->
    <div class="tits">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 679 679" preserveAspectRatio="xMinYMin meet">
            <image width="679" height="679" xlink:href="static/images/tits.jpg"></image>
            <circle id="tit_right" cx="313" cy="339" r="79" style="fill:lime; stroke:darkmagenta; stroke-width:10px" />
            <ellipse id="tit_left" cx="180" cy="351" rx="69" ry="80" style="fill:lime; stroke:darkmagenta; stroke-width:10px" />
        </svg>
    </div>


    <!-- tits vége -->
    <!--  kattintható elemek képen eleje -->
    <div>
        <figure id='backing'>
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1280 504" preserveAspectRatio="xMinYMin meet">
                <image width="1280" height="504" xlink:href="https://cdn.pixabay.com/photo/2018/01/24/18/05/background-3104413_1280.jpg">
                </image>
                <a xlink:href="https://stackoverflow.com">
                    <circle cx="243" cy="133" r="79" style="fill:lime; stroke:darkmagenta;  stroke-width:10px" />
                </a>
                <a xlink:href="https://stackoverflow.com">
                    <polygon points="200,10 250,190 160,210" style="fill:lime;stroke:purple;stroke-width:1" />
                </a>
                <a xlink:href="https://stackoverflow.com">
                    <rect x="870" y="147" width="680" height="33" fill="#fff" opacity="0.25" />
                </a>
                <a xlink:href="https://stackoverflow.com">
                    <circle cx="889" cy="379" r="80" fill="#fff" opacity="0.1" />
                </a>
                <a xlink:href="https://code.org/educate/csp">
                    <circle cx="770" cy="671" r="73" fill="#fff" opacity="10.0" />
                </a>
                <a xlink:href="https://stackoverflow.com">
                    <polygon id="test" points="163,587 214,492 267,473 335,483 377,603 327,631 249,658 211,641" fill="#fff" opacity="0.3" />
                </a>
            </svg>
        </figure>
    </div>
    <!--  kattintható elemek képen VÉGE -->

    <!-- kattintható kockás kockás balhé eleje -->
    <div>
        <html>
        <title>SVG Interactivity</title>

        <body>

            <h1>Sample Interactivity</h1>

            <svg width="600" height="600">
                <script type="text/JavaScript">
                    <![CDATA[
            function showColor() {
                alert("Color of the Rectangle is: " +
                    document.getElementById("rect1").getAttributeNS(null, "fill"));
            }

            function showArea(event) {
                var width = parseFloat(event.target.getAttributeNS(null, "width"));
                var height = parseFloat(event.target.getAttributeNS(null, "height"));
                alert("Area of the rectangle is: " + width + "x" + height);
            }

            function showRootChildrenCount() {
                alert("Total Children: " + document.documentElement.childNodes.length);
            }

            ]]>
        </script>

                <g>
                    <text x="30" y="50" onClick="showColor()">Click me to show rectangle color.</text>

                    <rect id="rect1" x="100" y="100" width="200" height="200" stroke="green" stroke-width="3" fill="blue" onClick="showArea(event)" />

                    <text x="30" y="400" onClick="showRootChildrenCount()">
                        Click me to print child node count.
                    </text>
                </g>
            </svg>

        </body>

        </html>
    </div>
    <!-- kattintható kockás kockás balhé vége -->
</body>

</html>