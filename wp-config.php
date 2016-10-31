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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '4en#T1bDgo(FK!Z+8 FAexJvv;lPk/B0=D3$xoiy_ljX a|yS# &Zr:f5!-~Fu(5');
define('SECURE_AUTH_KEY',  'cc8*<@}Vt;4[r:ER7lEU{$?]wOs^Y-SMS$fOY){u6;?jbKZ$J$<TEIWwdD-tQ>@1');
define('LOGGED_IN_KEY',    '3+Sed)8jtlbHUq<#U2Nf:w^Ao{5@g<%;8L5hk{sGrhVLM4Wd=zE1j-g=p7!Bp1[(');
define('NONCE_KEY',        '>-Xzo75Yy$JLjRC1|Q(jFE>8y1,ZNjecD?Ls5?Fc0U*#1!Uh1tp0 b&SV;LG~H#`');
define('AUTH_SALT',        '}^JRQwmGkCI%X@u*q)kv/nH[5ioY&PnSoO8%w12y6JVP-&YcR9Y~* wkmP3yZ2V{');
define('SECURE_AUTH_SALT', 'm^jj<i=MgWLv/L|I#ssbyHb:c;<8?$c, #iD+W6>k{A<cN/Mo0Xu:(}C_]!plh8}');
define('LOGGED_IN_SALT',   'y:%Wf,M+4YnW8O,z5AmQ fY1vw[FcJ9C45K<&BG/Ejl v*);p}(x}JAmJda,@&_|');
define('NONCE_SALT',       'Yt=nlT);V?kcq<8vx?TrdB#U?qNV0@oxbn7r*8bUwk<n9?#(Bss0Oc+.}3z@0:yE');

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
