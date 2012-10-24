<?php

header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=\"my-data.csv\"");
$data="col1, col2, col3, \n";
$data .= "col1_data, col2_data, col3_data, \n";
$data .= "col1_data, col2_data, col3_data, \n";
echo $data;
?>