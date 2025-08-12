<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<div class="page-inner">
    <!-- <h1 class="mb-4">NCTE Organization Page</h1>

    <?php if (session()->getFlashdata('success')): ?>
        <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
    <?php endif; ?>

    <form action="<?= base_url('admin/ncte_organization_page') ?>" method="post" enctype="multipart/form-data">

        <div class="card mb-4">
            <div class="card-header fw-bold">Hero Section</div>
            <div class="card-body">
                <div class="mb-3">
                    <label>Title</label>
                    <input type="text" name="hero_title" class="form-control"
                           value="<?= esc($record['hero_title'] ?? '') ?>">
                </div>
                <div class="mb-3">
                    <label>Button Name</label>
                    <input type="text" name="button_name" class="form-control"
                           value="<?= esc($record['button_name'] ?? '') ?>">
                </div>
                <div class="mb-3">
                    <label>Background Image</label>
                    <input type="file" name="hero_image" class="form-control">
                    <?php if (!empty($record['hero_image'])): ?>
                        <img src="<?= base_url('public/uploads/' . $record['hero_image']) ?>" 
                             class="img-thumbnail mt-2" width="200">
                    <?php endif; ?>
                </div>
                <div class="mb-3">
                    <label>Upload PDF</label>
                    <input type="file" name="pdf_file" class="form-control">
                    <?php if (!empty($record['pdf_file'])): ?>
                        <p class="mt-2">
                            <a href="<?= base_url('public/uploads/' . $record['pdf_file']) ?>" target="_blank">View PDF</a>
                        </p>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Save Page</button>
    </form>
</div> -->
<body class="p-4">

<h2>Upload Brochure & Syllabus PDFs</h2>

<?php if (session()->getFlashdata('success')): ?>
    <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
<?php endif; ?>
<?php if (session()->getFlashdata('error')): ?>
    <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
<?php endif; ?>

<form action="<?= base_url('pdf/upload') ?>" method="post" enctype="multipart/form-data" class="mb-4">
    <div class="mb-3">
        <label class="form-label">Brochure PDF</label>
        <input type="file" name="brochure_pdf" accept="application/pdf" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">Syllabus PDF</label>
        <input type="file" name="syllabus_pdf" accept="application/pdf" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Upload</button>
</form>

<?php if (!empty($latest)): ?>
    <h3>Preview</h3>
    <div class="row">
        <?php if (!empty($latest['brochure'])): ?>
            <div class="col-md-6">
                <h5>Brochure</h5>
                <iframe src="<?= base_url('uploads/pdfs/' . $latest['brochure']) ?>" width="100%" height="400px"></iframe>
            </div>
        <?php endif; ?>

        <?php if (!empty($latest['syllabus'])): ?>
            <div class="col-md-6">
                <h5>Syllabus</h5>
                <iframe src="<?= base_url('uploads/pdfs/' . $latest['syllabus']) ?>" width="100%" height="400px"></iframe>
            </div>
        <?php endif; ?>
    </div>
<?php endif; ?>
</div>

<?= $this->endSection() ?>
