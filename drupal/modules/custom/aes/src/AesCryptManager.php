<?php
/**
 * Created by PhpStorm.
 * User: dennis
 * Date: 2/11/14
 * Time: 12:03 PM
 */

namespace Drupal\aes;

use Drupal\Core\Config\ConfigFactoryInterface;

class AesCryptManager implements ICrypt {

  /**
   * The contact settings config object.
   *
   * @var \Drupal\Core\Config\ConfigFactoryInterface
   */
  protected $configFactory;

  /**
   * Constructs a ContactPageAccess instance.
   *
   * @param \Drupal\Core\Config\ConfigFactoryInterface $config_factory
   *   The config factory.
   */
  public function __construct(ConfigFactoryInterface $config) {
    $this->configFactory = $config;
  }

  public function getPlugins() {
    return [
      'mcrypt' => 'mCrypt',
      'php' => 'PHP',
    ];
  }

} 