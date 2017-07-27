<?php
$img_url = $node->field_image['und']['0']['uri'];  // the orig image uri
$difficulty=$node->field_difficulty_score['und']['0']['value'];
$price=$node->field_trip_price['und']['0']['value'];
$style = '430_x_251'; 
?>
<div class="trip-box">
      
          <div class="col-xs-12 col-sm-4 mB">
                    <div class="trip_box_border">
                      <div class="trip_heart">
                        <b class="circle_heart"><i class="icon-heart"></i></b>
                        <h2><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
                        <h3><?php print render($content['field_location']);?></h3>
                        <p>Trek</p>
                        <ul class="trip_heart_ul">
                          <li><?php print render($content['field_actual_duration']);?><span>DAYS</span></li>
                          <li><?php print render($content['field_max_group_size']);?><span>MAX GROUP SIZE</span></li>
                          <li>
                            <span class="span_two">
                              <img src="/sites/all/themes/trips/images/mod<?php print $difficulty;?>.png">
                              <p><?php print render($content['field_difficulty_score']);?></p>
                              <b>Moderate</b>
                            </span>
                            <div class="wht_mgc_dd">
                              <div class="double_arrow">
                                  <p class="arrow_one"></p>
                                  <p class="arrow_two"></p>
                                </div>
                              <ul>
                                
                                <img src="/sites/all/themes/trips/images/seven_hover_img.png" width="100%">
                              </ul>
                            </div>
                          </li>
                        </ul>
                        <div class="clearfix"></div>
                      </div>
                      <div class="trip_picture">
                        <a href="<?php print $node_url; ?>">
						<img typeof="foaf:Image" src="<?php print image_style_url($style, $img_url) ?>" alt=""></a>
                        <div class="trip_overlay"></div>
                        <div class="trip_pic_text">
                          <h4><!--<span class="date-display-start" property="dc:date" datatype="xsd:dateTime" content="2016-06-18T00:00:00+05:30">18 Jun, 2016</span> - <span class="date-display-end" property="dc:date" datatype="xsd:dateTime" content="2016-06-26T00:00:00+05:30">26 Jun, 2016</span>--></h4>
                          <h5>
						  <?php if(!empty($price)){?>
						  <i class="icon-rupee"></i><?php print $node->field_trip_price['und']['0']['value'];?></h5>
                          <?php }else{?>
						  On Request
						  <?php }?>
						</div>
                      </div>
                    </div>
                  </div>
    </div>