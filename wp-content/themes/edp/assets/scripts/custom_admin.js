
             function ms_admin_venue(area, url, datastr, method, disabled) {

                        

                        jQuery.ajax({
                            type: method,
                            url: ajaxurl,
                            data: {
                                'action': url,
                                'datastr': datastr
                            },
                            success: function(data) {
                              
                              obj = jQuery.parseJSON(data);
                              console.log(obj.rw_venue_address);
                               jQuery('#rw_venue_city').val(obj.rw_venue_city);
                                jQuery('#rw_venue_state').val(obj.rw_venue_state);
                                jQuery('#rw_venue_postcode').val(obj.rw_venue_postcode);
                                jQuery('#rw_venue_phone').val(obj.rw_venue_phone);
                                jQuery('#rw_venue_website').val(obj.rw_venue_website);
                                jQuery('#rw_venue_address').val(obj.rw_venue_address);
                                jQuery('#rw_venue_suburb').val(obj.rw_venue_suburb);
                                
/*
                              if(disabled === 1){
                               // alert(disabled);
                                    jQuery("#" + area).prop('disabled', false);
                              }
                                

                                jQuery("#" + area).html(data);
                                */


                                



                            },
                            error: function(errorThrown) {
                                console.log(errorThrown);
                            }
                        });
                    }

           

                var result = jQuery('#venue-meta .rwmb-autocomplete-result').html();
                
                if(result != undefined){
                    jQuery("#venue-meta .rwmb-autocomplete-search").hide();
                    var vanue_id = jQuery("#venue-meta .rwmb-autocomplete-result input").val();
                    jQuery("#venue-meta #rw_venue_newname").val("");
                    jQuery("#venue-meta #rw_venue_newname").hide();
                    jQuery("#venue-meta .rwmb-autocomplete-wrapper").next(".rwmb-text-wrapper").hide();
                    ms_admin_venue('', 'get_venu_info', vanue_id, 'POST', 1);

                }




                 jQuery("body").delegate("#ui-id-2 .ui-menu-item", "click", function(e) {

                          

                            var vanue_id = jQuery("#venue-meta .rwmb-autocomplete-result input").val();
                            jQuery('#venue-meta  #rw_venue_name_id').val(vanue_id);
                            jQuery("#venue-meta  .rwmb-autocomplete-search").hide();
                            jQuery("#venue-meta  #rw_venue_newname").val("");
                            jQuery("#venue-meta  #rw_venue_newname").hide();
                            jQuery("#venue-meta  .rwmb-autocomplete-wrapper").next(".rwmb-text-wrapper").hide();
                            
                           ms_admin_venue('', 'get_venu_info', vanue_id, 'POST', 1);

                        });

                   jQuery("body").delegate("#venue-meta .rwmb-autocomplete-result .actions", "click", function(e) {
                    jQuery("#venue-meta .rwmb-autocomplete-search").show();
                    jQuery('#venue-meta #rw_venue_name_id').val("");
                    jQuery('#venue-meta #rw_venue_city').val("");
                    jQuery('#venue-meta #rw_venue_state').val("");
                    jQuery('#venue-meta #rw_venue_postcode').val("");
                    jQuery('#venue-meta #rw_venue_phone').val("");
                    jQuery('#venue-meta #rw_venue_website').val("");
                    jQuery('#venue-meta #rw_venue_address').val("");
                    jQuery('#venue-meta #rw_venue_suburb').val("");
                    jQuery('#venue-meta .rwmb-autocomplete-result').html("");
                    jQuery('#venue-meta .rwmb-autocomplete-result').css("border-bottom","0px");
                    jQuery('#venue-meta .rwmb-autocomplete-result').css("padding","0em 0");

                    
                    jQuery("#venue-meta .rwmb-autocomplete-wrapper").next(".rwmb-text-wrapper").show();
                    jQuery("#venue-meta #rw_venue_newname").show();
                    
                    
                    
                   });

                 

            
                
               

             