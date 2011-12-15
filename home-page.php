<?php include('html/head.php'); ?>
  <div id="heading" class="ls-row">
    <header>
      <div class="header wrapper">
        <?php include('html/home.php') ?>
        <nav>
          <div class="nav">
            <?php include('html/nav-main.php'); ?>
            <?php include('html/keyline.php'); ?>
          </div>
        </nav>
        <?php include('html/csso.php'); ?>
      </div><!-- .header -->
    </header>
  </div><!-- #heading -->
  <div id="subheading" class="ls-row"></div>
  <div id="maincontent" class="ls-row">
    <div class="offset wide-1">
      <div class="offset-inner">
        <section>
          <div class="section columns wrapper">
            <div class="split split-50">
              <?php include('html/4-travel.php'); ?>
            </div>
            <div class="split split-50">
              <?php include('html/4-dental.php'); ?>
            </div>
          </div>
        </section>
      </div>
    </div><!-- .offset -->
    <div class="wrapper">
      <div class="split split-70">
        <?php include('html/all-products.php'); ?>
        <?php include('html/tasks.php'); ?>
      </div><!-- split -->
      <?php include('html/sidebar.php'); ?>
      <?php include('html/supplimental.php'); ?>
    </div><!-- .wrapper -->

  </div><!-- #maincontent -->
<?php include('html/footer.php'); ?>
<?php include('html/foot.php'); ?>
