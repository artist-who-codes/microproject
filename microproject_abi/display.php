
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table, th, td {
        color:black;
  border: 1px solid white;
  border-collapse: collapse;
}
th, td {
  background-color: hsla(242, 100%, 85%, 1);
  padding: 6px;
}
</style>
<body>
<?php
require_once 'connection.php';
$conn=new mysqli($hn,$un,$pw,$db);
if ($conn->connect_error) die($conn->connect_error);
$sql = "SELECT * FROM employee";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Employee List</h2>";
    echo "<table border-color=white align='center' border=1> <tr> <td> <b>Employee ID </b></td> <td> <b>Employee Name </b></td> <td> <b>Role </b></td><td> <b>Date of Joining </b></td></td><td> <b>Salary </b></td><td> <b>Marital Status </b></td> </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>{$row['emp_id']}</td> <td>{$row['name']}</td><td>{$row['role']}</td><td>{$row['date_of_join']}</td><td>{$row['salary']}</td><td>{$row['marital_status']}</td></tr>";
    }
    echo "</ul>";
} else {
    echo "No tasks found.";
}
$conn->close();
?>
    
</body>
</html>