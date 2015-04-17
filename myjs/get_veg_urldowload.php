<?php

	header("Content-Type: application/force-download");
	header("Content-Type: text/plain");

foreach($_POST["productt"] as $productt){

	if($productt=="3PG"){
	$decadalPath = "http://thredds1.nkn.uidaho.edu:8080/thredds/fileServer/NWCSC_INTEGRATED_SCENARIOS_ALL_VEGETATION/";
	$regionn="WUSA";
	}

	foreach($_POST["formatt"] as $formatt){
		if($formatt=="wget"){
			if($productt=="3PG") header("Content-Disposition: attachment; filename=3pg_wget.sh");
			echo "#!/bin/bash \n";	
			foreach($_POST["model"] as $model){
				foreach($_POST["varr"] as $varr){
					   foreach($_POST["freqq"] as $freqq){
						$timee="1950_2099";
						if($productt=="3PG") $urlPath="{$decadalPath}/{$model}";
					       echo "wget -nc -c -nd {$urlPath}/{$productt}_{$varr}_{$model}_{$timee}_{$regionn}_{$freqq}.nc \n";
						echo "";
					   }
					}
				}
			}
		}
 		elseif($formatt=="curl"){
			if($productt=="3PG") header("Content-Disposition: attachment; filename=3pg_wget.sh");
                        echo "#!/bin/bash \n";
                        foreach($_POST["model"] as $model){
                                foreach($_POST["varr"] as $varr){
                                           foreach($_POST["freqq"] as $freqq){
                                                $timee="1950_2099";
                                                if($productt=="3PG") $urlPath="{$decadalPath}/{$model}";
                                               echo "curl -O {$urlPath}/{$productt}_{$varr}_{$model}_{$timee}_{$regionn}_{$freqq}.nc \n";
                                                echo "";
                                           }
                                        }
                                }
                        }
                }                              
		elseif($formatt=="url"){
 			if($productt=="3PG") header("Content-Disposition: attachment; filename=3pg_wget.sh");
                        foreach($_POST["model"] as $model){
                                foreach($_POST["varr"] as $varr){
                                           foreach($_POST["freqq"] as $freqq){
                                                $timee="1950_2099";
                                                if($productt=="3PG") $urlPath="{$decadalPath}/{$model}";
					       echo "{$urlPath}/{$productt}_{$varr}_{$model}_{$timee}_{$regionn}_{$freqq}.nc \r\n";
                                                echo "";
                                           }
                                        }
                                }
                        }
		}
	}
}
?>
