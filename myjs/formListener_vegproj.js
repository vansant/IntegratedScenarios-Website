$(function(){


jQuery('#varr3pg').on('change', function(){
    if(jQuery(this).val()=='JUNELAI'){
 	jQuery('.WS').hide();
 	jQuery('.NPP').hide();
 	jQuery('.LAI').show();

     }else if (jQuery(this).val() =='MEANANNUALNPP'){
 	jQuery('.WS').hide();
 	jQuery('.NPP').show();
 	jQuery('.LAI').hide();

     }else if (jQuery(this).val() =='JUNEWS'){
 	jQuery('.WS').show();
 	jQuery('.NPP').hide();
 	jQuery('.LAI').hide();
     }
	get_veg_map();
});


jQuery('#varrmc2').on('change', function(){
    if(jQuery(this).val()=='MeanEcosysCarbon'){
	jQuery('.ModVeg').hide();
	jQuery('.EcoCarbon').show();
	jQuery('.AreaBurned').hide();

     }else if (jQuery(this).val() =='MeanFractionAreaBurned'){
	jQuery('.ModVeg').hide();
	jQuery('.EcoCarbon').hide();
	jQuery('.AreaBurned').show();

     }else if (jQuery(this).val() =='ModalVeg'){
	jQuery('.ModVeg').show();
	jQuery('.EcoCarbon').hide();
	jQuery('.AreaBurned').hide();
     };
	get_veg_map();
});

//not convinced this is used anymore
//jQuery('#options').on('change', function(){
//    if(jQuery(this).val()=='allmodels'){
//	console.log("allmodels");
//	 jQuery('.timee').show();
//	 jQuery('.scenn').show();
//	 jQuery('.modell').hide();
 //   }
//    else if(jQuery(this).val()=='allscen'){
//	console.log("allscen");
//	 jQuery('.timee').show();
//	 jQuery('.scenn').hide();
//	 jQuery('.modell').show();
 //   }
//    else if(jQuery(this).val()=='allperiods'){
//	console.log("allperiods");
//	 jQuery('.timee').hide();
//	 jQuery('.scenn').show();
//	 jQuery('.modell').show();
 //   }
 //   else{
//	console.log("else");
//	 jQuery('.timee').hide();
//	 jQuery('.scenn').hide();
//	 jQuery('.modell').hide();
 //    }
//}); //change


jQuery('#vegproductt').on('change', function(){
	get_veg_map();
    if(jQuery(this).val()=='3pg'){
	 jQuery('.modell3pg').show();
	 jQuery('.modellmc2').hide();
	 jQuery('.scennmc2').hide();
	 jQuery('.timeemc2').hide();
	 jQuery('.timee3pg').show();
	 jQuery('.varr3pg').show();
	 jQuery('.varrmc2').hide();
	 jQuery('.seasonn3pg').show();
	 jQuery('.seasonnmc2').hide();
	 jQuery('.exppmc2').hide();
	 jQuery('.options3pg').show();
	 jQuery('.optionsmc2').hide();
	 jQuery('.mc2allmodels').hide();
	 jQuery('.mc2onemodel').hide();
	 jQuery('.3pg').show();
	 jQuery('.mc2').hide();
	console.log(jQuery('#varr3pg').val())
	if(jQuery('#varr3pg').val()=='JUNELAI'){
		jQuery('.WS').hide();
		jQuery('.NPP').hide();
		jQuery('.LAI').show();

	     }else if (jQuery('#varr3pg').val() =='MEANANNUALNPP'){
		jQuery('.WS').hide();
		jQuery('.NPP').show();
		jQuery('.LAI').hide();

	     }else if (jQuery('#varr3pg').val() =='JUNEWS'){
		jQuery('.WS').show();
		jQuery('.NPP').hide();
		jQuery('.LAI').hide();
	     }
	  if(jQuery('#options3pg').val()=='allmodels'){
                 jQuery('.modell3pg').hide();
                 jQuery('.3pgallmodels').show();
                 jQuery('.3pgonemodel').hide();
                 jQuery('.mc2allmodels').hide();
                 jQuery('.mc2onemodel').hide();
             }
            else if(jQuery('#options3pg').val()=='onemodel'){
                 jQuery('.modell3pg').show();
                 jQuery('.3pgallmodels').hide();
                 jQuery('.3pgonemodel').show();
                 jQuery('.mc2allmodels').hide();
                 jQuery('.mc2onemodel').hide();
             }
	
    }
    else if(jQuery(this).val()=='mc2'){
	 jQuery('.modell3pg').hide();
	 jQuery('.modellmc2').hide();
	 jQuery('.scennmc2').hide();
	 jQuery('.timeemc2').show();
	 jQuery('.timee3pg').hide();
	 jQuery('.varr3pg').hide();
	 jQuery('.varrmc2').show();
	 jQuery('.seasonn3pg').hide();
	 jQuery('.seasonnmc2').show();
	 jQuery('.exppmc2').show();
	 jQuery('.options3pg').hide();
	 jQuery('.optionsmc2').show();
	 jQuery('.3pgallmodels').hide();
	 jQuery('.3pgonemodel').hide();
	 jQuery('.mc2allmodels').show();
 	jQuery('.WS').hide();
 	jQuery('.NPP').hide();
 	jQuery('.LAI').hide();
	 jQuery('.3pg').hide();
	 jQuery('.mc2').show();
		
	  if(jQuery('#varrmc2').val()=='MeanEcosysCarbon'){
		jQuery('.ModVeg').hide();
		jQuery('.EcoCarbon').show();
		jQuery('.AreaBurned').hide();

	     }else if (jQuery('#varrmc2').val() =='MeanFractionAreaBurned'){
		jQuery('.ModVeg').hide();
		jQuery('.EcoCarbon').hide();
		jQuery('.AreaBurned').show();

	     }else if (jQuery('#varrmc2').val() =='ModalVeg'){
		jQuery('.ModVeg').show();
		jQuery('.EcoCarbon').hide();
		jQuery('.AreaBurned').hide();
	     };
	    if(jQuery('#optionsmc2').val()=='allmodels'){
		 jQuery('.modellmc2').hide();
		 jQuery('.3pgallmodels').hide();
		 jQuery('.3pgonemodel').hide();
		 jQuery('.mc2allmodels').show();
		 jQuery('.mc2onemodel').hide();
		 jQuery('.modellmc2').hide();
	     }
	    else if(jQuery('#optionsmc2').val()=='onemodel'){
		 jQuery('.modellmc2').show();
		 jQuery('.3pgallmodels').hide();
		 jQuery('.3pgonemodel').hide();
		 jQuery('.mc2allmodels').hide();
		 jQuery('.mc2onemodel').show();
		 jQuery('.modellmc2').show();
	     }


    }else{
	 jQuery('.modell3pg').hide();
	 jQuery('.modellmc2').hide();
	 jQuery('.scennmc2').hide();
	 jQuery('.timeemc2').hide();
	 jQuery('.timee3pg').hide();
	 jQuery('.varr3pg').hide();
	 jQuery('.varrmc2').hide();
	 jQuery('.seasonn3pg').hide();
	 jQuery('.seasonnmc2').hide();
	 jQuery('.3pg').hide();
	 jQuery('.mc2').hide();
     }
}); //change

jQuery('#options3pg').on('change', function(){
	    if(jQuery(this).val()=='allmodels'){
		 jQuery('.modell3pg').hide();
		 jQuery('.3pgallmodels').show();
		 jQuery('.3pgonemodel').hide();
		 jQuery('.mc2allmodels').hide();
		 jQuery('.mc2onemodel').hide();
	     }
	    else if(jQuery(this).val()=='onemodel'){
		 jQuery('.modell3pg').show();
		 jQuery('.3pgallmodels').hide();
		 jQuery('.3pgonemodel').show();
		 jQuery('.mc2allmodels').hide();
		 jQuery('.mc2onemodel').hide();
	     }
	get_veg_map();

}); //change

jQuery('#optionsmc2').on('change', function(){
    if(jQuery(this).val()=='allmodels'){
	 jQuery('.modellmc2').hide();
	 jQuery('.3pgallmodels').hide();
	 jQuery('.3pgonemodel').hide();
	 jQuery('.mc2allmodels').show();
	 jQuery('.mc2onemodel').hide();
	 jQuery('.modellmc2').hide();
     }
    else if(jQuery(this).val()=='onemodel'){
	 jQuery('.modellmc2').show();
	 jQuery('.3pgallmodels').hide();
	 jQuery('.3pgonemodel').hide();
	 jQuery('.mc2allmodels').hide();
	 jQuery('.mc2onemodel').show();
	 jQuery('.modellmc2').show();
     }
	get_veg_map();
}); //change


jQuery('#exppmc2,#modell3pg,#modellmc2,#timee3pg,#timeemc2').on('change', function(){
	get_veg_map();
}); //change

});
