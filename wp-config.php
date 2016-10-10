<?php
/**
 * Podstawowa konfiguracja WordPressa.
 *
 * Skrypt wp-config.php używa tego pliku podczas instalacji.
 * Nie musisz dokonywać konfiguracji przy pomocy przeglądarki internetowej,
 * możesz też skopiować ten plik, nazwać kopię "wp-config.php"
 * i wpisać wartości ręcznie.
 *
 * Ten plik zawiera konfigurację:
 *
 * * ustawień MySQL-a,
 * * tajnych kluczy,
 * * prefiksu nazw tabel w bazie danych,
 * * ABSPATH.
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Ustawienia MySQL-a - możesz uzyskać je od administratora Twojego serwera ** //
/** Nazwa bazy danych, której używać ma WordPress */
define('DB_NAME', 'g8team');

/** Nazwa użytkownika bazy danych MySQL */
define('DB_USER', 'root');

/** Hasło użytkownika bazy danych MySQL */
define('DB_PASSWORD', '');

/** Nazwa hosta serwera MySQL */
define('DB_HOST', 'localhost');

/** Kodowanie bazy danych używane do stworzenia tabel w bazie danych. */
define('DB_CHARSET', 'utf8mb4');

/** Typ porównań w bazie danych. Nie zmieniaj tego ustawienia, jeśli masz jakieś wątpliwości. */
define('DB_COLLATE', '');

/**#@+
 * Unikatowe klucze uwierzytelniania i sole.
 *
 * Zmień każdy klucz tak, aby był inną, unikatową frazą!
 * Możesz wygenerować klucze przy pomocy {@link https://api.wordpress.org/secret-key/1.1/salt/ serwisu generującego tajne klucze witryny WordPress.org}
 * Klucze te mogą zostać zmienione w dowolnej chwili, aby uczynić nieważnymi wszelkie istniejące ciasteczka. Uczynienie tego zmusi wszystkich użytkowników do ponownego zalogowania się.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '}YF1&#Qfub!Gt.oD18eKpP1Vc~y#JB<UX2>}sHq$o9!UV=_ @u(^!6!]<n*}]@<S');
define('SECURE_AUTH_KEY',  'E{r#AKHQz%^S@?HSYmz$&0/VS`YJ+R:CWzn*82<1yr4W+n4E3,Vs9jYvQpn(*3%q');
define('LOGGED_IN_KEY',    'yHE.W0M{`]5:_bI_;<4c,Vgx_up?3yojm7I|{G?de9YnTz<F23.nndFtDTnnMfqL');
define('NONCE_KEY',        '7$ 7?*6*ZBq$GPRm#T)A1]:=dOWsWW3nUjUSC+Zd-Lo^emk!Q~Y;e`SZ:JJB:j3M');
define('AUTH_SALT',        ';-rQj#7LTUU>8(w2(k5u*4W0elZ(dlD90h#E<8~nPV*W}-HeSECVx=$WrzP,Dpk6');
define('SECURE_AUTH_SALT', 'H{cL y``~ww;1;#zpR6J[NTbYa;m*dk0(FPDRpd/o[Vw uUj1i0*#<OFJC0/[$FQ');
define('LOGGED_IN_SALT',   '<8[L.0U.QIf)L^6 Qs7p1R7`/rEb4y7+P[))<ds}#mL%rRm+CH.%Jo#yGVAmu7_o');
define('NONCE_SALT',       'vw!pYaf_P2=qd48/9O,686^6&rzV/`[mE!ecUTt/k|qb:py+CjCuvEUNaTd(c(V ');

/**#@-*/

/**
 * Prefiks tabel WordPressa w bazie danych.
 *
 * Możesz posiadać kilka instalacji WordPressa w jednej bazie danych,
 * jeżeli nadasz każdej z nich unikalny prefiks.
 * Tylko cyfry, litery i znaki podkreślenia, proszę!
 */
$table_prefix  = 'wp_';

/**
 * Dla programistów: tryb debugowania WordPressa.
 *
 * Zmień wartość tej stałej na true, aby włączyć wyświetlanie
 * ostrzeżeń podczas modyfikowania kodu WordPressa.
 * Wielce zalecane jest, aby twórcy wtyczek oraz motywów używali
 * WP_DEBUG podczas pracy nad nimi.
 *
 * Aby uzyskać informacje o innych stałych, które mogą zostać użyte
 * do debugowania, przejdź na stronę Kodeksu WordPressa.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* To wszystko, zakończ edycję w tym miejscu! Miłego blogowania! */

/** Absolutna ścieżka do katalogu WordPressa. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Ustawia zmienne WordPressa i dołączane pliki. */
require_once(ABSPATH . 'wp-settings.php');
