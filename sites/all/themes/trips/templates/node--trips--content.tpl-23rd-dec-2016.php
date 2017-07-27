<?php

/**
 * @file
 * Default theme implementation to display a node.
 *
 * Available variables:
 * - $title: the (sanitized) title of the node.
 * - $content: An array of node items. Use render($content) to print them all,
 *   or print a subset such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * - $user_picture: The node author's picture from user-picture.tpl.php.
 * - $date: Formatted creation date. Preprocess functions can reformat it by
 *   calling format_date() with the desired parameters on the $created variable.
 * - $name: Themed username of node author output from theme_username().
 * - $node_url: Direct URL of the current node.
 * - $display_submitted: Whether submission information should be displayed.
 * - $submitted: Submission information created from $name and $date during
 *   template_preprocess_node().
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the
 *   following:
 *   - node: The current template type; for example, "theming hook".
 *   - node-[type]: The current node type. For example, if the node is a
 *     "Blog entry" it would result in "node-blog". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node-teaser: Nodes in teaser form.
 *   - node-preview: Nodes in preview mode.
 *   The following are controlled through the node publishing options.
 *   - node-promoted: Nodes promoted to the front page.
 *   - node-sticky: Nodes ordered above other non-sticky nodes in teaser
 *     listings.
 *   - node-unpublished: Unpublished nodes visible only to administrators.
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 *
 * Other variables:
 * - $node: Full node object. Contains data that may not be safe.
 * - $type: Node type; for example, story, page, blog, etc.
 * - $comment_count: Number of comments attached to the node.
 * - $uid: User ID of the node author.
 * - $created: Time the node was published formatted in Unix timestamp.
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 * - $zebra: Outputs either "even" or "odd". Useful for zebra striping in
 *   teaser listings.
 * - $id: Position of the node. Increments each time it's output.
 *
 * Node status variables:
 * - $view_mode: View mode; for example, "full", "teaser".
 * - $teaser: Flag for the teaser state (shortcut for $view_mode == 'teaser').
 * - $page: Flag for the full page state.
 * - $promote: Flag for front page promotion state.
 * - $sticky: Flags for sticky post setting.
 * - $status: Flag for published status.
 * - $comment: State of comment settings for the node.
 * - $readmore: Flags true if the teaser content of the node cannot hold the
 *   main body content.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 * - $is_admin: Flags true when the current user is an administrator.
 *
 * Field variables: for each field instance attached to the node a corresponding
 * variable is defined; for example, $node->body becomes $body. When needing to
 * access a field's raw values, developers/themers are strongly encouraged to
 * use these variables. Otherwise they will have to explicitly specify the
 * desired field language; for example, $node->body['en'], thus overriding any
 * language negotiation rule that was previously applied.
 *
 * @see template_preprocess()
 * @see template_preprocess_node()
 * @see template_process()
 *
 * @ingroup themeable
 */
?>
<?php
$background_style=""; 
if(!empty($node->field_trip_main_image['und']['0']['uri']))
{
$background_url = file_create_url($node->field_trip_main_image['und']['0']['uri']);
$background_style="style=\"background:url('". $background_url."') top center no-repeat; background-size: cover;\"";
}
?>
<div id="node-<?php print $node->nid; ?>" class="trekking_wrap <?php print $classes; ?>" <?php print $background_style; ?> >
<!--Image Background Content--><div class="white-wrapper">
<div class="trekking_styles">
<p><?php 
$output = render($content['field_trip_type']);
if (strpos($output, ',') !== FALSE) {
print end(explode(',', $output));
}else{
print render($content['field_trip_type']);
}
?></p>
<h1><?php print $title; ?></h1>
<h2><?php print render($content['field_location']);?></h2>
<div class="trip_overlay"></div>
<div class="ever_part">
<div class="white-wrapper">
<ul class="trip_heart_ul2"><li><?php print render($content['field_actual_duration']);?><span>DAYS</span></li>
<li><?php print render($content['field_max_group_size']);?><span>MAX GROUP SIZE</span></li>
<li><?php if($content['field_trip_price']){?><i class="icon-rupee"></i> <?php print render($content['field_trip_price']);?><?php }else{ ?>On Request<?php } ?><span><?php if($content['field_start_to_end']){ print render($content['field_start_to_end']);}else{?>START POINT TO END POINT<?php }?></span></li>
<li><?php print render($content['field_max_altitude']);?><span>MAX ALTITUDE</span></li>
<li><img src="/sites/all/themes/trips/images/mod<?php print $node->field_difficulty_score['und']['0']['value'];?>.png" alt="grading" style="margin-top: -15px;">
<?php print render($content['field_difficulty_score']);?><span><?php print strtoupper(render($content['field_exp']));?></span></li>
</ul>
</div>
</div>
</div>
</div>
<!--Image Background Content--></div>
<!--tabs-->
<div id="treking_tab"></div>
 <div class="treking_tab">
              <div class="white-wrapper">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                  <li role="presentation" class="active">
                    <a href="#description" aria-controls="description" role="tab" data-toggle="tab">description</a>
                    <div class="double_arrow">
                      <p class="arrow_one"></p>
                      <p class="arrow_two"></p>
                    </div>
                  </li>
                  <li role="presentation">
                    <a href="#itinerary" aria-controls="itinerary" role="tab" id="itenarylink" data-toggle="tab">itinerary</a>
                    <div class="double_arrow">
                      <p class="arrow_one"></p>
                      <p class="arrow_two"></p>
                    </div>
                  </li>
                  <li role="presentation">
                    <a href="#cost" aria-controls="cost" role="tab" data-toggle="tab">cost details</a>
                    <div class="double_arrow">
                      <p class="arrow_one"></p>
                      <p class="arrow_two"></p>
                    </div>
                  </li>
                  <li role="presentation">
                    <a href="#photo" aria-controls="photo" role="tab" data-toggle="tab">photo gallery</a>
                    <div class="double_arrow">
                      <p class="arrow_one"></p>
                      <p class="arrow_two"></p>
                    </div>
                  </li>
                  <!--<li role="presentation">
                    <a href="#trip" aria-controls="trip" role="tab" data-toggle="tab">trip stories</a>
                    <div class="double_arrow">
                      <p class="arrow_one"></p>
                      <p class="arrow_two"></p>
                    </div>
                  </li>-->
                </ul>
                <div class="clearfix"></div>
              </div>
            </div>
			<!--tabs-->
			
			<!-- Tab panes -->
          <div class="row">
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="description">
                <div class="trek_content">
                  <div class="white-wrapper">
                   <?php print render($content['body']);?>
                    <h2 class="heading_border"><span>Quick itinerary</span><span class="heading_line"></span></h2>
                    <div class="quick_wrap trek_exp">
                      <?php print render($content['field_iteninery']);?>
                    </div>
                  </div>
                </div>
              </div>
			  <div role="tabpanel" class="tab-pane" id="itinerary">
                <div class="trek_content">
                  <div class="white-wrapper">
				   <ul class="itinerary-dates">
                    <?php //print render($content['field_trip_date']);
					foreach ($content['field_trip_date']['#items'] as $key=> $item) {
						if(strtotime($item['value'])> strtotime(date('Y-m-d') ))
						print "<li>" .strip_tags($content['field_trip_date'][$key]['#markup'])."</li>";
					}
					?>
					</ul>
                    <h2 class="heading_border"><span>Detailed itinerary</span><span class="heading_line"></span></h2>
                    <div class="quick_wrap trek_exp">
                      <?php print render($content['field_detailed_iteninery']);?>
                    </div>
				 </div>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane" id="cost">
                <div class="trek_content">
                  <div class="white-wrapper inclusion-exclusion">
                    <h3>Cost details</h3>
                    <h4><?php if($content['field_trip_price']){?><span><i class="icon-rupee"></i></span> <?php print render($content['field_trip_price']);}else{print "On Request";} if($content['field_trip_price_us']){?> / <span><i class="icon-dollar"></i></span><?php print render($content['field_trip_price_us']);}?></h4>
                    <div class="mT40">
                      <div class="col-sm-12 col-md-6 noP">
                        <div class="quick_wrap trek_exp incl-excl">
                          <h5>INCLUSIONS</h5>
                          <?php print render($content['field_inclusion']);?>
                        </div>
                      </div>
                      <div class="col-sm-12 col-md-6 noP">
                        <div class="quick_wrap trek_exp incl-excl">
                          <h5>EXCLUSIONS</h5>
                          <?php print render($content['field_exclusion']);?>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane" id="photo">
                <div class="trek_content">
                  <div class="white_container">
                    <div class="white-wrapper">
                      <div class="col-sm-12 col-md-12 noP">
                        <div class="docs-galley">
                         <?php print render($content['field_trip_images']);?>
					    </div>
                      </div>
					  <div class="col-sm-12 col-md-12 mT40">
                        <?php print render($content['field_facebook_album_link']);?>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php 
			$trip_booking=false;
			$node->field_trip_price['und']['0']['value'] = str_replace(",", "", $node->field_trip_price['und']['0']['value']); 	
			$booking_amt = str_replace(",", "", $node->field_booking_amount_indian['und']['0']['value']); 	
			$pending_amt=$node->field_trip_price['und']['0']['value']-$booking_amt;
			?>
		  <div class="trek_content white-wrapper">
			<?php 
			$trip_booking=false;
			foreach ($content['field_trip_date']['#items'] as $key=> $item) {
			  if(strtotime($item['value'])> strtotime(date('Y-m-d') )){
				$trip_booking=true;	
			?>
			<form method="post" action="/trip-order-form">
					  <input type="hidden" name="trip_type" value="1">
  					  <input type="hidden" name="start_date" value="<?php print date("d-m-Y", strtotime($item['value']));?>">
					  <input type="hidden" name="end_date" value="<?php print date("d-m-Y", strtotime($item['value2']));;?>">
					  <input type="hidden" name="select_trip" value="<?php print $node->nid;?>">
					  <input type="hidden" name="trip_amount" value="<?php print $node->field_trip_price['und']['0']['value'];?>">
			<?php if((strtotime($item['value'])> strtotime("+1 month",strtotime(date('Y-m-d') )))&& ($booking_amt >0)){?>
					  <input type="hidden" name="booking_amount" value="<?php print $booking_amt;?>">					 
					 <p class="book_btn even"> 
					 <span><?php print strip_tags($content['field_trip_date'][$key]['#markup']);?></span>
					 <input type="Submit" name="advanced" value="BOOK NOW"></p>
			<?php }else {?>
							<p class="book_btn even">
							<span><?php print strip_tags($content['field_trip_date'][$key]['#markup']);?></span>
							<input type="Submit" name="full" value="BOOK NOW"></p>
			<?php } ?>	
			</form>
			<?php 
				} 
			}?>
			<?php if(!$trip_booking){ ?>
					<form method="post" action="/trip-order-form">
					  <input type="hidden" name="trip_type" value="1">
  					  <input type="hidden" name="select_trip" value="<?php print $node->nid;?>">
					  <input type="hidden" name="trip_amount" value="<?php print $node->field_trip_price['und']['0']['value'];?>">
					 <p class="book_btn"><input type="Submit" name="submit" value="BOOK NOW"></p>
					</form>	
		   	<?php } ?>						  		  
		 </div>
		  <!--Tab-->	  