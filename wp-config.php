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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'mustapha' );

/** MySQL database password */
define( 'DB_PASSWORD', 'mustapha' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'dqy*`VsedNFR=l06n^dw$PSeY%286INyx:OS=AXbG4V<v+/#&fyBxM)dUG<YR1>x' );
define( 'SECURE_AUTH_KEY',  'B`Zu#6]!=FFyilGe#i7!;u1PV#PBz_jZV*=rQHt^.Z4+%BG}46A_5 C!YSK(YB:d' );
define( 'LOGGED_IN_KEY',    '@[@|591[.$!2GXVoI4!Urhme|95^^:q<q/$?Am?TpTn|DsrD!,OL^^4S^ETDE%f*' );
define( 'NONCE_KEY',        'wM@smw/&*_xe{E=pkV} buJigk4H~&NeeWoc*Jl]G-wcdtB32OS0?_Wm12_!5>1O' );
define( 'AUTH_SALT',        '.-%|/aFSSWIqZ%iiK:{NQ^E{~],]`5}qc?MA;f|YJ^gwQBbKm46/maVZVeKuv[tQ' );
define( 'SECURE_AUTH_SALT', 'K0-fUX_BtVkMfpwfRn9u%S10c_ A/ d VQGuS~lc`OS3^dyCxro}31r~xbBz3[Fx' );
define( 'LOGGED_IN_SALT',   'G=!G<<~7phy47JEZSG.zJ:K?}gQWb(RYFQ-r#fh-yuN*u!`>]t_Vltz`<e4%@eyh' );
define( 'NONCE_SALT',       'QJ`SJv=jook&-<Yj<xXihEFBRIT^4_,8!2SrqTy?s6C@X;yf?oea=l.o|96{Y]rs' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

