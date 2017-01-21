<!DOCTYPE html>
<html lang="en">
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
                <li><a href="Profile.php">Profile</a></li>
                <li class="active"><a href="Histroy.php">Histroy</a></li>
                <li><a href="Dashboard.php">Dashboard</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="Register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div>
    </div>
</nav>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h2>Project Histroy</h2>
    <P> Worked project</P>
    <div class="table-responsive">
        <table class="table">
            <thead>
            <tr>
            <tr class="success">
                <th>#</th>
                <th>Project</th>
                <th>Task</th>
                <th>Platform/Lang</th>
                <th>Completed Duration</th>
                <th>Success Rate</th>
            </tr>
            </thead>
            <tbody>
            <tr>
            <?php load_data(null); ?>
            </tbody>
        </table>
    </div>
</div>

<div class="container">
    <h2>Project Histroy</h2>
    <P> Worked project</P>
    <div class="table-responsive">
        <table class="table">
            <thead>
            <tr>
            <tr class="success">
                <th>#</th>
                <th>Developer</th>
                <th>Project</th>
                <th>Task</th>
                <th>Platform/Lang</th>
                <th>Completed Duration</th>
                <th>Success Rate</th>
            </tr>
            </thead>
            <tbody>
            <?php load_data("admin"); ?>
            </tbody>
        </table>
    </div>
</div>

</body>
</html>

<h3>To delete a demo, click the text </h3>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $("p").click(function(){
            $(this).hide();
        });
    });
</script>

<p>Demo 1</p>
<p>Demo 2</p>
<p>Demo 3</p>

</body>
</html>

<?php
//Adding data to database
function load_data($key){
    $con = create_DB_connection();
    if($con){
        $sql = prepare_add_query();
        $message = execute_query($con , $sql , $key);
        echo $message;
    }
}

//Creating the database connection
function create_DB_connection(){
    $newconnection = new mysqli("localhost:3306", "root" , "", "infotect");
    return $newconnection;
}

//Preparing the query to add data to database
function prepare_add_query(){
    $sql = "SELECT * from phistory";
    return $sql;
}

//Executing Query to add data to database
function execute_query($connection , $sql , $key){
    $result = $connection->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        if($key== null){
            $count = 1;
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                <td>".$count."</td>
                <td>".$row["project"]."</td>
                <td>".$row["task"]."</td>
                <td>".$row["platform"]."</td>
                <td>".$row["duration"]."</td>
                <td>".$row["successrate"]."</td>
                </tr>";
                $count = $count + 1;
            }
        }
        else{
            while($row = $result->fetch_assoc()) {
                $count = 1;
                echo "<tr>
                <td>".$count."</td>
                <td>".$row["project"]."</td>
                <td>".$row["task"]."</td>
                <td>".$row["platform"]."</td>
                <td>".$row["duration"]."</td>
                <td>".$row["successrate"]."</td>
                <td>".$row["developername"]."</td>
                </tr>";
                $count = $count + 1;
            }
        }
    } else {
        echo "Invalid login";
    }
}
?>