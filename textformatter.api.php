<?php

/**
 * hook_textformatter_field_list_info().
 *
 * Declare new field types/callbacks that are available as text formatter lists.
 */
function hook_textformatter_field_list_info() {
  $info = array();

  $info['example'] = array( // key array with module name.
    'fields' => array('example', 'example_other'), // This must be an array.
    // Callback to process $items from hook_field_formatter_view.
    'callback' => 'textformatter_example_field_create_list',
  );

  return $info;
}

/**
 * Sample callback implementation.
 * @see textformatter_default_field_create_list.
 */
function textformatter_example_field_create_list($items, $field, $display, $settings) {
  $list_items = array();

  foreach ($items as $delta => $item) {
    $list_items[$delta] = check_plain($item['value']);
  }

  return $list_items;
}