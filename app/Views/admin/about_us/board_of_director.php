<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<div class="page-inner">
   <h1 class="mb-4">Board Of Director Section</h1>
<?php if (session()->getFlashdata('success')) : ?>
        <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
    <?php endif; ?>
<form action="<?= base_url('save_photo_board_of_member') ?>" method="post" enctype="multipart/form-data">
    <div class="card mb-4">
        <div class="card-header fw-bold">Hero Section</div>
        <div class="card-body">
            <div class="mb-3">
                <label>Title</label>
                <input type="text" name="title" class="form-control" value="<?= esc($hero['title'] ?? '') ?>" required>
            </div>
            <div class="mb-3">
                <label>Subtitle</label>
                <input type="text" name="subtitle" class="form-control" value="<?= esc($hero['subtitle'] ?? '') ?>">
            </div>
            <div class="mb-3">
                <label>Background Image</label>
                <input type="file" name="image" class="form-control">
                <?php if (!empty($hero['image'])): ?>
                    <div class="mt-2">
                        <img src="<?= base_url('uploads/board/' . $hero['image']) ?>" alt="Hero Image" style="max-height: 100px;">
                    </div>
                <?php endif; ?>
            </div>
            <button type="submit" class="btn btn-primary">Save Page</button>
        </div>
    </div>
</form>

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="page-title">Add Member</h2>
        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addheroModal">Add New</button>
    </div>

 <table class="table table-bordered table-striped">
    <thead class="table-primary text-center">
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Designation</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php if (!empty($members)) : ?>
            <?php $i = 1; foreach ($members as $member): ?>
                <tr>
                    <td><?= $i++ ?></td>
                    <td><?= esc($member['name']) ?></td>
                    <td><?= esc($member['designation']) ?></td>
                    <td>
                        <?php if (!empty($member['image'])): ?>
                            <img src="<?= base_url('uploads/board/' . $member['image']) ?>" width="60">
                        <?php else: ?>
                            <span>No Image</span>
                        <?php endif; ?>
                    </td>
                    <td>
                        <!-- Edit Button -->
                        <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#editModal<?= $member['id'] ?>">
                            <i class="fas fa-edit"></i>
                        </button>

                        <form action="<?= base_url('delete_board_member/' . $member['id']) ?>" method="post" style="display:inline-block;" onsubmit="return confirm('Are you sure you want to delete this member?');">
                            <?= csrf_field() ?>
                            <button type="submit" class="btn btn-sm btn-danger">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </form>

                        <!-- Edit Modal -->
                        <div class="modal fade" id="editModal<?= $member['id'] ?>" tabindex="-1" aria-labelledby="editModalLabel<?= $member['id'] ?>" aria-hidden="true">
                            <div class="modal-dialog">
                                <form action="<?= base_url('update_board_members/' . $member['id']) ?>" method="post" enctype="multipart/form-data">
                                    <?= csrf_field() ?>
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Edit Member</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label>Name</label>
                                                <input type="text" name="name" class="form-control" value="<?= esc($member['name']) ?>" required>
                                            </div>
                                            <div class="mb-3">
                                                <label>Designation</label>
                                                <input type="text" name="designation" class="form-control" value="<?= esc($member['designation']) ?>" required>
                                            </div>
                                            <div class="mb-3">
                                                <label>Image</label>
                                                <input type="file" name="image" class="form-control">
                                                <?php if (!empty($member['image'])): ?>
                                                    <img src="<?= base_url('uploads/board/' . $member['image']) ?>" width="60" class="mt-2">
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-success">Update</button>
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- End Modal -->
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr><td colspan="5" class="text-center">No members found</td></tr>
        <?php endif; ?>
    </tbody>
</table>


    <!-- Modal -->
    <div class="modal fade" id="addheroModal" tabindex="-1" aria-labelledby="addheroModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <form action="<?= base_url('insert_board_members') ?>" method="post" enctype="multipart/form-data">
        <?= csrf_field() ?>
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addheroModalLabel">Add Image</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
             <div class="modal-body row">
                <div class="form-group col-md-6 mb-3">
                    <label>Name</label>
                    <input type="name" name="name" class="form-control" required>
                </div>
            </div>
             <div class="modal-body row">
                <div class="form-group col-md-6 mb-3">
                    <label>Designation</label>
                    <input type="designation" name="designation" class="form-control" required>
                </div>
            </div>
            <div class="modal-body row">
                <div class="form-group col-md-6 mb-3">
                    <label>Image</label>
                    <input type="file" name="image" class="form-control" required>
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
