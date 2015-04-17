<br>
<form action="myjs/get_hydro_urldownload.php" target="form_target" method="post">
   <table border="0" width="100%">
	<tr>
	     <td style="display:none">
 		<b>Select Hydrology Product(s):</b><br />
                        <input type="checkbox" name="productt[]" value="ulm" checked="checked"/>ULM<br />
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
