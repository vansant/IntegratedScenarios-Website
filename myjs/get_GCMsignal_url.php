<?php
foreach($_POST as $k=>$v){
        ${$k} = $v;  // variable variable (adjective noun)
}
$error = "";

if($optionn=="0"){
$filename = urlencode("{$seass}_{$periodd}_{$varr1}.png");
}
elseif($optionn=="MM"){
$filename = urlencode("{$seass}_{$periodd}_{$varr1}{$optionn}.png");
}

$data = array();
$data['status'] = ($error) ? 'failure' : 'success';
$data['source'] = "http://maca.northwestknowledge.net/images/Maps/RAW/RAW_{$filename}";

//$data['filename'] = "/path/to/data.txt";
$data['error']=$error;

header("content-type = application/json");
echo json_encode($data);
exit();
?>
