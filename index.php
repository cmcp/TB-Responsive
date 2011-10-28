<?php include('html/head.php'); ?>
    <header>
      <div class="header">
        <div class="logo"><a href="/"><img src="img/logo.png" alt="Brand Bank"/></a></div>
        <div class="home-link"><a href="/"><img src="img/home.png" alt="Home"/></a></div>
        <nav>
          <div class="nav">
            <?php include('html/nav-main.php'); ?>
            <?php include('html/keyline.php'); ?>
          </div>
        </nav>
        <?php include('html/csso.php'); ?>
      </div><!-- .header -->
    </header>
    <div id="content">
      <section>
        <div class="section wide-1 clearboth">
          <?php include('html/4-travel.php'); ?>
          <?php include('html/4-dental.php'); ?>
        </div>
      </section>
      <div class="split split-70">
        <?php include('html/all-products.php'); ?>
        <?php include('html/tasks.php'); ?>
      </div><!-- split -->
      <?php include('html/sidebar.php'); ?>
      <?php include('html/supplimental.php'); ?>
    </div><!-- #content -->

<?php include('html/footer.php'); ?>
<?php include('html/foot.php'); ?>
