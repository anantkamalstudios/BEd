<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<div class="page-inner">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="page-title">Frequently Asked Questions</h2>
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
            <th>Question</th>
            <th>Answer</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php if (!empty($faqs)): ?>
            <?php foreach ($faqs as $index => $faq): ?>
                <tr>
                    <td><?= $index + 1 ?></td>
                    <td><?= esc($faq['question']) ?></td>
                    <td><?= esc($faq['answer']) ?></td>
                    <td>
                        <!-- Edit Button (open modal) -->
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#editFaqModal<?= $faq['id'] ?>">
                            <i class="fas fa-edit"></i>
                        </button>

                        <!-- Delete Link -->
                        <a href="<?= base_url('delete_ques_ans/' . $faq['id']) ?>" 
                           class="btn btn-sm btn-danger"
                           onclick="return confirm('Are you sure you want to delete this?')">
                            <i class="fas fa-trash-alt"></i>
                        </a>
                    </td>
                </tr>

                <!-- Edit Modal -->
                <div class="modal fade" id="editFaqModal<?= $faq['id'] ?>" tabindex="-1" aria-labelledby="editFaqModalLabel<?= $faq['id'] ?>" aria-hidden="true">
                    <div class="modal-dialog">
                        <form action="<?= base_url('update_ques_ans/' . $faq['id']) ?>" method="post">
                            <?= csrf_field() ?>
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Edit FAQ</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label>Question</label>
                                        <input type="text" name="question" class="form-control" value="<?= esc($faq['question']) ?>" required>
                                    </div>
                                    <div class="mb-3">
                                        <label>Answer</label>
                                        <input type="text" name="answer" class="form-control" value="<?= esc($faq['answer']) ?>" required>
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
                <td colspan="4" class="text-center">No data available.</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>


    <!-- Modal -->
    <div class="modal fade" id="heroModal" tabindex="-1" aria-labelledby="heroModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <form action="<?= base_url('save_ques_ans') ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field() ?>
                <input type="hidden" name="id" id="hero_id">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="heroModalLabel">Add/Edit Frequently Asked Questions Section</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body row">
                        <div class="form-group col-md-6 mb-3">
                            <label>Question</label>
                            <input type="text" name="question" id="question" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6 mb-3">
                            <label>Answer</label>
                            <input type="text" name="answer" id="answer" class="form-control" required>
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
        <h2 class="page-title">What Our Students Say</h2>
        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#imageheroModal">Add New</button>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Content</th>
                <th>Name</th>
                <th>Designation</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
<?php if (!empty($testimonials)) : ?>
    <?php foreach ($testimonials as $index => $row) : ?>
        <tr>
            <td><?= $index + 1 ?></td>
            <td><?= substr(esc($row['content']), 0, 30) . '...' ?></td> 
            <td><?= esc($row['name']) ?></td>
            <td><?= esc($row['designation']) ?></td>
            <td>
                <!-- Edit Button -->
                <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#editTestimonialModal<?= $row['id'] ?>">
                    <i class="fas fa-edit"></i>
                </button>

                <!-- Delete Button -->
                <a href="<?= base_url('deleteTestimonial/' . $row['id']) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this?')">
                    <i class="fas fa-trash"></i>
                </a>
            </td>
        </tr>

        <!-- Edit Modal -->
        <div class="modal fade" id="editTestimonialModal<?= $row['id'] ?>" tabindex="-1" aria-labelledby="editTestimonialModalLabel<?= $row['id'] ?>" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <form action="<?= base_url('updateTestimonial/' . $row['id']) ?>" method="post">
                    <?= csrf_field() ?>
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Edit Testimonial</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body row">
                            <div class="form-group col-12 mb-3">
                                <label>Content</label>
                                <input type="text" name="content" class="form-control" value="<?= esc($row['content']) ?>" required>
                            </div>
                            <div class="form-group col-12 mb-3">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control" value="<?= esc($row['name']) ?>" required>
                            </div>
                            <div class="form-group col-12 mb-3">
                                <label>Designation</label>
                                <input type="text" name="designation" class="form-control" value="<?= esc($row['designation']) ?>" required>
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
<?php else : ?>
    <tr><td colspan="5" class="text-center">No testimonials found.</td></tr>
<?php endif; ?>
</tbody>

       
    </table>

    <!-- Modal -->
    <div class="modal fade" id="imageheroModal" tabindex="-1" aria-labelledby="imageheroModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <form action="<?= base_url('saveTestimonial') ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field() ?>
                <input type="hidden" name="id" id="hero_id">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="imageheroModalLabel">Add/Edit Image Section</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body row">
                        <div class="form-group col-12 mb-3">
                            <label>Content</label>
                            <input type="text" name="content" id="content" class="form-control" required>
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

</div>
<?= $this->endsection() ?>

<?= $this->section('custom_script') ?>

<?= $this->endsection() ?>