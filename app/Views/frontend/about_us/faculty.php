 <?= $this->extend('layout/frontend') ?>
<?= $this->section('content') ?>
<style>
    .tpstyle-9 {
        background: #fff;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .tpstyle-9:hover {
        transform: translateY(-5px);
    }

    .tpstyle-9-image {
        position: relative;
        overflow: hidden;
    }

    .tpstyle-9-image img {
        width: 100%;
        height: 300px;
        object-fit: cover;
        border-bottom: 1px solid #eee;
    }

    .tpstyle-9-position {
        position: absolute;
        bottom: 0;
        width: 100%;
        background: rgba(0, 51, 102, 0.8);
        color: #fff;
        padding: 6px 0;
        text-align: center;
        font-weight: bold;
        font-size: 14px;
    }

    .tpstyle-9-content {
        padding: 15px;
    }

    .tpstyle-9-content h3 {
        font-size: 18px;
        font-weight: 600;
        margin-bottom: 6px;
        text-transform: uppercase;
        color: #003366;
    }

    .tpstyle-9-content p {
        font-size: 14px;
        color: #444;
        margin-bottom: 0;
    }

    .faculty-section .col-lg-3 {
        display: flex;
        margin-bottom: 30px;
    }
</style>


 <section class="hero-banner" data-aos="fade-up">
    <img src="<?= base_url('public/uploads/' . ($hero['image'] ?? 'default.jpg')) ?>" alt="Brahma Valley Campus">
    <div class="hero-overlay">
        <div>
            <h3 class="text-light" style="margin-bottom:180px;"><?= esc($hero['title'] ?? 'Welcome to Brahma Valley B Ed College') ?></h3>
        </div>
    </div>
</section>

    <main id="page-content" class="l-main py-5" itemprop="mainContentOfPage">
        <!-- Teaching Faculty Section -->
        <!-- Teaching Faculty Section -->
          <!-- Teaching Faculty Section -->
<section class="faculty-section">
    <div class="container">
        <h2 class="text-center mb-5" data-aos="fade-up">Teaching Faculty</h2>
        <div class="row">
            <?php $delay = 100; ?>
            <?php foreach ($teaching as $faculty): ?>
                <div class="col-lg-3 col-md-6 col-sm-12" data-aos="fade-up" data-aos-delay="<?= $delay ?>">
                    <figure class="tpstyle-9 w-100">
                        <div class="tpstyle-9-image">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal"
                               data-img="<?= base_url('public/uploads/' . esc($faculty['image'])) ?>">
                                <img src="<?= base_url('public/uploads/' . esc($faculty['image'])) ?>"
                                     class="img-fluid" alt="<?= esc($faculty['name']) ?>">
                            </a>
                            <div class="tpstyle-9-position">
                                <h5><?= esc($faculty['designation']) ?></h5>
                            </div>
                        </div>
                        <div class="tpstyle-9-content">
                            <figcaption>
                                <h3><a href="#"><?= esc($faculty['name']) ?></a></h3>
                                <p>QUALIFICATION: <?= esc($faculty['qualification']) ?></p>
                            </figcaption>
                        </div>
                    </figure>
                </div>
                <?php $delay += 100; ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Non-Teaching Faculty Section -->
<section class="faculty-section" style="background: #f8f9fa;">
    <div class="container">
        <h2 class="text-center mb-5" data-aos="fade-up">Non-Teaching Faculty</h2>
        <div class="row">
            <?php $delay = 100; ?>
            <?php foreach ($nonteaching as $faculty): ?>
                <div class="col-lg-3 col-md-6 col-sm-12" data-aos="fade-up" data-aos-delay="<?= $delay ?>">
                    <figure class="tpstyle-9 w-100">
                        <div class="tpstyle-9-image">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal"
                               data-img="<?= base_url('public/uploads/' . esc($faculty['image'])) ?>">
                                <img src="<?= base_url('public/uploads/' . esc($faculty['image'])) ?>"
                                     class="img-fluid" alt="<?= esc($faculty['name']) ?>">
                            </a>
                            <div class="tpstyle-9-position">
                                <h5><?= esc($faculty['designation']) ?></h5>
                            </div>
                        </div>
                        <div class="tpstyle-9-content">
                            <figcaption>
                                <h3><a href="#"><?= esc($faculty['name']) ?></a></h3>
                                <p>QUALIFICATION: <?= esc($faculty['qualification']) ?></p>
                            </figcaption>
                        </div>
                    </figure>
                </div>
                <?php $delay += 100; ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>



        <!-- Image Modal -->
        <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="imageModalLabel">Faculty Image</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center">
                        <img id="modalImage" src="" alt="Faculty Image" class="img-fluid" style="max-height: 70vh;">
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?= $this->endsection() ?>

<?= $this->section('custom_script') ?>

<?= $this->endsection() ?>