<?php

return array (
  'cache_flags' =>
  array (
    'value' =>
    array (
      'config_options' => 3600.0,
    ),
    'readonly' => false,
  ),
  'cookies' =>
  array (
    'value' =>
    array (
      'secure' => false,
      'http_only' => true,
    ),
    'readonly' => false,
  ),
  'exception_handling' =>
  array (
    'value' =>
    array (
      'debug' => true,
      'handled_errors_types' => 4437,
      'exception_errors_types' => 4437,
      'ignore_silence' => false,
      'assertion_throws_exception' => true,
      'assertion_error_type' => 256,
        'log' => [
            'settings' => [
                'file' => '/bitrix/modules/error.log', // Путь относительно корня сайта
                'log_size' => 10485760 // 10 МБ
            ]
        ]
    ),
    'readonly' => false,
  ),
  'connections' =>
  array (
    'value' =>
    array (
      'default' =>
      array (
        'host' => 'db',
        'database' => 'bitrix',
        'login' => 'bitrix',
        'password' => '123',
        'options' => 2.0,
        'className' => '\\Bitrix\\Main\\DB\\MysqliConnection',
      ),
    ),
    'readonly' => true,
  ),
  'crypto' =>
  array (
    'value' =>
    array (
      'crypto_key' => '7aeef2a80776df78a07824f2cf4761f7',
    ),
    'readonly' => true,
  ),
);
