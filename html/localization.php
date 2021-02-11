<?php
  // if (!(isset($_SESSION))) session_start();
  //
  //
  // if (isset($_GET["lang"])) {
  //   $_GET['lang'] = $_GET['lang'];
  // }
  // else if (isset($_SESSION["lang"])) {
  //   $_GET['lang']  = $_SESSION["lang"];
  // }
  // else {
  //   $_GET['lang'] = "fr_FR";
  // }
  //

  // setlocale(LC_ALL, $_GET['lang']);
  // putenv("LANG=$test");
  error_reporting(E_ALL | E_STRICT);

  // define constants
  define('PROJECT_DIR', realpath('./'));
  define('LOCALE_DIR', PROJECT_DIR .'/locale');
  define('DEFAULT_LOCALE', 'fr_FR');

  require_once('./international/lib/gettext/gettext.inc');

  $supported_locales = array('en_US', 'fr_FR');
  $encoding = 'UTF-8';

  $locale = (isset($_GET['lang']))? $_GET['lang'] : DEFAULT_LOCALE;

  // gettext setup
  T_setlocale(LC_MESSAGES, $locale);
  // Set the text domain as 'messages'
  $domain = 'traduction';
  T_bindtextdomain($domain, LOCALE_DIR);
  T_bind_textdomain_codeset($domain, $encoding);
  T_textdomain($domain);

  header("Content-type: text/html; charset=$encoding");
?>
