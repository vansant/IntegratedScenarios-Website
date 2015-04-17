<?php
foreach($_POST as $k=>$v){
        ${$k} = $v;  // variable variable (adjective noun)
}
$error = "";

$monthh="Jan";
$filename = urlencode("{$varr}_{$modell}_hindcastAnom_{$monthh}_{$leadtimee}MonthLead.png");

$data = array();
$data['status'] = ($error) ? 'failure' : 'success';
$data['source1'] = "./images/climate/{$filename}";
$data['source2'] = "./images/climate/{$filename}";
$data['source3'] = "./images/climate/{$filename}";
$data['source4'] = "./images/climate/{$filename}";
$data['source5'] = "./images/climate/{$filename}";
$data['source6'] = "./images/climate/{$filename}";
$data['source7'] = "./images/climate/{$filename}";
$data['source8'] = "./images/climate/{$filename}";
//$data['filename'] = "/path/to/data.txt";
$data['error']=$error;

header("content-type = application/json");
echo json_encode($data);
exit();
?>
