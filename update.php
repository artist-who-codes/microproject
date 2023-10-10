<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        margin:7rem 14rem;
        text-align : center; 
        font-family:Arial, Helvetica, sans-serif;
    }
    input{
        padding: 6px;
        margin:0.5rem;
    }
</style>
<body>

    <h3>Enter the Item Name that should be edited</h3>
    <form method='POST'>
        <input type='text' name='item' placeholder='Name'/>
        <input type='text' name='quantity' placeholder='Quantity'/><br>
        <input type='text' name='date' placeholder='Date of Import'/>
        <input type='text' name='quality' placeholder='Quality'/><br>
        <input type='text' name='transport' placeholder='Imported Via'/>
        <input type='text' name='country' placeholder='Country'/><br>
        <input type='submit' name='submit' value='Submit'/>
    </form>

</body>

<?php
    require_once 'connection.php';
$conn=new mysqli($hn,$un,$pw,$db);
if ($conn->connect_error) die($conn->connect_error);
if(isset($_POST['submit'])){
    $item = $_POST['item'];
    $quantity = $_POST['quantity'];
    $date = $_POST['date'];
    $quality = $_POST['quality'];
    $transport = $_POST['transport'];
    $country = $_POST['country'];
$sql = "update logistics set  quantity='$quantity', date='$date',quality='$quality', transport='$transport', country='$country' where item='$item';";
$result = $conn->query($sql);
if (!$result) die ("Database access failed: " . $conn->error);
echo "<br>Item Updated successfully";
$conn->close();
}
echo <<<_END
<br><br>
<input type=button onClick="location.href='home.php'" value='Home'>
_END
?>
<?php include 'display.php'; ?>

</html>