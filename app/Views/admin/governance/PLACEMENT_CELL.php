<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<div class="page-inner">
    <h1 class="mb-4">PLACEMENT CELL</h1>

    <?php if (session()->getFlashdata('success')) : ?>
        <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
    <?php endif; ?>

    <form action="<?= base_url('save_placement_hero') ?>" method="post" enctype="multipart/form-data">

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
        <h2 class="page-title">PLACEMENT CELL</h2>
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
                            <img src="<?= base_url('public/uploads/' . $row['image']) ?>" width="60" class="img-thumbnail">
                        <?php else: ?>
                            <span>No Image</span>
                        <?php endif; ?>
                    </td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#editMemberModal<?= $row['id'] ?>"><i class="fas fa-edit"></i></button>
                        <a href="<?= base_url('deleteplacementMember/' . $row['id']) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')"><i class="fas fa-trash-alt"></i></a>
                    </td>
                </tr>

                <!-- Edit Modal -->
                <div class="modal fade" id="editMemberModal<?= $row['id'] ?>" tabindex="-1" aria-labelledby="editLabel<?= $row['id'] ?>" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <form action="<?= base_url('updateplacementMember/' . $row['id']) ?>" method="post" enctype="multipart/form-data">
                            <?= csrf_field() ?>
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editLabel<?= $row['id'] ?>">Edit Member</h5>
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
        <form action="<?= base_url('save_placement_member') ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field() ?>
                <input type="hidden" name="id" id="hero_id">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="heroModalLabel">Add/Edit PLACEMENT CELL</h5>
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
        <h2 class="page-title">PLACEMENT CELL</h2>
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
            <?php $i = 1; foreach ($pdfs as $pdf): ?>
                <tr>
                    <td><?= $i++ ?></td>
                    <td>
                        <?php if (!empty($pdf['pdf'])): ?>
                            <a href="<?= base_url('public/uploads/' . $pdf['pdf']) ?>" target="_blank">View PDF</a>
                        <?php else: ?>
                            N/A
                        <?php endif; ?>
                    </td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#editPDFModal<?= $pdf['id'] ?>"><i class="fas fa-edit"></i></button>
                        <a href="<?= base_url('delete_placement_pdf/' . $pdf['id']) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')"><i class="fas fa-trash-alt"></i></a>
                    </td>
                </tr>

                <!-- Edit Modal -->
                <div class="modal fade" id="editPDFModal<?= $pdf['id'] ?>" tabindex="-1" aria-labelledby="editPDFModalLabel<?= $pdf['id'] ?>" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <form action="<?= base_url('update_placement_pdf/' . $pdf['id']) ?>" method="post" enctype="multipart/form-data">
                            <?= csrf_field() ?>
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editPDFModalLabel<?= $pdf['id'] ?>">Edit PDF</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <div class="modal-body row">
                                    <div class="form-group col-12 mb-3">
                                        <label>PDF File</label>
                                        <input type="file" name="PDF" class="form-control">
                                        <?php if (!empty($pdf['pdf'])): ?>
                                            <p class="mt-2">Current: <a href="<?= base_url('public/uploads/' . $pdf['pdf']) ?>" target="_blank"><?= $pdf['pdf'] ?></a></p>
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
                <td colspan="3" class="text-center">No PDF entries found.</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>


     
    <!-- Modal -->
    <div class="modal fade" id="rtiheroModal" tabindex="-1" aria-labelledby="rtiheroModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <form action="<?= base_url('placement_pdf_save') ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field() ?>
                <input type="hidden" name="id" id="hero_id">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="rtiheroModalLabel">Add/Edit PLACEMENT CELL</h5>
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
