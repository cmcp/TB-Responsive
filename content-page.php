<?php include('html/head.php'); ?>
  <div id="heading" class="ls-row">
    <header>
      <div class="header wrapper">
        <?php include('html/home.php') ?>
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
  </div><!-- #heading -->
  <div id="subheading" class="ls-row"></div>
  <div id="maincontent" class="ls-row">
    <div class="offset">
      <div id="content" class="wrapper">
        <div class="cols">
          <div class="main-col">
            <div class="split">
              <section>
                <div class="section">
                  <div class="type-3">
                    <?php section('hero'); ?>
                  </div>
                  <div class="columns">
                    <div class="split split-50 left type-4">
                      <?php section('4-left'); ?>
                    </div>
                    <div class="split split-50 right type-4">
                      <?php section('4-right'); ?>
                    </div>
                  </div>
                  <div class="type-3">
                    <?php section('hero2'); ?>
                  </div>
                </div>
              </section>
              <div class="fireplace">
              <div class="split split-70 type-2">
                <?php section('main'); ?>
              </div>
              <div class="split split-30 type-1">
                <?php section('supp'); ?>
              </div>
              </div><!-- .fireplace -->
            </div><!-- split -->
          </div>
          <div class="sec-col type-1">
              <?php section('nav2'); ?>
              <?php section('key'); ?>
          </div>
        </div><!-- .cols -->
        <?php include('html/metafaq-panel.php'); ?>
      </div><!-- #content -->
    </div><!-- .offset -->
    <nav>
      <div class="nav wrapper">
        <?php include('html/nav-main.php'); ?>
      </div>
    </nav>
    <div class="wrapper">
      <?php include('html/supplimental.php'); ?>
    </div>
  </div><!-- #maincontent -->
<?php include('html/footer.php'); ?>
<?php include('html/foot.php'); ?>