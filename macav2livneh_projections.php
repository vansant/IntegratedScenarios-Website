<br><br>
<form id="form_div_climate">
<table width="100%" id="table" class="table table-striped table-bordered" >
	<tr>
			<td valign="top">
				<div class="optionn"><b>Product:</b><br>
					   <select name="producttmacav2" id="producttmacav2">
						<option value="macav2livneh" selected >MACAv2-LIVNEH</option>
						<option value="RAW" >RAW GCM Data</option>
					</select>
				</div>
			</td>
			   <td>
                                <div class="varr1"><b>Variable:</b><br>
                                         <select name="varrmacav2" id="varrmacav2">
                                                <option value="TMAX" selected>Maximum Temperature</option>
                                                <option value="TMIN">Minimum Temperature</option>
                                                <option value="DTR">Diurnal Temperature Range</option>
                                                <option value="PPT">Precipitation</option>
                                                <option value="SRAD">Downward Shortwave Radiation</option>
                                                <option value="HUSS">Specific Humidity</option>
                                                <option value="WAS">Wind Speed</option>
                                        </select>
                                </div>
                        </td>
			<td valign="top">
				 <div class="seass"><b>Season:</b><br>
				       <select name="seassmacav2" id="seassmacav2">
						<option value="DJF" selected>Dec-Jan-Feb</option>
						<option value="MAM">Mar-Apr-May</option>
						<option value="JJA">Jun-July-Aug</option>
						<option value="SON">Sept-Oct-Nov</option>
						<option value="ANN">Annual</option>
					</select>
				  </div>
			</td>
			<td valign="top">
				<div class="periodd"><b>Time and Experiment:</b><br>
					 <select name="perioddmacav2" id="perioddmacav2">	
						<option value="2040-2069_RCP4.5" selected>2040-2069 (RCP4.5)</option>
						<option value="2040-2069_RCP8.5">2040-2069 (RCP8.5)</option>
						<option value="2070-2099_RCP4.5">2070-2099 (RCP4.5)</option>
						<option value="2070-2099_RCP8.5">2070-2099 (RCP8.5)</option>
					</select>
				</div>
			</td>
			 <td valign="top">
                                <div class="optionn"><b>Options:</b><br>
                                        <select name="optionnmacav2" id="optionnmacav2">
                                                <option value="0" selected>All Models</option>
                                                <option value="MM">Multi-Model <br>Mean/Variance/Agreement</option>
                                        </select>
                                </div>
                        </td>
  </tr> 
</table>

<br />
</form>
<!-- get_projections_map function is in myjs/get_projections_map.php -->
<p style="text-align:center"><input type="button" value="DISPLAY MAP" onClick="get_projections_map()"/></p>


<!--<p style="text-align:center">Click Image to View Full Size</p>-->
<?php
        include('includes/figurearea_1_climate.php');
?>

<p style="text-align:left">
Changes were calculated as the difference between the future and historical(1971-2000) averages. 
Temperature and relative humidity were calculated using monthly averages of daily minimum and maximum values. 
Precipitation was calculated from monthly precipitation values aggregated from daily. 
Wind and solar radiation were calculated from daily values aggregated to monthly. The middle panel of the multi-model plot show that standard deviation of the projected changes across models.</p>
<iframe style="display:none" name="form_target" name="form_target" style="width:6in; height: 6in"></iframe>

