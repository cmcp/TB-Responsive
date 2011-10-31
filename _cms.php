<?php

/**
 * @warning This is a sooooper insecure hacked CMS shim.
 */

function section($location) {
  global $DCR_MAP;
  foreach ($DCR_MAP[$_GET['page']][$location] as $dcr) {
    include($dcr);
  }
}

$DCR_MAP = array(
  '' => array(
    'template' => 'home-page.php',
  ),
  'travel/policy-info' => array (
    'template' => 'content-page.php',
    'nav2' => array('html/dcrs/travel/left-nav.php'),
    'key' => array('html/dcrs/travel/1-existing-customer.php'),
    'hero' => array('html/dcrs/travel/3-existing-policy.php'),
    'main' => array('html/dcrs/travel/2-underwiters.php'),
    'supp' => array('html/dcrs/travel/1-elh.php'),
  ),
  'travel/' => array (
    'template' => 'nav-page.php',
    'nav2' => array('html/dcrs/travel/left-nav.php'),
    'key' => array('html/dcrs/travel/1-existing-customer.php', 'html/dcrs/travel/1-retrieve-quote.php', 'html/dcrs/travel/1-call-for-quote.php'),
    'hero' => array('html/dcrs/travel/3-hero.php'),
    'main' => array('html/dcrs/travel/2-what-do-i-get.php'),
    'supp' => array('html/dcrs/travel/1-elh.php'),
  ),
  
);
