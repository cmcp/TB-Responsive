<?php $less = 0; ?><!doctype html>
<html lang="en">
<head>
  <?php if ($_SERVER['HTTP_HOST'] == 'localhost') { print('<script type="text/javascript" src="/js/lib/firebug-lite/build/firebug-lite.js"></script>'); } ?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> 
  <title>brandbank.com</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <script>
document.getElementsByTagName('html')[0].className += ' js';
if ('ontouchstart' in window) {
  document.getElementsByTagName('html')[0].className += ' touch';
}
  </script>
  <script>
// https://developer.mozilla.org/en/DOM/document.cookie
docCookies = {
  getItem: function (sKey) {
    if (!sKey || !this.hasItem(sKey)) { return null; }
    return unescape(document.cookie.replace(new RegExp("(?:^|.*;\\s*)" + escape(sKey).replace(/[\-\.\+\*]/g, "\\$&") + "\\s*\\=\\s*((?:[^;](?!;))*[^;]?).*"), "$1"));
  },
  setItem: function (sKey, sValue, vEnd, sPath, sDomain, bSecure) {
    if (!sKey || /^(?:expires|max\-age|path|domain|secure)$/.test(sKey)) { return; }
    var sExpires = "";
    if (vEnd) {
      switch (typeof vEnd) {
        case "number": sExpires = "; max-age=" + vEnd; break;
        case "string": sExpires = "; expires=" + vEnd; break;
        case "object": if (vEnd.hasOwnProperty("toGMTString")) { sExpires = "; expires=" + vEnd.toGMTString(); } break;
      }
    }
    document.cookie = escape(sKey) + "=" + escape(sValue) + sExpires + (sDomain ? "; domain=" + sDomain : "") + (sPath ? "; path=" + sPath : "") + (bSecure ? "; secure" : "");
  },
  removeItem: function (sKey) {
    if (!sKey || !this.hasItem(sKey)) { return; }
    var oExpDate = new Date();
    oExpDate.setDate(oExpDate.getDate() - 1);
    document.cookie = escape(sKey) + "=; expires=" + oExpDate.toGMTString() + "; path=/";
  },
  hasItem: function (sKey) { return (new RegExp("(?:^|;\\s*)" + escape(sKey).replace(/[\-\.\+\*]/g, "\\$&") + "\\s*\\=")).test(document.cookie); }
};
(function () {
  if (docCookies.getItem('TB_fullsite') === 'true') {
    document.getElementsByTagName('html')[0].className += ' wide';
  }
})();
  </script>
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
    <div class="full">
