<a class="pull-right openall" style="color:#000;text-decoration:underline"><i style="margin:3px 0 0 5px;" class="more-less glyphicon glyphicon-triangle-bottom"></i>Show Detailed Itinerary</a>
<a class="pull-right closeall" style="color:#000;text-decoration:underline;display:none;" ><i style="margin:3px 0 0 5px;" class="more-less glyphicon glyphicon-triangle-top"></i>Hide Detailed Itinerary</a>

<div class="panel-group mT40" id="accordion" role="tablist" aria-multiselectable="true">
<?php
$collections = array();
$itemId=1;	

foreach ($items as $k){
	//die;
foreach ($k['entity']['field_collection_item'] as $id => $field_collection){
$field_collection_item = field_collection_item_load($id);
$item_wrapper = entity_metadata_wrapper('field_collection_item', $field_collection_item);
$field_title= $item_wrapper->field_title->value(); 
$field_day= $item_wrapper->field_day->value();
$field_description= $item_wrapper->field_description->value();								
$collection = array(
				'itemId'=>$itemId,
				'day'=>$field_day,
				'title'=>	$field_title,
				'description'=>	$field_description
				);
?>

<div class="panel panel-default">
<div class="panel-heading" role="tab" id="heading<?php print $itemId;?>">
<h6 class="panel-title">
<a class="accordion-toggle" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php print $itemId;?>" aria-expanded="true" aria-controls="collapse<?php print $itemId;?>">
<i class="more-less glyphicon glyphicon-triangle-bottom"></i>
<strong><?php print $field_day;?>: </strong><?php print $field_title;?></a>
</h6>
</div>			
<div id="collapse<?php print $itemId;?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?php print $itemId;?>" aria-expanded="true">
<div class="panel-body">
<?php print $field_description;?>
</div>
</div>
</div>
<?php
$collections[] = $collection;	
//print_r($collection);
$itemId++;
}
}
// take a look what you get
//print '<pre>' . print_r($collections,1) . '</pre>';	
?>
</div>