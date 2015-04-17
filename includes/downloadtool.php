<h3>Integrated Scenarios Data Portal</h3>
<div id="dataportal">
	<form action="myjs/get_urldownload.php" target="form_target" method="post">
	<p>
        Here you can get URL links to Integrated Scenarios data. For example, you can create a text file of URLs which you can then either copy/paste into a web browser (to download files one-by-one)
         or which you can use with a Windows program (i.e. Mass Download or others) to perform a multiple download.
        For Linux/Unix/Mac users, you can create a bash script of wget(or cURL) statements which you can then execute to download all of the data files.
        <br><br>
        To get started, make at least one selection from each category to define the data files that you wish to download.
        If you make multiple selections in certain categories, multiple filenames will be added to your file. <br><br>

	<input type="submit" class="btn btn-large ptn-primary pull-right" value="Download File" name="submit" 
		onclick="return get_urldownload()" />
	</p>

<table class="table table-bordered" width="100%" height="400px">
      <tr>
	<td width="40%">
	<div class="accordion" id="accordion2">
		<table class="table table-striped table-bordered" width="100%">
		<!--------------------->
		<!--   PRODUCTS       -->
		<!--------------------->
		<div class="accordion-group">
		<tr>
		   <td>
			    <div class="accordion-heading">
			      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseProd">
				<h3>PRODUCTS</h3>
			      </a>
			    </div>
		   </td>
		</tr>
 		<tr>
                    <td>
                            <div id="collapseProd" class="accordion-body collapse in">
                              <div class="accordion-inner">
                                        <div id="productt">
                                                <input type="radio" name="productt[]" value="macav2livneh" id="macav2livneh" checked="checked"/>
                                                 <label for="macav2livneh" >Climate: MACAv2-LIVNEH<br /></label><br />

                                                <input type="radio" name="productt[]" value="macav1metdata" id="macav1metdata"/>
                                                 <label for="macav1metdata">Climate: MACAv1-METDATA<br /></label><br />
                                               <input type="radio" name="productt[]" value="vic" id="vic"/>
                                                 <label for="vic">Hydrology: VIC<br /></label><br />
                                               <input type="radio" name="productt[]" value="ulm" id="ulm" disabled="disabled"/>
                                                 <label for="ulm">Hydrology: ULM<br /></label><br />
                                               <input type="radio" name="productt[]" value="3-PG" id="3pg"/>
                                                 <label for="3pg">Vegetation: 3-PG<br /></label><br />
                                               <input type="radio" name="productt[]" value="mc2_WithFireSuppression" id="mc2wfs"/>
                                                 <label for="mc2wfs">Vegetation: MC2 (Fire Suppression)<br /></label><br />
                                               <input type="radio" name="productt[]" value="mc2_WithoutFireSuppression" id="mc2wofs"/>
                                                 <label for="mc2wofs">Vegetation: MC2 (No Fire Suppression)<br /></label><br />
                                        </div>
                              </div>
                            </div>
                   </td>
                </tr>
		</div>
		<!--------------------->
		<!--  TIME FREQ    -->
		<!--------------------->
	       <div class="accordion-group">
		<tr>
		   <td>
			    <div class="accordion-heading">
			      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTimeFreq">
				<h3>TIME FREQUENCY</h3>
			      </a>
			    </div>
		   </td>
		</tr>
		<tr>
		<td>
			    <div id="collapseTimeFreq" class="accordion-body collapse">
			      <div class="accordion-inner">
					<div class="freqq" id="freqq">
						<div class="daily" >
							<input type="radio" name ="freqq[]" id="daily1" value="_daily" class="daily" checked="checked"/>
							<label for="daily1">daily</label><br />
						</div>

						<div class="monthly">
							<input type="radio" name ="freqq[]" id="monthly1" value="_monthly" class="monthly" />
							<label for="monthly1">monthly</label><br />
						</div>

						<div class="mc2" style="display:none">
							<input type="radio" name ="freqq[]" id="year" value="_year" class="year" />
							<label for="year">yearly<br /></label>
						</div>
						<div class="3pg" style="display:none">
							<input type="radio" name ="freqq[]" id="decade" value="_decadal" class="decadal" />
							<label for="decade">decadal<br /></label>
						</div>
					</div>
			      </div>
			  </div>
	       </td>
	       </tr>
	       </div>
		<!--------------------->
		<!--   VARIABLES     -->
		<!--------------------->
		<div class="accordion-group">
		<tr>
		<td>
		    <div class="accordion-heading">
		      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseVar">
			<h3>VARIABLES</h3>
		      </a>
		    </div>
		</td>
		</tr>
		<tr>
		<td>
		    <div id="collapseVar" class="accordion-body collapse">
		      <div class="accordion-inner">
			<button class="selectall" data-name="varr">Select All</button>
			<button class="deselectall" data-name="varr">DeSelect All</button>
			<br />
			 <br>
			<div class="varr" style="text-align:Left">
			    <div class="climate">
				 <div class="dps" style="display:none">
					<input type="checkbox" name ="varr[]" value="was" id="dps" class="dps" class="climate"/>
					<label for="dps" id ="dps">dps 
	 			        <img src="images/questionmark.gif" title="Dew Point Temperature Near Surface"></img></label><br/>
				</div>

				<div class="huss">
					<input type="checkbox" name ="varr[]" value="huss" id="huss" class="huss" class="climate"/>
					<label for="huss">huss 
	 			        <img src="images/questionmark.gif" title="Specific Humidity"></img></label><br/>
				</div>

				<input type="checkbox" name ="varr[]" value="pr" id="pr" class="climate"/>
				<label for="pr">pr 
	 			 <img src="images/questionmark.gif" title="Precipitation Amount Near Surface"></img></label><br/>

				<div class="rhs" style="display:none">
					<input type="checkbox" name ="varr[]" value="rhsmax" id="rhsmax" class="rhs" class="climate"/>
					<label for="rhsmax" id="rhsmax">rhsmax 
	 			        <img src="images/questionmark.gif" title="Maximum Relative Humidity Near Surface(2m)"></img></label><br/>
					<input type="checkbox" name ="varr[]" value="rhsmin" id="rhsmin" class="rhs" class="climate"/>
					<label for="rhsmin" id="rhsmin">rhsmin
	 			        <img src="images/questionmark.gif" title="Minimum Relative Humidity Near Surface(2m)"></img></label><br/>
				</div>

				<input type="checkbox" name ="varr[]" value="rsds" id="rsds" class="climate"/>
				<label for="rsds">rsds
	 			 <img src="images/questionmark.gif" title="Downwelling Solar Radiation"></img></label><br/>

				<input type="checkbox" name ="varr[]" value="tasmin" id="tasmin" class="climate"/>
				<label for="tasmin" >tasmin
	 			 <img src="images/questionmark.gif" title="Minimum Air Temperature Near Surface(2m)"></img></label><br/>

				<input type="checkbox" name ="varr[]" value="tasmax" id="tasmax" class="climate"/>
				<label for="tasmax" >tasmax
	 			 <img src="images/questionmark.gif" title="Maximum Air Temperature Near Surface(2m)"></img></label><br/>
				<div class="windcomp" style="display:none">
					<input type="checkbox" name ="varr[]" value="uas" id="uas" class="windcomp" class="climate"/>
					<label for="uas" id="uas">uas 
	 			 	<img src="images/questionmark.gif" title="Northward Wind Component Near Surface(10m)"></img></label><br/>
					<input type="checkbox" name ="varr[]" value="vas" id="vas" class="windcomp" class="climate"/>
					<label for="vas" id="vas">vas 
	 			 	<img src="images/questionmark.gif" title="Eastward Wind Component Near Surface(10m)"></img></label><br/>
				</div>

				<div class="was">
					<input type="checkbox" name ="varr[]" value="was" id="was" class="was" class="climate"/>
					<label for="was" id="was">was 
	 			 	<img src="images/questionmark.gif" title="Wind Speed Near Surface(10m)"></img></label>
				</div>
			 </div>
			   <div class="hydrodaily" style="display:none">
			 	<input type="checkbox" name ="varr[]" value="Evaporation" id="Evaporation" class="hydrodaily"/>
				<label for="Evaporation" id="Evaporation">Evaporation
	 			<img src="images/questionmark.gif" title="Total Net Evaporation"></img></label><br/>

			 	<input type="checkbox" name ="varr[]" value="Ground" id="Ground" class="hydrodaily"/>
				<label for="Ground" id="Ground">Ground
	 			<img src="images/questionmark.gif" title="Net Heat Flux Into Ground"></img></label><br/>

			 	<input type="checkbox" name ="varr[]" value="Latent" id="Latent" class="hydrodaily"/>
				<label for="Latent" id="Latent">Latent
	 			<img src="images/questionmark.gif" title="Net Upward Latent Heat Flux- Vaporization"></img></label><br/>

			 	<input type="checkbox" name ="varr[]" value="LatentSub" id="LatentSub" class="hydrodaily"/>
				<label for="LatentSub" id="LatentSub">LatentSub
	 			<img src="images/questionmark.gif" title="Net Upward Latent Heat Flux- Sublimation"></img></label><br/>

			 	<input type="checkbox" name ="varr[]" value="Longwave" id="Longwave" class="hydrodaily"/>
				<label for="Longwave" id="Longwave">Longwave 
	 			<img src="images/questionmark.gif" title="Incoming Longwave Radiation Flux"></img></label><br/>

			 	<input type="checkbox" name ="varr[]" value="LongwaveNet" id="LongwaveNet" class="hydrodaily"/>
				<label for="LongwaveNet" id="LongwaveNet">LongwaveNet
	 			<img src="images/questionmark.gif" title="Net Downward Longwave Radiation Flux"></img></label><br/>

			 	<input type="checkbox" name ="varr[]" value="petH2OSurf" id="petH2OSurf" class="hydrodaily"/>
				<label for="petH2OSurf" id="petH2OSurf"> petH2OSurf 
	 			<img src="images/questionmark.gif" title="Potential Evaporation Flux - Open Water"></img></label><br/>

			 	<input type="checkbox" name ="varr[]" value="petNatVeg" id="petNatVeg" class="hydrodaily"/>
				<label for="petNatVeg" id="petNatVeg"> petNatVeg 
	 			<img src="images/questionmark.gif" title="Potential Transpiration- Vegetation Resistance"></img></label><br/>

			 	<input type="checkbox" name ="varr[]" value="petSatSoil" id="petSatSoil" class="hydrodaily"/>
				<label for="petSatSoil" id="petSatSoil"> petSatSoil
	 			<img src="images/questionmark.gif" title="Potential Evapotranspiration- Saturated Bare Soil"></img></label><br/>

			 	<input type="checkbox" name ="varr[]" value="petShort" id="petShort" class="hydrodaily"/>
				<label for="petShort" id="petShort"> petShort 
	 			<img src="images/questionmark.gif" title="Potential Evapotranspiration- Short Reference Crop(Grass)"></img></label><br/>

			 	<input type="checkbox" name ="varr[]" value="petTall" id="petTall" class="hydrodaily"/>
				<label for="petTall" id="petTall"> petTall
	 			<img src="images/questionmark.gif" title="Potential Evapotranspiration- Tall Reference Crop(Alfalfa)"></img></label><br/>

			 	<input type="checkbox" name ="varr[]" value="Precip" id="Precip" class="hydrodaily"/>
				<label for="Precip" id="Precip"> Precip 
	 			<img src="images/questionmark.gif" title="Precipitation Flux"></img></label><br/>

			 	<input type="checkbox" name ="varr[]" value="Qair" id="Qair" class="hydrodaily" />
				<label for="Qair" id="Qair"> Qair
	 			<img src="images/questionmark.gif" title="Specific Humidity"></img></label><br/>

			 	<input type="checkbox" name ="varr[]" value="Qsb" id="Qsb" class="hydrodaily"/>
				<label for="Qsb" id="Qsb"> Qsb
	 			<img src="images/questionmark.gif" title="Subsurface Runoff Flow"></img></label><br/>

			 	<input type="checkbox" name ="varr[]" value="Qs" id="Qs" class="hydrodaily"/>
				<label for="Qs" id="Qs"> Qs
	 			<img src="images/questionmark.gif" title="Surface Runoff Flow"></img></label><br/>

			 	<input type="checkbox" name ="varr[]" value="Qsm" id="Qsm" class="hydrodaily"/>
				<label for="Qsm" id="Qsm"> Qsm
	 			<img src="images/questionmark.gif" title="Snow Melt Flux"></img></label><br/>

			 	<input type="checkbox" name ="varr[]" value="Rnet" id="Rnet" class="hydrodaily"/>
				<label for="Rnet" id="Rnet"> Rnet 
	 			<img src="images/questionmark.gif" title="Net Downward Radiataion Flux"></img></label><br/>

			 	<input type="checkbox" name ="varr[]" value="Sensible" id="Sensible" class="hydrodaily"/>
				<label for="Sensible" id="Sensible"> Sensible 
	 			<img src="images/questionmark.gif" title="Surface Upward Sensible Heat Flux"></img></label><br/>

			 	<input type="checkbox" name ="varr[]" value="Shortwave" id="Shortwave" class="hydrodaily"/>
				<label for="Shortwave" id="Shortwave"> Shortwave 
	 			<img src="images/questionmark.gif" title="Incoming Downward Shortwave Radiation Flux"></img></label><br/>

			 	<input type="checkbox" name ="varr[]" value="ShortwaveNet" id="ShortwaveNet" class="hydrodaily"/>
				<label for="ShortwaveNet" id="ShortwaveNet"> ShortwaveNet 
	 			<img src="images/questionmark.gif" title="Net Downward Shortwave Radiation Flux"></img></label><br/>

			 	<input type="checkbox" name ="varr[]" value="SoilMoist" id="SoilMoist" class="hydrodaily"/>
				<label for="SoilMoist" id="SoilMoist"> SoilMoist 
	 			<img src="images/questionmark.gif" title="Soil Moisture Content per Layer"></img></label><br/>

			 	<input type="checkbox" name ="varr[]" value="SoilTemp" id="SoilTemp" class="hydrodaily"/>
				<label for="SoilTemp" id="SoilTemp"> SoilTemp 
	 			<img src="images/questionmark.gif" title="Soil Temperature per Layer"></img></label><br/>

			 	<input type="checkbox" name ="varr[]" value="SurfTemp" id="SurfTemp" class="hydrodaily"/>
				<label for="SurfTemp" id="SurfTemp"> SurfTemp
	 			<img src="images/questionmark.gif" title="Surface Temperature"></img></label><br/>

			 	<input type="checkbox" name ="varr[]" value="SWE" id="SWE" class="hydrodaily"/>
				<label for="SWE" id="SWE"> SWE
	 			<img src="images/questionmark.gif" title="Snow Water Equivalent"></img></label><br/>

			 	<input type="checkbox" name ="varr[]" value="TotalRunoff" id="TotalRunoff" class="hydrodaily" />
				<label for="TotalRunoff" id="TotalRunoff"> TotalRunoff
	 			<img src="images/questionmark.gif" title="Total Runoff - Direct and Base"></img></label><br/>

			 	<input type="checkbox" name ="varr[]" value="TotalSoilMoist" id="TotalSoilMoist" class="hydrodaily"/>
				<label for="TotalSoilMoist" id="TotalSoilMoist"> TotalSoilMoist 
	 			<img src="images/questionmark.gif" title="Total Soil Moisture Content"></img></label><br/>

			 	<input type="checkbox" name ="varr[]" value="Transp" id="Transp" class="hydrodaily"/>
				<label for="Transp" id="Transp"> Transp 
	 			<img src="images/questionmark.gif" title="Net Transpiration from Vegetation"></img></label>
			   </div>

			   <div class="hydromonthly" style="display:none">
				   <input type="checkbox" name ="varr[]" value="Evaporation-monday1" id="Evaporation-monday1" class="hydromonthly"/>
                                <label for="Evaporation-monday1" id="Evaporation-monday1">Evaporation-monday1
                                <img src="images/questionmark.gif" title="Total Net Evaporation (Day 1 of each Month)"></img></label><br/>

				   <input type="checkbox" name ="varr[]" value="Evaporation-monsum" id="Evaporation-monsum" class="hydromonthly"/>
                                <label for="Evaporation-monsum" id="Evaporation-monsum">Evaporation-monsum
                                <img src="images/questionmark.gif" title="Total Net Evaporation (Monthly Sum)"></img></label><br/>

                                <input type="checkbox" name ="varr[]" value="Ground-monmean" id="Ground-monmean" class="hydromonthly"/>
                                <label for="Ground-monmean" id="Ground-monmean">Ground-monmean
                                <img src="images/questionmark.gif" title="Net Heat Flux Into Ground (Monthly Mean)"></img></label><br/>

                                <input type="checkbox" name ="varr[]" value="Latent-monmean" id="Latent-monmean" class="hydromonthly"/>
                                <label for="Latent-monmean" id="Latent-monmean">Latent-monmean
                                <img src="images/questionmark.gif" title="Net Upward Latent Heat Flux- Vaporization (Monthly Mean)"></img></label><br/>

                                <input type="checkbox" name ="varr[]" value="LatentSub-monmean" id="LatentSub-monmean" class="hydromonthly"/>
                                <label for="LatentSub-monmean" id="LatentSub-monmean">LatentSub-monmean
                                <img src="images/questionmark.gif" title="Net Upward Latent Heat Flux- Sublimation (Monthly Mean)"></img></label><br/>

                                <input type="checkbox" name ="varr[]" value="Longwave-monmean" id="Longwave-monmean" class="hydromonthly"/>
                                <label for="Longwave-monmean" id="Longwave-monmean">Longwave-monmean
                                <img src="images/questionmark.gif" title="Incoming Longwave Radiation Flux (Monthly Mean)"></img></label><br/>

                                <input type="checkbox" name ="varr[]" value="LongwaveNet-monmean" id="LongwaveNet-monmean" class="hydromonthly"/>
                                <label for="LongwaveNet-monmean" id="LongwaveNet-monmean">LongwaveNet-monmean
                                <img src="images/questionmark.gif" title="Net Downward Longwave Radiation Flux (Monthly Mean)"></img></label><br/>


                                <input type="checkbox" name ="varr[]" value="petNatVeg-monday1" id="petNatVeg-monday1" class="hydromonthly"/>
                                <label for="petNatVeg-monday1" id="petNatVeg-monday1"> petNatVeg-monday1
                                <img src="images/questionmark.gif" title="Potential Transpiration- Vegetation Resistance (Day 1 of each Month)"></img></label><br/>

                                <input type="checkbox" name ="varr[]" value="petNatVeg-monsum" id="petNatVeg-monsum" class="hydromonthly"/>
                                <label for="petNatVeg-monsum" id="petNatVeg-monsum"> petNatVeg-monsum
                                <img src="images/questionmark.gif" title="Potential Transpiration- Vegetation Resistance (Monthly Sum)"></img></label><br/>

                                <input type="checkbox" name ="varr[]" value="petShort-monday1" id="petShort-monday1" class="hydromonthly"/>
                                <label for="petShort-monday1" id="petShort-monday1"> petShort-monday1
                                <img src="images/questionmark.gif" title="Potential Evapotranspiration- Short Reference Crop(Grass)(Day 1 of each Month)"></img></label><br/>
                                <input type="checkbox" name ="varr[]" value="petShort-monsum" id="petShort-monsum" class="hydromonthly"/>
                                <label for="petShort-monsum" id="petShort-monsum"> petShort-monsum
                                <img src="images/questionmark.gif" title="Potential Evapotranspiration- Short Reference Crop(Grass)(Monthly Sum)"></img></label><br/>

                                <input type="checkbox" name ="varr[]" value="petTall-monday1" id="petTall-monday1" class="hydromonthly"/>
                                <label for="petTall-monday1" id="petTall-monday1"> petTall-monday1
                                <img src="images/questionmark.gif" title="Potential Evapotranspiration- Tall Reference Crop(Alfalfa)(Day 1 of each Month)"></img></label><br/>
                                <input type="checkbox" name ="varr[]" value="petTall-monsum" id="petTall-monsum" class="hydromonthly"/>
                                <label for="petTall-monsum" id="petTall-monsum"> petTall-monsum
                                <img src="images/questionmark.gif" title="Potential Evapotranspiration- Tall Reference Crop(Alfalfa)(Monthly Sum)"></img></label><br/>

  				<input type="checkbox" name ="varr[]" value="Precip-monsum" id="Precip-monsum" class="hydromonthly"/>
                                <label for="Precip-monsum" id="Precip-monsum"> Precip-monsum
                                <img src="images/questionmark.gif" title="Precipitation Flux(Monthly Sum)"></img></label><br/>

                                <input type="checkbox" name ="varr[]" value="Qair-monmean" id="Qair-monmean" class="hydromonthly" />
                                <label for="Qair-monmean" id="Qair-monmean"> Qair-monmean
                                <img src="images/questionmark.gif" title="Specific Humidity(Monthly Mean)"></img></label><br/>

                                <input type="checkbox" name ="varr[]" value="Qsb-monsum" id="Qsb-monsum" class="hydromonthly"/>
                                <label for="Qsb-monsum" id="Qsb-monsum"> Qsb-monsum
                                <img src="images/questionmark.gif" title="Subsurface Runoff Flow(Montly Sum)"></img></label><br/>

                                <input type="checkbox" name ="varr[]" value="Qs-monsum" id="Qs-monsum" class="hydromonthly"/>
                                <label for="Qs-monsum" id="Qs-monsum"> Qs-monsum
                                <img src="images/questionmark.gif" title="Surface Runoff Flow(Monthly Sum)"></img></label><br/>

                                <input type="checkbox" name ="varr[]" value="Qsm-monmax" id="Qsm-monmax" class="hydromonthly"/>
                                <label for="Qsm-monmax" id="Qsm-monmax"> Qsm-monmax
                                <img src="images/questionmark.gif" title="Snow Melt Flux(Monthly Max)"></img></label><br/>
                                <input type="checkbox" name ="varr[]" value="Qsm-monmean" id="Qsm-monmean" class="hydromonthly"/>
                                <label for="Qsm-monmean" id="Qsm-monmean"> Qsm-monmean
                                <img src="images/questionmark.gif" title="Snow Melt Flux(Monthly Mean)"></img></label><br/>
                                <input type="checkbox" name ="varr[]" value="Qsm-monsum" id="Qsm-monsum" class="hydromonthly"/>
                                <label for="Qsm-monsum" id="Qsm-monsum"> Qsm-monsum
                                <img src="images/questionmark.gif" title="Snow Melt Flux(Monthly Sum)"></img></label><br/>

                                <input type="checkbox" name ="varr[]" value="Rnet-monmean" id="Rnet-monmean" class="hydromonthly"/>
                                <label for="Rnet-monmean" id="Rnet-monmean"> Rnet-monmean
                                <img src="images/questionmark.gif" title="Net Downward Radiataion Flux(Monthly Mean)"></img></label><br/>

                                <input type="checkbox" name ="varr[]" value="Sensible-monmean" id="Sensible-monmean" class="hydromonthly"/>
                                <label for="Sensible-monmean" id="Sensible-monmean"> Sensible-monmean
                                <img src="images/questionmark.gif" title="Surface Upward Sensible Heat Flux(Monthly Mean)"></img></label><br/>

                                <input type="checkbox" name ="varr[]" value="Shortwave-monmean" id="Shortwave-monmean" class="hydromonthly"/>
                                <label for="Shortwave-monmean" id="Shortwave-monmean"> Shortwave-monmean
                                <img src="images/questionmark.gif" title="Incoming Downward Shortwave Radiation Flux(Monthly Mean)"></img></label><br/>

                                <input type="checkbox" name ="varr[]" value="ShortwaveNet-monmean" id="ShortwaveNet-monmean" class="hydromonthly"/>
                                <label for="ShortwaveNet-monmean" id="ShortwaveNet-monmean"> ShortwaveNet-monmean
                                <img src="images/questionmark.gif" title="Net Downward Shortwave Radiation Flux(Monthly Mean)"></img></label><br/>

				<input type="checkbox" name ="varr[]" value="SoilTemp-monmean" id="SoilTemp-monmean" class="hydromonthly"/>
                                <label for="SoilTemp-monmean" id="SoilTemp-monmean"> SoilTemp-monmean
                                <img src="images/questionmark.gif" title="Soil Temperature per Layer(Monthly Mean)"></img></label><br/>

                                <input type="checkbox" name ="varr[]" value="SurfTemp-monmean" id="SurfTemp-monmean" class="hydromonthly"/>
                                <label for="SurfTemp-monmean" id="SurfTemp-monmean"> SurfTemp-monmean
                                <img src="images/questionmark.gif" title="Surface Temperature(Monthly Mean)"></img></label><br/>

                                <input type="checkbox" name ="varr[]" value="SWE-monday1" id="SWE-monday1" class="hydromonthly"/>
                                <label for="SWE-monday1" id="SWE-monday1"> SWE-monday1
                                <img src="images/questionmark.gif" title="Snow Water Equivalent(Day 1 of each Month)"></img></label><br/>

                                <input type="checkbox" name ="varr[]" value="TotalRunoff-monday1" id="TotalRunoff-monday1" class="hydromonthly" />
                                <label for="TotalRunoff-monday1" id="TotalRunoff-monday1"> TotalRunoff-monday1
                                <img src="images/questionmark.gif" title="Total Runoff - Direct and Base(Day 1 of each Month)"></img></label><br/>
                                <input type="checkbox" name ="varr[]" value="TotalRunoff-monmax" id="TotalRunoff-monmax" class="hydromonthly" />
                                <label for="TotalRunoff-monmax" id="TotalRunoff-monmax"> TotalRunoff-monmax
                                <img src="images/questionmark.gif" title="Total Runoff - Direct and Base(Monthly Max)"></img></label><br/>
                                <input type="checkbox" name ="varr[]" value="TotalRunoff-monsum" id="TotalRunoff-monsum" class="hydromonthly" />
                                <label for="TotalRunoff-monsum" id="TotalRunoff-monsum"> TotalRunoff-monsum
                                <img src="images/questionmark.gif" title="Total Runoff - Direct and Base(Monthly Sum)"></img></label><br/>


                                <input type="checkbox" name ="varr[]" value="TotalSoilMoist-monday1" id="TotalSoilMoist-monday1" class="hydromonthly"/>
                                <label for="TotalSoilMoist-monday1" id="TotalSoilMoist-monday1"> TotalSoilMoist-monday1
                                <img src="images/questionmark.gif" title="Total Soil Moisture Content per Layer(Day 1 of each Month)"></img></label><br/>
                                <input type="checkbox" name ="varr[]" value="TotalSoilMoist-monmean" id="TotalSoilMoist-monmean" class="hydromonthly"/>
                                <label for="TotalSoilMoist-monmean" id="TotalSoilMoist-monmean"> TotalSoilMoist-monmean
                                <img src="images/questionmark.gif" title="Total Soil Moisture Content per Layer(Monthy Mean)"></img></label><br/>

                                <input type="checkbox" name ="varr[]" value="Transp-monsum" id="Transp-monsum" class="hydromonthly"/>
                                <label for="Transp-monsum" id="Transp-monsum"> Transp-monsum
                                <img src="images/questionmark.gif" title="Net Transpiration from Vegetation(Monthly Sum)"></img></label>

 			   </div> 

			 <div class="3pg" style="display:none">
                                <input type="checkbox" name ="varr[]" value="LAI" id="LAI" class="3pg"/>
				<label for="LAI" id="LAI">LAI
	 			<img src="images/questionmark.gif" title="Leaf Area Index of 50 yr old Conifer Forest"></img></label><br/>
                                <input type="checkbox" name ="varr[]" value="NPP" id="NPP" class="3pg"/>
				<label for="NPP">NPP 
	 			<img src="images/questionmark.gif" title="Net Primary Production of 50 yr old Conifer Forest"></img></label><br/>
                                <input type="checkbox" name ="varr[]" value="WS" id="WS" class="3pg"/>
				<label for="WS" id="WS">WS
	 			<img src="images/questionmark.gif" title="Woody Stem Mass of 50 yr old Conifer Forest"></img></label><br/>
                        </div>

	   		<div class="mc2full" style="display:none">
                                <input type="checkbox" name ="varr[]" value="" id="allmc2" class="mc2full"/>
                                <label for="allmc2">MC2 Variables are all in one file</label><br>
			</div>
	   		<div class="mc2pointrect" style="display:none">
                                <input type="checkbox" name ="varr[]" value="AET" id="AET" class="mc2pointrect"/>
                                <label for="AET">AET <img src="images/questionmark.gif" title="Actual Evapotranspiration"></img></label><br>
                                <input type="checkbox" name ="varr[]" value="BUI_ANN_MAX" id="BUI_ANN_MAX" class="mc2pointrect"/>
                                <label for="BUI_ANN_MAX">BUI_ANN_MAX<img src="images/questionmark.gif" title="Max Fuel Build-Up Index"></img></label><br>
                                <input type="checkbox" name ="varr[]" value="CONSUMED" id="CONSUMED" class="mc2pointrect"/>
                                <label for="CONSUMED">CONSUMED<img src="images/questionmark.gif" title="Consumed Carbon"></img></label><br>

                                <input type="checkbox" name ="varr[]" value="C_DEAD_ABOVEGR" id="C_DEAD_ABOVEGR" class="mc2pointrect"/>
                                <label for="C_DEAD_ABOVEGR">C_DEAD_ABOVEGR<img src="images/questionmark.gif" title="Aboveground Dead Carbon"></img></label><br>
                                <input type="checkbox" name ="varr[]" value="C_DEAD_WOOD" id="C_DEAD_WOOD" class="mc2pointrect"/>
                                <label for="C_DEAD_WOOD">C_DEAD_WOOD<img src="images/questionmark.gif" title="Dead Wood Carbon"></img></label><br>

                                <input type="checkbox" name ="varr[]" value="C_ECOSYS" id="C_ECOSYS" class="mc2pointrect"/>
                                <label for="C_ECOSYS">C_ECOSYS<img src="images/questionmark.gif" title="Ecosystem Carbon"></img></label><br>

                                <input type="checkbox" name ="varr[]" value="C_FOREST" id="C_FOREST" class="mc2pointrect"/>
                                <label for="C_FOREST">C_FOREST<img src="images/questionmark.gif" title="Forest Carbon"></img></label><br>

                                <input type="checkbox" name ="varr[]" value="C_LEACHED" id="C_LEACHED" class="mc2pointrect"/>
                                <label for="C_LEACHED">C_LEACHED<img src="images/questionmark.gif" title="Leached Carbon"></img></label><br>

                                <input type="checkbox" name ="varr[]" value="C_LITTER" id="C_LITTER" class="mc2pointrect"/>
                                <label for="C_LITTER">C_LITTER<img src="images/questionmark.gif" title="Litter Carbon"></img></label><br>

                                <input type="checkbox" name ="varr[]" value="C_LIVE_ABOVEGR" id="C_LIVE_ABOVEGR" class="mc2pointrect"/>
                                <label for="C_LIVE_ABOVEGR">C_LIVE_ABOVEGR<img src="images/questionmark.gif" title="Live Aboveground Carbon"></img></label><br>
                                <input type="checkbox" name ="varr[]" value="C_LIVE_BELOWGR" id="C_LIVE_BELOWGR" class="mc2pointrect"/>
                                <label for="C_LIVE_BELOWGR">C_LIVE_BELOWGR<img src="images/questionmark.gif" title="Live Belowground Carbon"></img></label><br>
                                <input type="checkbox" name ="varr[]" value="C_MAX_FOREST_LEAF" id="C_MAX_FOREST_LEAF" class="mc2pointrect"/>
                                <label for="C_MAX_FOREST_LEAF">C_MAX_FOREST_LEAF<img src="images/questionmark.gif" title="Maximum Monthly Leaf Carbon"></img></label><br>
                                <input type="checkbox" name ="varr[]" value="C_MAX_LIVE_GRASS_ABOVEGR" id="C_MAX_LIVE_GRASS_ABOVEGR" class="mc2pointrect"/>
                                <label for="C_MAX_LIVE_GRASS_ABOVEGR">C_MAX_LIVE_GRASS_ABOVEGR<img src="images/questionmark.gif" title="Maximum Monthly Aboveground Live Grass Carbon"></img></label><br>

                                <input type="checkbox" name ="varr[]" value="C_MAX_LIVE_GRASS_BELOWGR" id="C_MAX_LIVE_GRASS_BELOWGR" class="mc2pointrect"/>
                                <label for="C_MAX_LIVE_GRASS_BELOWGR">C_MAX_LIVE_GRASS_BELOWGR<img src="images/questionmark.gif" title="Maximum Monthly Belowground Live Grass Carbon"></img></label><br>

                                <input type="checkbox" name ="varr[]" value="C_MAX_STANDING_DEAD" id="C_MAX_STANDING_DEAD" class="mc2pointrect"/>
                                <label for="C_MAX_STANDING_DEAD">C_MAX_STANDING_DEAD<img src="images/questionmark.gif" title="Maximum Standing Dead Carbon"></img></label><br>

                                <input type="checkbox" name ="varr[]" value="C_SOIL_AND_LITTER" id="C_SOIL_AND_LITTER" class="mc2pointrect"/>
                                <label for="C_SOIL_AND_LITTER">C_SOIL_AND_LITTER<img src="images/questionmark.gif" title="Soil and Litter Carbon"></img></label><br>

                                <input type="checkbox" name ="varr[]" value="C_SOM" id="C_SOM" class="mc2pointrect"/>
                                <label for="C_SOM">C_SOM<img src="images/questionmark.gif" title="Structural and Metabolic Carbon"></img></label><br>

                                <input type="checkbox" name ="varr[]" value="C_SOM_X_STRUC_METAB" id="C_SOM_X_STRUC_METAB" class="mc2pointrect"/>
                                <label for="C_SOM_X_STRUC_METAB">C_SOM_X_STRUC_METAB<img src="images/questionmark.gif" title="Soil Carbon Minus Litter and Structural Carbon"></img></label><br>

                                <input type="checkbox" name ="varr[]" value="C_VEG" id="C_VEG" class="mc2pointrect"/>
                                <label for="C_VEG">C_VEG<img src="images/questionmark.gif" title="Vegetation Carbon"></img></label><br>

                                <input type="checkbox" name ="varr[]" value="FFMC_ANN_MAX" id="FFMC_ANN_MAX" class="mc2pointrect"/>
                                <label for="FFMC_ANN_MAX">FFMC_ANN_MAX<img src="images/questionmark.gif" title="Maximum Fine Fuel Moisture"></img></label><br>

                                <input type="checkbox" name ="varr[]" value="H2O_STREAM_FLOW" id="H2O_STREAM_FLOW" class="mc2pointrect"/>
                                <label for="H2O_STREAM_FLOW">H2O_STREAM_FLOW<img src="images/questionmark.gif" title="Stream Flow"></img></label><br>

                                <input type="checkbox" name ="varr[]" value="MAX_GRASS_LAI" id="MAX_GRASS_LAI" class="mc2pointrect"/>
                                <label for="MAX_GRASS_LAI">MAX_GRASS_LAI<img src="images/questionmark.gif" title="Maximum Monthly Grass Leaf Area Index"></img></label><br>

                                <input type="checkbox" name ="varr[]" value="MAX_SFC_RUNOFF" id="MAX_SFC_RUNOFF" class="mc2pointrect"/>
                                <label for="MAX_SFC_RUNOFF">MAX_SFC_RUNOFF<img src="images/questionmark.gif" title="Maximum Surface Runoff"></img></label><br>
                                <input type="checkbox" name ="varr[]" value="MAX_TREE_LAI" id="MAX_TREE_LAI" class="mc2pointrect"/>
                                <label for="MAX_TREE_LAI">MAX_TREE_LAI<img src="images/questionmark.gif" title="Maximum Monthly Tree Leaf Area Index"></img></label><br>

                                <input type="checkbox" name ="varr[]" value="MAX_CLIMATE_ZONE" id="MAX_CLIMATE_ZONE" class="mc2pointrect"/>
                                <label for="MAX_CLIMATE_ZONE">MAX_CLIMATE_ZONE<img src="images/questionmark.gif" title="Climate Zone"></img></label><br>
                                <input type="checkbox" name ="varr[]" value="NBP" id="NBP" class="mc2pointrect"/>
                                <label for="NBP">NBP<img src="images/questionmark.gif" title="Net Biome Production"></img></label><br>

                                <input type="checkbox" name ="varr[]" value="NEP" id="NEP" class="mc2pointrect"/>
                                <label for="NEP">NEP<img src="images/questionmark.gif" title="Net Ecosystem Production"></img></label><br>

                                <input type="checkbox" name ="varr[]" value="NPP" id="NPPmc2" class="mc2pointrect"/>
                                <label for="NPPmc2">NPP<img src="images/questionmark.gif" title="Net Primary Production"></img></label><br>

                                <input type="checkbox" name ="varr[]" value="N_FIX" id="N_FIX" class="mc2pointrect"/>
                                <label for="N_FIX">N_FIX<img src="images/questionmark.gif" title="Net Fixed Nitrogen"></img></label><br>

                                <input type="checkbox" name ="varr[]" value="N_VOLATIL" id="N_VOLATIL" class="mc2pointrect"/>
                                <label for="N_VOLATIL">N_VOLATIL<img src="images/questionmark.gif" title="Volatized Nitrogen"></img></label><br>

                                <input type="checkbox" name ="varr[]" value="PART_BURN" id="PART_BURN" class="mc2pointrect"/>
                                <label for="PART_BURN">PART_BURN<img src="images/questionmark.gif" title="Fraction of Area Burned"></img></label><br>
                                <input type="checkbox" name ="varr[]" value="PET" id="PETmc2" class="mc2pointrect"/>
                                <label for="PETmc2">PET<img src="images/questionmark.gif" title="Potential Evapotranspiration"></img></label><br>

                                <input type="checkbox" name ="varr[]" value="RSP" id="RSP" class="mc2pointrect"/>
                                <label for="RSP">RSP<img src="images/questionmark.gif" title="Respiration"></img></label><br>

                                <input type="checkbox" name ="varr[]" value="TREE_TYPE" id="TREE_TYPE" class="mc2pointrect"/>
                                <label for="TREE_TYPE">TREE_TYPE<img src="images/questionmark.gif" title="Tree Type"></img></label><br>
                                <input type="checkbox" name ="varr[]" value="V_TYPE" id="V_TYPE" class="mc2pointrect"/>
                                <label for="V_TYPE">V_TYPE<img src="images/questionmark.gif" title="Vegetation Type"></img></label><br>
                        </div>
		      </div>
		    </div>
		  </div>
		</td>
		</tr>
		</div>
		<!--------------------->
		<!--   ACCORDION MODELS    -->
		<!--------------------->
		<div class="accordion-group">
		<tr>
		<td>
		    <div class="accordion-heading">
		      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseModels">
			<h3>CMIP5 MODELS</h3>
		      </a>
		    </div>
		</td>
		</tr>
		<tr>
		<td>
		    <div id="collapseModels" class="accordion-body collapse">
		      <div class="accordion-inner">
			<button class="selectall" data-name="model">Select All</button>
			<button class="deselectall" data-name="model">DeSelect All</button>
			<br>
			<div class="climatemc2">
			<input type="checkbox" name="model[]" value="bcc-csm1-1" id="bcc-csm1-1" class="climatemc2"/>
			 <label for="bcc-csm1-1" class="climatemc2" >bcc-csm1-1 (China)</label><br />
			</div>
			<div class="climatemc2andhydro" >
			<input type="checkbox" name="model[]" value="bcc-csm1-1-m" id='bcc-csm1-1-m' class="climatemc2andhydro"/>
			 <label for="bcc-csm1-1-m" class="climatemc2andhydro">bcc-csm1-1-m (China)</label><br />
			</div>
			<div class="climatemc2" >
			<input type="checkbox" name="model[]" value="BNU-ESM" id="BNU-ESM" class="climatemc2"/>
			 <label for="BNU-ESM" class="climatemc2">BNU-ESM (China)</label><br />
			</div>
			<div class="climatemc2andhydro">
			<input type="checkbox" name="model[]" value="CanESM2" id="CanESM2" class="climatemc2andhydro"/>
			 <label for="CanESM2" class="climatemc2andhydro">CanESM2 (Canada)</label><br />
			<input type="checkbox" name="model[]" value="CCSM4" id='CCSM4' class="climatemc2andhydro"/>
			 <label for="CCSM4" class="climatemc2andhydro">CCSM4 (USA)</label><br />
			<input type="checkbox" name="model[]" value="CNRM-CM5" id='CNRM-CM5' class="climatemc2andhydro"/>
			 <label for="CNRM-CM5" class="climatemc2andhydro">CNRM-CM5 (France)</label><br />
			<input type="checkbox" name="model[]" value="CSIRO-Mk3-6-0" id="CSIRO-Mk3-6-0" class="climatemc2andhydro"/>
			 <label for="CSIRO-Mk3-6-0" class="climatemc2andhydro">CSIRO-Mk3-6-0 (Austrailia)</label><br />
			</div>
			<div class="climatemc2" >
			<input type="checkbox" name="model[]" value="GFDL-ESM2G" id="GFDL-ESM2G" class="climatemc2"/>
			 <label for="GFDL-ESM2G" class="climatemc2">GFDL-ESM2G (USA)</label><br />
			</div>
			<div class="climatemc2and3pg">
			<input type="checkbox" name="model[]" value="GFDL-ESM2M" id="GFDL-ESM2M" class="climatemc2and3pg" />
			 <label for="GFDL-ESM2M" class="climatemc2and3pg">GFDL-ESM2M (USA)</label><br />
			</div>
			<div class="macav2livnehmc2andhydro">
		       <input type="checkbox" name="model[]" value="HadGEM2-CC365" id="HadGEM2-CC365" class="macav2livnehmc2andhydro"/>
			 <label for="HadGEM2-CC365" class="macav2livnehmc2andhydro">HadGEM2-CC365 (United Kingdom)</label><br />
			<input type="checkbox" name="model[]" value="HadGEM2-ES365" id="HadGEM2-ES365" class="macav2livnehmc2andhydro"/>
			 <label for="HadGEM2-ES365" class="macav2livnehmc2andhydro">HadGEM2-ES365 (United Kingdom)</label><br />
			</div>
			<div class="climatemc2" >
			<input type="checkbox" name="model[]" value="inmcm4" id="inmcm4" class="climatemc2"/>
			 <label for="inmcm4" class="climatemc2">inmcm4 (Russia)</label><br />
			<input type="checkbox" name="model[]" value="IPSL-CM5A-LR" id="IPSL-CM5A-LR" class="climatemc2"/>
			 <label for="IPSL-CM5A-LR" class="climatemc2">IPSL-CM5A-LR (France)</label><br />
			</div>
			<div class="climatemc2andhydro" >
			<input type="checkbox" name="model[]" value="IPSL-CM5A-MR" id="IPSL-CM5A-MR" class="climatemc2andhydro"/>
			 <label for="IPSL-CM5A-MR" class="climatemc2andhydro">IPSL-CM5A-MR (France)</label><br />
			</div>
			<div class="climatemc2">
			<input type="checkbox" name="model[]" value="IPSL-CM5B-LR" id="IPSL-CM5B-LR" class="climatemc2"/>
			 <label for="IPSL-CM5B-LR" class="climatemc2">IPSL-CM5B-LR (France)</label><br />
			</div>
			<div class="climatemc2hydroand3pg">
			<input type="checkbox" name="model[]" value="MIROC5" id="MIROC5"   class="climatemc2hydroand3pg"/>
			 <label for="MIROC5"  class="climatemc2hydroand3pg">MIROC5 (Japan)</label><br />
			</div>
			<div class="climatemc2">
			<input type="checkbox" name="model[]" value="MIROC-ESM" id="MIROC-ESM" class="climatemc2"/>
			 <label for="MIROC-ESM" class="climatemc2">MIROC-ESM (Japan)</label><br />
			<input type="checkbox" name="model[]" value="MIROC-ESM-CHEM" id="MIROC-ESM-CHEM" class="climatemc2"/>
			 <label for="MIROC-ESM-CHEM" class="climatemc2">MIROC-ESM-CHEM (Japan)</label><br />
			<input type="checkbox" name="model[]" value="MRI-CGCM3" id="MRI-CGCM3" class="climatemc2"/>
			 <label for="MRI-CGCM3" class="climatemc2">MRI-CGCM3 (Japan)</label><br />
			</div>
			<div class="climatemc2andhydro">
			<input type="checkbox" name="model[]" value="NorESM1-M" id="NorESM1-M" class="climatmc2andhydro"/>
			 <label for="NorESM1-M" class="climatemc2andhydro">NorESM1-M (Norway)</label><br />
			</div>
			<div class="macav1metdata" style="display:none">
				<input type="checkbox" name="model[]" value="HadGEM2-CC" id="HadGEM2-CC" class="macav1metdata"/>
				<label for="HadGEM2-CC" class="macav1metdata">HadGEM2-CC (United Kingdom)</label><br />
			</div>
			<div class="macav1metdataand3pg" style="display:none">
				<input type="checkbox" name="model[]" value="HadGEM2-ES" id="HadGEM2-ES" class="macav1metdataand3pg"/>
				<label for="HadGEM2-ES" class="macav1metdataand3pg">HadGEM2-ES (United Kingdom)</label><br />
			</div>
		    </div>
		  </div>
	       </td>
		</tr>
		</div>
		<!--------------------->
		<!--   ACCORDION TIME    -->
		<!--------------------->
		<div class="accordion-group">
		<tr>
		<td>
		    <div class="accordion-heading">
		      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTime">
			<h3>CMIP5 SCENARIOS/TIME PERIODS</h3>
		      </a>
		    </div>
		</td>
		</tr>
		<tr>
		<td>
		    <div id="collapseTime" class="accordion-body collapse">
		      <div class="accordion-inner">
		      <div class="time" style="text-align:Left">
				<br>
				<button class="selectall" data-name="timee">Select All</button>
				<button class="deselectall" data-name="timee">DeSelect All</button>
				<br />
				<br>
				<p><span style="color:red">Files aggregated over all years in a scenario are available if you do not 
				select 'full domain'</span></p>
				<div class="macav2livneh">
					<u>Historical</u><br>
					<input type="checkbox" name="timee[]" value="r1i1p1_historical_1950_1969" class="macav2livneh" 
						id="r1i1p1_historical_1950_1969" />	
					 <label for="r1i1p1_historical_1950_1969" class="macav2livneh">historical (1950-1969) </label><br/>
					<input type="checkbox" name="timee[]" value="r1i1p1_historical_1970_1989" class="macav2livneh" 
						id="r1i1p1_historical_1970_1989"/>
					 <label for="r1i1p1_historical_1970_1989" class="macav2livneh">historical (1970-1989) </label><br />
					<input type="checkbox" name="timee[]" value="r1i1p1_historical_1990_2005" class="macav2livneh" 
						id="r1i1p1_historical_1990_2005"/>
					 <label for="r1i1p1_historical_1990_2005" class="macav2livneh">historical (1990-2005) </label><br />
				</div>
				<div class="macav1metdataanddailyhydro" style="display:none">
					<u>Historical</u><br>
					<input type="checkbox" name="timee[]" value="r1i1p1_historical_1950_1959" class="macav1metdataanddailyhydro" 
						id="r1i1p1_historical_1950_1959" />
					 <label for="r1i1p1_historical_1950_1959" class="macav1metdataanddailyhydro">historical (1950-1959) </label><br />
					<input type="checkbox" name="timee[]" value="r1i1p1_historical_1960_1969" class="macav1metdataanddailyhydro" 
						id="r1i1p1_historical_1960_1969"/>
					 <label for="r1i1p1_historical_1960_1969" class="macav1metdataanddailyhydro">historical (1960-1969) </label><br />
					<input type="checkbox" name="timee[]" value="r1i1p1_historical_1970_1979" class="macav1metdataanddailyhydro" id="r1i1p1_historical_1970_1979"/>
					 <label for="r1i1p1_historical_1970_1979" class="macav1metdataanddailyhydro">historical (1970-1979) </label><br />
					<input type="checkbox" name="timee[]" value="r1i1p1_historical_1980_1989" class="macav1metdataanddailyhydro" id="r1i1p1_historical_1980_1989"/>
					 <label for="r1i1p1_historical_1980_1989" class="macav1metdataanddailyhydro">historical (1980-1989) </label><br />
					<input type="checkbox" name="timee[]" value="r1i1p1_historical_1990_1999" class="macav1metdataanddailyhydro" id="r1i1p1_historical_1990_1999"/>
					 <label for="r1i1p1_historical_1990_1999" class="macav1metdataanddailyhydro">historical (1990-1999) </label><br />
					<input type="checkbox" name="timee[]" value="r1i1p1_historical_2000_2005" class="macav1metdataanddailyhydro" id="r1i1p1_historical_2000_2005"/>
					 <label for="r1i1p1_historical_2000_2005" class="macav1metdataanddailyhydro">historical (2000-2005) </label><br />
				</div>

 				 <div class="mc2" style="display:none" >
                                        <u>Historical</u><br>
                                        <input type="checkbox" name="timee[]" value="historical_1895_2010" id="historical_1895_2010" class="mc2"/>
                                        <label for="historical_1895_2010" id="r1i1p1_historical_1895_2010">PRISM (1895-2010)</label><br />
                                </div>


 				 <div class="agg" style="display:none" >
                                        <input type="checkbox" name="timee[]" value="r1i1p1_historical_1950_2005" id="r1i1p1_historical_1950_2005" class="agg"/>
                                        <label for="r1i1p1_historical_1950_2005" id="r1i1p1_historical_1950_2005"><span style="color:red">historical (1950-2005)</span></label><br/>
                                </div>

	 			<div class="3pg" style="display:none" >
                                        <u>Historical</u><br>
                                        <input type="checkbox" name="timee[]" value="r1i1p1_rcp45_1950_2099" id="r1i1p1_historical_1950_20053pg" class="3pg"/>
                                        <label for="r1i1p1_historical_1950_2005" id="r1i1p1_historical_1950_20053pg">historical (1950-2005)</label><br/>
                                </div>
				<div class="hydromonthly" style="display:none" >
                                        <u>Historical</u><br>
                                        <input type="checkbox" name="timee[]" value="r1i1p1_historical_1950_2005" id="r1i1p1_historical_1950_2005_hydromonthly" class="hydromonthly"/>
                                        <label for="r1i1p1_historical_1950_2005_hydromonthly" >historical (1950-2005)</label><br/>
                                </div>



				<div class="macav2livneh">
					<u>RCP 4.5</u><br>
					<input type="checkbox" name="timee[]" value="r1i1p1_rcp45_2006_2025" class="macav2livneh" id="r1i1p1_rcp45_2006_2025"
						class="macav2livneh" />
					 <label for="r1i1p1_rcp45_2006_2025" class="macav2livneh">future RCP4.5 (2006-2025) </label><br />
					<input type="checkbox" name="timee[]" value="r1i1p1_rcp45_2026_2045" class="macav2livneh" id="r1i1p1_rcp45_2026_2045"
						class="macav2livneh" />
					 <label for="r1i1p1_rcp45_2026_2045" class="macav2livneh">future RCP4.5 (2026-2045) </label><br />
					<input type="checkbox" name="timee[]" value="r1i1p1_rcp45_2046_2065" class="macav2livneh" id="r1i1p1_rcp45_2046_2065"
						class="macav2livneh" />
					 <label for="r1i1p1_rcp45_2046_2065" class="macav2livneh">future RCP4.5 (2046-2065) </label><br />
					<input type="checkbox" name="timee[]" value="r1i1p1_rcp45_2066_2085" class="macav2livneh" id="r1i1p1_rcp45_2066_2085"
						class="macav2livneh" />
					 <label for="r1i1p1_rcp45_2066_2085" class="macav2livneh">future RCP4.5 (2066-2085) </label><br />
					<input type="checkbox" name="timee[]" value="r1i1p1_rcp45_2086_2099" class="macav2livneh" id="r1i1p1_rcp45_2086_2099"
						class="macav2livneh" />
					 <label for="r1i1p1_rcp45_2086_2099" class="macav2livneh">future RCP4.5 (2086-2099) </label><br />
				</div>

				<div class="macav1metdata" style="display:none">
					<u>RCP 4.5</u><br>
					<input type="checkbox" name="timee[]" value="r1i1p1_rcp45_2006_2015" class="macav1metdata" id="r1i1p1_rcp45_2006_2015"/>
					<label for="r1i1p1_rcp45_2006_2015" class="macav1metdata">future RCP4.5 (2006-2015) </label><br />
					<input type="checkbox" name="timee[]" value="r1i1p1_rcp45_2016_2025" class="macav1metdata" id="r1i1p1_rcp45_2016_2025"/>
					<label for="r1i1p1_rcp45_2016_2025" class="macav1metdata">future RCP4.5 (2016-2025)</label><br />
					<input type="checkbox" name="timee[]" value="r1i1p1_rcp45_2026_2035" class="macav1metdata" id="r1i1p1_rcp45_2026_2035"/>
					<label for="r1i1p1_rcp45_2026_2035" class="macav1metdata">future RCP4.5 (2026-2035)</label><br />
					<input type="checkbox" name="timee[]" value="r1i1p1_rcp45_2036_2045" class="macav1metdata" id="r1i1p1_rcp45_2036_2045"/>
					<label for="r1i1p1_rcp45_2036_2045" class="macav1metdata">future RCP4.5 (2036-2045)</label><br />
					<input type="checkbox" name="timee[]" value="r1i1p1_rcp45_2046_2055" class="macav1metdata" id="r1i1p1_rcp45_2046_2055"/>
					<label for="r1i1p1_rcp45_2046_2055" class="macav1metdata">future RCP4.5 (2046-2055) </label><br />
					<input type="checkbox" name="timee[]" value="r1i1p1_rcp45_2056_2065" class="macav1metdata" id="r1i1p1_rcp45_2056_2065"/>
					 <label for="r1i1p1_rcp45_2056_2065" class="macav1metdata">future RCP4.5 (2056-2065) </label><br />
					<input type="checkbox" name="timee[]" value="r1i1p1_rcp45_2066_2075" class="macav1metdata" id="r1i1p1_rcp45_2066_2075"/>
					 <label for="r1i1p1_rcp45_2066_2075" class="macav1metdata">future RCP4.5 (2066-2075) </label><br />
					<input type="checkbox" name="timee[]" value="r1i1p1_rcp45_2076_2085" class="macav1metdata" id="r1i1p1_rcp45_2076_2085"/>
					 <label for="r1i1p1_rcp45_2076_2085" class="macav1metdata">future RCP4.5 (2076-2085) </label><br />
					<input type="checkbox" name="timee[]" value="r1i1p1_rcp45_2086_2095" class="macav1metdata" id="r1i1p1_rcp45_2086_2095"/>
					 <label for="r1i1p1_rcp45_2086_2095" class="macav1metdata">future RCP4.5 (2086-2095) </label><br />
					<input type="checkbox" name="timee[]" value="r1i1p1_rcp45_2096_2100" class="macav1metdata" id="r1i1p1_rcp45_2096_2100"/>
					 <label for="r1i1p1_rcp45_2096_2100" class="macav1metdata">future RCP4.5 (2096-2100) </label><br />
				</div>
			 <div class="hydrodaily" style="display:none">
                                        <u>RCP 4.5</u><br>
                                        <input type="checkbox" name="timee[]" value="r1i1p1_rcp45_2006_2009" class="hydro" id="r1i1p1_rcp45_2006_2009"/>
                                        <label for="r1i1p1_rcp45_2006_2009" class="hydro">future RCP4.5 (2006-2009) </label><br />
                                        <input type="checkbox" name="timee[]" value="r1i1p1_rcp45_2010_2019" class="hydro" id="r1i1p1_rcp45_2010_2019"/>
                                        <label for="r1i1p1_rcp45_2010_2019" class="hydro">future RCP4.5 (2010-2019)</label><br />
                                        <input type="checkbox" name="timee[]" value="r1i1p1_rcp45_2020_2029" class="hydro" id="r1i1p1_rcp45_2020_2029"/>
                                        <label for="r1i1p1_rcp45_2020_2029" class="hydro">future RCP4.5 (2020-2029)</label><br />
                                        <input type="checkbox" name="timee[]" value="r1i1p1_rcp45_2020_2029" class="hydro" id="r1i1p1_rcp45_2030_2039"/>
                                        <label for="r1i1p1_rcp45_2030_2039" class="hydro">future RCP4.5 (2030-2039)</label><br />
                                        <input type="checkbox" name="timee[]" value="r1i1p1_rcp45_2040_2049" class="hydro" id="r1i1p1_rcp45_2040_2049"/>
                                        <label for="r1i1p1_rcp45_2040_2049" class="hydro">future RCP4.5 (2040-2049) </label><br />
                                        <input type="checkbox" name="timee[]" value="r1i1p1_rcp45_2050_2059" class="hydro" id="r1i1p1_rcp45_2050_2059"/>
                                         <label for="r1i1p1_rcp45_2050_2059" class="hydro">future RCP4.5 (2050-2059) </label><br />
                                        <input type="checkbox" name="timee[]" value="r1i1p1_rcp45_2060_2069" class="hydro" id="r1i1p1_rcp45_2060_2069"/>
                                         <label for="r1i1p1_rcp45_2060_2069" class="hydro">future RCP4.5 (2060-2069) </label><br />
					<input type="checkbox" name="timee[]" value="r1i1p1_rcp45_2070_2079" class="hydro" id="r1i1p1_rcp45_2070_2079"/>
                                         <label for="r1i1p1_rcp45_2070_2079" class="hydro">future RCP4.5 (2070-2079) </label><br />
 					<input type="checkbox" name="timee[]" value="r1i1p1_rcp45_2080_2089" class="hydro" id="r1i1p1_rcp45_2080_2089"/>
                                         <label for="r1i1p1_rcp45_2080_2089" class="hydro">future RCP4.5 (2080-2089) </label><br />
                                        <input type="checkbox" name="timee[]" value="r1i1p1_rcp45_2090_2099" class="hydro" id="r1i1p1_rcp45_2090_2099"/>
                                         <label for="r1i1p1_rcp45_2090_2099" class="hydro">future RCP4.5 (2090-2099) </label><br />
                                </div>

				<div class="mc2" style="display:none">
                                        <u>RCP 4.5</u><br>
					<input type="checkbox" name="timee[]" value="r1i1p1_rcp45_2011_2100" id="r1i1p1_rcp45_2011_2100" class="mc2"/>	
					 <label for="r1i1p1_rcp45_2011_2100">future RCP4.5 (2011-2100)</label><br/>
				</div>


				<div class="agg" style="display:none">
					<input type="checkbox" name="timee[]" value="r1i1p1_rcp45_2006_2099" id="r1i1p1_rcp45_2006_2099" class="agg"/>	
					 <label for="r1i1p1_rcp45_2006_2099"><span style="color:red">future RCP4.5 (2006-2099)</span> <br /></label><br/>
				</div>
				<div class="3pg" style="display:none">
					<u>RCP 4.5</u><br>
					<input type="checkbox" name="timee[]" value="r1i1p1_rcp45_1950_2099" id="r1i1p1_rcp45_2006_20993pg" class="3pg"/>	
					 <label for="r1i1p1_rcp45_2006_20993pg">future RCP4.5 (2006-2099)<br /></label><br/>
				</div>
				<div class="hydromonthly" style="display:none">
					<u>RCP 4.5</u><br>
					<input type="checkbox" name="timee[]" value="r1i1p1_rcp45_2006_2099" id="r1i1p1_rcp45_2006_2099_hydromonthly" class="hydromonthly"/>	
					 <label for="r1i1p1_rcp45_2006_2099_hydromonthly">future RCP4.5 (2006-2099)<br /></label><br/>
				</div>


				<div class="macav2livneh">
					<u>RCP 8.5</u><br>
					<input type="checkbox" name="timee[]" value="r1i1p1_rcp85_2006_2025" class="macav2livneh" id="r1i1p1_rcp85_2006_2025"
						class="macav2livneh" />
					 <label for="r1i1p1_rcp85_2006_2025" class="macav2livneh">future RCP8.5 (2006-2025) <br /></label><br />
					<input type="checkbox" name="timee[]" value="r1i1p1_rcp85_2026_2045" class="macav2livneh" id="r1i1p1_rcp85_2026_2045"
						class="macav2livneh" />
					 <label for="r1i1p1_rcp85_2026_2045" class="macav2livneh">future RCP8.5 (2026-2045) <br /></label><br />
					<input type="checkbox" name="timee[]" value="r1i1p1_rcp85_2046_2065" class="macav2livneh" id="r1i1p1_rcp85_2046_2065"
						class="macav2livneh" />
					 <label for="r1i1p1_rcp85_2046_2065" class="macav2livneh">future RCP8.5 (2046-2065) <br /></label><br />
					<input type="checkbox" name="timee[]" value="r1i1p1_rcp85_2066_2085" class="macav2livneh" id="r1i1p1_rcp85_2066_2085"
						class="macav2livneh" />
					 <label for="r1i1p1_rcp85_2066_2085" class="macav2livneh">future RCP8.5 (2066-2085) <br /></label><br />
					<input type="checkbox" name="timee[]" value="r1i1p1_rcp85_2086_2099" class="macav2livneh" id="r1i1p1_rcp85_2086_2099"
						class="macav2livneh" />
					 <label for="r1i1p1_rcp85_2086_2099" class="macav2livneh">future RCP8.5 (2086-2099) <br /></label><br />
				</div>
				<div class="macav1metdata" style="display:none">
					<u>RCP 8.5</u><br>
					<input type="checkbox" name="timee[]" value="r1i1p1_rcp85_2006_2015" class="macav1metdata" id="r1i1p1_rcp85_2006_2015"/>
					 <label for="r1i1p1_rcp85_2006_2015" class="macav1metdata">future RCP8.5 (2006-2015) <br /></label><br />
					<input type="checkbox" name="timee[]" value="r1i1p1_rcp85_2016_2025" class="macav1metdata" id="r1i1p1_rcp85_2016_2025"/>
					 <label for="r1i1p1_rcp85_2016_2025" class="macav1metdata">future RCP8.5 (2016-2025) <br /></label><br />
					<input type="checkbox" name="timee[]" value="r1i1p1_rcp85_2026_2035" class="macav1metdata" id="r1i1p1_rcp85_2026_2035"/>
					 <label for="r1i1p1_rcp85_2026_2035" class="macav1metdata">future RCP8.5 (2026-2035) <br /></label><br />
					<input type="checkbox" name="timee[]" value="r1i1p1_rcp85_2036_2045" class="macav1metdata" id="r1i1p1_rcp85_2036_2045"/>
					 <label for="r1i1p1_rcp85_2036_2045" class="macav1metdata">future RCP8.5 (2036-2045) <br /></label><br />
					<input type="checkbox" name="timee[]" value="r1i1p1_rcp85_2046_2055" class="macav1metdata" id="r1i1p1_rcp85_2046_2055"/>
					 <label for="r1i1p1_rcp85_2046_2055" class="macav1metdata">future RCP8.5 (2046-2055) <br /></label><br />
					<input type="checkbox" name="timee[]" value="r1i1p1_rcp85_2056_2065" class="macav1metdata" id="r1i1p1_rcp85_2056_2065"/>
					 <label for="r1i1p1_rcp85_2056_2065" class="macav1metdata">future RCP8.5 (2056-2065) <br /></label><br />
					<input type="checkbox" name="timee[]" value="r1i1p1_rcp85_2066_2075" class="macav1metdata" id="r1i1p1_rcp85_2066_2075"/>
					 <label for="r1i1p1_rcp85_2066_2075" class="macav1metdata">future RCP8.5 (2066-2075) <br /></label><br />
					<input type="checkbox" name="timee[]" value="r1i1p1_rcp85_2076_2085" class="macav1metdata" id="r1i1p1_rcp85_2076_2085"/>
					 <label for="r1i1p1_rcp85_2076_2085" class="macav1metdata">future RCP8.5 (2076-2085) <br /></label><br />
					<input type="checkbox" name="timee[]" value="r1i1p1_rcp85_2086_2095" class="macav1metdata" id="r1i1p1_rcp85_2086_2095"/>
					 <label for="r1i1p1_rcp85_2086_2095" class="macav1metdata">future RCP8.5 (2086-2095) <br /></label><br />
					<input type="checkbox" name="timee[]" value="r1i1p1_rcp85_2096_2100" class="macav1metdata" id="r1i1p1_rcp85_2096_2100"/>
					 <label for="r1i1p1_rcp85_2096_2100" class="macav1metdata">future RCP8.5 (2096-2100) <br /></label><br />
				</div>

    				<div class="hydrodaily" style="display:none">
                                        <u>RCP 8.5</u><br>
                                        <input type="checkbox" name="timee[]" value="r1i1p1_rcp85_2006_2009" class="hydro" id="r1i1p1_rcp85_2006_2009"/>
                                         <label for="r1i1p1_rcp85_2006_2009" class="hydro">future RCP8.5 (2006-2009) </label><br />

                                        <input type="checkbox" name="timee[]" value="r1i1p1_rcp85_2010_2019" class="hydro" id="r1i1p1_rcp85_2010_2019"/>
                                         <label for="r1i1p1_rcp85_2010_2019" class="hydro">future RCP8.5 (2010-2019) </label><br />

                                        <input type="checkbox" name="timee[]" value="r1i1p1_rcp85_2020_2029" class="hydro" id="r1i1p1_rcp85_2020_2029"/>
                                         <label for="r1i1p1_rcp85_2020_2029" class="hydro">future RCP8.5 (2020-2029) </label><br />

                                        <input type="checkbox" name="timee[]" value="r1i1p1_rcp85_2030_2039" class="hydro" id="r1i1p1_rcp85_2030_2039"/>
                                         <label for="r1i1p1_rcp85_2030_2039" class="hydro">future RCP8.5 (2030-2039) </label><br />

                                        <input type="checkbox" name="timee[]" value="r1i1p1_rcp85_2040_2049" class="hydro" id="r1i1p1_rcp85_2040_2049"/>
                                         <label for="r1i1p1_rcp85_2040_2049" class="hydro">future RCP8.5 (2040-2049) </label><br />

                                        <input type="checkbox" name="timee[]" value="r1i1p1_rcp85_2050_2059" class="hydro" id="r1i1p1_rcp85_2050_2059"/>
                                         <label for="r1i1p1_rcp85_2050_2059" class="hydro">future RCP8.5 (2050-2059) </label><br />

                                        <input type="checkbox" name="timee[]" value="r1i1p1_rcp85_2060_2060" class="hydro" id="r1i1p1_rcp85_2060_2069"/>
                                         <label for="r1i1p1_rcp85_2060_2069" class="hydro">future RCP8.5 (2060-2069) </label><br />

                                        <input type="checkbox" name="timee[]" value="r1i1p1_rcp85_2070_2079" class="hydro" id="r1i1p1_rcp85_2070_2079"/>
                                         <label for="r1i1p1_rcp85_2070_2079" class="hydro">future RCP8.5 (2070-2079) </label><br />

 					<input type="checkbox" name="timee[]" value="r1i1p1_rcp85_2080_2089" class="hydro" id="r1i1p1_rcp85_2080_2089"/>
                                         <label for="r1i1p1_rcp85_2080_2089" class="hydro">future RCP8.5 (2080-2089) </label><br />
                                        <input type="checkbox" name="timee[]" value="r1i1p1_rcp85_2090_2099" class="hydro" id="r1i1p1_rcp85_2090_2099"/>
                                         <label for="r1i1p1_rcp85_2090_2099" class="hydro">future RCP8.5 (2090-2099) </label><br />
                                </div>


				<div class="mc2" style="display:none">
                                        <u>RCP 8.5</u><br>
					<input type="checkbox" name="timee[]" value="r1i1p1_rcp85_2011_2100" id="r1i1p1_rcp85_2011_2100" class="mc2"/>	
					 <label for="r1i1p1_rcp85_2011_2100" id="r1i1p1_rcp85_2011_2100">future RCP8.5 (2011-2100 )</label><br/>
				</div>

				<div class="agg" style="display:none">
					<input type="checkbox" name="timee[]" value="r1i1p1_rcp85_2006_2099" id="r1i1p1_rcp85_2006_2099" class="agg"/>	
					 <label for="ri1p1i_rcp85_2006_2099"><span style="color:red">future RCP8.5 (2006-2099 )</span> <br /></label><br/>
				</div>
				<div class="3pg" style="display:none">
                                        <u>RCP 8.5</u><br>
					<input type="checkbox" name="timee[]" value="r1i1p1_rcp85_1950_2099" id="r1i1p1_rcp85_2006_20993pg" class="3pg"/>	
					 <label for="ri1p1i_rcp85_2006_20993pg">future RCP8.5 (2006-2099 ) <br /></label><br/>
				</div>
				<div class="hydromonthly" style="display:none">
                                        <u>RCP 8.5</u><br>
					<input type="checkbox" name="timee[]" value="r1i1p1_rcp85_2006_2099" id="r1i1p1_rcp85_2006_2099_hydromonthly" class="hydromonthly"/>	
					 <label for="ri1p1i_rcp85_2006_2099_hydromonthly">future RCP8.5 (2006-2099 ) <br /></label><br/>
				</div>
				<div class="agg" style="display:none">
					<br>
					 <span style="color:red">Files aggregated for all years in a scenario can not be used for the full domain.</span> <br />
				</div>
		      </div>
		    </div>
		  </div>
	       </td>
		</tr>
	</div>
        <!--------------------->
	</table>
	</div> <!--end accordion-->
	</td>
	<td width="60%">
		<table class="table table-striped table-bordered" width="100%">
			<tr>
				<td>
					<h3>Domain:</h3>
				</td>
				<td>
					<h3>Download Format:</h3>
				</td>
			</tr>
			<tr>
				<td width="50%">
					<select name="domainn" id="domainn">
						<option value="fulldomain" id="fulldomain" selected >Full Domain Gridded Data</option>
						<!--<option value="huc8" class="hydro" style="display:none">Full Domain HUC 8 Averages</option>-->
						<option value="rectangle" id="rectangle" class="rectangleoption"  >Rectangular Subset of Gridded Data</option>
						<option value="point" id="point" class="pointoption" >Point Location</option>
					</select>
					<!--------------------------------------->
					<!--        RECTANGLE                     -->
					<!--------------------------------------->
					<div class="rectangle" style="display:none">
						<table><tr><td>
						 <img src="images/blackrectangle.png"></td>
						<td>
						NE corner:<input id="NELat" name="NELat" value="45.00" size=8 />N, 
						<input id="NELong" name="NELong" value="-95.00" size=8>E<br> 
						SW corner:<input id="SWLat" name="SWLat" value="40.00" size=8/>N, <input id="SWLong" name="SWLong" value="-111.00" size=8/>E<br>
						</td></tr></table>
					</div>		
					<!--------------------------------------->
					<!--        POINT                      -->
					<!--------------------------------------->
					<div class="point" style="display:none">
						<img src="http://www.google.com/mapfiles/ms/micons/red.png">Point Location:
						<input id="pointLat" name="pointLat" value="42" size=8 />N, 
						<input id="pointLong" name="pointLong" value="-111" size=8>E<br>
					</div>
				</td>
				<td width="555550%">
					 <select name="extensionn">
							<option value="netcdf" selected>netCDF data downloads</option>
							<!--<option value="csv" class="csvoption" style="display:none">Comma Separated Value (CSV) data downloads </option>-->
					 </select>
					<br>
					 <select name="formatt">
						 <div class="url">
                         	                       <option value="url" selected class="url">files of URLs for downloading data</option>
                                                 </div>
                                                 <div class="wgetoptions">
                                                      <option value="wget" class="wgetoptions">bash script of 'wget's for downloading data</option>
                                                      <option value="curl" class="wgetoptions">bash script of 'cURL's for downloading data</option>
                                                  </div>
							<!--<option value="opendap" class="opendapoption" style="display:none">list of opendap URL's for accessing data in software</option>-->
					 </select>
				</td>
			</tr>
		</table>
		<!--------------------------------------->
		<!--        GOOGLE MAP                 -->
		<!--------------------------------------->
		<div id="map_canvas"></div>
		Domain overlays courtesy of Wenglong Feng, UI
		<!--------------------------------------->
	</td>
	</tr>
</table>
</form>
</div>
<iframe style="display:none" name="form_target" name="form_target" style="width:5in; height: 5in"></iframe>
