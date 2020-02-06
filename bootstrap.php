<?php
ini_set("date.timezone", "America/New_York");

require_once 'vendor/wfu/wfu/wfu-aws-bootstrap.php';
require_once 'vendor/wfu/wfu/wfu-environment-setup-bootstrap.php';

$sBaseDomain = 'wfu.edu';
if (in_array(ENVIRONMENT_NAME, array('prod', 'local')) === false) {
    $sBaseDomain = ENVIRONMENT_NAME . '.' . $sBaseDomain;
    $sTldForEnv = '.'.ENVIRONMENT_NAME;
} else {
    $sBaseDomain = 'www.' . $sBaseDomain;
    $sTldForEnv = '';
}

if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) === true && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') {
    $_SERVER['HTTPS'] = 'on';
    $_SERVER['SERVER_PORT'] = 443;
}

define('__WFU__', true);
define('ROOT_PATH', dirname(__FILE__));
define('WFU_TLD_ENV', $sTldForEnv);
define('WFU_DEVELOPER_EMAIL', 'ait-developers@wfu.edu');

define('WFU_DOMAIN_CURRENT_SITE', $sBaseDomain);
define('WFU_WP_DIRECTORY', 'wp-content');
define('WFU_DB_NAME', RDS_DB_NAME);
define('WFU_DB_USER', RDS_USERNAME);
define('WFU_DB_PASSWORD', RDS_PASSWORD);
define('WFU_DB_HOST', RDS_HOSTNAME);
$sWfuTablePrefix  = 'wp_';

define('WFU_EFS_PATH', '');

define('WFU_WP_CONTENT_DIR', ROOT_PATH . '/wp-content');
define('WFU_WP_CONTENT_URL', 'https://' . $_SERVER[ 'HTTP_HOST' ] . '/wp-content');

define('WP_DEFAULT_THEME', 'twentytwenty' );
// define( 'WP_INSTALLING', true); // to put wp in maintenance mode
define('WFU_SERVER_GROUP', 'wordpress');

require_once 'vendor/autoload.php';
// autoload must be included first or this will fail to find Redis\Client
require_once 'vendor/wfu/wfu/wfu-aws-redis-session-bootstrap.php';

define('ACF_PRO_KEY', '');
define('GF_LICENSE_KEY', 'ae9cb2e57af28ee61d2bd9f02ca8920b');
