<?php
/**
 * Senapathi Alliance - About Us Component
 * Modern Dribbble-Grade Layout with Executive Video Frame & Shining Text Effects
 */
$basePath = isset($basePath) ? $basePath : '';
?>
<section class="section-padding about-section" id="about">
  <div class="container">
    
    <!-- Section Header with Shining Text Effects -->
    <div class="section-header">
      <div class="section-badge">
        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
        </svg>
        <span>Institutional Profile &amp; Mission</span>
      </div>
      <h2 class="section-title">
        Bridging Policy, Engineering, Finance &amp; <span class="shining-text">Digital Transformation</span>
      </h2>
      <p class="section-subtitle">
        Senapathi India is a multidisciplinary management and technical consulting firm combining sector knowledge, structured programme governance, and digital capability across the full assignment lifecycle.
      </p>
    </div>

    <div class="about-grid">
      
      <!-- ===================================================================
           LEFT: Executive Video Frame & Trust Accreditations
           =================================================================== -->
      <div class="about-visual">
        <div class="about-video-frame">
          <video 
            id="aboutFrameVideo" 
            class="about-frame-video-element" 
            src="<?php echo $basePath; ?>assets/videos/about-frame-video.mp4" 
            autoplay 
            muted 
            loop 
            playsinline 
            preload="auto"
          ></video>
        </div>

        <!-- Sleek Accreditation & Institutional Metrics Strip -->
        <div class="about-video-meta">
          <div class="video-meta-card">
            <div class="meta-icon-box">
              <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
              </svg>
            </div>
            <div class="meta-info">
              <h6>CAG Empanelled Partner CA Firm</h6>
              <p>Statutory audits, forensic accounting &amp; public expenditure governance.</p>
            </div>
          </div>

          <div class="video-meta-stats">
            <div class="meta-stat-item">
              <span class="stat-number">09</span>
              <span class="stat-label">Core Verticals</span>
            </div>
            <div class="meta-stat-divider"></div>
            <div class="meta-stat-item">
              <span class="stat-number">50+</span>
              <span class="stat-label">Advisory Lines</span>
            </div>
            <div class="meta-stat-divider"></div>
            <div class="meta-stat-item">
              <span class="stat-number">100%</span>
              <span class="stat-label">Audit Defensible</span>
            </div>
          </div>
        </div>
      </div>

      <!-- ===================================================================
           RIGHT: Narrative & Interactive Feature Cards
           =================================================================== -->
      <div class="about-text-content">
        
        <!-- Dynamic Rotating Focus Pill -->
        <div class="dynamic-focus-pill">
          <span class="dot"></span>
          <span>Empowering Government, PSUs &amp; Multilateral Institutions</span>
        </div>

        <p class="about-lead">
          From due diligence, project readiness, procurement, and EPC advisory to workforce systems, capacity building, monitoring and evaluation, process improvement, cybersecurity, and technology implementation, we provide support across the <strong style="color:var(--color-primary-900);">full assignment lifecycle</strong>.
        </p>

        <!-- 4 Interactive Feature Cards -->
        <div class="about-features-list">
          
          <div class="about-feature-card">
            <div class="about-feature-icon">
              <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
              </svg>
            </div>
            <div class="about-feature-text">
              <h5>Rigorous Compliance</h5>
              <p>Aligned with public procurement laws, CAG audit standards &amp; statutory policies.</p>
            </div>
          </div>

          <div class="about-feature-card">
            <div class="about-feature-icon">
              <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
              </svg>
            </div>
            <div class="about-feature-text">
              <h5>Integrated Capability</h5>
              <p>Eliminating silos across engineering, legal, financial &amp; digital verticals.</p>
            </div>
          </div>

          <div class="about-feature-card">
            <div class="about-feature-icon">
              <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
              </svg>
            </div>
            <div class="about-feature-text">
              <h5>Capacity Building</h5>
              <p>Strengthening client systems &amp; workforce so improvements endure long-term.</p>
            </div>
          </div>

          <div class="about-feature-card">
            <div class="about-feature-icon">
              <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
              </svg>
            </div>
            <div class="about-feature-text">
              <h5>Defensible Outcomes</h5>
              <p>Transparent evidence, SROI tracking &amp; audit-ready project documentation.</p>
            </div>
          </div>

        </div>

        <!-- Action Triggers -->
        <div class="about-actions-row">
          <a href="#services" class="btn btn-primary">
            <span>Explore All 9 Service Lines</span>
            <svg class="btn-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
            </svg>
          </a>

          <a href="#contact" class="btn btn-secondary">
            <span>Request Advisory Consultation</span>
            <svg class="btn-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
            </svg>
          </a>
        </div>

      </div>

    </div>

  </div>
</section>

