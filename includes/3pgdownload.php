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
                        <input type="radio" name ="formatt[]" value="url" checked="checked" />file of URLs for downloading files<br />
                        <input type="radio" name ="formatt[]" value="wget" />bash script of 'wget's for downloading files<br />
                        <input type="radio" name ="formatt[]" value="curl" />bash script of 'cURL's for downloading files<br />
<br />


 			<b>Select Time Frequency Scale:</b><br />
			<div class="freqq" style="text-align:Left">
				<input type="radio" name ="freqq[]" id="decadal" value="decadal" checked="checked"/>decadal
			</div> 
<br>
			<b>Select Variable(s):</b><br />
			<div class="varr" style="text-align:Left">
				<input type="checkbox" name ="varr[]" value="LAI" />LAI (Leaf Area Index of 50 yr old Conifer Forest)   <br />
				<input type="checkbox" name ="varr[]" value="NPP" />NPP (Net Primary Productiono of 50 yr old Conifer Forest)   <br />
				<input type="checkbox" name ="varr[]" value="WS" />WS (Woody Stem Mass of 50 yr old Conifer Forest)   <br />
				<br />
<br />
			</div>
  <b>Select CMIP5 Model(s):</b>(365-day,1950-2099)  <br>
                        <input type="checkbox" name="model[]" value="GFDL-ESM2M_rcp45" />GFDL-ESM2M (USA) RCP4.5         <br />
                        <input type="checkbox" name="model[]" value="HadGEM2-ES_rcp85" />HadGEM2-ES365 (United Kingdom) <span style="color:red">*</span> RCP8.5<br /> 
                        <input type="checkbox" name="model[]" value="MIROC5_rcp85" />MIROC5 (Japan) RCP8.5<br />
</td> 
	</tr>
    </table>
                        <center><input type="submit" value="Download File" name="submit" /> <small></center>
</form>
<iframe style="display:none" name="form_target" name="form_target" style="width:5in; height: 5in"></iframe>
