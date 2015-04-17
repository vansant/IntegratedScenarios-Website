(function($){
	window.get_climateplots = function(){

	 $.ajax( {   url : "myjs/get_climateplots_allmonths.php",
               dataType: 'json',
                type    : 'post',
               data    : $('#form_div').serialize(),
                success : function(data){
                               if (data.status == "success"){
                                        $('img#target_image_1').attr({src: data.source1}).parent().attr({href:data.source1});
                                        $('img#target_image_2').attr({src: data.source2}).parent().attr({href:data.source2});
                                        $('img#target_image_3').attr({src: data.source3}).parent().attr({href:data.source3});
                                        $('img#target_image_4').attr({src: data.source4}).parent().attr({href:data.source4});
                                        $('img#target_image_5').attr({src: data.source5}).parent().attr({href:data.source5});
                                        $('img#target_image_6').attr({src: data.source6}).parent().attr({href:data.source6});
                                        $('img#target_image_7').attr({src: data.source7}).parent().attr({href:data.source7});
                                        $('img#target_image_8').attr({src: data.source8}).parent().attr({href:data.source8});
                                }
                                else{
                                        alert(data.error)
                                }
                        } // anon function
                }); // ajax

        } //  getPic
})(jQuery);
