<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<div class="page-inner">
    <h1 class="mb-4">Internal Quality Assurance Cell (IQAC)</h1>

    <?php if (session()->getFlashdata('success')) : ?>
        <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
    <?php endif; ?>

    <form action="<?= base_url('save_internal_quality') ?>" method="post" enctype="multipart/form-data">

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

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="page-title">Internal Quality Assurance Cell</h2>
        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#heroModal">Add New</button>
    </div>
    <!-- add faculty -->
      <table class="table table-bordered">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Designation</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
    </thead>
   <tbody>
    <?php if (!empty($members)): ?>
        <?php $i = 1; foreach ($members as $row): ?>
            <tr>
                <td><?= $i++ ?></td>
                <td><?= esc($row['name']) ?></td>
                <td><?= esc($row['designation']) ?></td>
                <td>
                    <?php if (!empty($row['image'])): ?>
                        <img src="<?= base_url('public/uploads/' . $row['image']) ?>" width="100" class="img-thumbnail">
                    <?php else: ?>
                        No Image
                    <?php endif; ?>
                </td>
                <td>
                    <!-- Edit Button -->
                    <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#editModal<?= $row['id'] ?>">
                        <i class="fas fa-edit"></i>
                    </button>

                    <!-- Delete Button -->
                    <a href="<?= base_url('delete_iqac_member/' . $row['id']) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this member?')">
                        <i class="fas fa-trash-alt"></i>
                    </a>
                </td>
            </tr>

            <!-- Edit Modal for this member -->
            <div class="modal fade" id="editModal<?= $row['id'] ?>" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <form action="<?= base_url('update_iqac_member/' . $row['id']) ?>" method="post" enctype="multipart/form-data">
                        <?= csrf_field() ?>
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Edit IQAC Member</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body row">
                                <div class="form-group col-md-6 mb-3">
                                    <label>Name</label>
                                    <input type="text" name="name" class="form-control" value="<?= esc($row['name']) ?>">
                                </div>
                                <div class="form-group col-md-6 mb-3">
                                    <label>Designation</label>
                                    <input type="text" name="designation" class="form-control" value="<?= esc($row['designation']) ?>">
                                </div>
                                <div class="form-group col-12 mb-3">
                                    <label>Image</label>
                                    <input type="file" name="image" class="form-control">
                                    <?php if (!empty($row['image'])): ?>
                                        <img src="<?= base_url('public/uploads/' . $row['image']) ?>" width="100" class="img-thumbnail mt-2">
                                    <?php endif; ?>
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
            <td colspan="5" class="text-center">No members added yet.</td>
        </tr>
    <?php endif; ?>
</tbody>



     
    <!-- Modal -->
    <div class="modal fade" id="heroModal" tabindex="-1" aria-labelledby="heroModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <form action="<?= base_url('add_cell') ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field() ?>
                <input type="hidden" name="id" id="hero_id">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="heroModalLabel">Add/Edit Internal Quality Assurance Cell</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body row">
                        <div class="form-group col-12 mb-3">
                            <label>Image</label>
                            <input type="file" name="PDF" id="PDF" class="form-control">
                            <small class="text-muted">Leave blank to keep existing</small>
                        </div>
                        <div class="form-group col-12 mb-3">
                            <label>Name</label>
                            <input type="text" name="name" id="name" class="form-control">
                            <small class="text-muted">Leave blank to keep existing</small>
                        </div>
                        <div class="form-group col-12 mb-3">
                            <label>Designation</label>
                            <input type="text" name="designation" id="designation" class="form-control" >
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
