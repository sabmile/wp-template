<?php
require_once __DIR__ . '/../conf/wp-config.php';

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'merei_demo' );

/** Database username */
define( 'DB_USER', 'merei_user' );

/** Database password */
define( 'DB_PASSWORD', '123456' );

/** Database hostname */
define( 'DB_HOST', 'wp_db' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'WP_HOME', 'https://' . $_SERVER['HTTP_HOST'] ); // Site URL for the front-of-site
define( 'WP_SITEURL', 'https://' . $_SERVER['HTTP_HOST'] . '/wp' ); // URL address with WP core (which is for the admin)
 
define( 'WP_CONTENT_DIR', __DIR__ . '/wp-content' );
define( 'WP_CONTENT_URL', WP_HOME . '/wp-content' );


/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
