<?php
/**
 * @file
 * demo_news.features.menu_links.inc
 */

/**
 * Implements hook_menu_default_menu_links().
 */
function demo_news_menu_default_menu_links() {
  $menu_links = array();

  // Exported menu link: main-menu_admin-news:news-admin
  $menu_links['main-menu_admin-news:news-admin'] = array(
    'menu_name' => 'main-menu',
    'link_path' => 'news-admin',
    'router_path' => 'news-admin',
    'link_title' => 'Admin news',
    'options' => array(
      'identifier' => 'main-menu_admin-news:news-admin',
    ),
    'module' => 'system',
    'hidden' => 0,
    'external' => 0,
    'has_children' => 0,
    'expanded' => 0,
    'weight' => 0,
    'customized' => 0,
  );

  // Translatables
  // Included for use with string extractors like potx.
  t('Admin news');

  return $menu_links;
}
