<br><br>
<form id="form_div_hydro">
<span style="color:red">UNDER CONSTRUCTION - Still awaiting projection maps for this section</span>
<table width="100%" id="table" class="table table-striped table-bordered" >
	<tr>
			<td valign="top">
				<div class="vegproductt"><b>Product:</b><br>
					<select name="productt" id="vegproducttveg">
						<option value="vic" selected >VIC</option>
						<!--<option value="ulm" >ULM</option>-->
					</select>
				</div>
			</td>
			  <td>
                                <div class="scenn"><b>Variable:</b><br>
                                        <select name="varr" id="varr">
                                                <option value="SOIL_MOIST1" selected>SOIL_MOIST1(Soil Moisture in Shallowest Soil Layer)</option>
                                                <option value="SWE" selected>SWE (Snow Water Equivalent)</option>
                                        </select>
                                </div>
                        </td>
  			<td>
                                <div class="modell"><b>Model/Scenarios:</b><br>
                                        <select name="modell" id="modell">
						<option value="">bcc-csm1-1-m </option>
						<option value="">CanESM2 </option>
						<option value="">CCSM4 </option>
						<option value="">CNRM-CM5 </option>
						<option value="">CSIRO-Mk3-6-0 </option>
						<option value="">IPSL-CM5A-MR </option>
						<option value="">HadGEM2-CC365 </option>
						<option value="">HadGEM2-ES365 </option>
						<option value="">MIROC5 </option>
						<option value="">NorESM1-M </option>
					</select>
				</div>
			</td>

			<td valign="top">
				<div class="timee"><b>Time Period:</b><br>
					<select name="timee" id="timee">
						<option value="2040_2069" selected>2040-2069</option>
						<option value="2070_2099">2070-2099</option>
					</select>
				</div>
			</td>
		</table>
</table>

<br />
</form>
<!--
<p style="text-align:center"><input type="button" value="DISPLAY MAP" onClick="get_3pg_map()"/></p>-->
<?php
        include('includes/figurearea_1_vic.php');
?>



<iframe style="display:none" name="form_target" name="form_target" style="width:6in; height: 6in"></iframe>

