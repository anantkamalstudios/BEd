<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<div class="page-inner">

    <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="page-title">About Us</h2>
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
            <th>Overview</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($about_records as $index => $row): ?>
            <tr>
                <td><?= $index + 1 ?></td>
                <td><?= esc($row['title']) ?></td>
                 <td><?= substr(strip_tags($row['overview']), 0, 30) . '...' ?></td>
                <td>
                    <?php if (!empty($row['image'])): ?>
                        <img src="<?= base_url('front_end/assets/img/' . $row['image']) ?>" width="100">
                    <?php endif; ?>
                </td>
                <td>
                    <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#editModal<?= $row['id'] ?>">
                        <i class="fas fa-edit"></i>
                    </button>
                    <a href="<?= base_url('delete_about/' . $row['id']) ?>" 
                       class="btn btn-sm btn-danger" 
                       onclick="return confirm('Are you sure you want to delete this?')">
                        <i class="fas fa-trash-alt"></i>
                    </a>
                </td>
            </tr>

            <!-- Edit Modal -->
            <div class="modal fade" id="editModal<?= $row['id'] ?>" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <form action="<?= base_url('edit_about/' . $row['id']) ?>" method="post" enctype="multipart/form-data">
                        <?= csrf_field() ?>
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Edit About Us Section</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body row">
                                <div class="form-group col-md-6 mb-3">
                                    <label>Title</label>
                                    <input type="text" name="title" class="form-control" value="<?= esc($row['title']) ?>" required>
                                </div>
                                <div class="form-group col-12 mb-3">
                                    <label>Overview</label>
                                    <textarea name="overview" class="form-control summernote"><?= esc($row['overview']) ?></textarea>
                                </div>
                                <div class="form-group col-12 mb-3">
                                    <label>Image</label>
                                    <input type="file" name="image" class="form-control">
                                    <?php if (!empty($row['image'])): ?>
                                        <img src="<?= base_url('front_end/assets/img/' . $row['image']) ?>" width="100" class="mt-2">
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
    </tbody>
</table>


    <!-- Modal -->
    <div class="modal fade" id="heroModal" tabindex="-1" aria-labelledby="heroModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <form action="<?= base_url('save_about') ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field() ?>
                <input type="hidden" name="id" id="hero_id">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="heroModalLabel">Add/Edit About Us Section</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body row">
                        <div class="form-group col-md-6 mb-3">
                            <label>Title</label>
                            <input type="text" name="title" id="title" class="form-control" required>
                        </div>
                         <div class="mb-3">
                            <label>Overview</label>
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


</div>
<?= $this->endsection() ?>

<?= $this->section('custom_script') ?>

<?= $this->endsection() ?>