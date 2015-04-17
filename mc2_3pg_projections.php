<br><br>
<form id="form_div_veg">
<table width="100%" id="table" class="table table-striped table-bordered" >
	<tr>
		<td valign="top" width="20%">
			<table>
			<tr>
			<td width="100%">
				<div class="vegproductt"><b>Product:</b><br>
					<select name="vegproductt" id="vegproductt">
						<option value="3pg" selected>3-PG</option>
						<option value="mc2" >MC2</option>
					</select>
				</div><br>
				<div class="exppmc2" style="display:none"><b>MC2 Experiment:</b><br>
					<select name="exppmc2" id="exppmc2">
						<option value="FS" selected>Fire Suppression (FS)</option>
						<option value="NFS" >No Fire Suppression (NFS)</option>
					</select>
				</div>
			</td>
			</tr>
			</table>
		</td>
	 	 <td width="30%">
			<div class="varr3pg" ><b>Variable:</b><br>
				<select name="varr3pg" id="varr3pg">
					<option value="JUNELAI">June LAI (Leaf Area Index) </option>
					<option value="MEANANNUALNPP" selected>Annual NPP (Net Primary Production) </option>
					<option value="JUNEWS">June WS (Woody Stem Mass)</option>
				</select>
			</div>
			<div class="varrmc2" style="display:none"><b>Variable:</b><br>
				<select name="varrmc2" id="varrmc2">
					<option value="ModalVeg">Modal Vegetation Type</option>
					<option value="MeanEcosysCarbon">Ecosystem Carbon</option>
					<option value="MeanFractionAreaBurned">Area Burned</option>
				</select>
			</div>
		</td>
		   <td valign="top" width="20%">
                                 <div class="timee3pg" ><b>Time Period:</b><br>
                                        <select name="timee3pg" id="timee3pg">
                                                <option value="2090s" selected>2090-2099</option>
                                        </select>
                                </div>
                                <div class="timeemc2" style="display:none"><b>Time Period:</b><br>
                                        <select name="timeemc2" id="timeemc2">
                                                <option value="2040-2069" selected>2040-2069</option>
                                                <option value="2070-2099">2070-2099</option>
                                        </select>
                                </div>
		</td>
		 <td width="30%">
				<table><tr>
				<td width="50%">
                                <div class="options3pg" ><b>Options:</b><br>
                                        <select name="options3pg" id="options3pg">
                                                <option value="allmodels">Anomalies (All Models)</option>
                                                <option value="onemodel" selected>Anomalies (One Model)</option>
					</select>
				</div>
				<div class="optionsmc2" style="display:none"><b>Options:</b><br>
                                        <select name="optionsmc2" id="optionsmc2">
                                                <option value="allmodels" selected>All Models</option>
                                                <option value="onemodel">One Model</option>
					</select>
				</div>
                                <div class="modell3pg"><b>Model/Scenarios:</b><br>
                                        <select name="modell3pg" id="modell3pg">
                                                <option value="HadGEM2-ES">HadGEM2-ES RCP8.5</option>
                                                <option value="GFDL-ESM2M">GFDL-ESM2M RCP4.5</option>
                                                <option value="MIROC5" selected>MIROC5 RCP8.5</option>
                                        </select>
                                </div>
				<div class="modellmc2" style="display:none">
					<table>
					<tr>
					<td width="40%">
					<b>Model</b><br>
                                        <select name="modellmc2" id="modellmc2">
                                                <option value="bcc-csm1-1" selected>bcc-csm1-1</option>
                                                <option value="bcc-csm1-1-m" selected>bcc-csm1-1-m</option>
                                                <option value="BNU-ESM">BNU-ESM</option>
                                                <option value="CanESM2" >CanESM2</option>
                                                <option value="CCSM4" >CCSM4</option>
                                                <option value="CNRM-CM5" >CNRM-CM5</option>
                                                <option value="CSIRO-Mk3-6-0" >CSIRO-Mk3-6-0</option>
                                                <option value="GFDL-ESM2M" >GFDL-ESM2M</option>
                                                <option value="GFDL-ESM2G" >GFDL-ESM2G</option>
                                                <option value="HadGEM2-CC365" >HadGEM2-CC365</option>
                                                <option value="HadGEM2-ES365" >HadGEM2-ES365</option>
                                                <option value="inmcm4" >inmcm4</option>
                                                <option value="IPSL-CM5A-LR" >IPSL-CM5A-LR</option>
                                                <option value="IPSL-CM5A-MR" >IPSL-CM5A-MR</option>
                                                <option value="IPSL-CM5B-LR" >IPSL-CM5B-LR</option>
                                                <option value="MIROC5" >MIROC5</option>
                                                <option value="MIROC-ESM" >MIROC-ESM</option>
                                                <option value="MIROC-ESM-CHEM" >MIROC-ESM-CHEM</option>
                                                <option value="MRI-CGCM3" >MRI-CGCM3</option>
                                                <option value="NorESM1-M" >NorESM1-M</option>
                                        </select>
					</td>
					<td width="20%"></td>
					<td width="40%">
					<b>Scenario:</b><br>
                                        <select name="scennmc2" id="scennmc2">
                                                <option value="Rcp45" selected>RCP 4.5</option>
                                                <option value="Rcp85" selected>RCP 8.5</option>
					 </select>
					</td></tr>
					</table>
                                </div>
				</td>
				</tr>
				</table>
			</td>
		</tr>  
</table>

<br />
</form>
<!--<p style="text-align:center"><input type="button" value="DISPLAY MAP" onClick="get_veg_map()"/></p>-->
<div class="3pg">
	<div class="LAI" style="display:none">
			<center><h2>Leaf Area Index of 50 Yr Old Conifer Forest</h2></center>
	</div>
	<div class="NPP" >
			<center><h2>Net Primary Production of 50 Yr Old Conifer Forest</h2></center>
	</div>
	<div class="WS" style="display:none">
			<center><h2>Woody Stem Mass of 50 Yr Old Conifer Forest</h2></center>
	</div>
</div>
<div class="mc2">
	<div class="ModVeg" style="display:none">
			<center><h2>Modal Vegetation Type</h2></center>
	</div>
	<div class="EcoCarb" style="display:none">
			<center><h2>Ecosystem Carbon</h2></center>
	</div>
	<div class="AreaBurned" style="display:none">
			<center><h2>Fraction Area Burned</h2></center>
	</div>
</div>
<div class="3pgonemodel">
	<?php
		include('includes/figurearea_3_veg_3pg_onemodel.php');
	?>
</div>
<div class="3pgallmodels" style="display:none">
	<?php
		include('includes/figurearea_3_veg_3pg_allmodels.php');
	?>
</div>
<div class="mc2allmodels" style="display:none">
	<?php
		include('includes/figurearea_20_veg_mc2_allmodels.php');
	?>
</div>
<div class="mc2onemodel" style="display:none">
	<?php
		include('includes/figurearea_3_veg_mc2_onemodel.php');
	?>
</div>
<iframe style="display:none" name="form_target" name="form_target" style="width:6in; height: 6in"></iframe>

