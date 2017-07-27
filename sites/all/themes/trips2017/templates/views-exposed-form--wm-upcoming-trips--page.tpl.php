<?php

/**
 * @file
 * This template handles the layout of the views exposed filter form.
 *
 * Variables available:
 * - $widgets: An array of exposed form widgets. Each widget contains:
 * - $widget->label: The visible label to print. May be optional.
 * - $widget->operator: The operator for the widget. May be optional.
 * - $widget->widget: The widget itself.
 * - $sort_by: The select box to sort the view using an exposed form.
 * - $sort_order: The select box with the ASC, DESC options to define order. May be optional.
 * - $items_per_page: The select box with the available items per page. May be optional.
 * - $offset: A textfield to define the offset of the view. May be optional.
 * - $reset_button: A button to reset the exposed filter applied. May be optional.
 * - $button: The submit button for the form.
 *
 * @ingroup views_templates
 */
$depMonth= array("January", "February","March","April", "May","June", 
 "July","August","September","October","November","December" ); 
?>
<?php if (!empty($q)): ?>
  <?php
    // This ensures that, if clean URLs are off, the 'q' is added first so that
    // it shows up first in the URL.
    print $q;
  ?>
<?php endif; ?>
  <!--filters-->
              <div class="col-sm-12 col-md-3 noP filter_wm">
					   <h2 class="btn btn-primary hidden-md hidden-lg showFilters">Show Filters</h2> 		
                       <div class="panel-group" id="filters">
					   	<h2 class="hidden-sm hidden-xs">Filters</h2>
						<?php if(arg(0)=='fixed-departure'){?>
						<div class="panel">
							<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#filters" href="#depMonth">
								Departure Month
								<i class="open-less pull-right glyphicon glyphicon-minus"></i>
								</a>
							</h4>
							</div>
							<div id="depMonth" class="panel-collapse collapse in">
								<div class="panel-body">
								<div class="form-checkboxes" id="depCheckboxes">
								 <?php foreach($depMonth as $key=> $value):?>
								 <div class="form-item form-type-bef-checkbox">
								  <input type="checkbox" value="<?php print substr($value, 0, 3); ?>" id="<?php print $value; ?>" onchange="hideTrips('<?php print substr($value, 0, 3); ?>','<?php print $value; ?>')"><label class="option" for="<?php print $value; ?>"><?php print $value; ?></label>
								 </div>
								<?php endforeach; ?>
								</div>
								</div>
							</div>
                         </div> 
						<?php }else{?>
						<?php foreach ($widgets as $id => $widget): ?>
						 <div class="panel">
						 
							<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#filters" href="#<?php print $widget->id; ?>">
								<?php print $widget->label; ?>
								<i class="open-less pull-right glyphicon glyphicon-minus"></i>
								</a>
							</h4>
							</div>
							<div id="<?php print $widget->id; ?>" class="panel-collapse collapse in">
								<div class="panel-body">
								  <?php print $widget->widget; ?>
								</div>
							</div>
                         </div> 
						 <?php endforeach;?>
						<div class="">
                          <h2><?php print $button; ?></h2>
                        </div>
						<?php } ?>
					   <div class="clearfix"></div> 
                       <a class="btn btn-customise" href="trip-planner">Customise a Trip <i class="pull-right glyphicon glyphicon glyphicon-arrow-right"></i></a>	
					   
						</div>	
              </div>
              <!--filters-->			  
			  