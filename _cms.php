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
  'personal/finance/travel/' => array (
    'template' => 'nav-page.php',
    'nav2' => array('html/dcrs/travel/left-nav.php'),
    'key' => array('html/dcrs/travel/1-existing-customer.php', 'html/dcrs/travel/1-retrieve-quote.php', ),
    'hero' => array('html/dcrs/travel/3-hero.php'),
    'main' => array('html/dcrs/travel/2-what-do-i-get.php'),
    'supp' => array('html/dcrs/travel/1-call-for-quote.php', 'html/dcrs/travel/1-elh.php'),
  ),
  'personal/finance/travel/policy-info' => array (
    'template' => 'content-page.php',
    'nav2' => array('html/dcrs/travel/left-nav.php'),
    'key' => array('html/dcrs/travel/1-existing-customer.php'),
    'hero' => array('html/dcrs/travel/3-existing-policy.php'),
    'main' => array('html/dcrs/travel/2-underwiters.php'),
    'supp' => array('html/dcrs/travel/1-elh.php'),
  ),
  'personal/finance/travel/contact-us' => array (
    'template' => 'content-page.php',
    'nav2' => array('html/dcrs/travel/left-nav.php'),
    'key' => array('html/dcrs/travel/1-typetalk.php'),
    'hero' => array(),
    'main' => array('html/dcrs/travel/2-contact.php', 'html/dcrs/travel/2-numbers.php'),
    'supp' => array('html/dcrs/travel/1-elh.php'),
  ),
  'personal/finance/travel/cover-options' => array (
    'template' => 'content-page.php',
    'nav2' => array('html/dcrs/travel/left-nav.php'),
    'key' => array(),
    'hero' => array('html/dcrs/travel/3-cover-options.php', 'html/dcrs/travel/3-covered.php'),
    'main' => array(),
    'supp' => array('html/dcrs/travel/1-elh.php'),
  ),
  'personal/finance/travel/apply' => array (
    'template' => 'content-page.php',
    'nav2' => array('html/dcrs/travel/left-nav.php'),
    'key' => array('html/dcrs/travel/1-call-for-quote.php', 'html/dcrs/travel/1-retrieve-quote.php', 'html/dcrs/travel/1-existing-customer.php'),
    'hero' => array(),
    'main' => array('html/dcrs/travel/2-quote.php', 'html/dcrs/travel/2-apply-info.php', 'html/dcrs/travel/2-important-info.php'),
    'supp' => array('html/dcrs/travel/1-elh.php'),
  ),


  'personal/finance/insurance/' => array (
    'template' => 'nav-page.php',
    'nav2' => array('html/dcrs/insurance/left-nav.php'),
    'key' => array('html/1-compare.php'),
    'hero' => array('html/dcrs/insurance/3-life-hero.php'),
    '4-left' => array('html/dcrs/insurance/4-pet.php'),
    '4-right' => array('html/dcrs/insurance/4-home.php'),
    'hero2' => array('html/dcrs/insurance/3-life-hero.php'),
    'supp' => array(),
  ),

  'personal/finance/insurance/carins/index.html' => array (
    'template' => 'nav-page.php',
    'nav2' => array('html/dcrs/insurance/carins/left-nav.php'),
    'key' => array('html/dcrs/insurance/carins/1-contact.php', 'html/dcrs/insurance/carins/1-retrieve-quote.php', 'html/dcrs/insurance/carins/1-elh.php'),
    'hero' => array('html/dcrs/insurance/carins/3-landing-hero.php'),
    'main' => array('html/dcrs/insurance/carins/2-key-benefits.php', 'html/dcrs/insurance/carins/2-what-do-i-get.php', 'html/dcrs/insurance/carins/2-cheaper-insurance.php'),
    'supp' => array('html/dcrs/insurance/carins/1-tv-ad.php', 'html/dcrs/insurance/carins/1-iphone.php', 'html/dcrs/insurance/carins/1-loans.php'),
  ),
  'personal/finance/insurance/carins/value/index.html' => array (
    'template' => 'content-page.php',
    'nav2' => array('html/dcrs/insurance/carins/left-nav.php'),
    'key' => array('html/dcrs/insurance/carins/1-retrieve-quote.php', 'html/dcrs/insurance/carins/1-elh.php'),
    'hero' => array(),
    'main' => array('html/dcrs/insurance/carins/2-value-hero.php', 'html/dcrs/insurance/carins/2-key-benefits-value.php', 'html/dcrs/insurance/carins/2-breakdown.php'),
    'supp' => array('html/dcrs/insurance/carins/1-contact.php', 'html/dcrs/insurance/carins/1-recommend.php'),
  ),
  'personal/finance/insurance/carins/extra-options.html' => array (
    'template' => 'content-page.php',
    'nav2' => array('html/dcrs/insurance/carins/left-nav.php'),
    'key' => array('html/dcrs/insurance/carins/1-retrieve-quote.php', 'html/dcrs/insurance/carins/1-elh.php'),
    'hero' => array(),
    'main' => array('html/dcrs/insurance/carins/2-breakdown-shoulder.php', 'html/dcrs/insurance/carins/2-whats-covered.php'),
    'supp' => array('html/dcrs/insurance/carins/1-contact.php', 'html/dcrs/insurance/carins/1-recommend.php'),
  ),
  'personal/finance/insurance/carins/our-discounts.html' => array (
    'template' => 'content-page.php',
    'nav2' => array('html/dcrs/insurance/carins/left-nav.php'),
    'key' => array('html/dcrs/insurance/carins/1-retrieve-quote.php', 'html/dcrs/insurance/carins/1-elh.php'),
    'hero' => array('html/dcrs/insurance/carins/3-discounts.php', 'html/dcrs/insurance/carins/3-savings.php'),
    'main' => array(),
    'supp' => array(),
  ),
  'personal/finance/insurance/carins/clubcard-customers.html' => array (
    'template' => 'content-page.php',
    'nav2' => array('html/dcrs/insurance/carins/left-nav.php'),
    'key' => array('html/dcrs/insurance/carins/1-retrieve-quote.php', 'html/dcrs/insurance/carins/1-elh.php'),
    'hero' => array(),
    'main' => array('html/dcrs/insurance/carins/2-clubcard.php', 'html/dcrs/insurance/carins/2-clubcard-savings.php', 'html/dcrs/insurance/carins/2-pay-vouchers.php'),
    'supp' => array('html/dcrs/insurance/carins/1-contact.php', 'html/dcrs/insurance/carins/1-recommend.php'),
  ),
  'personal/finance/insurance/carins/policy-info.html' => array (
    'template' => 'content-page.php',
    'nav2' => array('html/dcrs/insurance/carins/left-nav.php'),
    'key' => array('html/dcrs/insurance/carins/1-retrieve-quote.php', 'html/dcrs/insurance/carins/1-elh.php'),
    'hero' => array(),
    'main' => array('html/dcrs/insurance/carins/2-before-you-buy.php', 'html/dcrs/insurance/carins/2-already-have.php', 'html/dcrs/insurance/carins/2-policy-tabs.php', 'html/dcrs/insurance/carins/2-mlp.php', 'html/dcrs/insurance/carins/2-please-note.php'),
    'supp' => array('html/dcrs/insurance/carins/1-contact.php', 'html/1-acrobat.php'),
  ),
  'personal/finance/insurance/carins/existing-customers.html' => array (
    'template' => 'content-page.php',
    'nav2' => array('html/dcrs/insurance/carins/left-nav.php'),
    'key' => array('html/dcrs/insurance/carins/1-retrieve-quote.php', 'html/dcrs/insurance/carins/1-elh.php'),
    'hero' => array(),
    'main' => array('html/dcrs/insurance/carins/2-existing-hero.php', 'html/dcrs/insurance/carins/2-iphone.php', 'html/dcrs/insurance/carins/2-hellfrauds.php', 'html/dcrs/insurance/carins/2-recommend.php'),
    'supp' => array('html/dcrs/insurance/carins/1-contact.php', 'html/dcrs/insurance/carins/1-check-policy.php', 'html/1-acrobat.php', 'html/dcrs/insurance/carins/1-loans.php'),
  ),
  'personal/finance/insurance/carins/contact.html' => array (
    'template' => 'content-page.php',
    'nav2' => array('html/dcrs/insurance/carins/left-nav.php'),
    'key' => array('html/dcrs/insurance/carins/1-retrieve-quote.php', 'html/dcrs/insurance/carins/1-elh.php'),
    'hero' => array(),
    'main' => array('html/dcrs/insurance/carins/2-contact-hero.php', 'html/dcrs/insurance/carins/2-underwriters.php', 'html/dcrs/insurance/carins/2-newquote.php'),
    'supp' => array('html/dcrs/insurance/carins/1-textphone.php', 'html/dcrs/insurance/carins/1-check-policy.php'),
  ),
  
);
