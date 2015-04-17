<form id="form_div">
<table border="0" width="100%">
<tr >
	<td valign="top" style="text-align:left">
		<table border="0" width="90%">
			<td valign="top">
				<div class="productt">Product:<br>
					<select name="productt" id="productt">
						<option value="3pg" selected >3-PG</option>
					</select>
				</div>
			</td>
  			<td>
                                <div class="modell">Model/Scenarios:<br>
                                        <select name="modell" id="modell">
                                                <option value="HadGEM2-ES_rcp85">HadGEM2-ES RCP8.5</option>
                                                <option value="GFDL-ESM2M_rcp45">GFDL-ESM2M RCP4.5</option>
                                                <option value="MIROC5_rcp85" selected>MIROC5 RCP8.5</option>
                                        </select>
                                </div>
                        </td>

			<td valign="top">
				<div class="timee">Time Period:<br>
					<select name="timee" id="timee">
						<option value="2040_2069" selected>2040-2069</option>
						<option value="2070_2099">2070-2099</option>
					</select>
				</div>
			</td>
			<td>
                                <div class="scenn">Variable:<br>
                                        <select name="varr" id="varr">
                                                <option value="LAI">LAI (Leaf Area Index of 50 yr old Conifer Forest) </option>
                                                <option value="NPP" selected>NPP (Net Primary Production of 50 yr old Conifer Forest) </option>
                                                <option value="WS">WS (Woody Stem Mass of 50 yr old Conifer Forest)</option>
                                        </select>
                                </div>
                        </td>
		</tr>  
		</table>
	   </td>  
  </tr> 
</table>

<br />
</form>
<p style="text-align:center"><input type="button" value="DISPLAY MAP" onClick="get_3pg_map()"/></p>

<?php
        include('includes/figurearea_3.php');
?>
<iframe style="display:none" name="form_target" name="form_target" style="width:6in; height: 6in"></iframe>

