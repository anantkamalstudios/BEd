 <?= $this->extend('layout/frontend') ?>
<?= $this->section('content') ?> 

    <!-- Hero Banner -->
     <section class="hero-banner" data-aos="fade-up"style="position:relative; margin-top: 48px;">
    <img src="<?= base_url('public/uploads/' . ($hero['image'] ?? 'default.jpg')) ?>" alt="Brahma Valley Campus">
    <div class="hero-overlay"style=" margin-top:50px;">
        <div>
            <h3 class="text-light" style=""><?= esc($hero['title'] ?? 'Welcome to Brahma Valley B Ed College') ?></h3>
        </div>
    </div>
</section>

    <section class="l-section py-5">
        <div class="container">

            <!-- Page Header -->
            <div class="text-center mb-5">
                <h2>Equal Opportunity Cell</h2>
                <p class="text-muted">
                    An Equal Opportunity Cell is established in the college according to the promotion of equity in
                    higher education.
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
                            <?php $i = 1; ?>
                            <?php foreach ($members as $row): ?>
                                <tr>
                                    <td><?= $i++ ?></td>
                                    <td><?= esc($row['name']) ?></td>
                                    <td><?= esc($row['designation']) ?></td>
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
                <a href="/path-to/Equal-Opportunity-Cell.pdf" target="_blank" class="btn btn-primary">
                    Download Equal Opportunity Cell PDF
                </a>
            </div>

        </div>
    </section>
    <?= $this->endsection() ?>

<?= $this->section('custom_script') ?>

<?= $this->endsection() ?>