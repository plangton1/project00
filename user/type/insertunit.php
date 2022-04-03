<?php
require 'conn.php';
@$mode = $_REQUEST["mode"];
if ($mode == "insert_data") {
    $unit_name = $_REQUEST["unit_name"];
        $sqlinsert = "INSERT INTO unit(unit_name) 
    VALUES ('$unit_name')";
        if (mysqli_query($connect, $sqlinsert)) {
            $alert = '<script type="text/javascript">';
            $alert .= 'alert("เพิ่มข้อมูลสำเร็จ !!");';
            $alert .= 'window.location.href = "?page=type";';
            $alert .= '</script>';
            echo $alert;
            exit();
        } else {
            echo "Error: " . $sqlinsert . "<br>" . mysqli_error($connect);
        }
        mysqli_close($connect);
    }
?>