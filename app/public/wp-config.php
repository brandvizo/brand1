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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'QPEFH2+/eEMaOJSI+n6wbAUwXFPqssEpwFYd9QilxvtFPjOug75ZEjH3qyzcAsltHgBR/47owrKc2I+V86jAxQ==');
define('SECURE_AUTH_KEY',  'DupdgH2KgN3YXY46EZzGMKuLgGK3J1u0+c9BTqBu/xjtwMM9ouyD4j4SFFY4u2CzY36uh/Rwx7ufAL8pIFGESg==');
define('LOGGED_IN_KEY',    'Z6aaZROmqboUXV9x7KILfMvZ0qtO1IZ0Jj4iNpx4ttLBZ0aQg3yYCRiX9z9Ht/Kc66XdtTXeKAFCWeKMpb2uWg==');
define('NONCE_KEY',        'QfNKdfJ0gCXR39Qtk5ESNCLT9nIFp/TFirxle1wjaeoHwZGeu2N2DiigtMtBJ+zRyiTZ3ug3DpNbfoRSP+zhpg==');
define('AUTH_SALT',        'hnXFxpccnxrW6+AeKsMDYt2FIgjfhbJbTX08ZxCt5gqbGEY8okchLikIqQfdramBe4UROSwPt58CWMU91NT8/w==');
define('SECURE_AUTH_SALT', 'ZBFbnsmHXCohLiMi0p5I4bl9TLCJw4HmsBg/rFWenUSshJ/x5EXSgeeTL3WVpiqJwONMCsHYqIjj8WML5bsVQQ==');
define('LOGGED_IN_SALT',   'YlLCtICKWtSuKNOMFFYv3ZuZjmSd0oFgFlFeYPTvUsRNr1X8dblFcLI3Jz0Qn62jSD71rLnrOX8MNK+nfrCuDQ==');
define('NONCE_SALT',       'u2dhqTDpk0mz3mF8AXu78EHb5q2iwkJzIGPhRUJ2G9F4cfcvIn9wQQuhKHX7YUfF2sYxjzWE6vnvJ0gx7IzFdg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
