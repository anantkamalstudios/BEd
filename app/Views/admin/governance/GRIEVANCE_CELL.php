<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<div class="page-inner">
    <h1 class="mb-4">SC/ST Grievance Cell</h1>

    <?php if (session()->getFlashdata('success')) : ?>
        <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
    <?php endif; ?>

    <form action="<?= base_url('save_hero_grievance_cell_desk') ?>" method="post" enctype="multipart/form-data">
    <?= csrf_field() ?>
    <div class="card mb-4">
        <div class="card-header fw-bold">Hero Section</div>
        <div class="card-body">
            <div class="mb-3">
                <label>Title</label>
                <input type="text" name="title" class="form-control" value="<?= esc($hero['title'] ?? '') ?>" required>
            </div>
            <div class="mb-3">
                <label>Button Name</label>
                <input type="text" name="subtitle" class="form-control" value="<?= esc($hero['subtitle'] ?? '') ?>">
            </div>
            <div class="mb-3">
                <label>Background Image</label>
                <input type="file" name="image" class="form-control">
                <?php if (!empty($hero['image'])): ?>
                    <img src="<?= base_url('public/uploads/' . $hero['image']) ?>" alt="Hero Image" class="img-thumbnail mt-2" width="200">
                <?php endif; ?>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Save Page</button>
</form>


    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="page-title">SC/ST Grievance Cell</h2>
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
                        <img src="<?= base_url('public/uploads/' . $row['image']) ?>" width="80" class="img-thumbnail">
                    <?php endif; ?>
                </td>
                <td>
                    <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#editModal<?= $row['id'] ?>">
                        <i class="fas fa-edit"></i>
                    </button>
                    <a href="<?= base_url('deletegrievancecellMember/' . $row['id']) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete?')">
                        <i class="fas fa-trash-alt"></i>
                    </a>
                </td>
            </tr>

            <!-- Edit Modal -->
            <div class="modal fade" id="editModal<?= $row['id'] ?>" tabindex="-1" aria-labelledby="editLabel<?= $row['id'] ?>" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <form action="<?= base_url('updategrievancecellMember/' . $row['id']) ?>" method="post" enctype="multipart/form-data">
                        <?= csrf_field() ?>
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Edit Member</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body row">
                                <div class="form-group col-12 mb-3">
                                    <label>Image</label>
                                    <input type="file" name="PDF" class="form-control">
                                    <?php if (!empty($row['image'])): ?>
                                        <img src="<?= base_url('public/uploads/' . $row['image']) ?>" width="100" class="mt-2">
                                    <?php endif; ?>
                                </div>
                                <div class="form-group col-12 mb-3">
                                    <label>Name</label>
                                    <input type="text" name="name" value="<?= esc($row['name']) ?>" class="form-control" required>
                                </div>
                                <div class="form-group col-12 mb-3">
                                    <label>Designation</label>
                                    <input type="text" name="designation" value="<?= esc($row['designation']) ?>" class="form-control" required>
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
            <td colspan="5" class="text-center">No members found.</td>
        </tr>
    <?php endif; ?>
</tbody>

       
    </table>

     
    <!-- Modal -->
    <div class="modal fade" id="heroModal" tabindex="-1" aria-labelledby="heroModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <form action="<?= base_url('savegrievancecellMember') ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field() ?>
                <input type="hidden" name="id" id="hero_id">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="heroModalLabel">Add/Edit Grievance Cell</h5>
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
        <h2 class="page-title">Divyang Cell</h2>
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
            <?php $i = 1; foreach ($pdfs as $row): ?>
                <tr>
                    <td><?= $i++ ?></td>
                    <td>
                        <?php if (!empty($row['pdf'])): ?>
                            <a href="<?= base_url('public/uploads/' . $row['pdf']) ?>" target="_blank"><?= esc($row['pdf']) ?></a>
                        <?php endif; ?>
                    </td>
                    <td>
                        <!-- Edit Button -->
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#editPdfModal<?= $row['id'] ?>">
                            <i class="fas fa-edit"></i>
                        </button>

                        <!-- Delete Button -->
                        <a href="<?= base_url('delete_pdf_grievance_cell_desk/' . $row['id']) ?>" class="btn btn-sm btn-danger"
                            onclick="return confirm('Are you sure you want to delete this PDF?')">
                            <i class="fas fa-trash-alt"></i>
                        </a>
                    </td>
                </tr>

                <!-- Edit PDF Modal -->
                <div class="modal fade" id="editPdfModal<?= $row['id'] ?>" tabindex="-1" aria-labelledby="editLabel<?= $row['id'] ?>" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <form action="<?= base_url('update_pdf_grievance_cell_desk/' . $row['id']) ?>" method="post" enctype="multipart/form-data">
                            <?= csrf_field() ?>
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editLabel<?= $row['id'] ?>">Edit PDF</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <div class="modal-body row">
                                    <div class="form-group col-12 mb-3">
                                        <label>Upload New PDF</label>
                                        <input type="file" name="PDF" class="form-control">
                                        <small class="text-muted">Leave blank to keep existing.</small>
                                        <?php if (!empty($row['pdf'])): ?>
                                            <p class="mt-2">Current: <a href="<?= base_url('public/uploads/' . $row['pdf']) ?>" target="_blank"><?= esc($row['pdf']) ?></a></p>
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
                <td colspan="3" class="text-center">No PDFs found.</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>


     
    <!-- Modal -->
    <div class="modal fade" id="rtiheroModal" tabindex="-1" aria-labelledby="rtiheroModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <form action="<?= base_url('savegrievancecellPdf') ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field() ?>
                <input type="hidden" name="id" id="hero_id">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="rtiheroModalLabel">Add/Edit Grievance Cell</h5>
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
