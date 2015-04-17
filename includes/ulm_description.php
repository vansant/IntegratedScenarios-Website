The <a href="http://dx.doi.org/10.1175/2011JHM1361.1">Unified Land Model (ULM)</a> is a hydrologic model that combines the surface flux parameterizations of the Noah land surface model (LSM) with the runoff parameterizations of the Sacramento Soil Moisture Accounting (Sac) model. <a href="http://www.ral.ucar.edu/research/land/technology/lsm.php">Noah</a> is used to represent land surface processes in most of the coupled weather and climate models that are operated by the National Oceanic and Atmospheric Administration (NOAA). In Noah, the land surface is modeled as a grid of large, independent model elements (grid cells) and the model can be executed either coupled to an atmospheric model or in stand-alone mode (uncoupled). <a href="http://www.comet.ucar.edu/class/hydromet/11_May09_2000/docs/rti/sac-sma.htm">Sac</a> is used by the National Weather Service for streamflow simulations and forecasting. Its representation of the processes that exchange moisture and energy with the atmosphere (e.g. evapotranspiration) is less detailed than Noah's, but Sac typically simulates more realistic streamflow. ULM was developed to take the best of both models. The combined model uses multiple elevation zones within each grid cell to provide a more realistic representation of the snow pack in mountainous environments and uses a single dominant vegetation type per grid cell. A separate routing model processes the runoff and baseflow from each individual cell and routes the flow to develop streamflow at various locations in the watershed.
<br></br>
For this Integrated Scenarios project, we used ULM with 1/16-deg daily MACAv2-LIVNEH climate data for minimum and maximum temperature, precipitation, and wind. Additional meteorological forcings (shortwave radiation, longwave radiation, humidity, and pressure) were estimated using the MTCLIM algorithms (<a href="http://dx.doi.org/10.1016/j.agrformet.2013.03.003">Bohn et al., 2013</a>). The model was run at a 3-hourly time step with model output archived at a daily time step. The same routing model setup was used for both VIC and Noah.

