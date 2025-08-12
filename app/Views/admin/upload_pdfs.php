<!DOCTYPE html>
<html>
<head>
    <title>Admin PDF Upload</title>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"> -->
</head>
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

</body>
</html>
