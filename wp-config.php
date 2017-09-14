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
define('DB_NAME', 'albiux');

/** MySQL database username */
define('DB_USER', 'albiux');

/** MySQL database password */
define('DB_PASSWORD', 'Shompa100');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '+7Yddri,kaZ4zgo5fyId,YQ+Kp9xLito(kOOk!5=7R{HF6gOo%,OL}zReN(~c9l+');
define('SECURE_AUTH_KEY',  ',bPl8W~9VKN~=o ~!!sE^M-gT8(g<.`kg2BqE:<uQ<;^DN~Af=F[SGQu|PyD/9Lm');
define('LOGGED_IN_KEY',    'p[uTC]J?L6?7>Lm*NF#PKc-xs8qa!7Y07QQ.4C`0Ci[5yIr1VFYs9R)8cFO]+m;g');
define('NONCE_KEY',        '](m!Cd%+<KIUry=$[BqhG~EZ^T%QjDX**u~zCh#fxR,5vVy.yC!pau!=v r&>3Tc');
define('AUTH_SALT',        '=}B08([&3&E$aU?2OsL:G<]5Wj32&hH;tRsvtFXBQx8r8a)onRa/SUvvr!Qv#{ k');
define('SECURE_AUTH_SALT', ']}%.kO|}&@V}$]:H/h`=Eh _ v|R.Ohc Pbs@| 7er,VpO9Kr2h;STcxxk.q58DN');
define('LOGGED_IN_SALT',   'w]S%do.%2E:7S+:cd$nAFQt!]Y0%0U8~c$HJKQ1jNAVKASCi`!#O4;D`_$W]cIz<');
define('NONCE_SALT',       '3OWOu$tCv1+3I$vh{ZUaB:JuUfe*q$ESWtHz3uJc]cb0Z$pP-U[`0xi?CDe>N}`K');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
