<?= $this->extend('layout/frontend') ?>
<?= $this->section('content') ?>

<style>
  /* Hero section */
  .hero-banner {
    position: relative;
    width: 100%;
    height: 400px;
    overflow: hidden;
  }

  .hero-banner img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  .hero-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
  }

  .hero-overlay h1 {
    font-size: 2rem;
    font-weight: bold;
    margin-bottom: 20px;
  }

  .video-gallery-title {
    text-align: center;
    font-size: 2rem;
    color: #2c3e50;
    margin-top: 40px;
    margin-bottom: 20px;
    font-weight: bold;
  }

  .video-box {
    background-color: #f7b731;
    padding: 10px;
    border-radius: 6px;
    text-align: center;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    height: 100%;
  }

  .video-box iframe {
    width: 100%;
    height: 200px;
    border-radius: 5px;
  }

  .video-title {
    margin-top: 10px;
    font-weight: bold;
    font-size: 1.1rem;
    color: #2d3436;
  }
</style>

<!-- Hero Section -->
<section class="hero-banner">
  <img src="<?= base_url('uploads/campus.jpg') ?>" alt="Brahma Valley Campus">
  <div class="hero-overlay">
    <div>
      <h1 class="text-light">Welcome to Brahma Valley B.Ed College</h1>
    </div>
  </div>
</section>

<!-- Video Gallery Section -->
<div class="container my-5">
  <h3 class="video-gallery-title text-center mb-4">Video Gallery</h3>
  <div class="row g-4">
    <?php 
      $videos = [
        'https://youtu.be/HsuhxIepv-A?si=z9-xVx3Or8botWLD',
        'https://youtu.be/HsuhxIepv-A?si=z9-xVx3Or8botWLD',
        'https://youtu.be/HsuhxIepv-A?si=z9-xVx3Or8botWLD',
        // Add more links here
      ];

      function convertToEmbedUrl($url) {
        // Extract video ID from short YouTube URL
        preg_match('/youtu\.be\/([^\?]+)/', $url, $matches);
        return isset($matches[1]) ? 'https://www.youtube.com/embed/' . $matches[1] : '';
      }

      foreach ($videos as $index => $videoUrl):
        $embedUrl = convertToEmbedUrl($videoUrl);
    ?>
      <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="video-box border rounded shadow-sm overflow-hidden">
          <div class="ratio ratio-16x9">
            <iframe src="<?= esc($embedUrl) ?>" frameborder="0" allowfullscreen></iframe>
          </div>
          <div class="video-title text-center py-2 fw-semibold">Video <?= count($videos) - $index ?></div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>


<?= $this->endSection() ?>

<?= $this->section('custom_script') ?>
<!-- Optional: You can add JS here if needed -->
<?= $this->endSection() ?>
