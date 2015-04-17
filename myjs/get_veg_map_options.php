<?php
foreach($_POST as $k=>$v){
        ${$k} = $v;  // variable variable (adjective noun)
}
$error = "";
$data = array();

$data['sourcehist'] = "";
$data['sourcefut'] = "";
$data['sourceanom'] = "";

$data['source0'] = "";
$data['source1'] = "";
$data['source2'] = "";
$data['source3'] = "";
$data['source4'] = "";
$data['source5'] = "";
$data['source6'] = "";
$data['source7'] = "";
$data['source8'] = "";
$data['source9'] = "";
$data['source10'] = "";
$data['source11'] = "";
$data['source12'] = "";
$data['source13'] = "";
$data['source14'] = "";
$data['source15'] = "";
$data['source16'] = "";
$data['source17'] = "";
$data['source18'] = "";
$data['source19'] = "";
$data['source20'] = "";
$data['source21'] = "";

if($vegproductt=="3pg"){
	if($options3pg=="allmodels"){
		$filename = "MIROC5{$varr3pg},{$timee3pg}-1990s.jpg";
		$data['source1'] = "./images/vegetation/{$vegproductt}/{$filename}";

		$filename = "GFDL-ESM2M{$varr3pg},{$timee3pg}-1990s.jpg";
		$data['source2'] ="./images/vegetation/{$vegproductt}/{$filename}";

		$filename ="HadGEM2-ES{$varr3pg},{$timee3pg}-1990s.jpg";
		$data['source3'] = "./images/vegetation/{$vegproductt}/{$filename}";
	}
	elseif($options3pg=="onemodel"){
		$filename = "{$modell3pg}{$varr3pg},1990s.jpg";
		$data['sourcehist'] = "./images/vegetation/{$vegproductt}/{$filename}";

		$filename = "{$modell3pg}{$varr3pg},{$timee3pg}.jpg";
		$data['sourcefut'] ="./images/vegetation/{$vegproductt}/{$filename}";

		$filename ="{$modell3pg}{$varr3pg},{$timee3pg}-1990s.jpg";
		$data['sourceanom'] = "./images/vegetation/{$vegproductt}/{$filename}";
	}
}
else{
	if($optionsmc2=="onemodel"){
		$filename = "Preliminary_Hist_{$exppmc2}_{$varrmc2}Over1971-2000.png";
		$data['sourcehist'] = "./images/vegetation/{$vegproductt}/{$filename}";
		$filename = "Preliminary_{$scennmc2}_{$modellmc2}_{$exppmc2}_{$varrmc2}Over{$timeemc2}.png";
		$data['sourcefut'] = "./images/vegetation/{$vegproductt}/{$filename}";
		if($varrmc2=="ModalVeg"){
			//$data['sourceanom'] = "./images/vegetation/mc2/Preliminary_ModalVegKey.png";
			$data['sourceanom'] = "./images/vegetation/mc2/veglegend.png";
		}
	}
	elseif($optionsmc2=="allmodels"){
		$filename = "Preliminary_Hist_{$exppmc2}_{$varrmc2}Over1971-2000.png";
		$data['source0'] = "./images/vegetation/{$vegproductt}/{$filename}";
		$data['source1'] = "./images/vegetation/{$vegproductt}/Preliminary_{$scennmc2}_bcc-csm1-1_{$exppmc2}_{$varrmc2}Over{$timeemc2}.png";
		$data['source2'] = "./images/vegetation/{$vegproductt}/Preliminary_{$scennmc2}_bcc-csm1-1-m_{$exppmc2}_{$varrmc2}Over{$timeemc2}.png";
		$data['source3'] = "./images/vegetation/{$vegproductt}/Preliminary_{$scennmc2}_BNU-ESM_{$exppmc2}_{$varrmc2}Over{$timeemc2}.png";
		$data['source4'] = "./images/vegetation/{$vegproductt}/Preliminary_{$scennmc2}_CanESM2_{$exppmc2}_{$varrmc2}Over{$timeemc2}.png";
		$data['source5'] = "./images/vegetation/{$vegproductt}/Preliminary_{$scennmc2}_CCSM4_{$exppmc2}_{$varrmc2}Over{$timeemc2}.png";
		$data['source6'] = "./images/vegetation/{$vegproductt}/Preliminary_{$scennmc2}_CNRM-CM5_{$exppmc2}_{$varrmc2}Over{$timeemc2}.png";
		$data['source7'] = "./images/vegetation/{$vegproductt}/Preliminary_{$scennmc2}_CSIRO-Mk3-6-0_{$exppmc2}_{$varrmc2}Over{$timeemc2}.png";
		$data['source8'] = "./images/vegetation/{$vegproductt}/Preliminary_{$scennmc2}_GFDL-ESM2M_{$exppmc2}_{$varrmc2}Over{$timeemc2}.png";
		$data['source9'] = "./images/vegetation/{$vegproductt}/Preliminary_{$scennmc2}_GFDL-ESM2G_{$exppmc2}_{$varrmc2}Over{$timeemc2}.png";
		$data['source10'] = "./images/vegetation/{$vegproductt}/Preliminary_{$scennmc2}_HadGEM2-CC365_{$exppmc2}_{$varrmc2}Over{$timeemc2}.png";
		$data['source11'] = "./images/vegetation/{$vegproductt}/Preliminary_{$scennmc2}_HadGEM2-ES365_{$exppmc2}_{$varrmc2}Over{$timeemc2}.png";
		$data['source12'] = "./images/vegetation/{$vegproductt}/Preliminary_{$scennmc2}_inmcm4_{$exppmc2}_{$varrmc2}Over{$timeemc2}.png";
		$data['source13'] = "./images/vegetation/{$vegproductt}/Preliminary_{$scennmc2}_IPSL-CM5A-LR_{$exppmc2}_{$varrmc2}Over{$timeemc2}.png";
		$data['source14'] = "./images/vegetation/{$vegproductt}/Preliminary_{$scennmc2}_IPSL-CM5A-MR_{$exppmc2}_{$varrmc2}Over{$timeemc2}.png";
		$data['source15'] = "./images/vegetation/{$vegproductt}/Preliminary_{$scennmc2}_IPSL-CM5B-LR_{$exppmc2}_{$varrmc2}Over{$timeemc2}.png";
		$data['source16'] = "./images/vegetation/{$vegproductt}/Preliminary_{$scennmc2}_MIROC5_{$exppmc2}_{$varrmc2}Over{$timeemc2}.png";
		$data['source17'] = "./images/vegetation/{$vegproductt}/Preliminary_{$scennmc2}_MIROC-ESM_{$exppmc2}_{$varrmc2}Over{$timeemc2}.png";
		$data['source18'] = "./images/vegetation/{$vegproductt}/Preliminary_{$scennmc2}_MIROC-ESM-CHEM_{$exppmc2}_{$varrmc2}Over{$timeemc2}.png";
		$data['source19'] = "./images/vegetation/{$vegproductt}/Preliminary_{$scennmc2}_MRI-CGCM3_{$exppmc2}_{$varrmc2}Over{$timeemc2}.png";
		$data['source20'] = "./images/vegetation/{$vegproductt}/Preliminary_{$scennmc2}_NorESM1-M_{$exppmc2}_{$varrmc2}Over{$timeemc2}.png";
		if($varrmc2=="ModalVeg"){
			//$data['source21'] = "./images/vegetation/mc2/Preliminary_ModalVegKey.png";
			$data['source21'] = "./images/vegetation/mc2/veglegend.png";
		}else{
		}
	}
}



$data['error']=$error;
$data['status'] = ($error) ? 'failure' : 'success';
header("content-type = application/json");
echo json_encode($data);

exit();
?>
