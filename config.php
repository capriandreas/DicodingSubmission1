<?php
    $serverName="tcp:dicodingappservercapri.database.windows.net,1433";
    $uid = "dicoding";
    $pwd = "Caprias!55";
    $connectionInfo = array( "UID"=>$uid,


                             "PWD"=>$pwd,


                             "Database"=>"dicodingdb",


                             "CharacterSet"=>"UTF-8");

    $conn = sqlsrv_connect( $serverName, $connectionInfo);
	
	if($conn){
        echo "Koneksi Berhasil";
    }else{
        echo "koneksi gagal";
    }
?>