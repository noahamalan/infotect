<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <title>Histroy</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=2">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
        </div>
        <div>
            <ul class="nav navbar-nav">
                <li><a href="Home.php">Home</a></li>
                <li><a href="Histroy.php">Histroy</a></li>
                <li class="active"><a href="Dashboard.php">Dashboard</a></li>
                <li><a href="Algo.php">Algorithms</a> </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="Register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div>
    </div>
</nav>
</body>


<!DOCTYPE html>


    <head>
        <meta charset="utf-8">
        <title>jQuery UI Droppable - Shopping Cart Demo</title>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.3/jquery-ui.js"></script>
        <link rel="stylesheet" href="/resources/demos/style.css">
        <style>
            h1 { padding: .2em; margin: 0; }
            #products { float:left; width: 300px; margin-right: 2em; }
            #cart { width: 1000px; float: left; margin-top: 1em; }
            /* style the list to maximize the droppable hitarea */
            #cart ol { margin: 0; padding: 1em 0 1em 3em; }
        </style>
        <script>
            $(function() {
                $( "#catalog" ).accordion();
                $( "#catalog li" ).draggable({
                    appendTo: "body",
                    helper: "clone"
                });
                $( "#cart ol" ).droppable({
                    activeClass: "ui-state-default",
                    hoverClass: "ui-state-hover",
                    accept: ":not(.ui-sortable-helper)",
                    drop: function( event, ui ) {
                        $( this ).find( ".placeholder" ).remove();
                        $( "<li></li>" ).text( ui.draggable.text() ).appendTo( this );
                    }
                }).sortable({
                    items: "li:not(.placeholder)",
                    sort: function() {
                        // gets added unintentionally by droppable interacting with sortable
                        // using connectWithSortable fixes this, but doesn't allow you to customize active/hoverClass options
                        $( this ).removeClass( "ui-state-default" );
                    }
                });
            });
        </script>
    </head>
    <body>

    <div id="products">
        <h1 class="ui-widget-header">Objects</h1>
        <div id="catalog">
            <h2><a href="#">Movable Objects</a></h2>
            <div>
            <ul id="gallery" class="gallery ui-helper-reset ui-helper-clearfix">
                <li class="ui-widget-content ui-corner-tr">
                    <h5 class="ui-widget-header">High Tatras</h5>
                    <img src="images/car.jpg" alt="The peaks of High Tatras" width="96" height="72">
                    <a href="images/car.jpg" title="View larger image" class="ui-icon ui-icon-zoomin">View larger</a>
                    <a href="link/to/trash/script/when/we/have/js/off" title="Delete this image" class="ui-icon ui-icon-trash">Delete image</a>
                </li>
                <li class="ui-widget-content ui-corner-tr">
                    <h5 class="ui-widget-header">High Tatras 2</h5>
                    <img src="images/road.jpg" alt="The chalet at the Green mountain lake" width="96" height="72">
                    <a href="images/road.jpg" title="View larger image" class="ui-icon ui-icon-zoomin">View larger</a>
                    <a href="link/to/trash/script/when/we/have/js/off" title="Delete this image" class="ui-icon ui-icon-trash">Delete image</a>
                </li>
                <li class="ui-widget-content ui-corner-tr">
                    <h5 class="ui-widget-header">High Tatras 3</h5>
                    <img src="images/high_tatras3_min.jpg" alt="Planning the ascent" width="96" height="72">
                    <a href="images/high_tatras3.jpg" title="View larger image" class="ui-icon ui-icon-zoomin">View larger</a>
                    <a href="link/to/trash/script/when/we/have/js/off" title="Delete this image" class="ui-icon ui-icon-trash">Delete image</a>
                </li>
                <li class="ui-widget-content ui-corner-tr">
                    <h5 class="ui-widget-header">High Tatras 4</h5>
                    <img src="images/high_tatras4_min.jpg" alt="On top of Kozi kopka" width="96" height="72">
                    <a href="images/high_tatras4.jpg" title="View larger image" class="ui-icon ui-icon-zoomin">View larger</a>
                    <a href="link/to/trash/script/when/we/have/js/off" title="Delete this image" class="ui-icon ui-icon-trash">Delete image</a>
                </li>
            </ul>
                </div>
            <h2><a href="#">landing Objects</a></h2>
            <div>
                <ul>
                    <li>Zebra Striped</li>
                    <li>Black Leather</li>
                    <li>Alligator Leather</li>
                </ul>
            </div>
            <h2><a href="#">Other</a></h2>
            <div>
                <ul>
                    <li>iPhone</li>
                    <li>iPod</li>
                    <li>iPad</li>
                </ul>
            </div>
        </div>
    </div>

    <div id="cart">
        <h1 class="ui-widget-header">Drawing Screen</h1>
        <div class="ui-widget-content">
            <div class="ui-widget ui-helper-clearfix">
                <div id="trash" class="ui-widget-content ui-state-default">
                </div>
            </div>

        </div>
    </div>

 </div>
    <br>
    <br>

<div class="form-group">
    <div class="col-sm-5">
        <br>
        <a href="Algo.php" <button type="submit" class="btn btn-primary btn-block btn-lg">View Algorithms</button></a>

    </div>
    <span class="help-block"></span>
</div>

</body>

<style>
    #gallery { float: left; width: 65%; min-height: 12em; }
    .gallery.custom-state-active { background: #eee; }
    .gallery li { float: left; width: 96px; padding: 0.4em; margin: 0 0.4em 0.4em 0; text-align: center; }
    .gallery li h5 { margin: 0 0 0.4em; cursor: move; }
    .gallery li a { float: right; }
    .gallery li a.ui-icon-zoomin { float: left; }
    .gallery li img { width: 100%; cursor: move; }

    #trash { float: left ; width: 100%; min-height: 18em; padding: 1%; }
    #trash h4 { line-height: 16px; margin: 0 0 0.4em; }
    #trash h4 .ui-icon { float: left; }
    #trash .gallery h5 { display: none; }
</style>
<script>
    $(function() {
        // there's the gallery and the trash
        var $gallery = $( "#gallery" ),
            $trash = $( "#trash" );

        // let the gallery items be draggable
        $( "li", $gallery ).draggable({
            cancel: "a.ui-icon", // clicking an icon won't initiate dragging
            revert: "invalid", // when not dropped, the item will revert back to its initial position
            containment: "document",
            helper: "clone",
            cursor: "move"
        });

        // let the trash be droppable, accepting the gallery items
        $trash.droppable({
            accept: "#gallery > li",
            activeClass: "ui-state-highlight",
            drop: function( event, ui ) {
                deleteImage( ui.draggable );
            }
        });

        // let the gallery be droppable as well, accepting items from the trash
        $gallery.droppable({
            accept: "#trash li",
            activeClass: "custom-state-active",
            drop: function( event, ui ) {
                recycleImage( ui.draggable );
            }
        });

        // image deletion function
        var recycle_icon = "<a href='link/to/recycle/script/when/we/have/js/off' title='Recycle this image' class='ui-icon ui-icon-refresh'>Recycle image</a>";
        function deleteImage( $item ) {
            $item.fadeOut(function() {
                var $list = $( "ul", $trash ).length ?
                    $( "ul", $trash ) :
                    $( "<ul class='gallery ui-helper-reset'/>" ).appendTo( $trash );

                $item.find( "a.ui-icon-trash" ).remove();
                $item.append( recycle_icon ).appendTo( $list ).fadeIn(function() {
                    $item
                        .animate({ width: "48px" })
                        .find( "img" )
                        .animate({ height: "36px" });
                });
            });
        }

        // image recycle function
        var trash_icon = "<a href='link/to/trash/script/when/we/have/js/off' title='Delete this image' class='ui-icon ui-icon-trash'>Delete image</a>";
        function recycleImage( $item ) {
            $item.fadeOut(function() {
                $item
                    .find( "a.ui-icon-refresh" )
                    .remove()
                    .end()
                    .css( "width", "96px")
                    .append( trash_icon )
                    .find( "img" )
                    .css( "height", "72px" )
                    .end()
                    .appendTo( $gallery )
                    .fadeIn();
            });
        }

        // image preview function, demonstrating the ui.dialog used as a modal window
        function viewLargerImage( $link ) {
            var src = $link.attr( "href" ),
                title = $link.siblings( "img" ).attr( "alt" ),
                $modal = $( "img[src$='" + src + "']" );

            if ( $modal.length ) {
                $modal.dialog( "open" );
            } else {
                var img = $( "<img alt='" + title + "' width='384' height='288' style='display: none; padding: 8px;' />" )
                    .attr( "src", src ).appendTo( "body" );
                setTimeout(function() {
                    img.dialog({
                        title: title,
                        width: 400,
                        modal: true
                    });
                }, 1 );
            }
        }

        // resolve the icons behavior with event delegation
        $( "ul.gallery > li" ).click(function( event ) {
            var $item = $( this ),
                $target = $( event.target );

            if ( $target.is( "a.ui-icon-trash" ) ) {
                deleteImage( $item );
            } else if ( $target.is( "a.ui-icon-zoomin" ) ) {
                viewLargerImage( $target );
            } else if ( $target.is( "a.ui-icon-refresh" ) ) {
                recycleImage( $item );
            }

            return false;
        });
    });
</script>
</head>
<body>






</body>

</html>






