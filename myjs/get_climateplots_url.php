<?php
foreach($_POST as $k=>$v){
        ${$k} = $v;  // variable variable (adjective noun)
}
$error = "";

$monthh="Jan";
$filename = urlencode("{$varr}_{$modell}_hindcastAnom_{$monthh}_{$leadtimee}MonthLead.png");

$data = array();
$data['status'] = ($error) ? 'failure' : 'success';
$data['source'] = "./images/climate/{$filename}";
//$data['filename'] = "/path/to/data.txt";
$data['error']=$error;

header("content-type = application/json");
echo json_encode($data);
exit();
?>
