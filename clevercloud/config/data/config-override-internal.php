 <?php
return [
  'database' => [
    'host' => getenv('MYSQL_ADDON_HOST'),
    'port' => getenv('MYSQL_ADD_PORT'),
    'charset' => NULL,
    'dbname' => getenv('MYSQL_ADDON_DB'),
    'user' => getenv('MYSQL_ADDON_USER'),
    'password' => getenv('MYSQL_ADDON_PASSWORD'),
    'platform' => 'Mysql'
  ],
  'actualDatabaseVersion' => getenv('MYSQL_ADDON_VERSION'),
  'smtpPassword' => getenv('SMTP_PASSWORD'),
]; 