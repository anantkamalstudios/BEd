<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<div class="page-inner">
    <h1 class="mb-4">Required Documents</h1>

    <?php if (session()->getFlashdata('success')) : ?>
        <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
    <?php endif; ?>

    <form action="<?= base_url('save_hero_req_doc') ?>" method="post" enctype="multipart/form-data">

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
        <h2 class="page-title">Required Documents</h2>
        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addDocumentModal">Add New</button>
    </div>
   
    <!-- DOCUMENTS TABLE -->
<table class="table table-bordered">
    <thead class="table-primary">
        <tr>
            <th>#</th>
            <th>Document Name</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = 1; foreach ($documents as $doc): ?>
        <tr>
            <td><?= $i++ ?></td>
            <td><?= esc($doc['name']) ?></td>
            <td class="d-flex gap-2">
                <!-- Delete -->
                <a href="<?= base_url('delete_document/' . $doc['id']) ?>" 
                   class="btn btn-sm btn-danger" 
                   onclick="return confirm('Are you sure you want to delete this document?')">
                   <i class="fas fa-trash-alt"></i>
                </a>
                <!-- Edit -->
                <a href="<?= base_url('admin/required-documents?edit_id=' . $doc['id']) ?>" 
                   class="btn btn-sm btn-primary">
                   <i class="fas fa-edit"></i>
                </a>
            </td>
        </tr>

        <!-- Show Inline Edit Form -->
        <?php if (isset($editDoc) && $editDoc['id'] == $doc['id']): ?>
        <tr>
            <td colspan="3">
                <div class="card border border-primary shadow-sm">
                    <div class="card-body">
                        <h5 class="mb-3">Edit Document</h5>
                        <form action="<?= base_url('update_document') ?>" method="post">
                            <?= csrf_field() ?>
                            <input type="hidden" name="id" value="<?= esc($editDoc['id']) ?>">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label>Document Name</label>
                                    <input type="text" name="name" class="form-control" required value="<?= esc($editDoc['name']) ?>">
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-success">Update</button>
                                    <a href="<?= base_url('admin/required-documents') ?>" class="btn btn-secondary">Cancel</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </td>
        </tr>
        <?php endif; ?>
        <?php endforeach; ?>
    </tbody>
</table>


<!-- Insert Modal (Static, appears outside table) -->
<div class="modal fade" id="addDocumentModal" tabindex="-1" aria-labelledby="addDocumentModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form action="<?= base_url('save_document') ?>" method="post" enctype="multipart/form-data">
      <?= csrf_field() ?>
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Add New Document</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label>Document Name</label>
            <input type="text" name="name" class="form-control" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Save</button>
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
