<html>
<head>
        <title>Bootstrap Lightbox</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <style class="anchorjs"></style><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" rel="stylesheet">

        <!-- for documentation only -->
        <style type="text/css">
            div.row > div > div.row {
                margin-bottom: 15px;
            }

            html {
                background-color: #02709e;
            }
            body {
                background: #fefefe;
                padding-bottom: 50px;
            }

            div.top-container {
                padding-top:100px;
                background-color: #02709e;
                color:#ccc;
            }
            div.top-container h1 {
                color:white;
            }
            div.top-container a {
                color:#ccc;
                border-bottom:1px dotted white;
            }
            div.top-container a:hover {
                color: white;
                cursor:pointer;
                border-bottom:1px solid white;
                text-decoration: none;
            }
            div.top-header {
                margin-bottom:100px;
            }

            h2 {
                background-color:#02709e;
                color:white;
                display:inline-block;
                padding:6px;
                margin-top:100px;
            }

            h3 {
                padding-bottom:5px;
                margin-bottom:10px;
                border-bottom:1px solid #f2f2f2;
                margin-top: 50px;
            }

            h4:not(.modal-title) {
                margin-top:25px;
            }

            figure {
                position: relative;
            }

            figure figcaption {
                font-size: 22px;
                color: #fff;
                text-decoration: none;
                bottom: 10px;
                right: 20px;
                position: absolute;
                background-color: #000;
            }
			code[data-code], code.block-code {
                display:block;
                overflow:scroll;
                font-size:12px;
				white-space: pre;
			}

            table {
                font-size:12px;
            }
            .footer {
                text-align: center;
            }
            .footer span {
                margin-top:100px;
                font-size:12px;
                background-color:#02709e;
                color:white;
                display:inline-block;
                padding:6px;
            }
            .footer span a {
                color:#ccc;
                border-bottom:1px dotted white;
            }
            .footer span a:hover {
                cursor:pointer;
                color: white;
                border-bottom:1px solid white;
                text-decoration: none;
            }
            a.anchorjs-link {
                color:black;
            }
            a.anchorjs-link:hover {
                color:#02709e;
                text-decoration: none;
            }
        </style>
    </head>
    <body>

        <div class="top-container">
            
                        
								!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
								!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
								!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
								!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
								
								#Ezt minden felhasználásnál meg kell jeleníteni, így ingyenesen használható:
								# Dual licensed under the MIT or GPL Version 2 licenses.
								<div data-code="example-2">
                                    <div class="row justify-content-center">
                                        <div class="col-md-8">
                                            <div class="row">
                                                <a href="https://unsplash.it/1200/768.jpg?image=251" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                                                    <img src="https://unsplash.it/600.jpg?image=251" class="img-fluid">
                                                </a>
                                                <a href="https://unsplash.it/1200/768.jpg?image=252" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                                                    <img src="https://unsplash.it/600.jpg?image=252" class="img-fluid">
                                                </a>
                                                <a href="https://unsplash.it/1200/768.jpg?image=253" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                                                    <img src="https://unsplash.it/600.jpg?image=253" class="img-fluid">
                                                </a>
                                            </div>
                                            <div class="row">
                                                <a href="https://unsplash.it/1200/768.jpg?image=254" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                                                    <img src="https://unsplash.it/600.jpg?image=254" class="img-fluid">
                                                </a>
                                                <a href="https://unsplash.it/1200/768.jpg?image=255" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                                                    <img src="https://unsplash.it/600.jpg?image=255" class="img-fluid">
                                                </a>
                                                <a href="https://unsplash.it/1200/768.jpg?image=256" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                                                    <img src="https://unsplash.it/600.jpg?image=256" class="img-fluid">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
								
								!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
								!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
								!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
								!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
								!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
								!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
								
            
                    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></script>
            
                    <!-- for documentation only -->
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/anchor-js/3.2.1/anchor.min.js"></script>
                    <script type="text/javascript">
                        $(document).ready(function ($) {
                            // delegate calls to data-toggle="lightbox"
                            $(document).on('click', '[data-toggle="lightbox"]:not([data-gallery="navigateTo"]):not([data-gallery="example-gallery-11"])', function(event) {
                                event.preventDefault();
                                return $(this).ekkoLightbox({
                                    onShown: function() {
                                        if (window.console) {
                                            return console.log('Checking our the events huh?');
                                        }
                                    },
                                    onNavigate: function(direction, itemIndex) {
                                        if (window.console) {
                                            return console.log('Navigating '+direction+'. Current item: '+itemIndex);
                                        }
                                    }
                                });
                            });
            
                            // disable wrapping
                            $(document).on('click', '[data-toggle="lightbox"][data-gallery="example-gallery-11"]', function(event) {
                                event.preventDefault();
                                return $(this).ekkoLightbox({
                                    wrapping: false
                                });
                            });
            
                            //Programmatically call
                            $('#open-image').click(function (e) {
                                e.preventDefault();
                                $(this).ekkoLightbox();
                            });
                            $('#open-youtube').click(function (e) {
                                e.preventDefault();
                                $(this).ekkoLightbox();
                            });
            
                            // navigateTo
                            $(document).on('click', '[data-toggle="lightbox"][data-gallery="navigateTo"]', function(event) {
                                event.preventDefault();
            
                                return $(this).ekkoLightbox({
                                    onShown: function() {
            
                                        this.modal().on('click', '.modal-footer a', function(e) {
            
                                            e.preventDefault();
                                            this.navigateTo(2);
            
                                        }.bind(this));
            
                                    }
                                });
                            });
            
            
                            /**
                             * Documentation specific - ignore this
                             */
                            anchors.options.placement = 'left';
                            anchors.add('h3');
                            $('code[data-code]').each(function() {
            
                                var $code = $(this),
                                    $pair = $('div[data-code="'+$code.data('code')+'"]');
            
                                $code.hide();
                                var text = $code.text($pair.html()).html().trim().split("\n");
                                var indentLength = text[text.length - 1].match(/^\s+/)
                                indentLength = indentLength ? indentLength[0].length : 24;
                                var indent = '';
                                for(var i = 0; i < indentLength; i++)
                                    indent += ' ';
                                if($code.data('trim') == 'all') {
                                    for (var i = 0; i < text.length; i++)
                                        text[i] = text[i].trim();
                                } else  {
                                    for (var i = 0; i < text.length; i++)
                                        text[i] = text[i].replace(indent, '    ').replace('    ', '');
                                }
                                text = text.join("\n");
                                $code.html(text).show();
            
                            });
                        });
                    </script>
    

</body>
</html>