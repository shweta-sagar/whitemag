<?php

/**
 * @file
 * Theme the button for the date component date popup.
 */
/**

* This replaces the webform date selectors with a single text box & date popup.

*/

$idKey = str_replace('_', '-', $component[form_key]);

?>

<input type="text" id="edit-submitted-<?php print $idKey ?>" class="form-text

<?php print implode(' ',$calendar_classes); ?>" alt="<?php print t('Open popup calendar'); ?>" title="<?php print t('Open popup calendar'); ?>" />

<style>

.webform-container-inline.webform-datepicker  div.form-item.form-type-select {

    display: none;

}

</style>

 