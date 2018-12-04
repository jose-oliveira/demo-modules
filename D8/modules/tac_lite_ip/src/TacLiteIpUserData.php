<?php

namespace Drupal\tac_lite_ip;

use Drupal\Core\Database\Connection;
use Drupal\user\UserData;
use Symfony\Component\HttpFoundation\RequestStack;

/**
 * Defines the TAC Lite IP user data service.
 */
class TacLiteIpUserData extends UserData {

  /**
   * The current request stack.
   *
   * @var \Symfony\Component\HttpFoundation\Request
   */
  protected $currentRequest;

  /**
   * Constructs a new TAC Lite user data service.
   *
   * @param \Drupal\Core\Database\Connection $connection
   *   The database connection to use.
   * @param \Symfony\Component\HttpFoundation\RequestStack $requestStack
   *   The request stack.
   */
  public function __construct(Connection $connection, RequestStack $requestStack) {
    parent::__construct($connection);
    $this->currentRequest = $requestStack->getCurrentRequest();
  }

  /**
   * {@inheritdoc}
   */
  public function get($module, $uid = NULL, $name = NULL) {
    $return = parent::get($module, $uid, $name);

    if ($module === 'tac_lite') {
      $return = $this->getTacByIp(is_array($return) ? $return : []);
    }

    return $return;
  }

  /**
   * Returns the right taxonomy for the current IP.
   *
   * @param array $return
   *   The array returned by the parent service.
   *
   * @retun array
   *
   * @todo Make this configurable
   */
  protected function getTacByIp(array $return) {
    $ip = $this->currentRequest->getClientIp();
    switch ($ip) {
      case '192.168.97.1':
        $return['section'] = [1 => '1'];
        break;

      default:
        $return['section'] = [2 => '2'];
        $return['section'] = [6 => '6'];
    }

    return $return;
  }

}
