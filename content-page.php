<?php include('html/head.php'); ?>
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
    <div class="offset">
      <div id="content" class="wrapper">
        <div class="cols">
          <div class="main-col">
            <div class="split">
              <section>
                <div class="section">
                  <?php section('hero'); ?>
                </div>
              </section>
              <div class="fireplace">
              <div class="split split-70">
                <?php section('main'); ?>
              </div>
              <div class="split split-30">
                <?php section('supp'); ?>
              </div>
              </div><!-- .fireplace -->
            </div><!-- split -->
          </div>
          <div class="sec-col">
            <div class="split">
              <?php section('nav2'); ?>
              <?php section('key'); ?>
            </div>
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
<?php include('html/footer.php'); ?>
<?php include('html/foot.php'); ?>