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
    .card{
        background-color: hsl(242,80%,60%);
        padding: 3rem 3rem 6rem 3rem;
        border-radius: 1rem;
    }
    h1{
        font-size: 2.4rem;
    }
    span{
        color:hsla(313, 76%, 70%, 1);
        text-shadow: 0.2rem 0.2rem 5px rgba(0, 0, 0, 0.55);
    }
    input{
        background-color: hsla(242, 100%, 85%, 1);
        padding: 6px;
        border-radius: 0.5rem;
        margin: 1rem;;
       font-weight: 700;
       border: none;
       box-shadow: 0.2rem 0.2rem 5px rgba(0, 0, 0, 0.55);
    }
</style>
<body>
    <?php include 'display.php'; ?>
    <h2> Delete an employee</h2>
     <form method='POST'>
    <input type='number' name='emp_id' placeholder='Enter roll no to be deleted'/><br>
    <input type='submit' name='submit' value='Delete'/><br>
    </form>
    <?php
    if (isset($_POST['submit'])) {
    $id = $_POST['emp_id'];
    $conn=new mysqli($hn,$un,$pw,$db);
if ($conn->connect_error) die($conn->connect_error);

    $sql = "DELETE FROM employee WHERE emp_id = '$id'";
    
    if ($conn->query($sql) === TRUE) {
        echo "Student deleted successfully";
    } else {
        echo "Error deleting task: " . $conn->error;
    }
} else {
    echo "Task ID not provided.";
}

echo <<<_END
<br><br>
<input type=button onClick="location.href='home.php'" value='Home'>
_END?>
</body>
</html>