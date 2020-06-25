<?php
    include_once '/var/www/pollbois.com/php/connect.php';

    $months = array('apr','may','june','july','aug','sept','oct','nov','dec','jan','feb','mar');

    $resp = $_POST['resp'];
    $level = $_POST['level'];
    $type = $_POST['type'];
    $obj = $_POST['obj'];
    $objKpi = $_POST['objKpi'];
    $strat = $_POST['strat'];
    $stratKpi = $_POST['stratKpi'];
    $fy = $_POST['fy'];
    $unit = $_POST['unit'];
    $calc = $_POST['calc'];
    $notes = $_POST['notes'];
    $plant = $_POST['plant'];
    
    #for ($x = 0; $x <= 11; $x++) {
        $sql = ("INSERT INTO hk(resp,plant,level,type,obj,objKpi,strat,stratKpi,month,fy,unit,calc,notes)
                VALUES('$resp','$plant', '$level', '$type', '$obj', '$objKpi', '$strat', '$stratKpi','$months[$x]', $fy, '$unit', '$calc', '$notes')");
        if ($conn->query($sql) === false) {
            echo "Error: " . $sql . "<br>" . $conn->error;
        } 
    #}
    
    header("Location: ../index.html");
    
?>