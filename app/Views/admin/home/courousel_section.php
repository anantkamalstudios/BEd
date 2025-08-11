<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<div class="page-inner">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="page-title">Hero Section</h2>
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
            <th>Subtitle</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($hero_sections as $index => $row): ?>
            <tr>
                <td><?= $index + 1 ?></td>
                <td><?= esc($row['title']) ?></td>
                <td><?= esc($row['subtitle']) ?></td>
                <td>
                    <?php if (!empty($row['banner_image'])): ?>
                        <img src="<?= base_url('front_end/assets/img/' . $row['banner_image']) ?>" width="100">
                    <?php endif; ?>
                </td>
                <td>
                    <!-- Edit Button -->
                    <button class="btn btn-sm btn-warning"
                        data-bs-toggle="modal"
                        data-bs-target="#editHeroModal<?= $row['id'] ?>">
                        <i class="fas fa-edit"></i>
                    </button>

                    <!-- Delete Button -->
                    <a href="<?= base_url('delete_hero/' . $row['id']) ?>" 
                       class="btn btn-sm btn-danger"
                       onclick="return confirm('Are you sure to delete this?')">
                        <i class="fas fa-trash-alt"></i>
                    </a>
                </td>
            </tr>

            <!-- Modal for Each Record -->
            <div class="modal fade" id="editHeroModal<?= $row['id'] ?>" tabindex="-1" aria-labelledby="editHeroModalLabel<?= $row['id'] ?>" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <form action="<?= base_url('updateHeroSection/' . $row['id']) ?>" method="post" enctype="multipart/form-data">
                        <?= csrf_field() ?>
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Edit Hero Section</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>

                            <div class="modal-body row">
                                <div class="form-group col-md-6 mb-3">
                                    <label>Title</label>
                                    <input type="text" name="title" class="form-control" value="<?= esc($row['title']) ?>">
                                </div>
                                <div class="form-group col-md-6 mb-3">
                                    <label>Subtitle</label>
                                    <input type="text" name="subtitle" class="form-control" value="<?= esc($row['subtitle']) ?>">
                                </div>
                                <div class="form-group col-12 mb-3">
                                    <label>Banner Image (1920x800px)</label>
                                    <input type="file" name="banner_image" class="form-control">
                                    <small class="text-muted">Leave blank to keep existing image.</small><br>
                                    <?php if (!empty($row['banner_image'])): ?>
                                        <img src="<?= base_url('front_end/assets/img/' . $row['banner_image']) ?>" 
                                            alt="Current Banner" 
                                            style="max-height: 80px; margin-top: 10px;">
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Update Hero</button>
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
        <form action="<?= base_url('insertHeroSection') ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field() ?>
                <input type="hidden" name="id" id="hero_id">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="heroModalLabel">Add/Edit Hero Section</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body row">
                        <div class="form-group col-md-6 mb-3">
                            <label>Title</label>
                            <input type="text" name="title" id="title" class="form-control">
                        </div>
                        <div class="form-group col-md-6 mb-3">
                            <label>Subtitle</label>
                            <input type="text" name="subtitle" id="subtitle" class="form-control">
                        </div>
                        <div class="form-group col-12 mb-3">
                            <label>Caurosel Image</label>
                            <input type="file" name="banner_image" id="banner_image" class="form-control" required>
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