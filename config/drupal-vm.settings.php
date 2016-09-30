<?php

$databases['default']['default'] = [
  'database' => 'hodges',
  'username' => 'hodges',
  'password' => 'hodges',
  'prefix' => '',
  'host' => 'localhost',
  'port' => '3306',
  'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
  'driver' => 'mysql',
];

$settings['trusted_host_patterns'] = [
  '^hodges\.dev$',
];
