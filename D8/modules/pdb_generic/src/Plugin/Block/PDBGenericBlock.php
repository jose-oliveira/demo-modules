<?php

namespace Drupal\pdb_generic\Plugin\Block;

use Drupal\pdb\Plugin\Block\PdbBlock;

/**
 * Exposes an generic component as a block.
 *
 * @Block(
 *   id = "pdb_generic_component",
 *   admin_label = @Translation("PDB Generic component"),
 *   deriver = "\Drupal\pdb_generic\Plugin\Derivative\PDBGenericBlockDeriver"
 * )
 */
class PDBGenericBlock extends PdbBlock {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $info = $this->getComponentInfo();

    if(isset($info['component_path']) && file_exists($info['component_path'])) {
      $build['#type'] = 'inline_template';
      $build['#template'] = file_get_contents($info['component_path']);
    }

    return $build;
  }

}
