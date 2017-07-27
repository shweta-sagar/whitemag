<div class="panel panel-default">
<?php
$collections = array();
foreach ($items as $k){
	//die;
foreach ($k['entity']['field_collection_item'] as $id => $field_collection){
$field_collection_item = field_collection_item_load($id);
$item_wrapper = entity_metadata_wrapper('field_collection_item', $field_collection_item);
$field_title= $item_wrapper->field_title->value(); 
$field_day= $item_wrapper->field_day->value();
$field_description= $item_wrapper->field_description->value();								
/*$collection = array('title'=>	$field_title,
			'day'=>$field_day,
			'description'=>	$field_description
			);
			*/
//$collections[] = $collection;	
//print_r($collection);
}
}
// take a look what you get
//print '' . print_r($collections,1) . '';
?>


</div>
