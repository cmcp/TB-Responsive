<!DOCTYPE html>
<?php
$BASE_PATH = dirname(__FILE__);

require_once('_cms.php');

//print($_GET['page']);
if (array_key_exists($_GET['page'], $DCR_MAP)) {
  include($DCR_MAP[$_GET['page']]['template']);
} else {
  print('<h1>Page not found</h1>');
}
