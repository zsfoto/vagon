
  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:<?= $about->email ?>"><?= $about->email ?></a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span><?= $about->phone ?></span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">	  
<?php if($about->twitter_url != '') {?>
        <a href="<?= $about->twitter_url ?>" target="_blank" class="twitter"><i class="bi bi-twitter"></i></a>
<?php } ?>
<?php if($about->facebook_url != '') {?>
        <a href="<?= $about->facebook_url ?>" target="_blank" class="facebook"><i class="bi bi-facebook"></i></a>
<?php } ?>
<?php if($about->instagram_url != '') {?>
        <a href="<?= $about->instagram_url ?>" target="_blank" class="instagram"><i class="bi bi-instagram"></i></a>
<?php } ?>
<?php if($about->linkedin_url != '') {?>
        <a href="<?= $about->linkedin_url ?>" target="_blank" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
<?php } ?>
      </div>
    </div>
  </section>
