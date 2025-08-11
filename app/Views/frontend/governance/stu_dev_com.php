 <?= $this->extend('layout/frontend') ?>
<?= $this->section('content') ?> 


  <!-- Hero Banner -->
     <section class="hero-banner" data-aos="fade-up"style="position:relative; margin-top: 48px;">
        <img src="<?= base_url('public/uploads/' . ($hero['image'] ?? 'default.jpg')) ?>" alt="Brahma Valley Campus">
        <div class="hero-overlay"style=" margin-top: 48px;">
            <div>
                <h3 class="text-light"><?= esc($hero['title'] ?? 'Welcome to Brahma Valley B Ed College') ?></h3>
            </div>
        </div>
    </section>

    <section class="l-section py-5">
        <div class="container">

            <!-- Page Header -->
            <div class="text-center mb-5">
                <h2>College Development Committee</h2>
                <p class="text-muted">
                    College Development Committee was established in the college as per UGC guidelines.
                </p>
            </div>

            <!-- Committee Table -->
            <div class="table-responsive mb-5">
                <table class="table table-bordered table-hover text-center">
                    <thead class="thead-dark">
                        <tr>
                            <th>Sr. No.</th>
                            <th>Name of the Member</th>
                            <th>Designation</th>
                        </tr>
                    </thead>
                   <tbody>
                        <?php if (!empty($members)): ?>
                            <?php $i = 1; foreach ($members as $row): ?>
                                <tr>
                                    <td><?= $i++ ?></td>
                                    <td><?= nl2br(esc($row['name'])) ?></td>
                                    <td><?= nl2br(esc($row['designation'])) ?></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="3" class="text-center">No members found.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>

                </table>
            </div>

            <!-- Download Link (Optional) -->
            <div class="text-center">
                <a href="/path-to/Student-Development-Committee.pdf" target="_blank" class="btn btn-primary">
                    Download Student Development Committee PDF
                </a>
            </div>

        </div>
    </section>
    <?= $this->endsection() ?>

<?= $this->section('custom_script') ?>

<?= $this->endsection() ?>