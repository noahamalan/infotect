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
                <li><a href="services.php">Services</a></li>
                <li><a href="AboutUs.php">About us </a></li>
                <li><a href="ContactUS.php">Contact us</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="Register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div>
    </div>
</nav>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<div class="row">
    <div class="col-xs-5">
        <center>
            <h1>Register </h1>
            <p class="lead">Become a part of M&M Family!</p>
            <a href="login.php"<button class="btn btn-lg btn-success">Back to Login</button></a>
        </center>
    </div>
    <div class="col-xs-6">
        <div class="well">

            <!-- <div class="form-group">
                <label for="fullname" class="control-label">Full Name</label>
                <br>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="fullname" placeholder="Enter Full Name">
                </div>
                <span class="help-block"></span>
            </div>
            <br>

            <div class="form-group">
                <label for="designation" class="control-label">Designation</label>
                <br>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="designation" placeholder="Enter Desigation">
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
                <label for="dob">Date of Birth</label>
                <br>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="dob" placeholder="Enter Date of Birth">
                </div>
                <span class="help-block"></span>

            </div>
            <br>
 -->
            <div class="form-group">
                <label for="username" class="control-label">User Name</label>
                <br>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="username" name="username" placeholder="Enter User Name">
                </div>
                <span class="help-block"></span>
            </div>
            <br>

            <div class="form-group">
                <label for="password" class="control-label">Password</label>
                <br>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="pwd" name="password" placeholder="Enter password">
                </div>
                <span class="help-block"></span>
            </div>
            <br>

            <div class="form-group">
                <label for="password_confirm" class="control-label">Confirm Password</label>
                <br>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="cpwd" placeholder="Re-Enter Password">
                </div>
                <span class="help-block"></span>
            </div>
            <br>

            <!-- <div class="form-group">
                <label for="secques" class="control-label">Select a Security Question</label>
                <br>
                <div class="col-sm-10">
                    <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Tutorials
                        <span class="caret"></span></button>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">HTML</a></li>
                        <li role="presentation" class="disabled"><a role="menuitem" tabindex="-1" href="#">CSS</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">JavaScript</a></li>
                        <li role="presentation" class="divider"></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">PHP</a></li>
                    </ul>
                </div>
               <span class="help-block"></span>
            </div>
            <br>

            <div class="form-group">
                <label for="secans" class="control-label">Answer the security Question</label>
                <br>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="cpwd" placeholder="Answer the selected question">
                </div>
                <span class="help-block"></span>
            </div>
            <br> -->

<!--             <div class="form-group">
                <div class="col-sm-10">
                    <br>
                    <button type="submit" class="btn btn-primary btn-block btn-lg">Create Account</button>
                    <div class="alert alert-warning alert-dismissible" role="alert">
                        <button type="submit" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>Success !</strong> Your Registration has entered to our server
                    </div>
                    <div class="alert alert-warning alert-dismissible" role="alert">
                        <button type="submit" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>Failed !</strong> Required fields are not filled
                    </div>
                </div>
                <span class="help-block"></span>
            </div> -->
            <input type="submit" name="submit" value="Submit"> 
        </div>
        </div>
    </div>
    </form>
</body>

<?php
//Post Request sent from form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Accesses the name that was added in the form
    add_data($_POST["username"] , $_POST["password"]);
}

//Adding data to database
function add_data($username , $password){
    $con = create_DB_connection();
    if($con){
        $sql = prepare_add_query($username , $password);
        $message = execute_query($con , $sql);
        echo $message;
    }
}

//Creating the database connection
function create_DB_connection(){
    $newconnection = new mysqli("localhost:3306", "root" , "", "infotect");
    return $newconnection;
}

//Preparing the query to add data to database
function prepare_add_query($username , $password){
    $sql = "INSERT INTO user (username , password) VALUES ('".$username."','".$password."')";
    return $sql;
}


//Executing Query to add data to database
function execute_query($connection , $sql){
    if ($connection->query($sql) === TRUE) {
        $message = "New record added successfully";
    } else {
        $message =  "Error: " . $sql . "<br>" . $connection->error;
    }
    return $message;
}
?>