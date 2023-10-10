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
    <h3>Enter the Employee ID that should be edited</h3>
    <form method='POST'>
        <input type='text' name='name' placeholder='Name'/>
        <input type='number' name='emp_id' placeholder='Employee ID'/><br>
        <input type='text' name='salary' placeholder='Salary'/>
        <input type='text' name='date' placeholder='Date of Joining'/><br>
        <input type='text' name='role' placeholder='Role'/>
        <input type='text' name='status' placeholder='Marital Status'/><br>
        <input type='submit' name='submit' value='Submit'/>
    </form>
</body>
<?php
    require_once 'connection.php';
$conn=new mysqli($hn,$un,$pw,$db);
if ($conn->connect_error) die($conn->connect_error);
if(isset($_POST['submit'])){
$name = $_POST['name'];
    $emp_id = $_POST['emp_id'];
    $salary = $_POST['salary'];
    $date = $_POST['date'];
    $role = $_POST['role'];
    $status = $_POST['status'];
$sql = "update employee set emp_id=$emp_id, name='$name', salary='$salary',role='$role', date_of_join='$date', marital_status='$status' where emp_id=$emp_id;";
$result = $conn->query($sql);
if (!$result) die ("Database access failed: " . $conn->error);
echo "<br>Employee Updated successfully";
$conn->close();
}
echo <<<_END
<br><br>
<input type=button onClick="location.href='home.php'" value='Home'>
_END
?>
</html>