<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<div class="page-inner">
    <h1 class="mb-4">NAAC DOCUMENTS</h1>

    <?php if (session()->getFlashdata('success')) : ?>
        <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
    <?php endif; ?>

    <form action="<?= base_url('save_hero_naac') ?>" method="post" enctype="multipart/form-data">

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
        <button type="submit" class="btn btn-primary">Save Page</button>
    </form>

      <!-- pdf -->
     <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="page-title">NAAC DOCUMENTS</h2>
        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#rtiheroModal">Add New</button>
    </div>
    <!-- add faculty -->
       <table class="table table-bordered">
    <thead>
        <tr>
            <th>#</th>
            <th>PDF</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php if (!empty($pdfs)): ?>
            <?php foreach ($pdfs as $index => $row): ?>
                <tr>
                    <td><?= $index + 1 ?></td>
                    <td>
                        <a href="<?= base_url('public/uploads/' . $row['pdf']) ?>" target="_blank">
                            <?= esc($row['pdf']) ?>
                        </a>
                    </td>
                    <td>
                        <a href="<?= base_url('edit_naac_pdf/' . $row['id']) ?>" class="btn btn-primary btn-sm">
                            <i class="bi bi-pencil-square"></i> Edit
                        </a>
                        <a href="<?= base_url('delete_naac_pdf/' . $row['id']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Delete this PDF?')">
                            <i class="bi bi-trash"></i> Delete
                        </a>
                        <!-- Modal -->
<div class="modal fade" id="rtiheroModal" tabindex="-1" aria-labelledby="rtiheroModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form action="<?= base_url('save_naac') ?>" method="post" enctype="multipart/form-data">
            <?= csrf_field() ?>
            <input type="hidden" name="id" value="<?= esc($editData['id'] ?? '') ?>">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="rtiheroModalLabel">
                        <?= isset($editData) ? 'Edit' : 'Add' ?> NAAC PDF
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body row">
                    <div class="form-group col-12 mb-3">
                        <label>PDF</label>
                        <input type="file" name="PDF" class="form-control">
                        <?php if (!empty($editData['pdf'])): ?>
                            <p class="mt-2">
                                Current File: <a href="<?= base_url('public/uploads/' . $editData['pdf']) ?>" target="_blank"><?= esc($editData['pdf']) ?></a>
                            </p>
                        <?php endif; ?>
                        <small class="text-muted">Upload new file only if you want to replace the existing one.</small>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save PDF</button>
                    <a href="<?= base_url('admin/naac-documents') ?>" class="btn btn-secondary">Cancel</a>
                </div>
            </div>
        </form>
    </div>
</div>

                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr><td colspan="3">No NAAC PDFs uploaded yet.</td></tr>
        <?php endif; ?>
    </tbody>
</table>


     
    <!-- Modal -->
    <div class="modal fade" id="rtiheroModal" tabindex="-1" aria-labelledby="rtiheroModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <form action="<?= base_url('save_naac') ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field() ?>
                <input type="hidden" name="id" id="hero_id">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="rtiheroModalLabel">Add/Edit NAAC DOCUMENTS</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body row">
                        <div class="form-group col-12 mb-3">
                            <label>PDF</label>
                            <input type="file" name="PDF" id="PDF" class="form-control" required>
                            <small class="text-muted">Leave blank to keep existing</small>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Save Section</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>

<?= $this->endSection() ?>
<?= $this->section('custom_script') ?>
<?php if (!empty($editData)): ?>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var editModal = new bootstrap.Modal(document.getElementById('rtiheroModal'));
        editModal.show();
    });
</script>
<?php endif; ?>

<!-- Add Summernote JS if needed -->
<?= $this->endSection() ?>
