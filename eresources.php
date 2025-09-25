<?php include "header.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Educational Resources – Renewable Energy</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    /* Custom styles to make UI more attractive */
    .herosection{
    background: url('cooking/images/cresourcebg.jpg') center center/cover no-repeat;
    }
    .tab-content {
      background: #f9fafb;
      border-radius: 1rem;
      padding: 2rem;
      box-shadow: 0 4px 6px rgba(0,0,0,.05);
    }
    .resource-table th {
      background-color: #FFC106;
      color: #fff;
      text-align: center;
    }
    .resource-table td {
      vertical-align: middle;
    }
    .infographic-card img {
      border-radius: .75rem;
      object-fit: cover;
      height: 180px;
    }
    .video-card img {
      height: 180px;
      object-fit: cover;
    }
  </style>
</head>
<body>

<!-- Hero Section -->
<div class="herosection bg-warning text-light py-5 text-center">
  <div class="container text-light">
    <h1 class="display-5 fw-bold">Educational Resources</h1>
    <p class="lead">Explore and share renewable energy knowledge: downloads, infographics & videos</p>
    <a href="createresource.php" class="btn btn-warning btn-lg mt-3">Share Your Resource</a>
  </div>
</div>

<!-- Tabs Navigation -->
<div class="container py-5">
  <ul class="nav nav-tabs justify-content-center" id="resourceTabs" role="tablist">
    <li class="nav-item" role="presentation">
      <button class="nav-link active" id="downloads-tab" data-bs-toggle="tab" data-bs-target="#downloads" type="button" role="tab">Downloadable Resources</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="infographics-tab" data-bs-toggle="tab" data-bs-target="#infographics" type="button" role="tab">Infographics</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="videos-tab" data-bs-toggle="tab" data-bs-target="#videos" type="button" role="tab">Videos</button>
    </li>
  </ul>

  <div class="tab-content mt-4" id="resourceTabsContent">
    <!-- Downloadable Resources Table -->
    <div class="tab-pane fade show active" id="downloads" role="tabpanel">
      <div class="table-responsive">
        <table class="table table-hover align-middle resource-table">
          <thead>
            <tr>
              <th>Topic</th>
              <th>Description</th>
              <th>Content</th>
              <th>Download</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Ultimate Baking Guide</td>
              <td>Step-by-step guide to breads, cakes, and pastries.</td>
              <td><ul>
                <li>Ingredients lists and substitutions</li>
                <li>Temperature & timing charts</li>
                <li>Troubleshooting tips</li>
              </ul></td>
              <td class="text-center">
                <a href="downloads/solar-guide.pdf" class="btn btn-outline-warning btn-sm" download>Download</a>
              </td>
            </tr>
            <tr>
             <td>Ultimate Baking Guide</td>
              <td>Step-by-step guide to breads, cakes, and pastries.</td>
              <td><ul>
                <li>Ingredients lists and substitutions</li>
                <li>Temperature & timing charts</li>
                <li>Troubleshooting tips</li>
              </ul></td>
              <td class="text-center">
                <a href="downloads/wind-basics.pdf" class="btn btn-outline-warning btn-sm" download>Download</a>
              </td>
            </tr>
            <tr>
              <td>Ultimate Baking Guide</td>
              <td>Step-by-step guide to breads, cakes, and pastries.</td>
              <td><ul>
                <li>Ingredients lists and substitutions</li>
                <li>Temperature & timing charts</li>
                <li>Troubleshooting tips</li>
              </ul></td>
              <td class="text-center">
                <a href="downloads/hydro-toolkit.pdf" class="btn btn-outline-warning btn-sm" download>Download</a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <!-- Infographics Cards -->
    <div class="tab-pane fade" id="infographics" role="tabpanel">
      <div class="row g-4">
        <div class="col-md-4">
          <div class="card infographic-card h-100 shadow-sm">
            <img src="images/infographic1.jpg" class="card-img-top" alt="Infographic 1">
            <div class="card-body">
              <h5 class="card-title">Herbs & Spices Quick Reference</h5>
              <p class="card-text">Colorful chart of common herbs and their uses.</p>
              <a href="downloads/renewable-overview.png" class="btn btn-outline-warning btn-sm" download>Download Infographic</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card infographic-card h-100 shadow-sm">
            <img src="images/infographic2.jpg" class="card-img-top" alt="Infographic 2">
            <div class="card-body">
              <h5 class="card-title">Baking Measurement Conversions</h5>
              <p class="card-text">Handy infographic for converting cups, grams, and ounces.</p>
              <a href="downloads/wind-solar.png" class="btn btn-outline-warning btn-sm" download>Download Infographic</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card infographic-card h-100 shadow-sm">
            <img src="images/infographic3.jpg" class="card-img-top" alt="Infographic 3">
            <div class="card-body">
              <h5 class="card-title">Balanced Meal Builder</h5>
              <p class="card-text">Graphic showing how to build a healthy plate.</p>
              <a href="downloads/hydro-impact.png" class="btn btn-outline-warning btn-sm" download>Download Infographic</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Videos Cards -->
    <div class="tab-pane fade" id="videos" role="tabpanel">
      <div class="row g-4">
        <div class="col-md-4">
          <div class="card video-card h-100 shadow-sm">
            <img src="images/video1.jpg" class="card-img-top" alt="Video 1">
            <div class="card-body">
              <h5 class="card-title">Perfect Pasta from Scratch</h5>
              <p class="card-text">Walkthrough on making fresh pasta at home.Watch & Download this video</p>
              <a href="videos/solar-intro.mp4" class="btn btn-outline-warning btn-sm" download>Download Video</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card video-card h-100 shadow-sm">
            <img src="images/video2.jpg" class="card-img-top" alt="Video 2">
            <div class="card-body">
              <h5 class="card-title">Mastering Sauces: From Stock to Finish</h5>
              <p class="card-text">Learn how to make classic sauces in this downloadable video.</p>
              <a href="videos/wind-mechanics.mp4" class="btn btn-outline-warning btn-sm" download>Download Video</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card video-card h-100 shadow-sm">
            <img src="images/video3.jpg" class="card-img-top" alt="Video 3">
            <div class="card-body">
              <h5 class="card-title">Kitchen Hygiene in Action</h5>
              <p class="card-text">Download this video explaining  the demonstration of proper cleaning & storage practices.</p>
              <a href="videos/hydro-explained.mp4" class="btn btn-outline-warning btn-sm" download>Download Video</a>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php include "footer.php"; ?>