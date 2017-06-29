<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'kratemdihx734');

/** MySQL database username */
define('DB_USER', 'kratemdihx734');

/** MySQL database password */
define('DB_PASSWORD', 'kMj6dTYkcmWe');

/** MySQL hostname */
define('DB_HOST', 'kratemdihx734.mysql.db:3306');

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
define('AUTH_KEY',         'a3peTZpE2RO2xO9zYmJqYQOZJFH58kZsx6P1tum0Z7+6nIzdy0sL/3UriE5o');
define('SECURE_AUTH_KEY',  'NSziDurHkL/YVz1ivzKvio2T6xzb5Aq9FAtbyfzDp0RxbLd0rtCX+u0x7xEu');
define('LOGGED_IN_KEY',    'NEPsLMO9dZNsKfBtV0VDmYok+xFdHV5jbIfkL4uEzKR0CWzZz4kXDPyzwwBK');
define('NONCE_KEY',        '8xcsbjicbm9YSMI5AmHlvS6CoCHc6Sy7Bhe9NQbi20/m4sJrr5A1RL5erKzm');
define('AUTH_SALT',        'V/rcOaYzhJergZg6zLZPe35lFB3vPSDBQGGianIeENSceb1rQUBOVOaA9lq2');
define('SECURE_AUTH_SALT', 'ZsYZWmNp9e4LM75GIj89HxeMvJ8NkchpKVOkSEhIZaz3R7sdyNIQSat7zcjz');
define('LOGGED_IN_SALT',   'PS7DmT7RJ9i9Fm6E+fuqaTJeOeaG9RbgNDXDblPch9rWZo1sg/oiSJbuWZkI');
define('NONCE_SALT',       'vNP1uDG70tUiziqi6dVNXXCMvG6PRnB4XEYy5HCVRmPRpmYdMtJc+jdJ1Tpc');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'mod767_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/* Fixes "Add media button not working", see http://www.carnfieldwebdesign.co.uk/blog/wordpress-fix-add-media-button-not-working/ */
define('CONCATENATE_SCRIPTS', false );

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
