
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=2">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
        </div>
        <div>
            <ul class="nav navbar-nav">
                <li><a href="home.php">Home</a></li>
                <li><a href="profile.php">Profile</a></li>
                <li><a href="DeveloperEntry.php">Developers</a></li>
                <li  class="active"><a href="dayend.php">Day Task</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> ABC</a></li>
            </ul>
        </div>
    </div>
</nav>
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
                <th>Task</th>
                <th>Expected Result</th>
                <th>Actual Result</th>
                <th>Completed Duration</th>
                <th>Finished Rate</th>
            </tr>
            </thead>
            <tbody>
            <tr>
            <tr class="danger">
                <td>1</td>
                <td>ABC</td>
                <td>User Creation</td>
                <td>Java</td>
                <td>36hrs 12min</td>
                <td>60%</td>
            </tr>

            <tr>
            <tr class="info">
                <td>2</td>
                <td>XYZ</td>
                <td>system Entry</td>
                <td>SQL</td>
                <td>72hrs 18 min</td>
                <td>27%</td>
            </tr>

            <tr>
            <tr class="danger">
                <td><input type="number" class="form-control" id="number" placeholder="number"></td>
                <td><input type="text" class="form-control" id="task" placeholder="Task"></td>
                <td><input type="text" class="form-control" id="eresult" placeholder="Expected Result"></td>
                <td><input type="text" class="form-control" id="Aresult" placeholder="Actual Result"></td>
                <td><input type="time" class="form-control" id="Question" placeholder="Completed Duration"></td>
                <td><input type="text" class="form-control" id="Question" placeholder="Finished Rate"></td>
            </tr>
            </tbody>
        </table>
    </div>
</div>


</body>
</html>
