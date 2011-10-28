<?php include('html/head.php'); ?>
    <header>
      <div class="header">
        <div class="logo"><a href="/"><img src="img/logo.png" alt="Brand Bank"/></a></div>
        <div class="home-link"><a href="/"><img src="img/home.png" alt="Home"/></a></div>
        <nav>
          <div class="nav">
            <?php include('html/keyline.php'); ?>
          </div>
        </nav>
        <div class="wide-0">
          <?php include('html/csso.php'); ?>
        </div>
      </div><!-- .header -->
    </header>
    <div id="content">
      <div class="sec-col">
        <div class="split">
          <?php include('html/dcrs/travel/left-nav.php'); ?>
          <?php include('html/dcrs/travel/1-existing-customer.php'); ?>
          <?php include('html/dcrs/travel/1-retrieve-quote.php'); ?>
          <?php include('html/dcrs/travel/1-call-for-quote.php'); ?>
        </div>
      </div>
      <div class="main-col">
        <section>
          <div class="section">
            <?php include('html/dcrs/travel/3-hero.php'); ?>
          </div>
        </section>
        <div class="fireplace">
          <div class="split split-70">
            <?php include('html/dcrs/travel/2-what-do-i-get.php'); ?>
          </div><!-- split -->
          <div class="split split-30">
            <?php include('html/dcrs/travel/1-elh.php'); ?>
          </div><!-- .fireplace -->
        </div>
      </div>
      <nav>
        <div class="nav">
          <?php include('html/nav-main.php'); ?>
        </div>
      </nav>
    </div><!-- #content -->

<?php include('html/footer.php'); ?>
<?php include('html/foot.php'); ?>