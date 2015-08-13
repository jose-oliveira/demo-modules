<?php
/**
 * @file
 * demo_commons.features.inc
 */

/**
 * Implements hook_image_default_styles().
 */
function demo_commons_image_default_styles() {
  $styles = array();

  // Exported image style: tiny_50x50_.
  $styles['tiny_50x50_'] = array(
    'label' => 'Tiny(50x50)',
    'effects' => array(
      1 => array(
        'name' => 'image_scale_and_crop',
        'data' => array(
          'width' => 50,
          'height' => 50,
        ),
        'weight' => 1,
      ),
    ),
  );

  return $styles;
}
