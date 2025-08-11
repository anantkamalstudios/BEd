<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<div class="page-inner">
   <h1 class="mb-4">Hero Section</h1>
<?php if (session()->getFlashdata('success')) : ?>
        <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
    <?php endif; ?>
<form action="<?= base_url('save_con_Hero') ?>" method="post" enctype="multipart/form-data">
    <div class="card mb-4">
        <div class="card-header fw-bold">Hero Section</div>
        <div class="card-body">
            <div class="mb-3">
                <label>Title</label>
                <input type="text" name="hero_title" class="form-control" value="<?= esc($hero['title'] ?? '') ?>" required>
            </div>
            <div class="mb-3">
                <label>Subtitle</label>
                <input type="text" name="hero_subtitle" class="form-control" value="<?= esc($hero['subtitle'] ?? '') ?>">
            </div>
            <div class="mb-3">
                <label>Background Image</label>
                <input type="file" name="hero_image" class="form-control">
                <?php if (!empty($hero['image'])): ?>
                    <div class="mt-2">
                        <img src="<?= base_url('public/uploads/' . $hero['image']) ?>" alt="Hero Image" style="max-height: 100px;">
                    </div>
                <?php endif; ?>
            </div>
            <button type="submit" class="btn btn-primary">Save Page</button>
        </div>
    </div>
</form>

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="page-title">Contact Us Section</h2>
        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addheroModal">Add New</button>
    </div>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>#</th>
            <th>Map</th>
            <th>Address</th>
            <th>Mobile No</th>
            <th>Email-Id</th>
            <th>Action</th>
        </tr>
    </thead>
   <tbody>
<?php if (!empty($contact)): ?>
    <?php $i = 1; foreach ($contact as $row): ?>
        <tr>
            <td><?= $i++ ?></td>
            <td><?= esc($row['map']) ?></td>
            <td><?= esc($row['address']) ?></td>
            <td><?= esc($row['mobile']) ?></td>
            <td><?= esc($row['email']) ?></td>
            <td>
                <!-- Edit Button -->
                <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#editModal<?= $row['id'] ?>">
                    <i class="fas fa-edit"></i>
                </button>

                <!-- Delete Button -->
                <a href="<?= base_url('contact/delete/' . $row['id']) ?>"
                   class="btn btn-sm btn-danger"
                   onclick="return confirm('Are you sure you want to delete this?')">
                   <i class="fas fa-trash-alt"></i>
                </a>

                <!-- Edit Modal -->
                <div class="modal fade" id="editModal<?= $row['id'] ?>" tabindex="-1" aria-labelledby="editModalLabel<?= $row['id'] ?>" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <form action="<?= base_url('contact/update/' . $row['id']) ?>" method="post">
                            <?= csrf_field() ?>
                            <input type="hidden" name="id" value="<?= $row['id'] ?>">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editModalLabel<?= $row['id'] ?>">Edit Contact</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>

                                <div class="modal-body row">
                                    <div class="form-group col-md-6 mb-3">
                                        <label>Map</label>
                                        <input type="text" name="map" value="<?= esc($row['map']) ?>" class="form-control" required>
                                    </div>
                                    <div class="form-group col-md-6 mb-3">
                                        <label>Address</label>
                                        <input type="text" name="address" value="<?= esc($row['address']) ?>" class="form-control" required>
                                    </div>
                                    <div class="form-group col-md-6 mb-3">
                                        <label>Mobile</label>
                                        <input type="text" name="mobile" value="<?= esc($row['mobile']) ?>" class="form-control" required>
                                    </div>
                                    <div class="form-group col-md-6 mb-3">
                                        <label>Email</label>
                                        <input type="email" name="email" value="<?= esc($row['email']) ?>" class="form-control" required>
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
            </td>
        </tr>
    <?php endforeach; ?>
<?php else: ?>
    <tr><td colspan="6" class="text-center">No records found</td></tr>
<?php endif; ?>
</tbody>

</table>
    <!-- Modal -->
<div class="modal fade" id="addheroModal" tabindex="-1" aria-labelledby="addheroModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form action="<?= base_url('saveContact') ?>" method="post" enctype="multipart/form-data">
    <?= csrf_field() ?>
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="addheroModalLabel">Add/Edit Contact Us Section</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body row">
            <div class="form-group col-md-6 mb-3">
                <label>Map</label>
                <input type="text" name="map" class="form-control" required>
            </div>
            <div class="form-group col-md-6 mb-3">
                <label>Address</label>
                <input type="text" name="address" class="form-control" required>
            </div>
            <div class="form-group col-md-6 mb-3">
                <label>Mobile No.</label>
                <input type="text" name="mobile" class="form-control" required>
            </div>
            <div class="form-group col-md-6 mb-3">
                <label>Email-Id</label>
                <input type="email" name="email" class="form-control" required>
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
