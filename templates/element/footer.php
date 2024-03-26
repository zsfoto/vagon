  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-contact">
            <h3><?= $about->name ?></h3>
            <p>
			  <?= $about->address ?><br>
              <strong>Phone:</strong> <?= $about->phone ?><br>
              <strong>Email:</strong> <?= $about->email ?><br>
            </p>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <h4><?= __('Useful Links') ?></h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="/"><?= __('Home') ?></a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/about-us"><?= __('About us') ?></a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/services"><?= __('Services') ?></a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/contact"><?= __('Contacts') ?></a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/terms-of-service"><?= __('Terms of service') ?></a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/privacy-policy"><?= __('Privacy policy') ?></a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <h4><?= $about->our_services_title ?></h4>
            <ul>
<?php foreach($services as $service) {?>
              <li><i class="bx bx-chevron-right"></i> <a href="#"><?= $service->name ?></a></li>
<?php } ?>
            </ul>
          </div>

<?php /*
          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
*/ ?>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span><?= $about->name ?></span></strong>. All Rights Reserved
        </div>
<?php /*
        <div class="credits">
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
*/ ?>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
<?php if($about->twitter_url != '') {?>
		<a href="<?= $about->twitter_url ?>" target="_blank" class="twitter"><i class="bx bxl-twitter"></i></a>
<?php } ?>
<?php if($about->facebook_url != '') {?>
		<a href="<?= $about->facebook_url ?>" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
<?php } ?>
<?php if($about->instagram_url != '') {?>
		<a href="<?= $about->instagram_url ?>" target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>
<?php } ?>
<?php if($about->linkedin_url != '') {?>
		<a href="<?= $about->linkedin_url ?>" target="_blank" class="linkedin"><i class="bx bxl-linkedin"></i></a>
<?php } ?>
      </div>
    </div>
  </footer><!-- End Footer -->
