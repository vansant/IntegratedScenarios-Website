<br><form action="myjs/get_hydro_urldownload.php" target="form_target" method="post">
   <table border="0" width="100%">
	<tr>
	     <td style="display:none">
 		<b>Select Hydrology Product(s):</b><br />
                        <input type="checkbox" name="productt[]" value="vic" checked="checked"/>VIC<br />
        	<br />
		</td>
		<td>

			 <b>Select Format: </b><br />
                        <input type="radio" name ="formatt[]" value="url" checked="checked" />file of URLs for downloading files<br />
                        <input type="radio" name ="formatt[]" value="wget" />bash script of 'wget's for downloading files<br />
                        <input type="radio" name ="formatt[]" value="curl" />bash script of 'cURL's for downloading files<br />
<br />

		    <b>Select Spatial Resolution:</b><br />
                        <div class="spatt" style="text-align:Left">
                                <input type="radio" name ="spatt[]" id="grid" value="grid" class="grid" checked="checked"/>1/16-deg grid
                                <br />
                                <input type="radio" name ="spatt[]" id="huc8" value="huc8" class="huc8" />huc8 averages
                        </div>
<br>

 			<b>Select Time Frequency Scale:</b><br />
			<div class="freqq" style="text-align:Left">
				<input type="radio" name ="freqq[]" id="daily" value="_daily" class="daily" checked="checked"/>daily
				<br />
				<input type="radio" name ="freqq[]" id="monthly" value="_monthly" class="monthly" />monthly
			</div> 
<br>
			<b>Select Variable(s):</b><br />
			<div class="varr" style="text-align:Left">
				<input type="checkbox" name ="varr[]" value="BASEFLOW" />BASEFLOW (Baseflow Out of Bottom Layer)  <br />
				<input type="checkbox" name ="varr[]" value="EVAP" />EVAP (Total Net Evaporation)  <br />
				<input type="checkbox" name ="varr[]" value="GRND_FLUX" />GRND_FLUX (Net Heat Flux Into Ground)  <br />
				<input type="checkbox" name ="varr[]" value="IN_LONG" />IN_LONG (Incoming Longwave Radiation)  <br />
				<input type="checkbox" name ="varr[]" value="LATENT" />LATENT (Net Upward Latent Heat Flux)  <br />
				<input type="checkbox" name ="varr[]" value="LATENT_SUB" />LATENT_SUB (Net Upward Latent Heat Flux from Sublimation)  <br />
				<input type="checkbox" name ="varr[]" value="NET_LONG" />NET_LONG (Net Downward Longwave Radiation Flux)  <br />
				<input type="checkbox" name ="varr[]" value="NET_SHORT" />NET_SHORT (Net Downward Shortwave Radiation Flux)  <br />
				<input type="checkbox" name ="varr[]" value="PREC" />PREC (Incoming Precipitation)  <br />
				<input type="checkbox" name ="varr[]" value="QAIR" />QAIR (Specific Humidity)  <br />
				<input type="checkbox" name ="varr[]" value="R_NET" />R_NET (Net Radiation)  <br />
				<input type="checkbox" name ="varr[]" value="RUNOFF" />RUNOFF (Surface Runoff)  <br />
				<input type="checkbox" name ="varr[]" value="SENSIBLE" />SENSIBLE (Net Upward Sensible Heat Flux)  <br />
				<input type="checkbox" name ="varr[]" value="SHORTWAVE" />SHORTWAVE (Incoming Shortwave Radiation)  <br />
				<input type="checkbox" name ="varr[]" value="SOIL_MOIST1" />SOIL_MOIST1 (Soil Moisture for Shallowest Soil Layer 1)  <br />
				<input type="checkbox" name ="varr[]" value="SOIL_MOIST2" />SOIL_MOIST2 (Soil Moisture for Middle Soil Layer 2)  <br />
				<input type="checkbox" name ="varr[]" value="SOIL_MOIST3" />SOIL_MOIST3 (Soil Moisture for Deepest Soil Layer 3)  <br />
				<input type="checkbox" name ="varr[]" value="SOIL_TEMP1" />SOIL_TEMP1 (Soil Temperature for Shallowest Soil Layer 1)  <br />
				<input type="checkbox" name ="varr[]" value="SOIL_TEMP2" />SOIL_TEMP2 (Soil Temperature for Middle Soil Layer 2)  <br />
				<input type="checkbox" name ="varr[]" value="SOIL_TEMP3" />SOIL_TEMP3 (Soil Temperature for Deepest Soil Layer 3)  <br />
				<input type="checkbox" name ="varr[]" value="SURF_TEMP" />SURF_TEMP (Average Surface Temperature)  <br />
				<input type="checkbox" name ="varr[]" value="SWE" />SWE (Snow Water Equivalent)  <br />
				<br />

         		<b>Select CMIP5 Scenario(s):</b><br />
                        <input type="checkbox" name="timee[]" value="historical_r1i1p1_1950_2005" />historical (1950-2005)<br />
                        <input type="checkbox" name="timee[]" value="rcp45_r1i1p1_2006_2099" />future rcp 45 (2006-2099)<br />
                        <input type="checkbox" name="timee[]" value="rcp85_r1i1p1_2006_2099" />future rcp 85 (2006-2099)<br />

			</div>
</td> 
<td>
  <b>Select CMIP5 Model(s):</b>(365-day,1950-2099)  <br>
                        <input type="checkbox" name="model[]" value="bcc-csm1-1-m" />bcc-csm1-1-m  (China)<br />
                        <input type="checkbox" name="model[]" value="CanESM2" />CanESM2  (Canada)          <br />
                        <input type="checkbox" name="model[]" value="CCSM4" />CCSM4  (USA)<br />
                        <input type="checkbox" name="model[]" value="CNRM-CM5" />CNRM-CM5 (France)          <br />
                        <input type="checkbox" name="model[]" value="CSIRO-Mk3-6-0" />CSIRO-Mk3-6-0(Austrailia)<br />
                       <input type="checkbox" name="model[]" value="HadGEM2-CC365" />HadGEM2-CC365 (United Kingdom) <span style="color:red">*</span> <br />
                        <input type="checkbox" name="model[]" value="HadGEM2-ES365" />HadGEM2-ES365(United Kingdom) <span style="color:red">*</span><br /> 
                        <input type="checkbox" name="model[]" value="IPSL-CM5A-MR" />IPSL-CM5A-MR  (France)<br />
                        <input type="checkbox" name="model[]" value="MIROC5" />MIROC5 (Japan)          <br />
                        <input type="checkbox" name="model[]" value="NorESM1-M" />NorESM1-M  (Norway)<br />

	   </td>
	</tr>
    </table>
	<br /><br />
                        <center><input type="submit" value="Download File" name="submit" /> <small></center>
 <p style="text-align:center"><a href="http://lists.oregonstate.edu/mailman/listinfo/macacmip5">Join mailing list for data updates</a></p>
                        <p style="text-align:right"><a href="mailto:khegewisch@uidaho.edu?subject=MACA%20Webpage">Having problems?</a></small></p>
</form>
<iframe style="display:none" name="form_target" name="form_target" style="width:5in; height: 5in"></iframe>
