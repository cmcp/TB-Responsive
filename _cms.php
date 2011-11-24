<?php

/**
 * @warning This is a sooooper insecure hacked CMS shim.
 */

function section($location) {
  global $DCR_MAP;
  if (array_key_exists($location, $DCR_MAP[$_GET['page']])) {
    if ($location == 'nav2') {
      if (array_key_exists('menu', $DCR_MAP[$_GET['page']])) {
        _build_nav($DCR_MAP[$_GET['page']]['menu']);
      }
    } else {
      foreach ($DCR_MAP[$_GET['page']][$location] as $dcr) {
        include($dcr);
      }
    }
  }
}

function _build_menu_item($item) {
    $class = @$item['class'];
    if ($item['url'] == $_SERVER['REQUEST_URI']) {
      return("<li class='active'>{$item['text']}</li>");
    } else {
      return("<li class='$class'><a href='{$item['url']}'>{$item['text']}</a></li>");
    }
}

function _build_nav($menu) {
  print('<div class="panel type-1 nav">
    <div class="wrap">
      <ul id="nav-secondary">');
  print(_build_menu_item($menu['top_item']));
  if (count($menu['items'])){
    print('<ul class="sub-level">');
    foreach ($menu['items'] as $item) {
      print(_build_menu_item($item));
    }
    print('</ul>');
  }
  print('</ul></div></div>');
}

$MENU = array(
  'nav' => array(
    'top_item' => array(
      'url' => '/layouts/nav',
      'text' => 'Naviagation Layout',
    ),
    'items' => array(
      array(
        'url' => '/layouts/nav/1',
        'text' => 'Canvas 1 (Fireplace)',
      ),
      array(
        'url' => '/layouts/nav/2',
        'text' => 'Canvas 2 (50:50 / 50:50)',
      ),
      array(
        'url' => '/layouts/nav/3',
        'text' => 'Canvas 3 (100 / Fireplace)',
      ),
      array(
        'url' => '/layouts/nav/4',
        'text' => 'Canvas 4 (50:50 / Fireplace)',
      ),
      array(
        'url' => '/layouts/nav/5',
        'text' => 'Canvas 5 (100 / 50:50)',
      ),
      array(
        'url' => '/layouts/nav/6',
        'text' => 'Canvas 6 (100 / 50:50 / 100 /Fireplace)',
      ),
      array(
        'url' => '/layouts/nav/7',
        'text' => 'Canvas 7 (100 / 50:50 / Fireplace)',
      ),
      array(
        'url' => '/layouts/nav/8',
        'text' => 'Canvas 8 (100 / 50:50 / 100)',
      ),
      array(
        'url' => '/layouts/nav/9',
        'text' => 'Canvas 9 (100)',
      ),
    ),
  ),
  'content' => array(
    'top_item' => array(
      'url' => '/layouts/content',
      'text' => 'Content Layout',
    ),
    'items' => array(
      array(
        'url' => '/layouts/content/1',
        'text' => 'Canvas 1 (Fireplace)',
      ),
      array(
        'url' => '/layouts/content/2',
        'text' => 'Canvas 2 (50:50 / 50:50)',
      ),
      array(
        'url' => '/layouts/content/3',
        'text' => 'Canvas 3 (100 / Fireplace)',
      ),
      array(
        'url' => '/layouts/content/4',
        'text' => 'Canvas 4 (50:50 / Fireplace)',
      ),
      array(
        'url' => '/layouts/content/5',
        'text' => 'Canvas 5 (100 / 50:50)',
      ),
      array(
        'url' => '/layouts/content/6',
        'text' => 'Canvas 6 (100 / 50:50 / 100 /Fireplace)',
      ),
      array(
        'url' => '/layouts/content/7',
        'text' => 'Canvas 7 (100 / 50:50 / Fireplace)',
      ),
      array(
        'url' => '/layouts/content/8',
        'text' => 'Canvas 8 (100 / 50:50 / 100)',
      ),
      array(
        'url' => '/layouts/content/9',
        'text' => 'Canvas 9 (100)',
      ),
    ),
  ),
  'travel' => array(
    'top_item' => array(
      'url' => '/personal/finance/travel/',
      'text' => 'Travel',
    ),
    'items' => array(
      array(
        'url' => '#',
        'text' => 'Travel Money',
      ),
      array(
        'url' => '/personal/finance/insurance/travelins/index.html',
        'text' => 'Travel insurance',
      ),
      array(
        'url' => '#',
        'text' => 'Euro breakdown cover',
      ),
      array(
        'url' => '#',
        'text' => 'Insuring your pet abroad',
      ),
      array(
        'url' => '#',
        'text' => 'Travel money card',
      ),
    ),
  ),
  'travel-ins' => array(
    'top_item' => array(
      'url' => '/personal/finance/insurance/travelins/index.html',
      'text' => 'Travel insurance',
    ),
    'items' => array(
      array(
        'url' => '/personal/finance/insurance/travelins/cover-options.html',
        'text' => 'Our cover options',
      ),
      array(
        'url' => '/personal/finance/insurance/travelins/policy-info.html',
        'text' => 'Policy info',
        'class' => 'divide'
      ),
      array(
        'url' => '/personal/finance/insurance/travelins/apply.html',
        'text' => 'Get a Quote',
      ),
      array(
        'url' => '/personal/finance/insurance/travelins/contact.html',
        'text' => 'Contact us',
      ),
    ),
  ),
  'insurance' => array(
    'top_item' => array(
      'url' => '/personal/finance/insurance/',
      'text' => 'Insurance',
    ),
    'items' => array(
      array(
        'url' => '/personal/finance/insurance/carins/index.html',
        'text' => 'Car insurance',
      ),
      array(
        'url' => '#',
        'text' => 'Home insurance',
      ),
      array(
        'url' => '#',
        'text' => 'Pet insurance',
      ),
      array(
        'url' => '/personal/finance/insurance/travelins/cover-options.html',
        'text' => 'Travel insurance',
      ),
      array(
        'url' => '#',
        'text' => 'Life insurance',
      ),
      array(
        'url' => '#',
        'text' => 'Over 50s plan',
      ),
      array(
        'url' => '#',
        'text' => 'Health insurance',
      ),
      array(
        'url' => '#',
        'text' => 'Dental insurance',
      ),
      array(
        'url' => '#',
        'text' => 'Breakdown cover',
      ),
    ),
  ),

  'car-ins' => array(
    'top_item' => array(
      'url' => '/personal/finance/insurance/carins/index.html',
      'text' => 'Car insurance ',
    ),
    'items' => array(
      array(
        'url' => '/personal/finance/insurance/carins/value/index.html',
        'text' => 'Value car insurance',
      ),
      array(
        'url' => '/personal/finance/insurance/carins/extra-options.html',
        'text' => 'Add breakdown cover',
      ),
      array(
        'url' => '/personal/finance/insurance/carins/our-discounts.html',
        'text' => 'Our car insurance discounts',
      ),
      array(
        'url' => '/personal/finance/insurance/carins/clubcard-customers.html',
        'text' => 'Clubcard customers',
      ),
      array(
        'url' => '/personal/finance/insurance/carins/policy-info.html',
        'text' => 'Policy info',
        'class' => 'divide',
      ),
      array(
        'url' => '/personal/finance/insurance/carins/existing-customers.html',
        'text' => 'Existing car insurance customers',
      ),
      array(
        'url' => '/personal/finance/insurance/carins/contact.html',
        'text' => 'Contact us',
      ),
    ),
  ),
);

$DCR_MAP = array(
  '' => array(
    'template' => 'home-page.php',
  ),

  'layouts/nav' => array (
    'template' => 'nav-page.php',
    'menu' => $MENU['nav'],
    'nav2' => array('html/dcrs/layout/left-nav-nav.php'),
    'key' => array('html/dcrs/layout/1.php'),
    'hero' => array('html/dcrs/layout/3.php'),
    '4-left' => array('html/dcrs/layout/4.php'),
    '4-right' => array('html/dcrs/layout/4.php'),
    'hero2' => array('html/dcrs/layout/3.php'),
    'main' => array('html/dcrs/layout/2.php'),
    'supp' => array('html/dcrs/layout/1.php'),
  ),
  'layouts/nav/1' => array (
    'template' => 'nav-page.php',
    'menu' => $MENU['nav'],
    'nav2' => array('html/dcrs/layout/left-nav-nav.php'),
    'key' => array('html/dcrs/layout/1.php'),
    'main' => array('html/dcrs/layout/2.php', 'html/dcrs/layout/2.php', 'html/dcrs/layout/2.php'),
    'supp' => array('html/dcrs/layout/1.php'),
  ),
  'layouts/nav/2' => array (
    'template' => 'nav-page.php',
    'menu' => $MENU['nav'],
    'nav2' => array('html/dcrs/layout/left-nav-nav.php'),
    'key' => array('html/dcrs/layout/1.php'),
    '4-left' => array('html/dcrs/layout/4.php', 'html/dcrs/layout/4.php'),
    '4-right' => array('html/dcrs/layout/4.php','html/dcrs/layout/4.php'),
  ),
  'layouts/nav/3' => array (
    'template' => 'nav-page.php',
    'menu' => $MENU['nav'],
    'nav2' => array('html/dcrs/layout/left-nav-nav.php'),
    'key' => array('html/dcrs/layout/1.php'),
    'hero' => array('html/dcrs/layout/3.php'),
    'main' => array('html/dcrs/layout/2.php'),
    'supp' => array('html/dcrs/layout/1.php'),
  ),
  'layouts/nav/4' => array (
    'template' => 'nav-page.php',
    'menu' => $MENU['nav'],
    'nav2' => array('html/dcrs/layout/left-nav-nav.php'),
    'key' => array('html/dcrs/layout/1.php'),
    '4-left' => array('html/dcrs/layout/4.php'),
    '4-right' => array('html/dcrs/layout/4.php'),
    'main' => array('html/dcrs/layout/2.php'),
    'supp' => array('html/dcrs/layout/1.php'),
  ),
  'layouts/nav/5' => array (
    'template' => 'nav-page.php',
    'menu' => $MENU['nav'],
    'nav2' => array('html/dcrs/layout/left-nav-nav.php'),
    'key' => array('html/dcrs/layout/1.php'),
    'hero' => array('html/dcrs/layout/3.php'),
    '4-left' => array('html/dcrs/layout/4.php'),
    '4-right' => array('html/dcrs/layout/4.php'),
  ),
  'layouts/nav/6' => array (
    'template' => 'nav-page.php',
    'menu' => $MENU['nav'],
    'nav2' => array('html/dcrs/layout/left-nav-nav.php'),
    'key' => array('html/dcrs/layout/1.php'),
    'hero' => array('html/dcrs/layout/3.php'),
    '4-left' => array('html/dcrs/layout/4.php'),
    '4-right' => array('html/dcrs/layout/4.php'),
    'hero2' => array('html/dcrs/layout/3.php'),
    'main' => array('html/dcrs/layout/2.php'),
    'supp' => array('html/dcrs/layout/1.php'),
  ),
  'layouts/nav/7' => array (
    'template' => 'nav-page.php',
    'menu' => $MENU['nav'],
    'nav2' => array('html/dcrs/layout/left-nav-nav.php'),
    'key' => array('html/dcrs/layout/1.php'),
    'hero' => array('html/dcrs/layout/3.php'),
    '4-left' => array('html/dcrs/layout/4.php'),
    '4-right' => array('html/dcrs/layout/4.php'),
    'main' => array('html/dcrs/layout/2.php'),
    'supp' => array('html/dcrs/layout/1.php'),
  ),
  'layouts/nav/8' => array (
    'template' => 'nav-page.php',
    'menu' => $MENU['nav'],
    'nav2' => array('html/dcrs/layout/left-nav-nav.php'),
    'key' => array('html/dcrs/layout/1.php'),
    'hero' => array('html/dcrs/layout/3.php'),
    '4-left' => array('html/dcrs/layout/4.php'),
    '4-right' => array('html/dcrs/layout/4.php'),
    'hero2' => array('html/dcrs/layout/3.php'),
  ),
  'layouts/nav/9' => array (
    'template' => 'nav-page.php',
    'menu' => $MENU['nav'],
    'nav2' => array('html/dcrs/layout/left-nav-nav.php'),
    'key' => array('html/dcrs/layout/1.php'),
    'hero' => array('html/dcrs/layout/3.php', 'html/dcrs/layout/3.php', 'html/dcrs/layout/3.php'),
  ),

  'layouts/content' => array (
    'template' => 'content-page.php',
    'menu' => $MENU['content'],
    'nav2' => array('html/dcrs/layout/left-nav-content.php'),
    'key' => array('html/dcrs/layout/1.php'),
    'hero' => array('html/dcrs/layout/3.php'),
    '4-left' => array('html/dcrs/layout/4.php'),
    '4-right' => array('html/dcrs/layout/4.php'),
    'hero2' => array('html/dcrs/layout/3.php'),
    'main' => array('html/dcrs/layout/2.php'),
    'supp' => array('html/dcrs/layout/1.php'),
  ),
  'layouts/content/1' => array (
    'template' => 'content-page.php',
    'menu' => $MENU['content'],
    'nav2' => array('html/dcrs/layout/left-nav-content.php'),
    'key' => array('html/dcrs/layout/1.php'),
    'main' => array('html/dcrs/layout/2.php', 'html/dcrs/layout/2.php', 'html/dcrs/layout/2.php'),
    'supp' => array('html/dcrs/layout/1.php'),
  ),
  'layouts/content/2' => array (
    'template' => 'content-page.php',
    'menu' => $MENU['content'],
    'nav2' => array('html/dcrs/layout/left-nav-content.php'),
    'key' => array('html/dcrs/layout/1.php'),
    '4-left' => array('html/dcrs/layout/4.php', 'html/dcrs/layout/4.php'),
    '4-right' => array('html/dcrs/layout/4.php','html/dcrs/layout/4.php'),
  ),
  'layouts/content/3' => array (
    'template' => 'content-page.php',
    'menu' => $MENU['content'],
    'nav2' => array('html/dcrs/layout/left-nav-content.php'),
    'key' => array('html/dcrs/layout/1.php'),
    'hero' => array('html/dcrs/layout/3.php'),
    'main' => array('html/dcrs/layout/2.php'),
    'supp' => array('html/dcrs/layout/1.php'),
  ),
  'layouts/content/4' => array (
    'template' => 'content-page.php',
    'menu' => $MENU['content'],
    'nav2' => array('html/dcrs/layout/left-nav-content.php'),
    'key' => array('html/dcrs/layout/1.php'),
    '4-left' => array('html/dcrs/layout/4.php'),
    '4-right' => array('html/dcrs/layout/4.php'),
    'main' => array('html/dcrs/layout/2.php'),
    'supp' => array('html/dcrs/layout/1.php'),
  ),
  'layouts/content/5' => array (
    'template' => 'content-page.php',
    'menu' => $MENU['content'],
    'nav2' => array('html/dcrs/layout/left-nav-content.php'),
    'key' => array('html/dcrs/layout/1.php'),
    'hero' => array('html/dcrs/layout/3.php'),
    '4-left' => array('html/dcrs/layout/4.php'),
    '4-right' => array('html/dcrs/layout/4.php'),
  ),
  'layouts/content/6' => array (
    'template' => 'content-page.php',
    'menu' => $MENU['content'],
    'nav2' => array('html/dcrs/layout/left-nav-content.php'),
    'key' => array('html/dcrs/layout/1.php'),
    'hero' => array('html/dcrs/layout/3.php'),
    '4-left' => array('html/dcrs/layout/4.php'),
    '4-right' => array('html/dcrs/layout/4.php'),
    'hero2' => array('html/dcrs/layout/3.php'),
    'main' => array('html/dcrs/layout/2.php'),
    'supp' => array('html/dcrs/layout/1.php'),
  ),
  'layouts/content/7' => array (
    'template' => 'content-page.php',
    'menu' => $MENU['content'],
    'nav2' => array('html/dcrs/layout/left-nav-content.php'),
    'key' => array('html/dcrs/layout/1.php'),
    'hero' => array('html/dcrs/layout/3.php'),
    '4-left' => array('html/dcrs/layout/4.php'),
    '4-right' => array('html/dcrs/layout/4.php'),
    'main' => array('html/dcrs/layout/2.php'),
    'supp' => array('html/dcrs/layout/1.php'),
  ),
  'layouts/content/8' => array (
    'template' => 'content-page.php',
    'menu' => $MENU['content'],
    'nav2' => array('html/dcrs/layout/left-nav-content.php'),
    'key' => array('html/dcrs/layout/1.php'),
    'hero' => array('html/dcrs/layout/3.php'),
    '4-left' => array('html/dcrs/layout/4.php'),
    '4-right' => array('html/dcrs/layout/4.php'),
    'hero2' => array('html/dcrs/layout/3.php'),
  ),
  'layouts/content/9' => array (
    'template' => 'content-page.php',
    'menu' => $MENU['content'],
    'nav2' => array('html/dcrs/layout/left-nav-content.php'),
    'key' => array('html/dcrs/layout/1.php'),
    'hero' => array('html/dcrs/layout/3.php', 'html/dcrs/layout/3.php', 'html/dcrs/layout/3.php'),
  ),

  'test-patterns' => array (
    'template' => 'content-page.php',
    'main' => array('html/dcrs/patterns/checkboxes.php', 'html/dcrs/patterns/external_link.php', 'html/dcrs/patterns/readmore.php', 'html/dcrs/patterns/tabs.php', 'html/dcrs/patterns/2-img.php'),
  ),
  


  'personal/finance/travel/' => array (
    'active' => 'travel',
    'menu' => $MENU['travel'],
    'template' => 'nav-page.php',
    'nav2' => array('html/dcrs/travel/left-nav.php'),
    '4-left' => array('html/dcrs/travel/4-travel-money.php', 'html/dcrs/travel/4-euro-breakdown.php'),
    '4-right' => array('html/dcrs/travel/4-travel-insurance.php', 'html/dcrs/travel/4-travel-pet.php'),
  ),
  'personal/finance/insurance/travelins/index.html' => array (
    'active' => 'travel',
    'menu' => $MENU['travel-ins'],
    'template' => 'nav-page.php',
    'nav2' => array('html/dcrs/insurance/travelins/left-nav.php'),
    'key' => array('html/dcrs/insurance/travelins/1-existing-customer.php', 'html/dcrs/insurance/travelins/1-retrieve-quote.php', ),
    'hero' => array('html/dcrs/insurance/travelins/3-hero.php'),
    'main' => array('html/dcrs/insurance/travelins/2-what-do-i-get.php'),
    'supp' => array('html/dcrs/insurance/travelins/1-call-for-quote.php', 'html/dcrs/insurance/travelins/1-elh.php'),
  ),
  'personal/finance/insurance/travelins/policy-info.html' => array (
    'active' => 'travel',
    'menu' => $MENU['travel-ins'],
    'template' => 'content-page.php',
    'nav2' => array('html/dcrs/insurance/travelins/left-nav.php'),
    'key' => array('html/dcrs/insurance/travelins/1-existing-customer.php'),
    'hero' => array('html/dcrs/insurance/travelins/3-existing-policy.php'),
    'main' => array('html/dcrs/insurance/travelins/2-underwiters.php'),
    'supp' => array('html/dcrs/insurance/travelins/1-elh.php'),
  ),
  'personal/finance/insurance/travelins/contact.html' => array (
    'active' => 'travel',
    'menu' => $MENU['travel-ins'],
    'template' => 'content-page.php',
    'nav2' => array('html/dcrs/insurance/travelins/left-nav.php'),
    'key' => array('html/dcrs/insurance/travelins/1-typetalk.php'),
    'main' => array('html/dcrs/insurance/travelins/2-contact.php', 'html/dcrs/insurance/travelins/2-numbers.php'),
    'supp' => array('html/dcrs/insurance/travelins/1-elh.php'),
  ),
  'personal/finance/insurance/travelins/cover-options.html' => array (
    'active' => 'travel',
    'menu' => $MENU['travel-ins'],
    'template' => 'content-page.php',
    'nav2' => array('html/dcrs/insurance/travelins/left-nav.php'),
    'hero' => array('html/dcrs/insurance/travelins/3-cover-options.php', 'html/dcrs/insurance/travelins/3-covered.php'),
  ),
  'personal/finance/insurance/travelins/apply.html' => array (
    'active' => 'travel',
    'menu' => $MENU['travel-ins'],
    'template' => 'content-page.php',
    'nav2' => array('html/dcrs/insurance/travelins/left-nav.php'),
    'key' => array('html/dcrs/insurance/travelins/1-call-for-quote.php', 'html/dcrs/insurance/travelins/1-retrieve-quote.php', 'html/dcrs/insurance/travelins/1-existing-customer.php'),
    'main' => array('html/dcrs/insurance/travelins/2-quote.php', 'html/dcrs/insurance/travelins/2-apply-info.php', 'html/dcrs/insurance/travelins/2-important-info.php'),
    'supp' => array('html/dcrs/insurance/travelins/1-elh.php'),
  ),





  'personal/finance/insurance/' => array (
    'active' => 'insurance',
    'menu' => $MENU['insurance'],
    'template' => 'nav-page.php',
    'nav2' => array('html/dcrs/insurance/left-nav.php'),
    'key' => array('html/1-compare.php'),
    'hero' => array('html/dcrs/insurance/3-life-hero.php'),
    '4-left' => array('html/dcrs/insurance/4-pet.php'),
    '4-right' => array('html/dcrs/insurance/4-home.php'),
    'hero2' => array('html/dcrs/insurance/3-life-hero.php'),
  ),

  'personal/finance/insurance/carins/index.html' => array (
    'active' => 'insurance',
    'menu' => $MENU['car-ins'],
    'template' => 'nav-page.php',
    'nav2' => array('html/dcrs/insurance/carins/left-nav.php'),
    'key' => array('html/dcrs/insurance/carins/1-contact.php', 'html/dcrs/insurance/carins/1-retrieve-quote.php', 'html/dcrs/insurance/carins/1-elh.php'),
    'hero' => array('html/dcrs/insurance/carins/3-landing-hero.php'),
    'main' => array('html/dcrs/insurance/carins/2-key-benefits.php', 'html/dcrs/insurance/carins/2-what-do-i-get.php', 'html/dcrs/insurance/carins/2-cheaper-insurance.php'),
    'supp' => array('html/dcrs/insurance/carins/1-tv-ad.php', 'html/dcrs/insurance/carins/1-iphone.php', 'html/dcrs/insurance/carins/1-loans.php'),
  ),
  'personal/finance/insurance/carins/value/index.html' => array (
    'active' => 'insurance',
    'menu' => $MENU['car-ins'],
    'template' => 'content-page.php',
    'nav2' => array('html/dcrs/insurance/carins/left-nav.php'),
    'key' => array('html/dcrs/insurance/carins/1-retrieve-quote.php', 'html/dcrs/insurance/carins/1-elh.php'),
    'main' => array('html/dcrs/insurance/carins/2-value-hero.php', 'html/dcrs/insurance/carins/2-key-benefits-value.php', 'html/dcrs/insurance/carins/2-breakdown.php'),
    'supp' => array('html/dcrs/insurance/carins/1-contact.php', 'html/dcrs/insurance/carins/1-recommend.php'),
  ),
  'personal/finance/insurance/carins/extra-options.html' => array (
    'active' => 'insurance',
    'menu' => $MENU['car-ins'],
    'template' => 'content-page.php',
    'nav2' => array('html/dcrs/insurance/carins/left-nav.php'),
    'key' => array('html/dcrs/insurance/carins/1-retrieve-quote.php', 'html/dcrs/insurance/carins/1-elh.php'),
    'main' => array('html/dcrs/insurance/carins/2-breakdown-shoulder.php', 'html/dcrs/insurance/carins/2-whats-covered.php'),
    'supp' => array('html/dcrs/insurance/carins/1-contact.php', 'html/dcrs/insurance/carins/1-recommend.php'),
  ),
  'personal/finance/insurance/carins/our-discounts.html' => array (
    'active' => 'insurance',
    'menu' => $MENU['car-ins'],
    'template' => 'content-page.php',
    'nav2' => array('html/dcrs/insurance/carins/left-nav.php'),
    'key' => array('html/dcrs/insurance/carins/1-retrieve-quote.php', 'html/dcrs/insurance/carins/1-elh.php'),
    'hero' => array('html/dcrs/insurance/carins/3-discounts.php', 'html/dcrs/insurance/carins/3-savings.php'),
  ),
  'personal/finance/insurance/carins/clubcard-customers.html' => array (
    'active' => 'insurance',
    'menu' => $MENU['car-ins'],
    'template' => 'content-page.php',
    'nav2' => array('html/dcrs/insurance/carins/left-nav.php'),
    'key' => array('html/dcrs/insurance/carins/1-retrieve-quote.php', 'html/dcrs/insurance/carins/1-elh.php'),
    'main' => array('html/dcrs/insurance/carins/2-clubcard.php', 'html/dcrs/insurance/carins/2-clubcard-savings.php', 'html/dcrs/insurance/carins/2-pay-vouchers.php'),
    'supp' => array('html/dcrs/insurance/carins/1-contact.php', 'html/dcrs/insurance/carins/1-recommend.php'),
  ),
  'personal/finance/insurance/carins/policy-info.html' => array (
    'active' => 'insurance',
    'menu' => $MENU['car-ins'],
    'template' => 'content-page.php',
    'nav2' => array('html/dcrs/insurance/carins/left-nav.php'),
    'key' => array('html/dcrs/insurance/carins/1-retrieve-quote.php', 'html/dcrs/insurance/carins/1-elh.php'),
    'main' => array('html/dcrs/insurance/carins/2-before-you-buy.php', 'html/dcrs/insurance/carins/2-already-have.php', 'html/dcrs/insurance/carins/2-policy-tabs.php', 'html/dcrs/insurance/carins/2-mlp.php', 'html/dcrs/insurance/carins/2-please-note.php'),
    'supp' => array('html/dcrs/insurance/carins/1-contact.php', 'html/1-acrobat.php'),
  ),
  'personal/finance/insurance/carins/existing-customers.html' => array (
    'active' => 'insurance',
    'menu' => $MENU['car-ins'],
    'template' => 'content-page.php',
    'nav2' => array('html/dcrs/insurance/carins/left-nav.php'),
    'key' => array('html/dcrs/insurance/carins/1-retrieve-quote.php', 'html/dcrs/insurance/carins/1-elh.php'),
    'main' => array('html/dcrs/insurance/carins/2-existing-hero.php', 'html/dcrs/insurance/carins/2-iphone.php', 'html/dcrs/insurance/carins/2-hellfrauds.php', 'html/dcrs/insurance/carins/2-recommend.php'),
    'supp' => array('html/dcrs/insurance/carins/1-contact.php', 'html/dcrs/insurance/carins/1-check-policy.php', 'html/1-acrobat.php', 'html/dcrs/insurance/carins/1-loans.php'),
  ),
  'personal/finance/insurance/carins/contact.html' => array (
    'active' => 'insurance',
    'menu' => $MENU['car-ins'],
    'template' => 'content-page.php',
    'nav2' => array('html/dcrs/insurance/carins/left-nav.php'),
    'key' => array('html/dcrs/insurance/carins/1-retrieve-quote.php', 'html/dcrs/insurance/carins/1-elh.php'),
    'main' => array('html/dcrs/insurance/carins/2-contact-hero.php', 'html/dcrs/insurance/carins/2-underwriters.php', 'html/dcrs/insurance/carins/2-newquote.php'),
    'supp' => array('html/dcrs/insurance/carins/1-textphone.php', 'html/dcrs/insurance/carins/1-check-policy.php'),
  ),

);
