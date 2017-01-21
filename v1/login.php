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
                <li><a href="ContactUS.php">Contact us</a></li>
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
            <h2>Login</h2>
            <br>
    <form method="post" class="form-horizontal" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" role="form">
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">UserName:</label>
            <div class="col-sm-10">
                <input type="email" name="username" class="form-control" id="email" placeholder="Enter User Name">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Password:</label>
            <div class="col-sm-10">
                <input type="password" name="password" class="form-control" id="pwd" placeholder="Enter password">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <div class="checkbox">
                    <label><input type="checkbox"> Remember me</label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-8">
                <input type="submit" name="submit" value="Submit"> 
                <a href="ForgotPWD.php"<button class="btn btn-info btn-block">Forgot Password</button></a>


                <div class="alert alert-success" role="alert">
                    <button type="submit" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>Success!</strong> You have successfully registered !
                </div>

            </div>

    </form>
</div>


</body>
</html>

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
    $sql = "SELECT * from user where username = '".$username."' AND  password = '".$password."'";
    return $sql;
}


//Executing Query to add data to database
function execute_query($connection , $sql){
    $result = $connection->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        // while($row = $result->fetch_assoc()) {
        //     echo "username: " . $row["username"]. " - password: " . $row["password"]."<br>";
        // }
        header( "Location: /infotect/v1/home.php" );
    } else {
        echo "Invalid login";
    }
}
?>