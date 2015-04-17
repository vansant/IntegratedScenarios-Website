function CheckForm(arrName){
	var checked=false;
	var elements = document.getElementsByName(arrName);
	for(var i=0; i < elements.length; i++){
		if(elements[i].checked) {
			checked = true;
		}
	}
	return checked;
}

(function($){
	window.get_urldownload = function(){
		if ( !CheckForm("model[]")) {
			window.alert("You need to select at least one Model");
			return false;
		}else if ( !CheckForm("varr[]")){
			window.alert("You need to select at least one Variable");
			return false;
		}else if ( !CheckForm("timee[]")){
			window.alert("You need to select at least one Scenario-Time Period" );
			return false;
		}else if ( !CheckForm("freqq[]")){
			window.alert("You need to select a Time Frequency scale");
			return false;
		}else if ( !CheckForm("productt[]")){
			window.alert("You need to select a data Product");
			return false;
		}else if ( $('select[name=domainn]').val()=='point'){
			if($('input[id=macav1metdata]:checked').val()=='macav1metdata'){
				$lat_min = 31.0213;
				$lat_max = 49.3960;
				$lon_min=-124.7722;
				$lon_max=-103.0225;
			}else if($('input[id=macav2livneh]:checked').val()=='macav2livneh'){
				$lat_min = 30;
				$lat_max = 50;
				$lon_min=-125;
				$lon_max=-67;
			}else if($('input[id=3pg]:checked').val()=='3-PG' || $('input[id=mc2wfs]:checked').val()=='mc2_WithFireSuppression' ||  $('input[id=mc2wofs]:checked').val()=='mc2_WithoutFireSuppression'){
				$lat_min = 31.0213;
				$lat_max = 49.3960;
				$lon_min=-124.7722;
				$lon_max=-103.0225;
			}else if($('input[id=vic]:checked').val()=='vic' || $('input[id=ulm]:checked').val()=='ulm'){
				$lat_min = 29.0312;
				$lat_max = 52.8438;
				$lon_min=-124.5938;
				$lon_max=-103.0312;
			}
			 if ( $('input[name=latPoint]').val()>$lat_min &  $('input[name=latPoint]').val()<$lat_max){
				window.alert("The latitude of your points needs to be between "+ $lat_min + 'N and '+$lat_max+'N.');
				return false;
			}else{
				return true;
			}
			 if ( $('input[name=lonPoint]').val()>$lon_min &  $('input[name=lonPoint]').val()<$lon_max){
				window.alert("The latitude of your points needs to be between "+ $lon_min + 'N and '+$lon_max+'N.');
				return false;
			}else{
				return true;
			}
		}else{
			 unclick_hidden("varr[]");
			 unclick_hidden("timee[]");
			 unclick_hidden("model[]");
			return true;
		}
	};
})(jQuery);
