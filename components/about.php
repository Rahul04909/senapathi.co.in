<?php
/**
 * Senapathi Alliance - About Us Component
 * Modern Dribbble-Grade Layout with Executive Video Frame & Shining Text Effects
 */
?>
<section class="section-padding about-section" id="about">
  <div class="container">
    
    <!-- Section Header with Shining Text Effects -->
    <div class="section-header text-left">
      <div class="section-badge">
        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
        </svg>
        <span>Institutional Profile &amp; Mission</span>
      </div>
      <h2 class="section-title">
        Bridging Policy, Engineering, Finance &amp; <span class="shining-text">Digital Transformation</span>
      </h2>
    </div>

    <div class="about-grid">
      
      <!-- ===================================================================
           LEFT: Interactive Executive Video Frame
           =================================================================== -->
      <div class="about-visual">
        <div class="about-video-frame" id="aboutVideoTrigger" role="button" aria-label="Play Institutional Overview Video">
          
          <!-- Cinematic Video Poster Image -->
          <img 
            src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?auto=format&fit=crop&w=1200&q=80" 
            alt="Senapathi Alliance Executive Advisory Boardroom Briefing" 
            class="video-poster-img"
            loading="lazy"
          >

          <!-- Cinematic Gradient Filter -->
          <div class="video-overlay-gradient"></div>

          <!-- Video Top Status Bar -->
          <div class="video-top-bar">
            <span class="video-tag-pill">
              <svg style="width:13px;height:13px;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
              </svg>
              Executive Briefing • 4K HDR
            </span>

            <span class="video-live-rec">
              <span class="rec-pulse-dot"></span>
              REC • 02:45
            </span>
          </div>

          <!-- Central Pulsing Play Button -->
          <div class="video-play-center">
            <button class="video-play-btn" aria-label="Play Video Briefing">
              <svg fill="currentColor" viewBox="0 0 24 24">
                <path d="M8 5v14l11-7z"/>
              </svg>
            </button>
            <span class="video-play-caption">
              <span>Watch Institutional Overview</span>
              <svg style="width:14px;height:14px;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
              </svg>
            </span>
          </div>

          <!-- Bottom Control Bar with Real-Time Audio Waves -->
          <div class="video-bottom-controls">
            <div class="video-progress-track">
              <div class="video-progress-fill"></div>
            </div>

            <div class="video-controls-row">
              <div style="display:flex; align-items:center; gap:8px;">
                <!-- Audio Wave Visualizer Animation -->
                <div class="audio-wave-cluster">
                  <span class="audio-bar"></span>
                  <span class="audio-bar"></span>
                  <span class="audio-bar"></span>
                  <span class="audio-bar"></span>
                  <span class="audio-bar"></span>
                </div>
                <span>01:15 / 02:45 min</span>
              </div>

              <div style="display:flex; align-items:center; gap:12px;">
                <span style="display:inline-flex; align-items:center; gap:4px;">
                  <svg style="width:14px;height:14px;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.536 8.464a5 5 0 010 7.072m2.828-9.9a9 9 0 010 12.728M5.586 15H4a1 1 0 01-1-1v-4a1 1 0 011-1h1.586l4.707-4.707C10.923 3.663 12 4.109 12 5v14c0 .891-1.077 1.337-1.707.707L5.586 15z"></path>
                  </svg>
                  Stereo
                </span>
                <span style="font-weight:700; color:#38BDF8;">1080p 60FPS</span>
              </div>
            </div>
          </div>

        </div>

        <!-- Floating Glass Accreditation Card attached to video frame -->
        <div class="video-floating-badge">
          <div class="badge-seal-icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
            </svg>
          </div>
          <div class="video-badge-content">
            <h5>CAG Empanelled CA Assurance</h5>
            <p>Statutory audits, forensic accounting &amp; public expenditure governance.</p>
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
          Senapathi India is a multidisciplinary management and technical consulting firm combining sector knowledge, structured programme management, technical expertise, financial discipline, and digital capability.
        </p>

        <p class="about-body">
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
        <div style="display:flex; align-items:center; gap:16px; flex-wrap:wrap;">
          <a href="#services" class="btn btn-primary">
            <span>Explore All 9 Service Lines</span>
            <svg class="btn-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
            </svg>
          </a>

          <button type="button" class="btn btn-secondary" id="aboutVideoModalBtn" style="cursor:pointer;">
            <svg style="width:16px;height:16px;color:var(--color-primary-500);" fill="currentColor" viewBox="0 0 24 24">
              <path d="M8 5v14l11-7z"/>
            </svg>
            <span>Play Video Briefing</span>
          </button>
        </div>

      </div>

    </div>

  </div>
</section>

<!-- =========================================================================
     Interactive Video Briefing Modal Dialog
     ========================================================================= -->
<div class="video-modal-overlay" id="videoModalOverlay" role="dialog" aria-modal="true" aria-labelledby="videoModalTitle">
  <div class="video-modal-container">
    
    <div class="video-modal-header">
      <h4 id="videoModalTitle">
        <svg style="width:20px;height:20px;color:#38BDF8;" fill="currentColor" viewBox="0 0 24 24">
          <path d="M8 5v14l11-7z"/>
        </svg>
        Senapathi Alliance — Institutional Briefing &amp; Framework
      </h4>
      <button class="video-modal-close" id="videoModalClose" aria-label="Close Video Dialog">
        <svg style="width:20px;height:20px;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
        </svg>
      </button>
    </div>

    <div class="video-modal-player-wrap">
      <iframe 
        id="videoIframe"
        src="about:blank" 
        data-src="https://www.youtube-nocookie.com/embed/dQw4w9WgXcQ?autoplay=1&enablejsapi=1" 
        title="Senapathi Alliance Corporate Video Briefing" 
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
        allowfullscreen>
      </iframe>
    </div>

    <div class="video-modal-footer">
      <div style="display:flex; align-items:center; gap:8px;">
        <span style="display:inline-block; width:8px; height:8px; border-radius:50%; background:#10B981;"></span>
        <span>Multidisciplinary Consulting • Central &amp; State Government Advisory</span>
      </div>
      <div style="display:flex; gap:16px;">
        <span>CAG Empanelled CA Partner</span>
        <span>•</span>
        <span>9 Core Practice Lines</span>
      </div>
    </div>

  </div>
</div>
