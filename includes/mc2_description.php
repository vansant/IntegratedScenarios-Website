The <a href="http://www.fsl.orst.edu/dgvm/">MC2</a> Dynamic Vegetation Model (Ron Neilson, Jim Lenihan, Chris Daly and Dominique Bachelet) consists of three linked modules simulating biogeography, biogeochemistry, and fire disturbance. 
<br><br>
The Biogeography module is composed of two distinct components: (1) the lifeform interpreter that uses temperature- and precipitation-based rules to simulate leaf morphology and phenology for woody lifeforms reminiscent of those used in the static biography MAPSS model, and a productivity ratio to determine the fraction of C4/C3 grasses and (2) the vegetation classifier that uses both climate and biomass thresholds to combine lifeforms into vegetation types, each defined by a climate-defined tree functional type and either a C3 or a C4 grass .
<br><br>
The Biogeochemistry module simulates monthly carbon and nutrient dynamics using a highly modified version of the Centry biogeochemistry model. Simulated ecosystem processes include plant production, soil organic matter decomposition, and water and nutrient cycling. Parameterization of this module is based on the lifeform composition of the ecosystems, which is updated annually by the biogeography module.
<br><br>
The Fire module simulates the occurrence, behavior and effects of wildfire.
Allometric equations, keyed to the lifeform composition supplied by the lifeform interpreter, are used to convert above-ground live and dead biomass to fuel classes. Fire effects (i.e., plant mortality and fire emissions) are estimated as a function of simulated fire behavior (i.e., fire spread and fire line intensity) and vegetation structure. Fire effects feed back to the biogeochemistry module to adjust the size of the carbon and nutrient pools. This information is fed back to the biogeography module to update the vegetation type.
<br><br>
For this Integrated Scenarios project, MC2(landcarbon branch) was run using meteorological inputs from the 1/24-deg monthly MACAv1-METDATA climate data for min/max temperature, 
precipitation and specific humidity. 

