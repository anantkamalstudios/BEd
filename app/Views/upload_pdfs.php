<!DOCTYPE html>
<html>
<head>
    <title>Upload Two PDFs</title>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"> -->
</head>
<body class="p-4">

    <h2>Upload Brochure and Syllabus PDFs</h2>

    <?php if (session()->getFlashdata('error')): ?>
        <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
    <?php endif; ?>

    <form action="<?= base_url('pdf/upload') ?>" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label class="form-label">Brochure PDF</label>
            <input type="file" name="brochure_pdf" accept="application/pdf" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Syllabus PDF</label>
            <input type="file" name="syllabus_pdf" accept="application/pdf" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Upload & View</button>
    </form>

</body>
</html>

