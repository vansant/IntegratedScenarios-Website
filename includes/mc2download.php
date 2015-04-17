<br><form action="myjs/get_3pg_urldownload.php" target="form_target" method="post">
   <table border="0" width="100%">
	<tr>
	     <td style="display:none">
 		<b>Select Downscale Product(s):</b><br />
                        <input type="checkbox" name="productt[]" value="3PG" checked="checked"/>3-PG<br />
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
				<input type="radio" name ="freqq[]" id="2036_2065" value="2036_2065" checked="checked"/>2036-2065<br/>
				<input type="radio" name ="freqq[]" id="2071_2100" value="2071_2100"/>2036-2065<br/>
			</div> 
			<br>
 			<b>Select Time Frequency Scale:</b><br />
			<div class="scenn" style="text-align:Left">
				<input type="radio" name ="scenn[]" id="rcp45" value="rcp45" checked="checked"/>RCP 4.5<br/>
				<input type="radio" name ="scenn[]" id="rcp85" value="rcp85" />RCP 8.5<br/>
			</div> 
			<br>
			<b>Select Variable(s):</b><br />
			<div class="varr" style="text-align:Left">
				<input type="checkbox" name ="varr[]" value="veg" checked="checked" />Modal Vegetation Type<br />
				<br />
			</div>
			<br>
			<b>Select CMIP5 Model(s):</b>(365-day,1950-2099)<br>
			<div class="modell" style="text-align:Left">
			 <input type="checkbox" name="model[]" value="bcc-csm1-1" />bcc-csm1-1 (China) <br />
                        <input type="checkbox" name="model[]" value="BNU-ESM" /><span style="color:purple">BNU-ESM**</span>  (China)          <br />
                        <input type="checkbox" name="model[]" value="CanESM2" />CanESM2  (Canada)          <br />
                        <input type="checkbox" name="model[]" value="CNRM-CM5" />CNRM-CM5 (France)          <br />
                        <input type="checkbox" name="model[]" value="CSIRO-Mk3-6-0" />CSIRO-Mk3-6-0(Austrailia)<br />
                        <input type="checkbox" name="model[]" value="GFDL-ESM2M" />GFDL-ESM2M (USA)          <br />
                        <input type="checkbox" name="model[]" value="inmcm4" />inmcm4 (Russia)          <br />
                        <input type="checkbox" name="model[]" value="MIROC5" />MIROC5 (Japan)          <br />
                        <input type="checkbox" name="model[]" value="MIROC-ESM" />MIROC-ESM (Japan)          <br />
                        <input type="checkbox" name="model[]" value="MIROC-ESM-CHEM" />MIROC-ESM-CHEM (Japan)          <br />
                        <input type="checkbox" name="model[]" value="MRI-CGCM3" />MRI-CGCM3 (Japan)          <br />
			</div>
		</td> 
	</tr>
    </table>
                        <center><input type="submit" value="Download File" name="submit" /> <small></center>
</form>
<iframe style="display:none" name="form_target" name="form_target" style="width:5in; height: 5in"></iframe>
