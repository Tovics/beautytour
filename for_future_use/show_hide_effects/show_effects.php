<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>jQuery UI Effects - Show Demo</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="static/css/show_effects.css">

    <script src="https://code.jquery.com/jquery-1.12.4.js" defer></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" defer></script>
    <script src="static/js/show_effects.js" defer></script>
</head>
<body>

<div class="toggler">
    <div id="effect" class="ui-widget-content ui-corner-all">
        <h3 class="ui-widget-header ui-corner-all">Show</h3>
        <p>
            Etiam libero neque, luctus a, eleifend nec, semper at, lorem. Sed pede. Nulla lorem metus, adipiscing ut,
            luctus sed, hendrerit vitae, mi.
        </p>
    </div>
</div>

<select name="effects" id="effectTypes">
    <option value="blind">Blind</option>
    <option value="bounce">Bounce</option>
    <option value="clip">Clip</option>
    <option value="drop">Drop</option>
    <option value="explode">Explode</option>
    <option value="fade">Fade</option>
    <option value="fold">Fold</option>
    <option value="highlight">Highlight</option>
    <option value="puff">Puff</option>
    <option value="pulsate">Pulsate</option>
    <option value="scale">Scale</option>
    <option value="shake">Shake</option>
    <option value="size">Size</option>
    <option value="slide">Slide</option>
</select>

<button id="button" class="ui-state-default ui-corner-all">Run Effect</button>


</body>
</html>