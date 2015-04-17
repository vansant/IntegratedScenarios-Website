<?php

echo "<UL><LI>hello</LI></UL>\n";


$NKNTHREDDS = "http://thredds.northwestknowledge.net:8080/thredds";
$REACCHTHREDDS = "http://inside-dev1.nkn.uidaho.edu:8080/thredds";
$REACCHFILES = "http://www.reacchpna.org/reacchspace/obj1/netcdf";

$NELat=$_POST["NELat"];
$NELong=$_POST["NELong"];
$SWLat=$_POST["SWLat"];
$SWLong=$_POST["SWLong"];
$pointLong=$_POST["pointLong"];
$pointLat=$_POST["pointLat"];

$domainn=$_POST["domainn"];
if($domainn=='rectangle' || $domainn=='point'){
	$Files="THREDDS";
}else{
	$Files="FILES";
}
$extensionn=$_POST["extensionn"];
$formatt=$_POST["formatt"];

foreach($_POST["productt"] as $productt){

	if($productt=="macav2livneh"){
		if($Files=='THREDDS'){
			$mydailyPath = "{$NKNTHREDDS}/ncss/grid/NWCSC_INTEGRATED_SCENARIOS_ALL_CLIMATE/macav2livneh";
			$mymonthlyPath = "{$NKNTHREDDS}/ncss/grid/NWCSC_INTEGRATED_SCENARIOS_ALL_CLIMATE/macav2livneh";
		}else{
			$mydailyPath = "{$NKNTHREDDS}/fileServer/NWCSC_INTEGRATED_SCENARIOS_ALL_CLIMATE/macav2livneh";
			$mymonthlyPath = "{$NKNTHREDDS}/fileServer/NWCSC_INTEGRATED_SCENARIOS_ALL_CLIMATE/macav2livneh";
		}
		$myAggPath="{$NKNTHREDDS}/ncss/grid"; 
		$regionn="CONUS";
		$opendapdailyPath = "{$NKNTHREDDS}/dodsC/NWCSC_INTEGRATED_SCENARIOS_ALL_CLIMATE/macav2livneh";
		$opendapmonthlyPath = "{$NKNTHREDDS}/dodsC/NWCSC_INTEGRATED_SCENARIOS_ALL_CLIMATE/macav2livneh";
	}
	if($productt=="macav1metdata"){
		if($Files=='THREDDS'){
			$mydailyPath = "{$REACCHTHREDDS}/ncss/grid/MACAV1";
			$mymonthlyPath="{$NKNTHREDDS}/ncss/grid/NWCSC_INTEGRATED_SCENARIOS_ALL_CLIMATE/macav1metdata";
		}else{
			$mydailyPath = "{$REACCHFILES}/MACAV1";
			$mymonthlyPath = "{$NKNTHREDDS}/fileServer/NWCSC_INTEGRATED_SCENARIOS_ALL_CLIMATE/macav1metdata";
		}
		$myAggPath="{$NKNTHREDDS}/ncss/grid"; 
		//$monthlyPath = "http://nimbus.cos.uidaho.edu/DATA/MACAV1/DOWNSCALED/macav1metdata";
		$regionn="WUSA";
		$opendapdailyPath = "{$REACCHTHREDDS}/dodsC/MACAV1";
		$opendapmonthlyPath = "{$NKNTHREDDS}/dodsC/NWCSC_INTEGRATED_SCENARIOS_ALL_CLIMATE/macav1metdata";
	}
 	if($productt=="vic"){
                if($Files=='THREDDS'){
                        $mydailyPath = "{$NKNTHREDDS}/ncss/grid/NWCSC_INTEGRATED_SCENARIOS_ALL_HYDROLOGY_VIC";
                        $mymonthlyPath = "{$NKNTHREDDS}/ncss/grid/NWCSC_INTEGRATED_SCENARIOS_ALL_HYDROLOGY_VIC";
                }else{
                        $mydailyPath = "{$NKNTHREDDS}/fileServer/NWCSC_INTEGRATED_SCENARIOS_ALL_HYDROLOGY_VIC";
                        $mymonthlyPath = "{$NKNTHREDDS}/fileServer/NWCSC_INTEGRATED_SCENARIOS_ALL_HYDROGOLOGY_VIC";
                }
                $myAggPath="{$NKNTHREDDS}/ncss/grid";
                $regionn="WUSA";
                $opendapdailyPath = "{$NKNTHREDDS}/dodsC/NWCSC_INTEGRATED_SCENARIOS_ALL_HYDROLOGY_VIC";
                $opendapmonthlyPath = "{$NKNTHREDDS}/dodsC/NWCSC_INTEGRATED_SCENARIOS_ALL_HYDROLOGY_VIC";
        }
       if($productt=="ulm"){
                if($Files=='THREDDS'){
                        $mydailyPath = "{$NKNTHREDDS}/ncss/grid/NWCSC_INTEGRATED_SCENARIOS_ALL_HYDROLOGY_ULM";
                        $mymonthlyPath = "{$NKNTHREDDS}/ncss/grid/NWCSC_INTEGRATED_SCENARIOS_ALL_HYDROLOGY_ULM";
                }else{
                        $mydailyPath = "{$NKNTHREDDS}/fileServer/NWCSC_INTEGRATED_SCENARIOS_ALL_HYDROLOGY_ULM";
                        $mymonthlyPath = "{$NKNTHREDDS}/fileServer/NWCSC_INTEGRATED_SCENARIOS_ALL_HYDROGOLOGY_ULM";
                }
                $myAggPath="{$NKNTHREDDS}/ncss/grid";
                $regionn="WUSA";
                $opendapdailyPath = "{$NKNTHREDDS}/dodsC/NWCSC_INTEGRATED_SCENARIOS_ALL_HYDROLOGY_ULM";
                $opendapmonthlyPath = "{$NKNTHREDDS}/dodsC/NWCSC_INTEGRATED_SCENARIOS_ALL_HYDROLOGY_ULM";
        }

       if($productt=="3-PG"){
                if($Files=='THREDDS'){
                        $mydailyPath = "{$NKNTHREDDS}/ncss/grid/NWCSC_INTEGRATED_SCENARIOS_ALL_VEGETATION_3PG";
                        $mymonthlyPath = "{$NKNTHREDDS}/ncss/grid/NWCSC_INTEGRATED_SCENARIOS_ALL_VEGETATION_3PG";
                }else{
                        $mydailyPath = "{$NKNTHREDDS}/fileServer/NWCSC_INTEGRATED_SCENARIOS_ALL_VEGETATION_3PG";
                        $mymonthlyPath = "{$NKNTHREDDS}/fileServer/NWCSC_INTEGRATED_SCENARIOS_ALL_VEGETATION_3PG";
                }
                $myAggPath="{$NKNTHREDDS}/ncss/grid";
                $regionn="WUSA";
                $opendapdailyPath = "{$NKNTHREDDS}/dodsC/NWCSC_INTEGRATED_SCENARIOS_ALL_VEGETATAION_3PG";
                $opendapmonthlyPath = "{$NKNTHREDDS}/dodsC/NWCSC_INTEGRATED_SCENARIOS_ALL_VEGETATION_3PG";
        }
       if($productt=="mc2_WithFireSuppression" || $productt=="mc2_WithoutFireSuppression"){
                if($Files=='THREDDS'){
                        $mydailyPath = "{$NKNTHREDDS}/ncss/grid/NWCSC_INTEGRATED_SCENARIOS_ALL_VEGETATION_MC2";
                        $mymonthlyPath = "{$NKNTHREDDS}/ncss/grid/NWCSC_INTEGRATED_SCENARIOS_ALL_VEGETATION_MC2";
                }else{
                        $mydailyPath = "{$NKNTHREDDS}/fileServer/NWCSC_INTEGRATED_SCENARIOS_ALL_VEGETATION_MC2";
                        $mymonthlyPath = "{$NKNTHREDDS}/fileServer/NWCSC_INTEGRATED_SCENARIOS_ALL_VEGETATION_MC2";
                }
                $myAggPath="{$NKNTHREDDS}/ncss/grid";
                $regionn="WUSA";
                $opendapdailyPath = "{$NKNTHREDDS}/dodsC/NWCSC_INTEGRATED_SCENARIOS_ALL_VEGETATAION_MC2";
                $opendapmonthlyPath = "{$NKNTHREDDS}/dodsC/NWCSC_INTEGRATED_SCENARIOS_ALL_VEGETATION_MC2";
        }

	if($formatt=="wget"){
		if($productt=="macav1metdata") header("Content-Disposition: attachment; filename=macav1metdata_wget.sh");
		if($productt=="macav2livneh") header("Content-Disposition: attachment; filename=macav2livneh_wget.sh");
		if($productt=="vic") header("Content-Disposition: attachment; filename=vic_wget.sh");
		if($productt=="ulm") header("Content-Disposition: attachment; filename=ulm_wget.sh");
		if($productt=="3-PG") header("Content-Disposition: attachment; filename=3pg_wget.sh");
		if($productt=="mc2_WithFireSuppression") header("Content-Disposition: attachment; filename=mc2_withFireSuppression_wget.sh");
		if($productt=="mc2_WithoutFireSuppression") header("Content-Disposition: attachment; filename=mc2_withoutFireSuppression_wget.sh");
		echo "#!/bin/bash \n";	
		$dailyPath = $mydailyPath;
		$monthlyPath = $mymonthlyPath;
	}
	elseif($formatt=="curl"){
		 if($productt=="macav1metdata") header("Content-Disposition: attachment; filename=macav1metdata_curl.sh");
		if($productt=="macav2livneh") header("Content-Disposition: attachment; filename=macav2livneh_curl.sh");
		if($productt=="vic") header("Content-Disposition: attachment; filename=vic_curl.sh");
		if($productt=="ulm") header("Content-Disposition: attachment; filename=ulm_curl.sh");
		if($productt=="3-PG") header("Content-Disposition: attachment; filename=3pg_curl.sh");
		if($productt=="mc2_WithFireSuppression") header("Content-Disposition: attachment; filename=mc2_withFireSuppression_curl.sh");
		if($productt=="mc2_WithoutFireSuppression") header("Content-Disposition: attachment; filename=mc2_withoutFireSuppression_curl.sh");
		$dailyPath = $mydailyPath;
		$monthlyPath = $mymonthlyPath;
	}
	elseif($formatt=="url"){
		if($productt=="macav1metdata") header("Content-Disposition: attachment; filename=macav1metadata_urls.txt");
		if($productt=="macav2livneh") header("Content-Disposition: attachment; filename=macav2livneh_urls.txt");
		if($productt=="vic") header("Content-Disposition: attachment; filename=vic_urls.txt");
		if($productt=="ulm") header("Content-Disposition: attachment; filename=ulm_urls.txt");
		if($productt=="3-PG") header("Content-Disposition: attachment; filename=3-PG_urls.txt");
		if($productt=="mc2_WithFireSuppression") header("Content-Disposition: attachment; filename=mc2_withFireSuppressionurls.txt");
		if($productt=="mc2_WithoutFireSuppression") header("Content-Disposition: attachment; filename=mc2_withoutFireSuppressionurls.txt");
		$dailyPath = $mydailyPath;
		$monthlyPath = $mymonthlyPath;
	}	
	elseif($formatt=="opendap"){
		if($productt=="macav1metdata") header("Content-Disposition: attachment; filename=macav1metadata_opendap.txt");
		if($productt=="macav2livneh") header("Content-Disposition: attachment; filename=macav2livneh_opendap.txt");
		if($productt=="vic") header("Content-Disposition: attachment; filename=vic.txt");
		if($productt=="ulm") header("Content-Disposition: attachment; filename=ulm_opendap.txt");
		if($productt=="3-PG") header("Content-Disposition: attachment; filename=3pg_opendap.txt");
		if($productt=="mc2_WithFireSuppression") header("Content-Disposition: attachment; filename=mc2_withFireSuppression_opendap.txt");
		if($productt=="mc2_WithoutFireSuppression") header("Content-Disposition: attachment; filename=mc2_withoutFireSuppression_opendap.txt");
		$dailyPath = $opendapdailyPath;
		$monthlyPath = $opendapmonthlyPath;
		echo "The following are your OPeNDAP URL's: \n";	
	}	
	foreach($_POST["model"] as $model){
		$had_gem=false;
		$ccsm4=false;

		if(in_array($model,array("HadGEM2-ES","HadGEM2-CC"))) $had_gem = true;
		if(in_array($model,array("HadGEM2-ES365","HadGEM2-CC365"))) $had_gem = true;
		if(in_array($model,array("CCSM4"))) $ccsm4 = true;

		foreach($_POST["varr"] as $varr){
			if($varr=="tasmax" ||$varr=="tasmin" ){
				 $varr_longname='air_temperature';
			}else if($varr=="rhsmin" || $varr=="rhsmax" ){
				 $varr_longname='relative_humidity';
			}else if($varr=="pr" && $productt=='macav1metdata'){
				 $varr_longname='precipitation_flux';
			}else if($varr=="pr" && $productt=='macav2livneh'){
				 $varr_longname='precipitation';
			}else if($varr=="pr" && $productt=='macav2metdata') {
				$varr_longname='precipitation';
			}else if($varr=="rsds" ) {
				$varr_longname='surface_downwelling_shortwave_flux_in_air';
			}else if($varr=="uas" ){
				 $varr_longname='eastward_wind';
			}else if($varr=="vas" ){
				 $varr_longname='northward_wind';
			}else if($varr=="huss" ){
				 $varr_longname='specific_humidity';
			}else if($varr=="was" ){
				 $varr_longname='wind_speed';
			}else{
				 $varr_longname=$varr;
			}	

			foreach($_POST["timee"] as $timee){
			   $aggvar=false;
			   if(($timee=="r1i1p1_historical_1950_2005" || $timee=="r1i1p1_rcp45_2006_2099" ||$timee=="r1i1p1_rcp85_2006_2099")&& $productt!='3-PG'){
			   	$aggvar=true;
			   }
			   foreach($_POST["freqq"] as $freqq){
				if($had_gem && $timee=="r1i1p1_rcp45_2096_2100"&& $productt=="macav1metdata") $timee="r1i1p1_rcp45_2096_2099";
				if($had_gem && $timee=="r1i1p1_rcp85_2096_2100"&& $productt=="macav1metdata") $timee="r1i1p1_rcp85_2096_2099";

				if($ccsm4) $timee=preg_replace('/r1i1p1/','r6i1p1',$timee);

				$urlPath="{$dailyPath}/{$model}"; //for vic/3pg too
				//if($freqq=="_daily") $urlPath="{$dailyPath}/{$model}";
				//if($freqq=="_daily"&& $productt=="macav1metdata") $freqq="";
				if($freqq=="_monthly") $urlPath="{$monthlyPath}/{$model}";

				$fileName="{$productt}_{$varr}_{$model}_{$timee}_{$regionn}{$freqq}.nc";

				if($aggvar &&($productt=="macav2livneh")){
					$urlPath = "{myAggPath}";
					$fileName="{$productt}_{$varr}_{$model}_{$timee}_{$regionn}{$freqq}_aggregated.nc";
				}else if($aggvar &&($productt=="macav1metdata")){
					$urlPath = "{myAggPath}";
					if($freqq=="_daily"){
						$fileName="{$myAggPath}/agg_{$productt}_{$varr}_{$model}_{$timee}_{$regionn}{$freqq}.nc";
					}else if ($freqq=="_monthly"){
						$fileName="{$myAggPath}/{$productt}_{$varr}_{$model}_{$timee}_{$regionn}{$freqq}_aggregated.nc";
					}
				 	$fileName=preg_replace('/2099/','2100',$fileName);  //change this in aggregated files
				}
				if($domainn =="rectangle"){
                                        $querystring = "?&var={$varr_longname}&north={$NELat}&south={$SWLat}&west={$SWLong}&east={$NELong}";
                                }
                                else if($domainn =="point"){
                                        $querystring = "?&var={$varr_longname}&latitude={$pointLat}&longitude={$pointLong}";
                                }
                                if($domainn=="rectangle"){
                                        $querystring = "{$querystring}&accept={$extensionn}&point=false";
                                }
                                else if($domainn=="point") {
                                        $querystring = "{$querystring}&accept={$extensionn}&point=true";
                                }else{
                                        $querystring="";
                                }
                                if($formatt=="wget"){
                                        echo "wget -nc -c -nd \"{$urlPath}/{$fileName}{$querystring}\" -O {$fileName}  \n";
                                        echo "";
                                }
                                elseif($formatt=="curl"){
                                       echo "curl -O \"{$urlPath}/{$fileName}{$querystring}\" {$fileName}  \n";
                                        echo "";
                                }
                                elseif($formatt=="url"){
                                        echo "{$urlPath}/{$fileName}{$querystring} \r\n";
                                        echo "";
                                }
                                elseif($formatt=="opendap"){
                                        echo "myFile='{$urlPath}/{$fileName}{$querystring}' \r\n";
                                        echo "";
                                }

			   }
			}
		}
	}
//}
}


?>
