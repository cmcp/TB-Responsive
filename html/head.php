<?php $less = 0; ?>
<html>
<head>
  <?php if ($_SERVER['HTTP_HOST'] == 'localhost') { print('<script type="text/javascript" src="/js/lib/firebug-lite/build/firebug-lite.js"></script>'); } ?>
  <meta charset="utf-8"/>
  <title>brandbank.com</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <?php include('head-js.php'); ?>
<?php if (file_exists($BASE_PATH.'/css/core.css')) { ?>
  <link rel="stylesheet" href="/css/core.css"/>
<?php } else { ?>
  <link rel="stylesheet/less" href="/css/core.less"/>
<?php $less += 1; } ?>
<?php if (file_exists($BASE_PATH.'/css/core.css')) { ?>
  <!--[if lte IE 8 & !IEMobile]><link rel="stylesheet" href="/css/ie.css"/><![endif]-->
<?php } else { ?>
  <!--[if lte IE 8 & !IEMobile]><link rel="stylesheet/less" href="/css/ie.less"/><![endif]-->
<?php $less += 1; } ?>
<?php if ($less) { ?>
  <script src="/js/lib/less.js"></script>
  <script>
less.env = 'development';
  </script>
<?php } ?>
  </head>
  <body>
    <div id="top-border">
      <div id="bottom-border" class="clearing">
        <div id="page-container">
          <div id="ls-canvas" class="ls-canvas">
            <div id="preheader" class="ls-row"></div>
