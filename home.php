<!DOCTYPE html>
<html>
<head>
    <title>Task Manager</title>
</head>
 <style>
    body{
        margin:6rem 14rem;
        text-align : center; 
        font-family:Arial, Helvetica, sans-serif;
    }
    /* <!--.card{
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
        margin: 0rem 1rem;
        background-color: hsla(242, 100%, 85%, 1);
        padding: 6px;
        border-radius: 0.5rem;
       font-weight: 700;
       border: none;
       box-shadow: 0.2rem 0.2rem 5px rgba(0, 0, 0, 0.55);
    }--> */
</style> 
<body>
    <div class="card">
    <h1>Imported Items and Details</h1>
    <input type="button" onClick="location.href='add.php'" value="Add an Item">
    <input type="button" onClick="location.href='update.php'" value="Update an Item">
    <input type="button" onClick="location.href='delete.php'" value="Delete an Item">
    <?php include 'display.php'; ?>
    </div>
</body>
</html>