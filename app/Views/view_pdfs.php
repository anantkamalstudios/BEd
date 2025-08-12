<!DOCTYPE html>
<html>
<head>
    <title>View PDFs</title>
</head>
<body>
    <h2>Uploaded PDFs</h2>

    <?php if (!empty($files['brochure'])): ?>
        <h4>Brochure</h4>
        <iframe src="<?= base_url('uploads/pdfs/' . $files['brochure']) ?>" width="100%" height="500px"></iframe>
    <?php endif; ?>

    <?php if (!empty($files['syllabus'])): ?>
        <h4>Syllabus</h4>
        <iframe src="<?= base_url('uploads/pdfs/' . $files['syllabus']) ?>" width="100%" height="500px"></iframe>
    <?php endif; ?>
</body>
</html>

