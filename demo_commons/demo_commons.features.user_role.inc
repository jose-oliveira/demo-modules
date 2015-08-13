<?php
/**
 * @file
 * demo_commons.features.user_role.inc
 */

/**
 * Implements hook_user_default_roles().
 */
function demo_commons_user_default_roles() {
  $roles = array();

  // Exported role: content editor.
  $roles['content editor'] = array(
    'name' => 'content editor',
    'weight' => 3,
  );

  return $roles;
}
