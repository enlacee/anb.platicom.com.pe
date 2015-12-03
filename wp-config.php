<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'platicom_Xm5pV1o');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '123456');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'UG95Iase0fP=B ~[:*V+c!/j}^YB!F;b]f:-x`PRU[;?a=7F2(}?)y[D6!D^e2}#');
define('SECURE_AUTH_KEY', ' t[XmHY|--c?#<!S4$w0|++yipC$kNoT.hmuJ@#gaewW.MX3p>,fS_8y3k|UJQmL');
define('LOGGED_IN_KEY', '1N_29m425l{smG9HA35)5@J?dzc1 j,w`aQzk!:4c*/r+LY~Nvw5~-e$uO_%pZ$C');
define('NONCE_KEY', '#lj@V[p_lV;Ev8a[`?01Kx*vGy>-%dP%PC~+*{}WPN3&n X7Ok@DlyMk`|XE6)r-');
define('AUTH_SALT', 'CvVDbX?_vrt:VnE+5,HxiVUs;JW6;,bdG-T4A=)#wWJ|_qgi6d+^1tVP8,?Ks|DI');
define('SECURE_AUTH_SALT', 'feja I{4L3_|0`BL@)Op*XA!Qq4Q%0>X&w&a+2Gnz>j039UE5*._2#-cE/_cd^m>');
define('LOGGED_IN_SALT', 'mS):|vu7&I*[S0caKp];ioVh,A/<ncdQ1mYiw~TkJWWM]w{|!<O>NXI@=vPe%Dx]');
define('NONCE_SALT', 'W}1pnN3qd|;_j|&*A|&w)M+X<#} Z$N[pc(>^RSHV8},z+m1X_i@2Nyz~<V;~>N#');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'jyn_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

