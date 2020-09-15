<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        
        <?php
        $serverName = "douglascs2300.database.windows.net"; // update me
        $connectionOptions = array(
            "Database" => "douglas", // update me
            "Uid" => "douglascollege", // update me
            "PWD" => "REPLACE_THIS" // update me
        );
        // sqlcmd -S douglascs2300.database.windows.net -U douglascollege -P PASSWORD

        //Establishes the connection
        $conn = sqlsrv_connect($serverName, $connectionOptions);
        $tsql = "SELECT firstname from customer";
        $getResults = sqlsrv_query($conn, $tsql);
        if ($getResults == FALSE)
            print_r (sqlsrv_errors());
        while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)) {
            echo ($row['firstname'] . '<br/>'. PHP_EOL);
        }
        sqlsrv_free_stmt($getResults);
        ?>
    </body>
</html>
