
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
                <li><a href="profile.php">Profile</a></li>
                <li class="active"><a href="DeveloperEntry.php.php">Developers</a></li>
                <li><a href="dayend.php">Day Task</a></li>
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
    <style>
        * {
            box-sizing: border-box;
        }

        #myInput {
            background-image: url('/css/searchicon.png');
            background-position: 10px 10px;
            background-repeat: no-repeat;
            width: 100%;
            font-size: 16px;
            padding: 12px 20px 12px 40px;
            border: 1px solid #ddd;
            margin-bottom: 12px;
        }

        #myTable {
            border-collapse: collapse;
            width: 100%;
            border: 1px solid #ddd;
            font-size: 18px;
        }

        #myTable th, #myTable td {
            text-align: left;
            padding: 12px;
        }

        #myTable tr {
            border-bottom: 1px solid #ddd;
        }

        #myTable tr.header, #myTable tr:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>
<body>

<h2>Developers</h2>

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">

<table id="myTable">
    <tr class="header">
        <th style="width:40%;">Name</th>
        <th style="width:20%;">Language</th>
        <th style="width:20%;">Year Of work</th>
        <th style="width:20%;">last Project</th>
    </tr>
    <?php load_data(); ?>
</table>

<script>
    function myFunction() {
        var input, filter, table, tr, td, i;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
            if (td) {
                if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
</script>

</body>
</html>

<?php
//Adding data to database
function load_data(){
    $con = create_DB_connection();
    if($con){
        $sql = prepare_add_query();
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
function prepare_add_query(){
    $sql = "SELECT * from developers";
    return $sql;
}


//Executing Query to add data to database
function execute_query($connection , $sql){
    $result = $connection->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr>
            <td>".$row["Name"]."</td>
            <td>".$row["Language"]."</td>
            <td>".$row["YearOfwork"]."</td>
            <td>".$row["lastProject"]."</td>
            </tr>";
        }
    } else {
        echo "Invalid login";
    }
}
?>
