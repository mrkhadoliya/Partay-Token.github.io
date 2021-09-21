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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ramlogic_wp6' );

/** MySQL database username */
define( 'DB_USER', 'ramlogic_wp6' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Q.DNXPxABQwBTyD0d9t44' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '7kfc5hTL1pUJfpVGP9fEef7Uj2g6aPQeS4j2dfuiJp9S8QrL2o4ezmeiRaoBKjxG');
define('SECURE_AUTH_KEY',  'xAhD2o6tgTaK6gDyhBYLtIDeyF5T9Lcw2sO9aehv42hOS0PIDcXWOsnYFyHi24DY');
define('LOGGED_IN_KEY',    '6A9m3q7Y4fAHOLypFJBiEw77JiNSdmOaD45nYBkHFe2ajZRKLBIIQ0BvTZwe9hiD');
define('NONCE_KEY',        'rl7uTFeAjN1Se9MDIIhemIlgShu9xUc4NNUmW1RuIG9K1hp8vZPNxBnDOBjtPMGK');
define('AUTH_SALT',        'WlJQLzFJ9kgR0S69Ahd1R729smVGE3G1PBxAIDpNXM4QFQp56IXE1AgwZRWSMY64');
define('SECURE_AUTH_SALT', 'JcbNCSWp8QI3csQW6K03NMNXJLME05iKJGLRgcxFmEeqn6W4rX7Dso2llx5d8ZnK');
define('LOGGED_IN_SALT',   'cv2HEgxIISuzvypmUNDyPfMIFKPXtHsbNgFKe49gzGjEbctrrqhZHF43RiHLc04k');
define('NONCE_SALT',       'LCBebfui1k4KWmBedQQXpbUmX2ItsNA36WvDg6CriET9NmmiTFK3LBUWLnKnkgob');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');
define('FS_CHMOD_DIR',0755);
define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed externally by Installatron.
 * If you remove this define() to re-enable WordPress's automatic background updating
 * then it's advised to disable auto-updating in Installatron.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
