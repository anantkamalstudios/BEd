<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<div class="page-inner">
    <h1 class="mb-4">Approvals & Afflication</h1>
    <?php if (session()->getFlashdata('success')) : ?>
        <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
    <?php endif; ?>

   <form action="<?= base_url('add_approvals_affliation') ?>" method="post" enctype="multipart/form-data">
        <!-- Hero Section -->
        <div class="card mb-4">
            <div class="card-header fw-bold">Hero Section</div>
            <div class="card-body">
                <div class="mb-3">
                    <label>Title</label>
                    <input type="text" name="hero_title" class="form-control" value="<?= esc($hero['title'] ?? '') ?>">
                </div>
                <div class="mb-3">
                    <label>Button Name</label>
                    <input type="text" name="button_name" class="form-control" value="<?= esc($hero['subtitle'] ?? '') ?>">
                </div>
                <div class="mb-3">
                    <label>Background Image</label>
                    <input type="file" name="hero_image" class="form-control">
                    <?php if (!empty($hero['image'])): ?>
                        <img src="<?= base_url('public/uploads/' . $hero['image']) ?>" class="img-thumbnail mt-2" width="200">
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <!-- Vision & Mission -->
        <div class="card mb-4">
            <div class="card-header fw-bold">Approvals & Afflication</div>
            <div class="card-body">
                <div class="mb-3">
                    <label class="fw-bold">Approvals</label>
                    <textarea name="vision" class="form-control summernote"><?= esc($vision_mission['vision'] ?? '') ?></textarea>
                </div>
                <div class="mb-3">
                    <label class="fw-bold">Afflication</label>
                    <textarea name="mission" class="form-control summernote"><?= esc($vision_mission['mission'] ?? '') ?></textarea>
                </div>
                <!-- <div class="mb-3">
                    <label class="fw-bold">Our Belief</label>
                    <textarea name="belief" class="form-control summernote"><?= esc($vision_mission['belief'] ?? '') ?></textarea>
                </div> -->
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Save Page</button>
    </form>
</div>

<?= $this->endSection() ?>
<?= $this->section('custom_script') ?>
<!-- Include JS for summernote here if needed -->
<?= $this->endSection() ?>
