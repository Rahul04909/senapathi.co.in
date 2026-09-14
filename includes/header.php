<?php
/**
 * Senapathi Alliance - Master Header & SEO Framework
 * Corporate & Government Advisory
 */
$pageTitle = "Senapathi Alliance | Corporate & Government Advisory | Management & Technical Consulting";
$pageDescription = "Senapathi Alliance provides multidisciplinary management, technical, financial, and institutional advisory to government departments, PSUs, multilateral institutions, and public-private projects across India.";
$canonicalUrl = "https://senapathi.co.in/";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <!-- Primary SEO Meta Tags -->
  <title><?php echo htmlspecialchars($pageTitle); ?></title>
  <meta name="title" content="<?php echo htmlspecialchars($pageTitle); ?>">
  <meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>">
  <meta name="keywords" content="Senapathi Alliance, Senapathi India, Government Advisory, PSU Consulting, Real Estate Transaction Advisory, Infrastructure Consulting, CAG Empanelled CA Partner, HR Advisory, Impact Consulting, SROI, Digital Transformation, Public Procurement, PPP Advisory">
  <meta name="author" content="Senapathi Alliance">
  <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
  <link rel="canonical" href="<?php echo htmlspecialchars($canonicalUrl); ?>">

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?php echo htmlspecialchars($canonicalUrl); ?>">
  <meta property="og:title" content="<?php echo htmlspecialchars($pageTitle); ?>">
  <meta property="og:description" content="<?php echo htmlspecialchars($pageDescription); ?>">
  <meta property="og:image" content="assets/logo.png">
  <meta property="og:site_name" content="Senapathi Alliance">

  <!-- Twitter Meta Tags -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:url" content="<?php echo htmlspecialchars($canonicalUrl); ?>">
  <meta name="twitter:title" content="<?php echo htmlspecialchars($pageTitle); ?>">
  <meta name="twitter:description" content="<?php echo htmlspecialchars($pageDescription); ?>">
  <meta name="twitter:image" content="assets/logo.png">

  <!-- Favicon -->
  <link rel="icon" type="image/png" href="assets/logo.png">

  <!-- Google Fonts Preconnect & Fonts (Outfit & Inter) -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Outfit:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

  <!-- Component Stylesheets -->
  <link rel="stylesheet" href="assets/css/variables.css">
  <link rel="stylesheet" href="assets/css/header.css">
  <link rel="stylesheet" href="assets/css/hero.css">
  <link rel="stylesheet" href="assets/css/about.css">
  <link rel="stylesheet" href="assets/css/services.css">
  <link rel="stylesheet" href="assets/css/approach.css">
  <link rel="stylesheet" href="assets/css/industries.css">
  <link rel="stylesheet" href="assets/css/contact.css">
  <link rel="stylesheet" href="assets/css/modal.css">
  <link rel="stylesheet" href="assets/css/footer.css">

  <!-- Structured Data: Schema.org JSON-LD -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@graph": [
      {
        "@type": "Organization",
        "@id": "https://senapathi.co.in/#organization",
        "name": "Senapathi Alliance",
        "alternateName": "Senapathi India",
        "url": "https://senapathi.co.in/",
        "logo": {
          "@type": "ImageObject",
          "url": "https://senapathi.co.in/assets/logo.png",
          "caption": "Senapathi Corporate and Government Advisory"
        },
        "description": "Multidisciplinary management and technical consulting firm supporting government departments, PSUs, multilateral institutions, and public-private enterprises.",
        "address": {
          "@type": "PostalAddress",
          "addressCountry": "IN"
        },
        "contactPoint": {
          "@type": "ContactPoint",
          "contactType": "Customer and Institutional Advisory",
          "email": "contact@senapathi.co.in"
        }
      },
      {
        "@type": "WebSite",
        "@id": "https://senapathi.co.in/#website",
        "url": "https://senapathi.co.in/",
        "name": "Senapathi Alliance",
        "publisher": {
          "@id": "https://senapathi.co.in/#organization"
        }
      }
    ]
  }
  </script>
</head>
<body>

  <!-- Top Utility Announcement Bar -->
  <div class="top-bar">
    <div class="container">
      <div class="top-bar-left">
        <span class="top-badge">Multidisciplinary Advisory</span>
        <span class="top-bar-item">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
          </svg>
          Serving Government, PSUs & Multilateral Institutions
        </span>
      </div>
      <div class="top-bar-right">
        <a href="mailto:contact@senapathi.co.in" class="top-bar-item">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
          </svg>
          contact@senapathi.co.in
        </a>
        <span class="top-bar-item">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
          </svg>
          Partner CA Firm Empanelled with CAG of India
        </span>
      </div>
    </div>
  </div>

  <!-- Sticky Main Navbar -->
  <header class="site-header" id="siteHeader">
    <div class="container">
      <div class="header-inner">
        <!-- Logo -->
        <a href="index.php" class="brand-logo" aria-label="Senapathi Alliance Home">
          <img src="assets/logo.png" alt="Senapathi - Corporate and Government Advisory" width="220" height="52">
        </a>

        <!-- Desktop Navigation -->
        <nav class="main-nav" aria-label="Primary Navigation">
          <a href="#about" class="nav-link">About Us</a>
          <a href="#services" class="nav-link">Core Service Lines</a>
          <a href="#approach" class="nav-link">Our Approach</a>
          <a href="#industries" class="nav-link">Industries We Serve</a>
          <a href="#contact" class="nav-link">Contact</a>
        </nav>

        <!-- Header CTA Actions -->
        <div class="header-actions">
          <a href="#contact" class="btn btn-primary header-cta">
            <span>Request Consultation / RFP</span>
            <svg class="btn-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
            </svg>
          </a>
          <!-- Mobile Menu Toggle Button -->
          <button class="mobile-toggle" id="mobileToggle" aria-label="Open Mobile Menu">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
          </button>
        </div>
      </div>
    </div>
  </header>

  <!-- Mobile Drawer Overlay -->
  <div class="mobile-drawer-overlay" id="drawerOverlay"></div>

  <!-- Mobile Drawer Menu -->
  <aside class="mobile-drawer" id="mobileDrawer" aria-label="Mobile Navigation Menu">
    <div class="drawer-header">
      <img src="assets/logo.png" alt="Senapathi Logo">
      <button class="drawer-close" id="drawerClose" aria-label="Close Menu">
        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" style="width:20px;height:20px;">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
        </svg>
      </button>
    </div>

    <nav class="drawer-nav">
      <a href="#about" class="drawer-link">
        <span>About Senapathi</span>
        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
      </a>
      <a href="#services" class="drawer-link">
        <span>9 Core Service Lines</span>
        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
      </a>
      <a href="#approach" class="drawer-link">
        <span>Our Approach</span>
        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
      </a>
      <a href="#industries" class="drawer-link">
        <span>Industries We Serve</span>
        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
      </a>
      <a href="#contact" class="drawer-link">
        <span>Contact & RFP Submission</span>
        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
      </a>
    </nav>

    <div class="drawer-footer">
      <div class="drawer-contact-item">
        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
        </svg>
        <span>contact@senapathi.co.in</span>
      </div>
      <a href="#contact" class="btn btn-primary" style="width: 100%;">
        Request Consultation
      </a>
    </div>
  </aside>
