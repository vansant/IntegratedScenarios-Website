<br>	<form action="myjs/get_urldownload.php" target="form_target" method="post">
   <table border="0" width="100%">
	<tr>
	     <td style="display:none">
 <b>Select Downscale Product(s):</b><br />
                     <input type="checkbox" name="productt[]" value="macav1metdata" checked="checked"/>MACAv1-METDATA<br />
        <br />
</td>
<td>
 <b>Select Format: </b><br />
                        <input type="radio" name ="formatt[]" value="url" checked="checked"/>file of URLs for downloading files<br />
                        <input type="radio" name ="formatt[]" value="wget" />bash script of 'wget's for downloading files<br />
                        <input type="radio" name ="formatt[]" value="curl" />bash script of 'cURL's for downloading files<br />
<br />

 			<b>Select Time Frequency Scale:</b><br />
			<div class="freqq" style="text-align:Left">
				<input type="radio" name ="freqq[]" checked="checked" value="monthly" id="monthly" class="monthly"/>monthly 
				<br /><br /> 
			</div>

<br>
			<b>Select Downscaled or <span style="color:blue"> Derived</span> Variable(s):</b><br />
			<div class="varr" style="text-align:Left">
				<input type="checkbox" name ="varr[]" value="dps" id="dps" class="notdaily"/>
				<span style="color:blue">dps (Near-Surface Dew Point Temperature)</span><br />

				<input type="checkbox" name ="varr[]" value="huss" />huss (Near-Surface Specific Humidity)   <br />
				<input type="checkbox" name ="varr[]" value="pr" />pr (Precipitation) <br />

				<input type="checkbox" name ="varr[]" value="rsds" />rsds (Surface Downwelling Solar Radiation)<br />
				<input type="checkbox" name ="varr[]" value="tasmin" />tasmin (Minimum Near-Surface Air Temperature) 
					 <br />
				<input type="checkbox" name ="varr[]" value="tasmax" />tasmax (Maximum Near-Surface Air Temperature) 
	 			 <br />			
				<input type="checkbox" name ="varr[]" value="uas" />uas (Eastward Component of Wind at 10 m)<br />
				<input type="checkbox" name ="varr[]" value="vas" />vas (Northward Component of Wind at 10 m)<br />
				<input type="checkbox" name ="varr[]" value="was" id="was" class="notdaily"/>
				<label for="was" class="notdaily"><span style="color:blue">was (Near-Surface Wind Speed) </span><br /></label><br />
			</div>
<br>
  <b>Select CMIP5 Model(s):</b> <button class="selectall" data-name="model">Select All</button>
<br>
(365-day,1950-2100 unless noted)<br>
                        <input type="checkbox" name="model[]" value="bcc-csm1-1" />bcc-csm1-1 (China) <span style="color:red">1950-2099</span>    <br />
                        <input type="checkbox" name="model[]" value="bcc-csm1-1-m" />bcc-csm1-1-m  (China)<br />
                        <input type="checkbox" name="model[]" value="BNU-ESM" /><span style="color:purple">BNU-ESM**</span>  (China)          <br />
                        <input type="checkbox" name="model[]" value="CanESM2" />CanESM2  (Canada)          <br />
                        <input type="checkbox" name="model[]" value="CCSM4" />CCSM4  (USA)<span style="color:blue"> No rhsmin/max. </span><span style="color:purple">No was/uas/vas.</span><br />
                        <input type="checkbox" name="model[]" value="CNRM-CM5" />CNRM-CM5 (France)          <br />
                        <input type="checkbox" name="model[]" value="CSIRO-Mk3-6-0" />CSIRO-Mk3-6-0(Austrailia)<br />
                        <input type="checkbox" name="model[]" value="GFDL-ESM2G" />GFDL-ESM2G (USA)          <br />
                        <input type="checkbox" name="model[]" value="GFDL-ESM2M" />GFDL-ESM2M (USA)          <br />
                       <input type="checkbox" name="model[]" value="HadGEM2-CC" />HadGEM2-CC (United Kingdom) <span style="color:green">*1950-2099</span> <br />
                        <input type="checkbox" name="model[]" value="HadGEM2-ES" />HadGEM2-ES (United Kingdom) <span style="color:green">*1950-2099.</span><br /> 
<span style="color:magenta">rsds for RCP4.5 recalled</span><br>
                       <input type="checkbox" name="model[]" value="HadGEM2-CC365" />HadGEM2-CC365 (United Kingdom) <span style="color:red">*1950-2099</span> <br />
                        <input type="checkbox" name="model[]" value="HadGEM2-ES365" />HadGEM2-ES365(United Kingdom) <span style="color:red">*1950-2099</span><br /> 
                        <input type="checkbox" name="model[]" value="inmcm4" />inmcm4 (Russia)          <br />
                        <input type="checkbox" name="model[]" value="IPSL-CM5A-LR" />IPSL-CM5A-LR  (France)<br />
                        <input type="checkbox" name="model[]" value="IPSL-CM5A-MR" />IPSL-CM5A-MR  (France)<br />
                        <input type="checkbox" name="model[]" value="IPSL-CM5B-LR" />IPSL-CM5B-LR  (France)<br />
                        <input type="checkbox" name="model[]" value="MIROC5" />MIROC5 (Japan)          <br />
                        <input type="checkbox" name="model[]" value="MIROC-ESM" />MIROC-ESM (Japan)          <br />
                        <input type="checkbox" name="model[]" value="MIROC-ESM-CHEM" />MIROC-ESM-CHEM (Japan)          <br />
                        <input type="checkbox" name="model[]" value="MRI-CGCM3" />MRI-CGCM3 (Japan)          <br />
                        <input type="checkbox" name="model[]" value="NorESM1-M" />NorESM1-M  (Norway)<span style="color:blue"> No rhsmin/max</span><br />
</td> 
<td style="valign:top">
 <img src="images/domain/MACAv1-METDATA_domain.jpg" height="200px"><br>
         <b>Select CMIP5 Scenario(s) and Time Period(s):</b><br />
		<u>Historical</u><br>
                        <input type="checkbox" name="timee[]" value="r1i1p1_historical_1950_1959" />historical (1950-1959)<br />
                        <input type="checkbox" name="timee[]" value="r1i1p1_historical_1960_1969" />historical (1960-1969)<br />
                        <input type="checkbox" name="timee[]" value="r1i1p1_historical_1970_1979" />historical (1970-1979)<br />
                        <input type="checkbox" name="timee[]" value="r1i1p1_historical_1980_1989" />historical (1980-1989)<br />
                        <input type="checkbox" name="timee[]" value="r1i1p1_historical_1990_1999" />historical (1980-1999)<br />
                        <input type="checkbox" name="timee[]" value="r1i1p1_historical_2000_2005" />historical (2000-2005)<br /><br />
		<u>RCP 4.5</u><br>
                        <input type="checkbox" name="timee[]" value="r1i1p1_rcp45_2006_2015" />future rcp 45 (2006-2015)<br />
                        <input type="checkbox" name="timee[]" value="r1i1p1_rcp45_2016_2025" />future rcp 45 (2016-2025)<br />
                        <input type="checkbox" name="timee[]" value="r1i1p1_rcp45_2026_2035" />future rcp 45 (2026-2035)<br />
                        <input type="checkbox" name="timee[]" value="r1i1p1_rcp45_2036_2045" />future rcp 45 (2036-2045)<br />
                        <input type="checkbox" name="timee[]" value="r1i1p1_rcp45_2046_2055" />future rcp 45 (2046-2055)<br />
                        <input type="checkbox" name="timee[]" value="r1i1p1_rcp45_2056_2065" />future rcp 45 (2056-2065)<br />
                        <input type="checkbox" name="timee[]" value="r1i1p1_rcp45_2066_2075" />future rcp 45 (2066-2075)<br />
                        <input type="checkbox" name="timee[]" value="r1i1p1_rcp45_2076_2085" />future rcp 45 (2076-2085)<br />
                        <input type="checkbox" name="timee[]" value="r1i1p1_rcp45_2086_2095" />future rcp 45 (2086-2095)<br />
                        <input type="checkbox" name="timee[]" value="r1i1p1_rcp45_2096_2100" />future rcp 45 (2096-2100)<br /> or (2096-2099 for HadGEM2s)<br /><br />
		<u>RCP 8.5</u><br>
                        <input type="checkbox" name="timee[]" value="r1i1p1_rcp85_2006_2015" />future rcp 85 (2006-2015)<br />
                        <input type="checkbox" name="timee[]" value="r1i1p1_rcp85_2016_2025" />future rcp 85 (2016-2025)<br />
                        <input type="checkbox" name="timee[]" value="r1i1p1_rcp85_2026_2035" />future rcp 85 (2026-2035)<br />
                        <input type="checkbox" name="timee[]" value="r1i1p1_rcp85_2036_2045" />future rcp 85 (2036-2045)<br />
                        <input type="checkbox" name="timee[]" value="r1i1p1_rcp85_2046_2055" />future rcp 85 (2046-2055)<br />
                        <input type="checkbox" name="timee[]" value="r1i1p1_rcp85_2056_2065" />future rcp 85 (2056-2065)<br />
                        <input type="checkbox" name="timee[]" value="r1i1p1_rcp85_2066_2075" />future rcp 85 (2066-2075)<br />
                        <input type="checkbox" name="timee[]" value="r1i1p1_rcp85_2076_2085" />future rcp 85 (2076-2085)<br />
                        <input type="checkbox" name="timee[]" value="r1i1p1_rcp85_2086_2095" />future rcp 85 (2086-2095)<br />
                        <input type="checkbox" name="timee[]" value="r1i1p1_rcp85_2096_2100" />future rcp 85 (2096-2100) <br />or (2096-2099 for HadGEM2s)<br />

	   </td>
	</tr>
    </table>
                        <center><input type="submit" value="Download File" name="submit" /> <small></center>
 <p style="text-align:center"><a href="http://lists.oregonstate.edu/mailman/listinfo/macacmip5">Join mailing list for data updates</a></p>
                      <p style="text-align:right"><a href="mailto:khegewisch@uidaho.edu?subject=MACA%20Webpage">Having problems?</a></small></p>
<span style="color:purple">No wind available for CCSM4. See MACAv2-METDATA instead.</span><br>
<span style="color:magenta">HadGEM2-ES rsds RCP4.5 recalled. See MACAv2-METDATA instead.</span><br>
<span style="color:green">* indicates 360-day outputs were downscaled</span><br>
<span style="color:red">* indicates original 360-day outputs were interpolated to 365-day outputs before downscaling</span>
<span style="color:purple">BNU-ESM**</span>calls attention to the recall of BNU-ESM's precipitation data. See  <a href="http://lists.oregonstate.edu/mailman/private/macacmip5/2014-May.txt">archive</a>.
        <br /><br />


	</form>
<iframe style="display:none" name="form_target" name="form_target" style="width:5in; height: 5in"></iframe>


