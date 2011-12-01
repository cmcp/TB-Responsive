<?php
// Yet another hack to add to the pile that I am laughably calling a 'system'.
function fail_page() {
  header('WWW-Authenticate: Basic realm="We are a hedge."');
  header('HTTP/1.0 401 Unauthorized');
  die('<!DOCTYPE html><html><head><title>We are a hedge.</title></head><body><img src="/img/ninjahedge.jpg"/></body></html>');
}
$auth = $_SERVER['HTTP_HOST'] != 'localhost';
if ($auth) {
  if (!isset($_SERVER['PHP_AUTH_USER'])) {
    fail_page();
  } else {
    if (md5($_SERVER['PHP_AUTH_PW']) != '0d107d09f5bbe40cade3de5c71e9e9b7'){
      $auth = false;
    }
    if (md5($_SERVER['PHP_AUTH_USER']) != '098f6bcd4621d373cade4e832627b4f6'){
      $auth = false;
    }
    if (!$auth) {
      fail_page();
    }
  }
}
?><!DOCTYPE html>
<?php
$BASE_PATH = dirname(__FILE__);

require_once('_cms.php');

//print($_GET['page']);
if (array_key_exists($_GET['page'], $DCR_MAP)) {
  $active = @$DCR_MAP[$_GET['page']]['active'];
  include($DCR_MAP[$_GET['page']]['template']);
} else {
  print('<h1>Page not found</h1>');
}

