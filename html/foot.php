  </div><!-- .wrapper -->
  <script src="js/jquery.legacy.js" type="text/javascript"></script>
  <script>
$(document).ready(function () {
  $('#fullsite').html('<a class="btn" id="showfull">Show full site</a>')
  $('#relaxsite').html('<a class="btn" id="relaxfull">Return to optimised site</a>');
  $('#showfull').live('click', function () {
    $('html').addClass('wide');
    window.scrollTo(0,0);
    document.cookie = 'TB_fullsite';
  });
  $('#relaxfull').live('click', function () {
    $('html').removeClass('wide');
    window.scrollTo(0,0);
    document.cookie = '';
  });

  if ($('#all-products-nav').length) {
  var link = $('#all-products-link'),
      nav_main = $('.nav-main'),
      nav;
    link.text('View all products');
    nav_main.after('<div id="all-products-link-nav" class="nav-main">' + $('#all-products-nav').html() +'</div>');
    nav = $('#all-products-link-nav');
    nav.hide(1);
    link.live('click', function () {
      nav_main.addClass('wide-0');
      nav.show(1).addClass('narrow-0');
      window.scrollTo(0, nav.offset().top);
      return false;
    });
  }
});
  </script>
  </body>
</html>