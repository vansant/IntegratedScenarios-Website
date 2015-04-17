<h3>MACA Climate Data Portal</h3>
<div id="dataportal">
<form action="myjs/get_urldownload.php" target="form_target" method="post">
<p>
<input type="submit" class="btn btn-large ptn-primary pull-right" value="Download File" name="submit" onclick="return get_urldownload()" />
To download a file of paths to your desired data, make at least one selection from each category. 
Be sure to <a href="http://lists.oregonstate.edu/mailman/listinfo/macacmip5">join mailing list for data updates</a>
</p>

<table class="table table-bordered" width="100%" height="400px">
      <tr>
	<td width="30%">
	<div class="accordion" id="accordion2">
	<table id="table" class="table table-striped table-bordered" width="100%">
  	<tr>
        <td>
        <!--------------------->
        <!--   MACA PRODUCT     -->
        <!--------------------->
          <div class="accordion-group">
            <div class="accordion-heading">
              <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseProd">
                <h3>MACA PRODUCT</h3>
              </a>
            </div>
        </td>
        </tr>
  	<tr>
        <td>
            <div id="collapseProd" class="accordion-body collapse in">
              <div class="accordion-inner">
                        <input type="radio" name="productt[]" value="macav2livneh" checked="checked"/>MACAv2-LIVNEH<br />
                        <input type="radio" name="productt[]" value="macav1metdata"/>MACAv1-METDATA<br />
              </div>
            </div>
          </div>
        </td>
        </tr>
   <tr>
        <td>
        <!--------------------->
        <!--   ACCORDION TIME FREQ    -->
        <!--------------------->
          <div class="accordion-group">
            <div class="accordion-heading">
              <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTimeFreq">
                <h3>TIME FREQUENCY</h3>
              </a>
            </div>
        </td>
        </tr>
        <tr>
        <td>
            <div id="collapseTimeFreq" class="accordion-body collapse">
              <div class="accordion-inner">
                        <div class="freqq" style="text-align:Left">
                                <input type="radio" name ="freqq[]" id="daily1" value="_daily" class="daily" />daily
                                <br />
                                <input type="radio" name ="freqq[]" id="monthly1" value="_monthly" class="monthly" />monthly
                        </div>
              </div>
            </div>
          </div>
       </td>
        </tr>
	<tr>
	<td>
	<!--------------------->
	<!--   VARIABLES     -->
	<!--------------------->
	  <div class="accordion-group">
	    <div class="accordion-heading">
	      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseVar">
		<h3>VARIABLES</h3>
	      </a>
	    </div>
	</td>
	</tr>
	<tr>
	<td>
	    <div id="collapseVar" class="accordion-body collapse">
	      <div class="accordion-inner">
                <button class="selectall" data-name="varr">Select All</button>
                <button class="deselectall" data-name="varr">DeSelect All</button>
                <br />
       		 <br>
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
                        </div>
	      </div>
	    </div>
	  </div>
	</td>
	</tr>
 	<tr>
        <td>
        <!--------------------->
        <!--   ACCORDION MODELS    -->
        <!--------------------->
          <div class="accordion-group">
            <div class="accordion-heading">
              <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseModels">
                <h3>CMIP5 MODELS</h3>
              </a>
            </div>
	</td>
	</tr>
	<tr>
	<td>
            <div id="collapseModels" class="accordion-body collapse">
              <div class="accordion-inner">
		<button class="selectall" data-name="model">Select All</button>
		<button class="deselectall" data-name="model">DeSelect All</button>
		<br>
		<br>
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
              </div>
            </div>
          </div>
       </td>
        </tr>
        <tr>
        <td>
        <!--------------------->
        <!--   ACCORDION MODELS    -->
        <!--------------------->
          <div class="accordion-group">
            <div class="accordion-heading">
              <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTime">
                <h3>CMIP5 SCENARIOS/TIME PERIODS</h3>
              </a>
            </div>
            <div id="collapseTime" class="accordion-body collapse">
              <div class="accordion-inner">
                        <br>
                        <button class="selectall" data-name="timee">Select All</button>
                        <button class="deselectall" data-name="timee">DeSelect All</button>
                        <br />
                        <br>
                        <u>Historical</u><br>
                        <input type="checkbox" name="timee[]" value="r1i1p1_historical_1950_1969" class="macav2livneh"/>historical (1950-1969)<br />
                        <input type="checkbox" name="timee[]" value="r1i1p1_historical_1970_1989" class="macav2livneh"/>historical (1970-1989)<br />
                        <input type="checkbox" name="timee[]" value="r1i1p1_historical_1990_2005" class="macav2livneh"/>historical (1990-2005)<br /><br />
                        <input type="checkbox" name="timee[]" value="r1i1p1_historical_1950_1959" class="macav1metdata" />historical (1950-1959)<br />
                        <input type="checkbox" name="timee[]" value="r1i1p1_historical_1960_1969" class="macav1metdata"/>historical (1960-1969)<br />
                        <input type="checkbox" name="timee[]" value="r1i1p1_historical_1970_1979" class="macav1metdata"/>historical (1970-1979)<br />
                        <input type="checkbox" name="timee[]" value="r1i1p1_historical_1980_1989" class="macav1metdata"/>historical (1980-1989)<br />
                        <input type="checkbox" name="timee[]" value="r1i1p1_historical_1990_1999" class="macav1metdata"/>historical (1990-1999)<br />
                        <input type="checkbox" name="timee[]" value="r1i1p1_historical_2000_2005" class="macav1metdata"/>historical (2000-2005)<br /><br />
                        <u>RCP 4.5</u><br>
                        <input type="checkbox" name="timee[]" value="r1i1p1_rcp45_2006_2025" class="macav2livneh"/>future rcp 45 (2006-2025)<br />
                        <input type="checkbox" name="timee[]" value="r1i1p1_rcp45_2026_2045" class="macav2livneh"/>future rcp 45 (2026-2045)<br />
                        <input type="checkbox" name="timee[]" value="r1i1p1_rcp45_2046_2065" class="macav2livneh"/>future rcp 45 (2046-2065)<br />
                        <input type="checkbox" name="timee[]" value="r1i1p1_rcp45_2066_2085" class="macav2livneh"/>future rcp 45 (2066-2085)<br />
                        <input type="checkbox" name="timee[]" value="r1i1p1_rcp45_2086_2099" class="macav2livneh"/>future rcp 45 (2086-2099)<br /> <br />
                        <input type="checkbox" name="timee[]" value="r1i1p1_rcp45_2006_2015" class="macav1metdata"/>future rcp 45 (2006-2015)<br />
                        <input type="checkbox" name="timee[]" value="r1i1p1_rcp45_2016_2025" class="macav1metdata"/>future rcp 45 (2016-2025)<br />
                        <input type="checkbox" name="timee[]" value="r1i1p1_rcp45_2026_2035" class="macav1metdata"/>future rcp 45 (2026-2035)<br />
                        <input type="checkbox" name="timee[]" value="r1i1p1_rcp45_2036_2045" class="macav1metdata"/>future rcp 45 (2036-2045)<br />
                        <input type="checkbox" name="timee[]" value="r1i1p1_rcp45_2046_2055" class="macav1metdata"/>future rcp 45 (2046-2055)<br />
                        <input type="checkbox" name="timee[]" value="r1i1p1_rcp45_2056_2065" class="macav1metdata"/>future rcp 45 (2056-2065)<br />
                        <input type="checkbox" name="timee[]" value="r1i1p1_rcp45_2066_2075" class="macav1metdata"/>future rcp 45 (2066-2075)<br />
                        <input type="checkbox" name="timee[]" value="r1i1p1_rcp45_2076_2085" class="macav1metdata"/>future rcp 45 (2076-2085)<br />
                        <input type="checkbox" name="timee[]" value="r1i1p1_rcp45_2086_2095" class="macav1metdata"/>future rcp 45 (2086-2095)<br />
                        <input type="checkbox" name="timee[]" value="r1i1p1_rcp45_2096_2100" class="macav1metdata"/>future rcp 45 (2096-2100)<br /> 
                        <u>RCP 8.5</u><br>
                        <input type="checkbox" name="timee[]" value="r1i1p1_rcp85_2006_2025" class="macav2livneh"/>future rcp 85 (2006-2025)<br />
                        <input type="checkbox" name="timee[]" value="r1i1p1_rcp85_2026_2045" class="macav2livneh"/>future rcp 85 (2026-2045)<br />
                        <input type="checkbox" name="timee[]" value="r1i1p1_rcp85_2046_2065" class="macav2livneh"/>future rcp 85 (2046-2065)<br />
                        <input type="checkbox" name="timee[]" value="r1i1p1_rcp85_2066_2085" class="macav2livneh"/>future rcp 85 (2066-2085)<br />
                        <input type="checkbox" name="timee[]" value="r1i1p1_rcp85_2086_2099" class="macav2livneh"/>future rcp 85 (2086-2099)<br />
                        <input type="checkbox" name="timee[]" value="r1i1p1_rcp85_2006_2015" class="macav1metdata"/>future rcp 85 (2006-2015)<br />
                        <input type="checkbox" name="timee[]" value="r1i1p1_rcp85_2016_2025" class="macav1metdata"/>future rcp 85 (2016-2025)<br />
                        <input type="checkbox" name="timee[]" value="r1i1p1_rcp85_2026_2035" class="macav1metdata"/>future rcp 85 (2026-2035)<br />
                        <input type="checkbox" name="timee[]" value="r1i1p1_rcp85_2036_2045" class="macav1metdata"/>future rcp 85 (2036-2045)<br />
                        <input type="checkbox" name="timee[]" value="r1i1p1_rcp85_2046_2055" class="macav1metdata"/>future rcp 85 (2046-2055)<br />
                        <input type="checkbox" name="timee[]" value="r1i1p1_rcp85_2056_2065" class="macav1metdata"/>future rcp 85 (2056-2065)<br />
                        <input type="checkbox" name="timee[]" value="r1i1p1_rcp85_2066_2075" class="macav1metdata"/>future rcp 85 (2066-2075)<br />
                        <input type="checkbox" name="timee[]" value="r1i1p1_rcp85_2076_2085" class="macav1metdata"/>future rcp 85 (2076-2085)<br />
                        <input type="checkbox" name="timee[]" value="r1i1p1_rcp85_2086_2095" class="macav1metdata"/>future rcp 85 (2086-2095)<br />
                        <input type="checkbox" name="timee[]" value="r1i1p1_rcp85_2096_2100" class="macav1metdata"/>future rcp 85 (2096-2100) <br />
              </div>
            </div>
          </div>
       </td>
        </tr>
        <!--------------------->
	</table>
	</div>
	</td>
	<td width="70%">

<!--
            <select name="formatt[]"">
                <option value="url" selected >file of URLs for downloading files</option>
                <option value="wget"  >bash script of 'wget's for downloading files</option>
                <option value="curl"  >bash script of 'cURL's for downloading files</option>
                <option value="opendap"  >list of opendap URL's for accessing data in software</option>
             </select>
-->
	 <u><b>Domain: </b></u>
	<select name="domainn[]"">
                <option value="conus" selected >Full Domain (CONUS)</option>
                <option value="wget"  >Rectangular Subset</option>
             </select>


<div id="map_canvas"></div>
	 <u><b>Download Format: </b></u><br />
                        <br>
                        <input type="radio" name ="formatt[]" value="url" />file of URLs for downloading files<br />
                        <input type="radio" name ="formatt[]" value="wget" />bash script of 'wget's for downloading files<br />
                        <input type="radio" name ="formatt[]" value="curl" />bash script of 'cURL's for downloading files<br />
                        <input type="radio" name ="formatt[]" value="opendap" />list of opendap URL's for accessing data in software <br />
	</td>
	</tr>
</table>
</form>
</div>
<iframe style="display:none" name="form_target" name="form_target" style="width:5in; height: 5in"></iframe>
