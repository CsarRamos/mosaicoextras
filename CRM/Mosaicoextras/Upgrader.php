<?php

use CRM_Mosaicoextras_ExtensionUtil as E;

/**
 * Collection of upgrade steps.
 */
class CRM_Mosaicoextras_Upgrader extends CRM_Mosaicoextras_Upgrader_Base {

  public function install() {
    $settings = [
      'mosaico_extras_plugins' => [
        'default' => 'link hr paste lists textcolor code civicrmtoken mailto',
        'value' => (Civi::settings()->get('mosaico_extras_plugins')) ?: Civi::settings()->get('mosaico_plugins'),
      ],
      'mosaico_extras_toolbar' => [
        'default' => 'bold italic forecolor backcolor hr styleselect removeformat | civicrmtoken | link unlink mailto | pastetext code',
        'value' => (Civi::settings()->get('mosaico_extras_toolbar')) ?: Civi::settings()->get('mosaico_toolbar'),
      ],
    ];

    foreach ($settings as $key => $setting) {
      if (isset($setting['value'])) {
        Civi::settings()->set($key, $setting['value']);
      }
      else {
        Civi::settings()->set($key, $setting['default']);
      }
    }
  }
}
