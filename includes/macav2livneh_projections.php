<form id="form_div">
Visualize projected changes in different variables across the region for different time period, experiments and seasons. For convenience we also show the projected changes of the original raw GCM output. MACA aims to translate changes in the GCM experiments between future and historical runs. <br><br>
<b>Select variables in each box to visualize spatial changes projected. </b>
	 <br /><br />
	<table border="1" width="110%">
	<tr >
		<td valign="top">
			<table border="0" width="110%">
				<tr>
                                        <td valign="top">
                                                <p style="text-align:center;font-size: medium;"><b>Product</b></p>
                                                <p style="text-align:center">
                                                <div class="optionn">
                                                        <u>Select Product:</u><br />
                                                        <input type="radio" name ="productt"  value="MACAv2-LIVNEH" checked="checked"/>MACAv2-LIVNEH<br />
                                                </div>
                                                </p>
                                        </td>
                                </tr>

				<tr>
                                        <td valign="top">
						<p style="text-align:center;font-size: medium;"><b>Season</b></p>
						<p style="text-align:center">
							<u>Select Season:</u><br />
							<div class="seass" style="text-align:Left">
								<input type="radio" name ="seass" value="DJF" class="DJF" id="DJF" checked="checked"/> 
									Dec-Feb <br />
								<input type="radio" name ="seass" value="MAM" class="MAM" id="MAM"/> 
									Mar-May <br />
								<input type="radio" name ="seass" value="JJA" class="JJA" id="JJA"/> 
									Jun-Aug <br />
								<input type="radio" name ="seass" value="SON" class="SON" id="SON"/> 
									Sep-Nov <br />
								<input type="radio" name ="seass" value="ANN" class="ANN" id="ANN"/>
									Annual <br />
							</div>
						</p>
					</td>
				</tr>
			</table>
		</td>

		<td valign="top">
			<table border="0" width="110%">
				<tr>
                                        <td valign="top">
                                                <p style="text-align:center;font-size: medium;"><b>Option</b></p>
                                                <p style="text-align:center">
                                                <div class="optionn">
                                                        <u>Select Option:</u><br />
                                                        <input type="radio" name ="optionn"  value="0" />All Models<br />
                                                        <input type="radio" name ="optionn"  value="MM" checked="checked" />Multi-Model <br>Mean/Variance/Agreement <br />
                                                </div>
                                                </p>
                                        </td>
                                </tr>
                                <!--<tr><td><hr width="60%"></td></tr> -->
				<tr>
					<td>
						<p style="text-align:center;font-size: medium;">
						<b>Time and Experiment</b></p>
						<p style="text-align:center">
							<div class="periodd">
							<u>Select Time Period:</u><br />
							<input type="radio" name ="periodd" value="2040-2069_RCP4.5"  checked="checked"
							id="2040-2069_RCP4.5" class="2040-2069_RCP4.5"/>RCP4.5 2040-2069 <br />
							<input type="radio" name ="periodd" value="2040-2069_RCP8.5" 
							id="2040-2069_RCP8.5"  />RCP8.5 2040-2069 <br />
							<input type="radio" name ="periodd" value="2070-2099_RCP4.5" 
							id="2070-2099_RCP4.5"/>RCP4.5 2070-2099 <br />
							<input type="radio" name ="periodd" value="2070-2099_RCP8.5" 
							id="2070-2099_RCP8.5" />RCP8.5 2070-2099 <br />
							</div>
						</p> 
					</td>
				</tr>
			</table>
		</td>
		  <td>
			 <table border="0" width="100%">
			<tr><p style="text-align:center;font-size: medium;"><b>Variable</b></p>
				<td>
					<u>Select Variable:</u><br /> 
					<div class="varr1">
						<input type="radio" name ="varr1" value="TMAX" id="TMAX" checked="checked"/>
						<label for="TMAX" >Maximum Temperature</label><br />
						<input type="radio" name ="varr1" value="TMIN" id="TMIN"/>
						<label for="TMIN" >Minimum Temperature</label><br />
						<input type="radio" name ="varr1" value="DTR" id="DTR"/>
						<label for="DTR" >Diurnal Temperature Range</label><br />
						<input type="radio" name ="varr1" value="PPT" id="PPT"/>
						<label for="PPT" >Precipitation</label><br />
						<input type="radio" name ="varr1" value="SRAD" id="SRAD"/>
						<label for="SRAD" >Downward Surface Shortwave Radiation</label><br />
						<input type="radio" name ="varr1" value="HUSS" id="HUSS"/>
						<label for="HUSS" >Specific Humidity</label><br />
						<input type="radio" name ="varr1" value="WAS" id="WAS"/>
						<label for="WAS" >Wind Speed</label><br />
					</div>
				</td>
			</tr>  
			</table>
		   </td>  
	  </tr> 
    </table>
    <br />
    </form>
    <!-- get_projections_map function is in myjs/get_projections_map.php -->
    <p style="text-align:center"><input type="button" value="DISPLAY MAP" onClick="get_projections_map()"/></p>
<p style="text-align:center">
Click Images to View Full Size</p>
 
 <table border="0" width="100%" height="100%">
        <tr>
             <td style="text-align:center">
		<p><b>Downscaled MACA Signal</b></p>
			<a href="http://maca.nortwestknowledge.net/images/Maps/MACAv2-LIVNEH/DJF_2040-2069_RCP4.5_TMAX.png" target="_blank"><img id="target_image" src="http://maca.northwestknowledge.net/images/Maps/MACAv2-LIVNEH/DJF_2040-2069_RCP4.5_TMAXMM.png" style="width:600px"/></a>
              </td>
        </tr>
        <tr>
             <td style="text-align:center">
		<p><b>Raw GCM Signal</b></p>
			<a href="http://maca.northwestknowledge.net/images/Maps/RAW/RAW_DJF_2040-2069_RCP4.5_TMAX.png" target="_blank"><img id="target_image_raw" src="http://maca.northwestknowledge.net/images/Maps/RAW/RAW_DJF_2040-2069_RCP4.5_TMAXMM.png" style="width:600px"/></a>
              </td>
        </tr>

</table>

<p style="text-align:left">
Changes were calculated as the difference between the future and historical(1971-2000) averages. 
Temperature and relative humidity were calculated using monthly averages of daily minimum and maximum values. 
Precipitation was calculated from monthly precipitation values aggregated from daily. 
Wind and solar radiation were calculated from daily values aggregated to monthly. The middle panel of the multi-model plot show that standard deviation of the projected changes across models.</p>
<iframe style="display:none" name="form_target" name="form_target" style="width:6in; height: 6in"></iframe>

