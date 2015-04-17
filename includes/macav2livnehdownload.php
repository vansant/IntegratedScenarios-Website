<br><form action="myjs/get_urldownload.php" target="form_target" method="post">
   <table border="0" width="100%">
	<tr>
	     <td style="display:none">
 		<b>Select Downscale Product(s):</b><br />
                        <input type="checkbox" name="productt[]" value="macav2livneh" checked="checked"/>MACAv2-LIVNEH<br />
        	<br />
		</td>
		<td>

			 <b>Select Format: </b><br />
                        <input type="radio" name ="formatt[]" value="url" checked="checked" />file of URLs for downloading files<br />
                        <input type="radio" name ="formatt[]" value="wget" />bash script of 'wget's for downloading files<br />
                        <input type="radio" name ="formatt[]" value="curl" />bash script of 'cURL's for downloading files<br />
<br />


 			<b>Select Time Frequency Scale:</b><br />
			<div class="freqq" style="text-align:Left">
				<input type="radio" name ="freqq[]" id="daily" value="_daily" class="daily" checked="checked"/>daily
				<br />
				<input type="radio" name ="freqq[]" id="monthly" value="_monthly" class="monthly" />monthly
			</div> 
<br>
			<b>Select Downscaled or <span style="color:blue"> Derived</span> Variable(s):</b><br />
			<div class="varr" style="text-align:Left">
				<input type="checkbox" name ="varr[]" value="huss" />huss (Near-Surface Specific Humidity)   <br />
				<input type="checkbox" name ="varr[]" value="pr" />pr (Precipitation) <br />

				<input type="checkbox" name ="varr[]" value="rsds" />rsds (Surface Downwelling Solar Radiation)<br />
				<input type="checkbox" name ="varr[]" value="tasmin" />tasmin (Minimum Near-Surface Air Temperature) 
					 <br />
				<input type="checkbox" name ="varr[]" value="tasmax" />tasmax (Maximum Near-Surface Air Temperature) 
	 			 <br />			
				<input type="checkbox" name ="varr[]" value="was" id="was" class="notdaily"/>
				<label for="was" class="notdaily">was (Near-Surface Wind Speed) <br /></label><br />
				<br />
<br />
			</div>
  <b>Select CMIP5 Model(s):</b>(365-day,1950-2099)  <br>
                        <input type="checkbox" name="model[]" value="bcc-csm1-1" />bcc-csm1-1 (China) <br />
                        <input type="checkbox" name="model[]" value="bcc-csm1-1-m" />bcc-csm1-1-m  (China)<br />
                        <input type="checkbox" name="model[]" value="BNU-ESM" /><span style="color:purple">BNU-ESM**</span>  (China)          <br />
                        <input type="checkbox" name="model[]" value="CanESM2" />CanESM2  (Canada)          <br />
                        <input type="checkbox" name="model[]" value="CCSM4" />CCSM4  (USA)<br />
                        <input type="checkbox" name="model[]" value="CNRM-CM5" />CNRM-CM5 (France)          <br />
                        <input type="checkbox" name="model[]" value="CSIRO-Mk3-6-0" />CSIRO-Mk3-6-0(Austrailia)<br />
                        <input type="checkbox" name="model[]" value="GFDL-ESM2G" />GFDL-ESM2G (USA)          <br />
                        <input type="checkbox" name="model[]" value="GFDL-ESM2M" />GFDL-ESM2M (USA)          <br />
                       <input type="checkbox" name="model[]" value="HadGEM2-CC365" />HadGEM2-CC365 (United Kingdom) <span style="color:red">*</span> <br />
                        <input type="checkbox" name="model[]" value="HadGEM2-ES365" />HadGEM2-ES365(United Kingdom) <span style="color:red">*</span><br /> 
                        <input type="checkbox" name="model[]" value="inmcm4" />inmcm4 (Russia)          <br />
                        <input type="checkbox" name="model[]" value="IPSL-CM5A-LR" />IPSL-CM5A-LR  (France)<br />
                        <input type="checkbox" name="model[]" value="IPSL-CM5A-MR" />IPSL-CM5A-MR  (France)<br />
                        <input type="checkbox" name="model[]" value="IPSL-CM5B-LR" />IPSL-CM5B-LR  (France)<br />
                        <input type="checkbox" name="model[]" value="MIROC5" />MIROC5 (Japan)          <br />
                        <input type="checkbox" name="model[]" value="MIROC-ESM" />MIROC-ESM (Japan)          <br />
                        <input type="checkbox" name="model[]" value="MIROC-ESM-CHEM" />MIROC-ESM-CHEM (Japan)          <br />
                        <input type="checkbox" name="model[]" value="MRI-CGCM3" />MRI-CGCM3 (Japan)          <br />
                        <input type="checkbox" name="model[]" value="NorESM1-M" />NorESM1-M  (Norway)<br />
</td> 
<td style="valign:top">
 <img src="images/domain/MACAv2-LIVNEH_domain.png" height="200px"><br>
         <b>Select CMIP5 Scenario(s) and Time Period(s):</b><br />
			<u>Historical</u><br>
                        <input type="checkbox" name="timee[]" value="r1i1p1_historical_1950_1969" />historical (1950-1969)<br />
                        <input type="checkbox" name="timee[]" value="r1i1p1_historical_1970_1989" />historical (1970-1989)<br />
                        <input type="checkbox" name="timee[]" value="r1i1p1_historical_1990_2005" />historical (1990-2005)<br /><br />
			<u>RCP 4.5</u><br>
                        <input type="checkbox" name="timee[]" value="r1i1p1_rcp45_2006_2025" />future rcp 45 (2006-2025)<br />
                        <input type="checkbox" name="timee[]" value="r1i1p1_rcp45_2026_2045" />future rcp 45 (2026-2045)<br />
                        <input type="checkbox" name="timee[]" value="r1i1p1_rcp45_2046_2065" />future rcp 45 (2046-2065)<br />
                        <input type="checkbox" name="timee[]" value="r1i1p1_rcp45_2066_2085" />future rcp 45 (2066-2085)<br />
                        <input type="checkbox" name="timee[]" value="r1i1p1_rcp45_2086_2099" />future rcp 45 (2086-2099)<br /> <br />
			<u>RCP 8.5</u><br>
                        <input type="checkbox" name="timee[]" value="r1i1p1_rcp85_2006_2025" />future rcp 85 (2006-2025)<br />
                        <input type="checkbox" name="timee[]" value="r1i1p1_rcp85_2026_2045" />future rcp 85 (2026-2045)<br />
                        <input type="checkbox" name="timee[]" value="r1i1p1_rcp85_2046_2065" />future rcp 85 (2046-2065)<br />
                        <input type="checkbox" name="timee[]" value="r1i1p1_rcp85_2066_2085" />future rcp 85 (2066-2085)<br />
                        <input type="checkbox" name="timee[]" value="r1i1p1_rcp85_2086_2099" />future rcp 85 (2086-2099)<br />

	   </td>
	</tr>
    </table>
<span style="color:red">*</span> indicates original 360-day outputs were interpolated to 365-day outputs before downscaling
<br>
<span style="color:purple">BNU-ESM**</span>calls attention to the recall of BNU-ESM's precipitation data. See  <a href="http://lists.oregonstate.edu/mailman/private/macacmip5/2014-May.txt">archive</a>.
	<br /><br />
                        <center><input type="submit" value="Download File" name="submit" /> <small></center>
 <p style="text-align:center"><a href="http://lists.oregonstate.edu/mailman/listinfo/macacmip5">Join mailing list for data updates</a></p>
                        <p style="text-align:right"><a href="mailto:khegewisch@uidaho.edu?subject=MACA%20Webpage">Having problems?</a></small></p>
</form>
<iframe style="display:none" name="form_target" name="form_target" style="width:5in; height: 5in"></iframe>
