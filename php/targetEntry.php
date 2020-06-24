<?php
    include_once '/var/www/pollbois.com/php/connect.php';

    $desiredresp = $_POST['resp'];
    $desiredlevel = $_POST['level'];
    $desiredtype = $_POST['type'];

    $sql = ("SELECT * FROM hk WHERE (resp = '$desiredresp' AND level = '$desiredlevel' AND type = '$desiredtype')");

    if ($result = $conn->query($sql)) {
        echo '<table class = "table table-striped" border="0" cellspacing="3" cellpadding="2"> 
        <tr> 
            <td> <font face="Arial">Responsible</font> </td> 
            <td> <font face="Arial">Level</font> </td> 
            <td> <font face="Arial">Type</font> </td> 
            <td> <font face="Arial">Objective</font> </td> 
            <td> <font face="Arial">Strategy</font> </td> 
            <td> <font face="Arial">Target</font> </td> 
        </tr>';
        while ($row = $result->fetch_assoc()) {
            $resp = $row["resp"];
            $level = $row["level"];
            $type = $row["type"];
            $obj = $row["obj"];
            $strat = $row["strat"]; 
            echo '<tr>
                    <td>'.$resp.'</td> 
                    <td>'.$level.'</td> 
                    <td>'.$type.'</td> 
                    <td>'.$obj.'</td> 
                    <td>'.$strat.'</td>
                    <td><input></input></td>
                </tr>';
        }
        $result->free();
    }
    else {
        echo "No data found";
    }
                

?>