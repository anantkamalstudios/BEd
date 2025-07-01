<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<div class="page-inner">
    <h1 class="mb-4">LIBRARY REFERENCE SECTION NEP 2020</h1>

    <?php if (session()->getFlashdata('success')) : ?>
        <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
    <?php endif; ?>

    <form action="<?= base_url('save_hero_library') ?>" method="post" enctype="multipart/form-data">

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
        <h2 class="page-title">LIBRARY REFERENCE SECTION NEP 2020</h2>
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
                        <a href="<?= base_url('public/uploads/' . $row['pdf']) ?>" target="_blank">View PDF</a>
                    </td>
                    <td>
                        <!-- Edit Button -->
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#editPDFModal<?= $row['id'] ?>">
                            <i class="fas fa-edit"></i> <!-- Bootstrap Icon -->
                        </button>

                        <!-- Delete Button -->
                        <form action="<?= base_url('delete_pdf/' . $row['id']) ?>" method="post" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this PDF?');">
                            <?= csrf_field() ?>
                            <button type="submit" class="btn btn-sm btn-danger">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </form>
                    </td>
                </tr>

                <!-- Edit Modal -->
                <div class="modal fade" id="editPDFModal<?= $row['id'] ?>" tabindex="-1" aria-labelledby="editPDFModalLabel<?= $row['id'] ?>" aria-hidden="true">
                    <div class="modal-dialog">
                        <form action="<?= base_url('update_library_pdf') ?>" method="post" enctype="multipart/form-data">
                            <?= csrf_field() ?>
                            <input type="hidden" name="id" value="<?= $row['id'] ?>">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Edit PDF</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label>Replace PDF</label>
                                        <input type="file" name="PDF" class="form-control">
                                        <small class="text-muted">Leave blank to keep existing</small>
                                    </div>
                                    <div class="mb-3">
                                        <a href="<?= base_url('public/uploads/' . $row['pdf']) ?>" target="_blank">Current PDF</a>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="3" class="text-center">No PDF records found.</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>



     
    <!-- Modal -->
    <div class="modal fade" id="rtiheroModal" tabindex="-1" aria-labelledby="rtiheroModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <form action="<?= base_url('save_library') ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field() ?>
                <input type="hidden" name="id" id="hero_id">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="rtiheroModalLabel">Add/EditLIBRARY REFERENCE SECTION NEP 2020</h5>
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
<!-- Add Summernote JS if needed -->
<?= $this->endSection() ?>
