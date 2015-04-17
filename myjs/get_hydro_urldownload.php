<?php

	header("Content-Type: application/force-download");
	header("Content-Type: text/plain");

foreach($_POST["productt"] as $productt){

	if($productt=="macav2livneh"){
	$dailyPath = "http://thredds1.nkn.uidaho.edu:8080/thredds/fileServer/NWCSC_INTEGRATED_SCENARIOS_ALL_CLIMATE/macav2livneh";
	$monthlyPath = "http://thredds1.nkn.uidaho.edu:8080/thredds/fileServer/NWCSC_INTEGRATED_SCENARIOS_ALL_CLIMATE/macav2livneh";
	#$monthlyPath="http://nimbus.cos.uidaho.edu/DATA/CMIP5/DOWNSCALED/macav2livneh";
	$regionn="CONUS";
	}
	if($productt=="macav2metdata"){
	$dailyPath = "http://nimbus.cos.uidaho.edu/DATA/CMIP5/DOWNSCALED/macav2metdata";
	$monthlyPath=" ";
	$regionn="CONUS";
	}
	if($productt=="maca"){
	$dailyPath = "http://www.reacchpna.org/reacchspace/obj1/netcdf/CMIP5";
	$monthlyPath = "http://nimbus.cos.uidaho.edu/DATA/CMIP5/DOWNSCALED/macav1metdata";
	$regionn="WUSA";
	}

	foreach($_POST["formatt"] as $formatt){
		if($formatt=="wget"){
			if($productt=="maca") header("Content-Disposition: attachment; filename=maca_wget.sh");
			if($productt=="macav2livneh") header("Content-Disposition: attachment; filename=macav2livneh_wget.sh");
			if($productt=="macav2metdata") header("Content-Disposition: attachment; filename=macav2metdata_wget.sh");
			echo "#!/bin/bash \n";	
			$had_gem=false;
			$ccsm4=false;
			foreach($_POST["model"] as $model){
				if(in_array($model,array("HadGEM2-ES","HadGEM2-CC"))) $had_gem = true;
				if(in_array($model,array("HadGEM2-ES365","HadGEM2-CC365"))) $had_gem = true;
				if(in_array($model,array("CCSM4"))) $ccsm4 = true;

				foreach($_POST["varr"] as $varr){
					foreach($_POST["timee"] as $timee){
					   foreach($_POST["freqq"] as $freqq){
						if($had_gem && $timee=="rcp45_2096_2100"&& $productt=="maca") $timee="rcp45_2096_2099";
						if($had_gem && $timee=="rcp85_2096_2100"&& $productt=="maca") $timee="rcp85_2096_2099";
						//if($had_gem && $timee=="rcp45_2086_2100"&& $productt=="macav2livneh") $timee="rcp45_2086_2099";
						//if($had_gem && $timee=="rcp85_2086_2100"&& $productt=="macav2livneh") $timee="rcp85_2086_2099";
						//if($freqq=="_monthly" &&$timee=="rcp85_2086_2100"&& $productt=="macav2livneh") $timee="rcp85_2086_2099";
						//if($freqq=="_monthly" &&$timee=="rcp45_2086_2100"&& $productt=="macav2livneh") $timee="rcp45_2086_2099";

						if($ccsm4 && $productt=="macav2livneh") $timee=preg_replace('/r1i1p1/','r6i1p1',$timee);

						if($freqq==""&& $productt=="maca") $urlPath="{$dailyPath}/{$model}";
						if($freqq=="_daily"&& $productt=="macav2livneh") $urlPath="{$dailyPath}/{$model}";
						if($freqq=="_monthly") $urlPath=$monthlyPath;
						if($freqq=="_monthly"&& $productt=="macav2livneh") $urlPath="{$monthlyPath}/{$model}";
						if($freqq=="_daily"&& $productt=="macav2metdata") $urlPath="{$dailyPath}";
					       echo "wget -nc -c -nd {$urlPath}/{$productt}_{$varr}_{$model}_{$timee}_{$regionn}{$freqq}.nc \n";
						echo "";
					   }
					}
				}
			$had_gem=false;
			}
		}
 		elseif($formatt=="curl"){
			if($productt=="maca") header("Content-Disposition: attachment; filename=maca_curl.sh");
			if($productt=="macav2livneh") header("Content-Disposition: attachment; filename=macav2livneh_curl.sh");
			if($productt=="macav2metdata") header("Content-Disposition: attachment; filename=macav2metdata_curl.sh");
                        $had_gem=false;
                        foreach($_POST["model"] as $model){
                                if(in_array($model,array("HadGEM2-ES","HadGEM2-CC"))) $had_gem = true;
                                if(in_array($model,array("HadGEM2-ES365","HadGEM2-CC365"))) $had_gem = true;
                                foreach($_POST["varr"] as $varr){
                                        foreach($_POST["timee"] as $timee){
                                           foreach($_POST["freqq"] as $freqq){
                                                if($had_gem && $timee=="rcp45_2096_2100"&& $productt=="maca") $timee="rcp45_2096_2099";
                                                if($had_gem && $timee=="rcp85_2096_2100"&& $productt=="maca") $timee="rcp85_2096_2099";
                                                //if($had_gem && $timee=="rcp45_2086_2100"&& $productt=="macav2livneh") $timee="rcp45_2086_2099";
                                                //if($had_gem && $timee=="rcp85_2086_2100"&& $productt=="macav2livneh") $timee="rcp85_2086_2099";
						//if($freqq=="_monthly" &&$timee=="rcp85_2086_2100"&& $productt=="macav2livneh") $timee="rcp85_2086_2099";
						//if($freqq=="_monthly" &&$timee=="rcp45_2086_2100"&& $productt=="macav2livneh") $timee="rcp45_2086_2099";
						if($freqq==""&& $productt=="maca") $urlPath="{$dailyPath}/{$model}";
						if($freqq=="_daily"&& $productt=="macav2livneh") $urlPath="{$dailyPath}/{$model}";
						if($freqq=="_daily"&& $productt=="macav2metdata") $urlPath="{$dailyPath}";
						if($freqq=="_monthly") $urlPath=$monthlyPath;
						if($freqq=="_monthly"&& $productt=="macav2livneh") $urlPath="{$monthlyPath}/{$model}";
                                               echo "curl -O {$urlPath}/{$productt}_{$varr}_{$model}_{$timee}_{$regionn}{$freqq}.nc\n";
                                                echo "";
                                           }
                                        }
                                }
                        $had_gem=false;
                        }
                }                              
		elseif($formatt=="url"){
			if($productt=="maca") header("Content-Disposition: attachment; filename=maca_urls.txt");
			if($productt=="macav2livneh") header("Content-Disposition: attachment; filename=macav2livneh_urls.txt");
			if($productt=="macav2metdata") header("Content-Disposition: attachment; filename=macav2metdata_urls.txt");
			echo "To download the files, please paste the following URLs into your favorite web browser. \r\n";	
			$had_gem=false;
			foreach($_POST["model"] as $model){
				if(in_array($model,array("HadGEM2-ES","HadGEM2-CC"))) $had_gem = true;
				if(in_array($model,array("HadGEM2-ES365","HadGEM2-CC365"))) $had_gem = true;
				foreach($_POST["varr"] as $varr){
					foreach($_POST["timee"] as $timee){
					   foreach($_POST["freqq"] as $freqq){
						if($had_gem && $timee=="rcp45_2096_2100"&& $productt=="maca") $timee="rcp45_2096_2099";
						if($had_gem && $timee=="rcp85_2096_2100"&& $productt=="maca") $timee="rcp85_2096_2099";
						//if($had_gem && $timee=="rcp45_2086_2100"&& $productt=="macav2livneh") $timee="rcp45_2086_2099";
						//if($had_gem && $timee=="rcp85_2086_2100"&& $productt=="macav2livneh") $timee="rcp85_2086_2099";
						//if($freqq=="_monthly" &&$timee=="rcp85_2086_2100"&& $productt=="macav2livneh") $timee="rcp85_2086_2099";
						//if($freqq=="_monthly" &&$timee=="rcp45_2086_2100"&& $productt=="macav2livneh") $timee="rcp45_2086_2099";
						if($freqq==""&& $productt=="maca") $urlPath="{$dailyPath}/{$model}";
						if($freqq=="_daily"&& $productt=="macav2livneh") $urlPath="{$dailyPath}/{$model}";
						if($freqq=="_daily"&& $productt=="macav2metdata") $urlPath="{$dailyPath}";
						if($freqq=="_monthly") $urlPath=$monthlyPath;
						if($freqq=="_monthly"&& $productt=="macav2livneh") $urlPath="{$monthlyPath}/{$model}";
					       echo "{$urlPath}/{$productt}_{$varr}_{$model}_{$timee}_{$regionn}{$freqq}.nc \r\n";
						echo "";
					   }
					}
				}
			$had_gem=false;
			}

		}
	}
}
?>
