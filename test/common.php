<?php
session_start();
header('Cache-control: private'); // IE 6 FIX
$lang='en';
if(isSet($_GET['lang']))
{
console.log($lang);
$lang = $_GET['lang'];
console.log($lang);
// register the session and set the cookie
$_SESSION['lang'] = $lang;

setcookie("lang", 'en', time() + (3600 * 24 * 30));
}
else if(isSet($_SESSION['lang']))
{
  console.log($lang);
$lang = $_SESSION['lang'];
console.log($lang);
}
else if(isSet($_COOKIE['lang']))
{
$lang = $_COOKIE['lang'];
}
else
{
$lang = 'es';
}

switch ($lang) {
  case 'en':
  $lang_file = 'lang.en.php';
  break;

  case 'de':
  $lang_file = 'lang.de.php';
  break;

  case 'es':
  $lang_file = 'lang.es.php';
  break;

  default:
  $lang_file = 'lang.en.php';

}

include_once 'lang/'.$lang_file;
?>
