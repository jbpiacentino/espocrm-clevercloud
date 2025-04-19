<?php
return [
    'logger' => [
        'path' => 'data/logs/espo.log',
        'level' => 'WARNING',
        'rotation' => true,
        'maxFileNumber' => 30,
        'printTrace' => false,
        'databaseHandler' => false,
        'sql' => false,
        'sqlFailed' => false
    ],
    'restrictedMode' => false,
    'cleanupAppLog' => true,
    'cleanupAppLogPeriod' => '30 days',
    'webSocketMessager' => 'ZeroMQ',
    'clientSecurityHeadersDisabled' => false,
    'clientCspDisabled' => false,
    'clientCspScriptSourceList' => [
        0 => 'https://maps.googleapis.com'
    ],
    'adminUpgradeDisabled' => false,
    'isInstalled' => true,
    'microtimeInternal' => 1745054492.084385,
    'cryptKey' => '92a8e5e6cf87fc93cd8017760932d3b4',
    'hashSecretKey' => '9c2ba94f3ebeb55349188c434896fcde',
    'defaultPermissions' => [
        'user' => 1000,
        'group' => 1000
    ],
    'actualDatabaseType' => 'mysql',
    'instanceId' => '2314c452-ecf4-4288-ac5d-b21377b9762b'
];
