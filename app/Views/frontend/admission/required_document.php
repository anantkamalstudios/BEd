<?= $this->extend('layout/frontend') ?>
<?= $this->section('content') ?>

<style>
    .hero-banner {
        position: relative;
        height: 400px;
        overflow: hidden;
    }
    .hero-banner img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    .hero-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.5);
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        text-align: center;
    }
    .facility-img {
        height: 200px;
        object-fit: cover;
    }
</style>

<!-- Hero Banner -->
<section class="hero-banner">
    <?php if (!empty($hero['image'])): ?>
        <img src="<?= base_url('public/uploads/' . $hero['image']) ?>" alt="Hero Banner">
    <?php else: ?>
        <img src="<?= base_url('public/uploads/default.jpg') ?>" alt="Default Banner">
    <?php endif; ?>
    <div class="hero-overlay">
        <div>
            <h1 class="text-light"><?= esc($hero['title'] ?? 'Welcome to Brahma Valley B.Ed College') ?></h1>
            <?php if (!empty($hero['subtitle'])): ?>
                <a href="<?= base_url('#') ?>" class="btn btn-primary"><?= esc($hero['subtitle']) ?></a>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- Required Documents Table -->
<div class="container my-5">
    <h3 class="text-center mb-4 text-primary">📑 Required Documents</h3>
    <div class="table-responsive">
        <table class="table table-bordered table-hover shadow rounded">
            <thead class="table-dark text-center">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Document Name</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($documents)): ?>
                    <?php $i = 1; foreach ($documents as $doc): ?>
                        <tr>
                            <td><?= $i++ ?></td>
                            <td><?= esc($doc['name']) ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="2" class="text-center">No documents found.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<?= $this->endSection() ?>

<?= $this->section('custom_script') ?>
<!-- Add JS if needed -->
<?= $this->endSection() ?>
