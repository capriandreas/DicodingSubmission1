<?php
include_once("config.php");

$tsql = "Select * From people";
$stmt = sqlsrv_query( $conn, $tsql);
?>

<html>
<head>    
    <title>Dashboard</title>
</head>

<body>
<a href="add.php">Add New User</a><br/><br/>
    <table width='80%' border=1>
    <tr>
        <th>Name</th> <th>Email</th> <th>Job</th> <th>Date</th>
    </tr>
    <?php  
    while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {        
        echo "<tr>";
        echo "<td>".$row['Name']."</td>";
        echo "<td>".$row['Email']."</td>";
        echo "<td>".$row['Job']."</td>";   
		echo "<td>".$row['CreatedDate']."</td>";   		
    }
    ?>
    </table>
</body>
</html>