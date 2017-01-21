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

<nav class="navbar navbar-inverse">
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
                <li><a href="Register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li class="active"><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="row">
    <div class="col-md-5 col-md-offset-3">
        <div class="well">
            <h2>Forgot password</h2>
            <br>
            <br>
            <form class="form-horizontal" role="form">
                <div class="form-group">
                    <label class="control-label col-sm-4" for="secques1">Security Question:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="email" placeholder="">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="pwd">Answer:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="pwd" placeholder="Enter Answer">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <a href="Register.php" <button type="submit" class="btn btn-success btn-block">Reset Password</button></a>


                        <div class="alert alert-success" role="alert">
                            <button type="submit" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <strong>Success!</strong> You have successfully registered !
                        </div>

                    </div>

            </form>
        </div>

</body>
</html>