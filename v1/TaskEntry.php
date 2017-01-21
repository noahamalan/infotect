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
        <div class="well">

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

            <h2>Developers</h2>

            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">

            <table id="myTable">
                <tr class="header">
                    <th style="width:60%;">Name</th>
                    <th style="width:40%;">Country</th>
                </tr>
                <tr>
                    <td>Alfreds Futterkiste</td>
                    <td>Germany</td>
                </tr>
                <tr>
                    <td>Berglunds snabbkop</td>
                    <td>Sweden</td>
                </tr>
                <tr>
                    <td>Island Trading</td>
                    <td>UK</td>
                </tr>
                <tr>
                    <td>Koniglich Essen</td>
                    <td>Germany</td>
                </tr>
                <tr>
                    <td>Laughing Bacchus Winecellars</td>
                    <td>Canada</td>
                </tr>
                <tr>
                    <td>Magazzini Alimentari Riuniti</td>
                    <td>Italy</td>
                </tr>
                <tr>
                    <td>North/South</td>
                    <td>UK</td>
                </tr>
                <tr>
                    <td>Paris specialites</td>
                    <td>France</td>
                </tr>
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

            <div class="form-group">
                <label for="Task Title" class="control-label"> Title </label>
                <br>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="Question" placeholder="Task Title">
                </div>
                <span class="help-block"></span>
            </div>
            <br>

            <div class="form-group">
                <label for="Task Desc" class="control-label">Description</label>
                <br>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="Question" placeholder="Task Description">
                </div>
                <span class="help-block"></span>
            </div>
            <br>



            <div class="form-group">
                <label for="ProjectHours" class="control-label">Esitmated Duration</label>
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
        </div>
    </div>
</div>
</body>


