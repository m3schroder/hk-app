<?php
    include_once '/var/www/pollbois.com/php/connect.php';

    $desiredresp = $_POST['resp'];
    $desiredlevel = $_POST['level'];
    $desiredtype = $_POST['type'];
    $desiredplant = $_POST['plant'];

    $sql = ("SELECT * FROM hk WHERE (plant = '$desiredplant' AND resp = '$desiredresp' 
                                    AND level = '$desiredlevel' AND type = '$desiredtype')");

    $result = $conn->query($sql);

    if ($result === false) {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    else {
           echo '<table class = "table table-striped" border="0" cellspacing="3" cellpadding="2"> 
            <tr> 
                <td> <font face="Arial">Plant</font> </td> 
                <td> <font face="Arial">Responsible</font> </td> 
                <td> <font face="Arial">Level</font> </td> 
                <td> <font face="Arial">Type</font> </td> 
                <td> <font face="Arial">Objective</font> </td> 
                <td> <font face="Arial">Strategy</font> </td> 
                <td> <font face="Arial">Target</font> </td> 
            </tr>';
            while ($row = mysqli_fetch_array($result)) {
                echo '<tr>
                        <td>'.$row["plant"].'</td> 
                        <td>'.$row["resp"].'</td> 
                        <td>'.$row["level"].'</td> 
                        <td>'.$row["type"].'</td> 
                        <td>'.$row["obj"].'</td> 
                        <td>'.$row["strat"].'</td> 
                        <td><input/></td>
                    </tr>';
            }
        echo '</table>';
        }
        $result->free();
?>