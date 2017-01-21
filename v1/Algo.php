
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
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
                <><a href="home.php">Home</a></li>
                <li><a href="Profile.php">Profile</a></li>
                <li><a href="Histroy.php">Histroy</a></li>
                <li><a href="Dashboard.php">Dashboard</a></li>
                <li class="active"><a href="Algo.php">Algorithm</a> </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="Register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div>
    </div>
</nav>

<!DOCTYPE html>
<style>
    #panel, #flip {
        padding: 5px;
        text-align: center;
        background-color: #e5eecc;
        border: solid 1px #c3c3c3;
    }

    #panel {
        text-align: left;
        padding: 50px;
        display: none;
    }
</style>


<div id="flip"><h4>View Algorithms</h4></div>
<div id="panel">



    <h3><span class="label label-primary">Drawing tools</span></h3><br>

    <div class="btn-group-vertical" role="group" >
        <button type="button" onclick="function1" class="btn-default btn-sm">Grounding Objects
            <span class="badge">4</span></button>

        <p id="demo"></p>
        <script>
            function function1() {
                document.getElementById("div1").innerHTML

                {
                <div id="div1" style="width:80px;height:80px;background-color:red;"></div>
                <br>
                <div id="div2" style="width:80px;height:80px;background-color:green;"></div>
                <br>
                <div id="div3" style="width:80px;height:80px;background-color:blue;"></div>
                };
            };


        </script>


        <button type="button" class="btn-default btn-block btn-sm">Moveable Objects
            <span class="badge">8</span></button>

        <button type="button" class="btn-default btn-block btn-sm">Additional Objects
            <span class="badge">6</span></button>


    </div>


    <script>
        $(document).ready(function(){
            $("#flip").click(function(){
                $("#panel").slideToggle("slow");
            });
        });
    </script>

</div>

<div class="form-group">
    <div class="col-sm-5">
        <br>
        <a href="Algo.php" <button type="submit" class="btn btn-primary btn-block btn-lg">View Algorithms</button></a>

    </div>
    <span class="help-block"></span>

    <script>
        function openWin() {
            window.open("Dashboard.php","_blank","toolbar=yes, location=yes, directories=no, status=no, menubar=yes, scrollbars=yes, resizable=no, copyhistory=yes, width=400, height=400");
        }
    </script>
    </head>

    <body>
    <form>
        <button type="button" class="btn btn-primary btn-lg" onclick="openWin()"> View Graph </button>
    </form>
    </body>

</div>
</body>
</html>


