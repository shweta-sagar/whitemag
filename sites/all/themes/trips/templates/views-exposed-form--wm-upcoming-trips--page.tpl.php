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
?>
<?php if (!empty($q)): ?>
  <?php
    // This ensures that, if clean URLs are off, the 'q' is added first so that
    // it shows up first in the URL.
    print $q;
  ?>
<?php endif; ?>
<!-- custom -->	

<?php
//Walking Holiday, Trekking Expedition 126,127
//Climb :128, 129, 130, 131
$field_trip_type_tid = filter_input(INPUT_GET, 'field_trip_type_tid', FILTER_DEFAULT, FILTER_FORCE_ARRAY | FILTER_FORCE_ARRAY);
//print "aa".$field_trip_type_tid[0];
$allowedFilters=array(126,127,128, 129, 130, 131);
if (!in_array($field_trip_type_tid[0], $allowedFilters)){
?>
   <div class="col-md-12 noP filter_mar">
                <div class="filters">
                  <div class="col_bor">
				  <div class="filter_header col-sm-12 hidden-sm noP">
                          <h3>Search filters</h3>
                    </div>
                    <div class="col-sm-2 col-sm-offset-1 noP">
                      <h2><?php print $widgets['filter-field_season_tid']->label; ?></h2>
                    </div>
                    <div class="col-sm-2 noP">
                      <h2><?php print $widgets['filter-field_trip_duration_value']->label; ?></h2>
                    </div>
                    <div class="col-sm-6 noP">
                      <div class="col-sm-4 noP">
					  <?php if($field_trip_type_tid[0]==85){ ?>
					    <h2><?php print $widgets['filter-field_altitude_tid']->label; ?></h2>
					  <?php }else{ ?>
                        <h2><?php print $widgets['filter-field_location_tid']->label; ?></h2>
					  <?php } ?>	
                      </div>
                      <div class="col-sm-4 noP">
                        <h2><?php print $widgets['filter-field_exp_tid']->label; ?></h2>
                      </div>
                      <div class="col-sm-4 noP">
                        <h2><?php print $widgets['filter-field_price_range_tid']->label;?></h2>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="filter_wm">
                   
                      <div class="col-sm-2 col-sm-offset-1 noP">
                        <div class="filters_checks simplebar" data-simplebar-direction="vertical">
                          <h2 class="fliter_h2"><?php print $widgets['filter-field_season_tid']->label; ?></h2>
						  <?php print $widgets['filter-field_season_tid']->widget; ?>	
						  <?php print $widgets['filter-field_trip_type_tid']->widget; ?>	
						</div>
                      </div>
                      <div class="col-sm-2 noP">
                      <div class="filters_checks simplebar" data-simplebar-direction="vertical">
                      <h2 class="fliter_h2"><?php print $widgets['filter-field_trip_duration_value']->label; ?></h2>
                          <?php print $widgets['filter-field_trip_duration_value']->widget; ?> </div>
                      </div>
            
                      <div class="col-sm-7 noP">
                        <div class="col-sm-4 noP">
                          <div class="filters_checks simplebar" data-simplebar-direction="vertical">
                          <h2 class="fliter_h2">
						  <?php if($field_trip_type_tid[0]==85){ ?>
							<?php print $widgets['filter-field_altitude_tid']->label; ?></h2>
							<?php print $widgets['filter-field_altitude_tid']->widget; ?>
						  <?php }else{ ?>
							<?php print $widgets['filter-field_location_tid']->label; ?></h2>
                             <?php print $widgets['filter-field_location_tid']->widget; ?>
						  <?php } ?>
                          </div>
                        </div>
                        <div class="col-sm-3 noP">
                          <div class="filters_checks simplebar" data-simplebar-direction="vertical">
                          <h2 class="fliter_h2"><?php print $widgets['filter-field_exp_tid']->label; ?></h2>
                             <?php print $widgets['filter-field_exp_tid']->widget; ?>
                          </div>
                        </div>
                        <div class="col-sm-5 noP">
                          <div class="filters_checks nobort simplebar" data-simplebar-direction="vertical">
                          <h2 class="fliter_h2"><?php print $widgets['filter-field_price_range_tid']->label; ?></h2>
                             <?php print $widgets['filter-field_price_range_tid']->widget; ?>
                          </div>
                        </div>
                        <div class="clearfix"></div>
                       <div class="filter_header">
                          <h2><?php print $button; ?></h2>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                   
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="clearfix"></div>
<?php }else{?>
<style>.view-filters{margin-bottom: 0px!important;}</style>
<?php }?>
 <?php if($field_trip_type_tid[0]==125 ){ 
//|| !isset($field_trip_type_tid[0])
 ?>
 <style>.discover_box ul li.dis_hover{color:#585858;}</style>
 <?php }elseif(in_array($field_trip_type_tid[0], array(126,127,86))) {?>
<style>.discover_box ul li.trek_hover{color:#585858;}</style>
<?php }elseif(in_array($field_trip_type_tid[0], array(128,129,130,131,85))) {?>
<style>.discover_box ul li.climb_hover{color:#585858;}</style>
<?php }?>