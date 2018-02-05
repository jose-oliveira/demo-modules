<?php

namespace Drupal\demo_external_posts;

use Drupal\Core\Config\ConfigFactory;
use GuzzleHttp\Client;

class WSPosts {

  protected $client;

  protected $base_url;

  public function __construct(Client $client, ConfigFactory $config) {

    $this->client = $client;
    $this->base_url = $config->get('demo_external_posts.settings')->get('demo_external_posts_ws_posts_url');

  }

  public function getPosts(){
    $request = $this->client->get( $this->base_url . 'posts');
    return json_decode($request->getBody());
  }

  public function getPost($post_id) {
    $request = $this->client->get( $this->base_url . 'posts/' . $post_id);
    return json_decode($request->getBody());
  }

  public function renderPost($post_id) {

    $post = $this->getPost($post_id);

    $elements['title'] = array(
      '#type' => 'html_tag',
      '#tag' => 'h1',
      '#value' => $post->title,
    );


    $elements['body'] = array(
      '#type' => 'html_tag',
      '#tag' => 'div',
      '#value' => $post->body,
    );

    return $elements;
  }

}