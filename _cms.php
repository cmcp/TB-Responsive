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
  'travel/' => array (
    'template' => 'nav-page.php',
    'nav2' => array('html/dcrs/travel/left-nav.php'),
    'key' => array('html/dcrs/travel/1-existing-customer.php', 'html/dcrs/travel/1-retrieve-quote.php', ),
    'hero' => array('html/dcrs/travel/3-hero.php'),
    'main' => array('html/dcrs/travel/2-what-do-i-get.php'),
    'supp' => array('html/dcrs/travel/1-call-for-quote.php', 'html/dcrs/travel/1-elh.php'),
  ),
  'travel/policy-info' => array (
    'template' => 'content-page.php',
    'nav2' => array('html/dcrs/travel/left-nav.php'),
    'key' => array('html/dcrs/travel/1-existing-customer.php'),
    'hero' => array('html/dcrs/travel/3-existing-policy.php'),
    'main' => array('html/dcrs/travel/2-underwiters.php'),
    'supp' => array('html/dcrs/travel/1-elh.php'),
  ),
  'travel/contact-us' => array (
    'template' => 'content-page.php',
    'nav2' => array('html/dcrs/travel/left-nav.php'),
    'key' => array('html/dcrs/travel/1-typetalk.php'),
    'hero' => array(),
    'main' => array('html/dcrs/travel/2-contact.php', 'html/dcrs/travel/2-numbers.php'),
    'supp' => array('html/dcrs/travel/1-elh.php'),
  ),
  'travel/cover-options' => array (
    'template' => 'content-page.php',
    'nav2' => array('html/dcrs/travel/left-nav.php'),
    'key' => array(),
    'hero' => array('html/dcrs/travel/3-cover-options.php', 'html/dcrs/travel/3-covered.php'),
    'main' => array(),
    'supp' => array('html/dcrs/travel/1-elh.php'),
  ),
  'travel/existing-customers' => array (
    'template' => 'content-page.php',
    'nav2' => array('html/dcrs/travel/left-nav.php'),
    'key' => array('html/dcrs/travel/1-elh.php'),
    'hero' => array(),
    'main' => array('html/dcrs/travel/1-renew.php', 'html/dcrs/travel/2-recommend-friend.php'),
    'supp' => array(),
  ),
  
);
