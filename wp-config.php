<?php
/**
 * Baskonfiguration för WordPress.
 *
 * Denna fil används av wp-config.php-genereringsskript under installationen.
 * Du behöver inte använda webbplatsen, du kan kopiera denna fil direkt till
 * "wp-config.php" och fylla i värdena.
 *
 * Denna fil innehåller följande konfigurationer:
 *
 * * Inställningar för MySQL
 * * Säkerhetsnycklar
 * * Tabellprefix för databas
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL-inställningar - MySQL-uppgifter får du från ditt webbhotell ** //
/** Namnet på databasen du vill använda för WordPress */
define('DB_NAME', 'jmsh');

/** MySQL-databasens användarnamn */
define('DB_USER', 'root');

/** MySQL-databasens lösenord */
define('DB_PASSWORD', 'root');

/** MySQL-server */
define('DB_HOST', 'localhost');

/** Teckenkodning för tabellerna i databasen. */
define('DB_CHARSET', 'utf8mb4');

/** Kollationeringstyp för databasen. Ändra inte om du är osäker. */
define('DB_COLLATE', '');

/**#@+
 * Unika autentiseringsnycklar och salter.
 *
 * Ändra dessa till unika fraser!
 * Du kan generera nycklar med {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Du kan när som helst ändra dessa nycklar för att göra aktiva cookies obrukbara, vilket tvingar alla användare att logga in på nytt.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'F:#X mO;_i/Y^F6^@OTXEYJbAji{3d p,*x9eAo_If,,|Oi?[,5]MOR<(VJ#cV]f');
define('SECURE_AUTH_KEY',  '>p{<FkW([7dtW|}bQ+PifJd8r4<)]p0u|&Z2YfEBkJj/IQ4:i+@ieAcxghDa_77I');
define('LOGGED_IN_KEY',    '9xl`R2.i8R]OMwmbXH|25A@4,UbzxCM&2oWyuMN1^](_j`aiSxgr-QwJM`+5.Wpg');
define('NONCE_KEY',        'TN1v|DlLhq~@,:EP>]Smi6iwITRtE>n83rqt#x~Q$Q/R::qL]<GphGilRm9|.0@z');
define('AUTH_SALT',        'v>9xH,a6!}&7~HRWmrccf&h|8Fdm09tGHnfD|Zpk{O9.cj)@l.PfGeR:+cuVc^ct');
define('SECURE_AUTH_SALT', 'jx%R<_G3XnL3d|;L#ht;LmKX9=j_:3):CN/C=S{lUv&<Kr-w|mHkB(~u+ ,M;pwa');
define('LOGGED_IN_SALT',   '=)2kI.[<<J;{M=RKg&K]ak=>}a:fF4M7#?wH`)%$s%*&;7I&FT{F!(u}DIXG=>8<');
define('NONCE_SALT',       'efpkBrb[U4eAR,)p=H$L[hw=e-+PqlL!2r->VyN`s#i#tJ`UU~Yv8mxuU?Q~@t|^');

/**#@-*/

/**
 * Tabellprefix för WordPress Databasen.
 *
 * Du kan ha flera installationer i samma databas om du ger varje installation ett unikt
 * prefix. Endast siffror, bokstäver och understreck!
 */
$table_prefix  = 'jsmh_';

/** 
 * För utvecklare: WordPress felsökningsläge. 
 * 
 * Ändra detta till true för att aktivera meddelanden under utveckling. 
 * Det är rekommderat att man som tilläggsskapare och temaskapare använder WP_DEBUG 
 * i sin utvecklingsmiljö. 
 *
 * För information om andra konstanter som kan användas för felsökning, 
 * se dokumentationen. 
 * 
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */ 
define('WP_DEBUG', false);

/* Det var allt, sluta redigera här! Blogga på. */

/** Absoluta sökväg till WordPress-katalogen. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Anger WordPress-värden och inkluderade filer. */
require_once(ABSPATH . 'wp-settings.php');