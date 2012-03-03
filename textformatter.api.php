<?php

/**
 * hook_textformatter_field_info().
 *
 * Declare new field types/callbacks that are available as text formatter lists.
 *
 */
function hook_textformatter_field_info() {
  $fields = array();

  $fields['example'] = array( // key array with module name.
    'fields' => array('example', 'example_other'), // This must be an array.
    // Callback to process $items from hook_field_formatter_view.
    'callback' => 'textformatter_example_fields_render',
  );

  return $fields;
}

/**
 * Sample callback implementation.
 */
function textformatter_example_fields_render($items, $display, $settings) {
  
}