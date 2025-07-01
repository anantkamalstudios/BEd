<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<div class="page-inner">

    <?php if (session()->getFlashdata('success')) : ?>
        <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
    <?php endif; ?>

    
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="page-title">Best Practices</h2>
        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#heroModal">Add New</button>
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
        <?php if (!empty($best_practices)) : ?>
            <?php $i = 1; foreach ($best_practices as $row) : ?>
                <tr>
                    <td><?= $i++ ?></td>
                    <td>
                        <a href="<?= base_url('public/uploads/' . esc($row['file_name'])) ?>" target="_blank">
                            <?= esc($row['file_name']) ?>
                        </a>
                    </td>
                    <td>
                        <button class="btn btn-sm btn-primary"
                            data-bs-toggle="modal"
                            data-bs-target="#heroModal"
                            onclick="editBest(<?= $row['id'] ?>)"><i class="fas fa-edit"></i></button>

                        <a href="<?= base_url('delete_best/' . $row['id']) ?>" 
                           onclick="return confirm('Are you sure you want to delete this item?')"
                           class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else : ?>
            <tr><td colspan="3">No records found.</td></tr>
        <?php endif; ?>
    </tbody>
</table>


     
    <!-- Modal -->
    <div class="modal fade" id="heroModal" tabindex="-1" aria-labelledby="heroModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <form action="<?= base_url('save_best') ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field() ?>
                <input type="hidden" name="id" id="hero_id">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="heroModalLabel">Add/Edit Best Practices</h5>
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
<?= $this->endSection() ?>
