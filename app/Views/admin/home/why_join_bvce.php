<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<div class="page-inner">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="page-title">Why Join BVCE (B.Ed)</h2>
        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#heroModal">Add New</button>
    </div>
    <?php if (session()->getFlashdata('errors')) : ?>
        <div class="alert alert-danger">
            <ul>
                <?php foreach (session()->getFlashdata('errors') as $error) : ?>
                    <li><?= esc($error) ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <?php if (session()->getFlashdata('success')) : ?>
        <div class="alert alert-success">
            <?= session()->getFlashdata('success') ?>
        </div>
    <?php endif; ?>
   <table class="table table-bordered">
    <thead>
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Heading</th>
            <th>Description</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php if (!empty($content_records)): ?>
            <?php foreach ($content_records as $index => $row): ?>
                <tr>
                    <td><?= $index + 1 ?></td>
                    <td><?= esc($row['title']) ?></td>
                    <td><?= esc($row['heading']) ?></td>
                    <td><?= substr(strip_tags($row['overview']), 0, 30) . '...' ?></td>
                    <td>
                        <?php if (!empty($row['image'])): ?>
                            <img src="<?= base_url('front_end/assets/img/' . $row['image']) ?>" width="100">
                        <?php endif; ?>
                    </td>
                    <td>
                        <!-- Edit -->
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#editModal<?= $row['id'] ?>">
                            <i class="fas fa-edit"></i>
                        </button>

                        <!-- Delete -->
                        <a href="<?= base_url('delete_join/' . $row['id']) ?>" 
                           class="btn btn-sm btn-danger" 
                           onclick="return confirm('Are you sure to delete this?')">
                            <i class="fas fa-trash-alt"></i>
                        </a>
                    </td>
                </tr>

                <!-- Optional: Edit Modal -->
                <div class="modal fade" id="editModal<?= $row['id'] ?>" tabindex="-1">
                    <div class="modal-dialog modal-lg">
                        <form action="<?= base_url('edit_join/' . $row['id']) ?>" method="post" enctype="multipart/form-data">
                            <?= csrf_field() ?>
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Edit Content</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <div class="modal-body row">
                                    <div class="form-group col-md-6 mb-3">
                                        <label>Title</label>
                                        <input type="text" name="title" value="<?= esc($row['title']) ?>" class="form-control" required>
                                    </div>
                                    <div class="form-group col-md-6 mb-3">
                                        <label>Heading</label>
                                        <input type="text" name="heading" value="<?= esc($row['heading']) ?>" class="form-control" required>
                                    </div>
                                    <div class="form-group col-12 mb-3">
                                        <label>Description</label>
                                        <textarea name="overview" class="form-control summernote"><?= esc($row['overview']) ?></textarea>
                                    </div>
                                    <div class="form-group col-12 mb-3">
                                        <label>Image</label>
                                        <input type="file" name="image" class="form-control">
                                        <?php if (!empty($row['image'])): ?>
                                            <img src="<?= base_url('front_end/assets/img/' . $row['image']) ?>" width="80" class="mt-2">
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
            <tr><td colspan="6" class="text-center">No records found.</td></tr>
        <?php endif; ?>
    </tbody>
</table>


    <!-- Modal -->
    <div class="modal fade" id="heroModal" tabindex="-1" aria-labelledby="heroModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <form action="<?= base_url('save_join') ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field() ?>
                <input type="hidden" name="id" id="hero_id">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="heroModalLabel">Add/Edit Why Join BVCE (B.Ed) Section</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body row">
                        <div class="form-group col-md-6 mb-3">
                            <label>Title</label>
                            <input type="text" name="title" id="title" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6 mb-3">
                            <label>Heading</label>
                            <input type="text" name="heading" id="heading" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label>Disription</label>
                            <textarea name="overview" class="form-control summernote"><?= esc($admission['overview'] ?? '') ?></textarea>
                        </div>
                        <div class="form-group col-12 mb-3">
                            <label>Image</label>
                            <input type="file" name="image" id="image" class="form-control" required>
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

    <!-- image -->
         <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="page-title">Why Join BVCE (B.Ed) Image</h2>
        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#imageheroModal">Add New</button>
    </div>
   <table class="table table-bordered">
    <thead>
        <tr>
            <th>#</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php if (!empty($image_records)): ?>
            <?php foreach ($image_records as $index => $row): ?>
                <tr>
                    <td><?= $index + 1 ?></td>
                    <td>
                        <?php if (!empty($row['image'])): ?>
                            <img src="<?= base_url('front_end/assets/img/' . $row['image']) ?>" width="120">
                        <?php endif; ?>
                    </td>
                    <td>
                        <!-- Edit (optional if needed) -->
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#editImageModal<?= $row['id'] ?>">
                            <i class="fas fa-edit"></i>
                        </button>

                        <!-- Delete -->
                        <a href="<?= base_url('delete_join/' . $row['id']) ?>" 
                           class="btn btn-sm btn-danger" 
                           onclick="return confirm('Are you sure to delete this image?')">
                            <i class="fas fa-trash-alt"></i>
                        </a>
                    </td>
                </tr>

                <!-- Edit Modal -->
                <div class="modal fade" id="editImageModal<?= $row['id'] ?>" tabindex="-1">
                    <div class="modal-dialog modal-lg">
                        <form action="<?= base_url('edit_join/' . $row['id']) ?>" method="post" enctype="multipart/form-data">
                            <?= csrf_field() ?>
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Edit Image</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <div class="modal-body row">
                                    <div class="form-group col-12 mb-3">
                                        <label>Image</label>
                                        <input type="file" name="image" class="form-control">
                                        <?php if (!empty($row['image'])): ?>
                                            <img src="<?= base_url('front_end/assets/img/' . $row['image']) ?>" width="80" class="mt-2">
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
            <tr><td colspan="3" class="text-center">No image records found.</td></tr>
        <?php endif; ?>
    </tbody>
</table>


    <!-- Modal -->
    <div class="modal fade" id="imageheroModal" tabindex="-1" aria-labelledby="imageheroModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <form action="<?= base_url('save_join_pdf') ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field() ?>
                <input type="hidden" name="id" id="hero_id">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="imageheroModalLabel">Add/Edit Image Section</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body row">
                        <div class="form-group col-12 mb-3">
                            <label>Image</label>
                            <input type="file" name="image" id="image" class="form-control" required>
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
<?= $this->endsection() ?>

<?= $this->section('custom_script') ?>

<?= $this->endsection() ?>