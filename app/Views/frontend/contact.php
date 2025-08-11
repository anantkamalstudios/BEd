 <?= $this->extend('layout/frontend') ?>
<?= $this->section('content') ?> 

 <!--================Home Banner Area =================-->
 <section class="hero-banner" data-aos="fade-up">
    <img src="<?= base_url('public/uploads/' . ($hero['image'] ?? 'default.jpg')) ?>" alt="Brahma Valley Campus">
    <div class="hero-overlay">
        <div>
            <h1 class="text-light"><?= esc($hero['title'] ?? 'Welcome to Brahma Valley B Ed College') ?></h1>
        </div>
    </div>
    </section>
  <!--================End Home Banner Area =================-->

  <!--================Contact Area =================-->
  <section class="contact_area section_gap">
    <div class="container">
      <div class="d-flex justify-content-center">
        <div class="mapBox" style="width: 100%; max-width: 900px; height: 400px;">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3750.391736119273!2d73.57335127595073!3d19.950021323952065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bddf3443b96f067%3A0x34188a49959a588d!2sBrahma%20Valley%20College%20of%20Engineering%20and%20Research%20Institute!5e0!3m2!1sen!2sin!4v1748151488575!5m2!1sen!2sin"
            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
          </iframe>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3">
          <div class="contact_info">
            <?php if (!empty($contact)): ?>
              <?php foreach ($contact as $c): ?>
                <?php if (!empty($c['address'])): ?>
                  <div class="info_item">
                    <i class="ti-home"></i>
                    <h6 style="font-family: 'Poppins'"><?= esc($c['address']) ?></h6>
                    <p style="font-family: 'Poppins'"><?= esc($c['note'] ?? 'Maharashtra 422213') ?></p>
                  </div>
                <?php endif; ?>

                <?php if (!empty($c['mobile'])): ?>
                  <div class="info_item">
                    <i class="ti-headphone"></i>
                    <h6><a href="tel:<?= esc($c['mobile']) ?>" style="font-family: 'Poppins'"><?= esc($c['mobile']) ?></a></h6>
                    <p style="font-family: 'Poppins'">Mon to Fri 9am to 6 pm</p>
                  </div>
                <?php endif; ?>

                <?php if (!empty($c['email'])): ?>
                  <div class="info_item">
                    <i class="ti-email"></i>
                    <h6><a href="mailto:<?= esc($c['email']) ?>" style="font-family: 'Poppins'"><?= esc($c['email']) ?></a></h6>
                    <p style="font-family: 'Poppins'">Send us your query anytime!</p>
                  </div>
                <?php endif; ?>
              <?php endforeach; ?>
            <?php endif; ?>
          </div>

        </div>
        <div class="col-lg-9">
          <form class="row contact_form" action="contact_process.php" method="post" id="contactForm"
            novalidate="novalidate">
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name"
                  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" required="" />
              </div>
              <div class="form-group">
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email address"
                  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" required="" />
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter Subject"
                  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" required="" />
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <textarea class="form-control" name="message" id="message" rows="1" placeholder="Enter Message"
                  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" required=""></textarea>
              </div>
            </div>
            <div class="col-md-12 text-right">
              <button type="submit" value="submit" class="btn primary-btn">
                Send Message
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
    <?= $this->endsection() ?>

<?= $this->section('custom_script') ?>

<?= $this->endsection() ?>