<html>
<head>
    <title>Add People</title>
</head>

<body>
    <a href="index.php">Go to Home</a>
    <br/><br/>

    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Name</td>
                <td><input type="text" name="Name"></td>
            </tr>
            <tr> 
                <td>Email</td>
                <td><input type="text" name="Email"></td>
            </tr>
            <tr> 
                <td>Job</td>
                <td><input type="text" name="Job"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>

    <?php
    if(isset($_POST['Submit'])) {
        $name = $_POST['Name'];
        $email = $_POST['Email'];
        $job = $_POST['Job'];

        include_once("config.php");

        $result = sqlsrv_query($conn, "INSERT INTO People(Name,Email,Job) VALUES('$name','$email','$job')");

        echo "User added successfully. <a href='index.php'>View Users</a>";
    }
    ?>
</body>
</html>