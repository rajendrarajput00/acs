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
define( 'DB_NAME', 'acsboda_acsnew' );

/** MySQL database username */
define( 'DB_USER', 'acsboda_acs' );

/** MySQL database password */
define( 'DB_PASSWORD', 'pEpS2288!.' );

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
define( 'AUTH_KEY',         'bsg3iidmzebeftawygv8wwaszhxvzmg8nhaqlzy1oj2tw66jdp2oojrgykokr7he' );
define( 'SECURE_AUTH_KEY',  'tjsapxk7p1qt7sguwezqwtpavcukuvffwpd3so0zlpwpocp8fhumfhnpaz0c45rw' );
define( 'LOGGED_IN_KEY',    'co90ijuek66e2wop7d0wi2tznazlpj5ublcdvrkxngzopdxq10oyzoskdoucpwtn' );
define( 'NONCE_KEY',        '5cimkrdkljbxhdoo7sbz4yzbmds0wr8hl9dgpznbppflppmrbubvacufgjgnzcv7' );
define( 'AUTH_SALT',        'cyuomjpaekip181ptkuzqwnle3c57rkmg9n6vvmkv5tw5uas08gemjq30frnddsy' );
define( 'SECURE_AUTH_SALT', 'a42nfcusvtag8in3z9pcd7o1gjnpvurezq7nin06tncdsncazsgr7uezowu92fyx' );
define( 'LOGGED_IN_SALT',   'rglcvf9kmw0gbeqe6s24cstewvh4pdytjdkm43sm8beeacbm461rhzquz09n9a1y' );
define( 'NONCE_SALT',       'f9e0zwqiaaugifp4yefnqy5zcakljwz0fqjiiwdepp0ritr9k8cec73zune7seox' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp5h_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

define('DISALLOW_FILE_EDIT', true);
define('DISALLOW_FILE_MODS', true);