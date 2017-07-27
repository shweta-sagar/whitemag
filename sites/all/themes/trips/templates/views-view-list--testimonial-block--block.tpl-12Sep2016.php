<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * - $title : The title of this group of rows.  May be empty.
 * - $options['type'] will either be ul or ol.
 * @ingroup views_templates
 */
?>
<?php print $wrapper_prefix; ?>
  <?php if (!empty($title)) : ?>
    <h3><?php print $title; ?></h3>
  <?php endif; ?>
  <ul class="responsive trip_box">
    <?php foreach ($rows as $id => $row): ?>
      <li class="<?php print $classes_array[$id]; ?>"><?php print $row; ?></li>
    <?php endforeach; ?>
	<li>  
          <!--<div class="trip_user live-reviews">
                    <img typeof="foaf:Image" src="/sites/all/themes/trips/images/logo-reviews.png">
					  <h2>&nbsp;</h2>
                      <p>&nbsp;</p>
                    </div>
					
                    <div class="trip_picture wm-reviews">
					<div class="trip_pic_text">
                        <p>SHOW ALL REVIEWS FROM</p>
                      </div>
						<ul class="footer_social">
                        <li><a href="/trip/trek/panpatia-col" tabindex="0"><i class="icon-facebook"></i></a>
						<li><a href="/trip/trek/panpatia-col" tabindex="0"><i class="icon-google-plus"></i></a>
						</ul>
                      </div>
                    <div class="trip_desc wm-reviews">
                      <p><span class="pull-left"><i class="icon-quote-left"></i></span> <span class="pull-left trip_desc_span"><i>I hope this note finds you well. Once again I'd like to congratulate you on providing us with a first rate support team and express my sincerest appreciation for your accommodating attitude.</i></span> <span class="pull-right"><i class="icon-quote-right"></i></span></p>
                      <div class="clearfix"></div>
                    </div> -->
					
	<div class="trip_user live-reviews">
                     <img typeof="foaf:Image" src="/sites/all/themes/trips/images/logo-reviews.png">
                      <h2>White Magic</h2>
                    </div>

<div class="trip_picture live-reviews">                  
                      <div class="trip_pic_text">
						<h2>via Social Media</h2>
                        <h2>SHOW ALL REVIEWS FROM</h2>
                        <ul class="footer_social">
                        
			<li><a href="https://www.facebook.com/WhiteMagicAdventure/reviews" target="_blank" tabindex="0"><i class="icon-facebook"></i></a>
						<li><a href="https://goo.gl/8sweK9" target="_blank" tabindex="0"><i class="icon-google-plus"></i></a>
						
			</ul>
                      </div>
                    </div>

<div class="trip_desc wm-reviews">
                     <!-- <p><span class="pull-left"><i class="icon-quote-left"></i></span> <span class="pull-left trip_desc_span"><i>I hope this note finds you well. Once again I'd like to congratulate you on providing us with a first rate support team and express my sincerest appreciation for your accommodating attitude.</i></span> <span class="pull-right"><i class="icon-quote-right"></i></span></p>-->
                      <div class="clearfix"></div>
                    </div>				
	</li>
 </ul>
<?php print $wrapper_suffix; ?>

