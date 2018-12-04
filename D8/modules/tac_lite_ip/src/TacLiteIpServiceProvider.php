<?php

namespace Drupal\tac_lite_ip;

use Drupal\Core\DependencyInjection\ContainerBuilder;
use Drupal\Core\DependencyInjection\ServiceProviderBase;
use Symfony\Component\DependencyInjection\Reference;

/**
 * Defines the TAC Lite IP service provider.
 */
class TacLiteIpServiceProvider extends ServiceProviderBase {

  /**
   * {@inheritdoc}
   */
  public function alter(ContainerBuilder $container) {
    // Overrides user.data class to use our custom class.
    $definition = $container->getDefinition('user.data');
    $definition->setClass(TacLiteIpUserData::class)
      ->addArgument(new Reference('request_stack'));
  }

}
