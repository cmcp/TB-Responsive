<?php include('html/head.php'); ?>
  <div id="heading" class="ls-row">
    <header>
      <div class="header wrapper">
        <?php include('html/home.php') ?>
        <nav>
          <div class="nav">
            <?php include('html/nav-main.php'); ?>
          </div>
        </nav>
        <?php include('html/csso.php'); ?>
      </div><!-- .header -->
    </header>
  </div><!-- #heading -->
  <div id="subheading" class="ls-row"></div>
  <div id="maincontent" class="ls-row">
    <div class="offset">
      <div class="offset-inner">
        <section>
          <div class="section wrapper full-col">
            <div class="type-3">
              <?php include('html/carousel.php'); ?>
            </div>
            <div class="columns">
              <div class="split split-50 left type-4">
                <?php include('html/4-travel.php'); ?>
              </div>
              <div class="split split-50 right type-4">
                <?php include('html/4-dental.php'); ?>
              </div>
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
