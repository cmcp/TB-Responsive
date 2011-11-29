<script>
document.getElementsByTagName('html')[0].className += ' js';
if (ontouchstart in window) {
  document.getElementsByTagName('html')[0].className += ' touch';
}
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
    document.getElementsByTagName('body')[0].className += ' wide';
    docCookies.setItem('screen', 'wide');
  }
  if (document.documentElement .clientWidth > 600) {
    docCookies.setItem('screen', 'wide');
  } else {
    docCookies.removeItem('screen');
  }
})();
</script>