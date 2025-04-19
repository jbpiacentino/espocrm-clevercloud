 <?php
 return [
    'smtpServer' => getenv('SMTP_HOST'),
    'smtpPort' => getenv('SMTP_PORT'),
    'smtpAuth' => true,
    'smtpSecurity' => 'TLS',
    'smtpUsername' => getenv('SMTP_USER')
];