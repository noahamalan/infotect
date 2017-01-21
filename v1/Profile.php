<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>
<body>

\<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
        </div>
        <div>
            <ul class="nav navbar-nav">
                <li><a href="home.php">Home</a></li>
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="Home.php">Page 1 <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Page 1-1</a></li>
                        <li><a href="#">Page 1-2</a></li>
                        <li><a href="#">Page 1-3</a></li>
                    </ul>
                </li>
                <li><a href="#">Page 2</a></li>
                <li><a href="#">Page 3</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="Register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="row">
    <div class="col-xs-5">
        <center>
            <h1>Profile</h1>
            <p class="lead">View your Profile </p>
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="propic1.JPG">
                            <img alt="Brand" src="...">
                        </a>
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
                    <input type="fullname" class="form-control" id="fullname" placeholder="Enter Full Name">
                </div>
                <span class="help-block"></span>
            </div>
            <br>

            <div class="form-group">
                <label for="designation" class="control-label">Designation</label>
                <br>
                <div class="col-sm-10">
                    <input type="designation" class="form-control" id="designation" placeholder="Enter Desigation">
                </div>
                <span class="help-block"></span>

            </div>
            <br>


            <div class="form-group">
                <label for="email" class="control-label">Email</label>
                <br>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" placeholder="Enter E-mail ID">
                </div>
                <span class="help-block"></span>
            </div>
            <br>

            <div class="form-group">
                <label for="dob">Date of Birth</label>
                <br>
                <div class="col-sm-10">
                    <input type="dob" class="form-control" id="dob" placeholder="Enter Date of Birth">
                </div>
                <span class="help-block"></span>

            </div>
            <br>

            <div class="form-group">
                <label for="username" class="control-label">User Name</label>
                <br>
                <div class="col-sm-10">
                    <input type="username" class="form-control" id="username" placeholder="Enter User Name">
                </div>
                <span class="help-block"></span>
            </div>
            <br>

            <div class="form-group">
                <label for="password" class="control-label">Password</label>
                <br>
                <div class="col-sm-10">
                    <input type="pwd" class="form-control" id="pwd" placeholder="Enter password">
                </div>
                <span class="help-block"></span>
            </div>
            <br>

            <div class="form-group">
                <label for="password_confirm" class="control-label">Confirm Password</label>
                <br>
                <div class="col-sm-10">
                    <input type="cpwd" class="form-control" id="cpwd" placeholder="Re-Enter Password">
                </div>
                <span class="help-block"></span>
            </div>
            <br>

            <div class="form-group">
                <div class="col-sm-10">
                    <br>
                    <button type="Edit" class="btn btn-primary btn-block btn-lg">Edit</button>

                </div>
                <span class="help-block"></span>
            </div>
        </div>
    </div>
</div>
</body>


