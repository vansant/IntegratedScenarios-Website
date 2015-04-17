(function($){
	window.ck_urldownload= function(){

		if ( !$('input[name=model]').val()) {
			window.alert("You need to select at least one model");
		}else if ( !$('input[name=varr]').val()) {
			window.alert("You need to select at least one variable");
		}else if ( !$('input[name=timee]').val()) {
			window.alert("You need to select at least one scenario-time period combination");
		}else if ( !$('input[name=freqq]').val()) {
			window.alert("You need to select a time frequency scale");
		}else if ( !$('input[name=productt]').val()){ 
			window.alert("You need to select a data product");
		}else if ( $('input[name=domainn]').val()=='point'){ 
			
		}

	};
})(jQuery);
