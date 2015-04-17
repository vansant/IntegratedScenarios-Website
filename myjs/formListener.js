function macav2livneh(){
        window.vicLayer.setMap(null);
        window.vicBoundary.setMap(null);
        window.macav2livnehLayer.setMap(window.map);
        window.macav1metdataLayer.setMap(null);
        window.macav2livnehBoundary.setMap(window.map);
        window.macav1metdataBoundary.setMap(null);
        jQuery('.macav1metdata').hide();jQuery('.macav1metdata').prop('checked', false);
        jQuery('.hydro').hide();jQuery('.hydro').prop('checked', false);
        jQuery('.hydromonthly').hide();jQuery('.hydromonthly').prop('checked', false);
        jQuery('.hydrodaily').hide();jQuery('.hydrodaily').prop('checked', false);
        jQuery('.mc2').hide();jQuery('.mc2').prop('checked', false);
        jQuery('.mc2full').hide();jQuery('.mc2full').prop('checked', false);
        jQuery('.mc2pointrect').hide();jQuery('.mc2pointrect').prop('checked', false);
        jQuery('.3pg').hide();jQuery('.3pg').prop('checked', false);
	jQuery('.macav1metdataand3pg').hide(); jQuery('.macav1metdataand3pg').prop('checked', false);
	jQuery('.macav1metdataanddailyhydro').hide(); jQuery('.macav1metdataanddailyhydro').prop('checked', false);
	jQuery('.macav2livnehmc2andhydro').show(); 
	jQuery('.daily').show(); 
	jQuery('.monthly').show(); 
        jQuery('.rectangleoption').show(); 
        jQuery('.pointoption').show(); 
        jQuery('.huss').show(); 
        jQuery('.climate').show();
        jQuery('.climateandhydro').show();
        jQuery('.climatemc2').show();
        jQuery('.climatemc2andhydro').show();
        jQuery('.climatemc2hydroand3pg').show();
        jQuery('.climatehydroand3pg').show();
        jQuery('.climatemc2and3pg').show();
        jQuery('.macav2livneh').show();
}
function macav1metdata(){
        window.vicLayer.setMap(null);
        window.vicBoundary.setMap(null);
        window.macav2livnehLayer.setMap(null);
        window.macav1metdataLayer.setMap(window.map);
        window.macav2livnehBoundary.setMap(null);
        window.macav1metdataBoundary.setMap(window.map);
        jQuery('.macav2livneh').hide();jQuery('.macav2livneh').prop('checked', false);
	jQuery('.macav2livnehmc2andhydro').hide(); jQuery('.macav2livnehmc2andhydro').prop('checked', false);
        jQuery('.hydro').hide();jQuery('.hydro').prop('checked', false);
        jQuery('.hydromonthly').hide();jQuery('.hydromonthly').prop('checked', false);
        jQuery('.hydrodaily').hide();jQuery('.hydrodaily').prop('checked', false);
        jQuery('.mc2').hide();jQuery('.mc2').prop('checked', false);
        jQuery('.mc2full').hide();jQuery('.mc2full').prop('checked', false);
        jQuery('.mc2pointrect').hide();jQuery('.mc2pointrect').prop('checked', false);
        jQuery('.3pg').hide();jQuery('.3pg').prop('checked', false);
        jQuery('.daily').hide();jQuery('.daily').prop('checked', false);
        jQuery('.monthly').show();
        jQuery('.rectangleoption').show();
        jQuery('.pointoption').show();
        jQuery('.huss').show();
        jQuery('.climate').show();
        jQuery('.climatemc2').show();
        jQuery('.climatemc2andhydro').show();
        jQuery('.climatemc2hydroand3pg').show();
        jQuery('.climatemc2and3pg').show();
        jQuery('.macav1metdataand3pg').show();
	jQuery('.macav1metdataanddailyhydro').show();
        jQuery('.climatehydroand3pg').show();
        jQuery('.macav1metdata').show();
        jQuery('.monthly').prop('checked', true);
}

function mc2(){
        window.vicLayer.setMap(null);
        window.vicBoundary.setMap(null);
        window.macav2livnehLayer.setMap(null);
        window.macav1metdataLayer.setMap(window.map);
        window.macav2livnehBoundary.setMap(null);
        window.macav1metdataBoundary.setMap(window.map);
        jQuery('.macav1metdata').hide();jQuery('.macav1metdata').prop('checked', false);
        jQuery('.macav2livneh').hide(); jQuery('.macav2livneh').prop('checked', false);
        jQuery('.climate').hide();jQuery('.climate').prop('checked', false);
        jQuery('.huss').hide();jQuery('.huss').prop('checked', false);
        jQuery('.was').hide();jQuery('.was').prop('checked', false);
	jQuery('.climateandhydro').hide(); jQuery('.climateandhydro').prop('checked', false);
	jQuery('.macav1metdataand3pg').hide(); jQuery('.macav1metdataand3pg').prop('checked', false);
	jQuery('.macav1metdataandhydro').hide(); jQuery('.macav1metdataandhydro').prop('checked', false);
	jQuery('.macav1metdataanddailyhydro').hide(); jQuery('.macav1metdataanddailyhydro').prop('checked', false);
	jQuery('.climatehydroand3pg').hide(); jQuery('.climatehydroand3pg').prop('checked', false);
        jQuery('.climatemc2and3pg').show();
        jQuery('.climatemc2').show();
        jQuery('.climatemc2andhydro').show();
        jQuery('.climatemc2hydroand3pg').show();
        jQuery('.hydro').hide();jQuery('.hydro').prop('checked', false);
        jQuery('.hydromonthly').hide();jQuery('.hydromonthly').prop('checked', false);
        jQuery('.hydrodaily').hide();jQuery('.hydrodaily').prop('checked', false);
        jQuery('.3pg').hide();jQuery('.3pg').prop('checked', false);
	jQuery('.daily').hide(); jQuery('.daily').prop('checked', false);
	jQuery('.monthly').hide(); jQuery('.monthly').prop('checked', false);
        jQuery('.rectangleoption').show();
	jQuery('.macav2livnehmc2andhydro').show(); 
        jQuery('.pointoption').show();
        jQuery('.mc2').show();
        jQuery('.year').prop('checked', true);
        jQuery('#allmc2').prop('checked', true);
       	jQuery('.agg').hide(); jQuery('.agg').prop('checked', false);
}
function pg3(){
        window.vicLayer.setMap(null);
        window.vicBoundary.setMap(null);
        window.macav2livnehLayer.setMap(null);
        window.macav1metdataLayer.setMap(window.map);
        window.macav2livnehBoundary.setMap(null);
        window.macav1metdataBoundary.setMap(window.map);
        jQuery('.macav1metdata').hide();jQuery('.macav1metdata').prop('checked', false);
        jQuery('.macav2livneh').hide(); jQuery('.macav2livneh').prop('checked', false);
        jQuery('.climate').hide();jQuery('.climate').prop('checked', false);
        jQuery('.huss').hide();jQuery('.huss').prop('checked', false);
        jQuery('.was').hide();jQuery('.was').prop('checked', false);
	jQuery('.climateandhydro').hide(); jQuery('.climateandhydro').prop('checked', false);
	jQuery('.macav1metdataanddailyhydro').hide(); jQuery('.macav1metdataanddailyhydro').prop('checked', false);
	jQuery('.macav2livnehmc2andhydro').hide(); jQuery('.macav2livnehmc2andhydro').prop('checked', false);
        jQuery('.climatemc2').hide(); jQuery('.climatemc2').prop('checked', false);
        jQuery('.climatemc2andhydro').hide(); jQuery('.climatemc2andhydro').prop('checked', false);
        jQuery('.hydro').hide();jQuery('.hydro').prop('checked', false);
        jQuery('.hydromonthly').hide();jQuery('.hydromonthly').prop('checked', false);
        jQuery('.hydrodaily').hide();jQuery('.hydrodaily').prop('checked', false);
        jQuery('.mc2').hide();jQuery('.mc2').prop('checked', false);
        jQuery('.mc2full').hide();jQuery('.mc2full').prop('checked', false);
        jQuery('.mc2pointrect').hide();jQuery('.mc2pointrect').prop('checked', false);
        jQuery('.daily').hide();jQuery('.daily').prop('checked', false);
        jQuery('.monthly').hide(); jQuery('.monthly').prop('checked', false);
        jQuery('.rectangleoption').show();
        jQuery('.pointoption').show();
        jQuery('.3pg').show();
        jQuery('#decade').prop('checked', true);
	jQuery('.macav1metdataand3pg').show(); 
        jQuery('.climatemc2and3pg').show();
	jQuery('.climatehydroand3pg').show(); 
        jQuery('.climatemc2hydroand3pg').show();
       	jQuery('.agg').hide(); jQuery('.agg').prop('checked', false);
}

function vic(){
        window.vicLayer.setMap(window.map);
        window.vicBoundary.setMap(window.map);
        window.macav2livnehLayer.setMap(null);
        window.macav1metdataLayer.setMap(null);
        window.macav2livnehBoundary.setMap(null);
        window.macav1metdataBoundary.setMap(null);
        jQuery('.climate').hide();jQuery('.climate').prop('checked', false);
        jQuery('.huss').hide();jQuery('.huss').prop('checked', false);
        jQuery('.was').hide();jQuery('.was').prop('checked', false);
        jQuery('.climatemc2').hide(); jQuery('.climatemc2').prop('checked', false);
	jQuery('.macav1metdataand3pg').hide(); jQuery('.macav1metdataand3pg').prop('checked', false);
        jQuery('.macav1metdata').hide();jQuery('.macav1metdata').prop('checked', false);
        jQuery('.macav2livneh').hide(); jQuery('.macav2livneh').prop('checked', false);
        jQuery('.mc2').hide();jQuery('.mc2').prop('checked', false);
        jQuery('.mc2full').hide();jQuery('.mc2full').prop('checked', false);
        jQuery('.mc2pointrect').hide();jQuery('.mc2pointrect').prop('checked', false);
        jQuery('.3pg').hide();;jQuery('.3pg').prop('checked', false);
        jQuery('.climatemc2and3pg').hide(); jQuery('.climatemc2and3pg').prop('checked', false);
	jQuery('.climateandhydro').show(); 
        jQuery('.daily').show();
        jQuery('.monthly').show(); 
        jQuery('.rectangleoption').show();
        jQuery('.pointoption').show();
        jQuery('.hydro').show();
        jQuery('.climatemc2andhydro').show(); 
	jQuery('.climatehydroand3pg').show(); 
	//jQuery('.macav1metdataandhydro').show(); //might need to change this to just daily hydro.. not monthlyhydro
	jQuery('.climatehydroand3pg').show(); 
	jQuery('.macav2livnehmc2andhydro').show(); 
       	jQuery('.agg').hide(); jQuery('.agg').prop('checked', false);
	
}
function ulm(){
        window.vicLayer.setMap(window.map);
        window.vicBoundary.setMap(window.map);
        window.macav2livnehLayer.setMap(null);
        window.macav1metdataLayer.setMap(null);
        window.macav2livnehBoundary.setMap(null);
        window.macav1metdataBoundary.setMap(null);
        jQuery('.climate').hide();jQuery('.climate').prop('checked', false);
        jQuery('.huss').hide();jQuery('.huss').prop('checked', false);
        jQuery('.was').hide();jQuery('.was').prop('checked', false);
	jQuery('.climateandhydro').show(); 
	jQuery('.macav1metdataand3pg').hide(); jQuery('.macav1metdataand3pg').prop('checked', false);
        jQuery('.climatemc2and3pg').hide(); jQuery('.climatemc2and3pg').prop('checked', false);
        jQuery('.macav1metdata').hide();jQuery('.macav1metdata').prop('checked', false);
        jQuery('.macav2livneh').hide(); jQuery('.macav2livneh').prop('checked', false);
        jQuery('.mc2').hide();jQuery('.mc2').prop('checked', false);
        jQuery('.mc2full').hide();jQuery('.mc2full').prop('checked', false);
        jQuery('.mc2pointrect').hide();jQuery('.mc2pointrect').prop('checked', false);
        jQuery('.3pg').hide();;jQuery('.3pg').prop('checked', false);
        jQuery('.rectangleoption').show();
        jQuery('.pointoption').show();
        jQuery('.hydro').show();
        jQuery('.daily').show();
        jQuery('.monthly').show(); 
        jQuery('.climatemc2andhydro').show(); 
	jQuery('.climatehydroand3pg').show(); 
	//jQuery('.macav1metdataandhydro').show(); 
	jQuery('.climatehydroand3pg').show(); 
	jQuery('.macav2livnehmc2andhydro').show(); 
       	jQuery('.agg').hide(); jQuery('.agg').prop('checked', false);
}

function macav2livneh_and_daily_or_monthly(){
	 jQuery('.rhs').hide();   jQuery('.rhs').prop('checked', false);
	 jQuery('.was').show();
	 jQuery('.windcomp').hide();  jQuery('.windcomp').prop('checked', false);
	 jQuery('.dps').hide();  jQuery('.dps').prop('checked', false);
}
function macav1metdata_and_daily(){
	 jQuery('.rhs').show();
	 jQuery('.was').hide(); jQuery('.was').prop('checked', false);
	 jQuery('.windcomp').show();
	 jQuery('.dps').hide();  jQuery('.dps').prop('checked', false);
}
function macav1metdata_and_monthly(){
	 jQuery('.rhs').hide(); jQuery('.rhs').prop('checked', false);
	 jQuery('.was').show();
	 jQuery('.windcomp').show();
	 jQuery('.dps').show();
}



$(function(){

//===============================
//   DATA PORTAL LISTENERS: DOMAINN
//===============================
  jQuery('#domainn').on('change', function(){
	    if(jQuery(this).val()=='fulldomain'){
		jQuery('.point').hide();
		jQuery('.rectangle').hide();
		window.pointmarker.setVisible(false); 
	   	rectangle.setMap(null);
		jQuery('.csvoption').hide();
        	jQuery('.opendapoption').hide(); 
        	jQuery('.agg').hide(); jQuery('.agg').prop('checked', false);
	 	jQuery('.url').show();
                jQuery('.wgetoptions').show();
		if(jQuery('#mc2wfs').is(':checked')||jQuery('#mc2wofs').is(':checked')){
			jQuery('.mc2pointrect').hide();jQuery('.mc2pointrect').prop('checked', false);
			jQuery('.mc2full').show();
        		jQuery('.mc2full').prop('checked', true);
		}else{
			jQuery('.mc2pointrect').hide();jQuery('.mc2pointrect').prop('checked', false);
			jQuery('.mc2full').hide();jQuery('.mc2full').prop('checked', false);
		}

	    }
	    else if(jQuery(this).val()=='point'){
		jQuery('.point').show();
		if(jQuery('#mc2wfs').is(':checked')||jQuery('#mc2wofs').is(':checked')){
			jQuery('.mc2pointrect').show();
        		jQuery('.mc2full').hide();jQuery('.mc2full').prop('checked', false);
		}else{
			jQuery('.mc2pointrect').hide();
			jQuery('.mc2full').hide();
		}
		window.pointmarker.setVisible(true); 
		 jQuery('.rectangle').hide();
	   	rectangle.setMap(null);
		jQuery('.csvoption').show();
        	jQuery('.opendapoption').show(); 
		if(jQuery('#3pg').is(':checked') || jQuery('#mc2wfs').is(':checked')||jQuery('#mc2wofs').is(':checked')){
			console.log('hide agg')
        		jQuery('.agg').hide(); jQuery('.agg').prop('checked', false);
		}else if (jQuery('#vic').is(':checked') && jQuery('#monthly1').is(':checked')){
        		jQuery('.agg').hide(); jQuery('.agg').prop('checked', false);
		}else{
			console.log('show agg')
        		jQuery('.agg').show(); 
		}
	 	jQuery('.url').show();
                jQuery('.wgetoptions').show();
	  }
	    else if(jQuery(this).val()=='rectangle'){
		 jQuery('.point').hide();
		if(jQuery('#mc2wfs').is(':checked')||jQuery('#mc2wofs').is(':checked')){
			jQuery('.mc2pointrect').show();
		}else{
			jQuery('.mc2pointrect').hide();jQuery('.mc2pointrect').prop('checked',false);
			jQuery('.mc2full').hide();
		}
		window.pointmarker.setVisible(false); 
		 jQuery('.rectangle').show();
	   	rectangle.setMap(window.map);
		jQuery('.csvoption').hide();
        	jQuery('.opendapoption').show(); 
		if(jQuery('#3pg').is(':checked') || jQuery('#mc2').is(':checked')){
        		jQuery('.agg').hide(); jQuery('.agg').prop('checked', false);
		}else if (jQuery('#vic').is(':checked') && jQuery('#monthly1').is(':checked')){
        		jQuery('.agg').hide(); jQuery('.agg').prop('checked', false);
		}else{
        		jQuery('.agg').show(); 
		}
	 	jQuery('.url').show();
                jQuery('.wgetoptions').show();
	  }
   });

//===============================
//===============================
 jQuery('.optionn').on('change', function(){
            if(jQuery(this).val()=='single'){
		 jQuery('.model').show();
		 jQuery('.nomodel').hide(); jQuery('.nomodel').prop('checked', false);
            }
            else{
		 jQuery('.model').hide(); jQuery('.model').prop('checked', false);
		 jQuery('.nomodel').show();
          }
   });

// jQuery('#NELat').EZValidate();

//===============================
// RECTANGLE
//===============================
    jQuery('#NELat,#NELong,#SWLat,#SWLong').on('blur', function(){
		 var ne_lat =parseFloat(document.getElementById('NELat').value.toFixed(4));
		 var ne_long=parseFloat(document.getElementById('NELong').value.toFixed(4));
		 var sw_lat =parseFloat(document.getElementById('SWLat').value.toFixed(4));
		 var sw_long=parseFloat(document.getElementById('SWLong').value.toFixed(4));
		 bounds = new google.maps.LatLngBounds(
                              new google.maps.LatLng(sw_lat, sw_long),  //SW corner
                              new google.maps.LatLng(ne_lat, ne_long)    //NE corner
                         );
		rectangle.setBounds(bounds);
        });

//===============================
//  POINT
//===============================
 	jQuery('#pointLat').keyup( function(){
		 var latitude =parseFloat(document.getElementById('pointLat').value);
		 var longitude=parseFloat(document.getElementById('pointLong').value);
		var newLatLng = new google.maps.LatLng(latitude, longitude); 
		window.pointmarker.setPosition(newLatLng);
		window.map.setCenter(newLatLng);
        });
        jQuery('#pointLong').keyup( function(){
                var latitude =parseFloat(document.getElementById('pointLat').value);
                 var longitude=parseFloat(document.getElementById('pointLong').value);
		var newLatLng = new google.maps.LatLng(latitude, longitude); 
                window.pointmarker.setPosition(newLatLng);
		window.map.setCenter(newLatLng);
        });

//Maca2livneh has same variables for monthly/daily.. 
//It's macav1metdata that has different variables
//===============================
//  DATA PORTAL LISTENER: FREQ CHANGE 
//===============================
  jQuery('#freqq').on('change','input[type=radio]', function(){

            var freqq_val;
            if(jQuery('#daily1').is(':checked')){
                freqq_val=$('#daily1').val();
            }
           else if(jQuery('#monthly1').is(':checked')){
                freqq_val=$('#monthly1').val();
            }
	if($('input[id=macav2livneh]:checked').val()=="macav2livneh"){
                        macav2livneh_and_daily_or_monthly();
                        macav2livneh();
         }
 	if($('input[id=macav1metdata]:checked').val()=="macav1metdata"){
		macav1metdata();
		 if(freqq_val=="_daily"){
			macav1metdata_and_daily();
		 }
		 else if(freqq_val=="_monthly"){
			macav1metdata_and_monthly();
		}
         }
 	if($('input[id=vic]:checked').val()=="vic"){
		vic();
		 if(freqq_val=="_daily"){
			jQuery('.hydrodaily').show();
        		jQuery('.hydromonthly').hide();jQuery('.hydromonthly').prop('checked', false);
			jQuery('.macav1metdataanddailyhydro').show(); // just for daily not monthly because of times
		 }
		 else if(freqq_val=="_monthly"){
			jQuery('.hydromonthly').show();
        		jQuery('.hydrodaily').hide();jQuery('.hydrodaily').prop('checked', false);
        		jQuery('.macav1metdataanddailyhydro').hide();jQuery('.macav1metdataanddailyhydro').prop('checked', false);
		}
         }
 	if($('input[id=vic]:checked').val()=="ulm"){
		ulm();
		 if(freqq_val=="_daily"){
			jQuery('.hydrodaily').show();
        		jQuery('.hydromonthly').hide();jQuery('.hydromonthly').prop('checked', false);
        		jQuery('.macav1metdataanddailyhydro').hide();jQuery('.macav1metdataanddailyhydro').prop('checked', false);
		 }
		 else if(freqq_val=="_monthly"){
			jQuery('.hydromonthly').show();
        		jQuery('.hydrodaily').hide();jQuery('.hydrodaily').prop('checked', false);
        		jQuery('.macav1metdataanddailyhydro').hide();jQuery('.macav1metdataanddailyhydro').prop('checked', false);
		}
         }
});

//===============================
//  DATA PORTAL LISTENER: PRODUCTT CHANGE 
//===============================
	  //Hide feature for the ANalysis Tools... Bias Maps and for data portal
	  jQuery('#productt').on('change','input[type=radio]', function(){
		   var freqq_val;
		    if(jQuery('#daily1').is(':checked')){
			freqq_val=$('#daily1').val();
		    }
		   else if(jQuery('#monthly1').is(':checked')){
			freqq_val=$('#monthly1').val();
		    }

		    if($('input[id=macav2livneh]:checked').val()=="macav2livneh"){
			macav2livneh_and_daily_or_monthly();
			macav2livneh();
		     }
		    if($('input[id=macav1metdata]:checked').val()=="macav1metdata"){
			macav1metdata();
		    	 if(freqq_val=="_daily"){
				macav1metdata_and_daily();
			 }
		    	 else if(freqq_val=="_monthly"){
				macav1metdata_and_monthly();
			}
		     }
		    if($('input[id=mc2wfs]:checked').val()=="mc2_WithFireSuppression"){
			mc2();
			if(jQuery('#fulldomain').is(':checked')){
				console.log('mc2wfs-full')
				jQuery('.mc2pointrect').hide();jQuery('.mc2pointrect').prop('checked',false);
				jQuery('.mc2full').show();
			}else{
				console.log('mc2wfs-point')
				jQuery('.mc2full').hide();jQuery('.mc2full').prop('checked',false);
				jQuery('.mc2pointrect').show();
			}
	  	    }
		    if($('input[id=mc2wofs]:checked').val()=="mc2_WithoutFireSuppression"){
			mc2();
			if(jQuery('#fulldomain').is(':checked')){
				jQuery('.mc2pointrect').hide();jQuery('.mc2pointrect').prop('checked',false);
				jQuery('.mc2full').show();
			}else{
				jQuery('.mc2full').hide();jQuery('.mc2full').prop('checked',false);
				jQuery('.mc2pointrect').show();
			}
	  	    }
		    if($('input[id=3pg]:checked').val()=="3-PG"){
			pg3();
	  	    }
			if($('input[id=vic]:checked').val()=="vic"){
				vic();
				 if(freqq_val=="_daily"){
					jQuery('.hydrodaily').show();
					jQuery('.hydromonthly').hide();jQuery('.hydromonthly').prop('checked', false);
        				jQuery('.macav1metdataanddailyhydro').show();
				 }
				 else if(freqq_val=="_monthly"){
					jQuery('.hydromonthly').show();
					jQuery('.hydrodaily').hide();jQuery('.hydrodaily').prop('checked', false);
        				jQuery('.macav1metdataanddailyhydro').hide();jQuery('.macav1metdataanddailyhydro').prop('checked', false);
				}
			 }
			if($('input[id=vic]:checked').val()=="ulm"){
				ulm();
				 if(freqq_val=="_daily"){
					jQuery('.hydrodaily').show();
					jQuery('.hydromonthly').hide();jQuery('.hydromonthly').prop('checked', false);
				 }
				 else if(freqq_val=="_monthly"){
					jQuery('.hydromonthly').show();
					jQuery('.hydrodaily').hide();jQuery('.hydrodaily').prop('checked', false);
				}
			 }

	     });


//===============================
////  BIAS MAPS LISTENER: PRODUCTT CHANGE 
////===============================
	 jQuery('.producttmacav2').on('change', function(){
	    if(jQuery(this).val()=='macav2livneh'){
		jQuery('.notLIVNEH').hide();
		 jQuery('.notMETDATA').show();
	     }
	    if(jQuery(this).val()=='macav2metdata'){
		 jQuery('.notMETDATA').hide();
		 jQuery('.notLIVNEH').show();
		}
	});
});
