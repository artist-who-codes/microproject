
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
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 6px;
}
</style>
<body>
<?php
require_once 'connection.php';
$conn=new mysqli($hn,$un,$pw,$db);
if ($conn->connect_error) die($conn->connect_error);
$sql = "SELECT * FROM logistics";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Items List</h2>";
    echo "<table border-color=white align='center' border=1> <tr> <td> <b>Item Name</b></td> <td> <b>Quantity</b></td> <td> <b>Date</b></td><td> <b>Quality</b></td></td><td> <b>Imported Via </b></td><td> <b>Imported From </b></td> </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr> <td>{$row['item']}</td><td>{$row['quantity']}</td><td>{$row['date']}</td><td>{$row['quality']}</td><td>{$row['transport']}</td><td>{$row['country']}</td></tr>";
    }
    echo "</ul>";
} else {
    echo "No tasks found.";
}
$conn->close();
?>
    
</body>
</html>