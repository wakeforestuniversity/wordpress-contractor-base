<?php
require_once 'bootstrap.php';
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

/* Start Sessions for the blog */
if (!session_id()){
    session_start();
}

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('WP_CACHE', true); //Added by WP-Cache Manager
define('DISABLE_SUPERCACHE', 1);
define('DB_NAME', WFU_DB_NAME);

/** MySQL database username */
define('DB_USER', WFU_DB_USER);

/** MySQL database password */
define('DB_PASSWORD', WFU_DB_PASSWORD);

/** MySQL hostname */
define('DB_HOST', WFU_DB_HOST);

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ',E_d &o5Q* WjS9/v#DNVxJkpS!.`[=a<G!nQ)Jbju}k(kjZI-aoWc]#v:Ns=++F');
define('SECURE_AUTH_KEY',  'fL`Xz3pB.FVFBqFS*<d=<4}sM=.P|D:xL76F3P86B&Q66pw`]x(16ZXOwe{-k5~r');
define('LOGGED_IN_KEY',    '-A,v:.WHsrH KgvQ3tC>$N/tV0~(k||yy^XxRQ,m~Ulm}ErX<(bRc%u#-Ib|?^zi');
define('NONCE_KEY',        'hlixF3pTw{|B:D5%M[4])*!TR;ml.)$l(ltb|R-bQj8 65c-B]D2^mGu G+e5}+s');
define('AUTH_SALT',        '__so{Rz-[d(y}g)+|ms9a/v39khSFvGt&aXP;:?A~b^xHO+>,S?wZjg=w4ud=iQ9');
define('SECURE_AUTH_SALT', 'l-BqQE<5-^uR`32+Gy!@)sA6f.-BS0#-.-)0jVpd|J$HE.nvImnj50i,7cd(VvhY');
define('LOGGED_IN_SALT',   '30_ph}#)g2r]I2 =<gx+ze_F[C7GYsevsGDaVM%7*.!4MKVEVvu/lJeZU>d,iyVO');
define('NONCE_SALT',       ';<_o2=&>Q[)?K{B2I||knseLk)fIjs1]yCQQ,/3Jy7EMJcb%RYS@mm|r[,B )4]4');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = $sWfuTablePrefix;

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress.  A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
 * language support.
 */
define ('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */

if (isset($_GET['debug']) === true && $_GET['debug'] == 'yup') {
    define('WP_DEBUG', true);
} else {
    define('WP_DEBUG', false);
}

define('WP_ALLOW_MULTISITE', 'true');
define('MULTISITE', true );
define('SUBDOMAIN_INSTALL', true);
$base = '/';
define('DOMAIN_CURRENT_SITE', WFU_DOMAIN_CURRENT_SITE);
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);
define('WP_CONTENT_DIR', WFU_WP_CONTENT_DIR);
define('WP_CONTENT_URL', WFU_WP_CONTENT_URL);
define('GF_LICENSE_KEY', 'ae9cb2e57af28ee61d2bd9f02ca8920b');

//if (ENVIRONMENT_NAME === 'local') {
//    define('DBI_AWS_ACCESS_KEY_ID', $_ENV['AWS_ACCESS_KEY_ID'] );
//    define('DBI_AWS_SECRET_ACCESS_KEY', $_ENV['AWS_SECRET_ACCESS_KEY']);
//} else {
//    define('AWS_USE_EC2_IAM_ROLE', true );
//}

define('WPOS3_SETTINGS', serialize( array(
        'region' => 'us-east-1',
        )
    )
);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
    define('ABSPATH', ROOT_PATH . '/wp/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define('FS_METHOD', 'direct');
