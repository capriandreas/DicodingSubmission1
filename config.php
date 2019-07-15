<?php
    $serverName="dicodingappservercapri.database.windows.net";
    $uid = "dicoding";
    $pwd = "Caprias!55";
    $connectionInfo = array( "UID"=>$uid,


                             "PWD"=>$pwd,


                             "Database"=>"dicodingdb",


                             "CharacterSet"=>"UTF-8");

    $conn = sqlsrv_connect( $serverName, $connectionInfo);
?>