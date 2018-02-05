<?php

namespace Drupal\demo_external_posts\Plugin\Field\FieldFormatter;

use Drupal\Component\Serialization\Json;
use Drupal\Core\Field\FormatterBase;
use Drupal\Core\Field\FieldItemListInterface;

/**
 * Plugin implementation of the 'webform_workflow_formatter' formatter.
 *
 * @FieldFormatter(
 *   id = "demo_external_posts_formatter",
 *   label = @Translation("External post"),
 *   field_types = {
 *     "demo_external_posts_field",
 *   }
 * )
 */
class DemoExternalPostsFormatter extends FormatterBase {


  protected $ws_posts;

  /**
   * {@inheritdoc}
   */
  public function __construct($plugin_id, $plugin_definition, \Drupal\Core\Field\FieldDefinitionInterface $field_definition, array $settings, $label, $view_mode, array $third_party_settings) {
    parent::__construct($plugin_id, $plugin_definition, $field_definition, $settings, $label, $view_mode, $third_party_settings);
    $this->ws_posts = \Drupal::service('demo_external_posts.ws_posts');
  }

  /**
   * {@inheritdoc}
   */
  public function viewElements(FieldItemListInterface $items, $langcode) {
    $elements = [];

    foreach ($items as $delta => $item) {
      $post_id = $item->get('post_id')->getValue();
      $elements[$delta] = $this->ws_posts->renderPost($post_id);
    }

    return $elements;
  }

}
