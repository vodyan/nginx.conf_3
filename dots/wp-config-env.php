<?php
  defined('APP_ENV') || define('APP_ENV', (getenv('APP_ENV') ? getenv('APP_ENV') : 'pro'));
  switch (APP_ENV) {
    case "dev":
      define('DB_NAME', 'xxxxxxxx_dev');
      define('DB_USER', 'xxxxxxxx');
      define('DB_PASSWORD', 'pppppppp');
      define('DB_HOST', 'localhost');
      define('WP_DEBUG', true);
      define('SCRIPT', 'sssssssss');
      break;
    case "dep":
      define('DB_NAME', 'xxxxxxxx_dep');
      define('DB_USER', 'xxxxxxxx');
      define('DB_PASSWORD', 'pppppppp');
      define('DB_HOST', 'localhost');
      define('WP_DEBUG', false);
      define('SCRIPT', 'sssssssss.min');
      break;
    case "pro":
      define('DB_NAME', 'xxxxxxxx_pro');
      define('DB_USER', 'xxxxxxxx');
      define('DB_PASSWORD', 'pppppppp');
      define('DB_HOST', 'localhost');
      define('WP_DEBUG', false);
      define('SCRIPT', 'sssssssss.min');
      break;
  }
  define('DB_CHARSET', 'utf8');
  define('DB_COLLATE', '');
