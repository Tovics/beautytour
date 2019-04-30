<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BeautyTour</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <!-- Bootstrap JS, JQuery -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous" defer>
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous" defer>
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous" defer>
    </script>

    <!--SPONSORS STUFF-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js" defer></script>
    <script src="/static/js/sponsors.js" defer></script>


    <!-- Local CSS -->
    <link rel="stylesheet" href="/static/css/header.css" crossorigin="anonymous">
    <link rel="stylesheet" href="/static/css/tour_map.css" crossorigin="anonymous">
    <link rel="stylesheet" href="/static/css/sponsors.css" crossorigin="anonymous">
    <link rel="stylesheet" href="/static/css/index.css" crossorigin="anonymous">


</head>

<body>
        <?php
            include('header.php');
            include('tour_map.php');
            include('sponsors.php');
        ?>
    <div class="cim">
        <img src="/static/images/cím2.png">
    </div>
    <div class="head">
        <img src="/static/images/head2.png">
    </div>
    <div class="sminkphoto">
        <img src="/static/images/kepek2.png">
    </div>
    <div class="jotekony">
        <img src="/static/images/j1.png">
    </div>

</body>

</html>