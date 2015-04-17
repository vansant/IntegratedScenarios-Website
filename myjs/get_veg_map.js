(function($){
        window.get_veg_map = function(){

         $.ajax( {   url : "myjs/get_veg_map_options.php",
               dataType: 'json',
                type    : 'post',
               data    : $('#form_div_veg').serialize(),
                success : function(data){
                               if (data.status == "success"){
                                        $('img#target_image_1_3pg').attr({src: data.source1}).parent().attr({href:data.source1});
                                        $('img#target_image_2_3pg').attr({src: data.source2}).parent().attr({href:data.source2});
                                        $('img#target_image_3_3pg').attr({src: data.source3}).parent().attr({href:data.source3});

                                        $('img#target_image_1_3pg_all').attr({src: data.source1}).parent().attr({href:data.source1});
                                        $('img#target_image_2_3pg_all').attr({src: data.source2}).parent().attr({href:data.source2});
                                        $('img#target_image_3_3pg_all').attr({src: data.source3}).parent().attr({href:data.source3});
                                        $('img#target_image_0').attr({src: data.source0}).parent().attr({href:data.source0});
                                        $('img#target_image_1').attr({src: data.source1}).parent().attr({href:data.source1});
                                        $('img#target_image_2').attr({src: data.source2}).parent().attr({href:data.source2});
                                        $('img#target_image_3').attr({src: data.source3}).parent().attr({href:data.source3});
                                        $('img#target_image_4').attr({src: data.source4}).parent().attr({href:data.source4});
                                        $('img#target_image_5').attr({src: data.source5}).parent().attr({href:data.source5});
                                        $('img#target_image_6').attr({src: data.source6}).parent().attr({href:data.source6});
                                        $('img#target_image_7').attr({src: data.source7}).parent().attr({href:data.source7});
                                        $('img#target_image_8').attr({src: data.source8}).parent().attr({href:data.source8});
                                        $('img#target_image_9').attr({src: data.source9}).parent().attr({href:data.source9});
                                        $('img#target_image_10').attr({src: data.source10}).parent().attr({href:data.source10});
                                        $('img#target_image_11').attr({src: data.source11}).parent().attr({href:data.source11});
                                        $('img#target_image_12').attr({src: data.source12}).parent().attr({href:data.source12});
                                        $('img#target_image_13').attr({src: data.source13}).parent().attr({href:data.source13});
                                        $('img#target_image_14').attr({src: data.source14}).parent().attr({href:data.source14});
                                        $('img#target_image_15').attr({src: data.source15}).parent().attr({href:data.source15});
                                        $('img#target_image_16').attr({src: data.source16}).parent().attr({href:data.source16});
                                        $('img#target_image_17').attr({src: data.source17}).parent().attr({href:data.source17});
                                        $('img#target_image_18').attr({src: data.source18}).parent().attr({href:data.source18});
                                        $('img#target_image_19').attr({src: data.source19}).parent().attr({href:data.source19});
                                        $('img#target_image_20').attr({src: data.source20}).parent().attr({href:data.source20});
                                        $('img#target_image_21').attr({src: data.source21}).parent().attr({href:data.source21});

                                        $('img#target_image_hist3pg').attr({src: data.sourcehist}).parent().attr({href:data.sourcehist});
                                        $('img#target_image_fut3pg').attr({src: data.sourcefut}).parent().attr({href:data.sourcefut});
                                        $('img#target_image_anom3pg').attr({src: data.sourceanom}).parent().attr({href:data.sourceanom});

                                        $('img#target_image_histmc2').attr({src: data.sourcehist}).parent().attr({href:data.sourcehist});
                                        $('img#target_image_futmc2').attr({src: data.sourcefut}).parent().attr({href:data.sourcefut});
                                        $('img#target_image_anommc2').attr({src: data.sourceanom}).parent().attr({href:data.sourceanom});
                                }
                                else{
                                        alert(data.error)
                                }
                        } // anon function
                }); // ajax
        } //  getPic
})(jQuery);
