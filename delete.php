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

    <h2> Delete an employee</h2>
     <form method='POST'>
    <input type='text' name='name' placeholder='Enter Item Name to be Deleted'/><br>
    <input type='submit' name='submit' value='Delete'/>
    </form>
    <?php
     require_once 'connection.php';
     $conn=new mysqli($hn,$un,$pw,$db);
     if ($conn->connect_error) die($conn->connect_error);
     if(isset($_POST['submit'])){
    $id = $_POST['name'];
    $conn=new mysqli($hn,$un,$pw,$db);
if ($conn->connect_error) die($conn->connect_error);

    $sql = "DELETE FROM logistics WHERE item = '$id'";
    
    if ($conn->query($sql) === TRUE) {
        echo "Item Deleted Successfully";
    } else {
        echo "Error deleting task: " . $conn->error;
    }
}

echo <<<_END
<br><br>
<input type=button onClick="location.href='home.php'" value='Home'>
_END?>
    <?php include 'display.php'; ?>
</body>
</html>