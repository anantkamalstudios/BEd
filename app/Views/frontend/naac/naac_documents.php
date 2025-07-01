
 <?= $this->extend('layout/frontend') ?>
<?= $this->section('content') ?> 



    <!-- Hero Banner -->
    <?php if (!empty($hero)): ?>
<section class="hero-banner" data-aos="fade-up">
    <img src="<?= base_url('public/uploads/' . esc($hero['image'])) ?>" alt="<?= esc($hero['title']) ?>" class="img-fluid w-100">
    <div class="hero-overlay">
        <div>
            <h1 class="text-light"><?= esc($hero['title']) ?></h1>
            <?php if (!empty($hero['subtitle'])): ?>
                <a href="admission-form.html" class="btn btn-primary"><?= esc($hero['subtitle']) ?></a>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php endif; ?>


    <section class="l-section py-5">
        <div class="container py-5">
            <h1 class="text-center mb-4">Criteria Links Table</h1>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped text-center align-middle">
                            <thead class="table-primary">
                                <tr>
                                    <th>Criteria 1</th>
                                    <th>Criteria 2</th>
                                    <th>Criteria 3</th>
                                    <th>Criteria 4</th>
                                    <th>Criteria 5</th>
                                    <th>Criteria 6</th>
                                    <th>Criteria 7</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="criteria-1-1-1.html">1.1.1</a></td>
                                    <td><a href="criteria-2-1.html">2.1</a></td>
                                    <td><a href="#">3.1</a></td>
                                    <td><a href="criteria-4-1.html">4.1</a></td>
                                    <td><a href="criteria-5-1.html">5.1</a></td>
                                    <td><a href="criteria-6-1.html">6.1</a></td>
                                    <td><a href="criteria-7-1.html" target="_blank"
                                            rel="noopener">7.1</a></td>
                                </tr>
                                <tr>
                                    <td><a href="criteria-1-1-2.html">1.1.2</a></td>
                                    <td><a href="criteria-2-2.html">2.2</a></td>
                                    <td><a href="criteria-3-2.html">3.2</a></td>
                                    <td><a href="criteria-4-2.html">42</a></td>
                                    <td><a href="criteria-5-2.html">5.2</a></td>
                                    <td><a href="wp-content/uploads/2023/07/6.2.pdf"
                                            target="_blank" rel="noopener">6.2</a></td>
                                    <td><a href="criteria-7-2.html" target="_blank"
                                            rel="noopener">7.2</a></td>
                                </tr>
                                <tr>
                                    <td><a href="criteria-1-1-3.html">1.1.3</a></td>
                                    <td><a href="criteria-2-3.html">2.3</a></td>
                                    <td><a href="criteria-3-3.html">3.3</a></td>
                                    <td><a href="criteria-4-3.html">4.3</a></td>
                                    <td><a href="criteria-5-3.html">5.3</a></td>
                                    <td><a href="wp-content/uploads/2023/07/6.3.pdf"
                                            target="_blank" rel="noopener">6.3</a></td>
                                    <td><a href="criteria-7-3.html" target="_blank"
                                            rel="noopener">7.3</a></td>
                                </tr>
                                <tr>
                                    <td><a href="criteria-1-2-1.html">1.2.1</a></td>
                                    <td><a href="criteria-2-4.html">2.4</a></td>
                                    <td><a href="criteria-3-4.html">3.4</a></td>
                                    <td><a href="criteria-4-4.html">4.4</a></td>
                                    <td><a href="criteria-5-4.html">5.4</a></td>
                                    <td><a href="wp-content/uploads/2023/07/6.3.1.pdf"
                                            target="_blank" rel="noopener">6.3.1</a></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><a href="criteria-1-2-2-1-2-3.html">1.2.2 &amp;
                                            1.2.3</a></td>
                                    <td><a href="criteria-2-5.html">2.5</a></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><a href="wp-content/uploads/2023/07/6.3.2.pdf"
                                            target="_blank" rel="noopener">6.3.2</a></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><a href="criteria-1-2-4.html">1.2.4</a></td>
                                    <td><a href="criteria-2-6.html">2.6</a></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><a href="wp-content/uploads/2023/07/6.3.4-FDP-certificate.pdf"
                                            target="_blank" rel="noopener">6.3.4</a></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><a href="criteria-1-2-5.html">1.2.5</a></td>
                                    <td><a href="criteria-2-7.html">2.7</a></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><a href="wp-content/uploads/2023/07/6.3.4-1.xlsx"
                                            target="_blank" rel="noopener">6.3.4.1</a></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><a href="criteria-1-3-1.html">1.3.1</a></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><a href="wp-content/uploads/2023/07/6.4.1.pdf"
                                            target="_blank" rel="noopener">6.4.1</a></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><a href="criteria-1-3-2.html">1.3.2</a></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><a href="wp-content/uploads/2023/07/6.5.1.pdf"
                                            target="_blank" rel="noopener">6.5.1</a></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><a href="criteria-1-3-3.html">1.3.3</a></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><a href="wp-content/uploads/2023/07/6.5.2.pdf"
                                            target="_blank" rel="noopener">6.5.2</a></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><a href="criteria-1-4-1.html">1.4.1</a></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><a href="wp-content/uploads/2023/07/6.5.3-1.xlsx"
                                            target="_blank" rel="noopener">6.5.3</a></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><a href="criteria-1-4-2.html">1.4.2</a></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><a href="wp-content/uploads/2023/07/6.5.3.1.pdf"
                                            target="_blank" rel="noopener">6.5.3.1</a></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><a href="wp-content/uploads/2023/07/AAA.pdf"
                                            target="_blank" rel="noopener">6.5.4</a></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </section>
     <?= $this->endsection() ?>

<?= $this->section('custom_script') ?>

<?= $this->endsection() ?>