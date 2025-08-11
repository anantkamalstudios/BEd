<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<div class="page-inner">
    <h1 class="mb-4">Equal Opportunity Cell</h1>

    <?php if (session()->getFlashdata('success')) : ?>
        <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
    <?php endif; ?>

    <form action="<?= base_url('save_opp') ?>" method="post" enctype="multipart/form-data">

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
        <h2 class="page-title">Equal Opportunity Cell</h2>
        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#heroModal">Add New</button>
    </div>
    <!-- add faculty -->
       <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Designation</th>
                <th>Contact No.</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
<?php if (!empty($members)): ?>
    <?php foreach ($members as $index => $row): ?>
        <tr>
            <td><?= $index + 1 ?></td>
            <td><?= esc($row['name']) ?></td>
            <td><?= esc($row['designation']) ?></td>
            <td><?= esc($row['contact']) ?></td>
            <td>
                <?php if (!empty($row['image'])): ?>
                    <img src="<?= base_url('public/uploads/' . $row['image']) ?>" width="80" class="img-thumbnail">
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
                <a href="<?= base_url('delete_opp_member/' . $row['id']) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">
                    <i class="fas fa-trash-alt"></i>
                </a>
            </td>
        </tr>

        <!-- Edit Modal -->
        <div class="modal fade" id="editModal<?= $row['id'] ?>" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <form action="<?= base_url('update_opp_member/' . $row['id']) ?>" method="post" enctype="multipart/form-data">
                    <?= csrf_field() ?>
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Edit Member</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body row">
                            <div class="form-group col-12 mb-3">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control" value="<?= esc($row['name']) ?>" required>
                            </div>
                            <div class="form-group col-12 mb-3">
                                <label>Designation</label>
                                <input type="text" name="designation" class="form-control" value="<?= esc($row['designation']) ?>" required>
                            </div>
                            <div class="form-group col-12 mb-3">
                                <label>Contact No.</label>
                                <input type="text" name="contact" class="form-control" value="<?= esc($row['contact']) ?>" required>
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
        <td colspan="6" class="text-center">No members added yet.</td>
    </tr>
<?php endif; ?>
</tbody>

       
    </table>

     
    <!-- Modal -->
    <div class="modal fade" id="heroModal" tabindex="-1" aria-labelledby="heroModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <form action="<?= base_url('save_opp_cell') ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field() ?>
                <input type="hidden" name="id" id="hero_id">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="heroModalLabel">Add/Edit Equal Opportunity Cell Cell</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body row">
                        <div class="form-group col-12 mb-3">
                            <label>Image</label>
                            <input type="file" name="PDF" id="PDF" class="form-control" required>
                            <small class="text-muted">Leave blank to keep existing</small>
                        </div>
                        <div class="form-group col-12 mb-3">
                            <label>Name</label>
                            <input type="text" name="name" id="name" class="form-control" required>
                            <small class="text-muted">Leave blank to keep existing</small>
                        </div>
                         <div class="form-group col-12 mb-3">
                            <label>Contact No.</label>
                            <input type="text" name="contact" id="contact" class="form-control" required>
                            <small class="text-muted">Leave blank to keep existing</small>
                        </div>
                        <div class="form-group col-12 mb-3">
                            <label>Designation</label>
                            <input type="text" name="designation" id="designation" class="form-control" required>
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

    <!-- pdf -->
     <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="page-title">Equal Opportunity Cell</h2>
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
                        <?= $row['pdf'] ?>
                    </a>
                </td>
                <td>
                    <!-- Edit Button (Optional, if you want edit modal) -->
                    <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#editPdfModal<?= $row['id'] ?>">
                        <i class="fas fa-edit"></i>
                    </button>

                    <!-- Delete Button -->
                    <a href="<?= base_url('delete_opp_pdf/' . $row['id']) ?>" 
                       class="btn btn-sm btn-danger" 
                       onclick="return confirm('Are you sure you want to delete this PDF?')">
                        <i class="fas fa-trash-alt"></i>
                    </a>
                </td>
            </tr>

            <!-- Edit PDF Modal -->
            <div class="modal fade" id="editPdfModal<?= $row['id'] ?>" tabindex="-1">
                <div class="modal-dialog">
                    <form action="<?= base_url('update_opp_pdf/' . $row['id']) ?>" method="post" enctype="multipart/form-data">
                        <?= csrf_field() ?>
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Edit PDF</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body">
                                <label>Replace PDF</label>
                                <input type="file" name="pdf" class="form-control" required>
                                <p class="text-muted mt-2">Current: <?= $row['pdf'] ?></p>
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
            <td colspan="3" class="text-center">No PDFs found.</td>
        </tr>
    <?php endif; ?>
</tbody>

       
    </table>

     
    <!-- Modal -->
    <div class="modal fade" id="rtiheroModal" tabindex="-1" aria-labelledby="rtiheroModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <form action="<?= base_url('save_opp_pdf') ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field() ?>
                <input type="hidden" name="id" id="hero_id">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="rtiheroModalLabel">Add/Edit Equal Opportunity Cell</h5>
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
