<?php

/**
 * @file
 * Contains Drupal\addressfield\Plugin\AddressfieldFormat\NameOneline.
 */

namespace Drupal\addressfield\Plugin\AddressfieldFormat;

use Drupal\addressfield\Plugin\AddressfieldFormatInterface;

/**
 * Name (single line)
 *
 * @Plugin(
 *   id = "name_oneline",
 *   label = @Translation("Name (single line)")
 * )
 */
class NameOneline implements AddressfieldFormatInterface {

  /**
   * {@inheritdoc}
   */
  public function format(&$format, $address, $context = array()) {
    $format['name_block'] = array(
      '#type' => 'addressfield_container',
      '#attributes' => array('class' => array('addressfield-container-inline', 'name-block')),
      '#weight' => -100,
    );
    $format['name_block']['name_line'] = array(
      '#type' => 'textfield',
      '#title' => t('Full name'),
      '#tag' => 'div',
      '#attributes' => array(
        'class' => array('name-block'),
        'x-autocompletetype' => 'name',
        'autocomplete' => 'name',
      ),
      '#size' => 30,
      '#required' => TRUE,
    );
  }

}
