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
define('DB_NAME', 'mma');

/** MySQL database username */
define('DB_USER', 'homestead');

/** MySQL database password */
define('DB_PASSWORD', 'secret');

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
define('AUTH_KEY',         'iz2VCKqaA2(JX*uWh9i0-B!Oeji7hOsn^3f6-D#f28sm@.*V*,}#Ls8>ge+UCe7F');
define('SECURE_AUTH_KEY',  'OOl/C]g%CR`iqD^H(b6(UG@zd|4@~3r}l>}j&m^bH:QsFb$AcEJ?`=,DjA:XZSTh');
define('LOGGED_IN_KEY',    'U^77MnS1v|#$I$9T0Xv2)IILt[N35Wq,+I^$cYw1|0>/$[fdA(?;C *E,Z>d03N`');
define('NONCE_KEY',        'xb8#3kWpJ`KOF]]&i&yXqgD3?_$rD`i+qL60Hvg%EuGLrrL*).l+vGA^g/F b!{F');
define('AUTH_SALT',        '@T>?uwmS:67g8U^+(BE^<Q7giIy26=Hzu!a4COD7~OnwB^|TasaAdE!?h9 )%Mf|');
define('SECURE_AUTH_SALT', 'fU<f#)ciT2Kac{8m_h0 i Wp(u=sl1y%m>9Mt50J[!8w0#}2^hKjd9|iez_.}`iS');
define('LOGGED_IN_SALT',   '>/4xK1`xpg((<MEf]yU~{T8(H(Q!j iiF:)#J,D^L_1|>iS8bc;dN]T|iN-0O7/k');
define('NONCE_SALT',       '7/CjWo3zG,bh.-*=}#=bxIW6bFgpWhk=yylS](Z,jf4< _!kW)>}p3n[i<G!zSWg');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'mma_';

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
