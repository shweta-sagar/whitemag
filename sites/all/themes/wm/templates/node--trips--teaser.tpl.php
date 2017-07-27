<a href="<?php print $node_url; ?>" title="<?php print $title; ?>">
<div>
	<div class="listing"> 
		<?php print  render($content['field_trip_landing_page_image']);?>
          <div class="name">
            <p><strong><?php print $title; ?></strong></p>
            <p><?php print render($content['field_location']);?></p>
            <p><?php print render($content['field_actual_duration']);?></p>
          </div>
          <div class="level"><span class="sprite pull-left"></span><span class="sprite pull-left"></span>
		  Best During <?php print render($content['field_season']);?>
		  <span class="price pull-right"><?php print render($content['field_trip_price']);?></span></div>
     </div>
	
</div> 
</a>