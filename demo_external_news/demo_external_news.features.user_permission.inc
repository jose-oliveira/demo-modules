<?php
/**
 * @file
 * demo_external_news.features.user_permission.inc
 */

/**
 * Implements hook_user_default_permissions().
 */
function demo_external_news_user_default_permissions() {
  $permissions = array();

  // Exported permission: 'create demo_news content'.
  $permissions['create demo_news content'] = array(
    'name' => 'create demo_news content',
    'roles' => array(),
    'module' => 'node',
  );

  // Exported permission: 'delete any demo_news content'.
  $permissions['delete any demo_news content'] = array(
    'name' => 'delete any demo_news content',
    'roles' => array(),
    'module' => 'node',
  );

  // Exported permission: 'delete own demo_news content'.
  $permissions['delete own demo_news content'] = array(
    'name' => 'delete own demo_news content',
    'roles' => array(),
    'module' => 'node',
  );

  // Exported permission: 'edit any demo_news content'.
  $permissions['edit any demo_news content'] = array(
    'name' => 'edit any demo_news content',
    'roles' => array(),
    'module' => 'node',
  );

  // Exported permission: 'edit own demo_news content'.
  $permissions['edit own demo_news content'] = array(
    'name' => 'edit own demo_news content',
    'roles' => array(),
    'module' => 'node',
  );

  return $permissions;
}
