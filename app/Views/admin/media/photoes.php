<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<div class="page-inner">
   <h1 class="mb-4">photo Section</h1>
<?php if (session()->getFlashdata('success')) : ?>
        <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
    <?php endif; ?>
<form action="<?= base_url('save_photo_Hero') ?>" method="post" enctype="multipart/form-data">
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
        <h2 class="page-title">Add Photo</h2>
        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addheroModal">Add New</button>
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
        <?php foreach ($images as $key => $img): ?>
            <tr>
                <td><?= $key + 1 ?></td>
                <td>
                    <img src="<?= base_url('public/uploads/' . $img['image']) ?>" height="60">
                </td>
                <td>
                    <a href="<?= base_url('delete_photo/' . $img['id']) ?>" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm">
                        <i class="fas fa-trash-alt"></i>
                    </a>
                    <!-- Edit Button triggers the modal -->
                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editModal<?= $img['id'] ?>">
                        <i class="fas fa-edit"></i>
                    </button>
                </td>
            </tr>

            <!-- Modal HTML (dynamically generated per row) -->
            <div class="modal fade" id="editModal<?= $img['id'] ?>" tabindex="-1" aria-labelledby="editModalLabel<?= $img['id'] ?>" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <form action="<?= base_url('update_photo/' . $img['id']) ?>" method="post" enctype="multipart/form-data">
                    <div class="modal-header">
                      <h5 class="modal-title" id="editModalLabel<?= $img['id'] ?>">Edit Image</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label>Change Image</label>
                            <input type="file" name="image" class="form-control">
                            <?php if (!empty($img['image'])): ?>
                                <img src="<?= base_url('public/uploads/' . $img['image']) ?>" class="img-thumbnail mt-2" width="150">
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-success">Update</button>
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
        <?php endforeach; ?>
    </tbody>
</table>

    <!-- Modal -->
    <div class="modal fade" id="addheroModal" tabindex="-1" aria-labelledby="addheroModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <form action="<?= base_url('save_image') ?>" method="post" enctype="multipart/form-data">
        <?= csrf_field() ?>
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addheroModalLabel">Add Image</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
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
