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
                <ul class="nav navbar-nav">
                    <li><a href="Home.php">Home</a></li>
                    <li><a href="Profile.php">Profile</a></li>
                    <li ><a href="Histroy.php">Histroy</a></li>
                    <li><a href="Dashboard.php">Dashboard</a></li>
                    <li class="active"><a href="ProjectAssign.php">ProjectAssign </a> </li>
                </ul>
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
        <!-- <div class="well">

            <div class="form-group">
                <label for="Project Type" class="control-label">Type</label>
                <br>
                <div class="col-sm-10">
                    <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown"> ----
                        <span class="caret"></span></button>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Company</a></li>
                        <li role="presentation" class="disabled"><a role="menuitem" tabindex="-1" href="#">Client</a></li>
                     </ul>
                </div>
                <span class="help-block"></span>
            </div>
            <br>

            <div class="form-group">
                <label for="lang" class="control-label">Language</label>
                <br>
                <div class="col-sm-10">
                    <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown"> ---
                        <span class="caret"></span></button>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Java</a></li>
                        <li role="presentation" class="disabled"><a role="menuitem" tabindex="-1" href="#">C#</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">SQL</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Python</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">SQL</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Python</a></li>
                    </ul>
                </div>
                <span class="help-block"></span>

            </div>
            <br>


            <div class="form-group">
                <label for="ProjectHours" class="control-label">Hours</label>
                <br>
                <div class="col-sm-10">
                    <input type="time" class="form-control" id="time" placeholder="Enter Estimated Working Hours">
                </div>
                <span class="help-block"></span>
            </div>
            <br>

                       <br>

            <div class="form-group">
                <div class="col-sm-10">
                    <br>
                    <button type="Edit" class="btn btn-primary btn-block btn-lg">Edit</button>

                </div>
                <span class="help-block"></span>
            </div>
        </div> -->
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <div>
                Type: <input type="text" name="type">       
            </div>  
            <div>
                Duration: <input type="text" name="duration">      
            </div>
            <input type="submit" name="submit" value="Submit">  
        </form>
    </div>
</div>
</body>

<?php

//Post Request sent from form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Accesses the name that was added in the form

    load_data($_POST["type"] , $_POST["duration"]);
}


//Adding data to database
function load_data($type , $duration){
    $con = create_DB_connection();
    if($con){
        $sql = prepare_add_query($type , $duration);
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
function prepare_add_query($type , $duration){
    $append = "";
    $count = 0;
    if($type != "" || $duration != ""){
        $append = " where";
    }

    if($type != ""){
        $append = $append." platform LIKE '%".$type."%' ";
        $count = 1;
    }
    
    if($duration != ""){
        if($count == 1){
            $append = $append." and ";
        }
        $append = $append." duration <= ".$duration." ";
    }
    
    $sql = "SELECT * from phistory".$append." ORDER BY duration asc";
    return $sql;
}


//Executing Query to add data to database
function execute_query($connection , $sql){
    $result = $connection->query($sql);
    if($result){
        if ($result->num_rows > 0) {
            // output data of each row
            echo "<table id='myTable'>
                    <tr class='header'>
                    <th style='width:40%;'>Name</th>
                    <th style='width:20%;'>Platform</th>
                    <th style='width:20%;'>Duration</th>
                    <th style='width:20%;'>Success rate</th>
                    </tr>";

            while($row = $result->fetch_assoc()) {
                echo "<tr>
                <td>".$row["developername"]."</td>
                <td>".$row["platform"]."</td>
                <td>".$row["duration"]."</td>
                <td>".$row["successrate"]."</td>
                </tr>";
            }

            echo "</table>";
        }
    }
    else {
        echo "No result Found";
    }
}
?>
