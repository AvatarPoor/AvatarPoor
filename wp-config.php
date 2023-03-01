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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'avatarpoor' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         '-9L%73le{&]!30E<yIWUy(Oj(R,%cHZXP=zG~&?pY|E1<PLO(xt?$:KKKD^;+=Rd' );
define( 'SECURE_AUTH_KEY',  'oCO`%:q`iH4fh~7KJb}GcVOUs#S8a(ClAOYaU3R)`m&=D!nNcjc6C T><gsJl3W ' );
define( 'LOGGED_IN_KEY',    'ZMpe&<-y@^[U*nZ]ZoblRqXSd[cgKn]gW&OD;emAq[pl[3BWOKkLobv*k am;3n,' );
define( 'NONCE_KEY',        'Kd9v.FmW;rsPm|4h$y$>CD^|)a zltV(Umte]f%meW_]JP?2{#a{i?X5F[PjOle(' );
define( 'AUTH_SALT',        'Fq8Vh{]Bl20Ug}#!a6C<`+x}%1iPWDvZjB!/|IngdQAjXDN:^~3ow|17M9q5?g<=' );
define( 'SECURE_AUTH_SALT', '29gf;J_5yCsqH5[qmF-2w$YdA:$023g&jtj%ezqz4qj|<|Eajh6sjo|<72SoP~5n' );
define( 'LOGGED_IN_SALT',   'g|8yh0k=?T{(iWJ3S Z<F,R>AO*bQFiDZ4lm_q|HT9RAW_hJ~kY)=rDi_CFHmJ!W' );
define( 'NONCE_SALT',       '|rfi#jq5O!;jAbw!}QSwvo5)SdB+_9hnVquA:MZQfs%[(^jdaj sa@[pFvH<tozh' );

/**#@-*/

/**
 * WordPress database table prefix.
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
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
