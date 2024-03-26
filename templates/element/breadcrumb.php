    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
		  <?php if(isset($title)) {?><h2><?= $title ?></h2><?php } ?>
          <ol>
            <li><a href="/"><?= __('Home') ?></a></li>
            <?php if(isset($title)) {?><li><?= $title ?></li><?php } ?>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->
