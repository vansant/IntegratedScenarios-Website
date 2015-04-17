(function($){
	window.get_projections_map= function(){
	// check to see if ready
	$.ajax( {   url : "myjs/get_MACAsignal_url.php",
		dataType: 'json',
		type    : 'post',
		data    : $('#form_div_climate').serialize(),
		success : function(data){
				if (data.status == "success"){
					$('img#target_image').attr({src: data.source}).parent().attr({href:data.source});
				}
				else{
					alert(data.error)
				}
			} // anon function
		}); // ajax

        } // get_projections_map

})(jQuery);
