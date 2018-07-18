<?php

namespace Drupal\pdb_generic\Plugin\Derivative;

use Drupal\pdb\Plugin\Derivative\PdbBlockDeriver;

/**
 * Derives block plugin definitions for generic components.
 */
class PDBGenericBlockDeriver extends PdbBlockDeriver {

  /**
   * {@inheritdoc}
   */
  public function getDerivativeDefinitions($base_plugin_definition) {
    $definitions = parent::getDerivativeDefinitions($base_plugin_definition);

    return array_filter($definitions, function (array $definition) {
      return $definition['info']['presentation'] == 'generic';
    });
  }

}
