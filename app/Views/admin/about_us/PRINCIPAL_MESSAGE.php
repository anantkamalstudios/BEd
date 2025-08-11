<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<div class="page-inner">
    <h1 class="mb-4">Principal's Desk Page</h1>

    <?php if (session()->getFlashdata('success')) : ?>
        <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
    <?php endif; ?>

    <form action="<?= base_url('save_principal_desk') ?>" method="post" enctype="multipart/form-data">

        <!-- Hero Section -->
        <div class="card mb-4">
            <div class="card-header fw-bold">Hero Section</div>
            <div class="card-body">
                <div class="mb-3">
                    <label>Title</label>
                    <input type="text" name="hero_title" class="form-control" required value="<?= esc($hero['title'] ?? '') ?>">
                </div>
                <div class="mb-3">
                    <label>Button Name</label>
                    <input type="text" name="button_name" class="form-control" value="<?= esc($hero['subtitle'] ?? '') ?>">
                </div>
                <div class="mb-3">
                    <label>Background Image</label>
                    <input type="file" name="hero_image" class="form-control">
                    <?php if (!empty($hero['image'])): ?>
                        <img src="<?= base_url('public/uploads/' . $hero['image']) ?>" alt="Hero Image" class="img-thumbnail mt-2" width="200">
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <!-- Principal Desk Section -->
        <div class="card mb-4">
            <div class="card-header fw-bold">Principal's Message</div>
            <div class="card-body">

                <div class="mb-3">
                    <label>Title</label>
                    <input type="text" name="desk_title" class="form-control" required value="<?= esc($desk['title'] ?? '') ?>">
                </div>
                <div class="mb-3">
                    <label>Subtitle</label>
                    <input type="text" name="desk_subtitle" class="form-control" value="<?= esc($desk['subtitle'] ?? '') ?>">
                </div>
                <div class="mb-3">
                    <label>Overview</label>
                    <textarea name="overview" class="form-control summernote"><?= esc($desk['overview'] ?? '') ?></textarea>
                </div>

                <div class="form-group col-12 mb-3">
                    <label>Principal Desk Image</label>
                    <input type="file" name="image" id="image" class="form-control">
                    <?php if (!empty($desk['image'])): ?>
                        <img src="<?= base_url('public/uploads/' . $desk['image']) ?>" alt="Desk Image" class="img-thumbnail mt-2" width="200">
                    <?php endif; ?>
                </div>

                <div class="mb-3">
                    <label>Principal Desk Name</label>
                    <input type="text" name="principal_desk_name" class="form-control" required value="<?= esc($desk['name'] ?? '') ?>">
                </div>
                <div class="mb-3">
                    <label></label>
                    <input type="text" name="designation" class="form-control" value="<?= esc($desk['designation'] ?? '') ?>">
                </div>
                <div class="mb-3">
                    <label></label>
                    <input type="text" name="address" class="form-control" value="<?= esc($desk['address'] ?? '') ?>">
                </div>
                <div class="mb-3">
                    <label>Mobile No.</label>
                    <input type="text" name="mobile" class="form-control" value="<?= esc($desk['mobile'] ?? '') ?>">
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Save Page</button>
    </form>
</div>

<?= $this->endSection() ?>
<?= $this->section('custom_script') ?>
<!-- Add Summernote JS if needed -->
<?= $this->endSection() ?>
