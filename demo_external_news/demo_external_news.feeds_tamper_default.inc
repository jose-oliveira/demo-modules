<?php
/**
 * @file
 * demo_external_news.feeds_tamper_default.inc
 */

/**
 * Implements hook_feeds_tamper_default().
 */
function demo_external_news_feeds_tamper_default() {
  $export = array();

  $feeds_tamper = new stdClass();
  $feeds_tamper->disabled = FALSE; /* Edit this to true to make a default feeds_tamper disabled initially */
  $feeds_tamper->api_version = 2;
  $feeds_tamper->id = 'demo_news_feed-description-strip_tags';
  $feeds_tamper->importer = 'demo_news_feed';
  $feeds_tamper->source = 'description';
  $feeds_tamper->plugin_id = 'strip_tags';
  $feeds_tamper->settings = array(
    'allowed_tags' => '',
  );
  $feeds_tamper->weight = 0;
  $feeds_tamper->description = 'Strip tags';
  $export['demo_news_feed-description-strip_tags'] = $feeds_tamper;

  $feeds_tamper = new stdClass();
  $feeds_tamper->disabled = FALSE; /* Edit this to true to make a default feeds_tamper disabled initially */
  $feeds_tamper->api_version = 2;
  $feeds_tamper->id = 'demo_news_feed-title-rewrite';
  $feeds_tamper->importer = 'demo_news_feed';
  $feeds_tamper->source = 'title';
  $feeds_tamper->plugin_id = 'rewrite';
  $feeds_tamper->settings = array(
    'text' => 'News [title] by [author_name]',
  );
  $feeds_tamper->weight = 0;
  $feeds_tamper->description = 'Rewrite';
  $export['demo_news_feed-title-rewrite'] = $feeds_tamper;

  return $export;
}
