<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'LlTNXK9JgU1cMTiqk5l+kVjeRtPJcu2MR2hEapD1/vAaSKIaDSHSQ11teZQNgAU5mvH4vtfGURMqFwCCLYUPUQ==');
define('SECURE_AUTH_KEY',  'p9VDa2q3uIDw+noosoWF1D3HrspMD+oumTCnjWp1PQgO16BaW3cyfjmx/m9O/vg27SdEZxXgJB3dGj5+HSIrFw==');
define('LOGGED_IN_KEY',    'zeaHaQI+Mh4ti5EtKNrZExnJ52sORsTRup3ik8wpKFxhecJcOpZenZhLq+BQC3aCttE/DIsby/GbHzJ7Vgb95w==');
define('NONCE_KEY',        'AQwj34tlWMZlM0Q/HFPQTBEAtvtj35Q5TX4HWuNi3ThRCnYzbWXZXorgIGE45TWAvKexj5OTcBXbA/rEzhQrcw==');
define('AUTH_SALT',        'X3M8jZ/lYMPQMcOqYS/8WgxhiIjJL+k6VAw6fcsfiL6q5dQCVYrKJg62dB9OdRq3tQcslp/YeKgeBjFsdr77fQ==');
define('SECURE_AUTH_SALT', 'LPuHXrsFz+Vxsd4LDXkCEUBdoO868KbeAHc7/ukBTGGUjFy67sONVhOoGgBTK5tub4D18tovAetnr57CdjZ5bw==');
define('LOGGED_IN_SALT',   'AOdZE/Iik1WoRpmXKsgjTxafjleeJmHW9GNCvAtSCSPn3mxJbQkkPc7x5qeGwONZlPU83noccGogmwjqZ/PbTg==');
define('NONCE_SALT',       '9XGFY5m3PU1lwV0jhX1m7lnighyPRvnFFJsQqvz0V2IyRO5mmSNK5MfbmRoLcEFJvCy+vDpqd07oec/1JgZP4g==');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
