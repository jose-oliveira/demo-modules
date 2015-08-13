<?php
/**
 * @file
 * demo_external_news.features.menu_links.inc
 */

/**
 * Implements hook_menu_default_menu_links().
 */
function demo_external_news_menu_default_menu_links() {
  $menu_links = array();

  // Exported menu link: navigation_demo-news:node/add/demo-news
  $menu_links['navigation_demo-news:node/add/demo-news'] = array(
    'menu_name' => 'navigation',
    'link_path' => 'node/add/demo-news',
    'router_path' => 'node/add/demo-news',
    'link_title' => 'Demo News',
    'options' => array(
      'identifier' => 'navigation_demo-news:node/add/demo-news',
    ),
    'module' => 'system',
    'hidden' => 0,
    'external' => 0,
    'has_children' => 0,
    'expanded' => 0,
    'weight' => 0,
    'customized' => 0,
    'parent_identifier' => 'navigation_add-content:node/add',
  );

  // Translatables
  // Included for use with string extractors like potx.
  t('Demo News');

  return $menu_links;
}
