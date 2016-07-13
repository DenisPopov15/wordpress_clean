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
define('DB_NAME', 'wordpress_clean');

/** MySQL database username */
define('DB_USER', 'root');
// define('DB_USER', 'wordpressuser');

/** MySQL database password */
define('DB_PASSWORD', 'root');
// define('DB_PASSWORD', 'password');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('WP_HOME','http://localhost');
define('WP_SITEURL','http://localhost');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Z!C *zw,1:YxRo;&4joa2N%|Pj=<)]PHc,H$^Qc+:Lr{EU_Fu@p0{=(}Hl|vyrWr');
define('SECURE_AUTH_KEY',  'c4tOB_sI#+4fi+_F`fH!x-rZN->t_L,|MsCH3ji^Cg4gC-V2(^&Vng/uBQ(lIGUw');
define('LOGGED_IN_KEY',    'KwT4CoXbY4HuTw|X9[abX{O[De|W0J+Vy|p6CWIW(!wO`!0 r+VS]d[WzN$J{99a');
define('NONCE_KEY',        '_a 2m.6u(BZ6`+M1`&yf9iY--I/-%k>1/7Xgofs=MoXqhEwxrh,m=!L+U2|Mzz&O');
define('AUTH_SALT',        '=to;[1OHvo0G$TVozAd](gkq~|+Z%Wl93D%42{rzBXRk^$nx]LxGC+t|d|8AHIid');
define('SECURE_AUTH_SALT', '@6_+3b<hpFXg:{**2_TM&<n;q1dX>r<yMt3XYZG$%usABpv$;+}g`[@(s:HZGIpN');
define('LOGGED_IN_SALT',   '@(P(|l?q{deC>oV~e@t8MGL]C|b$C2J2$,P@%8%Fa&z|D]*?YWM>5c, `J-Xc?Ou');
define('NONCE_SALT',       '{ac.14:sY{z-%U.R(N_-6E8weu+B;mLSau,%S8];p!ace*,pW?eo8Yk8C>,+C-_1');

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
