<?php
foreach($_POST as $k=>$v){
        ${$k} = $v;  // variable variable (adjective noun)
}
$error = "";

if($optionnmacav2=="0"){
$filename = urlencode("{$seassmacav2}_{$perioddmacav2}_{$varrmacav2}.png");
}
elseif($optionnmacav2=="MM"){
$filename = urlencode("{$seassmacav2}_{$perioddmacav2}_{$varrmacav2}{$optionnmacav2}.png");
}

$data = array();
$data['status'] = ($error) ? 'failure' : 'success';
$data['source'] = "http://climate.nkn.uidaho.edu/MACA/images/Maps/{$producttmacav2}/{$filename}";

//$data['filename'] = "/path/to/data.txt";
$data['error']=$error;

header("content-type = application/json");
echo json_encode($data);
exit();
?>
