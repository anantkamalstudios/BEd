
<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<div class="page-inner">
    <h1 class="mb-4">About Us Page</h1>
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
    <form action="<?= base_url('save_ngspms') ?>" method="post" enctype="multipart/form-data">
        <?= csrf_field() ?>
        <input type="hidden" name="id" value="<?= esc($hero_board_member['id'] ?? '') ?>">

        <div class="card mb-4">
            <div class="card-header fw-bold">Hero Section</div>
            <div class="card-body">
                <div class="mb-3">
                    <label for="hero_title" class="form-label">Title</label>
                    <input type="text" name="hero_title" id="hero_title" class="form-control"
                        value="<?= esc($hero_board_member['hero_title'] ?? '') ?>" required>
                </div>

                <div class="mb-3">
                    <label for="hero_subtitle" class="form-label">Button Name</label>
                    <input type="text" name="button_name" id="button_name" class="form-control"
                        value="<?= esc($hero_board_member['hero_subtitle'] ?? '') ?>" required>
                </div>

                <div class="mb-3">
                    <label for="hero_image" class="form-label">Image</label>
                    <input type="file" name="hero_image" id="hero_image" class="form-control">
                    <?php if (!empty($hero_board_member['hero_image'])): ?>
                        <img src="<?= base_url('public/front_end/assets/img/' . $hero_board_member['hero_image']) ?>"
                            class="mt-2 rounded shadow-sm" style="max-height: 100px;" alt="Hero Image Preview">
                    <?php endif; ?>
                </div>

                <button type="submit" class="btn btn-primary"><?= isset($hero_board_member['id']) ? 'Update' : 'Save' ?> Hero</button>
            </div>
        </div>
    </form>


<br>
        <!-- Members -->
        <h2 class="page-title">Our Faculty & Leadership</h2>   
        <div class="text-end mb-3">
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addMemberModal">
                Add New Member
            </button>
        </div>
        <!-- Bootstrap Modal for Add New Member -->
        <div class="modal fade" id="addMemberModal" tabindex="-1" aria-labelledby="addMemberModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                <form action="<?= base_url('save_our_faculty') ?>" method="post" enctype="multipart/form-data">
                    <div class="modal-header">
                    <h5 class="modal-title" id="addMemberModalLabel">Add Our Faculty & Leadership</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-md-6">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                        <label>Designation</label>
                        <input type="text" name="designation" class="form-control" required>
                        </div>
                        <div class="col-md-12">
                        <label>Content</label>
                        <input type="text" name="department" class="form-control" required>
                        </div>
                        <div class="col-md-12">
                        <label>Image</label>
                        <input type="file" name="image" class="form-control" required>
                        </div>
                    </div>
                    </div>

                    <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </form>
                </div>
            </div>
        </div>

       <table class="table table-bordered">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Designation</th>
            <th>Content</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php if (!empty($faculty_members)) : ?>
            <?php foreach ($faculty_members as $index => $row) : ?>
                <tr>
                    <td><?= $index + 1 ?></td>
                    <td><?= esc($row['name']) ?></td>
                    <td><?= esc($row['designation']) ?></td>
                    <td><?= esc($row['department']) ?></td>
                    <td>
                        <?php if (!empty($row['faculty_image'])): ?>
                            <img src="<?= base_url('public/uploads/' . $row['faculty_image']) ?>" width="80" class="img-thumbnail">
                        <?php else: ?>
                            <span>No Image</span>
                        <?php endif; ?>
                    </td>
                    <td>
                        <!-- Edit Button -->
                        <a href="#" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editMemberModal<?= $row['id'] ?>"><i class="fas fa-edit"></i></a>

                        <!-- Delete Button -->
                        <a href="<?= base_url('delete_our_faculty/' . $row['id']) ?>" class="btn btn-sm btn-danger"
                           onclick="return confirm('Are you sure you want to delete this member?')"><i class="fas fa-trash-alt"></i></a>
                    </td>
                </tr>

                <!-- Include Edit Modal for each row -->
                <div class="modal fade" id="editMemberModal<?= $row['id'] ?>" tabindex="-1">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <form action="<?= base_url('update_our_faculty/' . $row['id']) ?>" method="post" enctype="multipart/form-data">
                                <?= csrf_field() ?>
                                <div class="modal-header">
                                    <h5 class="modal-title">Edit Faculty</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <label>Name</label>
                                            <input type="text" name="name" class="form-control" value="<?= esc($row['name']) ?>" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Designation</label>
                                            <input type="text" name="designation" class="form-control" value="<?= esc($row['designation']) ?>" required>
                                        </div>
                                        <div class="col-md-12">
                                            <label>Content</label>
                                            <input type="text" name="department" class="form-control" value="<?= esc($row['department']) ?>" required>
                                        </div>
                                        <div class="col-md-12">
                                            <label>Image</label>
                                            <input type="file" name="image" class="form-control">
                                            <?php if (!empty($row['faculty_image'])): ?>
                                                <img src="<?= base_url('public/uploads/' . $row['faculty_image']) ?>" class="img-thumbnail mt-2" width="100">
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            <?php endforeach; ?>
        <?php else : ?>
            <tr>
                <td colspan="6" class="text-center">No faculty members found.</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>


         <!-- About Our B.Ed. College -->

        <div class="card mb-4">
            <div class="card-header fw-bold">About Our B.Ed. College</div>
            <form action="<?= base_url('save_about_ng') ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field() ?>
                <input type="hidden" name="id" value="<?= esc($about['id'] ?? '') ?>">

                <div class="card-body">
                    <div class="mb-3">
                        <label>Overview</label>
                        <textarea name="overview" class="form-control summernote"><?= esc($about['overview'] ?? '') ?></textarea>
                    </div>

                    <div class="form-group col-12 mb-3">
                        <label>Image</label>
                        <input type="file" name="image" id="image" class="form-control">
                        <?php if (!empty($about['about_image'])): ?>
                            <img src="<?= base_url('public/uploads/' . $about['about_image']) ?>" alt="Desk Image" class="img-thumbnail mt-2" width="200">
                        <?php endif; ?>
                    </div>

                    <button type="submit" class="btn btn-primary">Save Page</button>
                </div>
            </form>
        </div>
        
    
</div>

<?= $this->endsection() ?>

<?= $this->section('custom_script') ?>

<?= $this->endsection() ?>
