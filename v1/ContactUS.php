
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
                <li><a href="home.php">Home</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="AboutUs.php">About us </a></li>
                <li  class="active"><a href="ContactUS.php">Contact us</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="Register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="row">
    <div class="col-xs-5">
        <center>
            <h1>For You From Us </h1>
            <p class="lead">We are looking forward to hear from you!</p>
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <li class="ui-widget-content ui-corner-tr">
                            <img src="images/contactUs.jpg" alt="The peaks of High Tatras" width="565" height="290">
                        </li>
                    </div>
                </div>
            </nav>
         </center>
    </div>
    <div class="col-xs-6">
        <div class="well">

            <div class="form-group">
                <label for="fullname" class="control-label">Full Name</label>
                <br>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="fullname" placeholder="Enter Full Name">
                </div>
                <span class="help-block"></span>
            </div>
            <br>

            <div class="form-group">
                <label for="email" class="control-label">Email</label>
                <br>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" placeholder="Enter Email ID">
                </div>
                <span class="help-block"></span>
            </div>
            <br>

            <div class="form-group">
                <label for="Question" class="control-label">Select your Criteria </label>
                <br>
                <div class="col-sm-10">
                    <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown"> Type
                        <span class="caret"></span></button>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Question</a></li>
                        <li role="presentation" class="disabled"><a role="menuitem" tabindex="-1" href="#">Suggestion</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Feedback</a></li>
                        <li role="presentation" class="divider"></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Complain</a></li>
                    </ul>
                </div>
                <span class="help-block"></span>
            </div>
            <br>

            <div class="form-group">
                <label for="Question" class="control-label"> Ask </label>
                <br>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="Question" placeholder="Ask what ever you think">
                </div>
                <span class="help-block"></span>
            </div>
            <br>


            <div class="form-group">
                <div class="col-sm-10">
                    <br>
                    <button type="submit" class="btn btn-primary btn-block btn-lg">Submit</button>
                    <div class="alert alert-warning alert-dismissible" role="alert">
                        <button type="submit" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>Thank You !</strong> We will get back to you as soon as possible.
                    </div>

                </div>
                <span class="help-block"></span>
            </div>
        </div>
    </div>
</div>
</body>
