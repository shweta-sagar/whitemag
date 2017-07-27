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
/*if(!empty($node->field_trip_main_image['und']['0']['uri']))
{
$background_url = file_create_url($node->field_trip_main_image['und']['0']['uri']);
$background_style="style=\"background:url('". $background_url."') top center no-repeat; background-size: cover;\"";
}
*/
?>
<div id="node-<?php print $node->nid; ?>" class=" <?php print $classes; ?>" >
<div class="about_wrap">
<!--<p class="site-image-caption"><span>White Magic was born out of our love for the Himalaya and a desire to share this love with the world.</span></p>
-->
</div>

<!--tabs-->
<div id="treking_tab"></div>
 <div class="treking_tab">
              <div class="white-wrapper">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                  <li role="presentation" class="active">
                    <a href="#aboutus" aria-controls="aboutus" role="tab" data-toggle="tab">ABOUT US</a>
                    <div class="double_arrow">
                      <p class="arrow_one"></p>
                      <p class="arrow_two"></p>
                    </div>
                  </li>
                  <li role="presentation">
                    <a href="#whyus" aria-controls="whyus" role="tab" id="itenarylink" data-toggle="tab">WHY US</a>
                    <div class="double_arrow">
                      <p class="arrow_one"></p>
                      <p class="arrow_two"></p>
                    </div>
                  </li>
                  <li role="presentation">
                    <a href="#news" aria-controls="news" role="tab" data-toggle="tab">IN THE NEWS</a>
                    <div class="double_arrow">
                      <p class="arrow_one"></p>
                      <p class="arrow_two"></p>
                    </div>
                  </li>
                  <li role="presentation">
                    <a href="#wmfoundation" aria-controls="wmfoundation" role="tab" data-toggle="tab">RESPONSIBLE TRAVEL</a>
                    <div class="double_arrow">
                      <p class="arrow_one"></p>
                      <p class="arrow_two"></p>
                    </div>
                  </li>
                  </ul>
                <div class="clearfix"></div>
              </div>
            </div>
			<!--tabs-->
			
			<!-- Tab panes -->
          <div class="row">
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="aboutus">
			  	<div class="grey_content text-center">
                  <div class="white-wrapper">
                   <?php print render($content['field_short_desc']);?>            
                  </div>
				</div>  
				<div class="white_content text-center">
                  <div class="white-wrapper">
				  <h2>Regions where we can take you</h2>
				   <hr class="h2_under"/>
                   <?php print render($content['body']);?>            
                  </div>
                </div>
				<div class="grey_content text-center clearfix" style="z-index:1">
                  <div class="white-wrapper">
				  <h2>Our Team</h2>
				    <hr class="h2_under"/>
                   <?php print render($content['field_our_team']);?>       
					<?php
					//$block = module_invoke('news', 'block', 'view', 0);
					//print $block['content'];
					echo views_embed_view('our_team', 'block_2');
					?>
                    
                  </div>
				</div>  
				<div class="white_content text-center">
                  <div class="white-wrapper ">
				  <h2>Our Culture</h2>
				  <hr class="h2_under"/>
                   <?php print render($content['field_our_culture']);?>            
                  </div>
                </div>
              </div>
			  <div role="tabpanel" class="tab-pane" id="whyus">
			  <div class="grey_content no-pad">
                   <?php print render($content['field_why_us']);?>            
			  </div>		
              </div>
              <div role="tabpanel" class="tab-pane" id="news">
                  <div class="white-wrapper" style="margin-top:50px!important;">
                   <?php
					//$block = module_invoke('news', 'block', 'view', 0);
					//print $block['content'];
					echo views_embed_view('news', 'page');
					?>  
                </div>
              </div>
              <div role="tabpanel" class="tab-pane" id="wmfoundation">
				<div class="mrg50">
                  <div class="white-wrapper text-center">
                   <?php print render($content['field_wm_foundation']);?>            
                  </div>
				</div>  
              </div>
			   	
            </div>
          </div>
</div>