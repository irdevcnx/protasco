<?php include 'ini.inc.php';?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
 <title>Protasco Berhad</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<!-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.2.0/css/all.min.css">
  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
  <link href="assets/css/custom.css" rel="stylesheet">


</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="<?=$co_link?>v2/index.php" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="img/logo.png" alt="">
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="<?=$co_link?>v2/index.php" target="_parent">Home</a></li>
          <li class="dropdown"><a href="#"><span>Discover Us</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="<?=$co_link?>v2/corporate-profile.php" target="_parent">Corporate Profile</a></li>
              <li class="dropdown"><a href="#"><span>Business Division</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="<?=$co_link?>v2/agriventure.php" target="_parent">Agriventure</a></li>
                  <li><a href="<?=$co_link?>v2/maintenance.php" target="_parent">Maintenance</a></li>
                  <li><a href="<?=$co_link?>v2/construction.php" target="_parent">Construction</a></li>
                  <li><a href="<?=$co_link?>v2/engineering.php" target="_parent">Engineering &amp; Consultancy Services</a></li>
                  <li><a href="<?=$co_link?>v2/property.php" target="_parent">Property</a></li>
                  <li><a href="<?=$co_link?>v2/trading.php" target="_parent">Trading &amp; Manufacturing</a></li>
                  <li><a href="<?=$co_link?>v2/energy.php" target="_parent">Energy</a></li>
                  <li><a href="<?=$co_link?>v2/hospitality.php" target="_parent">Hospitality</a></li>
                </ul>
              </li>
              <li><a href="<?=$co_link?>v2/corporate-structure.php" target="_parent">Corporate Structure</a></li>
              <li><a href="<?=$co_link?>v2/board-of-directors.php" target="_parent">Board of Directors</a></li>
              <li><a href="<?=$co_link?>v2/senior-management-team.php" target="_parent">Senior Management Team</a></li>
              <li><a href="<?=$co_link?>v2/accreditations.php" target="_parent">Accreditations &amp; Accolades</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Investor Relations</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="<?=$co_link?>investor/ir-home.php" target="_parent">IR Home</a></li>
              <li><a href="<?=$co_link?>investor/financial-reports.php" target="_parent">Financial Reports</a></li>
              <li class="dropdown"><a href="#"><span>Financial Information</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="<?=$co_link?>investor/latest-annual-financial.php" target="_parent">Latest Annual Financials</a></li>
                  <li><a href="<?=$co_link?>investor/latest-quarterly-financial.php" target="_parent">Latest Quarterly Financials</a></li>
                  <li><a href="<?=$co_link?>investor/financial-highlights.php" target="_parent">Financial Highlights</a></li>
                  <li><a href="<?=$co_link?>investor/shareholdings.php" target="_parent">Shareholdings</a></li>
                </ul>
              </li>
              <li><a href="<?=$co_link?>investor/corporate-governance.php" target="_parent">Corporate Governance</a></li>
              <li><a href="<?=$co_link?>investor/announcement.php" target="_parent">Bursa Announcements</a></li>
              <li class="dropdown"><a href="#"><span>Stock Information</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="<?=$co_link?>investor/stock-information.php" target="_parent">Stock Quotes &amp; Interactive Chart</a></li>
                  <!-- <li><a href="<?=$co_link?>investor/historical-price.php" target="_parent">Historical Price</a></li> -->
                  <li><a href="<?=$co_link?>investor/calculator.php" target="_parent">Investment Calculator</a></li>
                </ul>
              </li>
              <li><a href="<?=$co_link?>investor/information-request.php" target="_parent">Information Request</a></li>
            </ul>
          </li>
          <!-- <li class="dropdown"><a href="#"><span>Publications</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="<?=$co_link?>v2/investor-relations/annual-reports.php" target="_parent">Annual Reports</a></li>
            </ul>
          </li> -->
          <li class="dropdown"><a href="<?=$co_link?>v2/sustainability.php" target="_parent"><span>Sustainability</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="<?=$co_link?>v2/sustainability.php" target="_parent">Sustainability</a></li>
              <li class="dropdown"><a href="#"><span>Our Sustainability Story</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="<?=$co_link?>v2/sustainability-commitment.php" target="_parent">Sustainability Commitment</a></li>
                  <li><a href="<?=$co_link?>v2/sustainability-engagement.php" target="_parent">Sustainability Engagement</a></li>
                  <li><a href="<?=$co_link?>v2/esg-related-policies.php" target="_parent">ESG-Related Policies</a></li>
                  <li><a href="<?=$co_link?>v2/sustainability-practices.php" target="_parent">Sustainability Practices</a></li>
                  <li><a href="<?=$co_link?>v2/i-am-protasco-IAP.php" target="_parent">IAP 3.0</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="#"><span>Environmental</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="<?=$co_link?>v2/preservation-and-conservation.php" target="_parent">Preservation and Conservation</a></li>
                  <li><a href="<?=$co_link?>v2/road-towards-net-zero-ghg-emissions.php" target="_parent">Road Towards Net Zero GHG Emissions</a></li>
                  <li><a href="<?=$co_link?>v2/sectoral-practices.php" target="_parent">Sectoral Practices</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="#"><span>Social</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="<?=$co_link?>v2/human-capital-and-development.php" target="_parent">Human Capital and Development</a></li>
                  <li><a href="<?=$co_link?>v2/digitalisation.php" target="_parent">Digitalisation</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="<?=$co_link?>v2/agm/2026/" target="_parent">AGM</a></li>
          <li><a href="https://careers.protasco.com.my/" target="_blank">Careers</a></li>
          <li><a href="<?=$co_link?>v2/contact.php" target="_parent">Contact Us</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <div class="ticker-wrapper">
    <div class="ticker-content">
        <span>End-of-day price on 26/11/2025 Price RM 0.230 Change (0) % Change (0) Rise (0.240) Fall (0.230) Volume (294800)</span>
        <span>End-of-day price on 26/11/2025 Price RM 0.230 Change (0) % Change (0) Rise (0.240) Fall (0.230) Volume (294800)</span>
    </div>
</div>